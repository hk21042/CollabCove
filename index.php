<?php
    include('server.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link type = "text/css" rel="stylesheet" href="css/style.css">
    <link type = "text/css" rel="stylesheet" href="css/form.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  </head>
  <body>

    <br>
    <a href="index.php">
      <center>
        <img src="media/logo.png" height="45" alt="logo">
      </center>
    </a>
    <br>
  
    <p class="line"></p>
  
    <br>
    <br>
  <center>
        <div class="form">
        <div class="formtitle">
          <h1>Log In</h1>
          <h3>Welcome Back</h3>
        </div>
        <form id="formfull" action="index.php" method="post">
        <div class="row">
          <div class="rowfakediv"><img src="https://png.icons8.com/material/30/424242/mail.png" alt="usernameicon"></div>
          <div class="flex2">
            <span class="input1 input--hoshi">
              <input class="input__field input__field--hoshi" name="email" placeholder="Email" type="email" id="input-1" value="" required/>
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-1">
                <span class="input__label-content--hoshi"></span>
              </label>
            </span>
          </div>
        </div>
        <div class="row">
          <div class="rowfakediv"><img src="https://png.icons8.com/material/30/424242/lock.png" alt="passwordicon"></div>
          <div class="flex2">
            <span class="input1 input--hoshi">
              <input class="input__field input__field--hoshi" name="password" placeholder="Password" type="password" id="input-2" required/>
              <label class="input__label input__label--hoshi input__label--hoshi-color-1" for="input-2">
                <span class="input__label-content--hoshi"></span>
              </label>
            </span>
          </div>
        </div>
        <a href="forgot.php" class="forgot">Forgot Password?</a>
        <h3 class="dontalready">Don't have an account? <a href="register.php" class="dontalreadylink">Sign Up</a></h3>
          <div class="btns">
            <button type="submit" class="login" name="login">Log In</button>
          </div>
        </form>
      </div>
        <div>
          <!-- validation error messages -->
          <?php include('errors.php') ?>
    </div>
  </center>
  <!--<center><div style="border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; -khtml-border-radius: 10px; -icab-border-radius: 10px; -o-border-radius: 10px; border-top: 1px solid #cccccc; border-bottom: 5px solid #eeeeee; background: #F9F9F9; border: 2px solid #cccccc; margin-bottom: 5px; width: 20%"; align="center";>x<br>y</div></center>-->
  <script src="js/form.js"></script>
</body>
</html>
<!--border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px; -khtml-border-radius: 10px; -icab-border-radius: 10px; -o-border-radius: 10px;-->
  <!--style="{{roundy|10px}} background: #F9F9F9; border: 2px solid #2b6ab8; margin-bottom: 5px;" width="50%" align="{{{align|right}}}"-->