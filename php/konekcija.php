<?php
    define("MYSQL_HOST", "localhost");
    define("MYSQL_DBNAME","spa_druga");
    define("MYSQL_USERNAME","root");
    define("MYSQL_PASSWORD","");

    try{
        $konekcija = new PDO("mysql:host=".MYSQL_HOST.";dbname=".MYSQL_DBNAME.";charset=utf8", MYSQL_USERNAME, MYSQL_PASSWORD);

        $konekcija->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    }
    catch(PDOException $e){
        $e->getMessage();
    }
?>