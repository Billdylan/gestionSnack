<!DOCTYPE html>
<?php

    include 'verificationLogin.php';
?>
<html>
<head>
	<title>Snack µ/</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Style/css/style.css">
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

                	<div id="wrapper">
 
				        <!-- Sidebar -->
				        <div id="sidebar-wrapper">
				           <ul class="sidebar-nav mt-1">
				               <li class="sidebar-brand">
				                   <a class="h3" href="">
				                       <?php  echo $username;?>
				                   </a>
				               </li>
				               <li>
				                   <a href="pageProprietaire.php"> <i class="fas fa-home"></i> Home Propi </a>
				               <li>
				                   <a href="ListeGerant.php"><i class="fas fa-clipboard-list"></i>Les gerants</a>
				               </li>
				               <li>
				                   <a href="ListeClient.php"><i class="fas fa-user-alt"></i> Les client</a>
				               </li>
				               <li>
				                   <a hre="ListeProduit.php"><i class="far fa-images"></i> stocks</a>
				               </li>
				               
				               
				           </ul>
				       </div>

				     <div class="jumbotron">
				        <p>Bienvenu Bien venue Mr. le proprietaire sur votre page</p>
				    </div> 

				    <div class="row">
				        <div class="col-md-7">
				            <div class="jumbotron">
				                <h2 class="card-title">
				                    <b> 
				                        <marquee behavior="" direction="">  trop d'ennui!!     mais M e R c I   !</marquee> </b></h2>
				                <p class="card-text">
				                   ICI 
				                </p>
				            </div>
				        </div>
				    </div>

                </div>
            </div>
        </section>

    </div>
	<script src="../Script/vendor/jquery/jquery.min.js"></script>
    <script src="../Script/main.js"></script>
    <script src="../Script/js/bootstrap.min.js"></script>

</body>
</html>