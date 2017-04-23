<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <title>Menu Bar</title>
        <link rel = "stylesheet" type="text/css" href = "<?php echo base_url('assets/css/menubar.css') ?>">
        <script type="text/javascript" src="assets/js/menubar.js" ></script>
    </head>
    <body>
    <div class = "navcontainer">
        <ul class = "leftnav">
            <li><a href = "<?php echo base_url("/index.php/home/")?>">Home</a></li>
            <li><a href = "<?php echo base_url("/index.php/home/view/about")?>">About Me</a></li>
            <li><a href = "<?php echo base_url("/index.php/home/view/projects")?>">Projects</a></li>
            <li><a href = "<?php echo base_url("/index.php/home/view/interests")?>">Interests</a></li>
            <div class = "social_bar">
                <li id = "fb_icon"><a href = "https://www.facebook.com/jack.mcbride.75"><img src = "<?php echo base_url('assets/images/facebook.png')?>"></a></li>
                <li id = "twitter_icon"><a href = "https://twitter.com/WarPariah"><img src = "<?php echo base_url('assets/images/twitter.png')?>" ></a></li>
                <li id = "linkedin_icon"><a href = "https://www.linkedin.com/in/jack-mcbride-b312bba9/"><img src = "<?php echo base_url('assets/images/linkedin.png')?>"></a></li>
                <li id = "instagram_icon" class = "last_button"><a href = "https://www.instagram.com/warauthor/"><img src = "<?php echo base_url('assets/images/instagram.png')?>"></a></li>
            </div>
        </ul>
    <a href="https://github.com/jackmcbride"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/e7bbb0521b397edbd5fe43e7f760759336b5e05f/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_green_007200.png"></a>
    </div>
        
    </body>
</html>