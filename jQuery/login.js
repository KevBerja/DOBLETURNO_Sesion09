with(document.login){
	onsubmit = function(e){
		e.preventDefault();
		isAlert = true;

		if(isAlert&& username.value==""){
			is=false;
			alert("Username empty");
			username.focus();
		}

		if(isAlert && password.value==""){
			isAlert=false;
			alert("Password empty");
			password.focus();
		}
		
		if(isAlert){ 
			submit(); 
		}
	}
}