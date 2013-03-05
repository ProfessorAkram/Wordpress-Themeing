<!-- ================================== ADDING LOOPS ====================================== 	
	
	The loop can be placed on any theme php page where you want a post to display.
	By default the loop will display the contents (depending on what you ask for) of each post. 
	The main blog loop is usually placed inside a theme file named loop-index.php
	
-->	

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
							<nav class="post-1">
							<?php posts_nav_link(); ?>
							</nav>
						
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
					<nav class="post-2">
										<div class="Lfloat">
							<?php previous_posts_link('Newer Stories');?>
						</div>
						<div class="Rfloat">
							<?php next_posts_link('Older Stories');?>
						</div>
					</nav>
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
				
				
				<?php endwhile; else:?>
					<?php _e('Sorry, no posts at this time');?>
				<?php endif; ?>				

<!-- End WP Loop -->			
			</div><!-- End div #thumLoop-->

