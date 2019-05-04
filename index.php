<?php

$content_template = $_GET['page'] ?? 'front-page';

?><!DOCTYPE html>
<html lang="en-US" class="no-js no-svg">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<script>
		( function ( html ) {
			html.className = html.className.replace( /\bno-js\b/, 'js' );
		} )( document.documentElement );
	</script>

	<title>WordCamp Seattle 2019 &#8211; A casual conference all about WordPress</title>
	<link rel='dns-prefetch' href='//2019.seattle.wordcamp.test' />
	<link rel='dns-prefetch' href='//s.w.org' />
	<link rel="alternate" type="application/rss+xml" title="WordCamp Seattle 2019 &raquo; Feed" href="https://2019.seattle.wordcamp.org/feed/" />
	<link rel="alternate" type="application/rss+xml" title="WordCamp Seattle 2019 &raquo; Comments Feed" href="https://2019.seattle.wordcamp.org/comments/feed/" />
	<link rel="alternate" type="application/rss+xml" title="WordCamp Seattle 2019 &raquo; Sample Page Comments Feed" href="https://2019.seattle.wordcamp.org/sample-page/feed/" />
	<script type="text/javascript">
		window._wpemojiSettings = {
			'baseUrl': 'https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/72x72\/', 'ext': '.png',
			'svgUrl' : 'https:\/\/s.w.org\/images\/core\/emoji\/12.0.0-1\/svg\/', 'svgExt': '.svg',
			'source' : { 'concatemoji': 'https:\/\/2019.seattle.wordcamp.test\/wp-includes\/js\/wp-emoji-release.min.js' }
		};
		! function ( a, b, c ) {
			function d( a, b ) {
				var c = String.fromCharCode;
				l.clearRect( 0, 0, k.width, k.height ), l.fillText( c.apply( this, a ), 0, 0 );
				var d = k.toDataURL();
				l.clearRect( 0, 0, k.width, k.height ), l.fillText( c.apply( this, b ), 0, 0 );
				var e = k.toDataURL();
				return d === e;
			}

			function e( a ) {
				var b;
				if ( ! l || ! l.fillText ) {
					return ! 1;
				}
				switch ( l.textBaseline = 'top', l.font = '600 32px Arial', a ) {
					case'flag':
						return ! ( b = d( [ 55356, 56826, 55356, 56819 ], [ 55356, 56826, 8203, 55356, 56819 ] ) ) && ( b = d( [ 55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447 ], [ 55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447 ] ), ! b );
					case'emoji':
						return b = d( [ 55357, 56424, 55356, 57342, 8205, 55358, 56605, 8205, 55357, 56424, 55356, 57340 ], [ 55357, 56424, 55356, 57342, 8203, 55358, 56605, 8203, 55357, 56424, 55356, 57340 ] ), ! b;
				}
				return ! 1;
			}

			function f( a ) {
				var c = b.createElement( 'script' );
				c.src = a, c.defer = c.type = 'text/javascript', b.getElementsByTagName( 'head' )[ 0 ].appendChild( c );
			}

			var g,
			    h,
			    i,
			    j,
			    k = b.createElement( 'canvas' ),
			    l = k.getContext && k.getContext( '2d' );
			for ( j = Array( 'flag', 'emoji' ), c.supports = {
				everything: ! 0, everythingExceptFlag: ! 0
			}, i = 0; i < j.length; i ++ ) c.supports[ j[ i ] ] = e( j[ i ] ), c.supports.everything = c.supports.everything && c.supports[ j[ i ] ], 'flag' !== j[ i ] && ( c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && c.supports[ j[ i ] ] );
			c.supports.everythingExceptFlag = c.supports.everythingExceptFlag && ! c.supports.flag, c.DOMReady = ! 1, c.readyCallback = function () {
				c.DOMReady = ! 0;
			}, c.supports.everything || ( h = function () {
				c.readyCallback();
			}, b.addEventListener ? ( b.addEventListener( 'DOMContentLoaded', h, ! 1 ), a.addEventListener( 'load', h, ! 1 ) ) : ( a.attachEvent( 'onload', h ), b.attachEvent( 'onreadystatechange', function () {
				'complete' === b.readyState && c.readyCallback();
			} ) ), g = c.source || {}, g.concatemoji ? f( g.concatemoji ) : g.wpemoji && g.twemoji && ( f( g.twemoji ), f( g.wpemoji ) ) );
		}( window, document, window._wpemojiSettings );
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>

	<style type="text/css">
		iframe.streamtext {
			width: 100%;
		}
	</style>

	<link rel='stylesheet' id='dashicons-css' href='https://2019.seattle.wordcamp.org/wp-includes/css/dashicons.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='admin-bar-css' href='https://2019.seattle.wordcamp.org/wp-includes/css/admin-bar.min.css' type='text/css' media='all' />
	<style id='admin-bar-inline-css' type='text/css'>

		.admin-bar {
			position: inherit !important;
			top: auto !important;
		}

		.admin-bar .goog-te-banner-frame {
			top: 32px !important
		}

		@media screen and (max-width: 782px) {
			.admin-bar .goog-te-banner-frame {
				top: 46px !important;
			}
		}

		@media screen and (max-width: 480px) {
			.admin-bar .goog-te-banner-frame {
				position: absolute;
			}
		}

	</style>
	<link rel='stylesheet' id='wp-block-library-css' href='https://2019.seattle.wordcamp.org/wp-includes/css/dist/block-library/style.min.css' type='text/css' media='all' />
	<link rel='stylesheet' id='wordcamp-blocks-css' href='https://2019.seattle.wordcamp.org/wp-content/mu-plugins/blocks/assets/blocks.min.css?ver=1556825016' type='text/css' media='all' />
	<link rel='stylesheet' id='wcb_shortcodes-css' href='https://2019.seattle.wordcamp.org/wp-content/plugins/wc-post-types/css/shortcodes.css?ver=2' type='text/css' media='all' />
	<link rel='stylesheet' id='campsite-2017-style-css' href='https://2019.seattle.wordcamp.org/wp-content/themes/campsite-2017/style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='wordcamp_remote_css-css'  href='style.css' type='text/css' media='all' />
	<link rel='stylesheet' id='camptix-css' href='https://2019.seattle.wordcamp.org/wp-content/plugins/camptix/camptix.css?ver=1549494346' type='text/css' media='all' />
	<meta name="generator" content="WordPress 5.3-alpha-45284" />
	<link rel='shortlink' href='https://2019.seattle.wordcamp.org/' />

	<style type="text/css">
		#epcsp_subscribe label,
		#epcsp_subscribe input {
			display: block;
		}

		#epcsp_subscribe_address {
			width: 100%;
			max-width: 300px;
			margin: 5px 0;
		}
	</style>


	<style type="text/css">
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px, 1px, 1px, 1px);
		}

	</style>

	<style type="text/css" media="screen">
		html {
			margin-top: 32px !important;
		}

		* html body {
			margin-top: 32px !important;
		}

		@media screen and ( max-width: 782px ) {
			html {
				margin-top: 46px !important;
			}

			* html body {
				margin-top: 46px !important;
			}
		}
	</style>

	<link rel="icon" href="https://2019.seattle.wordcamp.org/files/2019/05/cropped-cropped-WP-SpaceNeedle-logo-32x32.png" sizes="32x32" />
	<link rel="icon" href="https://2019.seattle.wordcamp.org/files/2019/05/cropped-cropped-WP-SpaceNeedle-logo-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon-precomposed" href="https://2019.seattle.wordcamp.org/files/2019/05/cropped-cropped-WP-SpaceNeedle-logo-180x180.png" />
	<meta name="msapplication-TileImage" content="https://2019.seattle.wordcamp.org/files/2019/05/cropped-cropped-WP-SpaceNeedle-logo-270x270.png" />
</head>

<body class="home page-template-default page page-id-2 logged-in admin-bar no-customize-support page-slug-sample-page">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"> Skip to content </a>

	<?php require_once( __DIR__ . '/template-parts/header.html' ); ?>

	<div id="content" class="site-content">

		<div id="content-widgets">

			<div id="content-widget-1" class="content-widgets-block">
				<section id="recent-posts-4" class="widget widget_recent_entries">
					<h2 class="widget-title">latest schedule updates</h2>
					<ul>
						<li>
							<a href="https://2019.seattle.wordcamp.org/2019/05/03/welcome-to-wordcamp-seattle-2019/">Welcome to WordCamp Seattle 2019</a>
						</li>
					</ul>
				</section>
				<section id="custom_html-6" class="widget_text widget widget_custom_html">
					<div class="textwidget custom-html-widget">
						<button>
							schedule
						</button>
					</div>
				</section>
				<section id="custom_html-7" class="widget_text widget widget_custom_html">
					<div class="textwidget custom-html-widget"><a href="#">community sponsors</a></div>
				</section>
				<section id="nav_menu-3" class="widget widget_nav_menu">
					<div class="menu-attendee-info-container">
						<ul id="menu-attendee-info" class="menu">
							<li id="menu-item-113" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113">
								<a href="https://2019.seattle.wordcamp.org/code-of-conduct/">Code of Conduct</a>
							</li>
							<li id="menu-item-114" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-114">
								<a href="https://2019.seattle.wordcamp.org/social-media-stream/">Social Media Stream</a>
							</li>
							<li id="menu-item-115" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115">
								<a href="https://2019.seattle.wordcamp.org/location/">Location</a></li>
							<li id="menu-item-116" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-2 current_page_item menu-item-116">
								<a href="https://2019.seattle.wordcamp.org/" aria-current="page">Sample Page</a>
							</li>
						</ul>
					</div>
				</section>
			</div>

		</div>


		<div id="primary" class="content-area">
			<main id="main" class="site-main" role="main">
				<?php require_once( __DIR__ . '/template-parts/' . htmlspecialchars( $content_template ) .'.html' ); ?>
			</main>
		</div>


	</div> <!-- #content -->

<?php
require_once( __DIR__ . '/template-parts/footer.html' );
