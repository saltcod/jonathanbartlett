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

 
	//Append the slideshow pager inside the slideshow-meta box
	$('.slideshow-meta').append( $('.pager') );


}); //Last

