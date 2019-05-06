<?php
    include('server.php');
?>
  <!DOCTYPE html>
  <html>

  <head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="css/style.css", id="theme">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  </head>

  <body onload="setTheme()">
    <!--find free use image-->
    <!--<?php if  (isset($_SESSION['success'])): ?>-->
    <div class="content">
      <div class="sidenav">
            <div class="tooltip">
              <a href="home.php">
                <center>
                  <img src="media/home.png" width="47">
                </center>
              </a>
              <span class="tooltiptext">Home</span>
            </div>
            <div class="tooltip">
              <a href="profile.php">
                <center>
                  <img src="media/profile.png" width="45" height="45">
                </center>
              </a>
              <span class="tooltiptext">Profile</span>
            </div>
            <div class="tooltip">
              <a href="settings.php">
                <center>
                  <img src="media/settings.png" width="50">
                </center>
              </a>
              <span class="tooltiptext">Settings</span>
            </div>
            <center style="margin-top: 50vh;"></center>
            <div class="tooltip">
              <a href="index.php?logout='1'">
                <center>
                  <img src = "media/logout.png" width="40" style="bottom: 0">
                </center>
              </a>
              <span class="tooltiptext">Logout</span>
            </div>
          </div>
      <div class="heading">
        <h1>
          profile
        </h1>
      </div>
      <br>
      <br>
      <br>
      <br>
      <div class="main">
        <table width="50%" style="table-layout: fixed;">
          <tr>
            <td style="width:22%" align="center">
              <table>
                <tr>
                  <td>
                    <?php
                    include("config.php");
                    $email = $_SESSION['email'];
                    $sql = "SELECT profile_picture FROM users WHERE email='$email'";
                    $sth = $db->query($sql);
                    $result=mysqli_fetch_array($sth);
                    echo '<img src="data:image/jpeg;base64,'.base64_encode( $result['profile_picture'] ).'" width="11%" height="11%" class="profilepic" align = "center"/>';
                    ?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <form action="profile.php" method="post" enctype="multipart/form-data">
                      <input type="file" name="file" class="chooseFile" />
                      <input type="submit" name="pic" value="Upload" class="update" />
                    </form>
                  </td>
                </tr>
              </table>
            </td>
            <td style="width:20%">
            </td>
            <td style="width:50%">
              <form action="profile.php" method="post">
                Change name
                <br>
                <input class="changeText" type="text" name="changeName" placeholder="<?php echo $_SESSION['name'] ?>"  required>
                <br>
                <br> Change email
                <br>
                <input class="changeText" type="text" name="changeEmail" placeholder="<?php echo $_SESSION['email'] ?>"  >
                <br>
                <br> Change password
                <br>
                <input class="changeText" type="password" name="changePassword" >
                <!--<?php echo $_SESSION['password'] ?>-->
                <br><br><br>
                <button type="submit" class="update" name="update">Update</button>
                <!--<?php /*echo $_SESSION['name']*/ ?>-->
              </form>
            </td>
          </tr>
          <tr>
            <td>
                <button type="button" onclick="switchThemeNormal()" id="normalTheme">Normal</button>
            </td>
            <td>
                <button type="button" onclick="switchTheme()" id="darkTheme">Dark</button>
            </td>
            <td>
              <?php include('errors.php') ?>
            </td>
          </tr>
        </table>
      </div>
    </div>
    <!--<?php else: ?>
    <div style="font-size:20px">
      You are not logged in!
    </div>
    <meta http-equiv="refresh" content="2; URL='/index.php">
    <?php endif ?>-->
      
    <script type="text/javascript" src="js/script.js"></script>
  </body>

  </html>