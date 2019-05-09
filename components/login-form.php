<div id="login-wrapper" class="modal">
    <form class="modal-content animate" action="login.php" method="POST">
        <div class="modal-close">
            <span onclick="document.getElementById('login-wrapper').style.display = 'none'" class="close" title="Close PopUp">&times;
            </span>
            <h1>Login</h1>
        </div>
        <div class="register-form">
            <input type="email" placeholder="Enter your email" name="email">
            <input type="password" placeholder="Enter your password" name="password">
            <input type="submit" name="login" value="Login">
        </div>
    </form>
</div>