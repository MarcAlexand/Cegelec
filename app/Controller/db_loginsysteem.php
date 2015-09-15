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

        $result = $this->db->dbQuery($sql);
        if (!$this->db->dbquery($sql)) {
            return false;
        }
        if (!($result = $this->db->dbFetchAll())) {
            // set error.
            echo TXT_NO_DATA;
            return FALSE;
        }
        var_dump($result);

	}

    public function verifyPassword($wachtwoord, $hash)
    {
        if(password_verify($wachtwoord, $hash)) {
            return true;
        }
        return false;
    }

}