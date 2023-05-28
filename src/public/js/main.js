(function () {
	"use strict";

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll(".needs-validation");

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms).forEach(function (form) {
		form.addEventListener(
			"submit",
			function (event) {
				if (!form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();
				}

				form.classList.add("was-validated");
			},
			false
		);
	});
})();

function validateRegister() {
console.log("helloooo");
let fname = document.getElementById("fname").value;
let lname = document.getElementById("lname").value;
let email = document.getElementById("email").value;
let password = document.getElementById("password").value;
let contactno = document.getElementById("contactno").value;

if (fname.length <= 2 || fname.length > 20) {
document.getElementById("fname").setCustomValidity("Name length must be between 2 and 20!");
document.getElementById("fname").style.border = "1px solid red";
}
else if( !(isNaN(fname))) {
		 document.getElementById('firstname').innerHTML="Only characters are allowed!";
		 document.getElementById("fname").style.border = "1px solid red";
   
} 
else{
document.getElementById('firstname').innerHTML="";
document.getElementById("fname").setCustomValidity("");

document.getElementById("fname").style.border = "1px solid green";
}


if (lname.length <= 2 || lname.length > 20) {
document.getElementById("lname").setCustomValidity("Name length must be between 2 and 20!");
document.getElementById("lname").style.border = "1px solid red";
}
else if( !(isNaN(lname))) {
		 document.getElementById('lastname').innerHTML="Only characters are allowed!";
		 document.getElementById("lname").style.border = "1px solid red";
}
else{
document.getElementById("lastname").innerHTML="";
document.getElementById("lname").setCustomValidity("");
document.getElementById("lname").style.border = "1px solid green";
}

if (email.length <= 2 || email.length > 30) {
document.getElementById("email").setCustomValidity(" Email length must be between 2 and 30!");
document.getElementById("email").style.border = "1px solid red";
}
else{
document.getElementById("email").setCustomValidity("");
document.getElementById("email").style.border = "1px solid green";
}

if (password.length <= 3 || password.length >= 20) {
document.getElementById("password").setCustomValidity("Pass length must be between 3 and 20!");
document.getElementById("password").style.border = "1px solid red";
}
else{
document.getElementById("password").setCustomValidity("");
document.getElementById("password").style.border = "1px solid green";
}
if (password.innerHTML="admin123") {
	document.getElementById("password").style.border = "1px solid green";
	}

if (contactno.length !== 11) {
document.getElementById("contactno").setCustomValidity("Contact length should not be less then 11!");
document.getElementById("contactno").style.border = "1px solid red";
}    else{
document.getElementById("contactno").setCustomValidity("");
document.getElementById("contactno").style.border = "1px solid green";
}



if(!(
document.getElementById("fname").validity.valid &&
document.getElementById("lname").validity.valid &&
document.getElementById("email").validity.valid &&
document.getElementById("password").validity.valid &&

document.getElementById("contactno").validity.valid
) ) {




e.preventDefault();
return false;
}
}



