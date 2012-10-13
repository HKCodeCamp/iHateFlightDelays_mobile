function logoff() {
	alert("Bye Bye!");
	window.localStorage.setItem('LoggedInUser', '');
	window.localStorage.removeItem('LoggedInUser');
	$.mobile.changePage("login.html");
}