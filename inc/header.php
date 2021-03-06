<?php
$ROOT = $GLOBALS['base_url'];?>
<!DOCTYPE html>
<html>

<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="assets/css/style.css" media="(min-width: 1300px)">
    <link type="text/css" rel="stylesheet" href="assets/css/mobile.css" media="(max-width: 1300px)">
    <title>
        <?php echo $pageTitle; ?>
    </title>
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicons/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicons/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicons/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicons/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicons/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicons/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicons/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="assets/favicons/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/favicons/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="assets/favicons/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="assets/favicons/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="assets/favicons/manifest.json">
    <meta charset="utf-8">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="msapplication-TileImage" content="assets/favicons/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- End Favicons -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>

    <div id="page-picture" class="<?php echo($section . '-picture'); ?>">

        <header class="topHeader">
            <div id="header-wrapper">
                <a href="<?php if($section == 'index'){echo '#';} else {echo 'index.php';}?>">
                    <div id="header-logo"></div>
                </a>

                <div id="mobile-menu-button" onclick="openMobileNav()"></div>

                <div id="nav" class="nav-closed">

                    <ul>

                        <a href="<?php if($section == 'index'){echo '#';} else {echo 'index.php';}?>" <?php if($section=="index" ) {echo "class='on'";}?>><li>Home</li></a>
                        <a href="<?php if($section == 'video'){echo '#';} else {echo 'video.php';}?>" <?php if($section=="video" ) {echo "class='on'";}?>><li>Coaster Footage</li></a>
                        <a href="<?php if($section == 'animation'){echo '#';} else {echo 'animation.php';}?>" <?php if($section=="animation" ) {echo "class='on'";}?>><li>Our Animation</li></a>
                        <a href="<?php if($section == 'content'){echo '#';} else {echo 'content.php';}?>" <?php if($section=="content" ) {echo "class='on'";}?>><li>Physics and More</li></a>
                        <a href="<?php if($section == 'contact'){echo '#';} else {echo 'contact.php';}?>" <?php if($section=="contact" ) {echo "class='on'";}?>><li>Contact Us</li></a>

                    </ul>

                </div>
            </div>
        </header>

        <?php
            if ($section=='index') {
                echo( '<div class="center verticalAlign"><h1 id="page-title">PHP: Hydropowered Penguins</h1><h3 id="page-subtitle">Coaster Physics</h3></div></div>');
            } else if ($section=='contact') {
                echo('<div class="center verticalAlign characters top-padding"><img src="assets/img/characters-contact-compressor.png"></div></div>');
            } else {
                echo( '<div class="center verticalAlign"><h1 id="page-title">' . $pageTitle . '</h1></div></div>');
            }
        ?>
