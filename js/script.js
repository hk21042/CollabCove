var dropped = false;
var closeButton = document.querySelector(".close-button");

function setTheme() {
    if  (localStorage.getItem("theme") == null)
        localStorage.setItem("theme", "css/style.css");
    document.getElementById('theme').href = localStorage.getItem("theme");
    setSidebar();
}

function setButton()    {
    if  (localStorage.getItem("theme") == "css/dark-style.css") {
        document.getElementById("taskButton").src = "media/add-white.png";
        console.log(document.getElementById("taskButton").src);
    }
}

function setSidebar() {
  if (localStorage.getItem("sidebarColor") == null) {
    if (localStorage.getItem("theme") == "css/dark-style.css") {
      localStorage.setItem("sidebarColor", "#0C1F3B");
    } else {
      localStorage.setItem("sidebarColor", "#024FCF");
    }
  }
  document.getElementById('sidenav').backgroundColor = localStorage.getItem("sidebarColor");

  if (localStorage.getItem("tooltipColor") == null) {
    if (localStorage.getItem("theme") == "css/dark-style.css") {
      localStorage.setItem("tooltipColor", "rgb(63,131,245,0.6)");
    } else {
      localStorage.setItem("tooltipColor", "rgb(12,31,59,0.6)");
    }
  }
  document.getElementById('tooltip').backgroundColor = localStorage.getItem("tooltipColor");
  
  document.getElementById("sidebarColor").value = localStorage.getItem("sidebarColor");
}

function setSidebarColor() {
  var color = document.getElementById("sidebarColor").value+"";
  localStorage.setItem("sidebarColor", color);
  localStorage.setItem("tooltipColor", ('#'+99+color.substring(1)));
  setSidebar();
}

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
    document.getElementById('theme').href = "css/dark-style.css";
    localStorage.setItem("theme", "css/dark-style.css");
}

function switchThemeNormal(){
    document.getElementById('theme').href = "css/style.css";
    localStorage.setItem("theme", "css/style.css");
}
