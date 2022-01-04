<!DOCTYPE html>

<html>
<head>
	<title>Snack Bar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Style/css/style.css">
     <link rel="stylesheet" href="../Style/css/produit.css">
    <link rel="stylesheet" href="../Style/css/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/admin-style.css" />
    <link rel="stylesheet" href="../assets/fontawesome/css/all.min.css" />
</head>
<body>
	
	<div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">

                	<?php
        			require 'database.php';
        			$db= Database::connect();
        			$statement = $db->query('SELECT boisson.name, boisson.type, boisson.prix_unitaire, boisson.image,boisson.quantite FROM boisson ');
        			while($item = $statement->fetch())
        			{
        				$url='url("../Image/'. $item['image'].'")';
        				if(empty($_SESSION['name'])) {$Connecte='pageClient.php';} else {$Connecte='Authentification.php' ;}
        				echo "<article class='wrapper' style='background-image:" . $url . ";'>";
					 	echo '<div class="overlay">';
					 	echo '<h4>' .$item['name']. ' </h4>';
					 	echo '<p class="description">' .$item['type']. '<br>' .$item['quantite']. '</p>';
					 	echo '<p class="prix">' .$item['prix_unitaire']. '</p>';
					 	echo '<form class="form" action=' . $Connecte . '>';
					 	echo	'<input class="btn btn-success" type="submit" value="commander" class="bouton2">';
					 	echo'</form>';
					 		
					 	echo '</div>';
					 	echo '</article>';
        			}
        			Database::disconnect();
        			?>

        			<div class="clear"></div>


                </div>
            </div>
        </section>

    </div>

</body>
</html>