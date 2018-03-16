<?php
/**
 * Understrap Custom Theme Customizer
 *
 * @package understrap
 */


/*
 * You don't need to use a class but it organises things well
 */
class Custom_Theme_Customizer {
	/**
	 * Twenty_Twelve_Child_Customizer constructor.
	 *
	 * @access public
	 * @since  1.0
	 * @return void
	 */
	public function __construct() {
		add_action( 'customize_register', array( $this, 'register_customize_sections' ) );
	}

	/**
	 * Add all sections and panels to the Customizer
	 *
	 * @param WP_Customize_Manager $wp_customize
	 *
	 * @access public
	 * @since  1.0
	 * @return void
	 */
	public function register_customize_sections( $wp_customize ) {

		/*
		 * Add Sections
		 */

		// New section for "Home Page".
		$wp_customize->add_section( 'home_options', array(
			'title'    => __( 'Home Options', 'understrap' ),
			'priority' => 101
		) );

		$this->home_options_section( $wp_customize );

		// New section for "Contact".
		$wp_customize->add_section( 'contact_options', array(
			'title'    => __( 'Contact Options', 'understrap' ),
			'priority' => 101
		) );

		$this->contact_options_section( $wp_customize );
	}

	/**
	 * Section: Home Options
	 *
	 * @param WP_Customize_Manager $wp_customize
	 *
	 * @access private
	 * @since  1.0
	 * @return void
	 */
	private function home_options_section( $wp_customize ) {

	  /* Auto add featured image */
		$wp_customize->add_setting( 'banner_image', array(
			'default'           => false,
			// 'sanitize_callback' => array( $this, 'sanitize_image' )
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image', array(
			'label'       => esc_html__( 'Upload a banner image', 'understrap' ),
			// 'description' => esc_html__( 'Check this on to automatically insert the featured image before the post content.', 'understrap' ),
			'section'     => 'home_options',
			'settings'    => 'banner_image',
			'priority'    => 10
		) ) );


	  /* Auto add organistion logo 1 */
		$wp_customize->add_setting( 'organisation_logo_1', array(
			'default'           => false,
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'organisation_logo_1', array(
			'label'       => esc_html__( 'Upload an organisation logo', 'understrap' ),
			// 'description' => esc_html__( 'Check this on to automatically insert the featured image before the post content.', 'understrap' ),
			'section'     => 'home_options',
			'settings'    => 'organisation_logo_1',
			'priority'    => 11
		) ) );

		$wp_customize->add_setting( 'organisation_link_1', array() );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'organisation_link_1', array(
			'label'       => esc_html__( 'Set the organisation url', 'understrap' ),
			'section'     => 'home_options',
			'type'				=> 'url',
			'priority'    => 11
		) ) );


	  /* Auto add organistion logo 2 */
		$wp_customize->add_setting( 'organisation_logo_2', array(
			'default'           => false,
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'organisation_logo_2', array(
			'label'       => esc_html__( 'Upload an organisation logo', 'understrap' ),
			// 'description' => esc_html__( 'Check this on to automatically insert the featured image before the post content.', 'understrap' ),
			'section'     => 'home_options',
			'settings'    => 'organisation_logo_2',
			'priority'    => 11
		) ) );

		$wp_customize->add_setting( 'organisation_link_2', array() );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'organisation_link_2', array(
			'label'       => esc_html__( 'Set the organisation url', 'understrap' ),
			'section'     => 'home_options',
			'type'				=> 'url',
			'priority'    => 11
		) ) );


	  /* Auto add organistion logo 3 */
		$wp_customize->add_setting( 'organisation_logo_3', array(
			'default'           => false,
		) );

		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'organisation_logo_3', array(
			'label'       => esc_html__( 'Upload an organisation logo', 'understrap' ),
			// 'description' => esc_html__( 'Check this on to automatically insert the featured image before the post content.', 'understrap' ),
			'section'     => 'home_options',
			'settings'    => 'organisation_logo_3',
			'priority'    => 11
		) ) );

		$wp_customize->add_setting( 'organisation_link_3', array() );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'organisation_link_3', array(
			'label'       => esc_html__( 'Set the organisation url', 'understrap' ),
			'section'     => 'home_options',
			'type'				=> 'url',
			'priority'    => 11
		) ) );
	}


	/**
	 * Section: Contact Options
	 *
	 * @param WP_Customize_Manager $wp_customize
	 *
	 * @access private
	 * @since  1.0
	 * @return void
	 */
	private function contact_options_section( $wp_customize ) {

	  /* Add contact email address */
		$wp_customize->add_setting( 'email', array() );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email', array(
			'label'       => 'Email Address',
			'section'     => 'contact_options',
			'type'				=> 'email',
			'priority'    => 11
		) ) );

		/* Add Facebook url */
		$wp_customize->add_setting( 'facebook', array() );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
			'label'       => 'Facebook',
			'section'     => 'contact_options',
			'type'				=> 'facebook',
			'priority'    => 11
		) ) );

		/* Add Instagram handle */
		$wp_customize->add_setting( 'instagram', array() );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
			'label'       => 'Instagram',
			'section'     => 'contact_options',
			'type'				=> 'instagram',
			'priority'    => 11
		) ) );

		/* Add Twitter handle */
		$wp_customize->add_setting( 'twitter', array() );

		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
			'label'       => 'Twitter',
			'section'     => 'contact_options',
			'type'				=> 'twitter',
			'priority'    => 11
		) ) );
	}


	/**
	 * Sanitize Checkbox
	 * 
	 * Accepts only "true" or "false" as possible values.
	 *
	 * @param $input
	 *
	 * @access public
	 * @since  1.0
	 * @return bool
	 */
	public function sanitize_checkbox( $input ) {
		return ( $input === true ) ? true : false;
	}
}