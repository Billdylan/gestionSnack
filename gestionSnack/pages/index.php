
<!DOCTYPE html>
<?php 
	include 'verification.php';
?>
<html>
<head>

	<title>Snack bar</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../Style/css/style.css">
    <link rel="stylesheet" href="../Style/css/css/bootstrap.min.css">

</head>
<body>
    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">

                    <form method="post" action="<?php if(!$isSuccess) {echo 'index.php';} else {echo 'Authentification.php';}?>" id="signup-form" class="signup-form" name="form">

                        <h2 class="form-title">Inscription</h2>

                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Votre Nom" value="<?php echo $name;?>">
                            <i><p><?php  echo $nameerror ;?></p></i>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Votre Email" value="<?php echo $email;?>">
                            <i><p ><?php  echo $emailerror ;?></p></i>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mot de passe" value= "<?php echo $password;?>">
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <i><p ><?php  echo $passworderror ;?></p></i>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Mot de passe"  value= "<?php echo $re_password;?>">
                            <i><p ><?php  echo $re_passworderror ;?></p></i>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="Age" id="re_password" placeholder="Age"  value= "<?php echo $Age;?>">
                            <i><p ><?php  echo $Ageerror ;?></p></i>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="type" id="re_password" placeholder="type de compte"  value= "<?php echo $type;?>">
                            <i><p ><?php  echo $typeerror ;?></p></i>
                        </div>

                        
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term">
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>J'accepte les conditions d'utilisation <a href="#" class="term-service">Condition d'utilisation</a></label>
                        </div>

                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up">
                        </div>
                        
                    </form>
                    <p class="loginhere">
                       Vous avez deja un compte? <a href="Authentification.php" class="loginhere-link">Indentification ici</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../Script/vendor/jquery/jquery.min.js"></script>
    <script src="../Script/main.js"></script>
    <script src="../Script/js/bootstrap.min.js"></script>
</body>
</html>