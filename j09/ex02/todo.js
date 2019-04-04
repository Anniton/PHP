var element_todo = document.getElementById("new");
element_todo.addEventListener("click", check_node);
element_todo.addEventListener("click", todo);

function check_node (){
	var task = document.getElementById('ft_list');
	task.innerHTML = decodeURIComponent(getCookie('todo'));
}
/*https://ppk.developpez.com/tutoriels/javascript/gestion-cookies-javascript/*/
function getCookie(name) {
	var nom = name + "=";
	var arr_cookie = document.cookie.split(';');
	for(var i=0; i<arr_cookie.length; i++)
	{
		var one_cookie = arr_cookie[i];
		while (one_cookie.charAt(0)==' ') one_cookie = one_cookie.substring(1);
		if (one_cookie.indexOf(nom) == 0) return one_cookie.substring(nom.length,one_cookie.length);
	}
	return "";
}
function setCookie(name, value, days) {
	var date = new Date();
	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
	var expires = "expires="+date.toUTCString();
	document.cookie = name + "=" + value + "; " + expires;
}

function todo() {
	var new_node = prompt("What is the new thing to do ?");
	if (new_node !== "") 
   {
		var content = document.getElementById('ft_list');//noeud parent
		var add_node = document.createTextNode(new_node);	
		var div = document.createElement("div");//nouveau todo dans la liste
		div.appendChild(add_node);
		div.setAttribute("onclick", "delete_todo(this)")
		content.insertBefore(div, content.firstChild);
		/*parentNode.insertBefore(newNode, referenceNode);*/
		/*insère un nœud juste avant le noeud de référence en tant qu'enfant du nœud parent spécifié*/
            date = new Date;
            date.setMonth(date.getMonth()+1); /*expire dans un mois*/
            date = date.toUTCString(); /*convertit une date en une chaîne de caractères, selon le fuseau horaire UTC.*/
		setCookie('todo', encodeURIComponent(content.innerHTML), 1);

	}
}

function delete_todo(todo_idx) {
	 if (confirm("Do you really want to delete this task ?")) 
	 { 
		var task = document.getElementById('ft_list');
		task.removeChild(todo_idx);
		setCookie('todo', encodeURIComponent(task.innerHTML), 1);
     }
}
