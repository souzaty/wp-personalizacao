//Estilização de página de login
function login_styles() { ?>
 <style type="text/css">
  body { background: #f1f1f1 !important;}
  #wp-submit { border: none !important; box-shadow: none !important; background: #006b80 !important; text-shadow: none !important; border-radius: 4px !important; -webkit-border-radius: 4px !important; color: #fff !important; display:block; width: 100% !important; margin: 30px 0 0 0 !important;     font-size: 16px; padding: 5px 0 !important; height: auto !important; transition: all 0.5s;}
  #wp-submit:hover { background:#d30145 !important;
  }
  .login h1 a { background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/HAL9000_replica.jpg') !important; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/HAL9000_replica.jpg') !important; background-size: 100% !important; background-position: center center !important; background-repeat: no-repeat; height: 100px !important; width: 73px !important;
}
  .login #backtoblog a, .login #nav a {
    color: #343434 !important;
  }
 </style>
<?php }
add_action('login_enqueue_scripts', 'login_styles');
 
// Link logo login
function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
 
// Mudar nome ao passar o mouse
function my_login_logo_url_title() {
    return 'Hall open the door.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
 
?>