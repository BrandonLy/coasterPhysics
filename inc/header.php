<!DOCTYPE html>
<html>
    <head>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link type="text/css" rel="stylesheet" href="assets/css/style.css">
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        
        <?php
            if($section == 'index') { 
                echo('<div id="home-wrapper">');
            }
        ?>
        
        <header class="topHeader">
            <div id="header-wrapper">
                <div id="header-logo"></div>
                <div id="nav">

                    <ul>

                         <li><a href="<?php if($section == 'index'){echo '#';} else {echo 'index.php';}?>" <?php if($section == "index") {echo "class='on'";}?>>Home</a></li>
                         <li><a href="<?php if($section == 'video'){echo '#';} else {echo 'video.php';}?>" <?php if($section == "video") {echo "class='on'";}?>>Coaster Footage</a></li>
                         <li><a href="<?php if($section == 'animation'){echo '#';} else {echo 'animation.php';}?>" <?php if($section == "animation") {echo "class='on'";}?>>Our Animation</a></li>
                         <li><a href="<?php if($section == 'content'){echo '#';} else {echo 'content.php';}?>" <?php if($section == "content") {echo "class='on'";}?>>Physics and More</a></li>

                    </ul>

                </div>
            </div>
        </header>
        
        <?php
            if($section != 'index') { 
                echo('<div id="header-spacer"></div>');
            }
        ?>