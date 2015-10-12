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
    private $locatie_plaats;

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
    
    
    public function getLocatiePlaats(){
        return $this->locatie_plaats;
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
    public function createLocatieDb($locatie_naam, $locatie_plaats, $locatie_actief ) {
         echo __FILE__.__LINE__.__FUNCTION__.'<br />';
         echo '<pre>';
         var_dump($locatie_naam, $locatie_plaats);
         echo '</pre>';
        $query = "INSERT INTO `cegelec`.`locatie` (
                `locatie_naam` ,
                `locatie_plaats`,
                `locatie_actief`
                )
                  VALUES (
                '" . $locatie_naam . "',   
                '" . $locatie_plaats . "',
                '" . $locatie_actief . "'
                );";
        var_dump($query);
        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->locatie_naam = $locatie_naam;
            $this->locatie_naam = $locatie_plaats;
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
    public function getLocatieByNaam($locatie_naam) {

        $query = "SELECT * FROM locatie WHERE locatie_naam = '$locatie_naam'";
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
            `locatie_id` = " . $locatie_id;
        // haalt de array op aan de hand van database's fetchDbArray function.
        // als het null is,
         $this->dbquery($query);
        
        $data = $this->dbFetchArray($query);
        return $data;
    }

    /**
     * Gets de volledige database array.
     * @return boolean
     */
    public function getLocatieListDb() {
        // Query selecteert de gebruiker aan de hand van class vars.
        $query = "SELECT * FROM  `locatie` ORDER BY  `locatie`.`locatie_naam` ASC";
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
        
        foreach($result as $idx => $row){
            $locatie_object[$row['locatie_id']] = new Locatie(new DbLocatie());
            
            $locatie_object[$row['locatie_id']]->setLocatieId($this->dbOutString($row['locatie_id']));
            $locatie_object[$row['locatie_id']]->setLocatieNaam($this->dbOutString($row['locatie_naam']));
            $locatie_object[$row['locatie_id']]->setLocatiePlaats($this->dbOutString($row['locatie_plaats']));
            $locatie_object[$row['locatie_id']]->setLocatieActief($this->dbOutString($row['locatie_actief']));
            
        }
        
        return $locatie_object;
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
    public function updateLocatieDb($locatie_naam, $locatie_plaats, $locatie_actief, $locatie_id) {
        // Query updates the item using inserted parameters. 
        $query = "UPDATE `locatie` 
                    SET `locatie_naam` = '" . $locatie_naam . "',
                        `locatie_plaats` = '" . $locatie_plaats."',
                        `locatie_actief` = '" . $locatie_actief . "' WHERE
                        `locatie_id` =" . $locatie_id;
        
        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->locatie_naam = $locatie_naam;
            $this->locatie_plaats = $locatie_plaats;
            $this->locatie_actief = $locatie_actief;
            $this->locatie_id = $locatie_id;
        }
    }
    
    public function getLocatieByActiefDb($locatie_naam) {
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DEF begin
        $query = "SELECT * FROM locatie WHERE (locatie_naam = '$locatie_naam')"
                . "AND (locatie_actief= 1)";

        $this->dbQuery($query);
        $locatie = $this->dbFetchAll($query);

        if ($lcoatie == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            return $locatie;
        }
        // section -64--88-2-12-43daa01f:14c8e4f8854:-8000:0000000000000DEF end
    }

}