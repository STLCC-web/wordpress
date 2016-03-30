jQuery(document).ready(function($) {
	
	//alert("tst");
  //$('#nav a').last().addClass('last');
})

jQuery(window).scroll(function() {
if ($(this).scrollTop() > 1){  
    $('#masthead').addClass("sticky");
  }
  else{
    $('#masthead').removeClass("sticky");
  }
});