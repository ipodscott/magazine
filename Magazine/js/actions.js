 $( document ).ready(function() {
	 
	 
	 window.sr = ScrollReveal();
 
	 sr.reveal('.fade-in', { reset: true, duration: 1000, delay: 500, opacity: 0, origin: 'center', distance: '0', scale: 0, easing: 'ease', viewOffset: { top: 0, right: 0, bottom: 0, left: 0 }});
	 sr.reveal('.fromBottom', { reset: true, duration: 2000, delay: 500, opacity: 0, origin: 'bottom', distance: '0', scale: 0, easing: 'ease', viewOffset: { top: 0, right: 0, bottom: 0, left: 0 }});
	 sr.reveal('.vid-bg-box', { reset: true, duration: 2000, delay: 0, opacity: 0, scale: 1, easing: 'ease-in-out', viewOffset: { top: 0, right: 0, bottom: 0, left: 0 }}); 
	 sr.reveal('.cover-fade', { reset: true, duration: 1000, delay: 1000, opacity: 0, scale: 0.90, origin: 'center', distance: '0px', easing: 'ease-in-out', viewOffset: { top: 60, right: 0, bottom: 60, left: 0 }}); 
	 sr.reveal('.kenBurns', { reset: true, duration: 10000, delay: 0, opacity: 0.5, scale: 1.2, origin: 'center', distance: '0px', easing: 'ease-in-out', viewOffset: { top: 120, right: 0, bottom: 120, left: 0 }});
	 sr.reveal('.center-fade', { reset: true, duration: 2000, delay: 0, opacity: 0.5, scale: 1.1, easing: 'ease-in-out', viewOffset: { top: 60, right: 0, bottom: 60, left: 0 }}); 
 

$(".big-black").delay(0).fadeOut(1000);
$(".all, .media-layers").fadeIn(0);	 

    $('a[href*="#"]:not([href="#"])').click(function() {
    	  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    	    var target = $(this.hash);
    	    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    	    if (target.length) {
    	      $('html, body').animate({
    	        scrollTop: target.offset().top
    	      }, 1000);
    	      return false;
    	    }
    	  }
    	});
    	
    
    
    /*Menu Controls*/
    $( ".menu-btn" ).click(function() {
        $(".menu").addClass('show-menu');
        /*$('body').addClass('fade');*/
        /*$('.all').addClass('fade');*/
        $(".menu-layer").fadeIn(500);
         
    });
    
    $( ".menu ul li, .menu ul li a, .close-menu, .menu-layer" ).click(function() {
        $(".menu").removeClass('show-menu');
        /*$('body').removeClass('fade');*/
        /*$('.all').removeClass('fade');*/
        $(".menu-layer").delay(250).fadeOut(500);
    });
    
    $( ".menu ul li a.page-link" ).click(function() {
    	$(".big-black").fadeIn(0);
     });
    
    /*Audio Controls*/
    
    $( ".cap-play-snd.play-snd" ).click(function() {
    	$('.myAudio').attr("src", $(this).attr("audioUrl"));
        $(".footer-audio").addClass('show-audio');
        document.getElementById('myAudio').play();
        $('.audioplayer').addClass("audioplayer-playing");
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeOut(500);
        $(this).stop().hide(0, function(){
	        $('.cap-play-snd.stop-snd').show(0);
        });
        
        $('.cap-play-snd.stop-snd').addClass('playing');
        
    });
    
    
     $( ".cap-play-snd.stop-snd" ).click(function() {
    	$('.myAudio').attr("src", $(this).attr("audioUrl"));
        $(".footer-audio").addClass('show-audio');
        document.getElementById('myAudio').play();
        $('.audioplayer').addClass("audioplayer-playing");
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeOut(500);
        $('.cap-play-snd.play-snd').show();
        $('.cap-play-snd.stop-snd').removeClass('playing');
        $(this).delay(500).stop().hide(0, function(){
	        $('.cap-play-snd.play-snd').show(0);
        });
        
    });
    
  
    
    
    $('.play-audio').on('click', '.play-snd', function(){
        $('.myAudio').attr("src", $(this).parent().attr("audioUrl"));
        $(".footer-audio").addClass('show-audio');
        document.getElementById('myAudio').play();
        $('.audioplayer').addClass("audioplayer-playing");
        $('.play-audio').removeClass("playing");
        $(this).parent().delay(500).addClass("playing");
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeOut(500);
        $('.now-playing').show();
        $('.audio-switch').addClass('play-snd');
        $('.audio-switch').removeClass("stop-snd");
        $(this).delay(500).removeClass('play-snd');
        $(this).delay(500).addClass('stop-snd');
    });
    
    $( ".audio-box .hide-audio" ).click(function() {
     $(".footer-audio").removeClass('show-audio');
     $(".side-buttons").addClass('show-side');
     $('.btt-footer').fadeIn(500);
    });
    
    $( ".show-right" ).click(function() {
        $(".footer-audio").addClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        $('.btt-footer').fadeIn(500);
    });
    
    $( ".audio-switch" ).click(function() {
	    $('.cap-play-snd.stop-snd').removeClass('playing');
        $('.cap-play-snd.play-snd').show(0);
        $('.cap-play-snd.stop-snd').hide(0);
    });
    
    $( ".close-audio, .vid-link" ).click(function() {
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.btt-footer').fadeIn(500);
        $('.play-audio').removeClass("playing");
        $('.audio-switch').removeClass("stop-snd");
        $(".audio-switch").addClass('play-snd');
        $('.cap-play-snd.stop-snd').removeClass('playing');
        $('.cap-play-snd.play-snd').show(0);
        $('.cap-play-snd.stop-snd').hide(0);
    });
    
    
      $( ".stop-snd" ).click(function() {
	    $(".footer-audio").removeClass('show-audio');
	    $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.play-audio').removeClass("playing");
        $('.audio-switch').addClass('play-snd');
        $('.audio-switch').removeClass("stop-snd");
        $('.cap-play-snd.stop-snd').removeClass('playing');
        $('.cap-play-snd.play-snd').show(0);
        $('.cap-play-snd.stop-snd').hide(0);
	 });
    
    
    $('.play-audio').on('click', '.stop-snd', function(){
	    $(".footer-audio").removeClass('show-audio');
	    $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.play-audio').removeClass("playing");
        $('.audio-switch').addClass('play-snd');
        $('.audio-switch').removeClass("stop-snd");
        $('.cap-play-snd.stop-snd').removeClass('playing');
        $('.cap-play-snd.play-snd').show(0);
        $('.cap-play-snd.stop-snd').hide(0);
	 });
    
       $(function(){
        $('.myAudio').audioPlayer();
    });
    
    /*Video Controls*/
    
    $( ".vid-link, .big-play" ).click(function() {
        $('.myVideo').attr("src", $(this).attr("vidUrl"));
        $('.media-overlay, .close-media, .video-box').fadeIn(500);
        /*$('body').addClass('fade');*/
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        document.getElementById('myVideo').play();
    });
    
    /* Image Pop Controls*/
    
     $( ".pop-image" ).click(function() {
         $('.myImage').attr("src", $(this).attr("imgUrl"));
           $('.media-overlay, .close-media, .img-pop-box').fadeIn(500, function(){
               $('.img-holder img').fadeIn(500);
           });
            /*$('body').addClass('fade');*/
     });
     
 
    /*iframe Controls*/
    
    $( ".tube-link" ).click(function() {
        $('.media-overlay, .close-media, .tube-frame').fadeIn(500);
        /*$('body').addClass('fade');*/
        $(".footer-audio").removeClass('show-audio');
        $(".side-buttons").removeClass('show-side');
        document.getElementById('myAudio').pause();
        $('.youTube').attr("src", $(this).attr("vidUrl"));
    });
    
    $( ".close-media, .img-holder img, .img-container" ).click(function() {
        $('.youTube').attr("src", $(this).attr("vidUrl"));
        $('.media-overlay, .tube-frame, .close-media, .video-box, .img-holder img').fadeOut(500, function(){
            $('.img-pop-box').fadeOut(500);
        });
        document.getElementById('myVideo').pause();
        /*$('body').removeClass('fade');*/
    });
    
    
    
    /*Parallax*/
    
    (function($) {
 
    $.fn.parallax = function(options) {
 
        var windowHeight = $(window).height();
 
        // Establish default settings
        var settings = $.extend({
            speed        : 0.15
        }, options);
 
        // Iterate over each object in collection
        return this.each( function() {
 
        	// Save a reference to the element
        	var $this = $(this);
 
        	// Set up Scroll Handler
        	$(document).scroll(function(){
 
    		        var scrollTop = $(window).scrollTop();
            	        var offset = $this.offset().top;
            	        var height = $this.outerHeight();
 
    		// Check if above or below viewport
			if (offset + height <= scrollTop || offset >= scrollTop + windowHeight) {
				return;
			}
 
			var yBgPosition = Math.round((offset - scrollTop) * settings.speed);
 
                 // Apply the Y Background Position to Set the Parallax Effect
    			$this.css('background-position', 'center ' + yBgPosition + 'px');
                
        	});
        });
    };
  
  
}(jQuery));

$('.parallax').parallax({
	speed :	-0.125
});

});

 window.document.onkeydown = function (e)
        {
        if (!e) e = event;
        if (e.keyCode == 27)
        {
        
            $('.youTube').attr("src", $(this).attr("vidUrl"));
            $('.media-overlay, .tube-frame, .close-media, .video-box, .img-holder img').fadeOut(500, function(){
                $('.img-pop-box').fadeOut(500);
            });
            document.getElementById('myVideo').pause();
            /*$('body').removeClass('fade');*/
            
            $(".menu").removeClass('show-menu');
            /*$('body').removeClass('fade');*/
            /*$('.all').removeClass('fade');*/
            $(".menu-layer").delay(250).fadeOut(500);

            $('.btt-footer').fadeIn(500);
        
        }
        
         if (!e) e = event;
        if (e.keyCode == 39)
        {
            $(".menu").addClass('show-menu');
            /*$('body').addClass('fade');*/
            $('.all').addClass('fade');
            $(".menu-layer").fadeIn(500);
        
        }
        
        
        if (!e) e = event;
        if (e.keyCode == 37)
        {
            $(".menu").removeClass('show-menu');
            /*$('body').removeClass('fade');*/
            $('.all').removeClass('fade');
            $(".menu-layer").delay(250).fadeOut(500);
        
        }
        
        };

    

$(document).scroll(function() {
	  var y = $(this).scrollTop();
	  if (y > 40) {
	    $('.btt-footer').fadeIn(500);
	  } else {
	    $('.btt-footer').fadeOut(500);
	  }
	});
	

 