<script type="text/javascript">
  //Select DOM
  const todoInput = document.querySelector(".todo-input");
  const todoButton = document.querySelector(".todo-button");
  const todoList = document.querySelector(".todo-list");
  const filterOption = document.querySelector(".filter-todo");

  //Event Listeners
  document.addEventListener("DOMContentLoaded", getTodos);
  todoButton.addEventListener("click", addTodo);
  todoList.addEventListener("click", deleteTodo);
  filterOption.addEventListener("click", filterTodo);
  var i = 0;

  //Functions

  function addTodo(e) {
    //Prevent natural behaviour
    e.preventDefault();
    if (todoInput.value == '') {
      alert("Just enter value..!!")
    } else {

      //Create todo div
      var mail = '<?php if (isset($_SESSION['mail'])) {
                    echo $_SESSION['mail'];
                  } else {
                    echo "Sorry";
                  } ?>';
      console.log(mail);
      const todoDiv = document.createElement("div");
      todoDiv.classList.add("todo");
      //Create list
      const newTodo = document.createElement("li");
      newTodo.innerText = todoInput.value;
      //Save to local - do this last
      //Save to local
      saveLocalTodos(todoInput.value, mail);
      saveLocalComplete("No", todoInput.value);
      //
      newTodo.classList.add("todo-item");
      todoDiv.appendChild(newTodo);
      todoInput.value = "";
      //Create Completed Button
      const completedButton = document.createElement("button");
      completedButton.innerHTML = `<i class="fas fa-check"></i>`;
      completedButton.classList.add("complete-btn");
      todoDiv.appendChild(completedButton);
      //Create trash button
      const trashButton = document.createElement("button");
      trashButton.innerHTML = `<i class="fas fa-trash"></i>`;
      trashButton.classList.add("trash-btn");
      todoDiv.appendChild(trashButton);
      //attach final Todo
      todoList.appendChild(todoDiv);
    }
  }

  function saveLocalComplete(isCompleted, todo) {
    let index = checkIndex(todo);
    let status;
    if (localStorage.getItem("status") === null) {
      status = [];
    } else {
      status = JSON.parse(localStorage.getItem("status"));
    }
    status[index] = isCompleted;
    localStorage.setItem("status", JSON.stringify(status));
  }

  function deleteTodo(e) {
    const item = e.target;

    if (item.classList[0] === "trash-btn") {
      // e.target.parentElement.remove();
      const todo = item.parentElement;
      todo.classList.add("fall");
      //at the end
      removeLocalTodos(todo);
      todo.addEventListener("transitionend", e => {
        todo.remove();
      });
    }
    if (item.classList[0] === "complete-btn") {
      const todo = item.parentElement;
      todo.classList.toggle("completed");
      if (!todo.classList.contains("completed")) {
        saveLocalComplete("No", todo.innerText);
      } else {
        saveLocalComplete("Yes", todo.innerText);
      }
      console.log(todo);
    }
  }

  function filterTodo(e) {
    const todos = todoList.childNodes;
    todos.forEach(function(todo) {
      switch (e.target.value) {
        case "all":
          todo.style.display = "flex";
          break;
        case "completed":
          if (todo.classList.contains("completed")) {
            todo.style.display = "flex";
          } else {
            todo.style.display = "none";
          }
          break;
        case "uncompleted":
          if (!todo.classList.contains("completed")) {
            todo.style.display = "flex";
          } else {
            todo.style.display = "none";
          }
      }
    });
  }

  function saveLocalTodos(todo, mail) {
    let todos;
    let mails;
    if (localStorage.getItem("todos") === null) {
      todos = [];
    } else {
      todos = JSON.parse(localStorage.getItem("todos"));
    }
    if (localStorage.getItem("mails") === null) {
      mails = [];
    } else {
      mails = JSON.parse(localStorage.getItem("mails"));
    }
    todos.push(todo);
    mails.push(mail);
    localStorage.setItem("todos", JSON.stringify(todos));
    localStorage.setItem("mails", JSON.stringify(mails));
  }

  function checkIndex(todo) {
    let todos;
    if (localStorage.getItem("todos") === null) {
      todos = [];
    } else {
      todos = JSON.parse(localStorage.getItem("todos"));
    }
    const todoIndex = todo;
    const j = todos.indexOf(todoIndex);
    return j;
  }

  function removeLocalTodos(todo) {
    let todos;
    let mails;
    let status;
    if (localStorage.getItem("todos") === null) {
      todos = [];
    } else {
      todos = JSON.parse(localStorage.getItem("todos"));
    }
    if (localStorage.getItem("mails") === null) {
      mails = [];
    } else {
      mails = JSON.parse(localStorage.getItem("mails"));
    }
    if (localStorage.getItem("status") === null) {
      status = [];
    } else {
      status = JSON.parse(localStorage.getItem("status"));
    }
    const todoIndex = todo.children[0].innerText;
    const j = todos.indexOf(todoIndex);
    todos.splice(j, 1);
    mails.splice(j, 1);
    status.splice(j, 1);
    localStorage.setItem("todos", JSON.stringify(todos));
    localStorage.setItem("mails", JSON.stringify(mails));
    localStorage.setItem("status", JSON.stringify(status));
  }

  function getTodos() {
    let todos;
    let mails;
    let status;
    var currentMail = '<?php if (isset($_SESSION['mail'])) {
                          echo $_SESSION['mail'];
                        } else {
                          echo "Sorry";
                        } ?>';
    if (localStorage.getItem("todos") === null) {
      todos = [];
    } else {
      todos = JSON.parse(localStorage.getItem("todos"));
    }
    if (localStorage.getItem("mails") === null) {
      mails = [];
    } else {
      mails = JSON.parse(localStorage.getItem("mails"));
    }
    if (localStorage.getItem("status") === null) {
      status = [];
    } else {
      status = JSON.parse(localStorage.getItem("status"));
    }

    mails.forEach(function(email) {

      if (email == currentMail) {
        //Create todo div
        const todoDiv = document.createElement("div");
        todoDiv.classList.add("todo");
        if (status[i] == "Yes") {
          todoDiv.classList.toggle("completed");
        }
        //Create list
        const newTodo = document.createElement("li");
        newTodo.innerText = todos[i];
        newTodo.classList.add("todo-item");
        todoDiv.appendChild(newTodo);
        todoInput.value = "";
        //Create Completed Button
        const completedButton = document.createElement("button");
        completedButton.innerHTML = `<i class="fas fa-check"></i>`;
        completedButton.classList.add("complete-btn");
        todoDiv.appendChild(completedButton);
        //Create trash button
        const trashButton = document.createElement("button");
        trashButton.innerHTML = `<i class="fas fa-trash"></i>`;
        trashButton.classList.add("trash-btn");
        todoDiv.appendChild(trashButton);
        //attach final Todo
        todoList.appendChild(todoDiv);
      } else {
        console.log(email);
      }
      i = i + 1;
    });
  }
</script>