jQuery(document).ready(function($) {
	
	//alert("tst");
  //$('#nav a').last().addClass('last');
})

jQuery(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('nav').addClass("sticky");
  }
  else{
    $('nav').removeClass("sticky");
  }
});