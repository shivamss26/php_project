<?php
/**
 * Featured Blog section
 *
 * @package Unexposed
 */

$default = unexposed_get_default_theme_options();

// Fearured Blog Section.
$wp_customize->add_section('featured_blog_settings',
    array(
        'title'      => esc_html__('Footer Featured Blog', 'unexposed'),
        'capability' => 'edit_theme_options',
        'panel'      => 'frontpage_option_panel',
    )
);

// Setting - show_slider_section.
$wp_customize->add_setting('enable_featured_blog',
    array(
        'default'           => $default['enable_featured_blog'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'unexposed_sanitize_checkbox',
    )
);
$wp_customize->add_control('enable_featured_blog',
    array(
        'label'    => esc_html__('Enable Featured Blog', 'unexposed'),
        'section'  => 'featured_blog_settings',
        'type'     => 'checkbox',
        'priority' => 100,
    )
);

$wp_customize->add_setting('featured_blog_title',
    array(
        'default'           => $default['featured_blog_title'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control('featured_blog_title',
    array(
        'label'    => esc_html__('Featured Blog Title', 'unexposed'),
        'section'  => 'featured_blog_settings',
        'type'     => 'text',
        'priority' => 120,
    )
);

// Setting - drop down category for slider.
$wp_customize->add_setting('select_category_for_featured_blog',
    array(
        'default'           => $default['select_category_for_featured_blog'],
        'capability'        => 'edit_theme_options',
        'sanitize_callback' => 'absint',
    )
);
$wp_customize->add_control(new unexposed_Dropdown_Taxonomies_Control($wp_customize, 'select_category_for_featured_blog',
    array(
        'label'           => esc_html__('Select Category for Featured Blog', 'unexposed'),
        'section'         => 'featured_blog_settings',
        'type'            => 'dropdown-taxonomies',
        'taxonomy'        => 'category',
        'priority'        => 130,
    )));
