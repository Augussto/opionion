
let width = screen.width;
let activated = false;
let mobileContainer = document.getElementById('mobile');
let desktopContainer = document.getElementById('desktop');
let mobileListContainer = document.getElementById('mobile-list');
let listIcon = document.getElementById('list-icon');


if(width < 1160){
	mobileContainer.style.display = "grid";
	desktopContainer.style.display = "none";
}else{
	mobileContainer.style.display = "none";
	desktopContainer.style.display = "grid";
}
listIcon.addEventListener("click",()=>{
	if(!activated){
		mobileListContainer.style.display = "block";
		listIcon.style.transform = "rotate(90deg)";
		activated = true;
	}else{
		mobileListContainer.style.display = "none";
		listIcon.style.transform = "rotate(90deg)";
		activated = false;
	}
});
