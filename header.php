
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
     <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
</head> 
<body>
	

<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark light-blue accent-4">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        
<ul class="navbar-nav mr-auto">
  <?php
  if ( has_nav_menu( 'navbar' ) ) {
    wp_nav_menu( array(
    'menu'              => 'navbar',
    'theme_location'    => 'navbar',
    'depth'             => 2,
    'menu_class'        => 'navbar-nav mr-auto',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'container'         => false,
    'walker'            => new MDBBootstrapNavMenuWalker())
    );
  } else
  echo "Please assign Navbar Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations";
  ?> 
</ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->
</header>
            