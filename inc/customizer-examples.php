<?php
/**
 * Customizer Controls.
 *
 * @package WPshed Customizer Framework
 */

// User access level
$capability = 'edit_theme_options';

// Option type
$type = 'theme_mod'; // option / theme_mod

/* ---------------------------------------------------------------------------------------------------
    Panels
--------------------------------------------------------------------------------------------------- */

// Panel
$options[] = array( 'title'             => __( 'Theme Options', 'emerson' ),
                    'description'       => '',
                    'id'                => 'emerson_theme_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'panel' );


/* ---------------------------------------------------------------------------------------------------
    Sections
--------------------------------------------------------------------------------------------------- */

// Section
$options[] = array( 'title'             => __( 'Test Section', 'emerson' ),
                    'description'       => __( 'Section description', 'emerson' ),
                    'panel'             => 'emerson_theme_options',
                    'id'                => 'emerson_section_id',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

/* ---------------------------------------------------------------------------------------------------
    Controls
--------------------------------------------------------------------------------------------------- */

// Text
$options[] = array( 'title'             => __( 'Text Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_text',
                    'default'           => 'Default value',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Textarea
$options[] = array( 'title'             => __( 'Textarea Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_textarea',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

// Color
$options[] = array( 'title'             => __( 'Color Picker Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_color',
                    'default'           => '#BADA55',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Radio
$options[] = array( 'title'             => __( 'Radio Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_radio',
                    'default'           => 'value2',
                    'option'            => 'radio',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'emerson' ),
                        'value2' => __( 'Choice 2', 'emerson' ),
                        'value3' => __( 'Choice 3', 'emerson' ),
                    ),
                    'type'              => 'control' );

// Checkbox
$options[] = array( 'title'             => __( 'Checkbox Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_checkbox',
                    'default'           => '', // 1 for checked
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Select
$options[] = array( 'title'             => __( 'Select Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_select',
                    'default'           => 'value2',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'emerson' ),
                        'value2' => __( 'Choice 2', 'emerson' ),
                        'value3' => __( 'Choice 3', 'emerson' ),
                    ),
                    'type'              => 'control' );

// Image Upload
$options[] = array( 'title'             => __( 'Image Upload Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_image',
                    'default'           => '',
                    'option'            => 'image',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// File Upload
$options[] = array( 'title'             => __( 'File Upload Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_file',
                    'default'           => '',
                    'option'            => 'file',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// URL
$options[] = array( 'title'             => __( 'URL Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_url',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// Email
$options[] = array( 'title'             => __( 'Email Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_email',
                    'default'           => '',
                    'option'            => 'email',
                    'sanitize_callback' => 'sanitize_email',
                    'type'              => 'control' );

// Password
$options[] = array( 'title'             => __( 'Password Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_password',
                    'default'           => '',
                    'option'            => 'password',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// number
$options[] = array( 'title'             => __( 'number Field (px)', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_number',
                    'default'           => 70,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                        'class' => 'example-class',
                    ),
                    'type'              => 'control' );

// Pages
$options[] = array( 'title'             => __( 'Pages Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_pages',
                    'default'           => 0,
                    'option'            => 'pages',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Categories
$options[] = array( 'title'             => __( 'Categories Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_categories',
                    'default'           => 0,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Tags
$options[] = array( 'title'             => __( 'Tags Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_tags',
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Post Types
$options[] = array( 'title'             => __( 'Post Types Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_post_types',
                    'default'           => '',
                    'option'            => 'post_types',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Posts
$options[] = array( 'title'             => __( 'Posts Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_posts',
                    'default'           => '',
                    'option'            => 'posts',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Users
$options[] = array( 'title'             => __( 'Users Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_users',
                    'default'           => '',
                    'option'            => 'users',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Menus
$options[] = array( 'title'             => __( 'Menus Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_menus',
                    'default'           => '',
                    'option'            => 'menus',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
<?php
/**
 * Customizer Control Examples.
 *
 * @package Emerson
 */

/* ---------------------------------------------------------------------------------------------------
    Examples
--------------------------------------------------------------------------------------------------- */

// Text
$options[] = array( 'title'             => __( 'Text Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_text',
                    'default'           => 'Default value',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Textarea
$options[] = array( 'title'             => __( 'Textarea Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_textarea',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

// Color
$options[] = array( 'title'             => __( 'Color Picker Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_color',
                    'default'           => '#BADA55',
                    'option'            => 'color',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Radio
$options[] = array( 'title'             => __( 'Radio Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_radio',
                    'default'           => 'value2',
                    'option'            => 'radio',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'emerson' ),
                        'value2' => __( 'Choice 2', 'emerson' ),
                        'value3' => __( 'Choice 3', 'emerson' ),
                    ),
                    'type'              => 'control' );

// Checkbox
$options[] = array( 'title'             => __( 'Checkbox Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_checkbox',
                    'default'           => '', // 1 for checked
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Select
$options[] = array( 'title'             => __( 'Select Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_select',
                    'default'           => 'value2',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        'value1' => __( 'Choice 1', 'emerson' ),
                        'value2' => __( 'Choice 2', 'emerson' ),
                        'value3' => __( 'Choice 3', 'emerson' ),
                    ),
                    'type'              => 'control' );

// Image Upload
$options[] = array( 'title'             => __( 'Image Upload Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_image',
                    'default'           => '',
                    'option'            => 'image',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// File Upload
$options[] = array( 'title'             => __( 'File Upload Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_id',
                    'id'                => 'emerson_file',
                    'default'           => '',
                    'option'            => 'file',
                    'sanitize_callback' => '',
                    'type'              => 'control' );


// URL
$options[] = array( 'title'             => __( 'URL Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_2',
                    'id'                => 'emerson_url',
                    'default'           => '',
                    'option'            => 'url',
                    'sanitize_callback' => 'esc_url',
                    'type'              => 'control' );

// Email
$options[] = array( 'title'             => __( 'Email Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_2',
                    'id'                => 'emerson_email',
                    'default'           => '',
                    'option'            => 'email',
                    'sanitize_callback' => 'sanitize_email',
                    'type'              => 'control' );

// Password
$options[] = array( 'title'             => __( 'Password Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_2',
                    'id'                => 'emerson_password',
                    'default'           => '',
                    'option'            => 'password',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// number
$options[] = array( 'title'             => __( 'number Field (px)', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_2',
                    'id'                => 'emerson_number',
                    'default'           => 70,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                        'class' => 'example-class',
                    ),
                    'type'              => 'control' );

// Pages
$options[] = array( 'title'             => __( 'Pages Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_3',
                    'id'                => 'emerson_pages',
                    'default'           => 0,
                    'option'            => 'pages',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Categories
$options[] = array( 'title'             => __( 'Categories Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_3',
                    'id'                => 'emerson_categories',
                    'default'           => 0,
                    'option'            => 'categories',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Tags
$options[] = array( 'title'             => __( 'Tags Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_3',
                    'id'                => 'emerson_tags',
                    'default'           => '',
                    'option'            => 'tags',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Post Types
$options[] = array( 'title'             => __( 'Post Types Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_3',
                    'id'                => 'emerson_post_types',
                    'default'           => '',
                    'option'            => 'post_types',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Posts
$options[] = array( 'title'             => __( 'Posts Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_3',
                    'id'                => 'emerson_posts',
                    'default'           => '',
                    'option'            => 'posts',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Users
$options[] = array( 'title'             => __( 'Users Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_3',
                    'id'                => 'emerson_users',
                    'default'           => '',
                    'option'            => 'users',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Menus
$options[] = array( 'title'             => __( 'Menus Field', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_section_3',
                    'id'                => 'emerson_menus',
                    'default'           => '',
                    'option'            => 'menus',
                    'sanitize_callback' => '',
                    'type'              => 'control' );


             