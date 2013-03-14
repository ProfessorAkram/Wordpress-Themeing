<!-- ================================== WP QUERY LOOP ====================================== 	
	
	The WP LOOP displays all posts in your site, however there are times when you want to redefine the number of posts that are displayed on a given page. One example is if you want to display one or two posts from a featured category on the homepage.  
	
	In order to create a loop that displays posts based on certian parameters you need to use the 
	<?php query_posts('');?> method. Within the parentheses you define what the parameters for the 
	query is to be. 
	
	To read more on query_posts visit: http://codex.wordpress.org/Function_Reference/query_posts
	More on the pararmeters avaible for your query visit:    
	http://codex.wordpress.org/Class_Reference/WP_Query#Parameters
	
-->	

<!-- =============================== ESSENTIAL OF A QUERRY POST LOOP ================================== -->	
				<?php query_posts('PARAMATERS');?>
				<!--Here we define what our query is to search for -->
					<?php while(have_posts()):the_post();?> 
				<!-- Then while there are still posts..-->
				
					<!-- your post set up goes here -->
				
           		<?php endwhile; ?>
				<?php wp_reset_query(); ?>
				
				
				

<!-- ================================== Post with Category ID ====================================== -->	
				<h2>Posts from Category Id</h2>
				<div id="Loop3"><!-- id for styling -->				
<!-- WP Loop -->
				<?php query_posts('cat=3');?>
					<?php while(have_posts()):the_post();?> 
	
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
				<?php wp_reset_query(); ?>
	
	
				<br class="clear">

<!-- =========================== NUMBER OF POSTS FROM CATEGORY NAME ============================= -->				
				<h2>NUMBER OF POSTS FROM CATEGORY NAME</h2>
				<div id="thumLoop">	<!-- id for styling -->							
<!-- WP Loop -->
				<?php query_posts('category_name=featured&posts_per_page=1 ');?>
					<?php while(have_posts()):the_post();?> 
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
				<?php wp_reset_query(); ?>
