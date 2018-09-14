<?php
function inputVerify($var){

    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);

    return $var;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = inputVerify($_POST['nom']);
    $motDePasse = inputVerify($_POST['prenoms']);
    $motDePasse = inputVerify($_POST['email']);
    $motDePasse = inputVerify($_POST['password1']);
    $motDePasse = inputVerify($_POST['password2']);

    if(!empty($_POST['nom']) and !empty($_POST['prenoms']) and !empty($_POST['email']) and !empty($_POST['password1']) and !empty($_POST['password2']) )
    {
        $db = new PDO('mysql:host=localhost;dbname=nansite;charset=utf8','root', '');
        $req=$db->prepare("INSERT INTO users (nom,prenom,email,mot_de_passe) VALUES (?,?,?,?)");
        $req->execute(array($_POST['nom'],$_POST['prenoms'],$_POST['email'],$_POST['password1']));
	}
}

header('Location: login.php');
?>