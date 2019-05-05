<?php include('server.php');?>
<!DOCTYPE html>
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet' type='text/css'>
    <link type = "text/css" rel="stylesheet" href="css/style.css" id="theme">
    <link type = "text/css" rel="stylesheet" href="css/tasks.css">
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
  </head>
  <body onload="loadTasks(), setTheme()"><!--find free use image--> 
    <!--<?php if  (isset($_SESSION['success'])): ?>-->
      <div class = "content">
          <div class="sidenav">
            <div class="tooltip">
              <a href="home.html">
                <center>
                  <img src="media/home.png" width="47">
                </center>
              </a>
              <span class="tooltiptext">Home</span>
            </div>
            <div class="tooltip">
              <a href="profile.html">
                <center>
                  <img src="media/profile.png" width="45" height="45">
                </center>
              </a>
              <span class="tooltiptext">Profile</span>
            </div>
            <div class="tooltip">
              <a href="settings.html">
                <center>
                  <img src="media/settings.png" width="50">
                </center>
              </a>
              <span class="tooltiptext">Settings</span>
            </div>
            <center style="margin-top: 50vh;"></center>
            <div class="tooltip">
              <a href="index.html?logout='1'">
                <center>
                  <img src = "media/logout.png" width="40" style="bottom: 0">
                </center>
              </a>
              <span class="tooltiptext">Logout</span>
            </div>
          </div>
          <div class="heading">
            <h1>
              Project Name
            </h1>
            <h2 style="color: #48516e">
                Due Date: 5/10/2019
            </h2>
            <h3 style="color: #48516e; font-style: italic;">
                Lorem ipsum dlsfjkjdfsdjnfkjdsnfjds nfjsdnfkjsndafkjdsnfkjdnsfk fweagwaggweagwa kdsjnfjkdsnf 
                jkdsnfkjdsnfjkndsf dshfkjsdna kjdsfjkdnsfkjdsnf gaewgwagwagwagewagewakdjsbfjkdsnfjkndsfjk jhdbshjsvhj jdsnvjkdnsdskjnvdskljfnv kjbdsvhbdfv
            </h3>
            
          </div>
          <br>
    </div>
    <div id="newTask">
      <div id="taskContent">
        <span id="close-button" onclick="closeWindow()">&times;</span>
        <form method="post">
          Create a new task <br>
          Task name: <input type="text" name="newTaskName" class = "taskInput" id="task_name" > <br>
          <!--People on task: <input type="text" name="newTaskPeople" class = "taskInput" id="task_person"> <br>-->
          Due date: <input type="date" name="newTaskDate" class = "taskInput" id="task_date"> <br>
          Task description: <input type="text" name="newTaskDescrip" class = "taskInput" id="task_descrip"> <br>
          <?php include('errors.php') ?>
          <input type="submit" value="Done" id="taskDone" onclick="createTask()"> <!-- ; loadTasks()-->
        </form>
      </div>
    </div>
    <div id="taskDetails">
      <div id="detailContent">
      </div>
    </div>
    <br>
      
        <div class="main">
        <table id="taskTable">
        </table>
        <img id="taskButton" src="media/new_plus_blue.png" onclick="newTask()" />
    </div>
    <!-- OLD  
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
      <br><br>-->
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
