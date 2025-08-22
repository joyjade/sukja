window.addEventListener('load', function() {
  setTimeout(function() {
    // Your code here
    console.log("2 seconds have passed.");
    let widgetLogo = document.querySelector("#eapps-instagram-feed-1 > a");
    console.log(widgetLogo);
    widgetLogo.remove();
  }, 1500); 
});

function helloWorld(){
  document.onclick = function(e) {
    e.preventDefault;
    alert('Hello World');
  }
}