//Estilização de página de login
function login_styles() { ?>
 <style type="text/css">
  body { background: #f1f1f1 !important;}
  #wp-submit { border: none !important; border-radius: 4px !important; box-shadow: none !important; background: #e86d8a !important; text-shadow: none !important; border-radius: 0 !important; -webkit-border-radius: 0 !important; color: #fff !important; display:block; width: 100% !important; margin: 30px 0 0 0 !important;     font-size: 16px; padding: 5px 0 !important; height: auto !important; }
  #wp-submit:hover { background:#000 !important;
  }
  .login h1 a { background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/HAL9000_replica.jpg') !important; background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/HAL9000_replica.jpg') !important; background-size: 100% !important; background-position: center center !important; background-repeat: no-repeat; height: 100px !important; width: 73px !important; 
}
  .login #backtoblog a, .login #nav a {
    color: #343434 !important;
  }
 </style>
 <?php }
 add_action ('login_enqueue_scripts', 'login_styles')

 ?>