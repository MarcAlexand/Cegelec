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
class Locatie 
{
	// --- ASSOCIATIONS ---
    // generateAssociationEnd :     // generateAssociationEnd : 

    // --- ATTRIBUTES ---

    /**
     * Short description of attribute id
     *
     * @access private
     * @since 17-02-14
     * @var Integer.
     */

    private $locatie_id = null;
    
    /**
     * Short description of attribute naam
     *
     * @access private
     * @since 17-02-14
     * @var String
     */
     
    private $locatie_naam = null;
    private $locatie_plaats = null;


    /**
     * Short description of attribute actief
     *
     * @access public
     * @var Boolean
     */
    
    private $locatie_actief = null;
    private $DbLocatie;


	// --- OPERATIONS ---

    /**
     * Short description of method selectLocatieLijst
     *
     * @access public
     * @author Adra Philipse
     * @return mixed
     * @since 17-02-14
     * @version 1.0
     */
    public function __construct() {
        $this->DbLocatie = new DbLocatie();
    }

    // --- OPERATIONS ---

    /**
     * Short description of method selectLocatieLijst
     *
     * @access public
     * @author Adra Philipse
     * @return mixed
     * @since 17-02-14
     * @version 1.0
     */
    public function getLocatieList()
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BC5 begin
        return $this->DbLocatie->getLocatieListDb();
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BC5 end
    }
    
    /**
     * Short description of method getId
     *
     * @access public
     * @author Adra Philipse
     * @return mixed
     * @since 17-02-14
     * @version 1.0
     */
    public function getLocatieId()
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCA begin
        return $this->locatie_id;
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCA end
    }
    
    /**
     * Short description of method getNaam
     *
     * @access public
     * @author Adra Philipse
     * @return mixed
     * @since 17-02-14
     * @version 1.0
     */
    public function getLocatieNaam()
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCF begin
        return $this->locatie_naam;
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCF end
    }
    
    public function getLocatiePlaats()
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCF begin
        return $this->locatie_plaats;
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCF end
    }
     /**
     * Short description of method getActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getLocatieActief()
    {
        // section -84-29--19--27--4cca31ee:14ac931db09:-8000:0000000000000E52 begin
        return $this->locatie_actief;
        // section -84-29--19--27--4cca31ee:14ac931db09:-8000:0000000000000E52 end
    }
    
    	/**
     * Short description of method setId
     *
     * @access public
     * @author Adra Philipse
     * @param  id
     * @return mixed
     * @since 17-02-14
     * @version 1.0
     */
    public function setLocatieId($locatie_id)
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BC7 begin
        $this->locatie_id = $locatie_id;
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BC7 end
    }

    /**
     * Short description of method setNaam
     *
     * @access public
     * @author Adra Philipse
     * @param  naam
     * @return mixed
     * @since 17-02-14
     * @version 1.0
     */
    public function setLocatieNaam($locatie_naam)
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCC begin
        $this->locatie_naam = $locatie_naam;
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCC end
    }
    /**
     * Short description of method setNaam
     *
     * @access public
     * @author Adra Philipse
     * @param  naam
     * @return mixed
     * @since 17-02-14
     * @version 1.0
     */
    public function setLocatiePlaats($locatie_plaats)
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCC begin
        $this->locatie_plaats = $locatie_plaats;
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BCC end
    }
    /**
     * Short description of method setActief
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  actief
     * @return mixed
     */
    public function setLocatieActief($locatie_actief)
    {
        // section -84-29--19--27--4cca31ee:14ac931db09:-8000:0000000000000E4F begin
        $this->locatie_actief = $locatie_actief;
        // section -84-29--19--27--4cca31ee:14ac931db09:-8000:0000000000000E4F end
    }
    
    public function getLocatieByActief($locatie_actief) {
        return $this->DbLocatie->getLocatieByActief($locatie_actief);
    }
    
    public function getLocatieByNaam($locatie_naam){
        return $this->DbLocatie->getLocatieByNaam($locatie_naam);
    }
    
    public function getLocatieById($locatie_id) {
        return $this->DbLocatie->getLocatieByIdDb($locatie_id);
    }
    
    /**
     * De save functie wordt gebruikt om een locatie op te slaan in de
     * database.
     */
    public function createLocatie() {
         $this->DbLocatie->createLocatieDb(
                $this->getLocatieNaam(),
                $this->getLocatiePlaats(), 
                $this->getLocatieActief()
        );
    }
    /**
     * De update functie wordt gebruikt om een locatie te wijzigen in de
     * database.
     */
    public function updateLocatie() {
        $this->DbLocatie->updateLocatieDb(
                $this->getLocatieNaam(), 
                $this->getLocatiePlaats(), 
                $this->getLocatieActief()
        );
    }

} /* end of class Locatie */

?>