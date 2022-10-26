// CART
function openNav() {
    document.getElementById("myCart").style.width = "400px";
}

function closeNav() {
    document.getElementById("myCart").style.width = "0";
}

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

//BOOK TICKETS
function mySelection(){
    	var demovalue = document.getElementById("myselection").value;
        alert(demovalue);
        var demovalu

        //demovalue.innerHTML = setAttribute("style","display: block;");
    };