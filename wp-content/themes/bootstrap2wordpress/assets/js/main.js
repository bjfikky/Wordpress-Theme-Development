$(function () {
    // cache the window object
    var $window = $(window);
    
    //Parallax background effect
    $('section[data-type="background"]').each(function() {
        var $bgobj = $(this);  // assigning the object
        
        $(window).scroll(function(){
            
            //Scroll the background at varying speeds
            //the yPos is a negative value because we are scrolling it up
            
            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
            
            //put together our final background position
            var coords = '50%' + yPos + 'px';
            
            //Move the background
            $bgobj.css({backgroundPosition: coords });
            
        }); // end window scroll
    });
});

// make sure css for the section with image has this "background: url('../img/hero-bg.jpg') 50% 0 repeat fixed"