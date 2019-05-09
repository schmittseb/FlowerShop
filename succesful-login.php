<?php
  session_start(); 

  if (!isset($_SESSION['e'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: index.php');
  }
  /*if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }*/
?>


<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link rel="icon" href="./Pictures/Icons/icon-tab.png">

    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    </head>
    <body>

        <div class="wrapper">

            <div class="header-nav-container">

            <header>
                <?php include 'components/header2.php' ?>
            </header>

            <nav class="navigation-bar">
                <?php include 'components/navigation.php' ?>
            </nav>

            </div>

        <main class= "home-content-container">
            <div class="welcome-text-on-picture"> 
                <p>       
                    You have been succesfully logged in!<br>
                    To change your password, your email or delete your account please click <a href="./admin.php">here</a>.
                </p>
            </div>
            <?php include 'components/login-form.php' ?>
            <?php include 'components/register-form.php' ?>
        </main>

        <footer>
            <?php include 'components/footer.php' ?>
        </footer>
    </div>
</body>
</html>


