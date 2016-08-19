<?php get_header(); ?>
<div  class="container center">
	<h1 class="blog title">blogs</h1>
	<div class="v-line"></div>
	<div class="blog-container">
		<div class="project-columns">
			<?php if (have_posts() ) : $i=2; while(have_posts() ): the_post(); ?>
			<div class="<?php if($i%2 == 0): echo ' white'; $i=$i+1;else: echo 'gray-block'; $i=$i+1; endif;?>" style="height:<?php echo rand(260, 450); ?>px">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p><em><?php the_time('l, F jS, Y'); ?></em></p>
			</div>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, there are no posts.')?></p>
			<?php endif; ?>
		</div>
	</div>
</div> <!-- container-fluid -->
<div class="v-line"></div>

<?php get_footer(); ?>
