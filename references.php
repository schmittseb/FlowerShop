<!DOCTYPE html>
<html>
    <head>
        <title>References</title>
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
                    Icons are made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> and are licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY.</a><br><br>
                    Product photos by <a href="https://www.pexels.com/@studio-7042-215243">Studio 7042.</a><br><br>
                    Background picture on the homepage by <a href="https://unsplash.com/@katybelcher">Katy Belcher.</a><br><br>
                    Website made by <a href="mailto:sschm95@outlook.de">Sebastian Schmitt.</a>
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