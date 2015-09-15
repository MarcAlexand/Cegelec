<?php
ob_start();
/**
 * Short description of class LoginsysteemModel
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Login
    
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute password
     *
     * @access public
     * @var String
     */
    public $password = null;
    
    /**
     * Short description of attribute db
     *
     * @access private
     * @var String
     */
    private $db = null;
    
    /**
     * Short description of attribute session
     *
     * @access public
     * @var String
     */
    public $session = null;
    
    /**
     * Short description of attribute gebruiker_wachtwoord
     *
     * @access public
     * @var String
     */
    private $user = null;
    
    /**
     * Short description of attribute gebruiker_wachtwoord
     *
     * @access public
     * @var String
     */
    private $dbuser = null;
    private $gebruiker_wachtwoord;
    private $gebruiker_user;

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function __construct()
    {
        // Nieuw object van Gebruiker
		$this->dbuser = new DbGebruiker();
		$this->user = new Gebruiker($this->dbuser);

		// Nieuw object van DbLoginSysteem
		$this->db = new DbLoginsysteem;
		// Nieuw object van Session
		$this->session = new Session;
    }

    /**
     * Short description of method authenticate
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function authenticate()
    {
        return $this->db->authenticate($this->gebruiker_user, $this->gebruiker_wachtwoord);
    }
    
    /**
     * Short description of method aisloggedin
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    
    public function isloggedin() {
		if(isset($_SESSION['gebruiker_user'])) {
			// Return true als session bestaat
			return true;
		} else {
			//echo "Jammer probeer het nog een keer";
			return false;
		}
	}
        
        /*
	* Voert controles uit, maakt dan session aan en dan ben je ingelogd :D 
	*/
	public function login() {
		// Kijk of je nog niet ingelogd bent
		if(!$this->isloggedin()) {
			// Zoniet, kijk of gegevens kloppen
			if($this->authenticate()) {
				// Haal gebruikergegevens op en maak session aan.
				$user = $this->dbuser->getGebruikerByActiefDb($this->gebruiker_user);
				return $this->session->create($user);
			} else {
				// Als gegevens niet kloppen laat dan dit zien.
				echo "Naam of wachtwoord is fout.";
			}
		} else {
			// Als je wel al ingelogd bent
			echo "U bent al ingelogd.";
		}
	}
        
        /*
	* Voer functie in Session uit.
	* Logt de gebruiker uit
	*/ 
        
	public function logout() {
		$this->session->logout();
	}

	/*
	* Set de $gebruiker_user attribuut
	*/
        
	public function setGebruikerUser($gebruiker_user) {
		$this->gebruiker_user = $gebruiker_user;
	}

	/*
	* get de $gebruiker_user attribuut
	*/
        
	public function getUsername() {
		return $this->gebruiker_user;
	}

	/*
	* Set de password attribuut en hash hem met sha1
	*/
        
	public function setGebruikerWachtwoord($gebruiker_wachtwoord) {
		$this->gebruiker_wachtwoord = $gebruiker_wachtwoord;
	}

	/*
	* get de password attribuut
	*/
        
	public function getGebruikerWachtwoord() {
		return $this->gebruiker_wachtwoord;
	}

} /* end of class LoginsysteemModel */

?>
