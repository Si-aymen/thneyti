<?php

$hostname="localhost";
$db="thneyti";
$username="root";
$password="";
$et=0;

$conn=new PDO("mysql:host=$hostname;dbname=$db",$username,$password);
$sql="SELECT code_coupon FROM coupon WHERE etat=$et";

try
{
  $stmt=$conn->prepare($sql);
  $stmt->execute();
  $results=$stmt->fetchAll();
}
catch(Exception $ex)
{
  echo($ex->getMessage());
}

?>










<HTML>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>THNEYTI Admin Panel</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="oxygym.css" rel="stylesheet">

  <script src="coach1.js"></script>

</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center">Réponse</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">
			<div >
                  <div>
                    <div >
                      <div >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
					  <div class="modal-body mx-3"><?PHP
ob_start();
include "../controller/reponseC.php";
if (isset($_GET['cin']))
{
	$reponseC=new reponseC();
    $result=$reponseC->recupererReponse($_GET['cin']);
	foreach($result as $row){
		$cin=$row['cin'];
		$reponse=$row['reponse'];
		$coupon=$row['coupon'];
?>
<form method="POST">
						
					
          <div class="form-group">
					<label>cin</label>
					<input type="hcinden" class="form-control" name="cin" value="<?PHP echo $cin ?>" rows="10" >
					</div>
					<div class="form-group">
						<label>reponse</label>
						<input value="Voici Votre code" class="form-control" name="reponse" id="reponse" placeholder="Votre reponse" rows="10" type="text" ></textarea>
					</div>
					<div class="form-group">
						<label>coupon</label> <br>
            <select name="coupon" id="coupon" autocomplete="off">
                <option>--Select Coupon--</option>
                <?php foreach ($results as $output) {?>
                  <option><?php echo $output["code_coupon"];?></option>
                 <?php }?>

            </select>

						
					</div>
					
					
					

					<button type="submit" name="modifier" value="modifier" class="ajouter">envoyer</button>


                            
                           
                           
                           
                          
						</form><?PHP }}

if (isset($_POST['modifier'])){
	$rep=new reponse($_POST['cin'],$_POST['reponse'],$_POST['coupon']);
	$reponseC->modifierReponse($rep,$_POST['cin']);
  $cin=$_POST['cin'];
	echo $_POST['cin'];



  
	header("Location: http://localhost:7882/2A14/thneyti-reclamation/back/views/mail_coupon.php?cin=$cin");
} ob_end_flush();?>
</div>
                      <div class="modal-footer d-flex justify-content-center">
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>






</body>




