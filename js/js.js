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
      var number = counter[i].id;
      window.location.href = "";
    }
   }
      if (is_checked == false) {
      alert('You did not choose any time.');
    }
}

function switcToResults(){
   document.getElementById("page1").style.display = "inline";
   document.getElementById("page2").style.display = "none";
}
function switcToMap(){
   document.getElementById("page1").style.display = "none";
   document.getElementById("page2").style.display = "inline";
}

function distr() {
    var x = document.getElementById("townId").value;
    if(x=="Tallinn"){
       document.getElementById("subDistr").innerHTML =                      
                        '<select name="districtSelect" class="lookgood_1" style="color:black;">'+
                        '<option value="Haabersti">Haabersti</option>'+
                        '<option value="Kesklinn">Kesklinn</option>'+
                        '<option value="Kristiine">Kristiine</option>'+
                        '<option value="Lasnamae">Lasnamae</option>'+
                        '<option value="Mustamae">Mustamae</option>'+
                        '<option value="Nomme">Nomme</option>'+
                        '<option value="Pirita">Pirita</option>'+
                        '<option value="Pxhja-Tallinn">Pxhja-Tallinn</option>'+
                        '</select>';
   } else {
      document.getElementById("subDistr").innerHTML ="";
   }
}
