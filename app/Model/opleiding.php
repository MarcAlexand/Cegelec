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
    private $db;
    /**
     * Short description of attribute opleiding_id
     *
     * @access public
     * @var Integer
     */
    public $opleiding_id;

    /**
     * Short description of attribute opleiding_naam
     *
     * @access public
     * @var String
     */
    public $opleiding_naam;

    /**
     * Short description of attribute opleiding_status
     *
     * @access public
     * @var Integer
     */

    public $opleiding_start_datum;
    
    public $opleiding_eind_datum;
    
    public $opleiding_niveau;
   
    public $opleiding_duur;
    
    public $opleiding_actief;
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
    public function setOpleidingId($id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCC begin
        $this->opleiding_id = $id;
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
       $this->opleiding_naam = $opleiding;
        
    }
    
    /**
     * Short description of method setOpleidingStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    
    public function setOpleidingStartDatum($opleiding){
        $this->opleiding_start_datum = $opleiding;
              
    }
    
    public function setOpleidingEindDatum($opleiding){
        $this->opleiding_eind_datum = $opleiding;
              
    }
    
    public function setOpleidingNiveau($opleiding){
        $this->opleiding_niveau = $opleiding;
              
    }
     
    public function setOpleidingDuur($opleiding){
        $this->opleiding_duur = $opleiding;
              
    }
     public function getSessieId()
    {
        return $this->sessie_id;
    }

    /**
     * @param mixed $sessie_id
     */
    public function setSessieId($sessie_id)
    {
        $this->sessie_id = $sessie_id;
    }

    /**
     * @return mixed
     */
    public function getOpleidingActief()
    {
        return $this->opleiding_actief;
    }

    /**
     * @param mixed $actief
     */
    public function setOpleidingActief($opleiding)
    {
        $this->opleiding_actief = $opleiding;
    }

    /**
     * Short description of method getOpleidingById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingById($id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC4 begin
        return $this->db->getOpleidingById($id);
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
    
    public function getOpleidingStartDatum () {
        
        return $this->opleiding_start_datum;
    }
    
    public function getOpleidingEindDatum () {
        
        return $this->opleiding_eind_datum;
    }
    
    public function getOpleidingNiveau (){
        
        return $this->opleiding_niveau;
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
        $this->db->setOpleidingNaam($this->opleiding_naam);
        $this->db->setOpleidingStartDatum($this->opleiding_start_datum);
        $this->db->setOpleidingEindDatum($this->opleiding_eind_datum);
        $this->db->setOpleidingNiveau($this->opleiding_niveau);
        $this->db->setOpleidingDuur($this->opleiding_duur);
        $this->db->setOpleidingActief($this->opleiding_actief);
        $this->db->createOpleidingDb();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBE end
    }

    /**
     * Short description of method updateOpleiding
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateOpleiding($id)
    {
       
        
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC0 begin
         $this->db->setOpleidingNaam($this->opleiding_naam);
        $this->db->setOpleidingStartDatum($this->opleiding_start_datum);
        $this->db->setOpleidingEindDatum($this->opleiding_eind_datum);
        $this->db->setOpleidingNiveau($this->opleiding_niveau);
        $this->db->setOpleidingDuur($this->opleiding_duur);
        $this->db->setOpleidingActief($this->opleiding_actief);
        $this->db->updateOpleidingDb($id);
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
           return $this->dbOpleiding->deleteOpleiding($id);
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC2 end
    }
    
    public function getOpleidingByName($opleiding_naam){
        return $this->db->getOpleidingByName($opleiding_naam);
    }

} /* end of class Opleiding */

?>