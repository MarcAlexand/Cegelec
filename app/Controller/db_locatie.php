<?php

/**
 * @version 1.3
 * @author Marc de Boer
 * 
 * deze file doet:
 * - verbinding maken met DB
 * - de gebruiker tabel lezen/schrijven/updaten/deleten
 * 
 * */
class DbLocatie extends Database {

    /**
     * ID van gebruiker.
     * @var int
     */
    private $locatie_id;

    /**
     * Dit is de login naam van een gebruiker.
     * @var string
     */
    private $locatie_naam;

    /**
     * Dit is de login tijd van een gebruiker.
     * @var string
     */
    private $locatie_actief;

    /**
     * Calls Database's constructor. \
     * @return boolean
     */
    public function construct() {
        parent::__construct();
        //$this->db = new Database;
    }

    // Getters

    /**
     * Get locatie ID.
     * @return type locatie_id
     */
    public function getLocatieId() {
        return $this->locatie_id;
    }

    /**
     * Get locatie naam.
     * @return type locatie_naam
     */
    public function getLocatieNaam() {
        return $this->locatie_naam;
    }
    
    /**
     * @return type locatie_actief
     */
    public function getLocatieActief() {
        return $this->locatie_actief;
    }
    
    /**
     * add een locatie.
     * @param type $locatie_naam
     * @param type $locatie_actief
     * @return boolean
     */
    public function addLocatieDb($locatie_naam, $locatie_actief) {
        $rechten = serialize($rechten);
        $query = "INSERT INTO  `cegelec`.`locatie` (
                `locatie_id` ,
                `locatie_naam` ,
                `locatie_actief`
                )
                  VALUES (
                NULL, 
                '" . mysql_real_escape_string($locatie_naam) . "',   
                '" . $locatie_actief . "'
                );";
        
        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->locatie_naam = $locatie_naam;
            $this->locatie_actief = $locatie_actief;
            return true;
        }
    }

    /**
     * Delete een gebruiker.
     * @return boolean
     */
    public function deactivateLocatieDb($locatie_actief) {

    }
    /**
     * Selecteer gebruiker per gebruikers.
     * @param type $gebruiker_user
     * @return array
     */
    public function getLocatieByName($locatieNaam) {
        $query = "SELECT * FROM gebruiker WHERE locatie_naam = '$locatieNaam'";
        $this->dbquery($query);
        $user = $this->dbFetchAll($query);
        if ($user == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            return $user;
        }
    }
    /**
     * Selecteer gebruiker per ID.
     * @param type $gebruiker_id
     * @return boolean
     */
    public function getLocatieByIdDb($locatie_id) {
        // Query selecteert gebruiker aan de hand ingevoerde parameter.
        $query = "SELECT * FROM `locatie` WHERE 
            `locatie_id` = " . mysql_real_escape_string($locatie_id);
        // haalt de array op aan de hand van database's fetchDbArray function.
        // als het null is,
        $result = $this->dbquery($query);
        
        $data = $this->dbFetchArray($result);
        
    }

    /**
     * Gets de volledige database array.
     * @return boolean
     */
    public function getGebruikerListDb() {
        // Query selecteert de gebruiker aan de hand van class vars.
        $query = "SELECT * FROM  `gebruiker` ORDER BY  `gebruiker`.`gebruiker_naam` ASC";
        // haalt de array op aan de hand van database's fetchDbArray function.
        // als het null is,
        if (!$this->dbquery($query)) {
            return false;
        }
        if(!($result = $this->dbFetchAll())){
            // set error.
            echo TXT_NO_DATA;
            return FALSE;
        }
        return $result;
    }

    /**
     * Update de gebruiker.
     * @param type $gebruiker_naam
     * @param type $recht_groep_id
     * @param type $sessie_id
     * @param type $wachtwoord
     * @param type $gebruiker_id
     * @return boolean
     */
    public function updateGebruikerDb($gebruiker_naam, $rechten, $sessie_id, $gebruiker_wachtwoord, $gebruiker_id) {
        // serialize rights
        $rechten = serialize($rechten);
        // Query updates the item using inserted parameters. 
        $query = "UPDATE `gebruiker` 
                    SET `gebruiker_naam` = '" . mysqli_real_escape_string($gebruiker_naam) . "',
                        `gebruiker_recht` = '" . mysqli_real_escape_string($rechten) . "',
                        `sessie_id` = '" . mysqli_real_escape_string($sessie_id) . "',
                        `gebruiker_wachtwoord` = '" . mysqli_real_escape_string($gebruiker_wachtwoord) . "' WHERE
                        `gebruiker_id` =" . mysqli_real_escape_string($gebruiker_id);
        
        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->gebruiker_naam = $gebruiker_naam;
            $this->rechten = $rechten;
            $this->sessie_id = $sessie_id;
            $this->gebruiker_wachtwoord = $gebruiker_wachtwoord;
            $this->gebruiker_id = $gebruiker_id;
        }
    }

}