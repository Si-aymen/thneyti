<?PHP
ob_start();
include "../controller/reservationc.php";
include "../model/reservation.php";
if (isset($_GET['numabon']))
{
	$reservationc=new reservationc();
    $result=$reservationc->recuperer_reservation($_GET['numabon']);
	foreach($result as $row){
		$numabon=$row['numabon'];
		$nom=$row['nom'];
		$prenom=$row['prenom'];
		$adresse=$row['adresse'];
		$email=$row['email'];
    $dateinscription=$row['dateinscription'];
	
    ?>

    <form name="modifier reservation"  method="POST" action="modifierreservation.php?numabon=<?PHP echo $row['numabon']; ?>" >
						
					<div class="form-group">
					<label>numabon </label>
					<input type="hcinden" class="form-control" name="idcom_ini" value="<?PHP echo $_GET['numabon'];?>"  >
					</div>
						  
          <div class="form-group">
						<label>nom</label>
						<input value="<?PHP echo $nom?>" class="form-control" name="nom" id="nom" type="text" ></textarea>
					</div>
					<div class="form-group">
						<label>prenom</label>
						<input value="<?PHP echo $prenom?>" class="form-control" name="prenom" id="prenom"  type="text" ></textarea>
					</div>

					<div class="form-group">
						<label>adresse</label>
						<input value="<?PHP echo $adresse?>" class="form-control" name="adresse" id="adresse" type="text" ></textarea>
					</div>
          <div class="form-group">
						<label>email</label>
						<input value="<?PHP echo $email?>" class="form-control" name="email" id="email" type="text" ></textarea>
					</div>
          <div class="form-group">
						<label>dateinscription</label>
						<input value="<?PHP echo $dateinscription?>" class="form-control" name="dateinscription" id="dateinscription" type="date" ></textarea>
					</div>
          
					

					
				
					
					
					

					<button type="submit" name="modifier" value="modifier" class="ajouter">modifier</button>


                            
                           
                           
                           
                          
						</form><?PHP }}

if (isset($_POST['modifier'])){
	$reservation=new reservation($_POST['idcom_ini'],$_POST['nom'],$_POST['prenom'],$_POST['adresse'],$_POST['email'],$_POST['dateinscription']);
	$reservationc->modifierreservation($reservation,$_POST['idcom_ini']);
	header('Location: index.php');
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