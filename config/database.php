<?php //database created below
//var_dump(PDO::getAvailableDrivers());
define('dbHost','localhost');
define('dbName','nansite');
define('dbUser','root');
define('dbPw','');


try{
    $db = new PDO('mysql:host='.dbHost.';dbname='.dbName, dbUser, dbPw);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    die('Connexion failed. We found out this problem: ' .$e->getMessage());
}
?>