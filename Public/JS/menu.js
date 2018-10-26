
function deroulerMenu(){
	var menuDeroulant = document.getElementById('menuDeroulant');
	if (menuDeroulant.style.display == "none" || menuDeroulant.style.display == ""){
		menuDeroulant.style.display = "block";
	}
	else {
		menuDeroulant.style.display = "none";
	}
}

document.addEventListener("click", function(event) {

if (event.target.closest("#menuDeroulant") || event.target.closest("#menu")) return;

document.getElementById('menuDeroulant').style.display = "none";
});

var lien = document.getElementById('lien');
lien.onmouseover = function(){
	lien.closest('#icon').style.color = "white";
}
