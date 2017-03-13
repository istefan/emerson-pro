<?php
/**
 * Customizer Controls - Theme Options.
 *
 * @package Emerson
 */

// User access level
$capability = 'edit_theme_options';

// Option type
$type = 'theme_mod'; // option / theme_mod

/* ---------------------------------------------------------------------------------------------------
    Panels
--------------------------------------------------------------------------------------------------- */

// Theme Options
$options[] = array( 'title'             => __( 'Theme Options', 'emerson' ),
                    'description'       => '',
                    'id'                => 'emerson_theme_options',
                    'priority'          => 28,
                    'theme_supports'    => '',
                    'type'              => 'panel' );


/* ---------------------------------------------------------------------------------------------------
    Front Page
--------------------------------------------------------------------------------------------------- */

// Front Page - Section
$options[] = array( 'title'             => __( 'Front Page', 'emerson' ),
                    'description'       => __( 'Each section will be populated with the content of the selected page.', 'emerson' ),
                    'panel'             => 'emerson_theme_options',
                    'id'                => 'emerson_fp_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Front Page Section Pages
for ( $i = 1; $i < 11; $i++ ) { 

    $options[] = array( 'title'             => __( 'Front Page Section', 'emerson' ) . ' ' . $i,
                        'description'       => '',
                        'section'           => 'emerson_fp_options',
                        'id'                => 'emerson_fp_section_' . $i,
                        'default'           => 0,
                        'option'            => 'pages',
                        'sanitize_callback' => '',
                        'type'              => 'control' );

}

/* ---------------------------------------------------------------------------------------------------
    Site Footer
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Site Footer', 'emerson' ),
                    'description'       => '',
                    'panel'             => 'emerson_theme_options',
                    'id'                => 'emerson_footer_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Footer Widgets
$options[] = array( 'title'             => __( 'Footer Widgets', 'emerson' ),
                    'description'       => __( 'The number of widgets in the footer.', 'emerson' ),
                    'section'           => 'emerson_footer_options',
                    'id'                => 'emerson_footer_widgets',
                    'default'           => '3',
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '0' => __( 'No footer widgets', 'emerson' ),
                        '1' => __( '1 Footer Widget', 'emerson' ),
                        '2' => __( '2 Footer Widgets', 'emerson' ),
                        '3' => __( '3 Footer Widgets', 'emerson' ),
                        '4' => __( '4 Footer Widgets', 'emerson' ),
                    ),
                    'type'              => 'control' );

// Footer Credits
$options[] = array( 'title'             => __( 'Footer Credits', 'emerson' ),
                    'description'       => __( 'This will replace the default footer credits', 'emerson' ),
                    'section'           => 'emerson_footer_options',
                    'id'                => 'emerson_footer_credits',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => 'esc_textarea',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Portfolio
--------------------------------------------------------------------------------------------------- */

// Site Footer - Section
$options[] = array( 'title'             => __( 'Portfolio', 'emerson' ),
                    'description'       => '',
                    'panel'             => 'emerson_theme_options',
                    'id'                => 'emerson_portfolio_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Portfolio Page Title
$options[] = array( 'title'             => __( 'Portfolio Page Title', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_portfolio_options',
                    'id'                => 'emerson_portfolio_title',
                    'default'           => '',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

// Portfolio Page Description
$options[] = array( 'title'             => __( 'Portfolio Page Description', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_portfolio_options',
                    'id'                => 'emerson_portfolio_text',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Portfolio Post Columns
$options[] = array( 'title'             => __( 'Portfolio Post Columns', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_portfolio_options',
                    'id'                => 'emerson_portfolio_cols',
                    'default'           => 2,
                    'option'            => 'select',
                    'sanitize_callback' => '',
                    'choices'           => array(
                        '1' => __( '1 Column', 'emerson' ),
                        '2' => __( '2 Columns', 'emerson' ),
                        '3' => __( '3 Columns', 'emerson' ),
                        '4' => __( '4 Columns', 'emerson' ),
                    ),
                    'type'              => 'control' );

// Portfolio Posts / Page
$options[] = array( 'title'             => __( 'Portfolio Posts / Page', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_portfolio_options',
                    'id'                => 'emerson_portfolio_posts',
                    'default'           => 12,
                    'option'            => 'number',
                    'sanitize_callback' => '',
                    'input_attrs'       => array(
                        'min'   => 0,
                        'max'   => 100,
                        'step'  => 1,
                    ),
                    'type'              => 'control' );

// Display title on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display title on Portfolio archive page.', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_portfolio_options',
                    'id'                => 'emerson_portfolio_show_title',
                    'default'           => '1',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Display excerpt on Portfolio archive page.
$options[] = array( 'title'             => __( 'Display excerpt on Portfolio archive page.', 'emerson' ),
                    'description'       => '',
                    'section'           => 'emerson_portfolio_options',
                    'id'                => 'emerson_portfolio_excerpt',
                    'default'           => '',
                    'option'            => 'checkbox',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Slug
$options[] = array( 'title'             => __( 'Portfolio Slug', 'emerson' ),
                    'description'       => __( 'This is helpful for search engines. Example: use books if you showcase your books. Note: If you change the slug, you need to go to Settings > Permalinks and save the changes again.', 'emerson' ),
                    'section'           => 'emerson_portfolio_options',
                    'id'                => 'emerson_portfolio_slug',
                    'default'           => 'portfolio',
                    'option'            => 'text',
                    'sanitize_callback' => 'sanitize_text_field',
                    'type'              => 'control' );

/* ---------------------------------------------------------------------------------------------------
    Custom Scripts
--------------------------------------------------------------------------------------------------- */

// Custom Scripts - Section
$options[] = array( 'title'             => __( 'Custom Scripts', 'emerson' ),
                    'description'       => '',
                    'panel'             => 'emerson_theme_options',
                    'id'                => 'emerson_scripts_options',
                    'priority'          => 10,
                    'theme_supports'    => '',
                    'type'              => 'section' );

// Header Scripts
$options[] = array( 'title'             => __( 'Header Scripts', 'emerson' ),
                    'description'       => __( 'This code will output immediately before the closing </head> tag in the document source.', 'emerson' ),
                    'section'           => 'emerson_scripts_options',
                    'id'                => 'emerson_header_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );

// Footer Scripts
$options[] = array( 'title'             => __( 'Footer Scripts', 'emerson' ),
                    'description'       => __( 'This code will output immediately before the closing </body> tag in the document source.', 'emerson' ),
                    'section'           => 'emerson_scripts_options',
                    'id'                => 'emerson_footer_scripts',
                    'default'           => '',
                    'option'            => 'textarea',
                    'sanitize_callback' => '',
                    'type'              => 'control' );
