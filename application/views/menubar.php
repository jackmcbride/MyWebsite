<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <title>Menu Bar</title>
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
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
            </div>
            <div class = "social_bar">
                <li id = "social_icon"><a href = "https://www.linkedin.com/in/jack-mcbride-b312bba9/"><img src = "<?php echo base_url('assets/images/linkedin.png')?>"></a></li>
                <li id = "social_icon"><a href = "https://twitter.com/WarPariah"><img src = "<?php echo base_url('assets/images/twitter.png')?>" ></a></li>
                <li id = "social_icon"><a href = "https://www.facebook.com/jack.mcbride.75"><img id = "fb_icon" src = "<?php echo base_url('assets/images/facebook.png')?>"></a></li>
            </div>
        </ul>
    </div>
    </body>
</html>