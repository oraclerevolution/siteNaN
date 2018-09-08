<?php

if (! function_exists('e')) {
    function e($string){
        if ($string) {
         // return htmlspecialchars($string);
         return strip_tags($string);
        }
    }
}
if (!defined('not_empty')) {
    function not_empty($fields = []){
        if (count($fields)!= 0) {
              foreach ($fields as $field) {
                  if (empty($_POST[$field]) || trim($_POST[$field] == "")) {
                      return false;
                  }
              }

              return true;
        }
    }
}

if(!function_exists('is_already_in_use')){
    function is_already_in_use($field, $value,$table){
        global $db; 
        $q = $db-> prepare("SELECT id FROM $table WHERE $field = ?");
        $q->execute([$value]);
        $count = $q->rowCount();
        $q->closeCursor();
        return $count;
    }
}

if(!function_exists('saveimage')){
    function saveimage($img){
        global $db; 
        $requete = $db->prepare('INSERT INTO categories (img) VALUES(?)');
        $requete->execute(array($img));
       if ($requete) {
        echo'  <div class="alert erreurs alert-warning alert-dismissible fade show" role="alert">
        <center> <strong>image</strong> emportée.</center>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
       }else{
        echo'  <div class="alert erreurs alert-warning alert-dismissible fade show" role="alert">
        <center> <strong>Oups!!</strong> image pas téléchargée.</center>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
       }
    }
}

if(!function_exists('saveindb')){
    function saveindb(){
    global $db;
    $requete = $db->prepare('INSERT INTO categories (programme,titre,) VALUES(?,?)');
    $requete->execute(array($_POST['titre'],$_POST['prog']));

                       if ($requete) {
                         echo'  <div class="alert erreurs alert-warning alert-dismissible fade show" role="alert">
                       <center>  <strong>Félicitation</strong> Success de la soumission.</center>
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>';     } else{
                        echo'  <div class="alert erreurs alert-warning alert-dismissible fade show" role="alert">
                        <center>  <strong>Désolé!</strong> échec de la soumission de la soumission.</center>
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>';
                       }
                       saveimage();
}
}
?>