<?PHP
ob_start();
include "../controller/posteC.php";
include "../model/poste.php";
if (isset($_GET['id_poste']))
{
	$posteC=new posteC();
    $result=$posteC->recupererposte($_GET['id_poste']);
	foreach($result as $row){
		$id_poste=$row['id_poste'];
		
		$titre=$row['titre'];
		$contenu=$row['contenu'];
		$image=$row['image'];
		$date_de_pub=$row['date_de_pub'];
	
    ?>

    <form name="modifier poste"  method="POST" action="modifier.php?id=<?PHP echo $row['id_poste']; ?>" >
						
					<div class="form-group">
					<label>id_poste </label>
					<input type="hcinden" class="form-control" name="idcom_ini" id="idcom_ini" value="<?PHP echo $_GET['id_poste'];?>"  >
					</div>
						  
          <div class="form-group">
						<label>titre</label>
						<input value="<?PHP echo $titre?>" class="form-control" name="titre" id="titre" type="texte" ></textarea>
					</div>
					<div class="form-group">
						<label>contenu</label>
						<input value="<?PHP echo $contenu?>" class="form-control" name="contenu" id="contenu"  type="texte" ></textarea>
					</div>

					<div class="form-group">
						<label>image</label>
						<input value="<?PHP echo $image?>" class="form-control" name="image" id="image" type="file" ></textarea>
					</div>
					<div class="form-group">
						<label>date_de_pub</label>
						<input value="<?PHP echo $date_de_pub?>" class="form-control" name="date_de_pub" id="date_de_pub" type="date" ></textarea>
					</div>
					

					</div>
				
					
					
					

					<button type="submit" name="modifier" value="modifier" class="ajouter">modifier</button>


                            
                           
                           
                           
                          
						</form><?PHP }}

if (isset($_POST['modifier'])){
    $posteC=new posteC();
	$poste=new poste($_POST['idcom_ini'],$_POST['titre'],$_POST['contenu'],$_POST['image'],$_POST['date_de_pub']);
	$posteC->modifier($poste,$_POST['idcom_ini']);
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