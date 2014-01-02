function validateForm(){
	var firstname = document.getElementById("firstname").value;
	var lastname = document.getElementById("lastname").value;
	var email = document.getElementById("email").value;
	var isValid = true;

	if (!firstname.match(/^[A-Za-z]{2,}$/)) {
	    document.getElementById("firstname").value = "korrekter Namé eingeben";
	    isValid = false;
	}
	if (!lastname.match(/^[A-Za-z]{2,}$/)){
	    document.getElementById("lastname").value = "korrekter Nachnamé eingeben";
	    isValid = false;
	}
	if (!email.match(/\b[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b/i)){
		    document.getElementById("email").value = "korrekte Email angeben...";
		    isValid = false;
	}
	
	if(isValid == true){
		window.confirm('Sie kaufen hiermit die Produkte definitiv sind sie sicher dass Sie die Bestellung abschliessen möchten?')
	}
	
	return isValid;
}

function alertTest(){
	window.alert("Yippi It works...");
}