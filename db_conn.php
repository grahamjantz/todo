<?php

$sName = "localhost";
$uName = "root";
$pass = "Qdyk,SLYP.v2'";
$db_name = "tasks";


try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name",
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connectino failed : ". $e->getMessage();
}