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
        margin-bottom: 20px;
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
            <li><a href="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="index.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>
            <li><a href="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span> </a></li>
            <li><a href="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span> </a> </li>
        </ul>
    </div>


</body>
</html>


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
		$etat=$row['etat'];
   
    if (isset($_POST['length'])) {
      include 'class.coupon.php';
      $no_of_coupons = $_POST['no_of_coupons'];
      $length = $_POST['length'];
      $prefix = $_POST['prefix'];
      $suffix = $_POST['suffix'];
      $numbers = $_POST['numbers'];
      $letters = $_POST['letters'];
      $symbols = $_POST['symbols'];
      $random_register = $_POST['random_register'] == 'false' ? false : true;
      $mask = $_POST['mask'] == '' ? false : $_POST['mask'];
      $coupons = coupon::generate_coupons($no_of_coupons, $length, $prefix, $suffix, $numbers, $letters, $symbols, $random_register, $mask);
      foreach ($coupons as $key => $value) {
        echo $value."\n ";
      }
      die();
    
}
    ?>


    <form name="modifier coupon"  method="POST" action="modifier_coupon.php?id=<?PHP echo $row['id']; ?>" >
						
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
						<label>etat</label>
						<input value="<?PHP echo $etat?>" class="form-control" name="etat" id="etat" type="number" ></textarea>
					</div>
					


          <label for="code_coupon">code coupon:<input type="text" id="code_coupon" placeholder="entrer votre code coupon" name="code_coupon" > <a href="index2.php"> </a>
					</div>
				
					
					
				
					



                            
                           
                           
                           
                          
						</form><?PHP }}
            

if (isset($_POST['modifier'])){
	$coupon=new coupon($_POST['idcom_ini'],$_POST['date_deb'],$_POST['date_experation'],$_POST['taux_reduction'],$_POST['code_coupon'],$_POST['etat']);
	$couponC->modifiercoupon($coupon,$_POST['idcom_ini']);
	header('Location: index_coupon.php');
} ob_end_flush();?>
</div>

<!DOCTYPE html>
<html>
<head>

	 <!-- Bootstrap -->
    
</head>
<body>
	
		<div class="row">
			<div class="col-md-12">
			
				<form action="index2.php" method="post" id="coupon_form">
					<table class="table table-striped">
						<tr>
							<th>Parameter</th>
							<th>Type</th>
							<th>Default</th>
							<th>Custom value</th>
						</tr>
						<tr>
							<th>Number of coupons</th>
							<td>number</td>
							<td>1</td>
							<td><input class="form-control" type="number" name="no_of_coupons" value="1" min="1"/></td>
						</tr>
						<tr>
							<th>Length</th>
							<td>number</td>
							<td>6</td>
							<td><input class="form-control" type="number" name="length" value="6" min="1" /></td>
						</tr>
						<tr>
							<th>Prefix</th>
							<td>string</td>
							<td></td>
							<td><input class="form-control" type="text" name="prefix" value="prefix-" /></td>
						</tr>
						<tr>
							<th>Suffix</th>
							<td>string</td>
							<td></td>
							<td><input class="form-control" type="text" name="suffix" value="-suffix" /></td>
						</tr>
						<tr>
							<th>Numbers</th>
							<td>boolean</td>
							<td>true</td>
							<td>
								<select class="form-control" name="numbers">
								  	<option value="false">False</option>
								  	<option selected value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Letters</th>
							<td>boolean</td>
							<td>true</td>
							<td>
								<select class="form-control" name="letters">
								  	<option value="false">False</option>
								  	<option selected value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Symbols</th>
							<td>boolean</td>
							<td>false</td>
							<td>
								<select class="form-control" name="symbols">
								  	<option selected value="false">False</option>
								  	<option value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Random register</th>
							<td>boolean</td>
							<td>false</td>
							<td>
								<select class="form-control" name="random_register">
								  	<option selected value="false">False</option>
								  	<option value="true">True</option>
								</select>
							</td>
						</tr>
						<tr>
							<th>Mask</th>
							<td>string or boolean</td>
							<td>false</td>
							<td><input class="form-control" type="text" name="mask" value="XXX-XXX" /></td>
						</tr>
					</table>
					<div class="col-md-offset-8 col-md-4">
						<button type="submit" class="btn btn-success pull-right">Generate</button>
						<br/><br/>
					</div>
					<hr />
						<textarea class="form-control" placeholder="Result here" id="result" rows="3" readonly=""></textarea>
					<hr />
					<div class="col-md-offset-8 col-md-4">
						<button type="button" onclick="exporttocsv()" class="btn btn-success pull-right">Export Codes to Excel</button>
					</div>
					<br/><br/><br/><br/><br/>
				</form>
			</div>
		</div>
	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript">
	$(document).ready(function(){
		$('#coupon_form').submit(function() {
			var no_of_coupons = $('input[name="no_of_coupons"]').val();
			var length = $('input[name="length"]').val();
			var prefix = $('input[name="prefix"]').val();
			var suffix = $('input[name="suffix"]').val();
			var numbers = $('select[name="numbers"]').val();
			var letters = $('select[name="letters"]').val();
			var symbols = $('select[name="symbols"]').val();
			var random_register = $('select[name="random_register"]').val();
			var mask = $('input[name="mask"]').val();

			$('#result').load('index2.php', {
				no_of_coupons: no_of_coupons,
				length: length,
				prefix: prefix,
				suffix: suffix,
				numbers: numbers,
				letters: letters,
				symbols: symbols,
				random_register: random_register,
				mask: mask
			});
			return false;
		});
	});

	function exporttocsv() {
		if ($('#result').val()) {
			var a = document.createElement('a');
			with (a) {
				href='data:text/csv;base64,' + btoa($('#result').val());
				download='csvfile.csv';
			}
			document.body.appendChild(a);
			a.click();
			document.body.removeChild(a);
	        }
        };
	</script>
	
</body>
</html>

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

      
  
      <button type="submit" name="modifier" value="modifier" class="ajouter">modifier</button>


      



