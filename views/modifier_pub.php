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
include "../controller/pubC.php";
include "../model/pub.php";
if (isset($_GET['id_publication']))
{
	$pubC=new pubC();
    $result=$pubC->recuperer($_GET['id_publication']);
	foreach($result as $row){
		$id_publication=$row['id_publication'];
		
		$photo=$row['photo'];
		$date_debut=$row['date_debut'];
		$date_fin=$row['date_fin'];
		
	
    ?>

    <form name="modifier publication"  method="POST" action="modifier_pub.php?id=<?PHP echo $row['id_publication']; ?>" 
					<div class="form-group">
					<label>ID </label>
					<input type="hcinden" class="form-control" name="idcom_ini" value="<?PHP echo $_GET['id_publication'];?>"  >
					</div>
						  
          <div class="form-group">
						<label>photo</label>
						<input value="<?PHP echo $photo?>" class="form-control" name="photo" id="photo" type="file" ></textarea>
					</div>
					<div class="form-group">
						<label>date_debut</label>
						<input value="<?PHP echo $date_debut?>" class="form-control" name="date_debut" id="date_debut"  type="date" ></textarea>
					</div>
                    <div class="form-group">
						<label>date_fin</label>
						<input value="<?PHP echo $date_fin?>" class="form-control" name="date_fin" id="date_fin"  type="date" ></textarea>
					</div>

	
					<button type="submit" name="modifier" value="modifier" class="ajouter">modifier</button>
            
						</form><?PHP }}

if (isset($_POST['modifier'])){
    $pubC=new pubC();
	$pub=new pub($_POST['idcom_ini'],$_POST['photo'],$_POST['date_debut'],$_POST['date_fin']);
	$pubC->modifierpub($coupon,$_POST['idcom_ini']);
	header('Location: index_pub.php');
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




