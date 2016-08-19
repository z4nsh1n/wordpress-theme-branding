<?php 
require_once('wp_bootstrap_navwalker.php');
//register scripts
function wpbootstrap_scripts_width_jquery()
{
	wp_register_script('custom-script', get_template_directory_uri() . '/js/bootstrap.js', array('jquery'));
	wp_enqueue_script('custom-script');
}

add_action('wp_enqueue_scripts',  'wpbootstrap_scripts_width_jquery');

//register widgets
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
	register_sidebar(array(
		'name' => 'Services',
		'id' => 'services',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' =>''
	));
	register_sidebar(array(
		'id' => 'sidebar-2',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>'
	));
}

//register menus
if ( !function_exists('wpt_setup') ) {
	function wpt_setup(){
		register_nav_menu('primary', __('Primary navigation', 'wptuts'));
	}
	add_theme_support('custom-header');
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wpt_setup');

class ServiceWidget extends WP_Widget{
	
	public function __construct(){
		parent::__construct('service_widget', 'Service_Widget', array(
			'description' => __('A widget to be placed in the Service widget area')
		));
		add_action('admin_enqueue_scripts', array($this, 'upload_scripts'));
	}

	public function upload_scripts(){
		wp_enqueue_script('media-upload');
		wp_enqueue_media();
		wp_enqueue_script('thickbox');
		wp_enqueue_script('upload_media_widget',  get_template_directory_uri() . '/js/upload-media.js', array('jquery'));
		wp_enqueue_style('thickbox');
	}

	public function widget($args, $instance){
		extract($args);
		$title = apply_filters('widget_title', $instance['title']);
		$service_text = $instance['service_text'];
		$image_url = $instance['image_url'];

		echo $before_widget;
		?>
						<div class="col-md-4">
							<div class="service">
								<!--<img src="<?php bloginfo('stylesheet_directory')?>/img/service-design.png" alt=""> -->
								<img src="<?php echo $image_url?>" alt="">
								<h4><?php echo $title; ?></h4>
								<p>
									<?php echo $service_text; ?> 
								</p>
							</div>
						</div>
		<?php
		echo $after_widget;
	}

	public function form($instance){
			$title = $instance['title'];
			$text = $instance['service_text'];
			$image_url = $instance['image_url'];
?>
	<p>
	<input class="upload_image_button button button-primary" type="button" value="Upload Image" />
	<input class='widefat' id='<?php echo $this->get_field_id('image_url');?>' name='<?php echo $this->get_field_name('image_url')?>'
		value='<?php echo esc_attr($image_url);?>'>
	<br>
	<img class="icon_preview" style="margin: 15px 0px;" src="<?php echo $image_url?>" alt="">
	<br>

	<label for="<?php echo $this->get_field_name('title')?>"><?php _e('Title: ');?></label>
	<input class='widefat' id='<?php echo $this->get_field_id('title');?>' name='<?php echo $this->get_field_name('title')?>' 
		type="text" value='<?php echo esc_attr($title);?>'>

	<label for="<?php echo $this->get_field_name('service_text')?>"><?php _e('Text: ');?></label>
	<textarea class="widefat" id="<?php echo $this->get_field_id('service_text'); ?>" name="<?php echo $this->get_field_name('service_text'); ?>" type="text">
		<?php echo esc_attr($text); ?>
	</textarea>
	</p>
	<?php
	}

	public function update($new_instance, $old_instance){
		$instance = array();
		$instance['title'] = ( ! empty($new_instance['title']) ) ? strip_tags($new_instance['title']) : '';
		$instance['image_url'] = ( ! empty($new_instance['image_url']) ) ? strip_tags($new_instance['image_url']) : '';
		$instance['service_text'] = ( ! empty($new_instance['service_text']) ) ? strip_tags($new_instance['service_text']) : '';
		return $instance;
	}
}
add_action('widgets_init', function(){
	register_widget('ServiceWidget');
})

?>
