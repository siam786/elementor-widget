<?php 


class Clark_Common_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'clark-widget';
	}

	public function get_title() {
		return esc_html__( 'Clark Widget Name', 'clark-common' );
	}

	public function get_icon() {
		return 'eicon-code';
	}

	public function get_custom_help_url() {
		return 'https://go.elementor.com/widget-name';
	}

	public function get_categories() {
		return [ 'basic' ];
	}

	public function get_keywords() {
		return [ 'clark', 'slider' ];
	}

}