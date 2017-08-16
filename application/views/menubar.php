<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <title>Jack McBride</title>
        <link rel = "stylesheet" type="text/css" href = "<?php echo base_url('assets/css/menubar.css') ?>">
        <script src="<?php echo base_url('assets/js/menu.js') ?>"></script>
    </head>
    <body>
    <div class = "nav_container">
        <ul class = "menunav">
            <div class="topnav" id="myTopnav">
                <a href="<?php echo base_url("/index.php/home/")?>">Home</a>
                <a href="<?php echo base_url("/index.php/home/view/about")?>">About</a>
                <a href = "<?php echo base_url("/index.php/home/view/projects")?>">Projects</a>
                <a href="<?php echo base_url("/index.php/home/view/cv")?>">Skills & CV</a>
                <a href="<?php echo base_url("/index.php/home/view/blog")?>">Blog</a>
                <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
        </ul>
        <div class = "social_div">
                <li id = "social_icon"><a id = "linkedin_icon" href = "https://www.linkedin.com/in/jack-mcbride-b312bba9/"><span></span></a></li>
                <li id = "social_icon"><a id = "twitter_icon" href = "https://twitter.com/WarPariah"><span></span></a></li>
                <li id = "social_icon"><a id = "fb_icon" href = "https://www.facebook.com/jack.mcbride.75"><span></span></a></li>
        </div>
    </div>
    </body>
</html>