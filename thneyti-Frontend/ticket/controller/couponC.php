
<?php
include '../config.php';

class couponC{
public function ajouter($couponC){
	$pdo=config::getConnexion();
	try {
		$query=$pdo->prepare(
			"INSERT INTO coupon (id,date_deb,date_experation,taux_reduction,code_coupon,etat) VALUES (:id,:date_deb,:date_experation,:taux_reduction,:code_coupon,:etat);"
		);
		$query->execute([
                     
		'id'=>$couponC->getid(), 
		'date_deb'=>$couponC->getdate_deb(),
		'date_experation'=>$couponC->getdate_experation(),
		'taux_reduction'=>$couponC->gettaux_reduction(),
		'code_coupon'=>$couponC->getcode_coupon(),
        'etat'=>$couponC->getetat(),

		]);
	}
	catch(PODException $e) {
		$e->getMessage();
	}
}
}?>