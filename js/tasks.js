function createTask() {
  localStorage.setItem("tasks", String(document.getElementById('taskTable').innerHTML));
  var taskName = document.getElementById('task_name').value;
  var taskDes = document.getElementById('task_descrip').value;
  //var taskPerson = document.getElementById('task_person').value;
  var dueDate = document.getElementById('task_date').value;
  //document.getElementById("taskDone").preventDefault()
  var taskContents = '
            <h2>
              ${taskName}
            </h2>
            <p>
              ${taskDes}
            </p>';
  localStorage.tasks = localStorage.getItem("tasks") + taskContents;
}

function loadTasks()  {
  document.getElementById('taskTable').innerHTML = localStorage.getItem("tasks");
}

function createProject() {
  localStorage.setItem("projects", String(document.getElementById('projectTable').innerHTML));
  var name = document.getElementById('project_name').value;
  var des = document.getElementById('project_descrip').value;
  //var taskPerson = document.getElementById('task_person').value;
  var date = document.getElementById('project_date').value;
  //document.getElementById("taskDone").preventDefault()
  var projectContents = '
            <h2>
              ${name}
            </h2>
            <p>
              ${des}
            </p>';
  localStorage.projects = localStorage.getItem("projects") + projectContents;
}

function loadProjects()  {
  document.getElementById('projectTable').innerHTML = localStorage.getItem("projects");
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