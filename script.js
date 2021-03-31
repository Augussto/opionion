document.getElementById("btn-register").onclick = () => {
	document.getElementById("login-container").style.display = "none";
	document.getElementById("register-container").style.display = "flex";
	console.log("boton registrar");
}
document.getElementById("btn-login").onclick = () => {
	document.getElementById("register-container").style.display = "none";
	document.getElementById("login-container").style.display = "flex";
	console.log("boton login");
}