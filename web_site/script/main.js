


// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
  
}
// Get the modal
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal2, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
  
}


/*CAROUSEL */
 var slideIndex = 1;
    showSlides(slideIndex);
// Next/previous controls
function plusSlides(n) {
       
    showSlides(slideIndex += n);
  }
  
  // Thumbnail image controls
  function currentSlide(n) {
    showSlides(slideIndex = n);
  }
  /*Carousel*/
  function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlide");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
    
    setTimeout(showSlides, 3000);
  }



function hamburguerMenu(){
    obj = document.getElementById("myHeader")
    obj.style.marginLeft='0%'
    obj.style.transition= '0.4s'

}

function closeMenu(){
   bt = document.getElementById("myHeader")
   bt.style.marginLeft='-100%'
}
// animals blog

  
 


function Fdog(){
     
    document.getElementById('dog').style.display="block"
}
function Fcat(){
  catVar = document.getElementById('cat')   
  catVar.style.display="block"
}

// OTHER
function Fother(){
     
otherVar=document.getElementById('other')
otherVar.style.display="block"
      
}


  function myfunction(){

    alert('Make login')
  }