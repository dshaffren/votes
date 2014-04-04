<?php

require('DataAccess/DataAccess.php');

abstract class Model {

    protected $db = null;

    function __construct() {
        $this->db = new DataAccess();
    }

    public function findAll() {
        return $this->db->query("SELECT * FROM " . $this->getTableName());
    }

    private function getTableName() {
        return strtolower(get_class($this) . 's');
    }
}
?>
