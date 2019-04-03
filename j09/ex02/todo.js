
var div = document.getElementById("ft_list");
div.innerHTML = decodeURIComponent(getCookie('todo'))
var list = [];


function readCookie(name) {
	var nameEQ = name + "=";
	var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) 
    {
		var c = ca[i];
		while (c.charAt(0)==' ') c = c.substring(1,c.length);
		if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
	}
	return null;
}

function setCookie(name,value,days) {
	if (days) {
		var date = new Date();
		date.setTime(date.getTime()+(days * 24 * 60 * 60 * 1000));
		var expires = "; expires="+date.toGMTString();
	}
	else var expires = "";
	document.cookie = name + "=" + value + expires + "; path=/";
}


function eraseCookie(name) {
	createCookie(name,"",-1);
}


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