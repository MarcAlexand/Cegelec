<?php
/**
 * Short description of class db_opleiding
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class DbOpleiding
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
    private $opleiding_id;

    /**
     * Short description of attribute opleiding_naam
     *
     * @access private
     * @var String
     */
    private $opleiding_naam;

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
    public $opleiding_start_datum;
    
    public $opleiding_eind_datum;
    
    public $opleiding_niveau;
    
    public $opleiding_duur;
    
    public $opleiding_actief;

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
    public function setOpleidingId($opleiding)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000906 begin
        $this->opleiding_id = $opleiding;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000906 end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000908 begin
        $this->opleiding_naam = $opleiding;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000908 end
    }
    
    /**
     * Short description of method setOpleidingStatus
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */

    public function setOpleidingStartDatum($opleiding)
    {
        $this->opleiding_start_datum = $opleiding;
    }
    
    public function setOpleidingEindDatum($opleiding)
    {
        $this->opleiding_eind_datum = $opleiding;  
    }
    
    public function setOpleidingNiveau($opleiding)
    {
        $this->opleiding_niveau = ($opleiding);
    }
    
    public function setOpleidingDuur($opleiding)
    {
        $this->opleiding_duur = ($opleiding);
    }
    public function setOpleidingActief($opleiding) {
        $this->opleiding_actief = $opleiding;
    }
       public function setSessie_Id($sessie_id) {
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF1 begin
        $this->sessie_id = $sessie_id;
        // section -64--88-11-18--47a40d06:14be55cded8:-8000:0000000000000AF1 end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FB begin
        // Query selects the item using inserted parameter.
        $query = "SELECT * FROM `opleiding` WHERE 
            `opleiding_id` =". ($id) ."";
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
        public function getOpleidingByActief($opleiding_naam) {
        $query = "SELECT * FROM opleiding WHERE (opleiding_naam = '$opleiding_naam')"
                . "AND (opleiding_actief= 1)";

        $this->dbQuery($query);
        $user = $this->dbFetchAll($query);

        if ($user == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            return $user;
        }
    }

    public function getOpleidingByName($opleiding_naam){
        
        $query = "SELECT `opleiding_id` FROM `opleiding` WHERE `opleiding_naam` = '$opleiding_naam'";
        
        $this->dbQuery($query);
        $opleiding_id = $this->dbFetchAll($query);  
        
        if ($opleiding_id == NULL) {
            return FALSE;
        } else {
            // als het niet null is, return the array.
            return $opleiding_id;
        } 
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FD begin
        return $this->opleiding_id;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FD end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FF begin
        return $this->opleiding_naam;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FF end
    }
    
    public function getOpleidingStartDatum()
    {
        return $this->opleiding_start_datum;
    }
    
    public function getOpleidingEindDatum()
    {
        return $this->opleiding_eind_datum;
    }

    public function getOpleidingNiveau()
    {
        return $this->opleiding_niveau;
    }
    
    public function getOpleidingDuur()
    {
        return $this->opleiding_duur;
    }
    public function getOpleidingActief() {    
        return $this->opleiding_actief;
    }
      public function getSessie_Id() {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D5 begin
        return $this->sessie_id;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008D5 end
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
    public function getOpleidingList()
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000904 begin
        // Query selects the item using class vars.
        //$query = "SELECT * FROM  `opleiding` ORDER BY  `opleiding`.`opleiding_id` ASC";
//        $query = "SELECT opleiding.*, opleidingsblok.* FROM `opleidingsblok` INNER JOIN opleiding ON opleidingsblok.fk_opleiding_id = opleiding_id ORDER BY  opleiding.opleiding_id ASC";
        // fetches the array using Database's fetchDbArray function.
        // If it's null,
        $query = "SELECT * FROM `opleiding`";
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
    public function createOpleidingDb()
    {
        
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F5 begin
        $sql = "INSERT INTO  `cegelec`.`opleiding` (
                `opleiding_naam`,
                `opleiding_start_datum`,
                `opleiding_eind_datum`,
                `opleiding_niveau`,
                `opleiding_duur`,
                `opleiding_actief`
                ) VALUES (
               '" . $this->opleiding_naam . "',
                   '" . $this->opleiding_start_datum . "',
                       '" . $this->opleiding_eind_datum . "',
                           '" . $this->opleiding_niveau . "',
                               '" . $this->opleiding_duur . "', '". $this->opleiding_actief . "'    )";
      
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
    public function updateOpleidingDb($id)
    {
        
        //var_dump($id, $this);
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F7 begin
        $query = "UPDATE `opleiding`
                    SET `opleiding_naam` = '" . $this->opleiding_naam . "',
                        `opleiding_start_datum` = '" . $this->opleiding_start_datum . "',
                        `opleiding_eind_datum` = '" . $this->opleiding_eind_datum . "',
                        `opleiding_niveau` = '" . $this->opleiding_niveau . "',
                        `opleiding_duur` = '" . $this->opleiding_duur . "',
                        `opleiding_actief` = '" . $this->opleiding_actief . "'
WHERE
                        `opleiding_id` = '" . $id    . "'";


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
    public function deleteOpleidingDb($id)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F9 begin
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F9 end
    }

}