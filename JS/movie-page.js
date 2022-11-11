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

