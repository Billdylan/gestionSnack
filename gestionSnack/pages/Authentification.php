<!DOCTYPE html>
<?php
    include 'verificationLogin.php';
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
</head>
<body>
    <div class="main">
        <br><br><br><br>
        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">

                    <form id="password" class="form-input" action="<?php if(!$isSuccess) {echo 'Authentification.php';} else {echo 'pageClient.php';}?>" method="post">
                        <h2 class="form-title">Inscription</h2>
                        <div class="form-group">
                             <input type="text" name="username" class="form-input" placeholder="Username" value="<?php echo $username;?>">
                             <i><p ><?php  echo $usernameerror;?></p></i>
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-input" name="password" id="password" placeholder="Mot de passe" value="<?php echo $password;?>">
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            <i><p ><?php  echo $passworderror ;?></p></i>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up">
                        </div>
                    </form>
                    <br><br><br><br><br>

                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="../Script/vendor/jquery/jquery.min.js"></script>
    <script src="../Script/main.js"></script>
</body>
</html>