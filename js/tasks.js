function createTask() {
  var query = location.search.substring(1);
  var vars = query.split("&");
  var name = vars[0].split("=")[1].replace(/%20/g, "_"); 
  localStorage.setItem(name, String(document.getElementById('taskTable').innerHTML));
  var taskName = document.getElementById('task_name').value;
  var taskDes = document.getElementById('task_descrip').value;
  //var taskPerson = document.getElementById('task_person').value;
  var dueDate = document.getElementById('task_date').value;
  var taskContents = `
        <tr>
          <td id="taskBox" onclick="displayDetails(this)">
            <h2>
              ${taskName} | ${dueDate}
            </h2>
            <p>
              ${taskDes}
            </p>
          </td>
        </tr>`
  localStorage.setItem(name, localStorage.getItem(name) + taskContents);
  loadTasks();
}

function loadTasks()  {
  var query = location.search.substring(1);
  var vars = query.split("&");
  var name = vars[0].split("=")[1].replace(/%20/g, "_");
  document.getElementById('taskTable').innerHTML = localStorage.getItem(name);
}

function createProject() {
  localStorage.setItem("projects", String(document.getElementById('projectTable').innerHTML));
  var name = document.getElementById('project_name').value;
  var des = document.getElementById('project_descrip').value;
  //var taskPerson = document.getElementById('task_person').value;
  var date = document.getElementById('project_date').value;
  //document.getElementById("taskDone").preventDefault()
  var projectContents = `
            <h2>
              ${name}
            </h2>
            <p>
              ${des}
            </p>`;
  localStorage.projects = localStorage.getItem("projects") + projectContents;
}

function displayDetails(task)  {
    var taskName = task.children[0].innerHTML.split(" | ")[0];
    var dueDate = task.children[0].innerHTML.split(" | ")[1];
    var taskDescription = task.children[1].innerText;
    var taskCont = `
        <span id="close-button" onclick="closeWindow2()">&times;</span>
        <h2>Task: ${taskName}</h2>
        <h3>Due: ${dueDate}</h3>
        <p>${taskDescription}</p>
    `
    console.log(taskCont);
    document.getElementById("detailContent").innerHTML = taskCont;
    var x = document.getElementById("taskDetails");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function loadProjects()  {
  document.getElementById('projectTable').innerHTML = localStorage.getItem("projects");
}

function projectRedirect(project)  {
    var name = project.children[0].textContent;
    window.open('/collabcove/tasks.php?name=' + name, '_self');
}

/*function loadTasks(){
    function createTask(){
        var taskName = document.getElementById('task_name').value;
        var taskDes = document.getElementById('task_descrip').value;
        //var taskPerson = document.getElementById('task_person').value;
        var table = document.getElementById("taskTable");
    
        var newRow = insertRow(table.rows.length);
        var cell = newRow.insertCell(0);
        cell1.innerHTML = "<h2>${taskName}</h2><p>${taskDes}</p>";

    }
}*/