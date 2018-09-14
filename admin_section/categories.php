<?php

function checkInput($data){
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
}

$nom = $nombreDeProgramme = $image = $descrip = "";
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
        try{
          $bdd = new PDO('mysql:host=localhost;dbname=nansite;charset=utf8','root','');
        }
        catch(Exception $e){
          //en cas d'erreur
          die('Erreur : ' . $e->getMessage());
        }
          
          $statement = $bdd->prepare("INSERT INTO categories (titre,programmes,img,descr) VALUES(?,?,?,?)");
          $statement->execute(array($_POST['name'],$_POST['nbre'],$_POST['img'],$_POST['descrip']));
          
          
      }
      header("Location : ../categories.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php require('outils/head.php'); ?>
<style>
.modal-header{
    background-color: black;
    color: white;
}
.avert{
  color:red;
  font-size:1em;
  font-style:italic;
}
</style>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <?php require('outils/nav.php'); ?>

  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Catégories</li>
      </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Liste des catégories</h2>
				<div class="filter">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Ajouter catégorie</button>
				</div>
			</div>
			<div class="list_general reviews">
				<ul>
					<li>
          <?php

                try{
                  $bdd = new PDO('mysql:host=localhost;dbname=nansite;charset=utf8','root','');
                }
                catch(Exception $e){
                  //en cas d'erreur
                  die('Erreur : ' . $e->getMessage());
                }

                $reponse = $bdd->query('SELECT * FROM categories');
                while ($donnees = $reponse->fetch()) {
                  
          ?>
          
						<figure><img src="img/course_1.jpg" alt=""></figure>
						<h4>
              <?php echo $donnees['titre']; ?>
            </h4>
						<p>
              <?php echo $donnees['descr']; ?>
            </p>
						
            <button type="button" class="btn btn-large btn-info">modifier categorie</button>
            <button type="button" class="btn btn-large btn-danger">supprimer categorie</button>
            
            
					</li>
          <hr>
          <?php
          }

          $reponse->closeCursor(); // Termine le traitement de la requête

          ?>
				</ul>
			</div>
      
		</div>
		<!-- /box_general-->
		<nav aria-label="...">
			<ul class="pagination pagination-sm add_bottom_30">
				<li class="page-item disabled">
					<a class="page-link" href="#" tabindex="-1">Previous</a>
				</li>
				<li class="page-item"><a class="page-link" href="#">1</a></li>
				<li class="page-item"><a class="page-link" href="#">2</a></li>
				<li class="page-item"><a class="page-link" href="#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="#">Next</a>
				</li>
			</ul>
		</nav>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © NaN 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>	

    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Voulez-vous vraiment vous deconnecter ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">En cliquant sur "OK" vous aller arrêter immédiatement votre session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
            <a class="btn btn-primary" href="">Oui</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Trigger the modal with a button -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title"> <img src="img/logo_NaN.png" height="60" width="60" alt="image"> Ajouter une catégorie de cours</h4>
          </div>
          <div class="modal-body">
            <form action="" method="post">
            <div class="form-group">
            <input type="text" class="form-control" name="name" id="" placeholder="Nom de la catégorie" required="">
            <br>
            <input type="number" class="form-control" name="nbre" id="" placeholder="Nombre de programme" required="">
            <br>
            <textarea name="descrip" class="form-control" id="" cols="30" rows="3">Description du cours</textarea>
            <br>
            <input type="file" name="img" id="">
            <br><br>
            <span class="avert">choisissez l'image de présentation de la catégorie.</span>
            <br><br>
            <input type="submit" class="btn btn-success btn-xs" value="Créer la catégorie">
            </div>
            
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
          </div>
        </div>

      </div>
</div>

</div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="vendor/jquery.selectbox-0.2.js"></script>
	<script src="vendor/retina-replace.min.js"></script>
	<script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
	
</body>
</html>
