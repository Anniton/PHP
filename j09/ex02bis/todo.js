
$( document ).ready(function() {
    $('#new').click(whatTodo);
    ft_list = $('#ft_list');
    $('#ft_list')click(deleteTodo);
});

var div = document.getElementById("ft_list");
var list = [];

function whatTodo(todo) {
    var todo = prompt("Whats your task?");
    list.unshift(todo);
        add_list();
}
function add_list() {
    clear_div();
    list.forEach(elem_list => {
        var enfant = document.createElement("div");
        enfant.setAttribute("id", "task");
        enfant.addEventListener('click', 
        function(){
          if (confirm('Do you really want to remove this task ?'))
          {
              div.removeChild(enfant);
          }
        },false);
        var elementAjoute = document.createTextNode(elem_list);
        enfant.appendChild(elementAjoute);
        div.appendChild(enfant);
    });
}

function clear_div() {
    while (div.firstChild) {
        div.removeChild(div.firstChild);
    }
}