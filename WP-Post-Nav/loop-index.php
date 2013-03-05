<!-- ================================== ADDING POT LOOP NAVIGATION ====================================== 	
	
	Because a site could have hundreds of posts, it is typically to divid the posts up into differnt pages.
	You can do this by setting your blog post count in the Settings > Reading ... tab of your dashboard.
	Once that is set you will only see the number of posts you indicated on the blog page. In order 
	to see the rest of your posts you need to add navigation to go to the next and previous posts. 
	
	This is done by adding the <?php posts_nav_link(); ?> method or <?php post_paginate();?>
	Note that if you use the <?php post_paginate();?> you must first add the required functions to the function.php file. 
	
	To read more on loops visit: http://codex.wordpress.org/
	
-->	


<!-- ================================== ESSENTIAL PLACING OF POST LINK ====================================== -->	
				<?php if (have_posts()):while(have_posts()):the_post();?> 
				<!-- checks if there are posts, if so, while there are still posts..-->
				
					<!-- your post set up goes here -->
				
           		<?php endwhile; ?>
           		<!-- end the while -->
           		
           		<?php posts_nav_link(); ?>
           		<!-- basic previous and next link, or use -->
           		 
           		 <?php post_paginate();?>
           		<!-- paginated links -->
           		
           		<?else:?>
           		<!-- other wise if there are no posts to begin with -->
					<?php _e('Sorry, no posts at this time');?>
					<!-- echos (prints) sorry message to screen -->
				<?php endif; ?>				
				<!-- ends the if for the loop -->
				
				
				

<!-- ================================== BASIC LOOP EXAMPLE ====================================== -->	
				<h2>Basic Wordpress Loop</h2>

				<div id="bLoop"> <!-- id for styling -->				
<!-- WP Loop -->
					<?php if (have_posts()):while(have_posts()):the_post();?>
						<article>
							<h3 class="title">
								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							
							<div class="info">
								<span class="date">
								<i>Date:&nbsp;</i>
								<?php the_time('M,d');?>
								</span>
								
								<span class="comment">
								<i>Comments:&nbsp;</i>
								<?php comments_number('0','1','%');?>
								</span>
								
								<span class="author">
								<i>Author:&nbsp;</i>
								<?php the_author(); ?>
								</span>
							</div>
							
							<div class="excerpt">
								<?php the_excerpt();?>
							</div>
						</article>
																			
           			<?php endwhile; ?>
<!-- ================================== BASIC POST LOOP NAV  EXAMPLE ====================================== -->           			
           				<nav class="post-1">
							<?php posts_nav_link(); ?>
						</nav>
<!-- End Post Loop Nav -->       
   					
           			<?php else:?>
						<?php _e('Sorry, no posts at this time');?>
					<?php endif; ?>

<!-- End WP Loop -->			
			</div> <!-- End div #bLoop-->	

<!-- ================================== LOOP WITH THUMBNAILS ====================================== -->				
				<h2>Wordpress Loop with Thumbnail</h2>
				<div id="thumLoop">	<!-- id for styling -->							
<!-- WP Loop -->
				<?php if (have_posts()):while(have_posts()):the_post();?>
					<article>
						<h3 class="title">
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
							</a>
						</h3>
						
						<div class="info">
							<span class="date">
								<?php the_time('F, d, Y'); ?>
							</span>
							
							<span class="comments">
								<?php comments_number('no comments', 
								'1 comment', '% commnets');?>
							</span>
						</div>
						
						
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
						
						<?php the_excerpt();?>
						
					
					</article>				
				
				<?php endwhile;?>
<!-- ================================== POST LOOP NAV WITH CUSTOM TEXT ====================================== -->					
					<nav class="post-2">
						<div class="Lfloat">
							<?php previous_posts_link('Newer Stories');?>
						</div>
						<div class="Rfloat">
							<?php next_posts_link('Older Stories');?>
						</div>
					</nav>
					
<!-- End Post Loop Nav --> 					
				<?php else:?>
					<?php _e('Sorry, no posts at this time');?>
				<?php endif; ?>							

<!-- End WP Loop -->			
			</div><!-- End div #thumLoop-->

<!-- ================================== ANOTHER LOOP EXAMPLE ====================================== -->

				<h2>Another example of posts</h2>
				<div id="Loop3"><!-- id for styling -->				
<!-- WP Loop -->
				<?php if (have_posts()):while(have_posts()):the_post();?>
					<article>
						<h3 class="title">
							<a href="<?php the_permalink();?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<figure>
							<?php the_post_thumbnail(); ?>
						</figure>
						
						<div class="content">
							<div class="info">
								<span class="date">
									<?php the_time('F, d, Y'); ?>
								</span>
							
								<span class="comments">
									<?php comments_number('no comments','1 comment', '% commnets');?>
								</span>
							</div>
							
							<div>
							<?php the_excerpt();?>
							</div>
						</div>
						
					
					</article>
				
				
				<?php endwhile; ?>
<!-- ================================== PAGINATED POST LOOP NAV ====================================== -->
					<nav id="posts-3">
						<?php post_paginate();?>
					</nav>	
<!-- END PAGINATED POST LOOP NAV -->
				
				<?php else:?>
					<?php _e('Sorry, no posts at this time');?>
				<?php endif; ?>				

<!-- End WP Loop -->			
			</div><!-- End div #thumLoop-->

