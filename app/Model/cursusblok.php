<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.Cursusblok.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 21.04.2015, 11:35:58 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}

/**
 * include Cursusblok_Controle
 *
 * @author firstname and lastname of author, <author@example.org>
 */

/* user defined includes */
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C3C-includes begin
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C3C-includes end

/* user defined constants */
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C3C-constants begin
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C3C-constants end

/**
 * Short description of class Cursusblok
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Cursusblok
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
     * @var String
     */
    public $cursusblok_status = null;

    /**
     * Short description of attribute cursublok_startdatum
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C52 begin
        $this->db = new DbCursusblok();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C52 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C6A begin
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C6A end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C6C begin
        $this->cursusblok_naam = $cursusblok;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C6C end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C6E begin
        $this->cursusblok_status = $cursusblok;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C6E end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C70 begin
        $this->cursusblok_startdatum = $cursusblok;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C70 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C72 begin
        $this->cursusblok_einddatum = $cursusblok;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C72 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C78 begin
        $this->cursusblok_meetmoment = $cursusblok;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C78 end
    }

    /**
     * Short description of method getCursublokId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getCursublokId()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C5A begin
        return $this->cursusblok_id;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C5A end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C5C begin
        return $this->cursusblok_naam;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C5C end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C5E begin
        return $this->cursusblok_status;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C5E end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C60 begin
        return $this->getCursusblokListDb();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C60 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C62 begin
        return $this->db->getCursusblokById($cursusblok_id);
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C62 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C64 begin
        return $this->cursublok_startdatum;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C64 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C66 begin
        return $this->cursusblok_einddatum;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C66 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C68 begin
        return $this->cursusblok_meetmoment;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C68 end
    }
    
    /**
     * Short description of method createCursusblok
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function createCursusblok()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C54 begin
        $this->db->setCursusblokNaam($this->cursusblok_naam);
        $this->db->setCursusblokStatus($this->cursusblok_status);
        $this->db->setCursusblokStartdatum($this->cursusblok_startdatum);
        $this->db->setCursusblokEinddatum($this->cursusblok_einddatum);
        $this->db->setCursusblokMeetmoment($this->cursusblok_meetmoment);
        $this->db->createCursusblokDb();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C54 end
    }

    /**
     * Short description of method upateCursusblok
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function upateCursusblok()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C56 begin
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C56 end
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C58 begin
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000C58 end
    }

} /* end of class Cursusblok */

?>