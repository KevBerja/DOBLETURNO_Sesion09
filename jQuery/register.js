with(document.registro){
	onsubmit = function(e){
		e.preventDefault();
		isAlert = true;
		
		if(isAlert && email.value==""){
			isAlert=false;
			alert("Enter an email");
			email.focus();
		}

		if(isAlert && username.value==""){
			isAlert=false;
			alert("Enter an username");
			username.focus();
		}
		
		if(isAlert && password.value==""){
			isAlert=false;
			alert("Enter a password");
			password.focus();
		}

		if(isAlert){ 
			submit(); 
		}
	}
}
