var dropped = false;
var closeButton = document.querySelector(".close-button");

function dropdown() {
    if (dropped == false) {
        document.getElementById("Menu").className = "";
        dropped = true;
    } else {
        document.getElementById("Menu").className = "collapsed";
        dropped = false;
    }
}

function newTask() {
  var x = document.getElementById("newTask");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function newProject() {
  var x = document.getElementById("newProject");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function closeWindow() {
  var x = document.getElementById("newTask");
  x.style.display = "none";
}

function closeWindow1() {
  var x = document.getElementById("newProject");
  x.style.display = "none";
}

function closeWindow2() {
  var x = document.getElementById("taskDetails");
  x.style.display = "none";
}
/*$('#taskDone').click(function(e) {
  e.preventDefault()
  var table = document.getElementById("taskTable");
  var row = table.insertRow(table.length+1);
  var task = row.insertCell(0);
  var member = row.insertCell(1);
  var status = row.insertCell(2);
  var priority = row.insertCell(3);
  var dueDate = row.insertCell(4);
  task.appendChild(document.createTextNode(document.getElementById("task_name").value));
  member.appendChild(document.createTextNode(document.getElementById("task_person").value));
  dueDate.appendChild(document.createTextNode(document.getElementById("task_date").value));

  //task.innerHTML = document.getElementById("task_name").value; 
 // member.innerHTML = document.getElementById("task_person").value; 
  status.innerHTML = "gewa";
  priority.innerHTML = "ghewahwa";
  //dueDate.innerHTML = document.getElementById("task_date").value; 
})*/

function switchTheme(){
    if (document.getElementById('theme').href == "css/dark-style.css") {
    document.getElementById('theme').href = "css/style.css";
  } else {
    document.getElementById('theme').href = "css/dark-style.css";
  }
}