function createTask() {
  localStorage.setItem("tasks", String(document.getElementById('taskTable').innerHTML));
  var taskName = document.getElementById('task_name').value;
  var taskDes = document.getElementById('task_descrip').value;
  //var taskPerson = document.getElementById('task_person').value;
  //var dueDate = document.getElementById('task_date').value;
  //document.getElementById("taskDone").preventDefault()
  var taskContents = `
        <tr>
          <td width="10%">
            <h2>
              ${taskName}
            </h2>
            <p>
              ${taskDes}
            </p>
          </td>
        </tr>`
  localStorage.tasks = localStorage.getItem("tasks") + taskContents;
}
function loadTasks()  {
  document.getElementById('taskTable').innerHTML = localStorage.getItem("tasks");
}
