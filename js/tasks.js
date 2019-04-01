function createTask() {
  localStorage.setItem("tasks", String(document.getElementById('taskTable').innerHTML));
  var taskName = document.getElementById('task_name').value;
  //var taskPerson = document.getElementById('task_person').value;
  //var dueDate = document.getElementById('task_date').value;
  //document.getElementById("taskDone").preventDefault()
  var taskContents = `
        <tr>
          <td width="10%">
            <p style="font-size:30px">
              ${taskName}
            </p>
          </td>
        </tr>`
  localStorage.tasks = localStorage.getItem("tasks") + taskContents;
}
function loadTasks()  {
  document.getElementById('taskTable').innerHTML = localStorage.getItem("tasks");
}
