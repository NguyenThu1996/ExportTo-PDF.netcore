<?php

class Theme_Shortcode_Breadcrumb extends Theme_Shortcode {

	protected $shortcode = 'breadcrumb';
	protected $shortcode_ui = array(
		'label' => 'Breadcrumb Shortcode',
		'listItemImage' => 'dashicons-editor-plugins',
		'attrs' => array(
			array(
				'attr'	 => 'items',
				'label'	=> 'Items',
				'type'	 => 'text',
			),
		)
	);

	public function __construct() {
		parent::__construct();
	}

	public function shortcode( $atts, $content, $tag ) {
		return Theme::get_template_part( 'partials/shortcodes/breadcrumb', $atts );
	}
}
