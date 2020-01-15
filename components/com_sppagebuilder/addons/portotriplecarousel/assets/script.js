
jQuery(function($){	
	$(document).ready(function(){	
		  $(".portotriplecarousel .owl-carousel").each(function(){	  
				$(this).owlCarousel({"autoHeight": true, "items": 1, "margin": 10, "nav": true, "dots": false, "stagePadding": 0 ,"navText": ["",""],
			  });
		});

	});
});
