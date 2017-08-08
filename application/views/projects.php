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
                <h2 class = "subtitle">An archive of my projects.</h2>
                <script>
                    $(function(){
                        $(".typing_text").typed({
                        strings: ["Projects.", 
                        ],
                        typeSpeed: 50,
                        backDelay: 200,
                        });
                    });
                </script>
            </div>
            <div class = "body">
                <div class = "project_div">
                        <h1 class = "category_title">MSc Advanced Computer Science (2016-2017)</h1>
                        <hr>
                        <h2 class = "project_title">Security Analysis of Contiki: The Open Source Operating System for the Internet of Things</h2>
                        <p class = "project_description">For the dissertation topic for my MSc programme in Advanced Computer Science, I am investigating the security of the Contiki IoT operating system. To do so, I have been state-of-the-art static analysis tools for C/C++, such as CodeSonar, FlexeLint and Coverity, with which I have located and patched vulnerabilities in the source code using taint flow and CFG analysis.</p>
                        <p class = "project_description">I have been working on this project alongside a separate research team at Bristol University and an active Contiki developer since January; using the Bitbucket version control system to maintain and report issues. So far, we have discovered and resolved a considerable number of serious bugs, for which we have submitted two CVEs and numerous code updates to the main GitHub repository. This project is part of an ongoing effort to reinforce the security of IoT systems, which is known to be inherently flawed.</p>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/cc26xx-web-demo-graph.png')?>">
                            <div class="desc">A CodeSonar graph displaying bug statistics.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/codesonar_output.png')?>">
                            <div class="desc">Static analysis results from CodeSonar displaying an MQTT bug.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/launchpad-cc2650.jpg')?>">
                            <div class="desc">The TI Launchpad CC2650, a board we used to run network topologies of Contiki devices.</div>
                        </div>
                    </div>
                    <div class = "project_div">
                        <h1 class = "category_title">Government Cybersecurity Internship (2016)</h1>
                        <hr>
                        <h2 class = "project_title">IoT Smart-Lock Security</h2>
                        <p class = "project_description">Shortly after finishing my undergraduate studies, I began working as a researcher on a cybersecurity internship in affiliation with the University of Kent and the UK government. During this time, I researched the security of IoT smart-locks, including the Nokē padlock by füzdesigns, the Bluetooth LE Masterlock, and the Danalock, with the aim to examine them for vulnerabilities, and explore ways to strengthen them. </p>
                        <p class = "project_description">Additionally, I studied the security of classical locking mechanisms by learning the skill of lock picking! During the project I designed and developed an Arduino driven brute-forcer bot capable of exploiting a vulnerability in the manual override  mechanism of the Nokē. This was design using the Autodesk inventor 3D modelling software, and printed using the “Ultimaker” 3D printer in the campus makerspace. A video of the brute-forcer bot cracking the lock can be found <a class = "text_links" href = "https://youtu.be/W0HY21O5uws">here.</a></p>
                        <p class = "project_description">We responsibly disclosed our findings to the manufacturers, who are currently working to patch the vulnerabilities. As part of the project requirements, I submitted a report (hyperlink) documenting my work, and finalised by giving a short talk to members of staff and other interns from universities across the country. We have since prepared and submitted our findings for publication to a high tier international conference on Computer Security. An early draft of the publication can be found on my <a class = "text_links" href = "https://www.researchgate.net/publication/311642455_Earworms_make_bad_passwords_An_analysis_of_the_Noke_smart_lock_manual_override?_iepl%5BviewId%5D=l0TXHydhlMs99rTwEn2xrsH0tJz27JVxGBEj&_iepl%5Bcontexts%5D%5B0%5D=prfhpi&_iepl%5Bdata%5D%5BstandardItemCount%5D=1&_iepl%5Bdata%5D%5BuserSelectedItemCount%5D=0&_iepl%5Bdata%5D%5BtopHighlightCount%5D=0&_iepl%5Bdata%5D%5BstandardItemIndex%5D=1&_iepl%5Bdata%5D%5BstandardItem1of1%5D=1&_iepl%5BtargetEntityId%5D=PB%3A311642455&_iepl%5BinteractionType%5D=publicationTitle">ResearchGate profile</a>.</p>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/brute_forcer.png')?>">
                            <div class="desc">Brute forcer bot 3D modelled & printed, driven by an Arduino Uno.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/brute_forcer_code.png')?>">
                            <div class="desc">Arduino code to run the brute forcer bot.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/new_brute_forcer.jpeg')?>">
                            <div class="desc">Brute forcer bot front view.</div>
                        </div>
                    </div>
                    <div class = "project_div">
                        <h1 class = "category_title">BSc Computer Science with Artificial Intelligence (2013-2016)</h1>
                        <hr>
                        <h2 class = "project_title">Orange Street: IoT Sound Monitoring System</h2>
                        <p class = "project_description">As my dissertation topic for my BSc programme in Computer Science with Artificial Intelligence, I worked on implementing an IoT sound monitoring system for clients based on Orange Street, Canterbury. The street, which is home to several bars and clubs, is known to be busy during the weekdays, prompting residents to request a system to monitor noise levels. As a group of four, we worked on developing microphone sensors to gather sound data, hubs to accumulate and process the data, and a unique “clock”, which served as a physical actuator for 24 hour data visualisation.</p>
                        <p class = "project_description">Alongside this, we had a community website to provide visual data in the form of graphs and charts, which was accessible to all residents of the street. My role in the project was to design and implement the clock, for which I used a NeoPixel Ring - 24 x WS2812 5050 RGB LED and an Adafruit Flora programmed with Arduino code. We used a unique data visualisation method of coloured lights to represent noise levels, with the 24 LEDs representing the 24 hours in a day. Using the clock, the client is able to quickly and seamlessly receive updates on the general sound levels with a glance. I particularly enjoyed this project, as it allowed me to exercise my creativity within a technical context.</p>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/clock_final.jpg')?>">
                            <div class="desc">Final image of the clock device in its 3D modelled case.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/clock_code.png')?>">
                            <div class="desc">Arduino code to run the clock device.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/clock_no_case.jpg')?>">
                            <div class="desc">Clock hardware components.</div>
                        </div>
                    </div>
                    <div class = "project_div">
                        <h1 class = "category_title">Miscellaneous</h1>
                        <hr>
                        <h2 class = "project_title">UK Weather Forecast Tweeter</h2>
                        <p class = "project_description">To develop my knowledge of python and 3rd party APIs, I recently began working on a twitter bot capable of providing weather updates for the city of Canterbury. In its original implementation, the bot was comprised two main scripts: a HTML parser and tweeter. Weather updates would be parsed from the BBC website, formatted, and arranged into tweets to be sent from a bot account. This implementation worked nicely, but was relatively limited in terms of extensibility.</p>
                        <p class = "project_description">In its current iteration, I have refactored it to be more object oriented, and intend to add a queryable interface: in which twitter users can tweet it with requests, and subsequently receive weather updates based on the specified parameters, and locations in the UK. To do so, i’m using the met office API, as well as some natural language processing to handle dissecting requests. Fortunately, the met office offer a comprehensive API for handling a variety of requests, so I am very excited to see what this project will eventually become! As a current WIP, I will be releasing more updates as it nears completion.</p>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/weatherbot_tweets.png')?>">
                            <div class="desc">Hourly tweets sent from the Canterbury weather bot.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/weather_bot_python.png')?>">
                            <div class="desc">Python code for the Canterbury weather bot.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/canterbury_weatherbot.png')?>">
                            <div class="desc">Twitter profile page.</div>
                        </div>
                        <hr>
                        <h2 class = "project_title">C++ Keylogger</h2>
                        <p class = "project_description">As part of my exploration of offensive cybersecurity, I took up a C++ course on developing a Windows key logger as found on Udemy. In around 35 lectures worth of material, I learnt how to construct a fully functioning key logger - which is not only incredibly sensitive, but also imperceptible. Using calls to the Windows API to “hook” into the key presses of a user’s keyboard, the program stealthily logs activity and sends the data via email to a specified address. To avoid detection, the running script does not warrant the opening of a terminal window, and so can be seamlessly loaded onto a USB device and run automatically.</p>
                        <p class = "project_description"> I took up this project out of sheer curiosity for how such devices work, as well as for educating myself about wider cyber threats. Furthermore, it helped me build upon my current knowledge of the C++ programming language, as a continuation of the recent module I took at masters level. For anyone with a strong background in programming and a genuine interest in cybersecurity, I would recommend this <a class = "text_links" href = "https://www.udemy.com/how-to-create-an-advanced-keylogger-from-scratch-for-windows/learn/v4/overview.">course.</a></p>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/keylogger_output.png')?>">
                            <div class="desc">Email output of captured keystrokes.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/keylogger_code.png')?>">
                            <div class="desc">C++ code for the keylogger.</div>
                        </div>
                        <hr>
                        <h2 class = "project_title">Python Fractals</h2>
                        <p class = "project_description">Having a keen interest in programming and visual art, a natural crossover project was found when I stumbled across the “Fractals in Python” course on Udemy. In  the 4.5 hours of lecture material it offered, I explored a vast array of basic and advanced mathematical concepts and fractal geometry, including L-systems, the Cantor set, and how to generate well known fractals such as the Serpinski Triangle/Arrowhead, and the Dragon Fractal found in the Jurassic Park novel. Additionally, the course touched on aspects of cellular automata, and concluded with a lecture on the Game of Life.</p>
                        <p class = "project_description">The course primarily taught the mathematical underpinnings of fractal geometry, as well as how to generate them programmatically using Python. This was a fun and relaxed project, and a nice departure from concepts I am already familiar with. It helped build upon my already firm understanding on the Python programming language, and gave me an appreciation for just how powerful some of the smaller scripts can be! The course can be found <a class = "text_links" href = "https://www.udemy.com/fractal-geometry-in-python/learn/v4/overview.">here.</a></p>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/jp_dragon_fractal.png')?>">
                            <div class="desc">JP Dragon fractal generated using Python.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/serpinski_arrow.png')?>">
                            <div class="desc">Serpinski arrowhead fractal.</div>
                        </div>
                        <div class = "project_gallery">
                            <img src="<?php echo base_url('assets/images/gol.png')?>">
                            <div class="desc">Game of Life cellular automata simulation.</div>
                        </div>
                    </div>
                    <div class = "git_div">
                        <p class = "git_link">To see the code for my projects, check out my git @</p>
                        <p class = "git_link"><a class = "text_links" href = "https://github.com/jackmcbride">https://github.com/jackmcbride</a></p>
                    </div>
            </div>
            
        </div>
        <?php include 'copyright.php';?>
    </body>
</html>
