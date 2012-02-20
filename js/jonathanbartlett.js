jQuery(function($){

 	// Backstretch
	var images=["http://localhost:8888/jonathanbartlett/wp-content/themes/jonathanbartlett/images/bg_1.jpg", "http://localhost:8888/jonathanbartlett/wp-content/themes/jonathanbartlett/images/bg_2.jpg", "http://localhost:8888/jonathanbartlett/wp-content/themes/jonathanbartlett/images/bg_3.jpg"];
	var random_image_filename = Math.floor(images.length * Math.random());

	if($('body').hasClass('home')){
		$.backstretch(images[random_image_filename]);  
	}

	
	//Wrap the illustration titles in quotes
	$('p.slideshow-title').prepend('"');
	$('p.slideshow-title').append('"');
	

 //Call jQuery Masonry on the Who Is page
	var $container = $('body.page-who-is #primary #content');

	$container.imagesLoaded( function(){
	  $container.masonry({
	    itemSelector : '.who-is'
	  });
	});


	//Set the height of the sidebar == to the window height
	$('#secondary').css({ 'height':(( $(window).height())) });

 

 	//SweetPages slider for sidebar
	// Calling the jQuery plugin and splitting the
	// #holder UL into pages of 3 LIs each:

	$('.menu-portfolio-container').sweetPages({perPage:3});

	// The default behaviour of the plugin is to insert the 
	// page links in the ul, but we need them in the main container:

	var controls = $('.swControls').detach();
	controls.appendTo('#main');

 
 	 


}); //Last

