document.addEventListener("DOMContentLoaded", function(){
window.addEventListener('scroll', function() {
    if (window.scrollY > 150) {
      document.querySelector('#navbar_top').classList.add('sticky');
      navbar_height = document.querySelector('#.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.querySelektor('#navbar_top').classList.remove('sticky');
      document.body.style.paddingTop = '0';
    }
});
});
function hide() {
   document.querySelector('#slider_content-1').style.display = 'block'
   document.querySelector('#slider_content-2').style.display = 'none'
   var first = document.querySelector("#1");
   var second = document.querySelector("#2");
   first.classList.add("active");
   second.classList.remove("active");
}
function show() {
   document.querySelector('#slider_content-1').style.display = 'none'
   document.querySelector('#slider_content-2').style.display = 'block'
   var first = document.querySelector("#1");
   var second = document.querySelector("#2");
   first.classList.remove("active");
   second.classList.add("active");
}
window.onscroll = function()
{
if( window.XMLHttpRequest ) {
    if (document.documentElement.scrollTop > 400 || self.pageYOffset > 400) {
        $('#totop').css('display','block');
    } else if (document.documentElement.scrollTop < 400 || self.pageYOffset < 400) {
        $('#totop').css('display','none');
      }
  }
}
function totop() {

     $('html, body').animate({scrollTop:0}, 'slow');
}
$(document).ready(function(){
  $(window).scroll(function() {
    $(".op-0").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 750) {
          $(this).addClass("op-1");
        }
    });
    $(".fade-in").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 900) {
          $(this).addClass("fade-show");
        }
    });
    $(".zoom").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("zoom-in");
        }
    });
  });
});
