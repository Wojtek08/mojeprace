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







// function diffDiv() {
//     if (header.className == "") {
//         let newDiv = document.createElement("div");
//         newDiv.classList.add("respNav");
//         headerNav.insertAdjacentElement("afterend", newDiv);
//         classList.add("resp");
//     }
// }

// if ( <= 920) {
//     // console.log("DUPAAAA");

//     headerNav.removeChild(leftH);
//     headerNav.removeChild(rightH);
//     newDiv.appendChild(leftH);
//     newDiv.appendChild(rightH);

//     header.className.remove();

//     // wyk = true;
// } else if (window.innerWidth > 920) {

//     newDiv.removeChild(leftH);
//     newDiv.removeChild(rightH);
//     headerNav.appendChild(leftH);
//     headerNav.appendChild(rightH);

//     header.className.add("resp");
    
//     // wyk = false;
// }

// let resp = false;

// window.addEventListener("resize", function width() {
//     // var ScreenWidth = window.innerWidth;
//     // console.log(ScreenWidth)

//     if (resp == false && window.innerWidth <= 920) {

//     }
// })

// let resp = false;

// window.addEventListener("resize", function width() {
//     if (resp == false && window.innerWidth <= 920) {
//         headerNav.removeChild(leftH);
//         headerNav.removeChild(rightH)
//         newDiv.appendChild(leftH);
//         newDiv.appendChild(rightH);
//         resp = true;
//     }
//     if (resp == true && window.innerWidth > 920) {
//         newDiv.removeChild(leftH);
//         newDiv.removeChild(rightH);
//         headerNav.appendChild(leftH);
//         headerNav.appendChild(rightH);
//         resp = false;
//     }
// })

