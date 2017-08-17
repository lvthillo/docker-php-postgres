<?php    

try {
        $conn = new PDO('pgsql:host='.$_ENV["HOST"] .';port='.$_ENV["PORT"] .';dbname='.$_ENV["DB"] .'',''.$_ENV["USER"] .'',''.$_ENV["PASSWORD"] .'');

        $conn->query("SET NAMES UTF8");
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }
