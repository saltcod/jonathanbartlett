jQuery(function($){

// Don't do anything on the mobile page
if ( !$('body').hasClass('page-mobile')) {

	// Keep it simple,ekeep the domain here
	var domain = "http://bartlettstudio.com";

 	// Backstretch
   var images=[domain+"/wp-content/themes/jonathanbartlett/images/bg_1.jpg", domain+"/wp-content/themes/jonathanbartlett/images/bg_2.jpg", domain+"/wp-content/themes/jonathanbartlett/images/bg_3.jpg"];
   var random_image_filename = Math.floor(images.length * Math.random());

   if($('body').hasClass('home')){
      $.backstretch(images[random_image_filename]);  
  }

	// TODO: This snippet of code is causing havoc on the page in chrome if the 
	// body size is too large for the window (window resize keeps firing)
	// Set the height of the sidebar == to the window height
	
    
        console.log('mobile');
         $('#secondary').height($(window).height());

        // do the same thing again when the window is resized
        $(window).resize(function(){
            $('#secondary').height($(window).height());
            console.log('resizing');
    });
    
 	// End TODO






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
	$('#menu-item-758, #menu-item-56, #menu-item-894').click(function(e) { // need to accept the argument here
		e.preventDefault(); // to be able to use it here (firefox was still letting you go to the link)
		$('#tertiary').slideToggle(); // 400 is the default duration so you don'e need to supply it
	});

	//Make sure the menu stays expanded when on the /portfolio page
	if (!$('body').hasClass('single-projects') && !$('body').hasClass('page-portfolio') ) {
		$('#tertiary').hide();
	}



//Make submenus fold down when you click on their parents

$('.sub-menu').hide(); //Hide children by default

$('li.parent-menu-item > a').click(function(e){
    e.preventDefault(); 
    $(this).siblings(".sub-menu").slideToggle(200);
    $(".sub-menu li").addClass("current-menu-item-sub");

});
	// Show the sub-menu of the current parent
	$('.current-menu-parent > ul.sub-menu').show(200);

 //Apply .current-menu-item to Portfolio when on a project page
 if( $('body').hasClass('single-projects') ){
  $('#menu-item-758, #menu-item-56, #menu-item-894').addClass('current-menu-item');
}




    // Paginate the portfolio    
    $.fn.menuPaginate = function (numitems, menuid) {
        return this.each(function () {
            var $items = $('ul#'+menuid+' > li', this), 
            mod = 12, max = $items.length,
            hash, range, 
            $prev = $('.prev', this),
            $next = $('.next', this);
            
            // Mod needs to be set before defining the function showRange
            if(typeof numitems != 'undefined' && parseInt(numitems)) {
                mod = parseInt(numitems);
            }
            
            // Function to normalize given range and hide/show accordingly
            var showRange = function (range) {
                // minimums
                range[0] = range[0] > 0 ? range[0] : 0;
                range[1] = range[1] > range[0] ? range[1] : range[0] + mod;
                
                $items.hide();
                $items.slice(range[0], range[1]).show('fast');
                
                // Show/hide prev control
                if(range[0] == 0) {
                    $prev.hide();
                } else {
                    $prev.show();
                }
                
                // Show/hide next control
                if(range[1] >= max) {
                    $next.hide();
                } else {
                    $next.show();
                }
                
                // Set current hash to reflect menu setting
                window.location.hash = 'projects/' + (range[0]+1) + '-' + (range[1] > max ? max : range[1]);
            };
            
            var parseHash = function () {
                var hash  = window.location.hash.split('/'),
                range = hash[1].split('-');
                
                range = [parseInt(range[0]-1), parseInt(range[1])]; // 0 indexed, taking into account slicing....
                range[0] = range[0] < 0 ? 0 : range[0];
                range[1] = range[1] >= max ? range[0]+mod : range[1];
                
                return range;
            };
            
            // Check if hash exists and adjust range accordingly
            if(window.location.hash) {
                range = parseHash();
            } else {
                range = [0, mod];
            }
            
            showRange(range);
            
            $prev.click(function (e) {
                e.preventDefault();
                
                range = parseHash();
                showRange([range[0]-mod, range[1]-mod]);
            });
            
            $next.click(function(e) { 
                e.preventDefault();
                
                range = parseHash();
                showRange([range[0]+mod, range[1]+mod]);
            });
        });
};

    // We call this function on the container because it will be used 
    // as context to find the menu, its items, and the page controls.
    // The ID for the menu is specified to get selector together which 
    // makes sense and is efficient.
    $('#tertiary').menuPaginate(12, 'menu-portfolio');
    // Make sure links from the same domain receive the current hash behind their url when you click on them
    $('a[href^="'+domain+'"]').click(function () { 
       var $this = $(this); 
       $this.attr('href', $this.attr('href') + window.location.hash); 
   });
    
};
}); //Last