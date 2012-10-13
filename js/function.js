function logoff() {
	window.localStorage.removeItem('LoggedInUser');
	alert('You have logged out.');
}