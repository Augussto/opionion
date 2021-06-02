let btn_follow = document.getElementById('follow');
let btn_followed = document.getElementById('followed');

btn_follow.addEventListener("click", ()=>{
	btn_follow.style.display = "none";
	btn_followed.style.display = "block";
})
btn_followed.addEventListener("click", ()=>{
	btn_followed.style.display = "none";
	btn_follow.style.display = "block";
})