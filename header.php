<!DOCTYPE html>
<html lang="<?php language_attributes(  );?>"> 
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Blog Site Template">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png"> 

    <?php
        wp_head();
    ?>
</head> 

<body>
    <?php
		if (function_exists('wp_body_open'))
		{
			// useful for google analysics and facebook e.t.c 
			wp_body_open( );
		}
	?>
    <header class="header text-center">	    
	    <a class="site-title pt-lg-4 mb-0" href="index.html">
			<?php
			    echo get_bloginfo('name');
			?>
		</a>
        
	    <nav class="navbar navbar-expand-lg navbar-dark" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>

			<div id="navigation" class="collapse navbar-collapse flex-column" >

			<!-- Custom Logo -->
			<?php
			    $custom_logo_id = get_theme_mod( 'custom_logo' );
				$custom_logo_url = wp_get_attachment_image_src( $custom_logo_id, 'full' );

				?>
                <img class="mb-3 mx-auto logo" src="<?= $custom_logo_url[0];?>" alt="<?php if( isset($custom_logo_url[1]) ) { echo $custom_logo_url[1]; }?>" >			
				<?php
			
			?>
				

				<?php
				    wp_nav_menu(array(
						'menu' => 'primary',
						'container' => '',
						'theme_location' => 'primary',
						'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
					));
				
				?>
				<hr>
				<ul class="social-list list-inline py-3 mx-auto">
					<li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
					<li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
				</ul>

			</div>
		</nav>
    </header>

	

    <div class="main-wrapper">
	    <header class="page-title theme-bg-light text-center gradient py-5">
			<?php if(is_page()):?>
				<h1 class="heading"><?= get_the_title();?></h1>
			<?php else:?>
				<h1 class="heading"><?= the_title();?></h1>
			<?php endif;?>
		</header>