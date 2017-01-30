	<?php get_header(); ?>
<body name="top">
<div class="all dark">
	

<?php while(has_sub_field("main_content")): ?>
<?php if(get_row_layout() == "video_background_cover"):?>
 		
 		<div class="full-panel vid-panel" style="" name="<?php the_sub_field("section_title"); ?>">
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
		
		<?php elseif(get_row_layout() == "full_page"):?>
				
		
				<?php while(has_sub_field("full_page")): ?>
				
				
				<?php if(get_row_layout() == "half_cover"):?>
				
					<div class="half-panel dark parallax" style="background-image:url(<?php the_sub_field("background_image"); ?>);" name="parallax">
			
						<div class="panel-overlay"></div>
						
						<div class="middle">
						    <div class="main-content center-fade">
						        <h1 class="center">General Motors Futurama</h1>
						        <div style="display: none;" class="full break center"><a href="#big-media"><btn><?php the_sub_field("title"); ?></btn></a></div>
					        </div>
					    </div>
						
					</div>
					
								
					<?php elseif(get_row_layout() == "narrow_left_wide_right"):?>
					
						
						<div class="panel">
							    <div class="main-content">
							        
							        <div class="thirty">
							        	
							        	<?php while(has_sub_field("column_one")): ?>
										
										<?php if(get_row_layout() == "image"):?>
									    	<img class="fade-in fromBottom pop-image shadow" imgurl="<?php the_sub_field("full_image"); ?>" src="<?php the_sub_field("thumb"); ?>"/>
									    	
									    	
									    <?php elseif(get_row_layout() == "video"):?>
									    	
									    	<div class="vid-link fade-in" vidurl="<?php the_sub_field("video_url"); ?>">
												<img class="img-shadow" src="<?php the_sub_field("video_thumb"); ?>">
												<div class="vid-overlay">
													<div class="vid-table">
														<div class="cell"><img src="<?php echo get_template_directory_uri(); ?>/images/play_btn.svg"></div>
													</div>
												</div>				
											</div>
								        	
								        	
								        <?php elseif(get_row_layout() == "audio"):?>
								       	
								       	<div class="round-play-audio fade-in">
									       
									       <div class="audio-info"> <?php the_sub_field("audio_info"); ?> </div>
									       <i class="fa fa-volume-up cap-play-snd play-snd" aria-hidden="true"  audioUrl="<?php the_sub_field("audio_url");?>"></i>
									       <i class="fa fa-volume-up cap-play-snd stop-snd" aria-hidden="true"></i>
									       
									    </div>
									    
									    <?php elseif(get_row_layout() == "caption"):?>
									    	<div class="fade-in img-cap"><?php the_sub_field("caption"); ?></div>
									    	
								        <?php endif; ?>
										<?php endwhile; ?>
							      								    																		       
								    </div>
								    
								    
									<div class="seventy">
										
										
										<?php while(has_sub_field("right_column")): ?>
										
										<?php if(get_row_layout() == "h1"):?>
									    	<h1 class="center"><?php the_sub_field("large_header"); ?></h1>
								        	
								        	
								        <?php elseif(get_row_layout() == "h2"):?>
								       	<h2><?php the_sub_field("h2"); ?></h2>
								       
									    
									    <?php elseif(get_row_layout() == "copy"):?>
									    <?php the_sub_field("copy"); ?>	
									    
									    
									    <?php elseif(get_row_layout() == "big_link"):?>
										<div class="center fade-in"><a href="<?php the_sub_field("link_url"); ?>"><btn class="big-link"><?php the_sub_field("link_title"); ?></btn></a></div>
									    	
								        <?php endif; ?>
										<?php endwhile; ?>
										
										
										
										
																	        																		       
									</div>
							        
							    </div>
						</div>
						
						
					<?php elseif(get_row_layout() == "gallery"):?>
				
						<div class="panel">
						<div class="main-content">
							
								<div class="main-content gallery">
								
									<?php while(has_sub_field("gallery")): ?>
										
										<?php if(get_row_layout() == "gallery_title"):?>
									    	<div class="full"><h2><?php the_sub_field('gallery_title');?></h2></div>
								        	
								        	
								        <?php elseif(get_row_layout() == "gallery_images"):?>
								        
								       	
									      <?php if(get_sub_field('gallery_images')): ?>
									      <?php while(has_sub_field('gallery_images')): ?>
									      	
									      	<div class="gall-img pop-image shadow" imgUrl="<?php the_sub_field('full_image');?>" >
												<img src="<?php the_sub_field('thumbnail');?>"/>
												<div class="info">
													<div class="text"><?php the_sub_field('image_information');?></div>
												</div>
											</div>
									      	
									      	
									      <?php endwhile; ?>
									      <?php endif; ?>
								       
								       									    	
								        <?php endif; ?>
										<?php endwhile; ?>
								</div>
								
							</div>
						</div>
		

													       
			
					<?php endif; ?>
					<?php endwhile; ?>
					
		
		<?php elseif(get_row_layout() == "section_content"):?>
		
		
			<?php while(has_sub_field("section_content")): ?>
					<?php if(get_row_layout() == "h1_header"):?>
				    
			        		
			        	
			        	<?php elseif(get_row_layout() == "narrow_left_wide_right"):?>
						
						
						<div class="full-panel" name="<?php the_sub_field("section_title"); ?>">
							<div class="middle">
								<div class="main-content">
								    
								    
								    <div class="thirty">
									    
									    <?php while(has_sub_field("column_one")): ?>
										
										<?php if(get_row_layout() == "image"):?>
									    	<img class="fade-in fromBottom pop-image shadow" imgurl="<?php the_sub_field("full_image"); ?>" src="<?php the_sub_field("thumb"); ?>"/>
								        	
								        	
								        <?php elseif(get_row_layout() == "audio_link"):?>
								       	
								       	<div class="round-play-audio fade-in">
									       
									       <div class="audio-info"> <?php the_sub_field("audio_title"); ?> </div>
									       <i class="fa fa-volume-up cap-play-snd play-snd" aria-hidden="true"  audioUrl="<?php the_sub_field("audio_url");?>"></i>
									       <i class="fa fa-volume-up cap-play-snd stop-snd" aria-hidden="true"></i>
									       
									    </div>
									    
									    <?php elseif(get_row_layout() == "caption"):?>
									    	<div class="fade-in img-cap"><?php the_sub_field("caption"); ?></div>
									    	
								        <?php endif; ?>
										<?php endwhile; ?>
								       
								    </div>
								    
								    
									<div class="seventy">
										
										<?php while(has_sub_field("right_column")): ?>
										<?php if(get_row_layout() == "h2"):?>
									    
								        		<h2><?php the_sub_field("h2"); ?></h2>
								        	
								        	<?php elseif(get_row_layout() == "copy"):?>
											
												<?php the_sub_field("copy"); ?>
											
											<?php elseif(get_row_layout() == "large_header"):?>
												
												<h1 class="center" style="color:#fff;"><?php the_sub_field("large_header"); ?></h1>
												
											<?php elseif(get_row_layout() == "big_link"):?>
												
												<div class="center fade-in"><a href="<?php the_sub_field("url"); ?>"><btn class="big-link"><?php the_sub_field("link_title"); ?></btn></a></div>
								        
								        <?php endif; ?>
										<?php endwhile; ?>
								       
									</div>
									
									<?php if((get_sub_field('link_title'))): ?>
										<div class="center"><a href="<?php the_sub_field("url"); ?>"><btn class="big-link"><?php the_sub_field("link_title"); ?></btn></a></div>
									<?php endif;?>
									
									
								</div>
								
								
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




    

<!--Close All Div-->
</div>


<?php get_footer(); ?>