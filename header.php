<?php 
  /*  
    This is the template for the header
    @package basictheme
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if(is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<?php 
  if(is_home()) :
    $basic_classes = array('basic-class', 'my-class');
  else :
    $basic_classes = array('no-basic-classes');
  endif;
?>

<body <?php body_class( $basic_classes); ?>>
<?php wp_body_open(); ?>

<?php wp_nav_menu(array('theme_location' => 'primary')); ?>
