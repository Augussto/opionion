let followed = document.getElementById("followed");
let news = document.getElementById("new");
let btnNew = document.getElementById("btn-new");
let btnFollowed = document.getElementById("btn-followed");
let btnUpload = document.getElementById("btn-upload");

btnNew.onclick = () => {
	console.log("nuevo");
	followed.style.display = "none";
	news.style.display = "grid";
	btnNew.style.background = "white";
	btnNew.style.color = "black";
	btnFollowed.style.background = "none";
	btnFollowed.style.color = "white";
	btnUpload.style.background = "none";
	btnUpload.style.color = "white";
}
btnFollowed.onclick = () => {
	console.log("seguidos");
	followed.style.display = "grid";
	news.style.display = "none";
	btnFollowed.style.background = "white";
	btnFollowed.style.color = "black";
	btnNew.style.background = "none";
	btnNew.style.color = "white";
	btnUpload.style.background = "none";
	btnUpload.style.color = "white";
}
btnUpload.onclick = () => {
	console.log("seguidos");
	followed.style.display = "grid";
	news.style.display = "none";
	btnFollowed.style.background = "none";
	btnFollowed.style.color = "white";
	btnNew.style.background = "none";
	btnNew.style.color = "white";
	btnUpload.style.background = "white";
	btnUpload.style.color = "black";
	location.href = "upload.php";
}