<?php

error_reporting(E_ALL);

/**
 * Cegelec 2 Renewed - class.Opleidingsblok.php
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
class Opleidingsblok
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
    public $opleidingsblok_id;

    /**
     * Short description of attribute opleiding_naam
     *
     * @access public
     * @var String
     */
    public $opleidingsblok_naam;

    /**
     * Short description of attribute opleiding_status
     *
     * @access public
     * @var Integer
     */

    public $opleidingsblok_omschrijving;
    
    public $opleidingsblok_actief;
    
    public $fk_opleiding_id;
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
        $this->db = new DbOpleidingsblok();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBC end
    }

    /**
     * Short description of method setOpleidingId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setOpleidingsblokId($id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCC begin
        $this->opleidingsblok_id = $id;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCC end
    }

    /**
     * Short description of method setOpleidingNaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setOpleidingsblokNaam($opleidingsblok)
            {
       $this->opleidingsblok_naam = $opleidingsblok;
        
    }
    
    /**
     * Short description of method setOpleidingStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    
    public function setOpleidingsblokOmschrijving($opleidingsblok){
        $this->opleidingsblok_omschrijving = $opleidingsblok;
              
    }
    
    /**
     * @return mixed
     */
    public function getOpleidingsblokActief()
    {
        return $this->opleidingsblok_actief;
    }
    
    public function getFkOpleidingId()
    {
        return $this->fk_opleiding_id;
        
    }
    /**
     * @param mixed $actief
     */
    public function setOpleidingsblokActief($opleidingsblok)
    {
        $this->opleidingsblok_actief = $opleidingsblok;
    }
    
    public function setFkOpleidingId($opleidingsblok)
    {
        $this->fk_opleiding_id = $opleidingsblok;
    }
    /**
     * Short description of method getOpleidingById
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingsblokById($id)
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC4 begin
        return $this->db->getOpleidingsblokById($id);
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC4 end
    }
    public function getOpleidingsblokByActief($opleidingsblok_naam) {
        $query = "SELECT * FROM opleidingsblok WHERE (opleidingsblok_naam = '$opleidingsblok_naam')"
                . "AND (opleidingsblok_actief= 1)";

        $this->dbQuery($query);
        $user = $this->dbFetchAll($query);

        if ($user == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            return $user;
        }
    }
    /**
     * Short description of method getOpleidingId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingsblokId()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC6 begin
        return $this->opleidingsblok_id;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC6 end
    }

    /**
     * Short description of method getOpleidingNaam
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingsblokNaam()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC8 begin
        return $this->opleidingsblok_naam;
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC8 end
    }
    /**
     * Short description of method getOpleidingStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    
    public function getOpleidingsblokOmschrijving () {
        
        return $this->opleidingsblok_omschrijving;
    }
    

    /**
     * Short description of method getOpleidingList
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingsblokList()
    {
        
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCA begin
        return $this->db->getOpleidingsblokList();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CCA end
    }

    /**
     * Short description of method createOpleiding
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function createOpleidingsblok()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBE begin
        $this->db->setOpleidingsblokNaam($this->opleidingsblok_naam);
        $this->db->setOpleidingsblokOmschrijving($this->opleidingsblok_omschrijving);
        $this->db->setOpleidingsblokActief($this->opleidingsblok_actief);
        $this->db->setFkOpleidingId($this->fk_opleiding_id);
        $this->db->createOpleidingsblokDb();
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CBE end
    }

    /**
     * Short description of method updateOpleiding
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateOpleidingsblok($id)
    {
       
        
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC0 begin
        $this->db->setOpleidingsblokNaam($this->opleidingsblok_naam);
        $this->db->setOpleidingsblokOmschrijving($this->opleidingsblok_omschrijving);
        $this->db->setOpleidingsblokActief($this->opleidingsblok_actief);
        $this->db->setFkOpleidingId($this->fk_opleiding_id);
        $this->db->updateOpleidingsblokDb($id);
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC0 end
    }

    /**
     * Short description of method deleteOpleidingsblok
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteOpleidingsblok()
    {
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC2 begin
           return $this->db->deleteOpleidingsblok($id);
        // section -84-19-69-71-760cb3f:14bee879415:-8000:0000000000000CC2 end
    }
    
    public function getByOpleiding($opleiding_id) {
        return $this->db->getByOpleiding($opleiding_id);
    }

} /* end of class Opleiding */