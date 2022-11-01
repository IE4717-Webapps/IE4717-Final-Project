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
    var genre = document.getElementById("filterByGenre").value;
    if(genre == action){filterSelection(action)}
}

function filterSelection(action){
    alert("hi");
}

filterSelection("all")
function filterSelection(genre) {
  var x, i;
  x = document.getElementsByClassName("movies");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}

function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);     
    }
  }
  element.className = arr1.join(" ");
}