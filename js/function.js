function logoff() {
	window.localStorage.removeItem('LoggedInUser');
	$.mobile.changePage("index.html");
}