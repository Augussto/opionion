let btn_follow = document.getElementById('follow');
let btn_followed = document.getElementById('followed');

let id1 = document.getElementById('idFollower');
let id2 = document.getElementById('idFollowed');

let idFollower = id1.value;
let idFollowed = id2.value;
 
if (btn_follow != null) {
	btn_follow.addEventListener("click", () => {
		
	    let btnValue = btn_follow.value;
	 
	    $.ajax({
      		url: 'follow.php',
	      	type: 'POST',
	      	data: { 
	      		"btnValue" : btnValue,
	      		"idFollower" : idFollower,
	      		"idFollowed" : idFollowed
	      	},
	    success: function (data)
	    {
	      alert("Nuevo usuario seguido!");
	      window.location.reload();
	    }
	    });
	});
}


if (btn_followed != null) {
	btn_followed.addEventListener("click", () => {
 
	    let btnValue = btn_followed.value;
	 
	    $.ajax({
      		url: 'follow.php',
	      	type: 'POST',
	      	data: { 
	      		"btnValue" : btnValue,
	      		"idFollower" : idFollower,
	      		"idFollowed" : idFollowed
	      	},
	    success: function (data)
	    {
	      alert("Has dejado de seguir a este usuario!");
	    }
	    });
	});
}