<?php

require_once FILE_DB_CONSTANTS;
/**
 * Short description of class database
 *
 * @access public
 * @author firstname and lastname of author, <author@example.org>
 */
class database
{
    // --- ASSOCIATIONS ---


    // --- ATTRIBUTES ---

    /**
     * Short description of attribute connection
     *
     * @access protected
     * @var Integer
     */
    protected $connection = null;

    /**
     * Short description of attribute query_result
     *
     * @access private
     * @var Integer
     */
    private $query_result = null;

    /**
     * Short description of attribute error
     *
     * @access private
     * @var Integer
     */
    private $error = null;

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
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000871 begin
        $this->error = new Error();
        /* Make connection to database */
        $this->connection = mysqli_connect (DB_SERVER, DB_USER, DB_PASS, DB_NAME) or die('There was a problem connecting to the database');
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000871 end
    }

    /**
     * Short description of method checkDbError
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  query
     * @return mixed
     */
    protected function checkDbError($query)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000087B begin
         if ($this->connection->errno) {
            switch ($this->connection->errno) {
                case 1062:
                    $this->error->setError(TXT_ERROR_DUPLICATE_ENTRY);
                    break;
                case 0:
                    $this->error->setError("ERROR UNKNOWN");

                default:
                    $error = "MySQL error " . $this->connection->errno . ": " .
                            $this->connection->error . "\n<br><br>\n$query\n<br>";
                    $this->error->setError($error);
                    break;
            }

            return TRUE;
        }
        $this->error->setError("No errors.");
        return FALSE;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000087B end
    }

    /**
     * Short description of method checkId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @param  field
     * @return mixed
     */
    public function checkId($id, $field)
    {
        // section -84-19-66-65-e5e773:14c03ac4502:-8000:0000000000000D10 begin
        if (!is_numeric($id)) {
            $this->error->setError(TXT_ERROR_WRONG_VAR_TYPE . " [$id] " . $field);
            return FALSE;
        }
        return TRUE;
        // section -84-19-66-65-e5e773:14c03ac4502:-8000:0000000000000D10 end
    }

    /**
     * Short description of method checkTekst
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  text
     * @param  len
     * @return mixed
     */
    protected function checkTekst($text, $len)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000882 begin
        if (empty($text) ||
                (!is_string($text)) ||
                (strlen($text) > $len )) {
            return FALSE;
        }
        return TRUE;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000882 end
    }

    /**
     * Short description of method dbFetchAll
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    protected function dbFetchAll()
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000886 begin
        $return_array = array();

        while ($row = $this->query_result->fetch_array(MYSQLI_ASSOC)) {
            $return_array[] = $this->dbOutArray($row);
        }
        return $return_array;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000886 end
    }

    /**
     * Short description of method dbFetchArray
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  query
     * @return mixed
     */
    protected function dbFetchArray($query)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000888 begin
        $result = $this->connection->query($query);
        
        //TODO: add error check.	
        $data_array = $result->fetch_array(MYSQLI_ASSOC);

        if ($data_array === FALSE) {
            $this->error->setError("No data");
            return FALSE;
        }

        if (!$this->connection->errno) {
            $data_array = $this->dbOutArray($data_array);
        }
        return $data_array;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000888 end
    }

    /**
     * Short description of method dbInString
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  string
     * @return mixed
     */
    protected function dbInString($string)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000088A begin
        return $this->connection->real_escape_string($string);
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000088A end
    }

    /**
     * Short description of method dbNumRows
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    protected function dbNumRows()
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000088C begin
        if ($this->isMySqliResource($this->query_result)) {
            return $this->query_result->num_rows;
        } else {
            $this->error->setError("No rows");
            return FALSE;
        }
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000088C end
    }

    /**
     * Short description of method dbOutArray
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  data_array
     * @return mixed
     */
    protected function dbOutArray($data_array)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000088E begin
        
        
        foreach ($data_array as $field => $value) {
            if (is_numeric($value)) {
                continue;
            }
            else if (is_string($value)) {
                $data_array[$field] = $this->dbOutString($value);
            }
        }
        return $data_array;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:000000000000088E end
    }

    /**
     * Short description of method dbOutString
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  string
     * @return mixed
     */
    protected function dbOutString($string)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000890 begin
        if (is_string($string)) {
            return trim(stripslashes($string));
        }
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000890 end
    }

    /**
     * Short description of method dbTableExists
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  table
     * @return mixed
     */
    protected function dbTableExists($table)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000892 begin
        $query = "DESC " . $table;
        $result = $this->dbquery($query);

        if ($result = ($this->connection->errno == 1146)) {
            $this->error->setError("Table doesn't exist");
            return FALSE;
        }
        return TRUE;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000892 end
    }

    /**
     * Short description of method dbQuery
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @param  query
     * @return mixed
     */
    public function dbQuery($query)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000894 begin
        $this->query_result = $this->connection->query($query);
       
        
        return $this->query_result;
        
        
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000894 end
    }

    /**
     * Short description of method getDbError
     *
     * @access protected
     * @author firstname and lastname of author, <author@example.org>
     * @return mixed
     */
    protected function getDbError($query)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000896 begin
        if ($this->connection->errno) {
            return $this->connection->errno . '-' . $this->connection->error . " [$query]";
        }
        return '';
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000896 end
    }

    /**
     * Short description of method isMySqliResource
     *
     * @access private
     * @author firstname and lastname of author, <author@example.org>
     * @param  res
     * @return mixed
     */
    private function isMySqliResource($res)
    {
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000898 begin
        $res_type = is_resource($res) ? get_resource_type($res) : gettype($res);
        
        if (!is_a($res_type, 'Mysqli')) {
            $this->error->setError('Invalid resource type: ' . $res_type);
            return FALSE;
        }
        return TRUE;
        // section 10-0-3-49--6022aa35:14bdfb8146c:-8000:0000000000000898 end
    }

    /**
     * Short description of method dbLastInsertedId
     *
     * @access public
     * @author firstname and lastname of author, <author@example.org>
     * @param  id
     * @return mixed
     */
    public function dbLastInsertedId()
    {
        // section -84-19-82--123-1a43ac82:14e0569be64:-8000:0000000000000ECF begin
        return $this->connection->insert_id;
        
        // section -84-19-82--123-1a43ac82:14e0569be64:-8000:0000000000000ECF end
    }

}