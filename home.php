<?php
    include('server.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link type = "text/css" rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  </head>
  <body onload="loadProjects()"><!--find free use image-->
      <!--<?php if  (isset($_SESSION['success'])): ?>-->
        <div class = "content">
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
              your cove
            </h1>
          </div>
          <br>
    </div>
      <div id="newProject">
      <div id="projectContent">
        <span id="close-button" onclick="closeWindow1()">&times;</span>
        <form>
          Create a new project <br>
          Project name: <input type="text" name="newProjectName" class = "taskInput" id="project_name" > <br>
          <!--People on task: <input type="text" name="newTaskPeople" class = "taskInput" id="task_person"> <br>-->
          Due date: <input type="date" name="newProjectDate" class = "taskInput" id="project_date"> <br>
          Project description: <input type="text" name="newProjectDescrip" class = "taskInput" id="project_descrip"> <br>
          <?php include('errors.php') ?>
          <input type="submit" value="Done" id="projectDone" onclick="createProject()"> <!-- ; loadTasks()-->
        </form>

      </div>
    </div>
    <br>
    <div class="main">
        <table class="projectTable">
            <tr>
                <td>
                    <div class="projectBox">
                        <a href="tasks.php">
                        <h2>Project Name</h2>
                        <p>Project Description</p>
                    </div>
                </td>
                <td>
                    <div class="projectBox">
                        <a href="tasks.php">
                        <h2>Project Name</h2>
                        <p>Project Description</p>
                    </div>
                </td>
                <td>
                    <div class="projectBox">
                        <a href="tasks.php">
                        <h2>Project Name</h2>
                        <p>Project Description</p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="projectBox">
                        <a href="tasks.php">
                        <h2>Project Name</h2>
                        <p>Project Description</p>
                    </div>
                </td>
                <td>
                    <div class="projectBox">
                        <a href="tasks.php">
                        <h2>Project Name</h2>
                        <p>Project Description</p>
                    </div>
                </td>
                <td>
                    <div class="projectBox">
                        <a href="tasks.php">
                        <h2>Project Name</h2>
                        <p>Project Description</p>
                    </div>
                </td>
            </tr>
        </table>
        <img id="taskButton" src="media/new_plus_blue.png" onclick="newProject()" />
    </div>
    <!--<?php else: ?>
    <div style="font-size:20px">
      You are not logged in!
    </div>
    <meta http-equiv="refresh" content="2; URL='/index.php">
    <?php endif ?>-->
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/tasks.js"></script>
  </body>
</html>