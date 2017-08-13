<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type = "text/css" href="<?php echo base_url('assets/css/home.css') ?>">
        <script src="<?php echo base_url('assets/js/jquery-3.2.1.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/typed.js-master/js/typed.js') ?>"></script>
    </head>
    <body>
        <?php include 'menubar.php';?>
        <div class = "banner_blog">
            <h1 class = "title">Blog</h1>
            <span class = "typing_text"></span>
        </div>
        <div class = "content">
                <div class = "body">
                    <div class = "header_home">
                    </div>
                    <script>
                        $(function(){
                            $(".typing_text").typed({
                            strings: ["My thoughts, in words.",
                            ],
                            typeSpeed: 50,
                            backDelay: 200,
                            });
                        });
                    </script>
                    <h2 class = "subtitle2">About</h2>
                    <p class = "intro_body">
                    Welcome to my blog page. This is where I will be posting about the tech industry; including my thoughts on up and coming technologies, cybersecurity and hacking, and tech involvement in politics. I will consider making this section a standalone site in future, but that's dependent upon how I get on. Stay tuned!
                    </p>
                    <div class = "blog_div">
                        <!--- Include table of contents, topic list etc. Date and topic in heading, easily accessible topics list...-->
                    </div>
                </div>
        </div>
        <?php include 'copyright.php';?> 
    </body>
</html>
