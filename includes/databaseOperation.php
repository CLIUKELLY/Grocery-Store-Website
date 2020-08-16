<?php
/**
 * Created by PhpStorm.
 * User: houti
 * Date: 2020/8/14
 * Time: 21:08
 */
$DBH = null;
    function conn()
    {
        $host = "localhost";
        $dbname = "tiejunAsg3";
        $dbuser = "tiejunAsg3";
        $dbpass = "tiejunAsg3";
        try {
            global $DBH;
            $DBH = new PDO("mysql:host=$host;dbname=$dbname;", $dbuser, $dbpass);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function close()
    {
        global $DBH;
        $DBH = null;
    }

?>