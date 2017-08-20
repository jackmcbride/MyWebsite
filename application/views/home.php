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
        <div class = "banner_home">
            <h1 class = "home_title">Jack McBride</h1>
            <span class = "typing_text"></span>
        </div>
        <div class = "content">
            <div class = "header">
                <script>
                    $(function(){
                        $(".typing_text").typed({
                        strings: ["MSc Computer Science.",
                        ],
                        typeSpeed: 20,
                        backDelay: 200,
                        });
                    });
                </script>
            </div>
            <div class = "body">
                <div class = "profile_div">
                    <span class = "profile_pic"></span>
                </div>
                <h2 class = "subtitle2">Welcome!</h2>
                <p class = "intro_body">
                    Hello! Thank you for visiting my website. My name is Jack Lucas Gilmore McBride and I’m an MSc student in <a href = "https://www.kent.ac.uk/courses/postgraduate/246/advanced-computer-science#overview" class = "text_links">Advanced Computer Science</a>, at the <a class="text_links" href="https://www.kent.ac.uk/">University of Kent</a> in Canterbury. I studied my undergraduate in <a class = "text_links" href = https://www.kent.ac.uk/courses/undergraduate/129/computer-science-artificial-intelligence> BSc Computer Science with Artificial Intelligence </a> from 2013-2016, graduating with a first class degree with honours.
                </p>
                <p class = "intro_body">
                    I'm passionate about Cybersecurity and Software Development, and have been an avid programmer for around 5 years. During this time, I've written programs in Java, C/C++ and Python, tried my hand at some of the more peculiar languages such as Erlang, and worked on a handful of web-based projects, such as this website. I've also taught Java to first year programming students at the University of Kent, during stage three of my undergraduate degree and throughout my masters. 
                </p>
                <p class = "intro_body">
                    My MSc dissertation is based on a security analysis of the Contiki operating system. It involves using cutting edge static analysis tools to examine the source code for vulnerabilities, reporting on them, and providing fixes. So far, we have raised over 30 issues, issued several patches and submitted two vulnerabilities to the CVE database.
                </p>
                <h2 class = "subtitle2">University Modules</h2>
                    <ul class = "msc_modules">
                        <li> <a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO871">Advanced Java &</a> <a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO889">C++ Programming</a></li>
                        <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO899">System Security</a></li>
                        <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO876">Computer Security</a></li>
                        <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO892">Advanced Network Security</a></li>
                        <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO834">Trust, Security and Privacy Management</a></li>
                    </ul>
                <h2 class = "subtitle2">Contact</h2>
                <p class = "intro_body">
                    You can reach me through my either my personal & academic email accounts:
                <div class = "contact_field">
                    <p class = "intro_body">
                        Academic Email:  <a class="text_links" href = "mailto:jlgm2@kent.ac.uk">jlgm2@kent.ac.uk</a><br><br>
                        Personal Email:  <a class="text_links" href = "mailto:warauthor@gmail.com">warauthor@gmail.com</a> 
                    </p>
                </div>
                </p>
            </div>
        </div>
        <?php include 'copyright.php';?> 
    </body>
</html>
