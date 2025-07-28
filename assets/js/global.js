document.addEventListener("DOMContentLoaded", function() { 
  mobileNav();
});

function helloWorld(){
  document.onclick = function(e) {
    e.preventDefault;
    alert('Hello World');
  }
}

function mobileNav() {
  let hamb = document.querySelector('.hamb');
  let nav = document.querySelector('.m-nav');
  let bod = document.querySelector('body');

  document.addEventListener('click', function(event) {
    if (event.target !== hamb && !hamb.contains(event.target)) {
      // console.log('outside element');
      hamb.classList.remove('show');
      nav.classList.remove('show');
      bod.classList.remove('freeze');
    } else {
      // console.log('burger clicked')
      hamb.classList.toggle('show');
      nav.classList.toggle('show');
      bod.classList.toggle('freeze');
    }
  });

}