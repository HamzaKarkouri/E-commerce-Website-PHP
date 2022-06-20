






function all1(){
  var all1 = document.getElementById("all1");
  var all2 = document.getElementById("all2");
  var all3 = document.getElementById("all3");
  var all4 = document.getElementById("all4");
  all1.classList.add("filter-active");
  all2.classList.remove("filter-active");
  all3.classList.remove("filter-active");
  all4.classList.remove("filter-active");
  document.getElementById("all").style.display = "block";
  document.getElementById("app").style.display = "none";
  document.getElementById("cardd").style.display = "none";
  document.getElementById("web").style.display = "none";
  
}
function all2(){
  var all1 = document.getElementById("all1");
  var all2 = document.getElementById("all2");
  var all3 = document.getElementById("all3");
  var all4 = document.getElementById("all4");
  all2.classList.add("filter-active");
  all1.classList.remove("filter-active");
  all3.classList.remove("filter-active");
  all4.classList.remove("filter-active");
  document.getElementById("app").style.display = "block";
  document.getElementById("all").style.display = "none";
  document.getElementById("cardd").style.display = "none";
  document.getElementById("web").style.display = "none";
  
}
function all3(){
  var all1 = document.getElementById("all1");
  var all2 = document.getElementById("all2");
  var all3 = document.getElementById("all3");
  var all4 = document.getElementById("all4");
  all3.classList.add("filter-active");
  all2.classList.remove("filter-active");
  all1.classList.remove("filter-active");
  all4.classList.remove("filter-active");
  document.getElementById("cardd").style.display = "block";
  document.getElementById("app").style.display = "none";
  document.getElementById("all").style.display = "none";
  document.getElementById("web").style.display = "none";
  
}
function all4(){
  var all1 = document.getElementById("all1");
  var all2 = document.getElementById("all2");
  var all3 = document.getElementById("all3");
  var all4 = document.getElementById("all4");
  all4.classList.add("filter-active");
  all2.classList.remove("filter-active");
  all3.classList.remove("filter-active");
  all1.classList.remove("filter-active");
  document.getElementById("web").style.display = "block";
  document.getElementById("app").style.display = "none";
  document.getElementById("cardd").style.display = "none";
  document.getElementById("all").style.display = "none";
  
}
var n;




var c;
function color(c){
  document.getElementById(`img${c}`).style.filter= "grayscale(0%)";
}

function grey(c){
  document.getElementById(`img${c}`).style.filter= "grayscale(100%)";
}

function création(){
  document.getElementById(`register`).style.display="none";
  document.getElementById(`créer`).style.display="block";
}
function créationn(){
  document.getElementById(`créer`).style.display="none";
  document.getElementById(`register`).style.display="block";
  
}



//Get the button:
mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
} 