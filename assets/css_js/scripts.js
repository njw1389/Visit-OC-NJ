// Get the button
let mybutton = document.getElementById("myBtn");
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
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}



// Navbar Hamburger Icon Animator
const hamburger = document.querySelector(".hamburger");
  hamburger.addEventListener("click", function () {
  this.classList.toggle("close");
});



// Validation
document.getElementById('my-form').addEventListener('submit', function (event) {
  const name = document.getElementById('name').value.trim();
  const email = document.getElementById('email').value.trim();
  const favoritePlace = document.querySelector('input[name="FavoritePlace"]:checked');
  const rating = document.getElementById('rating').value;
  const comment = document.getElementById('commentBox').value.trim();

  let errorMessage = '';

  if (!name) {
    errorMessage += 'Please Enter Your Name!\n';
  }

  if (!email) {
    errorMessage += 'Please Enter A Email!\n';
  }

  if (!favoritePlace) {
    errorMessage += 'Please Select Your Favorite Place!\n';
  }

  if (!rating) {
    errorMessage += 'Please Provide A Rating!\n';
  }

  if (!comment) {
    errorMessage += 'Please Enter A Comment!\n';
  }

  if (errorMessage) {
    alert(errorMessage);
    event.preventDefault();
  } else {
    this.submit();
  }
});