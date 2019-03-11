function createTask() {
  localStorage.setItem("tasks", String(document.getElementById('taskTable').innerHTML));
  var taskName = document.getElementById('task_name').value;
  var taskPerson = document.getElementById('task_person').value;
  var dueDate = document.getElementById('task_date').value;
  //document.getElementById("taskDone").preventDefault()
  var taskContents = `
        <tr>
          <td width="10%">
            <p style="font-size:30px">
              ${taskName}
            </p>
          </td>
          <td width="15%">
            <img src = "media/cove.jpg" class="profilepic1" align = center>&nbsp;&nbsp;&nbsp;${taskPerson}
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
              ${dueDate}
            </div>
          </td>
        </tr>`
  localStorage.tasks = localStorage.getItem("tasks") + taskContents;
}
function loadTasks()  {
  document.getElementById('taskTable').innerHTML = localStorage.getItem("tasks");
}
