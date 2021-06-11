<?php

class Theme_Shortcode_Page_Title extends Theme_Shortcode {

	protected $shortcode = 'page_title';
	protected $shortcode_ui = array(
		'label' => 'Page Title',
		'listItemImage' => 'dashicons-editor-plugins',
		'attrs' => array(
			array(
				'attr'	 => 'background_image',
				'label'	=> 'Background Image',
				'type'	 => 'text',
            ),
            array(
				'attr'	 => 'category',
				'label'	=> 'Category',
				'type'	 => 'text',
            ),
            array(
				'attr'	 => 'title',
				'label'	=> 'Title',
				'type'	 => 'text',
			)
		)
	);

	public function __construct() {
		parent::__construct();
	}

	public function shortcode( $atts, $content, $tag ) {
		return Theme::get_template_part( 'partials/shortcodes/page-title', $atts );
	}
}
