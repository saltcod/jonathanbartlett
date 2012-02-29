jQuery(function($){

 	// Backstretch
	var images=["http://jb.waterstreetgm.org/wp-content/themes/jonathanbartlett/images/bg_1.jpg", "http://jb.waterstreetgm.org/wp-content/themes/jonathanbartlett/images/bg_2.jpg", "http://jb.waterstreetgm.org/wp-content/themes/jonathanbartlett/images/bg_3.jpg"];
	var random_image_filename = Math.floor(images.length * Math.random());

	if($('body').hasClass('home')){
		$.backstretch(images[random_image_filename]);  
	}

	//Set the height of the sidebar == to the window height
		$('#secondary').css({ 'height':(( $(window).height())) });



	//Wrap the illustration titles in quotes
	$('p.slideshow-title').prepend('"');
	$('p.slideshow-title').append('"');


//Call jQuery Masonry on the Who Is page
	var $container = $('body.page-who-is #primary #content');

	$container.imagesLoaded( function(){
	  $container.masonry({
	    itemSelector : '.who-is',
			columnWidth: 65
	  });
	});


 //Show 12 links at a time in the portfolio menu

	    $('#tertiary').hide();

	      $('#menu-item-758, #menu-item-56').click(function() {
			event.preventDefault();
	      	$('#tertiary').slideToggle(400, function() {
	      });
	    });

//Make sure the menu stays expanded when on the /portfolio page
    if ($('body').hasClass('single-projects') || $('body').hasClass('page-portfolio') ) {
	    $('#tertiary').show();
	}

 

//Make submenus fold down when you click on their parents

$('.sub-menu').hide(); //Hide children by default

    $('li.parent-menu-item > a').click(function(){
    event.preventDefault(); 
    $(this).siblings(".sub-menu").slideToggle(400);
	$(".sub-menu li").addClass("current-menu-item-sub");
  
});
	// Show the sub-menu of the current parent
	$('.current-menu-parent > ul.sub-menu').show();

 //Apply .current-menu-item to Portfolio when on a project page
 if( $('body').hasClass('single-projects') ){
		$('#menu-item-758, #menu-item-56').addClass('current-menu-item');
}

}); //Last