<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

		<header class="c-header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			<div class="c-header__container">
				<div class="c-header__logo" itemscope itemtype="http://schema.org/Organization">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="DMD Pathfinders"> <div class="c-menu-toggle" id="menuToggle">
			<span class="line"></span>
			<span class="line"></span>
			<span class="line"></span>
		</div>
				</div>
				<div class="c-header__extras">
					<nav class="c-main__nav" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
                                 'container' => false,                           // remove nav container
                                 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                                 'menu' => __('The Main Menu', 'bonestheme'),  // nav name
                                 'menu_class' => 'nav top-nav cf',               // adding custom nav class
                                 'theme_location' => 'main-nav',                 // where it's located in the theme
                                 'before' => '',                                 // before the menu
                                   'after' => '',                                  // after the menu
                                   'link_before' => '',                            // before each link
                                   'link_after' => '',                             // after each link
                                   'depth' => 0,                                   // limit the depth of the nav
                                 'fallback_cb' => ''                             // fallback function (if there is one)
                        )); ?>

					</nav>
					<div style="display: flex">
<a style="margin-right: 1em;" href="https://uk.virginmoneygiving.com/donation-web/charity?charityId=1017207&donationAmount=5&frequencyType=M&utm_source=extbtn&utm_campaign=donatebtn" target="_blank" title="Donate to us (Link opens in a new window)">
<img src="https://uk.virginmoneygiving.com/giving/assets/buttons/DONATE_RED_BUTTON@1x.png" alt="Make a donation using Virgin Money Giving"/>
</a>
					<?php get_search_form(); ?>
</div>
					
				</div>
			</div>

		</header>
