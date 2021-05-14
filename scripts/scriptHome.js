let followed = document.getElementById("followed");
let news = document.getElementById("new");
let btnNew = document.getElementById("btn-new");
let btnFollowed = document.getElementById("btn-followed");
let btnUpload = document.getElementById("btn-upload");
let btnProfile = document.getElementById("btn-profile");
let url = window.location.pathname;

if (url.includes("profile")){
	btnProfile.style.color = "violet";
	console.log(url);
}else if (url.includes("publish")){
	btnUpload.style.color = "violet";
	console.log(url);
}else if (url.includes("Followed")){
	btnFollowed.style.color = "violet";
	console.log(url);
}else{
	btnNew.style.color = "violet";
	console.log(url);
}

btnNew.onclick = () => {
	console.log("nuevo");
	console.log(url);
	btnNew.style.color = "violet";

}
btnFollowed.onclick = () => {
	console.log("seguidos");
	console.log(url);
	btnFollowed.style.color = "violet";
	
}
btnUpload.onclick = () => {
	console.log("upload");
	console.log(url);
	btnUpload.style.color = "violet";

}
btnProfile.onclick = () => {
	console.log("profile");
	console.log(url);
	btnProfile.style.color = "violet";

}
