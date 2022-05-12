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
  margin-bottom: 10px;
        margin-right : 100px;
}
table {
  text-align: center;
  margin-bottom: 10px;
        margin-right : 100px;

}
    </style>
<body>
<div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
       
        <ul>
        <li><a href="dashboard.php"><img src="dashboard (2).png" alt="">&nbsp; <span> Dashboard</span> </a></li>
            <li><a href="offre.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span> </a> </li>
            <li><a href="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span>  </a></li>
            <li><a href="indexreclamation.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span>  </a></li>
            <li><a href="indexrep.php"><img src="school.png" alt="">&nbsp;<span>Réponses</span>  </a></li>
            <li><a href="indexcat.php"><img src="school.png" alt="">&nbsp;<span>Catégories</span>  </a></li>
            <li><a href="reservation_index.php"><img src="payment.png" alt="">&nbsp;<span>reservation</span>  </a></li>
            <li><a href="forum.php"><img src="info.png" alt="">&nbsp;<span>forum</span>  </a></li>
            <li><a href ="index_coupon.php"><img src="coupon.png" alt="">&nbsp;<span>code</span></a> </li>
            <li><a href ="index_pub.php"><img src="settings.png" alt="">&nbsp;<span>publicite</span></a> </li>       
            <li><a href="indexticket.php"><img src="settings.png" alt="">&nbsp;<span>Commande</span> </a> </li>
        </ul>
    </div>
    

</body>
</html>


<?php 
require_once '../controller/couponC.php';



$couponC=new couponC();
$s=0;  
if(isset($_POST['id'])&&
  isset($_POST['date_deb'])&&
isset($_POST['date_experation'])&&
 isset($_POST['taux_reduction']) && 
isset($_POST['code_coupon'])&&
isset($_POST['etat'])


)
{
    $coupon=new coupon($_POST['id'],$_POST['date_deb'],$_POST['date_experation'],$_POST['taux_reduction'],$_POST['code_coupon'],$_POST['etat']);
 $s=1;
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
}
   



?>

<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!-- Bootstrap CSS -->
 
</head>
<body>

<button><a href="index_cupon.php">Retour à la liste</a></button>
<script>
        function validateForm() {
            var letters = /^[A-Za-z]+$/;
            var dateNow = new Date();
            
            var n = document.getElementById("code_coupon").value;
            var p = document.getElementById("taux_reduction").value;
            
            if (n == "") {
                alert("le code coupon est vide !!");
                return false;
            }
            else if (!(n.match(letters) )) {
               alert("Veuillez entrer un code coupon valid!");
               return false ;
               }
               
           
               else if ((isNaN(p)==true)|| (p<20)||(p>50))
{ 
  alert("le champ de saisi doit être numériques");



  
return false;
        
    }
   

    
        
    }
    </script>
 


    
  
<form action="" method="POST">
<fieldset>
 <div><pre>
 <div class="form-group">
<label for="id">id: <input type="number" id="id:" name="id" > <br>
  </div>
  <div class="form-group">
<label for="date_deb">date debut: <input type="date"  id="date_deb:" name="date_deb" > <br>  
<div class="form-group"> 
<label for="date_experation">date experation: <input type="date"  id="date_experation" name="date_experation"><br>
<div class="form-group">
<label for="taux_reduction">taux reduction: <input type="number" id="taux_reduction"   name="taux_reduction" ><br>
<div class="form-group">
<label for="code_coupon">code coupon:<input type="text"class="form-control"  id="code_coupon" placeholder="entrer votre code coupon" name="code_coupon" ><br>
<div class="form-group">
<label for="etat">etat : <input type="number" id="etat"   name="etat">



	
				
			</div>  
      
      </pre> 
          
     <button   type="submit" class="btn btn-primary" name="submit" Onclick="return validateForm()" > valider </button> 
     
     </fieldset>
     
        </form>
     

      
        
      
        <?php if($s==1)
        
        
{
  

echo "<script>
alert('Vous avez ajouter un coupon');
</script>";
        echo "<script> window.location.href='index_coupon.php'
        </script>";
       
        $couponC->ajoutercoupon($coupon); 
}?>  
  <form action="index2.php" method="post" id="coupon_form">
					<table class="table ">
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
			</div>
				
			



</body>
</html> 