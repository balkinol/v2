<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-us" xml:lang="en-us">
    <head>
      <title><?php bloginfo( 'name' ); ?></title>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <?php wp_head();?>
      <script src="<?php bloginfo( 'stylesheet_directory' ); ?>/dist/styles.js"></script>
      <link href="<?php bloginfo( 'stylesheet_directory' ); ?>/dist/styles.css" rel="stylesheet">
    </head>
    <body>
      <?php require "navigation.php"; ?>
      <div class="container mx-auto">