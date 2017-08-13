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
        <div class = "banner_cv">
            <h1 class = "title">Skills & CV</h1>
            <span class = "typing_text"></span>
        </div>
        <div class = "content"> 
            <div class = "header">
                <script>
                    $(function(){
                        $(".typing_text").typed({
                        strings: ["My qualifications.", 
                        ],
                        typeSpeed: 20,
                        backDelay: 200,
                        });
                    });
                </script>
            </div>
            <div class = "body">
                <h2 class = "subtitle2">About</h2>
                <p class = "intro_body">This page lists my current skills and qualifications to date. If you wish to access any of my transcripts, including degree certification, grades or results, please don't hesitate to contact me via email.</p>
                <div class = "q_div">
                    <h2 class = "subtitle2">University Degree</h2>
                    <h2 class = "subtitle2">University of Kent (2013-2017)</h2>
                    <p class = "intro_body">
                        I was accepted into the University of Kent in 2013 with the scholarship of Academic Excellence, which was awarded to me based on my A-Level achievements. This granted me a small financial bursary each year I achieved a grade of 2:1 or above.
                    </p>
                    <ul class = "qualification_list">
                        <li>MSc Advanced Computer Science</li>
                        <li>BSc Computer Science with Artificial Intelligence (First Class Honours)</li>
                    </ul>
                </div>
                <div class = "q_div">
                    <h2 class = "subtitle2">A-Levels</h2>
                    <h2 class = "subtitle2">Borden Grammar School (2011-2013)</h2>
                    <p class = "intro_body">
                        I completed my A-Levels with Borden Grammar School in 2013, having been awarded the WA Claydon award for English Literature and Language, and the School Prize for Fine Art. 
                    </p>
                    <ul class = "qualification_list">
                        <li>English Literature and Language (A*)</li>
                        <li>Fine Art (A*)</li>
                        <li>Information Technology (A)</li>
                        <li>Psychology (B)</li>
                    </ul>
                </div>
                <div class = "q_div">
                    <h2 class = "subtitle2">GCSE</h2>
                    <h2 class = "subtitle2">Borden Grammar School (2009-2011)</h2>
                    <ul class = "qualification_list">
                        <li>13 A* - C qualifications including English, Mathematics and Sciences</li>
                    </ul>
                </div>
                <div class = "q_div"> 
                    <h2 class = "subtitle2">Miscellaneous</h2>
                    <ul class = "qualification_list">
                        <li>Jiu-Jitsu 4th Kyu (Purple Belt) TJJF</li>
                        <li>Full English Driving License</li>
                        <li>First Aid Training (Red Cross)</li>
                    </ul>
                </div>
                <div class = "cv_div">
                    <h2 class = "subtitle2">Curriculum Vitae</h2>
                    <p class = "intro_body">If you are interested in viewing my CV, press the button below to download a pdf.</p>
                    <br>
                    <a href="<?php echo base_url('assets/cv/j_mcbride_CV.pdf') ?>">
							<button class="btn_primary" type="button">Download CV</button>
					</a>
                </div>
            </div>
        </div>
        <?php include 'copyright.php';?>
    </body>
</html>
