<?php include('server.php');?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link type = "text/css" rel="stylesheet" href="css/style.css">
    <link type = "text/css" rel="stylesheet" href="css/tasks.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  </head>
  <body onload="loadTasks()"><!--find free use image-->
    <?php if  (isset($_SESSION['success'])): ?>
      <div class = "content">
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
                  <img src="media/calendar.png" width="40" height="40">
                </center>
              </a>
              <span class="tooltiptext">Calendar</span>
            </div>
            <div class="tooltip">
              <a href="settings.php">
                <center>
                  <img src="media/settings.png" width="50" style="margin-top: 10px">
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
              tasks
            </h1>
          </div>
          <br>
        <div width="100%" class="orLine"></div>
    </div>
    <div id="newTask">
      <div id="taskContent">
        <span id="close-button" onclick="closeWindow()">&times;</span>
        <form>
          Create a new task <br>
          Task name: <input type="text" name="newTaskName" class = "taskInput" id="task_name" > <br>
          People on task: <input type="text" name="newTaskPeople" class = "taskInput" id="task_person"> <br>
          Due date: <input type="date" name="newTaskDate" class = "taskInput" id="task_date"> <br>
          <?php include('errors.php') ?>
          <input type="submit" value="Done" id="taskDone" onclick="createTask(); loadTasks()">
        </form>

      </div>
    </div>
    <br>
    <div class="main" style="margin-left:120px">
      <table width="100%" style="table-layout: fixed; text-align: center;" id="taskTable">
        <tr style="font-size:18px">
          <th width="10%">
            task
          </th>
          <th width="15%">
            team member
          </th>
          <th width="25%">
            status
          </th>
          <th width="25%">
            priority
          </th>
          <th width="25%">
            due date
          </th>
        </tr>
        <tr>
          <td width="10%">
            <p style="font-size:30px">
              task 1
            </p>
          </td>
          <td width="15%">
            <img src = "media/cove.jpg" class="profilepic1" align = center>&nbsp;&nbsp;&nbsp;name
          </td>
          <td width="25%">
            <div class="taskBox" style="background-color:pink">
              need help
            </div>
          </td>
          <td width="25%">
            <div class="taskBox" style="background-color:orange">
              medium
            </div>
          </td>
          <td width="25%">
            <div class="taskBox" style="background-color:lightgray">
              11/30/18
            </div>
          </td>
        </tr>
        <tr class="taskRows">
          <td width="10%">
            <p style="font-size:30px">
              task 2
            </p>
          </td>
          <td width="15%">
            <img src = "media/cove.jpg" class="profilepic1" align = center>&nbsp;&nbsp;&nbsp;name
          </td>
          <td width="25%">
            <div class="taskBox" style="background-color:mediumpurple">
              brainstorming
            </div>
          </td>
          <td width="25%">
            <div class="taskBox" style="background-color:cornflowerblue">
              low
            </div>
          </td>
          <td width="25%">
            <div class="taskBox" style="background-color:lightgray">
              12/16/18
            </div>
          </td>
        </tr>
      </table>
      <br>
      <br><br>
    <img id="taskButton" src="media/plus_blue.png" onclick="newTask()" />

    </div>
    <?php else: ?>
    <div style="font-size:20px">
      You are not logged in!
    </div>
    <meta http-equiv="refresh" content="2; URL='/index.php">
    <?php endif ?>
    <script type="text/javascript" src="js/tasks.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>