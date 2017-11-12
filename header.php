<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Description of the page less than 150 characters">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Publicidade</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<div class="container-fluid">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
        <span class="sr-only">Navegação Responsiva</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Publicidade</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php 
      $args = array(
        'theme_location' => 'menu-principal',
        'menu' => 'menu-principal',
        'container' => 'div',
        'container_class' => 'collapse navbar-collapse',
        'container_id' => 'navbar',
        'menu_class' => 'nav navbar-nav navbar-right',
        'menu_id' => '',
        'echo' => true,
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'depth' => 0,
        'walker' => ''
      );
      wp_nav_menu($args);
    ?>
  </div><!-- /.container-fluid -->
</nav>


<!-- Botão de voltar ao topo -->
<div id="top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>

<!-- Gif de carregamento -->
<div id="loading"></div>