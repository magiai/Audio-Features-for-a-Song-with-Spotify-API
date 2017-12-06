<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
<header class="header">
    <div class="container">

        <div class = "source">
            <p>source: https://developer.spotify.com/web-api/get-audio-features/</p>
        </div>


        <?php get_template_part('templates/basicInfo');?>

        <?php get_template_part('templates/analyze');?>

        <?php get_template_part('templates/afterSearch');?>



        </div>

</header>