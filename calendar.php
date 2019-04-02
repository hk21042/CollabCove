<?php include('server.php');?>
<!DOCTYPE html>
<html>

<head>
  <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
</head>
<body>
  <!--find free use image-->
  <!--<?php if  (isset($_SESSION['success'])): ?>-->
  <div class="content">
    <div class="sidenav">
            <div class="tooltip">
              <a href="home.php">
                <center>
                  <img src="media/home.png" width="47" style="padding-bottom: 10px">
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
              <a href="tasks.php">
                <center>
                  <img src="media/tasks.png" width="50" height="50">
                </center>
              </a>
              <span class="tooltiptext">Tasks</span>
            </div>
            <div class="tooltip">
              <a href="messages.php">
                <center>
                  <img src="media/messages.png" width="60" height="60">
                </center>
              </a>
              <span class="tooltiptext">Messages</span>
            </div>
            <div class="tooltip">
              <a href="calendar.php">
                <center>
                  <img src="media/calendar.png" width="40" height="40" style="margin-bottom:5px">
                </center>
              </a>
              <span class="tooltiptext">Calendar</span>
            </div>
            <div class="tooltip">
              <a href="settings.php">
                <center>
                  <img src="media/settings.png" width="50" style="margin-top: 5px">
                </center>
              </a>
              <span class="tooltiptext">Settings</span>
            </div>
            <center style="margin-top: 43vh;"></center>
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
        calendar
      </h1>
    </div>
    <br>
    <div width="100%" class="orLine"></div>
  </div>
  <br>


  <div class="main" style="margin-left:120px">
    <table class="scheduleTable" width="100%" style="table-layout: fixed; text-align:center;">
      <tr>
        <th>
          <?php
            $today = date("m.d.y");
            echo $today;
          ?>
        </th>
        <th>
          <?php
            $date = date("m.d.y", strtotime("+1 day", strtotime($today)));
            echo $date;
          ?>
        </th>
        <th>
          <?php
              $date = date("m.d.y", strtotime("+2 day", strtotime($date)));
              echo $date;
            ?>
        </th>
        <th>
          <?php
              $date = date("m.d.y", strtotime("+3 day", strtotime($date)));
              echo $date;
            ?>
        </th>
        <th>
          <?php
              $date = date("m.d.y", strtotime("+4 day", strtotime($date)));
              echo $date;
            ?>
        </th>
        <th>
          <?php
              $date = date("m.d.y", strtotime("+5 day", strtotime($date)));
              echo $date;
            ?>
        </th>
        <th>
          <?php
              $date = date("m.d.y", strtotime("+6 day", strtotime($date)));
              echo $date;
            ?>
        </th>
      </tr>
      <tr style="height: 30px">
          
      </tr>
      <tr style="height: 30px" class = "taskRow" > 
        <td colspan = "2" class = "taskBlock">task #</td>
      </tr>
    </table>
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