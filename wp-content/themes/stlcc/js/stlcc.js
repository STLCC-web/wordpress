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


/*
	$.fn.toggleClick=function(){
    	var functions=arguments, iteration=0
    	return this.click(function(){
    		functions[iteration].apply(this,arguments)
    		iteration= (iteration+1) %functions.length
    	})
    }
    
    
     $('#accountImageMobile').toggleClick(function () {

			 	$('#over-menu').animate({ left: '0' }, 400,'swing');
     		$('#content').animate({ left: '240px' }, 400,'swing');    
     }, function () {
  			$('#over-menu').animate({ left: '-240px' }, 400,'swing');
     		$('#content').animate({ left: '0' }, 400,'swing');
    });
*/