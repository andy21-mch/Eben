//Get the button
let mybutton = document.getElementById("btn-back-to-top");
let $navbar = document.querySelector("#navbar");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    mybutton.style.display = "block";
    $navbar.classList.add('bg-dark');
    $navbar.classList.add('navbar-dark');
  } else {
    mybutton.style.display = "none";
    $navbar.classList.remove('bg-dark');
    $navbar.classList.remove('navbar-dark');
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}