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
   <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>THNEYTI Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>THNEYTI</h1>
        </div>
        <ul>
            <li><a href ="index.php"><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </a></li>
            <li><a href ="index.php"><img src="reading-book (1).png" alt="">&nbsp;<span>Offers</span></a> </li>
            <li><a href ="index.php"><img src="teacher2.png" alt="">&nbsp;<span>Clients</span></a> </li>
            <li><a href ="index.php"><img src="school.png" alt="">&nbsp;<span>Reclamations</span></a> </li>
            <li><a href ="index.php"><img src="payment.png" alt="">&nbsp;<span>Income</span> </a></li>
            <li><a href ="index.php"><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></a></li>
            <li><a href ="index.php"><img src="info.png" alt="">&nbsp; <span>forum</span></a></li>
            <li><a href ="index.php"><img src="settings.png" alt="">&nbsp;<span>Settings</span></a> </li>
        
        </ul>
    </div>

    <div class="container">
        <div class="header">
            <div class="nav">
               
                <div class="user">
                    
                    <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><img src="search.png" alt=""></button>
                   
                </div>
                    <img src="notifications.png" alt="">
                    <div class="img-case">
                        <img src="user.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>194</h1>
                        <h3>poste</h3>
                    </div>
                    <div class="icon-case">
                        <img src="students.png" alt="">
                    </div>
                </div>
                
                <div class="card">
                    <div class="box">
                        <h1>5</h1>
                        <h3>commentaires</h3>
                    </div>
                    <div class="icon-case">
                        <img src="teachers.png" alt="">
                    </div>
                </div>

                <div class="card">
                    <div class="box">
                        <h1>forum</h1>
                       
                    </div>
                    <div class="icon-case">
                        <img src="info.png" alt="">
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1></h1>
                        <h3></h3>
                    </div>
                    <div class="icon-case">
                       
                    </div>
                </div>
            </div>
            <!-- <a href="tri_date.php">Tri Par date</a> -->
            
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h1>modifier postes</h1>
                        <a href="index.php" class="btn"> retour a la liste des postes</a>
                        
                        
                    
                    </div>
                    
                    <table>
                   
          
                   
            
            
        

    <form name="modifier poste"  method="POST" action="modifier.php?id=<?PHP echo $row['id_poste']; ?>" >
						
					<div class="form-group">
					<h2>id_poste </label>
					<input type="hcinden" class="form-control" name="idcom_ini" id="idcom_ini" value="<?PHP echo $_GET['id_poste'];?>"  >
					</div>
						  
          <div class="form-group">
						<h2>titre</label>
						<input value="<?PHP echo $titre?>" class="form-control" name="titre" id="titre" type="texte" ></textarea>
					</div>
					<div class="form-group">
						<h2>contenu</label>
						<input value="<?PHP echo $contenu?>" class="form-control" name="contenu" id="contenu"  type="texte" ></textarea>
					</div>

					
					<div class="form-group">
						<h2>date_de_pub</label>
						<input value="<?PHP echo $date_de_pub?>" class="form-control" name="date_de_pub" id="date_de_pub" type="date" ></textarea>
					</div>
					

					
          <button    type="submit" class="btn btn-primary" name="modifier" Onclick="return validateForm()"  >modifier </button> 

      
					

					         
						</form><?PHP }}

if (isset($_POST['modifier'])){
    $posteC=new posteC();
	$poste=new poste($_POST['idcom_ini'],$_POST['titre'],$_POST['contenu'],$_POST['image'],$_POST['date_de_pub']);
	$posteC->modifier($poste,$_POST['idcom_ini']);
	header('Location: index.php');
} ob_end_flush();?>


</body>