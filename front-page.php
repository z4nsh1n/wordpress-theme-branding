<?php get_header(); ?>

<div id="branding">
	<?php 
		$landing_img = get_theme_mod('bootstrap_landing_image_setting');
		if ($landing_img == '') {
			$landing_img = 'http://static-to-wordpress.dev/wp-content/uploads/2016/08/branding-pic.png';
		}
	?>
	<img class="img-responsive landing" src="<?php echo $landing_img ?>"  alt="">
	<img src="<?php bloginfo('stylesheet_directory')?>/img/arrow-down.png" alt="">
	<div class="h-line"></div>
	<span class="center discovery"><a href="#">Discovery</a></span>
</div>
<div id="history">
	<div class="v-line"></div>
	<h2 class="center">our history</h2>
	<h3 class="center">We are a creative performance agency</h3>
	<img class="img-responsive center" src="<?php bloginfo('stylesheet_directory')?>/img/history-pic.png" alt="">
	<div class="container-fluid">
		<p>
			Sit repudiandae voluptatibus aut culpa perspiciatis, veritatis in, repudiandae minima reprehenderit error ut at? Ea quisquam eaque unde architecto dolorem sapiente iusto! Ducimus consectetur placeat ad inventore corporis delectus distinctio. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
		</p>
	</div>
	<div class="center hist-buttons">
		<div class="btn btn-default"><a href="#">contact</a></div>
		<div class="btn btn-primary"><a href="#">our work</a></div>
	</div>
</div> <!--history -->
<div id="services">
	<div class="v-line"></div>
	<h2 class="center">our services</h2>
	<h3 class="center">We create the best service</h3>
	<div class="container-fluid">
		<div class="row">
			<?php dynamic_sidebar('services'); ?>
			<div class="col-md-4">
				<div class="service">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/service-design.png" alt="">
					<h4>branding design </h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/service-painting.png" alt="">
					<h4>digital painting</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/service-development.png" alt="">
					<h4>development</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/service-social.png" alt="">
					<h4>social media</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/service-marketing.png" alt="">
					<h4>marketing online</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="service">
					<img src="<?php bloginfo('stylesheet_directory')?>/img/service-wordpress.png" alt="">
					<h4>seller wordpress</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore...</p>
				</div>
			</div>
		</div>  <!--row -->
	</div> <!-- container -->
	<div class="v-line"></div>
</div> <!-- services -->
<div id="projects" class="container-fluid">
	<div class="v-line"></div>
	<h2>latest projects</h2>
	<div class="project-buttons container-fluid">
		<div class="center-block row">
			<!--
			<div class="col-xs-12 col-md-2 col-md-offset-1 btn btn-default"><a href="#">all</a></div>
			<div class="col-xs-12 col-md-2 btn btn-default"><a href="#">brochure</a></div>
			<div class="col-xs-12 col-md-2 btn btn-default"><a href="#">web</a></div>
			<div class="col-xs-12 col-md-2 btn btn-default"><a href="#">photography</a></div>
			<div class="col-xs-12 col-md-2 btn btn-default"><a href="#">illustrator</a></div> 
			-->
		</div>
		<div class="col-xs-12 col-md-2 btn btn-default col-md-offset-1"><a href="#">all</a></div>
		<div class="col-xs-12 col-md-2 btn btn-default "><a href="#">brochure</a></div>
		<div class="col-xs-12 col-md-2 btn btn-default "><a href="#">web</a></div>
		<div class="col-xs-12 col-md-2 btn btn-default "><a href="#">photography</a></div>
		<div class="col-xs-12 col-md-2 btn btn-default "><a href="#">illustrator</a></div> 
	</div>
	<div class="project-columns">
		<!-- TODO: Load images dynamic from project pages -->
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/candle.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/cups.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/landscape.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/book.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/pencil.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/box.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/stamp.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/cup.png" alt="">
		<img class="img-responsive" src="<?php bloginfo('stylesheet_directory')?>/img/project/bag.png" alt="">
	</div>
	<span><a href="#">view more</a></span>
	<div class="h-line view-more"></div>
</div>
<div id="pf-blocks" class="container-fluid">
	<div class="row">
		<div class=" col-xs-12 col-md-2 col-md-offset-1 pf_block">
			<div class="center v-center">
				<div class="nr">26</div>
				<span>client worked with</span>
			</div>
		</div>
		<div class="col-xs-12 col-md-2 pf_block">
			<div class="center v-center">
				<div class="nr">48</div>
				<span>portfolio worked</span>
			</div>
		</div>
		<div class="col-xs-12 col-md-2 pf_block">
			<div class="center v-center">
				<div class="nr">16</div>
				<span>awards won</span>
			</div>
		</div>
		<div class="col-xs-12 col-md-2 pf_block">
			<div class="center v-center">
				<div class="nr">97</div>
				<span>cups of coffee</span>
			</div>
		</div>
		<div class="col-xs-12 col-md-2 pf_block">
			<div class="center v-center">
				<div class="nr">73</div>
				<span>client worked with</span>
			</div>
		</div>
	</div>
</div>
<div id="team">
	<div class="v-line"></div>
	<h2 class="center title">our team</h2>
	<div class="container-fluid ">
		<div class="member col-sm-12 col-md-4">
			<div class="center">
				<div class="vertical-text">
					<span >instagram</span>
					<div class="v-line"></div>
					<span>twitter</span>
					<div class="v-line"></div>
					<span>facebook</span>
					<div class="v-line"></div>
				</div>
				<img  src="<?php bloginfo('stylesheet_directory')?>/img/team/emily.png" alt="">
				<div class="mem_info">
					<div class="v-line"></div>
					<p>emily sanda</p>
					<p><i>senior designer</i></p>
				</div>
			</div>
		</div>
		<div class="member col-sm-12 col-md-4">
			<div class="center">
				<div class="vertical-text">
					<span>instagram</span>
					<div class="v-line"></div>
					<span>twitter</span>
					<div class="v-line"></div>
					<span>facebook</span>
					<div class="v-line"></div>
				</div>
				<img src="<?php bloginfo('stylesheet_directory')?>/img/team/nanoevil.png" alt="">
				<div class="mem_info">
					<div class="v-line"></div>
					<p>nanoevel</p>
					<p><i>co-founder</i></p>
				</div>
			</div>
		</div>
		<div class="member col-sm-12 col-md-4">
			<div class="center">
				<div class="vertical-text">
					<span >instagram</span>
					<div class="v-line"></div>
					<span>twitter</span>
					<div class="v-line"></div>
					<span>facebook</span>
					<div class="v-line"></div>
				</div>
				<img src="<?php bloginfo('stylesheet_directory')?>/img/team/susan.png" alt="">
				<div class="mem_info">
					<div class="v-line"></div>
					<p>susan tran</p>
					<p><i>marketing online</i></p>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="pricing">
	<!-- TODO: recommend corner, make settings in admin section -->
	<div class="v-line"></div>
	<h2 class="center title">our pricing</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 col-lg-offset-2 col-md-4 col-sm-12">
				<div class="price-box col-xs-12">
					<h3>basic</h3>
					<div class="h-line"></div>
					<div class="price">
						<span>$10</span>/monthly
					</div>
					<ul>
						<li>full Access</li>
						<li>unlimited bandwidth</li>
						<li>email accounts</li>
						<li>2 free forks every month</li>
					</ul>
					<div class="btn btn-default">sign up</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="price-box col-xs-12">
					<h3>advanced</h3>
					<div class="h-line"></div>
					<div class="price">
						<span>$20</span>/monthly
					</div>
					<ul>
						<li>full Access</li>
						<li>unlimited bandwidth</li>
						<li>email accounts</li>
						<li>2 free forks every month</li>
					</ul>
					<div class="btn btn-default">sign up</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-12">
				<div class="price-box col-xs-12">
					<h3>pro</h3>
					<div class="h-line"></div>
					<div class="price">
						<span>$30</span>/monthly
					</div>
					<ul>
						<li>full Access</li>
						<li>unlimited bandwidth</li>
						<li>email accounts</li>
						<li>2 free forks every month</li>
					</ul>
					<div class="btn btn-default">sign up</div>
				</div>
			</div>
		</div> <!-- row -->
	</div> <!-- container -->
</div>
<div id="blog">
	<?php
		$args = array('posts_per_page' => 2, 'offset' => 0);
		$blogs = get_posts( $args  );
	?>
	<div class="v-line"></div>
	<h2 class="title center">our blog</h2>
	<h3>we provide interactive digital experiences to clients</h3>
	<div class="container-fluid">
		<div class="row center">
			<?php foreach ($blogs as $blog): setup_postdata($blog); ?>
			<?php $img_url = wp_get_attachment_image_src( get_post_thumbnail_id( $blog->ID  ) )[0]; ?>

			<div class="blog col-md-4 col-md-offset-1 col-sm-10 col-sm-offset-2">
				<div class="col-xs-12">
					<img class="img-responsive" src="<?php echo $img_url; ?>" alt="">
					<div class="blog-info">
						<h4>
							<?php echo  $blog->post_title; ?>
						</h4>
						<div>
							by <?php echo the_author_meta( 'user_nicename' , $blog->post->author );?> | <?php the_time('jS F, Y'); ?>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; 
		   wp_reset_postdata();	?>
		</div> <!-- row -->
		<div class="v-line"></div>
		<span class="center view-blog"><a href="<?php bloginfo('url')?>/blog/">view blog</a></span>
		<div class="h-line"></div>
	</div> <!-- container-fluid -->
</div>
<div id="brands">
	<!-- TODO: Add brand pics from admin area -->
	<div class="v-line"></div>
	<h2 class="title center">our brand</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2 col-md-offset-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/kasso.png" alt=""></div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/sixbase.png" alt=""></div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/newwave.png" alt=""></div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/flytech.png" alt=""></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/enginzyme.png" alt=""></div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/tulipart.png" alt=""></div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/sweet-revolver.png" alt=""></div>
			</div>
			<div class="col-md-2 col-sm-12">
				<div class="brand"><img src="<?php bloginfo("stylesheet_directory")?>/img/brands/curve.png" alt=""></div>
			</div>
		</div> <!-- row -->
	</div> <!-- container-fluid -->
</div>
<div id="contacts">
	<div class="v-line"></div>
	<h2 class="title center">get in touch</h2>
	<div class="container-fluid">
		<div class="row">
			<div class="contact col-md-4">
				<img class="icon" src="<?php bloginfo('stylesheet_directory')?>/img/contact/phone.png" alt="">
				<span>+84.963.868.345</span>
				<input type="text" placeholder="* Your name">
			</div>
			<div class="contact col-md-4">
				<img class="icon" src="<?php bloginfo('stylesheet_directory')?>/img/contact/address.png" alt="">
				<span>12345 nestolab street name - coral springs - florida - usa</span>
				<input type="text" placeholder="* Your mail">
			</div>
			<div class="contact col-md-4">
				<img class="icon" src="<?php bloginfo('stylesheet_directory')?>/img/contact/email.png" alt="">
				<span>helladmin@trend.com</span>
				<input type="text" placeholder="* Your subject">
			</div>
			<div class="col-md-12">
				<textarea id="mail-text" name="" cols="30" rows="10"></textarea>
				<div class="btn btn-default"><a href="#">send</a></div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
