<?php
ob_start();
error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.LoginsysteemModel.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 27.03.2015, 11:08:28 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}


require_once FILE_DB_LOGINSTYSTEEM;
require_once FILE_M_SESSION;
/* user defined includes */
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C9E-includes begin
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C9E-includes end

/* user defined constants */
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C9E-constants begin
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C9E-constants end

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
		$this->user = new Gebruiker(new DbGebruiker());
                $this->dbuser = new DbGebruiker();
		// Nieuw object van DbLoginSysteem
		$this->db = new DbLoginSysteem;
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
        
	public function getGebruikerUser() {
		return $this->gebruiker_user;
	}

	/*
	* Set de password attribuut en hash hem met sha1
	*/
        
	public function setGebruikerWachtwoord($gebruiker_wachtwoord) {
		$this->gebruiker_wachtwoord = md5($gebruiker_wachtwoord);
	}

	/*
	* get de password attribuut
	*/
        
	public function getGebruikerWachtwoord() {
		return $this->gebruiker_wachtwoord;
	}

} /* end of class LoginsysteemModel */

?>
