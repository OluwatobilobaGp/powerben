//  ************** Login Auto Background Change Function *************//
//Initializing
var i = 0;
var images = []; //array
var time = 3000; // time in millie seconds

//images


images[0] = "url(../images/bg1.png)";
images[1] = "url(../images/bg2.png)";
images[2] = "url(../images/bg3.png)";
images[3] = "url(../images/bg4.png)";
images[4] = "url(../images/bg5.png)";

//function

function changeImage() {
    var el = document.getElementById("slide-d");
    el.style.backgroundImage = images[i];
    if (i < images.length - 1) {
        i++;
    } else {
        i = 0;
    }
    setTimeout("changeImage()", time);
}

window.onload = changeImage;

//  ************** End Login Auto Background Change Function *************//

// Project Hamburger Menu Variable

const btn = document.getElementById("menu-btn");
const menu = document.getElementById("menu");

btn.addEventListener("click", navToggle);

// Toggle Mobile Menu
function navToggle() {
    btn.classList.toggle("open");
    menu.classList.toggle("flex");
    menu.classList.toggle("hidden");
}

// Input reading Variable

const ip_btn = document.getElementById("input-btn");
const inputRead = document.getElementById("inputRead");


//View Input reading Variable
const vw_input_btn = document.getElementById("view-input-btn");
const viewInputRead = document.getElementById("viewinputRead");


//outage reading Variable
const ip_outage_btn = document.getElementById("outage-btn");
const inputOutageRead = document.getElementById("inputOutageRead");


//View Input Outage reading Variable
const vw_outage_btn = document.getElementById("view-outage-btn");
const viewOutageRead = document.getElementById("viewOutageRead");


inputRead.style.display = "block";


ip_btn.addEventListener("click", inputToggle);

// Toggle Input Form Menu
function inputToggle() {
  inputRead.style.display = "block";
  viewInputRead.style.display = "none";
  inputOutageRead.style.display = "none";
  viewOutageRead.style.display = "none";
}

vw_input_btn.addEventListener("click", vwinputToggle);

// Toggle Input Form Menu
function vwinputToggle() {
  inputRead.style.display = "none";
  viewInputRead.style.display = "block";
  inputOutageRead.style.display = "none";
  viewOutageRead.style.display = "none";
}

ip_outage_btn.addEventListener("click", ipoutageToggle);

// Toggle Input Outage Form Menu
function ipoutageToggle() {
    inputRead.style.display = "none";
    viewInputRead.style.display = "none";
    inputOutageRead.style.display = "block";
    viewOutageRead.style.display = "none";
}

vw_outage_btn.addEventListener("click", vwoutageToggle);

// Toggle Input Outage Form Menu
function vwoutageToggle() {
    inputRead.style.display = "none";
    viewInputRead.style.display = "none";
    inputOutageRead.style.display = "none";
    viewOutageRead.style.display = "block";
}


function onLoadBody() {
    document.getElementById("myEmail").setAttribute("readonly, true");
}
