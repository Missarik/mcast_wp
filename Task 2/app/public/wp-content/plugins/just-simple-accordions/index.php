<?php 

/*

Plugin Name: just Simple Accordions
Author: Raihanul
Author uri: http://facebook.com/raihanislam.cse
Description: easy way to create accordion on your website you will love this plugin
Version: 1.0 

*/



class sa_class{
	
	public function __construct(){

		add_action('init',array($this,'main_accordian_area'));
		add_action('wp_enqueue_scripts',array($this,'accordian_script_area'));

		add_shortcode('simple-accordian',array($this,'accordian_shortcode_area'));

	}
	
	public function main_accordian_area(){

		load_plugin_textdomain('accordion_textdomain', false, dirname( __FILE__).'/lang');

		register_post_type('accordian',array(
			'labels'=>array(
				'name'=>'Accordions'
			),
			'public'=>true,
			'supports'=>array('title','editor','thumbnail'),
			'menu_icon'=>'dashicons-filter'
		));

	}
	
	public function accordian_script_area(){

		wp_enqueue_style('jquerycss',PLUGINS_URL('css/main.css',__FILE__));

		wp_enqueue_script( 'jquery-ui-core',array('jquery') );
		wp_enqueue_script('jquery-ui-accordion',array('jquery'));
		wp_enqueue_script('jqueryjsss',PLUGINS_URL('js/custom.js',__FILE__),array('jquery'));
	}
	
	
	function accordian_shortcode_area($attr,$content){
		ob_start();
		extract(shortcode_atts(array(
				'title'=>'accordion'
			),$attr));
			?>
			

			<div class="accorduan_main_area"> 
				<div class="accordion-title"> 
					<h2><?php echo $title; ?></h2>
				</div>
				<div class="accordion"> 
				<?php $accordian = new wp_Query(array(
					'post_type'=>'accordian',
					'posts_per_page'=>8
				)); ?>
				<?php while( $accordian->have_posts() ) : $accordian->the_post(); ?>
						<h3 class="accordian_area"><?php the_title(); ?></h3>
						<div><?php the_content(); ?></div>
				<?php endwhile; ?>
				</div>
			</div>
			<?php
			return ob_get_clean();
			}
}

new sa_class();