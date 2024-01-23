const leftH = document.getElementById('left-header-container');
const rightH = document.getElementById('right-header-container');
const chapter = document.getElementById('chapter');
const headerNav = document.getElementById('headerNav');
let header = document.querySelector('header');
const newDiv = document.querySelector('.respNav');
let burger = document.getElementById('burger');

burger.addEventListener('click', function() {
    if (header.className == "") {
        header.className = "open";
        burger.className = "fa-solid fa-circle-xmark";
    } else if (header.className == "open") {
        header.className = "";
        burger.className = "fa-solid fa-burger";
    }
})

let flag = false;

window.addEventListener('beforeunload', function (closingWindow) {
    if (flag == false) { 
        closingWindow.preventDefault();
        closingWindow.returnValue = '';
    
    
    
        var confAlert = "Na pewno chcesz wyjść? Cały postęp zostanie usunięty.";
        (closingWindow || window).returnValue = confAlert;
        return confAlert;

        // nmieskonczonexdxdxdx
    }
});
  