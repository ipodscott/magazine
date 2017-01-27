<?php get_header(); ?>
<body name="top">
<div class="all dark">
	

<?php while(has_sub_field("main_content")): ?>
<?php if(get_row_layout() == "video_background_cover"):?>
 		
 		<div class="full-panel" style="" name="<?php the_sub_field("section_title"); ?>">
		    <div class="vid-bg-box">
		        <video src="<?php the_sub_field("video_background"); ?>" class="video_background" autoplay="autoplay" loop="loop"></video>
		    </div>
		    
		    <div class="panel-overlay dark"></div>
		    
			<div class="middle">
			    <div class="main-content cover-fade">
				    <div class="img-gallery">
					    
					    <?php while(has_sub_field("page_content")): ?>
						<?php if(get_row_layout() == "logo"):?>
					    
				        		<img class="cover-title-image" src="<?php the_sub_field("logo_image"); ?>">
				        	
				        	<?php elseif(get_row_layout() == "link"):?>
							
								<div class="full break center"><a href="<?php the_sub_field("cover_link"); ?>"><btn><?php the_sub_field("button_title"); ?></btn></a></div>
							
							<?php elseif(get_row_layout() == "large_header"):?>
								
								<h1 class="center" style="color:#fff;"><?php the_sub_field("large_header"); ?></h1>
				        
				        <?php endif; ?>
						<?php endwhile; ?>
						
						
				    </div>
		        </div>
		    </div>
		    
		</div>
		
		<?php elseif(get_row_layout() == "section_content"):?>
		
		
			<?php while(has_sub_field("section_content")): ?>
					<?php if(get_row_layout() == "h1_header"):?>
				    
			        		
			        	
			        	<?php elseif(get_row_layout() == "narrow_left_wide_right"):?>
						
						
						<div class="full-panel" name="iframe">
							<div class="middle">
								<div class="main-content">
								    
								    
								    <div class="quarter">
									    
									    <?php while(has_sub_field("column_one")): ?>
										
										<?php if(get_row_layout() == "image"):?>
									    	<img imgurl="<?php the_sub_field("full_image"); ?>" class="pop-image shadow" src="<?php the_sub_field("thumb"); ?>"/>
								        	<div class="img-cap"><?php the_sub_field("caption"); ?></div> 
								        	
								        <?php elseif(get_row_layout() == "audio_link"):?>
								        <div class="play-audio" audioUrl="<?php the_sub_field("audio_url"); ?>">
									        <?php the_sub_field("audio_title"); ?><i class="fa fa-volume-up" aria-hidden="true"></i>
									        <div class="audio-switch play-snd"></div>
									    </div>
								        								        
								        <?php endif; ?>
										<?php endwhile; ?>
								       
								    </div>
								    
								    
									<div class="three-quarters">
										
										<?php while(has_sub_field("right_column")): ?>
										<?php if(get_row_layout() == "h2"):?>
									    
								        		<h2><?php the_sub_field("h2"); ?></h2>
								        	
								        	<?php elseif(get_row_layout() == "copy"):?>
											
												<?php the_sub_field("copy"); ?>
											
											<?php elseif(get_row_layout() == "large_header"):?>
												
												<h1 class="center" style="color:#fff;"><?php the_sub_field("large_header"); ?></h1>
								        
								        <?php endif; ?>
										<?php endwhile; ?>
								       
									</div>
								</div>
								<div class="full break center"><a href="#layout"><btn>Basic Layout</btn></a></div>
								
							</div>
					</div>
						
						
						
						<?php elseif(get_row_layout() == "main_content"):?>
							
							  <div class="full"><?php the_sub_field("main_content"); ?></div>
							  
						<?php elseif(get_row_layout() == "large_link"):?>
						
			        <div class="full break center"><a href="<?php the_sub_field('url');?>"><btn><?php the_sub_field('text');?></btn></a></div>
			        
			        <?php endif; ?>
			<?php endwhile; ?>
		
	 
		<?php elseif(get_row_layout() == "full_width_content"):?>
			
			<div class="full-panel" name="<?php the_sub_field("section_title");?>">
					<div class="middle">
					<div class="main-content">
						
					<?php while(has_sub_field("page_content")): ?>
					<?php if(get_row_layout() == "h1_header"):?>
				    
			        		<div class="full"><h1 class="center underline"><?php the_sub_field("h1_header");?></h1></div>
			        	
			        	<?php elseif(get_row_layout() == "h2_header"):?>
						
							<div class="full"><h2><?php the_sub_field("h2_header");?></h2></div>
						
						<?php elseif(get_row_layout() == "main_content"):?>
							
							  <div class="full"><?php the_sub_field("main_content"); ?></div>
							  
						<?php elseif(get_row_layout() == "large_link"):?>
						
			        <div class="full break center"><a href="<?php the_sub_field('url');?>"><btn><?php the_sub_field('text');?></btn></a></div>
			        <?php endif; ?>
					<?php endwhile; ?>
	
					    
					</div>
				</div>
			</div>
			
		
		<?php elseif(get_row_layout() == "full"):?>
		
		<?php elseif(get_row_layout() == "gallery"):?>
		
			<div class="full-panel" name="<?php the_sub_field("section_title");?>">
				<div class="middle">
					<div class="main-content gallery">
					<div class="full"><h2><?php the_sub_field('gallery_name');?></h2></div>
						
					<?php if(get_sub_field('gallery')): ?>
					<?php while(has_sub_field('gallery')): ?>
						
						<div class="gall-img pop-image shadow" imgUrl="<?php the_sub_field('full_image');?>" >
							<img src="<?php the_sub_field('thumbnail');?>"/>
							<div class="info">
								<div class="text"><?php the_sub_field('image_info');?></div>
							</div>
						</div>
						
			        <?php endwhile; ?>
			        <?php endif; ?>
						<?php if((get_sub_field('link_title'))): ?>
								<div class="full break center"><a href="<?php the_sub_field('link_url');?>"><btn><?php the_sub_field('link_title');?></btn></a></div>
						<?php endif;?>
					</div>
				</div>
			</div>
		
	

<?php endif; ?>
<?php endwhile; ?>



<div class="half-panel-caption light parallax" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/airplane_crop.jpg);" name="parallax">
	 <div class="panel-overlay"></div>
	<div class="middle fade-in">
	    <div class="caption right shadow">
		    <div class="cap-copy center-fade">
			    <span class="cap-title">Lockheed 14 Airplane</span>
			    Fair President Grover Whalen (center) stands by as workers prep Hughes's Lockheed 14, christened New York World's Fair 1939.
			     <div class="simple-link pop-image" imgUrl="<?php echo get_template_directory_uri(); ?>/images/airplane.jpg">View Image <i class="fa fa-picture-o" aria-hidden="true"></i></div>
			 </div>
	    </div>
	    
	    <div class="cap-header-title">
		    <h1 class="center-fade">Big Title</h1>
		</div>
	    
    </div>
</div>

    
<div class="half-panel-caption light parallax" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/new_horizons_crop.jpg);" name="parallax">
	 <div class="panel-overlay"></div>
	<div class="middle fade-in">
	    <div class="caption shadow">
		    <div class="cap-copy center-fade">
			    <span class="cap-title">New Horizons</span>
			    Fairgoers line up outside Highways & Horizons, the General Motors Building, featuring Chevrolet.
			     <div class="simple-link pop-image" imgUrl="<?php echo get_template_directory_uri(); ?>/images/new_horizons.jpg">View Image <i class="fa fa-picture-o" aria-hidden="true"></i></div>
			 </div>
	    </div>
	    
	    <div class="cap-header-title">
		    <h1 class="center-fade">Big Title</h1>
		</div>
	    
    </div>
</div>


<div class="half-panel-caption light parallax" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/ford_crop.jpg);" name="parallax">
	 <div class="panel-overlay"></div>
	<div class="middle fade-in">
	    <div class="caption right shadow">
		    <div class="cap-copy center-fade">
			    <span class="cap-title">The Ford Pavillion</span>
			    Ford Motor Building. Entrance.
			     <div class="simple-link pop-image" imgUrl="<?php echo get_template_directory_uri(); ?>/images/ford_lg.jpg">View Image <i class="fa fa-picture-o" aria-hidden="true"></i></div>
			 </div>
	    </div>
    </div>
</div>

<div class="half-panel-caption light parallax" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/flyer.jpg);" name="parallax">
	 <div class="panel-overlay"></div>
	<div class="middle fade-in">
	    <div class="caption shadow">
		    <div class="cap-copy center-fade">
			    <span class="cap-title">Wanted! 10,000 guest homes</span>
			    Poster calling for guest homes to be available during the New York World's Fair.
			     <div class="simple-link pop-image" imgUrl="<?php echo get_template_directory_uri(); ?>/images/flyer_lg.jpg">View Image <i class="fa fa-picture-o" aria-hidden="true"></i></div>
			 </div>
	    </div>
    </div>
</div>  
    
<div class="full-panel" name="audio">
		<div class="middle">
			<div class="main-content">
			
				<div class="full"><h2>Audio Samples</h2></div>
                <div class="half">
                   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Pellentesque ornare justo non orci aliquet ullamcorper. Nullam consectetur lacus mauris, pellentesque hendrerit dolor hendrerit eget. Nulla non finibus mi, ac dignissim elit. Proin semper bibendum ipsum, non dignissim arcu feugiat sit amet. Vestibulum porta nunc urna, ac mattis quam sodales ut.</p>

<p>Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.</p>
                    
                    
                    <div class="play-audio" audioUrl="https://www.dieselpunkindustries.com/radio_shows/dimension_x/dimension_x_50-05-27_08_to_the_future.mp3">
						Play Audio One<i class="fa fa-volume-up" aria-hidden="true"></i>
						<div class="audio-switch play-snd"></div>
					</div>
                    



                </div>
                <div class="half">
                    
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Pellentesque ornare justo non orci aliquet ullamcorper. Nullam consectetur lacus mauris, pellentesque hendrerit dolor hendrerit eget. Nulla non finibus mi, ac dignissim elit. Proin semper bibendum ipsum, non dignissim arcu feugiat sit amet. Vestibulum porta nunc urna, ac mattis quam sodales ut.</p>

<p>Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.</p>
                    
                    
                     <div class="play-audio" audioUrl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/try_me.mp3">
						Play Audio Two<i class="fa fa-volume-up" aria-hidden="true"></i>
						<div class="audio-switch play-snd"></div>
					</div>
                    
                  
                </div>
        </div>
         <div class="full break center"><a href="#video"><btn>Video Sample</btn></a></div>
    </div>
</div>


<div class="full-panel" name="video">
		<div class="middle">
			<div class="main-content">
			   
			  
			    
			    <div class="forty pull-right">
			    <div class="vid-link" vidurl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/battle_of_britain.mp4">
							<img class="img-shadow" src="<?php echo get_template_directory_uri(); ?>/images/bob.jpg">
							<div class="vid-overlay">
								<div class="vid-table">
									<div class="cell"><img src="<?php echo get_template_directory_uri(); ?>/images/play_btn.svg"></div>
								</div>
							</div>				
						</div>
						<div class="vid-cap">Movie Title</div>  
			    </div>
			    
			    <div class="sixty pull-left">
			        <h2>Video Sample</h2>
			       <p>
			       
			        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
			     </p>
			    </div>
			        
			</div>
			<div class="full break center"><a href="#iframe"><btn>iframe Sample</btn></a></div>
		</div>
</div>


<div class="full-panel" name="iframe">
		<div class="middle">
			<div class="main-content">
			    
			    
			    <div class="forty">
			          <div class="tube-link" vidurl="https://www.youtube.com/embed/bRDOrY97wkk">
							<img src="<?php echo get_template_directory_uri(); ?>/images/overwatch_th.jpg">
							<div class="vid-overlay">
								<div class="vid-table">
									<div class="cell"><img src="<?php echo get_template_directory_uri(); ?>/images/play_btn.svg"></div>
								</div>
							</div>				
						</div>
						<div class="vid-cap">Movie Title</div>  
			    </div>
			    
			   
			  <div class="sixty">
			        <h2>Iframe Sample</h2>
			       <p>
			       
			        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
			     </p>
			    </div>
			</div>
			<div class="full break center"><a href="#layout"><btn>Basic Layout</btn></a></div>
			
		</div>
</div>



<div class="half-panel" style="overflow: hidden; background-color: #000;" name="layout">
    <div class="panel-overlay kenBurns" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/toastmaster.jpg); background-repeat: no-repeat; background-position: center center; background-size: cover;"></div>
      <div class="cover-overlay"></div>
	<div class="middle">
	    <div class="main-content center-fade">
	        <h1 class="center">Parallax Half Height Cover</h1>
	        <div class="full break center"><a href="#big-media"><btn>Big Media Link</btn></a></div>
        </div>
    </div>
</div>

<div class="panel">
	    <div class="main-content">
	        <div class="row">
    	        <div class="full"><h2>Basic Layout</h2></div>
    		    <div class="half">
    		        <p>
    		        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    		        </p>
    		        </div>
    			<div class="half">
    			     <p>
    			     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    			     </p>
    			</div>
    		</div>
    		
    		<div class="row">
    		    <div class="forty"><img imgUrl="https://s3.amazonaws.com/imglibs/fiat.jpeg" class="pop-image shadow" src="<?php echo get_template_directory_uri(); ?>/images/fiat_th.png"/></div>
    		    <div class="sixty">
    		        <h2>Main Copy</h2>
    		        <p>
    		            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
    		        </p>
    		    </div>
    		</div>
    		
    		<div class="row">
    		    <div class="sixty">
    		        <h2>Main Copy</h2>
    		        <p>
    		            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
    		        </p>
    		    </div>
    		    
    		    <div class="forty"><img class="shadow pop-image" imgUrl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/sombra.jpg" src="<?php echo get_template_directory_uri(); ?>/images/sombra_th.png"/></div>
    		</div>
    		
    		<div class="row">
    		    <div class="third">
    		        <h2>Section One</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Two</h2>
    		        <p>
    		        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Three</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		</div>
	</div>
</div>


<div class="half-panel parallax" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/sombra.jpg);" name="big-media">
    <div class="panel-overlay"></div>
	<div class="middle">
	    <div class="main-content ">
	        <img class="big-play" vidUrl="https://jsbin-user-assets.s3.amazonaws.com/ipodscott/infiltration.mp4" src="<?php echo get_template_directory_uri(); ?>/images/play_lt_btn.svg">
        </div>
    </div>
</div>

<div class="panel">
	    <div class="main-content">
	        <div class="row">
    	        <div class="full"><h2>Video Information</h2></div>
    		    <div class="half">
    		        <p>
    		        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    		        </p>
    		        </div>
    			<div class="half">
    			     <p>
    			     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.
    			     </p>
    			</div>
    		</div>
    		
    		<div class="row">
    		    <div class="forty"><img class="shadow" src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png"/></div>
    		    <div class="sixty">
    		        <h2>Main Copy</h2>
    		        <p>
    		            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
    		        </p>
    		    </div>
    		</div>
    		
    		<div class="row">
    		    <div class="sixty">
    		        <h2>Main Copy</h2>
    		        <p>
    		            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet risus vel diam dictum convallis. Integer et nulla venenatis, malesuada metus sed, vestibulum justo. Praesent faucibus justo eu mi varius, a iaculis sapien elementum. Suspendisse ut porttitor orci. Nam vitae tincidunt sem. Sed eget elementum velit. Ut sit amet rhoncus leo. Donec lobortis dictum risus, et rhoncus dui posuere sed. Maecenas id fringilla lectus. Nullam vitae leo auctor, luctus mi a, tempor elit. Cras porttitor at velit ac pharetra. Sed lacinia sollicitudin pharetra. Nullam fringilla libero in libero viverra commodo. Fusce eget porta magna. Nulla porttitor, urna eu posuere cursus, ligula augue facilisis augue, id aliquet felis dolor id nunc. Phasellus quis ultricies libero, ac mollis nibh. In interdum commodo sollicitudin.
    		        </p>
    		    </div>
    		    
    		    <div class="forty"><img class="shadow" src="<?php echo get_template_directory_uri(); ?>/images/placeholder.png"/></div>
    		</div>
    		
    		<div class="row">
    		    <div class="third">
    		        <h2>Section One</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Two</h2>
    		        <p>
    		        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		    <div class="third">
    		        <h2>Section Three</h2>
    		        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus viverra lorem eu lacus efficitur, vel auctor felis maximus. Donec sed auctor ante. Suspendisse pulvinar malesuada mauris vel dignissim. Sed porta magna sit amet felis cursus tristique. Aliquam erat volutpat. Cras tincidunt vulputate erat, non pharetra justo tempor sed. Suspendisse consequat aliquet est sed maximus. Fusce vitae posuere urna.</p>
    		    </div>
    		</div>
	</div>
</div>


<!--Close All Div-->
</div>


<?php get_footer(); ?>