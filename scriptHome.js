document.getElementById("btn-nuevo").onclick = () => {
	console.log("nuevo");
	document.getElementById("followed").style.display = "none";
	document.getElementById("new").style.display = "grid";
}
document.getElementById("btn-seguidos").onclick = () => {
	console.log("seguidos");
	document.getElementById("followed").style.display = "grid";
	document.getElementById("new").style.display = "none";
}