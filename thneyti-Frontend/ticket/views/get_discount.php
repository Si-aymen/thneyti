<?php
	require_once 'config.php';
	$code_coupon = $_POST['coupon'];
	$prixtotal = $_POST['price'];
	
	$query = mysqli_query($config, "SELECT * FROM 'coupon' WHERE `code_coupon` = '$code_coupon' && 'etat' = '0'") or die(mysqli_error());
	$count = mysqli_num_rows($query);
	$fetch = mysqli_fetch_array($query);
	$array = array();
	if($count > 0){
		$taux_reduction = $fetch['taux_reduction'] / 100;
		$total = $taux_reduction * $prixtotal;
		$array['taux_reduction'] = $fetch['taux_reduction'];
		$array['prixtotal'] = $prixtotal - $total;
		
		echo json_encode($array);
		
	}else{
		echo "error";
	}
?>