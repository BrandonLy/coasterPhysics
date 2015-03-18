<?php $pageTitle="Home" ; $section="index" ; include( "inc/header.php"); ?>

<div id="home-tabs">

    <div id="tabs-wrapper">
        <a class="home-card" href="video.php">
            <div id="tab-1" class="homeTab">
                <div class="tabcontentWrapper verticalAlign">
                    <center><img src="assets/img/home.png" class="tab-image"></center>
                    <h3 class="tabTitle">coaster footage</h3>
                    <p class="tabBlurb">See the footage behind how roller coasters work and experience a coaster with the team!</p>
                </div>
            </div>
        </a>
        <a class="home-card" href="animation.php">
            <div id="tab-2" class="homeTab">
                <div class="tabcontentWrapper verticalAlign">
                    <center><img src="assets/img/jonnyboy.png" class="tab-image"></center>
                    <h3 class="tabTitle">our animation</h3>
                    <p class="tabBlurb">Take a look at how our animators recreated the coaster and how the physics played their part!</p>
                </div>
            </div>
        </a>
        <a class="home-card" href="content.php">
            <div id="tab-3" class="homeTab">
                <div class="tabcontentWrapper verticalAlign">
                    <center><img src="assets/img/brandon.png" class="tab-image"></center>
                    <h3 class="tabTitle">physics and more</h3>
                    <p class="tabBlurb">Learn more in depth about how roller coasters actually work, from centripedal force to energy!</p>
                </div>
            </div>
        </a>
    </div>

</div>

<?php include( "inc/footer.php");?>
