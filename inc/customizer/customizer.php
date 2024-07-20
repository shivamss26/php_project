<?php
/**
 * Unexposed Theme Customizer.
 *
 * @package Unexposed
 */

/**
 * Core functions.
 *
 */

if (!function_exists('unexposed_get_option')):

/**
 * Get theme option.
 *
 * @since 1.0.0
 *
 * @param string $key Option key.
 * @return mixed Option value.
 */
function unexposed_get_option($key) {

	if (empty($key)) {
		return;
	}

	$value = '';

	$default       = unexposed_get_default_theme_options();
	$default_value = null;

	if (is_array($default) && isset($default[$key])) {
		$default_value = $default[$key];
	}

	if (null !== $default_value) {
		$value = get_theme_mod($key, $default_value);
	} else {
		$value = get_theme_mod($key);
	}

	return $value;
}
endif;
/*font option*/
global $unexposed_google_fonts;
$unexposed_google_fonts = array(
    'ABeeZee:400,400italic'                     => 'ABeeZee',
    'Abel'                                      => 'Abel',
    'Abril+Fatface'                             => 'Abril Fatface',
    'Aldrich'                                   => 'Aldrich',
    'Alegreya:400,400italic,700,900'            => 'Alegreya',
    'Alex+Brush'                                => 'Alex Brush',
    'Alfa+Slab+One'                             => 'Alfa Slab One',
    'Amaranth:400,400italic,700'                => 'Amaranth',
    'Andada'                                    => 'Andada',
    'Anton'                                     => 'Anton',
    'Archivo+Black'                             => 'Archivo Black',
    'Archivo+Narrow:400,400italic,700'          => 'Archivo Narrow',
    'Arimo:400,400italic,700'                   => 'Arimo',
    'Arvo:400,400italic,700'                    => 'Arvo',
    'Asap:400,400italic,700'                    => 'Asap',
    'Bangers'                                   => 'Bangers',
    'BenchNine:400,700'                         => 'BenchNine',
    'Bevan'                                     => 'Bevan',
    'Bitter:400,400italic,700'                  => 'Bitter',
    'Bree+Serif'                                => 'Bree Serif',
    'Cabin:400,400italic,500,600,700'           => 'Cabin',
    'Cabin+Condensed:400,500,600,700'           => 'Cabin Condensed',
    'Cantarell:400,400italic,700'               => 'Cantarell',
    'Carme'                                     => 'Carme',
    'Cherry+Cream+Soda'                         => 'Cherry Cream Soda',
    'Cinzel:400,700,900'                        => 'Cinzel',
    'Comfortaa:400,300,700'                     => 'Comfortaa',
    'Cookie'                                    => 'Cookie',
    'Covered+By+Your+Grace'                     => 'Covered By Your Grace',
    'Crete+Round:400,400italic'                 => 'Crete Round',
    'Crimson+Text:400,400italic,600,700'        => 'Crimson Text',
    'Cuprum:400,400italic'                      => 'Cuprum',
    'Dancing+Script:400,700'                    => 'Dancing Script',
    'Didact+Gothic'                             => 'Didact Gothic',
    'Droid+Sans:400,700'                        => 'Droid Sans',
    'Dosis:400,300,600,800'                     => 'Dosis',
    'Droid+Serif:400,400italic,700'             => 'Droid Serif',
    'Economica:400,700,400italic'               => 'Economica',
    'Expletus+Sans:400,400i,700,700i'           => 'Expletus Sans',
    'EB+Garamond'                               => 'EB Garamond',
    'Exo:400,300,400italic,600,800'             => 'Exo',
    'Exo+2:400,300,400italic,600,700,900'       => 'Exo 2',
    'Fira+Sans:400,500'                         => 'Fira Sans',
    'Fjalla+One'                                => 'Fjalla One',
    'Francois+One'                              => 'Francois One',
    'Fredericka+the+Great'                      => 'Fredericka the Great',
    'Fredoka+One'                               => 'Fredoka One',
    'Fugaz+One'                                 => 'Fugaz One',
    'Great+Vibes'                               => 'Great Vibes',
    'Handlee'                                   => 'Handlee',
    'Hammersmith+One'                           => 'Hammersmith One',
    'Hind:400,300,600,700'                      => 'Hind',
    'Inconsolata:400,700'                       => 'Inconsolata',
    'Indie+Flower'                              => 'Indie Flower',
    'Istok+Web:400,400italic,700'               => 'Istok Web',
    'Josefin+Sans:400,600,700,400italic'        => 'Josefin Sans',
    'Josefin+Slab:400,400italic,700,600'        => 'Josefin Slab',
    'Jura:400,300,500,600'                      => 'Jura',
    'Karla:400,400italic,700'                   => 'Karla',
    'Kaushan+Script'                            => 'Kaushan Script',
    'Kreon:400,300,700'                         => 'Kreon',
    'Lateef'                                    => 'Lateef',
    'Lato:400,300,400italic,900,700'            => 'Lato',
    'Libre+Baskerville:400,400italic,700'       => 'Libre Baskerville',
    'Limelight'                                 => 'Limelight',
    'Lobster'                                   => 'Lobster',
    'Lobster+Two:400,700,700italic'             => 'Lobster Two',
    'Lora:400,400italic,700,700italic'          => 'Lora',
    'Maven+Pro:400,500,700,900'                 => 'Maven Pro',
    'Merriweather:400,400italic,300,900,700'    => 'Merriweather',
    'Merriweather+Sans:400,400italic,700,800'   => 'Merriweather Sans',
    'Monda:400,700'                             => 'Monda',
    'Montserrat:400,700'                        => 'Montserrat',
    'Muli:400,300italic,300'                    => 'Muli',
    'News+Cycle:400,700'                        => 'News Cycle',
    'Noticia+Text:400,400italic,700'            => 'Noticia Text',
    'Noto+Sans:400,400italic,700'               => 'Noto Sans',
    'Noto+Serif:400,400italic,700'              => 'Noto Serif',
    'Nunito:400,300,700'                        => 'Nunito',
    'Old+Standard+TT:400,400italic,700'         => 'Old Standard TT',
    'Open+Sans:300,400,400italic,600,700'           => 'Open Sans',
    'Open+Sans+Condensed:300,300italic,700'     => 'Open Sans Condensed',
    'Oswald:400,300,700'                        => 'Oswald',
    'Oxygen:400,300,700'                        => 'Oxygen',
    'Pacifico'                                  => 'Pacifico',
    'Passion+One:400,700,900'                   => 'Passion One',
    'Pathway+Gothic+One'                        => 'Pathway Gothic One',
    'Patua+One'                                 => 'Patua One',
    'Poiret+One'                                => 'Poiret One',
    'Pontano+Sans'                              => 'Pontano Sans',
    'Poppins:300,400,500,600,700'               => 'Poppins',
    'Play:400,700'                              => 'Play',
    'Playball'                                  => 'Playball',
    'Playfair+Display:400,400italic,700,900'    => 'Playfair Display',
    'PT+Sans:400,400italic,700'                 => 'PT Sans',
    'PT+Sans+Caption:400,700'                   => 'PT Sans Caption',
    'PT+Sans+Narrow:400,700'                    => 'PT Sans Narrow',
    'PT+Serif:400,400italic,700'                => 'PT Serif',
    'Quattrocento+Sans:400,700,400italic'       => 'Quattrocento Sans',
    'Questrial'                                 => 'Questrial',
    'Quicksand:400,700'                         => 'Quicksand',
    'Raleway:400,300,500,600,700,900'           => 'Raleway',
    'Righteous'                                 => 'Righteous',
    'Roboto:100,300,400,500,700'                => 'Roboto',
    'Roboto+Condensed:400,300,400italic,700'    => 'Roboto Condensed',
    'Roboto+Slab:400,300,700'                   => 'Roboto Slab',
    'Rokkitt:400,700'                           => 'Rokkitt',
    'Ropa+Sans:400,400italic'                   => 'Ropa Sans',
    'Russo+One'                                 => 'Russo One',
    'Sanchez:400,400italic'                     => 'Sanchez',
    'Satisfy'                                   => 'Satisfy',
    'Shadows+Into+Light'                        => 'Shadows Into Light',
    'Sigmar+One'                                => 'Sigmar One',
    'Signika:400,300,700'                       => 'Signika',
    'Six+Caps'                                  => 'Six Caps',
    'Slabo+27px'                                => 'Slabo 27px',
    'Source+Sans+Pro:300,300i,400,400i,700,700i' => 'Source Sans Pro',
    'Source+Serif+Pro:400,700'                  => 'Source Serif Pro',
    'Squada+One'                                => 'Squada One',
    'Tangerine:400,700'                         => 'Tangerine',
    'Tinos:400,400italic,700'                   => 'Tinos',
    'Titillium+Web:400,300,400italic,700,900'   => 'Titillium Web',
    'Ubuntu:400,400italic,500,700'              => 'Ubuntu',
    'Ubuntu+Condensed'                          => 'Ubuntu Condensed',
    'Varela+Round'                              => 'Varela Round',
    'Vollkorn:400,400italic,700'                => 'Vollkorn',
    'Voltaire'                                  => 'Voltaire',
    'Yanone+Kaffeesatz:400,300,700'             => 'Yanone Kaffeesatz',
);
//customizer default
require get_template_directory().'/inc/customizer/default.php';
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function unexposed_customize_register($wp_customize) {

	// Load custom controls.
	require get_template_directory().'/inc/customizer/customizer-function.php';

	$wp_customize->get_setting('blogname')->transport        = 'postMessage';
	$wp_customize->get_setting('blogdescription')->transport = 'postMessage';

	if (isset($wp_customize->selective_refresh)) {
		$wp_customize->selective_refresh->add_partial('blogname', array(
				'selector'        => '.site-title a',
				'render_callback' => 'unexposed_customize_partial_blogname',
			));
		$wp_customize->selective_refresh->add_partial('blogdescription', array(
				'selector'        => '.site-description',
				'render_callback' => 'unexposed_customize_partial_blogdescription',
			));
	}

    $wp_customize->register_section_type( 'Unexposed_Customize_Section_Upsell' );
    // Register sections.
    $wp_customize->add_section(new Unexposed_Customize_Section_Upsell(
            $wp_customize,
            'theme_upsell',
            array(
                'title'    => esc_html__( 'View Pro Version', 'unexposed' ),
                'pro_text' => esc_html__( 'Upgrade', 'unexposed' ),
                'pro_url'  => 'https://unitedtheme.com/themes/unexposed-plus/',
                'priority'  => 1,
            )
        )
    );
	/*theme option panel details*/
	require get_template_directory().'/inc/customizer/theme-option.php';
	require get_template_directory().'/inc/customizer/slider.php';
    require get_template_directory().'/inc/customizer/about.php';
    require get_template_directory().'/inc/customizer/category-section.php';
    require get_template_directory().'/inc/customizer/featured_section.php';
    require get_template_directory().'/inc/customizer/video.php';
    require get_template_directory().'/inc/customizer/testimonial.php';
    require get_template_directory().'/inc/customizer/cta.php';
    require get_template_directory().'/inc/customizer/featured-blog.php';


}

add_action('customize_register', 'unexposed_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 *
 * @since 1.0.0
 */
function unexposed_customize_preview_js() {

	wp_enqueue_script('unexposed_customizer', get_template_directory_uri().'/js/customizer.js', array('customize-preview'), '20130508', true);

}

add_action('customize_preview_init', 'unexposed_customize_preview_js');

function unexposed_upsell_js() {
    wp_enqueue_script( 'unexposed_customize_controls', get_template_directory_uri() . '/assets/js/upsell.js', array( 'customize-controls' ) );
}
add_action( 'customize_controls_enqueue_scripts', 'unexposed_upsell_js',0 );