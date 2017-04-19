var username = "Jeremy";
var password = "Smith";
var is_checked = false;
             
function myFunction() {
	if(document.getElementById("username_input").value == username){
		if (document.getElementById("password_input").value == password) {
                        window.location.href = "https://ratemydentist.000webhostapp.com";
		}
	} else 
		alert('You entered wrong username/password.');
}


function appFunction(){
	var counter = document.getElementsByTagName('input');
  for (var i=0; i<counter.length; i++) {
    if (counter[i].type == 'radio' && counter[i].checked) {
      is_checked=true;
      alert(counter[i].id);
      
    }
   }
      if (is_checked == false) {
      alert('You did not choose any time.');
    }
}