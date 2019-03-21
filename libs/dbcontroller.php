<?php

class DBController {

    private $host;
    private $user;
    private $password;
    private $database;
    private $charset;
    private $conn;

    function __construct() {
        $this->host = constant('HOST');
        $this->user = constant('USER');
        $this->password = constant('PASSWORD');
        $this->database = constant('DB');
        $this->charset = constant("CHARSET");
        $this->conn = $this->connectDB();
        
    }

    function connectDB() {
        $conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return $conn;
    }

    function insertQuery($query) {
        if (mysqli_query($this->conn, $query)) {
            header('Location: index.php?valido=true');
        } else {
            echo "ERROR: Could not able to execute $query. " . mysqli_error($link);
        }
    }

    function runQuery($query) {
        $result = mysqli_query($this->conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $resultset[] = $row;
        }
        if (!empty($resultset))
            return $resultset;
    }

    function numRows($query) {
        $result = mysqli_query($this->conn, $query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

}

?>
