<?php 
$number = 0.00;

function asPound($value) {
  return '£' . number_format($value, 2);
}
?>

<div class="header-item"></div>
<div class="header-item">
    <a href="./index.php"><img class="website-logo" src="./Pictures/website-logo.png"></a>
    <h1>Napier Flower Shop</h1>
</div>
<div class="header-item header-right">
    <ul>
    
        <li>
            <button onclick="document.getElementById('login-wrapper').style.display='block'"> Login
            </button> 

        </li>
        <li>
            <button onclick="document.getElementById('register-wrapper').style.display='block'"> Register
            </button> 
        </li>
    
        <!-- <li> 
            <a href="logout.php">Logout</a>
        </li> -->
    
        
        
        <li ><?php echo asPound($number);?> </li>
        <li style="margin-left: 5px"><img src="./Pictures/Icons/shopping-bag.png"></li>	
    </ul>
</div>