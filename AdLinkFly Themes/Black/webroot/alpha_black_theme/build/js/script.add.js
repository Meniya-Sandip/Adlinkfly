function divo()
  {
  var counteri = 1;
  setInterval(function() {
    counteri--;
    
    if (counteri === 0) {
      $("#v1").hide();
      $("#v2").fadeIn( 600 );
      window.scrollTo(0, 0);
      clearInterval(counteri);
    }
  }, 1000);  
}

function yto()
  {
  var countero = 5;
  setInterval(function() {
    countero--;
    
    if (countero === 0) {
  yu = document.getElementById("yu");
  yu.innerHTML = "Your link is ready.";
  yu.style.color = "";
      $("#y").hide();
      $("#y2").fadeIn( 600 );
      window.scrollTo(0, 0);
      clearInterval(countero);
    }
  }, 1000);  
window.open("https://www.youtube.com/c/Yuidea2020?sub_confirmation=1");
}