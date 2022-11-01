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

// FILTER BY GENRE
function searchFilter() {
    var element = document.getElementById("url");
    element.value = language;
    element.innerHTML = language;
   }

   