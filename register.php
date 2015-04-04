<?php include 'includes/header.php'; ?>
<h2>Register</h2>
<form action="create_user.php" method="post">
    First Name <input type="text" name="fname"/> <br><br>
    Last Name <input type="text" name="lname"/><br><br>
    Email  <input type="text" name="email"/><br><br>
    Mobile <input type="text" name="mobile"/><br><br>
    Password <input type="password" name="password"/><br><br>
    Address <textarea name="address"></textarea><br><br><br>
    <input type="submit" value="Register"/>
</form>
                        
 <?php include 'includes/footer.php'; ?>
                

