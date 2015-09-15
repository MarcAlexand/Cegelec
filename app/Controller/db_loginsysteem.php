<?php
/**
 * Short description of class db_loginsysteem
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DbLoginsysteem extends database
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute gebruiker_user
     *
     * @access public
     * @var db_gebruiker
     */
    public $gebruiker_user = null;

    /**
     * Short description of attribute gebruiker_wachtwoord
     *
     * @access public
     * @var db_gebruiker
     */
    public $gebruiker_wachtwoord = null;
    
    private $db;

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
        $this->db = new Database;
    }

    /**
     * Check if account credentials are correct.
     *
     * @param $username
     * @param $wachtwoord
     * @return bool|int
     */
    public function authenticate($username, $wachtwoord) {
		// Selecteer het account waarbij de gebruikersnaam en wachtwoord overeen komen met ingevulde gegevens
		$sql = "SELECT * FROM gebruiker WHERE gebruiker_user = '$username' LIMIT 1";


        if ($this->db->dbQuery($sql)) {
            $result = $this->db->dbFetchAll()[0];
        }
        return password_verify($wachtwoord, $result['gebruiker_wachtwoord']);
	}

}