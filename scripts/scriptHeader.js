let width = screen.width;
let activated = false;
let mobileContainer = document.getElementById('mobile');
let desktopContainer = document.getElementById('desktop');
let mobileListContainer = document.getElementById('mobile-list');

let icon = document.getElementById('icon');
let bar1 = document.getElementById('1');
let bar2 = document.getElementById('2');
let bar3 = document.getElementById('3');

let btn1 = document.getElementById('m1');
let btn2 = document.getElementById('m2');
let btn3 = document.getElementById('m3');
let btn4 = document.getElementById('m4');

btn1.addEventListener("click",()=>{
	window.location = "index.php";
})
btn2.addEventListener("click",()=>{
	window.location = "homeFollowed.php";
})
btn3.addEventListener("click",()=>{
	window.location = "publish.php";
})
btn4.addEventListener("click",()=>{
	window.location = "profile.php";
})

if(width < 1160){
	mobileContainer.style.display = "grid";
	desktopContainer.style.display = "none";
}else{
	mobileContainer.style.display = "none";
	desktopContainer.style.display = "grid";
}
icon.addEventListener("click",()=>{
	if(!activated){

		bar2.style.transform = "rotate(45deg)";
		bar1.style.transform = "rotate(45deg)";
		bar3.style.transform = "rotate(135deg)";

		bar1.style.margin = "0px 0px 0px 0px";
		bar2.style.margin = "-7.5px 0px 0px 0px";
		bar3.style.margin = "-12.5px 0px 0px 0px";

		bar2.style.opacity = "0";
		bar2.style.visibility = "hidden";

		btn1.style.margin = "10px";
		btn2.style.margin = "10px";
		btn3.style.margin = "10px";
		btn4.style.margin = "10px";

		btn1.style.opacity = "1";
		btn1.style.visibility = "visible";
		btn2.style.opacity = "1";
		btn2.style.visibility = "visible";
		btn3.style.opacity = "1";
		btn3.style.visibility = "visible";
		btn4.style.opacity = "1";
		btn4.style.visibility = "visible";

		activated = true;
	}else{

		bar2.style.transform = "rotate(0deg)";
		bar1.style.transform = "rotate(0deg)";
		bar3.style.transform = "rotate(0deg)";

		bar1.style.margin = "5px 0px 0px 0px";
		bar2.style.margin = "5px 0px 0px 0px";
		bar3.style.margin = "5px 0px 0px 0px";

		bar2.style.opacity = "1";
		bar2.style.visibility = "visible";

		btn1.style.margin = "-20px";
		btn2.style.margin = "-40px";
		btn3.style.margin = "-40px";
		btn4.style.margin = "-40px";

		btn1.style.opacity = "0";
		btn1.style.visibility = "hidden";
		btn2.style.opacity = "0";
		btn2.style.visibility = "hidden";
		btn3.style.opacity = "0";
		btn3.style.visibility = "hidden";
		btn4.style.opacity = "0";
		btn4.style.visibility = "hidden";

		activated = false;
	}
});
