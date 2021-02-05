
<!doctype html>

<html class="no-js" <?php language_attributes(); ?> >

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<link href="https://fonts.googleapis.com/css?family=Oswald:400,500,600,700&display=swap" rel="stylesheet">

		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

		<?php wp_head(); ?>

		<!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $analytics_ID; ?>"></script>
        <script>

            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push( arguments );}
            gtag( 'js', new Date() );

            gtag( 'config', 'UA-11394918-16' );

        </script>

	</head>

	<body <?php body_class(); ?> data-viewport="desktop">

	<?php get_template_part( 'components/header/header.base' ); ?>
