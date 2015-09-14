<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.db_loginsysteem.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 27.03.2015, 11:31:19 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include database
 *
 * @author firstname and lastname of author, <author@example.org>
 */
require_once FILE_DB;

/* user defined includes */
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B5A-includes begin
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B5A-includes end

/* user defined constants */
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B5A-constants begin
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B5A-constants end

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