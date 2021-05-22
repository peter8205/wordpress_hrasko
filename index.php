<?php get_header()?>

			<div class="post-list">
				<?php if(have_posts() ) : ?>
                	<?php while( have_posts() ) : the_post() ?>
                    
						<article <?php post_class() ?>>
							<h1 class="post-title">9:00 31. 1. 2021</h1>
								<?php echo the_content() ?>
								<?php the_post_thumbnail() ?>
						</article>

                	<?php endwhile ?>
           		<?php else : ?>

            	<?php endif?>
				
			</div>

<?php get_footer()?>