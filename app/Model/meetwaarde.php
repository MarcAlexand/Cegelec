<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.Meetwaarde.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 05.06.2015, 11:59:22 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}


// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DCE-includes begin
// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DCE-includes end

/* user defined constants */
// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DCE-constants begin
// section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DCE-constants end

/**
 * Short description of class Meetwaarde
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Meetwaarde
{
    // --- ASSOCIATIONS ---
    // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute evaluatie_datum
     *
     * @access private
     * @var Date
     */
    private $evaluatie_datum = null;

    /**
     * Short description of attribute due_datum
     *
     * @access private
     * @var Date
     */
    private $due_datum = null;

    /**
     * Short description of attribute evaluatie
     *
     * @access private
     * @var Varchar
     */
    private $evaluatie = null;

    /**
     * Short description of attribute evaluatie_id
     *
     * @access private
     * @var Integer
     */
    private $evaluatie_id = null;

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
    public function __construct(DbMeetwaarde $db = null)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DD8 begin
        $this->DbMeetwaarde = $db;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DD8 end
    }

    /**
     * Short description of method setDueDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setDueDatum($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DDA begin
        $this->due_datum = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DDA end
    }

    /**
     * Short description of method setEvaluatie
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setEvaluatie($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DDC begin
        $this->evaluatie = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DDC end
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
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DE8 begin
        $this->meetwaarde_gebruikerId = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DE8 end
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
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DEA begin
        $this->meetwaarde_cursusId = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DEA end
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
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DEC begin
        $this->evaluatie_datum = $meetwaarde;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DEC end
    }

    /**
     * Short description of method getDueDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getDueDatum()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DEE begin
        return $this->due_datum;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DEE end
    }

    /**
     * Short description of method getEvaluatie
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getEvaluatie()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF0 begin
        return $this->evaluatie;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF0 end
    }

    /**
     * Short description of method getMeetwaardeGebruikerId
     *
     * @access private
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    private function getMeetwaardeGebruikerId()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF2 begin
        return $this->meetwaarde_gebruikerId;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF2 end
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
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF4 begin
        return $this->meetwaarde_cursusId;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000DF4 end
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
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1C begin
        return $this->evaluatie_datum;
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1C end
    }
    
    /**
     * Short description of method getEvaluatieDatum
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getMeetwaardeList()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1C begin
        //return $this->DbMeetwaarde->getMeetwaardeListDb();
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1C end
    }

    /**
     * Short description of method createMeetwaarde
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
    public function createMeetwaarde($array)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1E begin
        $this->setEvaluatie($array['evaluatie']);
        $this->setEvaluatieDatum($array['evaluatie_datum']);
        $this->setDueDatum($array['due_datum']);
        $this->setMeetwaardeGebruikerId($array['meetwaarde_gebruikerId']);
        $this->setMeetwaardeCursusId($array['meetwaarde_cursusId']);
        $meetwaarde = new DbMeetwaarde();
        $meetwaarde->createMeetwaardeDb();
        
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E1E end
    }

    /**
     * Short description of method updateMeetwaarde
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
    public function updateMeetwaarde($meetwaarde)
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E20 begin
        $this->DbMeetwaarde->updateMeetwaardeDb($this->due_datum, $this->evaluatie, $this->evaluatie_datum, $this->evaluatie_id, $this->meetwaarde_cursusId, $this->meetwaarde_gebruikerId );
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E20 end
    }

    /**
     * Short description of method deleteMeetwaarde
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteMeetwaarde()
    {
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E22 begin
        $this->DbMeetwaarde->deleteMeetwaardeDb($this->meetwaarde_id);
        // section 10-0-3-42--48fed505:14dc2ee5671:-8000:0000000000000E22 end
    }

} /* end of class Meetwaarde */

?>