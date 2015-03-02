function encriptar(){	
	var user = document.getElementById("textinput").value;
	var pass = document.getElementById("passwordinput").value;
	user_en = btoa(user);
	passW_en = btoa(pass);
	
	return user_en;
	return passW_en;
}