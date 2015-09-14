<?php
/**
 * Short description of class db_loginsysteem
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DbLoginsysteem
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
     * Short description of method gebruikerCheck
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function authenticate($gebruiker_user, $gebruiker_wachtwoord) {
		// Selecteer het account waarbij de gebruikersnaam en wachtwoord overeen komen met ingevulde gegevens
		$sql = "SELECT * FROM gebruiker WHERE gebruiker_user = '$gebruiker_user' AND gebruiker_wachtwoord = '$gebruiker_wachtwoord' LIMIT 1";
		$result=$this->db->dbquery($sql);
		//Kijk of er resultaten zijn
		$count=  mysqli_num_rows($result);
		return $count;
	}

} /* end of class db_loginsysteem */

?>