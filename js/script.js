$(document).ready(function() {  
  
//set opacity to 0.4 for all the images  
//opacity = 1 - completely opaque  
//opacity = 0 - invisible  
  
$('.socialicon img').css('opacity', 0.5);  
$('.socialicon3 img').css('opacity', 0.5);  
  
// when hover over the selected image change the opacity to 1  
$('.socialicon li').hover(  
   function(){  
      $(this).find('img').stop().fadeTo('slow', 1);  
   },  
   function(){  
      $(this).find('img').stop().fadeTo('slow', 0.5);  
   });  

$('.socialicon3').hover(  
   function(){  
      $(this).find('img').stop().fadeTo('slow', 1);  
   },  
   function(){  
      $(this).find('img').stop().fadeTo('slow', 0.5);  
   });  




  
});  


 function home() {
                $('html, body').animate({scrollTop: ($('.maincontent').offset().top)},'slow');
            }

 function ourstory() {
                $('html, body').animate({scrollTop: ($('#section-5').offset().top-55)},'slow');
            }

 function whatwedo() {
                $('html, body').animate({scrollTop: ($('#section-8').offset().top-55)},'slow');
            }


 function talktous() {
                $('html, body').animate({scrollTop: ($('#section-12').offset().top-55)},'slow');
            }




function showmenu() {
    $('.slidemenu').slideToggle('fast');
      return false;

}
