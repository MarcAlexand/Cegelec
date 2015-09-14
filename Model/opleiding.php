<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.Opleiding.php
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
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CAC-includes begin
require_once FILE_DB_OPLEIDING;
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CAC-includes end

/* user defined constants */
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CAC-constants begin
// section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CAC-constants end

/**
 * Short description of class Opleiding
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class Opleiding
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute opleiding_id
     *
     * @access public
     * @var Integer
     */
    public $opleiding_id = null;

    /**
     * Short description of attribute opleiding_naam
     *
     * @access public
     * @var String
     */
    public $opleiding_naam = null;

    /**
     * Short description of attribute opleiding_status
     *
     * @access public
     * @var Integer
     */
    public $opleiding_status = null;

    public $opleiding_startdatum =  null;
    
    public $opleiding_einddatum =  null;
    
    public $opleiding_niveau = null;
    
    public $opleiding_voortgang = null;
    
    public $opleiding_duur = null;
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
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBC begin
        $this->db = new DbOpleiding();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBC end
    }

    /**
     * Short description of method setOpleidingId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setOpleidingId()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCC begin
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCC end
    }

    /**
     * Short description of method setOpleidingNaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setOpleidingNaam($opleiding)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCE begin
        $this->opleiding_naam = $opleiding;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCE end
    }
    
    /**
     * Short description of method setOpleidingStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setOpleidingStatus($opleiding)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCE begin
        $this->opleiding_status = $opleiding;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCE end
    }
    
    public function setOpleidingStartDatum($opleiding){
        $this->opleiding_startdatum = $opleiding;
              
    }
    
    public function setOpleidingEindDatum($opleiding){
        $this->opleiding_einddatum = $opleiding;
              
    }
    
    public function setOpleidingNiveau($opleiding){
        $this->opleiding_niveau = $opleiding;
              
    }
    
    public function setOpleidingVoortgang($opleiding){
        $this->opleiding_voortgang = $opleiding;
              
    }
    
    public function setOpleidingDuur($opleiding){
        $this->opleiding_duur = $opleiding;
              
    }
    /**
     * Short description of method getOpleidingById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingById($opleiding_id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC4 begin
        return $this->db->getOpleidingById($opleiding_id);
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC4 end
    }

    /**
     * Short description of method getOpleidingId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingId()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC6 begin
        return $this->opleiding_id;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC6 end
    }

    /**
     * Short description of method getOpleidingNaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingNaam()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC8 begin
        return $this->opleiding_naam;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC8 end
    }
    
    /**
     * Short description of method getOpleidingStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingStatus()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC8 begin
        return $this->opleiding_status;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC8 end
    }
    
    public function getOpleidingStartDatum () {
        
        return $this->opleiding_startdatum;
    }
    
    public function getOpleidingEindDatum () {
        
        return $this->opleiding_einddatum;
    }
    
    public function getOpleidingNiveau (){
        
        return $this->opleiding_niveau;
    }
    
    public function getOpleidingVoortgang () {
        
        return $this->opleiding_voortgang;
    }
    
    public function getOpleidingDuur (){
        return $this->opleiding_duur;
    }
    /**
     * Short description of method getOpleidingList
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingList()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCA begin
        return $this->db->getOpleidingList();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCA end
    }

    /**
     * Short description of method createOpleiding
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function createOpleiding()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBE begin
        $this->DbOpleiding->createOpleidingDb(
                $this->setOpleidingNaam($this->opleiding_naam), 
                $this->setOpleidingStatus($this->opleiding_status));
                
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBE end
    }

    /**
     * Short description of method updateOpleiding
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateOpleiding()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC0 begin
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC0 end
    }

    /**
     * Short description of method deleteOpleiding
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteOpleiding()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC2 begin
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC2 end
    }

} /* end of class Opleiding */

?>