var bouton1 = document.getElementById("suivant");
var bouton2 = document.getElementById("precedent");
bouton1.onclick = function(){
 changerPage();
}
bouton2.onclick = function(){
 changerPage();
}


function changerPage(){
	var form1 = document.getElementById("form1");
	var form2 = document.getElementById("form2");
	//Si on est sur le form 1 est un flex, on 'display none',
	//puis on 'display flex' sur le form2
	if(form1.style.display == "flex" || form1.style.display == ""){
		form1.style.display = "none";
		form2.style.display = "flex";
	}
	//Sinon, on 'display flex' le form1, et 'display none' le form2
	else{
		form1.style.display = "flex";
		form2.style.display = "none";
	}
	
}





