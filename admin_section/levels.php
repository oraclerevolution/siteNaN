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
          
          $statement = $bdd->prepare("INSERT INTO programmes (titre,stage,img,descr) VALUES(?,?,?,?)");
          $statement->execute(array($_POST['name'],$_POST['nbre'],$_POST['img'],$_POST['descrip']));
      }
      header("Location : ../levels.php");
?>

<!DOCTYPE html>
<html lang="en">
<style>
.modal-header{
  background-color:black;
  color:white;
}
.avert{
  color:red;
  font-style:italic;
}
</style>
<?php require('outils/head.php'); ?>

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
        <li class="breadcrumb-item active">Levels</li>
      </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Listes des levels</h2>
				<div class="filter">
					<button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">Ajouter un level</button>
				</div>
			</div>
			<div class="list_general">
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

                $reponse = $bdd->query('SELECT * FROM programmes');
                while ($donnees = $reponse->fetch()) {
                  
          ?>
						<figure><img src="img/course_1.jpg" alt=""></figure>
						<h4>
                <?php echo $donnees['titre']; ?>
            </h4>
            <h5>
                <?php echo $donnees['stage']. " stages"; ?>
            </h5>
						<p>
                <?php echo $donnees['descr']; ?>
            </p>
						<p><a href="#0" class="btn_1 gray"><i class="fa fa-fw fa-eye"></i> Modifier le level</a></p>
						<ul class="buttons">
							<li><a href="#0" class="btn_1 gray delete wishlist_close"><i class="fa fa-fw fa-times-circle-o"></i>Supprimer</a></li>
						</ul>
					</li>
          <hr>
				</ul>
			</div>
      <?php
        }

        $reponse->closeCursor(); // Termine le traitement de la requête

        ?>
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
          <small>Copyright © UDEMA 2018</small>
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
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.php">Logout</a>
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
            <input type="text" class="form-control" name="name" id="" placeholder="Nom du level" required="">
            <br>
            <input type="number" class="form-control" name="nbre" id="" placeholder="Nombre de stage" required="">
            <br>
            <select name="" id="" class="form-control">
              <?php
                $reponse = $bdd->query('SELECT * FROM categories');
                while ($donnees = $reponse->fetch()) {
              ?>
              <option value="">
                  <?php echo $donnees['titre']; ?>
              </option>
              <?php
                  }
                  $reponse->closeCursor(); // Termine le traitement de la requête
              ?>
            </select>
            <br>
            <textarea name="descrip" class="form-control" id="" cols="30" rows="3" required=""></textarea>
            <br>
            <input type="file" name="img" id="">
            <br>
            <span class="avert">choisissez l'image de présentation du level.</span>
            <br><br>
            <input type="submit" class="btn btn-success btn-xs" value="Ajouter le level">
            </div>
            
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
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
