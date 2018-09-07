<!DOCTYPE html>
<html lang="en">

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
        <li class="breadcrumb-item active">Programmes</li>
      <li ><button style="margin-left:1000%;" class="btn btn-success" id="add">Ajouter</button></li>
      </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Liste des programmes</h2>
				<div class="form-group" id="form" style="display:none;"> <span class="glyphicon glyphicon-close" style="margin-left:96%;" id="fermer"> <button class="btn btn-danger">X</button><br></span> <br>
				<input class="form-control" type="text" name="titre" id="titre" placeholder="Ajouter le titre de la leçon" required="required"> <br> 
                <input class="form-control" type="text" name="leçon" id="leçon" placeholder="Ajouter le nombre de leçons; .. Exemple: 2 leçons " required="required"> <br>
                <input class="form-control" type="file" name="image" id="image"  required="required"> <br>



                <center><button class="btn btn-success">Créer</button></center>
				</div>
			</div>
			<div class="list_general reviews">
				<ul>
				<li>
						<figure><img src="img/course_1.jpg" alt=""></figure>
						<h4>Course title</h4>
						<p>Lorem ipsum dolor sit amet, dolores mandamus moderatius ea ius, sed civibus vivendum imperdiet ei, amet tritani sea id. Ut veri diceret fierent mei, qui facilisi suavitate euripidis ad. In vim mucius menandri convenire, an brute zril vis. Ancillae delectus necessitatibus no eam, at porro solet veniam mel, ad everti nostrud vim. Eam no menandri pertinacia deterruisset.</p>
						<p class="inline-popups">
						<a href="#modal-reply" data-effect="mfp-zoom-in" class="btn btn-success"><i class="fa fa-fw fa-edit"></i> Modifier un programme</a>
					  <a href="#modal-reply" style="margin-left:40%;" data-effect="mfp-zoom-in" class="btn btn-danger"><i class="fa fa-fw fa-close"></i> supprimer un programme</a>
					</p>

					</li>
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
          <small>Copyright © Nan 2018</small>
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
<script>
 $('#add').click(function () {
   $('#form').show(700);
 });

  $('#fermer').click(function () {
   $('#form').hide(400);
 });
</script>