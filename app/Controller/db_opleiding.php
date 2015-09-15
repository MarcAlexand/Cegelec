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
    private $opleiding_id = null;

    /**
     * Short description of attribute opleiding_naam
     *
     * @access private
     * @var String
     */
    private $opleiding_naam = null;

    /**
     * Short description of attribute opleiding_status
     *
     * @access public
     * @var Integer
     */
    public $opleiding_status = null;

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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F3 begin
        parent::__construct($this);
    	$this->db = new Database;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F3 end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000906 begin
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
    public function setOpleidingStatus($opleiding)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000908 begin
        $this->opleiding_status = $opleiding;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000908 end
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FB begin
        // Query selects the item using inserted parameter.
        $query = "SELECT * FROM `opleiding` WHERE 
            `opleiding_id` =". mysqli_real_escape_string($opleiding_id) ."";
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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008FB end
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

    /**
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
        $query = "SELECT * FROM  `opleiding` ORDER BY  `opleiding`.`opleiding_id` ASC";
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
        
        $return = array();
        foreach( $result as $idx => $row){
            $opleiding = new Opleiding();
            $opleiding->setOpleidingId($row['opleiding_id']);
            $opleiding->setOpleidingNaam($row['opleiding_naam']);
            $opleiding->setOpleidingStatus($row['opleiding_status']);
            $opleiding->setOpleidingStartDatum($row['opleiding_start_datum']);
            $opleiding->setOpleidingEindDatum($row['opleiding_eind_datum']);
            $opleiding->setOpleidingNiveau($row['opleiding_niveau']);
            $opleiding->setOpleidingVoortgang($row['opleiding_voortgang']);
            $opleiding->setOpleidingDuur($row['opleiding_duur']);
            
            array_push($return, $opleiding);
        }
        return $return;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000904 end
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
        $sql = "INSERT INTO opleiding ("
                . "opleiding_naam,"
                . " opleiding_status) "
                . "VALUES ("
                . " '".$this->opleiding_naam."',"
                . " '".$this->opleiding_status."')";
        $this->db->dbquery($sql);
        if (!$this->dbquery($query)) {
            return false;
        } else {
            $this->opleiding_naam = $opleiding_naam;
            $this->opleiding_status = $opleiding_status;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F5 end
        }
    }

    /**
     * Short description of method updateOpleidingDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function updateOpleidingDb()
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F7 begin
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F7 end
    }

    /**
     * Short description of method deleteOpleidingDb
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    public function deleteOpleidingDb()
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F9 begin
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:00000000000008F9 end
    }

}