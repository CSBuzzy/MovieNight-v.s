
function deroulerMenu(){
	var menuDeroulant = document.getElementById('menuDeroulant');
	if (menuDeroulant.style.display == "none" || menuDeroulant.style.display == ""){
		document.getElementById('menu').style.borderRadius = "50px 0px 0px 0px";
		menuDeroulant.style.display = "block";
	}
	else {
		menuDeroulant.style.display = "none";
		document.getElementById('menu').style.borderRadius = "50px";
		
	}
}

document.addEventListener("click", function(event) {

if (event.target.closest("#menuDeroulant") || event.target.closest("#menu")) return;

document.getElementById('menuDeroulant').style.display = "none";
document.getElementById('menu').style.borderRadius = "50px";
});

/*var lien = document.getElementById('lien');
lien.onmouseover = function(){
	document.getElementById("rocket").style.color = "white";
}
lien.onmouseout = function(){
	document.getElementById("rocket").style.color = "#42b4bc";
}*/

highlight(document.getElementById("icon1"), document.getElementById("image1"));
highlight(document.getElementById("icon2"), document.getElementById("image2"));
highlight(document.getElementById("icon3"), document.getElementById("image3"));
highlight(document.getElementById("icon4"), document.getElementById("image4"));
highlight(document.getElementById("BtnMenuDeroulant"), document.getElementById("image5"));

function highlight(icon, image){
	icon.onmouseover = function(){
		image.style.color = "white";
	}
	icon.onmouseout = function(){
		image.style.color = "#42b4bc";
	}
}

