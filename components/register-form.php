<div id="register-wrapper" class="modal">
  <form class="modal-content animate" action="register.php" method="POST">
    <div class="modal-close">
      <span onclick="document.getElementById('register-wrapper').style.display='none'" class="close" title="Close PopUp">
        &times;
      </span>
      <h1>Register</h1>
    </div>
    <div class="register-form">
      <p> To register to this webshop, please fill out the following fields. </p>
      <input type="email"  placeholder="Enter your email" name="email" required="required"/>
      <input type="password" id="password" placeholder="Enter your password" name="password" required="required"/>
      <input type="submit" name="register" value="Register">
      <a href="#">Forgot Password ?</a>
    </div>
  </form>
</div>