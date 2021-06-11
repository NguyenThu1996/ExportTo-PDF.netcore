<?php

class Theme_Shortcode_Blow_Course_Booking extends Theme_Shortcode {

	protected $shortcode = 'blow_course_booking';
	protected $shortcode_ui = array(
		'label' => 'Blow Course Booking Shortcode',
		'listItemImage' => 'dashicons-editor-plugins',
		'attrs' => array(
			array(
				'attr'	 => 'course_id',
				'label'	=> 'Course Id',
				'type'	 => 'text',
			),
		)
	);

	public function __construct() {
		parent::__construct();
	}

	public function shortcode( $atts, $content, $tag ) {
		return Theme::get_template_part( 'partials/shortcodes/blow-course-booking', $atts );
	}
}
