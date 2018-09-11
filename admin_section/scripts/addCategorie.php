<?php

    require "database.php";

    function checkInput($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
    }

    $nom = $nombreDeProgramme = $image = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $nom = checkInput($_POST['name']);
        $nombreDeProgramme = checkInput($_POST['nbre']);
        $image = checkInput($_POST['img']);
        $isSuccess  = true;
    } else {
        $isSuccess = false;
    }

    if($isSuccess) 
        {
            $db = Database::connect();
            $statement = $db->prepare("INSERT INTO categories (titre,programmes,img) VALUES(?,?,?)");
            $statement->execute(array($nom,$nombreDeProgramme,$image));
            Database::disconnect();
            
        }
        header("Location : ../categories.php");

?>

