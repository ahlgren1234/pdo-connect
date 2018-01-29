<?php
class Database {

    public $isConn;
    protected $datab;

    // Connect to database.
    public function __construct($username = "root", $password = "root", $host = "localhost", $dbname = "pdoTest", $options = []) {
        try {
            $this->datab = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->SetAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }

    // Disconnect from Database.
    public function Disconnect() {
        $this->datab = NULL;
        $this->isConn = FALSE;
    }

    // Get a row.
    public function getRow() {

    }

    // Get Rows.
    public function getRows() {

    }

    // Insert Row.
    public function insertRow() {

    }

    // Update Row.
    public function updateRow() {

    }

    // Delete Row.
    public function deleteRow() {

    }
}

?>