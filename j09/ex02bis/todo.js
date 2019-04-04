// function check_node (){
//     	var task = document.getElementById('ft_list');
// 	task.innerHTML = decodeURIComponent(getCookie('todo'));
// }
// function getCookie(name) {
// 	var nom = name + "=";
// 	var arr_cookie = document.cookie.split(';');
// 	for(var i=0; i<arr_cookie.length; i++)
// 	{
// 		var one_cookie = arr_cookie[i];
// 		while (one_cookie.charAt(0)==' ') one_cookie = one_cookie.substring(1);
// 		if (one_cookie.indexOf(nom) == 0) return one_cookie.substring(nom.length,one_cookie.length);
// 	}
// 	return "";
// }
// function setCookie(name, value, days) {
// 	var date = new Date();
// 	date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
// 	var expires = "expires="+date.toUTCString();
// 	document.cookie = name + "=" + value + "; " + expires;
// }



//Create session cookie:
//$.cookie('name', 'value');


$('#new').click(function() {
	var new_node = prompt("What is the new thing to do ?");
	if (new_node !== "") 
   {
		$('#ft_list').prepend("<div class=eee onclick=delete_todo(this)>" + new_node + "</div>");
        $.cookie('name', 'value', { expires: 7 });
	}
})
// Read all available cookies:
    $.cookie();
function delete_todo(task) {
	 if (confirm("Do you really want to delete this task ?")) 
	 { 
		$(task).remove();
		//setCookie('todo', encodeURIComponent($("#ft_list").html()), 1);
        // Returns true when cookie was successfully deleted, otherwise false
        $.removeCookie('name'); // => true
        $.removeCookie('nothing'); // => false
        // Need to use the same attributes (path, domain) as what the cookie was written with
        $.cookie('name', 'value', { path: '/' });
        // This won't work!
        $.removeCookie('name'); // => false
        // This will work!
        $.removeCookie('name', { path: '/' }); // => true 
    
    }
}