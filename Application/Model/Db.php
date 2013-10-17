<?php
/**
 * User: julia
 * Date: 21.03.13
 * Time: 16:26
 */
require_once('../Local.php');

class Application_Model_Db
{
    /**
     * @var resource
     */
    protected $db_link = false;
    /**
     * @var database table
     */
    protected $table;

    /**
     * Constructor
     *
     * @param $table
     */
    public function __construct($table)
    {
        $this->table = $table;
        $this->db_link = $this->connectDB();
    }

    /**
     * Makes a connection to database
     *
     * @return resource
     */
    public function connectDB()
    {
        $db_link = mysql_connect (MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD)
            or die("Keine Verbindung zur Datenbank möglich: " . mysql_error());
        mysql_select_db(MYSQL_DB_NAME);
        return $db_link;
    }

    /**
     * Inserts Data into database
     *
     * @param array $valueArray
     */
    public function insert(array $valueArray)
    {
        $keysString = '`' . implode('`, `', array_keys($valueArray)) . '`';
        $valuesString = '"' . implode('", "', array_values($valueArray)) . '"';
        $sql = 'INSERT INTO `' . $this->table . '` ( ' . $keysString . ' ) VALUES ( ' . $valuesString . ' );';
        $db_success = mysql_query($sql)
            or die("Datensicherung fehlgeschlagen: " . mysql_error());
        mysql_close($this->db_link);
    }

    /**
     * Updates database
     *
     * @param array $valueArray
     */
    public function update(array $valueArray)
    {
        $count = count($valueArray);
        $i = 1;
        $dataString = '';
        foreach ($valueArray as $key => $value)
        {
            $dataString .= '`' . $key . '` = "' . $value . '"';
            if ($i<$count)
            {
                $dataString .= ' , ';
            }
            ++$i;
        }
        $sql = 'UPDATE  `' . $this->table . '` SET ' . $dataString;
        $db_success = mysql_query($sql)
            or die("Datenupdate fehlgeschlagen: " . mysql_error());
        mysql_close($this->db_link);
    }

    /**
     * Deletes database address entry
     *
     * @param $id
     * @param $name
     * @param $prename
     */
    public function deleteAddress($id, $name, $prename)
    {
        if ($id != 'ID')
        {
            $sql = 'DELETE FROM `' . $this->table . '` WHERE `id` = "' . $id . '"';
        }
        else if ($name != "" && $prename != "")
        {
            $sql = 'DELETE FROM `' . $this->table . '` WHERE `name` = "' . $name . '" AND `prename` = "' . $prename . '"';
        }
        $db_success = mysql_query($sql)
            or die('Löschen der Daten fehlgeschlagen: ' . mysql_error());
        mysql_close($this->db_link);
    }

    /**
     * Returns all data from database
     *
     * @return array
     */
    public function getDatabaseData()
    {
        $data = array();
        $sql = 'SELECT * FROM `' . $this->table . '`';
        $db_success = mysql_query($sql)
            or die('Laden der Daten fehlgeschlagen: ' . mysql_error());
        while ($row = mysql_fetch_array($db_success, MYSQL_ASSOC))
        {
            $data[] = $row;
        }
        return $data;
    }

    /**
     * Returns address data from database
     *
     * @param $id
     * @param $name
     * @param $prename
     * @return array
     */
    public function getAddressData($id, $name, $prename)
    {
        if ($id != 'ID')
        {
            $sql = 'SELECT * FROM `' . $this->table . '` WHERE `id` = "' . $id . '"';
        } else if ($name != "" && $prename != "") {
            $sql = 'SELECT * FROM `' . $this->table . '` WHERE `name` = "' . $name . '" AND `prename` = "' . $prename . '"';
        }
        $db_success = mysql_query($sql)
            or die('Laden der Daten fehlgeschlagen: ' . mysql_error());
        $data = mysql_fetch_array($db_success, MYSQL_ASSOC);
        return $data;
    }

    /**
     * @param $date
     * @return string
     */
    function dateMySql2German($date)
    {
        $d = explode("-",$date);
        return sprintf("%02d.%02d.%04d", $d[2], $d[1], $d[0]);
    }

    /**
     * @param $date
     * @return string
     */
    function dateGerman2MySql($date)
    {
        $d = explode(".",$date);
        return sprintf("%04d-%02d-%02d", $d[2], $d[1], $d[0]);
    }
}