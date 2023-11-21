<?php
//Get  connection information
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database_db = 'ebenezer';

    //changing the connection method from mysqli to pdo
    function connect() {
        global $host, $username, $password, $database_db;
        try {
            $dsn ="mysql:host=".$host. ";dbname=".$database_db;
            $conn = new PDO($dsn, $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
    //error handling should our connection fail
        } catch (PDOException $e) {
            die('Error connecting to database: ' . $e->getMessage());
        }
    }
    
?>