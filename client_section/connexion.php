<?php session_start(); ?>
<?php
function inputVerify($var){

    $var = trim($var);
    $var = htmlspecialchars($var);
    $var = stripslashes($var);

    return $var;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $username = inputVerify($_POST['username']);
    $motDePasse = inputVerify($_POST['motDePasse']);

    if(!empty($_POST['username']) and !empty($_POST['motDePasse']) )
    {
        $db = new PDO('mysql:host=localhost;dbname=nansite;charset=utf8','root', '');
        $req=$db->prepare("SELECT * from users where nom=? AND  mot_de_passe=?");
        $req->execute(array($_POST['username'],$_POST['motDePasse']));


        $userHasBeenFound = $req->rowCount();
        if ($userHasBeenFound) {
            $user = $req->fetch(PDO::FETCH_OBJ);
            //die($user->about);
            $_SESSION['id'] = $user->id;
            $id=$_SESSION['id'];
            $_SESSION['nom'] = $user->nom;
            $nom = $user->nom;
            $_SESSION['prenom'] = $user->prenom;
            $_SESSION['NIV0'] = 1 ;
          //  $db->exec("UPDATE useradmin set connected = '1'  WHERE id = $id ");
        }
        if ($userHasBeenFound) {
            header('Location: index-2.php');

        } else {
            $motdepasseoublieerror = "Veuillez entrer des données valides ";
        }



    }

    else{

         $motdepasseoublieerror = "Veuillez entrer des données valides ";
    }
}

// if (isset($_POST['remember'])) {
//     setcookie('auth_id', $user->id . '-----' . sha1($user->user), time() + 3600 * 24 * 3, '/', 'localhost', false, true);
// }

?>