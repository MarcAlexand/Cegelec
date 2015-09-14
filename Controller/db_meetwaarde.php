<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.db_meetwaarde.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 11.06.2015, 09:05:05 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/* user defined includes */
// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF6-includes begin
require_once FILE_DB;
// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF6-includes end

/* user defined constants */
// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF6-constants begin
// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF6-constants end

/**
 * Short description of class db_meetwaarde
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DbMeetwaarde extends Database
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute meetwaarde_id
     *
     * @access public
     * @var Integer
     */
    public $meetwaarde_id = null;

    /**
     * Short description of attribute evaluatie_datum
     *
     * @access public
     * @var Date
     */
    public $evaluatie_datum = null;

    /**
     * Short description of attribute due_date
     *
     * @access public
     * @var Date
     */
    public $due_date = null;

    /**
     * Short description of attribute meetwaarde_gebruikerId
     *
     * @access public
     * @var Integer
     */
    public $meetwaarde_gebruikerId = null;

    /**
     * Short description of attribute meetwaarde_cursusId
     *
     * @access public
     * @var Integer
     */
    public $meetwaarde_cursusId = null;

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
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1A begin
        // parent ::construct();
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1A end
    }

    /**
     * Short description of method setMeetwaardeId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setMeetwaardeId($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E06 begin
        $this->meetwaarde_id = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E06 end
    }

    /**
     * Short description of method setEvaluatieDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setEvaluatieDatum($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E08 begin
        $this->evaluatie_datum = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E08 end
    }

    /**
     * Short description of method setDueDate
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setDueDate($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E0A begin
        $this->due_date = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E0A end
    }

    /**
     * Short description of method setMeetwaardeGebruikerId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setMeetwaardeGebruikerId($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E0C begin
        $this->meetwaarde_gebruikerId = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E0C end
    }

    /**
     * Short description of method setMeetwaardeCursusId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setMeetwaardeCursusId($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E0E begin
        $this->meetwaarde_cursusId = $gebruiker;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E0E end
    }

    /**
     * Short description of method getMeetwaardeId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getMeetwaardeId()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E10 begin
        return $this->meetwaarde_id;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E10 end
    }

    /**
     * Short description of method getEvaluatieDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getEvaluatieDatum()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E12 begin
        return $this->evaluatie_datum;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E12 end
    }

    /**
     * Short description of method getDueDate
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getDueDate()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E14 begin
        return $this->due_date;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E14 end
    }

    /**
     * Short description of method getMeetwaardeGebruikerId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getMeetwaardeGebruikerId()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E16 begin
        return $this->meetwaarde_gebruikerId;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E16 end
    }

    /**
     * Short description of method getMeetwaardeCursusId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getMeetwaardeCursusId()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E18 begin
        return $this->meetwaarde_cursusId;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E18 end
    }
    

    /**
     * Short description of method getMeetwaardeCursusId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getMeetwaardeListDb($meetwaarde_id)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E18 begin
        $query = "SELECT * FROM `meetwaarde` WHERE 
            `meetwaarde_id` =". mysqli_real_escape_string($meetwaarde_id) ."";
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
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E18 end
    }


    /**
     * Short description of method createMeetwaardeDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  $evaluatie_datum
     * @param  $due_datum
     * @param  $evaluatie
     * @param  $evaluatie_id
     * @param  $meetwaarde_gebruikerId
     * @param  $meetwaarde_cursusId
     * @return mixed
     */
    public function createMeetwaardeDb($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E36 begin
        $query = "INSERT INTO  `cegelec`.`meetwaarde` (
                `evaluatie_datum` ,
                `due_datum` ,
                `evaluatie`,
                `meetwaarde_gebruikerId` ,
                `meetwaarde_cursusId`
                )
                  VALUES (".
                "'" .$this->$this->dbInString($meetwaarde->getEvaluatieDatum())  . "', 
                '"  .$this->setDueDate($this->dbInString(($meetwaarde->due_datum))) . "',
                '"  .$this->setEvaluatie($this->dbInString(($meetwaarde->evaluatie))) . "',
                '"  .$this->setMeetwaardeGebruikerId($this->dbInString(($meetwaarde->meetwaarde_gebruikerId))) . "',
                '" . $this->setMeetwaardeCursusId($this->dbInString(($meetwaarde->meetwaarde_cursusId))) . "'
                )";
        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->evaluatie_datum = $evaluatie_datum;
            $this->due_date = $due_datum;
            $this->evaluatie = $evaluatie;
            $this->meetwaarde_gebruikerId = $meetwaarde_gebruikerId;
            $this->meetwaarde_cursusId = $meetwaarde_cursusId;
            return true;
        }
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E36 end
    }

    /**
     * Short description of method updateMeetwaardeDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  $evaluatie_datum
     * @param  $due_datum
     * @param  $evaluatie
     * @param  $evaluatie_id
     * @param  $meetwaarde_gebruikerId
     * @param  $meetwaarde_cursusId
     * @return mixed
     */
    public function updateMeetwaardeDb($evaluatie_datum, $due_datum, $evaluatie, $evaluatie_id, $meetwaarde_gebruikerId, $meetwaarde_cursusId)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E38 begin
        $query = "UPDATE `meetwaarde` 
                    SET `evaluatie_datum` = '" . $this->dbInString($evaluatie_datum) . "', 
                        `due_datum` = '" . $this->dbInString($due_datum) . "', 
                        `evaluatie` = '" . $this->dbInString($evaluatie) . "', 
                        `meetwaarde_cursusId` = '" . $this->dbInString($meetwaarde_cursusId) . "' WHERE   
                        `evaluatie_id` =" . $evaluatie_id; "',
                        `meetwaarde_gebruikerId` = '" . $this->dbInString($meetwaarde_gebruikerId) . "' WHERE   
                        `evaluatie_id` =" . $evaluatie_id;

        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->evaluatie_datum = $evaluatie_datum;
            $this->due_date = $due_date;
            $this->evaluatie = $evaluatie;
            $this->meetwaarde_cursusId = $meetwaarde_cursusId;
            $this->meetwaarde_gebruikerId = $meetwaarde_gebruikerId;
        }
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E38 end
    }

    /**
     * Short description of method deleteMeetwaardeDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteMeetwaardeDb($meetwaarde_id)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E3A begin
        $query = "DELETE FROM meetwaarde WHERE meetwaarde . meetwaarde_id = '" . $meetwaarde_id . "'  LIMIT 1 ";
        if (!$this->dbquery($query)) {
            return false;
        }
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E3A end
    }

} /* end of class db_meetwaarde */

?>