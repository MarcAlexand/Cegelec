<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.GebruikerRechtModel.php
 *
 * $Id$
 *
 * This file is part of Cegelec 2 Renewed.
 *
 * Automatically generated on 27.03.2015, 11:08:28 with ArgoUML PHP module 
 * (last revised $Date: 2010-01-12 20:14:42 +0100 (Tue, 12 Jan 2010) $)
 *
 * @author firstname and lastname of author, <author@example.org>
 */

if (0 > version_compare(PHP_VERSION, '5')) {
    die('This file was generated for PHP 5');
}



/* user defined includes */
// section -84-19-79-127--5d57aaf1:14c26dc8191:-8000:0000000000001A90-includes begin
require_once FILE_M_RECHTBITFIELD;
require_once FILE_M_GEBRUIKER;
require_once FILE_M_RECHTGROEP;
// section -84-19-79-127--5d57aaf1:14c26dc8191:-8000:0000000000001A90-includes end

/* user defined constants */
// section -84-19-79-127--5d57aaf1:14c26dc8191:-8000:0000000000001A90-constants begin
// section -84-19-79-127--5d57aaf1:14c26dc8191:-8000:0000000000001A90-constants end

/**
 * Short description of class GebruikerRechtModel
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class GebruikerRecht
    
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute gebruiker
     *
     * @access public
     * @var Integer
     */
    public $gebruiker = null;

    /**
     * Short description of attribute recht
     *
     * @access public
     * @var Integer
     */
    public $recht = null;

    /**
     * Short description of attribute rechten
     *
     * @access public
     * @var Integer
     */
    public $rechten = null;

    /**
     * Short description of attribute rechtGroep
     *
     * @access public
     * @var Integer
     */
    public $rechtGroep = null;

    /**
     * Short description of attribute rechtGroepNaam
     *
     * @access public
     * @var Integer
     */
    public $rechtGroepNaam = null;

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
        $this->recht = new RechtBitfield();
        $this->rechtgroep = new RechtGroep();
    }

    /**
     * Short description of method setRecht
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setRecht($recht)
    {
        $this->recht = $recht;
    }

    /**
     * Short description of method setRechtGroepNaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setRechtGroepNaam($rechtgroepnaam)
    {
        $this->rechtgroep->setRechtGroepNaam($rechtgroepnaam);
    }

    /**
     * Short description of method getRechtgroepList
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getRechtgroepList()
    {
        $list = $this->rechtgroep->getRechtGroepList();
        return $list;
    }

    /**
     * Short description of method heeftRechten
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function heeftRechten($recht_array)
    {
        if(!empty($recht_positie)) {
            if($this->recht->heeftrechent($recht_array)) {
                return TRUE;
            }
        }
    }

    /**
     * Short description of method addRecht
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function addRecht()
    {
        // section -84-19-79-127--5d57aaf1:14c26dc8191:-8000:0000000000001AAF begin
        // $this->rechten->addRecht();
        // section -84-19-79-127--5d57aaf1:14c26dc8191:-8000:0000000000001AAF end
    }

    /**
     * Short description of method addRechtBeschrijving
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function addRechtBeschrijving($beschrijving)
    {
        $this->rechten->addRechtBeschrijving($beschrijving);
    }

    /**
     * Short description of method addRechtGroep
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function addRechtGroep()
    {
        $this->rechtgroep->saveRechtGroep();
    }

    /**
     * Short description of method addRechten
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function addRechten($recht_array)
    {
        if(!empty($recht_array)) {
            $this->recht->addRechten($recht_array);
        }
    }

    /**
     * Short description of method removeRecht
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function removeRecht($recht_positie)
    {
        if(!empty($recht_positie)) {
            $this->recht->removeRecht($recht_positie);
        }
    }

} /* end of class GebruikerRechtModel */

?>