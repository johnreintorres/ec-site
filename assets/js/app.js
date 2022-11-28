
$(document).ready(function(){
  $('.header-carousel').slick({
    infinite: true,
    arrows: false
  });
});

$(document).ready(function(){
  $('.pi-carousel').slick({
    infinite: true,
    arrows: true,
    dots: false,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          arrows: false,

        }
      },]
  });
});

$(document).on("scroll", function(){
  if($(document).scrollTop() > 100){
    $(".nav-area").addClass("shrink");

  }else{
    $(".nav-area").removeClass("shrink");
  }
})

var acc = document.getElementsByClassName('accordion-btn');
var i;

  for(i = 0; i < acc.length; i++){
    acc[i].addEventListener("click", function(){
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if(panel.style.maxHeight){
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    })
  }
  
$('.accordion-btn').on('click', function(){
  $(this).toggleClass('change');
})

const menuIcon = document.getElementById("menu-icon");
const slideoutMenu = document.getElementById("slideout-menu");
const body = document.getElementById("body-area");


menuIcon.addEventListener("click", function () {
    if (slideoutMenu.style.opacity == "1") {
        slideoutMenu.style.opacity = "0";
        slideoutMenu.style.pointerEvents = "none";
        body.style.overflow = "auto";

        $('.hamburger').toggleClass('is-active');
    } else {
        slideoutMenu.style.opacity = "1";
        slideoutMenu.style.pointerEvents = "auto";
        body.style.overflow = "hidden";
        $('.hamburger').toggleClass('is-active');
    }
});

(function () {
    $('.menu-lists').on('click', function () {
        $('.hamburger').toggleClass('is-active');
    })
})();

function closeNavSp() {
    if (slideoutMenu.style.opacity == "1") {
        slideoutMenu.style.opacity = "0";
        slideoutMenu.style.pointerEvents = "none";
        body.style.overflow = "auto";
        $('.hamburger').toggleClass('is-active');
    } else {
        slideoutMenu.style.opacity = "1";
        slideoutMenu.style.pointerEvents = "auto";
        $('.hamburger').toggleClass('is-active');
        body.style.overflow = "hidden";
    }
}

function myFunction(x) {
  x.classList.toggle("change");
}
/*NAV-REI*/
function toogleSlideMenu(x){
 if(x.classList.contains('change')){
    document.getElementById('myNav').style.height = '100%';
 }
 else{
    document.getElementById('myNav').style.height = '0%';
 }
}


$(function(){
  $("input").prop('required',true);
});
