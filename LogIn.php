<?php
include ("connection.php");
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="LogIn.css">
  <title>Card</title>
</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form method="POST" class="form" action="Project.php">
        <label for="user-email" style="padding-top:13px">
          Email
          </label>
        <input id="user" class="form-content" type="text" name="user" autocomplete="on" required />
        <div class="form-border"></div>

        <label for="user-password" style="padding-top:22px">Password
          </label>
        <input id="pass" class="form-content" type="password" name="pass" required />
        <div class="form-border"></div>   
        
 <input id="submit-btn" type="submit" name="submit" value="LOGIN"   />
  
        <a href="Sign Up.html" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>
</body>
<!--script src="login.js"></script-->

</html>