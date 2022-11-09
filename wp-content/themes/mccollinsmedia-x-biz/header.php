<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package McCollinsMedia_x_BIZ
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0" />
	<meta name="theme-color" content="#8376B2" />
	<meta name="msapplication-TileColor" content="#8376B2" />
	<meta name="msapplication-navbutton-color" content="#8376B2" />
	<meta name="apple-mobile-web-app-status-bar-style" content="#8376B2" />
	<meta name="theme-color" content="#8376B2" media="(prefers-color-scheme: light)" />
	<meta name="theme-color" content="#8376B2" media="(prefers-color-scheme: dark)" />

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicons/manifest.json">

	<meta name="msapplication-TileColor" content="#8376B2" />
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png" />
	<title>Businessincorporationzone</title>
	<meta name="description" content="BIZ stands for new beginnings; we pride ourselves on giving our clients with the best possible start to their business’ to ‘we pride ourselves on giving our clients the best possible start to their business.">
	</meta>
	<meta name="og:description" content="BIZ stands for new beginnings; we pride ourselves on giving our clients with the best possible start to their business’ to ‘we pride ourselves on giving our clients the best possible start to their business.">
	</meta>
	<meta property="og:image" content="https://mccollinsmediaweb.github.io/Clients/DIH/main.jpg" />
	<meta property="og:url" content="www.businessincorporationzone.ae" />
	<meta property="og:type" content="Website" />
	<meta property="og:title" content="BIZ stands for new beginnings; we pride ourselves on giving our clients with the best possible start to their business’ to ‘we pride ourselves on giving our clients the best possible start to their business." />


	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/biz-plugin.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/biz-main.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/biz-slider/slick/slick.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/biz-slider/slick/slick-theme.css" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	
	<section class="Header">
		<div class="container">
			<div class="HeaderNav">
				<div class="HeaderNavL">
					<a href="http://localhost/mccollinsmedia-x-biz/">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo@2x.png" alt="logo">
					</a>
				</div>
				<div class="HeaderNavM">
					<div class="MidNav">
						<a href="/mccollinsmedia-x-biz/who-we-are/">How can I help you</a>
						<a href="/mccollinsmedia-x-biz/value-added-services/">Value added services</a>
						<a href="/mccollinsmedia-x-biz/jurisdictions/">Jurisdictions</a>
						<a href="/mccollinsmedia-x-biz/media-center/">Media Center</a>
						<a href="/mccollinsmedia-x-biz/cost-calculator/" class="CCLink">Cost Calculator</a>
					</div>
				</div>
				<div class="HeaderNavR">
					<div class="MenuClick cursor-pointer">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="35" viewBox="0 0 40 35">
							<defs>
								<clipPath id="clip-path">
									<rect id="Rectangle_176" data-name="Rectangle 176" width="40" height="35" transform="translate(-0.232 0.14)" fill="#fff" />
								</clipPath>
							</defs>
							<g id="Group_244" data-name="Group 244" transform="translate(0.232 -0.14)" clip-path="url(#clip-path)">
								<path id="Path_169" data-name="Path 169" d="M0,2.487A2.488,2.488,0,0,1,2.487,0H37.3a2.487,2.487,0,1,1,0,4.974H2.487A2.488,2.488,0,0,1,0,2.487" transform="translate(0 -0.04)" fill="#fff" />
								<path id="Path_170" data-name="Path 170" d="M0,14.487A2.488,2.488,0,0,1,2.487,12H37.3a2.487,2.487,0,1,1,0,4.974H2.487A2.488,2.488,0,0,1,0,14.487" transform="translate(0 17.803)" fill="#fff" />
								<path id="Path_171" data-name="Path 171" d="M8.487,6a2.487,2.487,0,0,0,0,4.974h19.9a2.487,2.487,0,0,0,0-4.974Z" transform="translate(8.921 8.882)" fill="#fff" />
							</g>
						</svg>


					</div>
				</div>
			</div>
		</div>
		<div class="SideNav">
			<div class="SideNavContent">
				<span class="CloseClick">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="33" height="33" viewBox="0 0 33 33">
						<defs>
							<clipPath id="clip-path">
							<rect id="Rectangle_699" data-name="Rectangle 699" width="33" height="33" transform="translate(0 -0.282)" fill="#fff"/>
							</clipPath>
						</defs>
						<g id="Group_1235" data-name="Group 1235" transform="translate(0 0.282)">
							<g id="Group_1174" data-name="Group 1174" clip-path="url(#clip-path)">
							<path id="Path_780" data-name="Path 780" d="M31.082,32.718a1.631,1.631,0,0,1-1.157-.479L.479,2.793A1.636,1.636,0,0,1,2.793.479L32.239,29.926a1.636,1.636,0,0,1-1.157,2.792" transform="translate(0 0)" fill="#fff"/>
							<path id="Path_781" data-name="Path 781" d="M1.636,32.718A1.636,1.636,0,0,1,.479,29.926L29.926.479a1.636,1.636,0,0,1,2.313,2.313L2.793,32.239a1.631,1.631,0,0,1-1.157.479" transform="translate(0 0)" fill="#fff"/>
							</g>
						</g>
					</svg>
				</span>
				<div class="NavBox">
					<a href="/mccollinsmedia-x-biz/">Home</a>
					<a href="/mccollinsmedia-x-biz/about-us/">About us</a>
					<a href="/mccollinsmedia-x-biz/value-added-services/">Value added services</a>
					<a href="/mccollinsmedia-x-biz/jurisdictions/">Jurisdictions</a>
					<a href="/mccollinsmedia-x-biz/media-center/">Media Center</a>
					<a href="/mccollinsmedia-x-biz/cost-calculator/">Cost Calculator</a>
					<a href="/mccollinsmedia-x-biz/current-promotions/">Current Promotions</a>
					<a href="/mccollinsmedia-x-biz/contact-us/">Contact Us</a>
				</div>
				<div>
					<div class="SocialMedia">
						<a href="#" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png"/>
						</a>
						<a href="#" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png"/>
						</a>
						<a href="#" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/linkedin.png"/>
						</a>
						<a href="#" target="_blank">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/twitter.png"/>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>