<?php
/**
 * Short description of class db_opleiding
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DbOpleidingsblok
    extends database
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute opleiding_id
     *
     * @access private
     * @var Integer
     */
    private $opleidingsblok_id;

    /**
     * Short description of attribute opleiding_naam
     *
     * @access private
     * @var String
     */
    private $opleidingsblok_naam;

    /**
     * Short description of attribute opleiding_status
     *
     * @access public
     * @var Integer
     */

    // --- OPERATIONS ---

    /**
     * Short description of method __construct
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public $opleidingsblok_omschrijving;
    
    
    public $opleidingsblok_actief;
    
    public $fk_opleiding_id;

    public function __construct()
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F3 begin
        parent::__construct();
    	
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F3 end
    }
    
    /**
     * Short description of method setOpleidingId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function setOpleidingsblokId($opleidingsblok)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000906 begin
        $this->opleidingsblok_id = $opleidingsblok;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000906 end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000908 begin
        $this->opleidingsblok_naam = $opleidingsblok;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000908 end
    }
    
    /**
     * Short description of method setOpleidingStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */

    public function setOpleidingsblokOmschrijving($opleidingsblok)
    {
        $this->opleidingsblok_omschrijving = $opleidingsblok;
    }
  
    public function setOpleidingsblokActief($opleidingsblok) {
        $this->opleidingsblok_actief = $opleidingsblok;
    }
    
    public function setFkOpleidingId($opleidingsblok) {
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FB begin
        // Query selects the item using inserted parameter.
        $query = "SELECT * FROM `opleidingsblok` WHERE 
            `opleidingsblok_id` =". ($id) ."";
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
        
//        foreach ($result as $idx => $row) {
//            $opleiding = new Opleiding(new DbOpleiding());
//            $opleiding->setOpleidingNaam($row['opleiding_naam']);
//            $opleiding->setOpleidingStartDatum($row['opleiding_start_datum']);
//            $opleiding->setOpleidingEindDatum($row['opleiding_eind_datum']);
//            $opleiding->setOpleidingNiveau($row['opleiding_niveau']);
//            $opleiding->setOpleidingDuur($row['opleiding_duur']);
//        }
//        return $opleiding;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FB end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FD begin
        return $this->opleidingsblok_id;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FD end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FF begin
        return $this->opleidingsblok_naam;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FF end
    }
    
    public function getOpleidingsblokOmschrijving()
    {
        return $this->opleidingsblok_omschrijving;
    }
    public function getOpleidingsblokActief() {    
        return $this->opleidingsblok_actief;
    }
    public function getFkOpleidingId() {
        return $this->fk_opleiding_id;
    }
        /**
    }
    }
     * Short description of method getOpleidingList
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function getOpleidingsblokList()
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000904 begin
        // Query selects the item using class vars.
        $query = "SELECT * FROM  `opleidingsblok` ORDER BY  `opleidingsblok`.`opleidingsblok_id` ASC";
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
//        
//        $return = array();
//        foreach( $result as $idx => $row){
//            $opleiding[$row['opleiding_id']] = new Opleiding(new DbOpleiding());
//            
//            $opleiding[$row['opleiding_id']]->setOpleidingId($this->dbOutString($row['opleiding_id']));
//            $opleiding[$row['opleiding_id']]->setOpleidingNaam($this->dbOutString($row['opleiding_naam']));
//            $opleiding[$row['opleiding_id']]->setOpleidingStartDatum($this->dbOutString($row['opleiding_start_datum']));
//            $opleiding[$row['opleiding_id']]->setOpleidingEindDatum($this->dbOutString($row['opleiding_eind_datum']));
//            $opleiding[$row['opleiding_id']]->setOpleidingNiveau($this->dbOutString($row['opleiding_niveau']));
//            $opleiding[$row['opleiding_id']]->setOpleidingDuur($this->dbOutString($row['opleiding_duur']));
//            $opleiding[$row['opleiding_id']]->setOpleidingActief((int)$row['opleiding_actief']);
//            
//            array_push($return, $opleiding);
//        }
//        return $return;
//        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000904 end
    }
    
    /**
     * Short description of method createOpleidingDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function createOpleidingsblokDb()
    {
        
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F5 begin
        $sql = "INSERT INTO  `cegelec`.`opleidingsblok` (
                `opleidingsblok_naam`,
                `opleidingsblok_omschrijving`,
                `opleidingsblok_actief`,
                `fk_opleiding_id`
                ) VALUES (
               '" . $this->opleidingsblok_naam . "',
                   '" . $this->opleidingsblok_omschrijving . "',
                       '" . $this->opleidingsblok_actief . "',
                           '" . $this->fk_opleiding_id . "'
                                   )";
   
            $result = $this->dbquery($sql);
   
        
            return true;
     //   if (!$this->dbquery($sql)) {
     //       return false;
      //  } else {
          //  $this->opleiding_naam = $opleiding_naam;
           // $this->opleiding_omschrijving = $opleiding_omschrijving;
           // $this->opleiding_start_datum = $opleiding_start_datum;
         //   $this->opleiding_eind_datum = $opleiding_eind_datum;
           // $this->opleiding_niveau = $opleiding_eind_datum;
           // $this->opleiding_duur = $opleiding_duur;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F5 end
        
    }

    /**
     * Short description of method updateOpleidingDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateOpleidingsblokDb($id)
    {
        
        //var_dump($id, $this);
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F7 begin
        $query = "UPDATE `opleidingsblok`
                    SET `opleidingsblok_naam` = '" . $this->opleidingsblok_naam . "',
                        `opleidingsblok_omschrijving` = '" . $this->opleidingsblok_omschrijving . "',
                        `opleidingsblok_actief` = '" . $this->opleidingsblok_actief . "',
                        `fk_opleiding_id` = '" . $this->fk_opleiding_id . "'
WHERE
                        `opleidingsblok_id` = '" . $id    . "'";


        if (!$this->dbquery($query)) {
            return false;
        } else {

           // header('Location: '. 'index.php?page=opleiding' );
            return true;
        }
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F7 end
    }

    /**
     * Short description of method deleteOpleidingDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteOpleidingsblokDb($id)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F9 begin
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F9 end
    }
    
    public function getByOpleiding($opleiding_id) {
        $sql = "SELECT * FROM `opleidingsblok` WHERE `fk_opleiding_id` = $opleiding_id";
        
        if (!$this->dbquery($sql)) {
            return false;
        }
        if(!($result = $this->dbFetchAll())){
            // set error.
            return FALSE;
        }
        
        return $result;
    }

}