<?php

require('Config.php');

class DataAccess {

    private $link = null;

    function __construct() {
        // connect to database

        $this->link = mysqli_connect(
            Config::DB_SERVER,
            Config::DB_USER,
            Config::DB_PASSWORD,
            Config::DB_NAME)
            or die('Could not connect: ' . mysql_error($link));
    }

    function __destruct() {
        $this->link->close();
    }

    public function query($query) {
        $result = $this->link->query($query);

        $resultArray = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $resultArray[] = $row;
        }

        $result->close();

        return $resultArray;
    }

    public function getLink() {
        return $this->link;
    }

}
