<?php


// Load Stylesheets
function load_css()
{

    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
    wp_enqueue_style('main');

    wp_register_style( 'header-style', get_template_directory_uri(  ) . '/css-custom/header.css', array(), false, 'all' );
    wp_enqueue_style( 'header-style' );

}

add_action( 'wp_enqueue_scripts','load_css');




// Load Javascript
function load_js()
{
    wp_enqueue_script( 'jquery' );

    wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
    wp_enqueue_script( 'bootstrap' );

    wp_register_script('header-script', get_template_directory_uri(  ) . '/js-custom/header.js', array('jquery'), '', true);     
    wp_enqueue_script( 'header-script' ); 


    

}

add_action( 'wp_enqueue_scripts', 'load_js' );








// HOME PAGE

function home() 
{
  if( is_front_page( '' )) 
  {

    wp_register_script( 'home-script', get_template_directory_uri() . '/js-custom/home.js', array(), false, true );
    wp_enqueue_script('home-script');

    wp_register_style( 'home-style', get_template_directory_uri() . '/css-custom/home.css', array(), false, 'all' );
    wp_enqueue_style( 'home-style' );

/*
    //Localize script data to be used in ideas.js
    $scriptData = array();
    $scriptData['ajaxurl'] = admin_url( 'admin-ajax.php' );
    $scriptData['action'] = 'getidea';
    $scriptData['mrDeb7rYriS3m'] = wp_create_nonce( 'mrDeb7rYriS3m' );
    
    wp_localize_script( 'generator-script', 'titles_data', $scriptData );*/

  }
}

add_action('wp_enqueue_scripts', 'home');
















// GENEARTOR PAGE

function generator() 
{
  if( is_page( 'generator' )) 
  {

    wp_register_script( 'generator-script', get_template_directory_uri() . '/js-custom/generator.js', array(), false, true );
    wp_enqueue_script('generator-script');

    wp_register_style( 'generator-style', get_template_directory_uri(  ) . '/css-custom/generator.css', array(), false, 'all' );
    wp_enqueue_style( 'generator-style' );

/*
    //Localize script data to be used in ideas.js
    $scriptData = array();
    $scriptData['ajaxurl'] = admin_url( 'admin-ajax.php' );
    $scriptData['action'] = 'getidea';
    $scriptData['mrDeb7rYriS3m'] = wp_create_nonce( 'mrDeb7rYriS3m' );
    
    wp_localize_script( 'generator-script', 'titles_data', $scriptData );*/

  }
}

add_action('wp_enqueue_scripts', 'generator');












// PRICING

function pricing() 
{ 
  if( is_page( 'pricing' )) 
  {
    wp_register_script( 'pricing-script', get_template_directory_uri() . '/js-custom/pricing.js', array(), false, true );
    wp_enqueue_script('pricing-script');

    

    wp_register_style( 'pricing-style', get_template_directory_uri(  ) . '/css-custom/pricing.css', array(), false, 'all' );
    wp_enqueue_style( 'pricing-style' );

  }
}

add_action('wp_enqueue_scripts', 'pricing');














// CONTACT

function contact() 
{ 
  if( is_page( 'contact' )) 
  {
    wp_register_script( 'contact-script', get_template_directory_uri() . '/js-custom/contact.js', array(), false, true );
    wp_enqueue_script('contact-script');

    

    wp_register_style( 'contact-style', get_template_directory_uri(  ) . '/css-custom/contact.css', array(), false, 'all' );
    wp_enqueue_style( 'contact-style' );

  }
}

add_action('wp_enqueue_scripts', 'contact');
















// ABOUT

function about() 
{ 
  if( is_page( 'about' )) 
  {
    wp_register_script( 'about-script', get_template_directory_uri() . '/js-custom/about.js', array(), false, true );
    wp_enqueue_script('about-script');

    

    wp_register_style( 'about-style', get_template_directory_uri(  ) . '/css-custom/about.css', array(), false, 'all' );
    wp_enqueue_style( 'about-style' );

  }
}

add_action('wp_enqueue_scripts', 'about');












// ANDREW SCHULZ

function andrew_schulz() 
{ 
  if( is_page( 'standup' )) 
  {
    /*-----First load suggestions so no error------*/
    wp_register_script( 'suggestions-script', get_template_directory_uri() . '/js-custom/standup/suggestions.js', array(), false, true );
    wp_enqueue_script('suggestions-script');

    wp_register_script( 'andrew-schulz-script', get_template_directory_uri() . '/js-custom/standup/andrew-schulz.js', array(), false, true );
    wp_enqueue_script('andrew-schulz-script');

    

    wp_register_style( 'andrew-schulz-style', get_template_directory_uri(  ) . '/css-custom/standup/andrew-schulz.css', array(), false, 'all' );
    wp_enqueue_style( 'andrew-schulz-style' );

  }
}

add_action('wp_enqueue_scripts', 'andrew_schulz');















// DOCUMENTARY YOUTUBE TOOLS

function educational_video_tools() 
{ 
  if( is_page( 'educational-video-tools' )) 
  {

    wp_register_script( 'educational-video-tools-script', get_template_directory_uri() . '/js-custom/educational-video-tools.js', array(), false, true );
    wp_enqueue_script('educational-video-tools-script');

    

    wp_register_style( 'educational-video-tools-style', get_template_directory_uri() . '/css-custom/educational-video-tools.css', array(), false, 'all' );
    wp_enqueue_style( 'educational-video-tools-style');

  }
}

add_action('wp_enqueue_scripts', 'educational_video_tools');











/*
Disable Login Error?
*/
add_filter('login_errors',create_function('$a', "return null;"));

/*
Disable Login Hints
*/
function no_wordpress_errors(){
return 'Incorrect LogIn credentials.';
}
add_filter( 'login_errors', 'no_wordpress_errors' );

