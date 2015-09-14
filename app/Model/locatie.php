<?php

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

    private $locatie_id;
    
    /**
     * Short description of attribute naam
     *
     * @access private
     * @since 17-02-14
     * @var String
     */
     
    private $locatie_naam;
    
    /**
     * Short description of attribute actief
     *
     * @access public
     * @var Boolean
     */
    
    private $locatie_actief;
    private $dbLocatie;


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
    public function __construct(DbLocatie $db = null) {
        $this->dbLocatie = $db;
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
    public function selectLocatieLijst()
    {
        // section 10-0-3-23-673998d2:1443efef047:-8000:0000000000000BC5 begin
        return $this->dbLocatie->getLocatielijstDb();
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
        try {
	        if((!is_string($$locatie_naam))){
				throw new Exception("De naam is geen stukje tekst");
			}
			if(strlen($locatie_naam) < 1 ){
				throw new Exception("De lengte van naam is te kort");
			}
			$this->locatie_naam = $locatie_naam;
        } catch (Exception $exc) {
	        echo $exc->getMessage(). '<br />';
	        echo $exc->getTraceAsString();
        }
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
    
    /**
     * De save functie wordt gebruikt om een locatie op te slaan in de
     * database.
     */
    public function addLocatie($locatie_naam) {
        $this->dbLocatie->addLocatieDb($this->locatie_naam,$this->locatie_actief);


        // Sla recht op basis van rechtgroep id (gebruiker_recht tabel)
    }



} /* end of class Locatie */

?>