<!-- Connect to the database -->
<?php
  session_start(); 

  if (!isset($_SESSION['e'])) {
    $message = "You have to log in to see this website.";
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

        <main class="top-down contact-container" style="padding-top: 0px; padding-bottom: 0px;" >

            <h2>You can change your password, edit your email or delete your account here.</h2>
            <div class="contact-container">
            <form class="contact-form" action="change-delete-users.php" method="POST">
                <section>
                <h3>Change your password here: </h3>
                <label for="email">Type in your email</label><br>
                <input type="text" name="email"><br>
                <label for="password">Type in your current password:</label><br>
                <input type="password" name="password"><br>
                <label for="password">Type in your new password:</label><br>
                <input type="password" name="password_new">
                </section>
                <section>
                <input type="submit" name="change-password" value="Change password">
                </section>
            </form>
            
            <form class="contact-form" action="change-delete-users.php" method="POST">
                <section>
                <h3>Delete your account: </h3>
                <label for="email">Type in your email</label><br>
                <input type="text" name="email"><br>

                <label for="password">Type in your password:</label><br>
                <input type="password" name="password"><br>
                <input type="checkbox" required > 
                I am sure, I want to delete my account.<br>
            </section>
            <section>
                <input type="submit" name="remove-account" value="Delete account">
            </section>
            </form>  
        </div>
        </main>

        <footer>
            <?php include 'components/footer.php' ?>
        </footer>
    </div>
</body>
</html>

