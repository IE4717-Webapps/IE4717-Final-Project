// BACK TO TOP BUTTON in Footer
var bttop = document.getElementById("bttop")
            var rootElement = document.documentElement

function BackToTop() {
    rootElement.scrollTo({
        top: 0,
        behavior: "smooth"
    })
}

bttop.addEventListener("click", scrollToTop)

//FORM
function myName() {
	var nameform = /^[A-Za-z\s]+$/;
	if (nameform.test(document.forms["checkoutForm"]["name"].value)) {
		return nameform;
	}
	else {
		alert("The field must contains alphabet characters and character spaces.");
		document.getElementById('name').value = '';
	}	
}

function myEmail() {
	var emailform = /^[\w.-]+@((\w+)|(\w+\.\w+)|(\w+\.\w+\.\w+))\.[A-Za-z]{2,4}$/;
	if (emailform.test(document.forms["checkoutForm"]["email"].value)) {
		return emailform;
	}
	else {
		alert("You have entered an invalid email address.");
		document.getElementById('email').value = '';
	}	
}