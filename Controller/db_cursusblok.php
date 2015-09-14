<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.db_cursusblok.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 21.04.2015, 11:36:21 with ArgoUML PHP module 
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
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B2E-includes begin
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B2E-includes end

/* user defined constants */
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B2E-constants begin
// section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B2E-constants end

/**
 * Short description of class db_cursusblok
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DbCursusblok
    extends Database
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute cursusblok_id
     *
     * @access public
     * @var Integer
     */
    public $cursusblok_id = null;

    /**
     * Short description of attribute cursusblok_naam
     *
     * @access public
     * @var String
     */
    public $cursusblok_naam = null;

    /**
     * Short description of attribute cursusblok_status
     *
     * @access public
     * @var Boolean
     */
    public $cursusblok_status = null;

    /**
     * Short description of attribute cursusblok_startdatum
     *
     * @access public
     * @var Integer
     */
    public $cursusblok_startdatum = null;

    /**
     * Short description of attribute cursusblok_einddatum
     *
     * @access public
     * @var Integer
     */
    public $cursusblok_einddatum = null;

    /**
     * Short description of attribute cursusblok_meetmoment
     *
     * @access public
     * @var Integer
     */
    public $cursusblok_meetmoment = null;

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
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B41 begin
        parent::__construct($this);
    	$this->db = new Database;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B41 end
    }

    /**
     * Short description of method setCursusblokId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setCursusblokId()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B53 begin
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B53 end
    }

    /**
     * Short description of method setCursusblokNaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setCursusblokNaam($cursusblok)
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B55 begin
        $this->cursusblok_naam = $cursusblok;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B55 end
    }

    /**
     * Short description of method setCursusblokStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setCursusblokStatus($cursusblok)
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B57 begin
        $this->cursusblok_status = $cursusblok;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B57 end
    }

    /**
     * Short description of method setCursusblokStartdatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setCursusblokStartdatum($cursusblok)
    {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C3 begin
        $this->cursusblok_startdatum = $cursusblok;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C3 end
    }

    /**
     * Short description of method setCursusblokEinddatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setCursusblokEinddatum($cursusblok)
    {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C7 begin
        $this->cursusblok_einddatum = $cursusblok;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C7 end
    }

    /**
     * Short description of method setCursusblokMeetmoment
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setCursusblokMeetmoment($cursusblok)
    {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019CB begin
        $this->cursusblok_meetmoment = $cursusblok;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019CB end
    }

    /**
     * Short description of method getCursusblokId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokId()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B43 begin
        return $this->cursusblok_id;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B43 end
    }

    /**
     * Short description of method getCursusblokNaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokNaam()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B45 begin
        return $this->cursusblok_naam;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B45 end
    }

    /**
     * Short description of method getCursusblokStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokStatus()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B47 begin
        return $this->cursusblok_status;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B47 end
    }

    /**
     * Short description of method getCursusblokList
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokList()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B49 begin
        // Query selects the item using class vars.
        $query = "SELECT * FROM  `cursusblok ORDER BY  `cursusblok`.`cursusblok_id` ASC";
        // fetches the array using Database's fetchDbArray function.
        // If it's null,
        if (!$this->dbquery($query)) {
            return false;
        }
        if(!($result = $this->dbFetchAll())){
            // set error.
            echo TXT_NO_DATA;
            return FALSE;
        }
        return $result;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B49 end
    }

    /**
     * Short description of method getCursusblokById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokById($cursusblok_id)
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B4B begin
        // Query selects the item using inserted parameter.
        $query = "SELECT * FROM `cursusblok` WHERE 
            `cursusblok_id` =". mysqli_real_escape_string($cursusblok_id) ."";
        // fetches the array using Database's fetchDbArray function.
        // If it's null,
        if (!$this->dbquery($query)) {
            return false;
        }
        if(!($result = $this->dbFetchAll())){
            // set error.
            echo TXT_NO_DATA;
            return FALSE;
        }
        return $result;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B4B end
    }

    /**
     * Short description of method getCursusblokStartdatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokStartdatum()
    {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C1 begin
        return $this->cursusblok_startdatum;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C1 end
    }

    /**
     * Short description of method getCursusblokEinddatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokEinddatum()
    {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C5 begin
        return $this->cursusblok_einddatum;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C5 end
    }

    /**
     * Short description of method getCursusblokMeetmoment
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursusblokMeetmoment()
    {
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C9 begin
        return $this->cursusblok_meetmoment;
        // section 10-0-3-34--4aa5dbbc:14be91c9fe9:-8000:00000000000019C9 end
    }

    /**
     * Short description of method createCursusblok
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function createCursusblokDb()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B4D begin
        $sql = "INSERT INTO cursusblok ("
                . "cursusblok_naam,"
                . "cursusblok_status"
                . "cursusblok_startdatum"
                . "cursusblok_einddatum"
                . "cursusblok_meetmoment) " 
                . "VALUES ("
                . " '".$this->cursusblok_naam."',"
                . " '".$this->cursusblok_status."'"
                . " '".$this->cursusblok_startdatum."'"
                . " '".$this->cursusblok_einddatum."'"
                . " '".$this->cursusblok_meetmoment."')";
        $this->db->dbquery($sql);
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B4D end
    }

    /**
     * Short description of method updateCursusblok
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateCursusblok()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B4F begin
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B4F end
    }

    /**
     * Short description of method deleteCursusblok
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteCursusblok()
    {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B51 begin
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000B51 end
    }

} /* end of class db_cursusblok */

?>