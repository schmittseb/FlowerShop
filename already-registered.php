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
                <?php include 'components/header1.php' ?>
            </header>

            <nav class="navigation-bar">
                <?php include 'components/navigation.php' ?>
            </nav>

        </div>

        <main class= "home-content-container">
            <div class="welcome-text-on-picture"> 
                <p>       
                    A user with this email address is already registered! <br>
                    Please login with your existing user account, reset your password or create a user with another email address.
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


