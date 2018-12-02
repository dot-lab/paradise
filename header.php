<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=yes, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/lib/swipebox.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/jquery.swipebox.js"></script>
  <script type="text/javascript">
    ;( function( $ ) {
      $( '.swipebox' ).swipebox();
    } )( jQuery );
  </script>
  <title>Paradise of Sunny</title>
    <?php wp_head(); ?>
</head>
<body>
  <div id="wrapper">
    <header>
      <div id="header-inner">
        <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a></h1>
        <h2><?php bloginfo('description');?></h2>
      </div>
    </header>