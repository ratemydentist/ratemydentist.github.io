var username = "Jeremy";
var password = "Smith";

             
function myFunction() {
	if(document.getElementById("username_input").value == username){
		if (document.getElementById("password_input").value == password) {
                        window.location.href = "https://ratemydentist.000webhostapp.com";
		}
	} else 
		alert('You entered wrong username/password.');
}