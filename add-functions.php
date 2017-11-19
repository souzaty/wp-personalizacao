//Styling wp-login page
function login_styles() { ?>
 <style type="text/css">
 body {
     background: #fc5c7d !important; /* Old browsers */
     background: -moz-linear-gradient(45deg, #fc5c7d 0%, #6a82fb 100%) !important; /* FF3.6-15 */
     background: -webkit-linear-gradient(45deg, #fc5c7d 0%, #6a82fb 100%) !important;
     /* Chrome10-25,Safari5.1-6 */
     background: linear-gradient(45deg, #fc5c7d 0%, #6a82fb 100%) !important; /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
     filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fc5c7d', endColorstr='#6a82fb', GradientType=1); /* IE6-9 fallback on horizontal gradient */
     background-attachment: fixed !important;
 }
 #wp-submit {
     border: none !important;
     box-shadow: none !important;
     background: #662d91 !important;
     text-shadow: none !important;
     border-radius: 4px !important;
     -webkit-border-radius: 4px !important;
     color: #fff !important;
     display: block;
     width: 100% !important;
     margin: 30px 0 0 0 !important;
     font-size: 16px;
     padding: 5px 0 !important;
     height: auto !important;
     transition: all 0.5s;
 }
 #wp-submit:hover {
     background: #ec008c !important;
 }
 .login h1 a {
     background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/asimov-logo-login.svg') !important;
     background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/asimov-logo-login.svg') !important;
     background-size: 100% !important;
     background-position: center center !important;
     background-repeat: no-repeat;
     height: 35px !important;
     width: 320px !important;
 }
 .login #backtoblog a,
 .login #nav a {
     color: #fff !important;
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
    return 'The Good Doctor.';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>
