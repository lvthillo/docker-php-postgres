<?php    

try {
        $conn = new PDO('pgsql:host=my-postgres;port=5432;dbname=db','dev','test');

        $conn->query("SET NAMES UTF8");
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
