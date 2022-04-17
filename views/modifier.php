<?PHP
ob_start();
include "../controller/couponC.php";
include "../model/coupon.php";
if (isset($_GET['id']))
{
	$couponC=new couponC();
    $result=$couponC->recupererCommande($_GET['id']);
	foreach($result as $row){
		$id=$row['id'];
		
		$date_deb=$row['date_deb'];
		$date_experation=$row['date_experation'];
		$taux_reduction=$row['taux_reduction'];
		$code_coupon=$row['code_coupon'];
	
    ?>

    <form name="modifier coupon"  method="POST" action="modifier.php?id=<?PHP echo $row['id']; ?>" >
						
					<div class="form-group">
					<label>ID </label>
					<input type="hcinden" class="form-control" name="idcom_ini" value="<?PHP echo $_GET['id'];?>"  >
					</div>
						  
          <div class="form-group">
						<label>date_deb</label>
						<input value="<?PHP echo $date_deb?>" class="form-control" name="date_deb" id="date_deb" type="date" ></textarea>
					</div>
					<div class="form-group">
						<label>date_experation</label>
						<input value="<?PHP echo $date_experation?>" class="form-control" name="date_experation" id="date_experation"  type="date" ></textarea>
					</div>

					<div class="form-group">
						<label>taux_reduction</label>
						<input value="<?PHP echo $taux_reduction?>" class="form-control" name="taux_reduction" id="taux_reduction" type="number" ></textarea>
					</div>
					<div class="form-group">
						<label>code_coupon</label>
						<input value="<?PHP echo $code_coupon?>" class="form-control" name="code_coupon" id="code_coupon"  type="text" ></textarea>
					</div>
				
					
					
					

					<button type="submit" name="modifier" value="modifier" class="ajouter">modifier</button>


                            
                           
                           
                           
                          
						</form><?PHP }}

if (isset($_POST['modifier'])){
	$coupon=new coupon($_POST['idcom_ini'],$_POST['date_deb'],$_POST['date_experation'],$_POST['taux_reduction'],$_POST['code_coupon']);
	$couponC->modifier($coupon,$_POST['idcom_ini']);
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




