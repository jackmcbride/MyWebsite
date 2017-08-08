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
        <div class = "banner"></div>
        <div class = "content">
                <div class = "body">
                    <div class = "header_home">
                        <span class = "typing_text"></span> 
                        <h2 class = "subtitle">Computer Scientist. Security Researcher. Programmer.</h2>
                    </div>
                    <script>
                        $(function(){
                            $(".typing_text").typed({
                            strings: ["Jack McBride.",
                            ],
                            typeSpeed: 50,
                            backDelay: 200,
                            });
                        });
                    </script>
                    <p class = "intro_body">
                    Hello! My name is Jack McBride, and I’m an Advanced Computer Science student at the <a class="text_links" href="https://www.kent.ac.uk/">University of Kent</a> in Canterbury. I studied undergraduate <a class = "text_links" href = https://www.kent.ac.uk/courses/undergraduate/129/computer-science-artificial-intelligence> BSc Computer Science with Artificial Intelligence </a> from 2013 to summer 2016, and graduated with a first class degree with honours. Since then, I have embarked on a Masters course in <a href = "https://www.kent.ac.uk/courses/postgraduate/246/advanced-computer-science#overview" class = "text_links">Advanced Computer Science</a>, and hope to graduate in September 2017.
                    </p>
                    <p class = "intro_body">
                        I'm passionate about cybersecurity. My current interests in the field include system security, privacy, IoT security, cryptography and the dark web. I'm currently looking for employment in the areas of cybersecurity and ethical hacking, and would be very pleased to hear about graduate opportunities in the field!
                    </p>
                    <p class = "intro_body">
                        My MSc dissertation is based on a security analysis of the Contiki operating system, which I am conducting in collaboration with the University of Bristol. My work involves using state-of-the-art static analysis tools to check the source code for vulnerabilities, and then providing patches whilst collaborating with other researchers. So far, we have raised over 30 issues, and submitted two vulnerabilities to the CVE database.
                        <br>
                        <br>
                        My Advanced Computer Science MSc modules include:
                    </p>
                        <ul class = "msc_modules">
                            <li> <a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO871">Advanced Java &</a> <a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO889">C++ Programming</a></li>
                            <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO899">System Security</a></li>
                            <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO876">Computer Security</a></li>
                            <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO892">Advanced Network Security</a></li>
                            <li><a class = "text_links" href = "https://www.kent.ac.uk/courses/modules/module/CO834">Trust, Security and Privacy Management</a></li>
                        </ul>
                        <br>
                    <p class = "intro_body">
                        Since starting my university education, I've been given the opportunity to conduct leading security research at a world class institution. During this time, I have worked on a variety of group projects, including my final year dissertation topic; for which we fully developed an IoT sound monitoring system for a real client. 
                    </p>
                    <p class = "intro_body">    
                        To see my research publications, visit my profile on Research Gate <a class="text_links" href = "https://www.researchgate.net/profile/Jack_Mcbride3">here.</a>
                    </p>
                    <h2 class = "subtitle2">Contact</h2>
                    <p class = "contact_body">
                        You can reach me through my personal & academic email accounts:<br><br>
                        Academic: <a class="text_links" href = "mailto:jlgm2@kent.ac.uk">jlgm2@kent.ac.uk</a><br>
                        Personal: <a class="text_links" href = "mailto:warauthor@gmail.com">warauthor@gmail.com</a> 
                    </p>
                </div>
        </div>
        <?php include 'copyright.php';?> 
    </body>
</html>
