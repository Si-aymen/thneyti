<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
  <title>Document</title>
</head>
<style>
      div {
        margin-bottom: 10px;
        margin-right : 100px;
      }
      label {
        display: inline-block;
        width: 150px;
        text-align: right;
      }
      form {
  text-align: center;
}
    </style>
<body>
<div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
       
        <ul>
            <li><a href ="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span></a> </li>
            <li><a href ="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a></li>
            <li><a href ="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span></a> </li>
            <li><a href ="index.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span></a> </li>
            <li><a href ="index.php"><img src="payment.png" alt="">&nbsp;<span>Income</span></a> </li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span> </a></li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span> </a></li>
            <li><a href ="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></a></li>
            <li><a href ="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span></a> </li>
        </ul>
    </div>


</body>
</html>


<?PHP
ob_start();
include "../controller/couponC.php";
include "../model/coupon.php";
if (isset($_GET['idd']))
{
	$couponC=new couponC();
    $result=$couponC->recupererCommande($_GET['idd']);
	foreach($result as $row){
		$idd=$row['idd'];
		
		$date_deb=$row['date_deb'];
		$date_experation=$row['date_experation'];
		$taux_reduction=$row['taux_reduction'];
		$code_coupon=$row['code_coupon'];
	
    ?>

    <form name="modifier coupon"  method="POST" action="modifier.php?idd=<?PHP echo $row['idd']; ?>" >
						
					<div class="form-group">
					<label>IDd </label>
					<input type="hcinden" class="form-control" name="idcom_ini" value="<?PHP echo $_GET['idd'];?>"  >
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
					


          <label for="code_coupon">code coupon:<input type="text" id="code_coupon" placeholder="entrer votre code coupon" name="code_coupon" > <a href="index2.php" class="btn">GENERATE </a>
					</div>
				
					
					
					

					<button type="submit" name="modifier" value="modifier" class="ajouter">modifier</button>


                            
                           
                           
                           
                          
						</form><?PHP }}

if (isset($_POST['modifier'])){
	$coupon=new coupon($_POST['idcom_ini'],$_POST['date_deb'],$_POST['date_experation'],$_POST['taux_reduction'],$_POST['code_coupon']);
	$couponC->modifier($coupon,$_POST['idcom_ini']);
	header('Location: index_coupon.php');
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

      
  





</body>




