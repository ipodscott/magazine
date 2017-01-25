<!--Media Layers-->
<div class="media-layers" style="display: none;">
	<div class="footer-audio">
	    <div class="audio-box shadow">
	        <div class="controls shadow">
	            <img class="hide-audio" src="<?php echo get_template_directory_uri(); ?>/images/thin_min.svg">
	  <img class="close-audio" src="<?php echo get_template_directory_uri(); ?>/images/thin_close.svg">
	        </div>
	        <audio class="myAudio" id="myAudio" src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/try_me.mp3" controls></audio>
	    </div>
	</div>
	
	<div class="media-overlay"></div>
	
	<div class="img-pop-box">
	    <div class="img-container">
	        <div class="img-box">
	            <div class="img-holder">
	               
	                <img class="shadow myImage" src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png">
	                
	            </div>
	        </div>
	    </div>
	</div>
	
	<!--Menu Layers-->
	
	<div class="menu-layer"></div>
	<div class="video-box"><video class="myVideo" id="myVideo" poster="<?php echo get_template_directory_uri(); ?>/images/loading.png" controls="" src="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/DuMont.mp4" style="display: block;"></video></div>
	<div class="tube-frame">
		<iframe class="youTube" src="" frameborder="0" allowfullscreen=""></iframe>
	</div>
	<img class="close-media"  vidurl="#" src="<?php echo get_template_directory_uri(); ?>/images/close_btn.svg">
	
	
	<div class="side-buttons show-right shadow">
	    <img src="<?php echo get_template_directory_uri(); ?>/images/snd_min.png"/>
	</div>
	
	<img class="menu-btn" src="<?php echo get_template_directory_uri(); ?>/images/menu_btn.svg">
	
	<div class="menu shadow">
	    <div class="menu-title">Main Menu</div>
	    <ul>
		    <li><a class="page-link" href="http://www.wpwebos.com/mag-test/">home</a></li>
	        <li><a href="#video-bg">Welcome</a></li>
	        <li><a href="#intro">Introduction</a></li>
	        <li><a href="#parallax">Parallax Cover</a></li>
	        <li><a href="#audio">Audio Samples</a></li>
	        <li><a href="#video">Video Sample</a></li>
	        <li><a href="#iframe">Iframe Sample</a></li>
	        <li><a href="#layout">Basic Layout</a></li>
	        <li><a href="#big-media">Big Media Link</a></li>
	        <li><a class="page-link" href="test-page/">Test Page</a></li>
	    </ul>
	    <img class="close-menu" src="<?php echo get_template_directory_uri(); ?>/images/thin_close.svg">
	</div>
	
	<div class="btt-footer">
	   <a href="#top"><img class="shadow" src="<?php echo get_template_directory_uri(); ?>/images/top_link.svg"></a>
	</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/js/scrollreveal.min.js"></script>
    <script>
      window.sr = ScrollReveal();

      // Add class to <html> if ScrollReveal is supported
      if (sr.isSupported()) {
        document.documentElement.classList.add('sr');
      }

    </script>

<style>
	.sr ._parallax, .sr .vid-bg-box, .sr .cover-fade, .sr .center-fade{visibility: hidden;}
</style>



<?php wp_footer(); ?>

<div class="big-black" style="position: fixed; z-index:99999; background-color:#000; width:100%; height: 100vh; display:block; text-align: center;">
	<img style="display:block; position:relative; margin: 0 auto; margin-top:calc(50vh - 125px);" src="<?php echo get_template_directory_uri(); ?>/images/loading.gif"/>
</div>
</body>
</html>