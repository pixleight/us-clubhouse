<?php 
/**
 * Plugin Name: Envato Flex Slider
 * Description: A widget that displays the image slideshow
 * Version: 0.1
 * Author: Chris Violette
 * Author URI: 
 */

add_action( 'widgets_init', 'envato_flex_slider' );


function envato_flex_slider() {
	register_widget( 'Envato_Flex_Slider' );
}

class Envato_Flex_Slider extends WP_Widget {

	function Envato_Flex_Slider() {
		$widget_ops = array( 
			'classname' => 'envatoflexslider', 
			'description' => __('A widget that displays related locations, providers, & services. ', 'bonestheme') 
		);
		
		$control_ops = array( 
			//'width' => 300, 
			//'height' => 350, 
			'id_base' => 'envato-flex-slider' 
		);
		
		$this->WP_Widget( 'envato-flex-slider', __('Envato Flex Slider', 'bonestheme'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
			
		echo $before_widget;

		echo do_shortcode( '[ef_slider]' );
        
        echo $after_widget;
	    
	
	}

	//Update the widget 
	 
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;

		return $instance;
	}

	
	function form( $instance ) {

		
		$instance = wp_parse_args( (array) $instance, $defaults ); ?>

		<p>
			<em>No options to configure</em>
		</p>

	<?php }
} ?>