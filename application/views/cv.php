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
        <div class = "content"> 
            <div class = "header">
                <span class = "typing_text"></span>
                <h2 class = "subtitle">My skills and qualifications.</h2>
                <script>
                    $(function(){
                        $(".typing_text").typed({
                        strings: ["Skills & CV.", 
                        ],
                        typeSpeed: 50,
                        backDelay: 200,
                        });
                    });
                </script>
            </div>
            <div class = "body">
                <div class = "q_div">
                    <h1 class = "qualification_title">University Qualifications: University of Kent (2013-2017)</h1>
                    <ul class = "qualification_list">
                        <li>MSc Advanced Computer Science</li>
                        <li>BSc Computer Science with Artificial Intelligence (First Class Honours)</li>
                    </ul>
                </div>
                <div class = "q_div"> 
                    <h1 class = "qualification_title">College Qualifications: Borden Grammar School (2011-2013)</h1>
                    <ul class = "qualification_list">
                        <li>English Literature and Language (A*)</li>
                        <li>Fine Art (A*)</li>
                        <li>Information Technology (A)</li>
                        <li>Psychology (B)</li>
                    </ul>
                </div>
                <div class = "q_div"> 
                    <h1 class = "qualification_title">GSCE Qualifications: Borden Grammar School (2009-2011)</h1>
                    <ul class = "qualification_list">
                        <li>13 A* - C qualifications including English, Mathematics and Sciences</li>
                    </ul>
                </div>
                <div class = "q_div"> 
                    <h1 class = "qualification_title">Additional Qualifications</h1>
                    <ul class = "qualification_list">
                        <li>Jiu-Jitsu 4th Kyu (Purple Belt) TJJF</li>
                        <li>Full English Driving License</li>
                        <li>First Aid Training (Red Cross)</li>
                    </ul>
                </div>
                <div class = "cv_div">
                    <br>
                    <h1 class = "qualification_title">Curriculum Vitae</h1>
                    <p class = "cv_body">If you are interested in downloading my CV, press the button below.</p>
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
