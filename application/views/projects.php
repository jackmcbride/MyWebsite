<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type = "text/css" href="<?php echo base_url('assets/css/home.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/js/fancybox-master/dist/jquery.fancybox.min.css')?>"/>
        <script src="<?php echo base_url('assets/js/jquery-3.2.1.js') ?>"></script>
        <script src="<?php echo base_url('assets/js/fancybox-master/dist/jquery.fancybox.min.js')?>"></script>
        <script src="<?php echo base_url('assets/js/typed.js-master/js/typed.js') ?>"></script>
    </head>
    <body>
        <?php include 'menubar.php';?>
        <div class = "banner_projects">
            <h1 class = "title">Projects</h1>
            <span class = "typing_text"></span>
        </div>
        <div class = "content"> 
            <div class = "header">
                <script>
                    $(function(){
                        $(".typing_text").typed({
                        strings: ["My projects.", 
                        ],
                        typeSpeed: 20,
                        backDelay: 200,
                        });
                    });
                </script>
            </div>
            <div class = "body">
                <h2 class = "subtitle2">About</h2>
                <p class = "intro_body">Below are a selection of projects I've worked on; some of which were for university assignments, and others for my personal development and enjoyment. Not everything I have built is listed here however! To see more work, visit my <a class = "text_links" href = "https://github.com/jackmcbride">GitHub.</a></p>
                <div class = "project_div">
                    <h2 class = "subtitle2">MSc Advanced Computer Science</h2>
                    <h2 class = "subtitle3">Security Analysis of Contiki: The Open Source Operating System for the Internet of Things</h2>
                    <p class = "intro_body">For my dissertation, I am investigating the security of the Contiki IoT operating system. I am using state-of-the-art static analysis tools for C/C++, such as CodeSonar, FlexeLint and Coverity, to locate and patch vulnerabilities in the Contiki source code using taint flow and CFG analysis.</p>
                    <p class = "intro_body">I have been working on this project alongside a separate research team at Bristol University and an active Contiki developer since January; using the Bitbucket version control system to maintain and report issues. So far, we have discovered and resolved a considerable number of serious bugs, for which we have submitted two CVEs and numerous code updates to the main GitHub repository. We are also looking at how certain exploits can affect wireless sensor networks, using the TI CC2650 Launchpad for nodes during testing. This project is part of an ongoing effort to reinforce IoT security, which at present is inherently flawed.</p>
                    <div class = "project_images">
                        <a data-fancybox data-caption="CodeSonar bug statistics graph output." href = "<?php echo base_url('assets/images/cc26xx-web-demo-graph.jpg')?>" ><img src="<?php echo base_url('assets/images/cc26xx-web-demo-graph.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="CodeSonar code analysis of mqtt.c." href = "<?php echo base_url('assets/images/codesonar_output.jpg')?>" ><img src="<?php echo base_url('assets/images/codesonar_output.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Texas Instruments CC2650 Launchpad." href = "<?php echo base_url('assets/images/launchpad-cc2650.jpg')?>" ><img src="<?php echo base_url('assets/images/launchpad-cc2650.jpg')?>"  alt=""/></a>
                    </div>
                </div>
                <div class = "project_div">
                    <h2 class = "subtitle2">UK Government Cybersecurity Internship</h2>
                    <h2 class = "subtitle3">IoT Smart-Lock Security</h2>
                    <p class = "intro_body">Shortly after finishing my undergraduate studies, I began working as a researcher on a cybersecurity internship in affiliation with the University of Kent and the UK government. During this time, I researched the security of IoT smart-locks, including the Nokē padlock by füzdesigns, the Bluetooth LE Masterlock, and the Danalock, with the aim to examine them for vulnerabilities, and explore ways to strengthen them. </p>
                        <p class = "intro_body">Additionally, we laucnhed a user study to measure code habits; the results showing a remarkable tendency towards short and easy exploited codes. To test this theory, I designed and developed an Arduino driven brute-forcer bot capable of cracking codes, which can be seen in action in the video below. It was designed using the Autodesk inventor 3D modelling software, and 3D printed using the “Ultimaker” 3D printer in military green in the campus makerspace.</p>
                        <p class = "intro_body">We responsibly disclosed our findings to the manufacturers, who are currently working to patch the vulnerabilities. As part of the project requirements, I submitted a report documenting my work, and finalised by giving a short talk to members of staff and other interns from universities across the country. We have since prepared and submitted our findings for publication to a high tier international conference on Computer Security. An early draft of the publication can be found <a class = "text_links" href = "https://goo.gl/dgfCV6">here</a>.</p>
                    <div class = "project_images">
                        <a data-fancybox data-caption="Brute forcer bot 3D modelled & printed, driven by an Arduino Uno." href = "<?php echo base_url('assets/images/brute_forcer.jpg')?>" ><img src="<?php echo base_url('assets/images/brute_forcer.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Arduino code to run the brute forcer bot." href = "<?php echo base_url('assets/images/brute_forcer_code.jpg')?>" ><img src="<?php echo base_url('assets/images/brute_forcer_code.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Brute forcer bot front view." href = "<?php echo base_url('assets/images/new_brute_forcer.jpeg')?>" ><img src="<?php echo base_url('assets/images/new_brute_forcer.jpeg')?>"  alt=""/></a>
                    </div>
                    <iframe width="350" height="270" style = "display: block; margin: 0 auto;"src="https://www.youtube.com/embed/W0HY21O5uws" allowfullscreen></iframe>
                </div>
                <div class = "project_div">
                    <h2 class = "subtitle2">BSc Computer Science with Artificial Intelligence</h2>
                    <h2 class = "subtitle3">Orange Street: IoT Sound Monitoring System</h2>
                    <p class = "intro_body">As my dissertation topic for my BSc programme in Computer Science with Artificial Intelligence, I worked on implementing an IoT sound monitoring system for clients based on Orange Street, Canterbury. The street, which is home to several bars and clubs, is known to be busy during the weekdays, prompting residents to request a system to monitor noise levels. As a group of four, we worked on developing microphone sensors to gather sound data, hubs to accumulate and process the data, and a unique “clock”, which served as a physical actuator for 24 hour data visualisation.</p>
                    <p class = "intro_body">Alongside this, we had a community website to provide visual data in the form of graphs and charts, which was accessible to all residents of the street. My role in the project was to design and implement the clock, for which I used a NeoPixel Ring - 24 x WS2812 5050 RGB LED and an Adafruit Flora programmed with Arduino code. We used a unique data visualisation method of coloured lights to represent noise levels, with the 24 LEDs representing the 24 hours in a day. Using the clock, the client is able to quickly and seamlessly receive updates on the general sound levels with a glance. I particularly enjoyed this project, as it allowed me to exercise my creativity within a technical context.</p>
                    <div class = "project_images">
                        <a data-fancybox data-caption="The final clock design, complete with 3D printed case." href = "<?php echo base_url('assets/images/clock_final.jpg')?>" ><img src="<?php echo base_url('assets/images/clock_final.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Arduino code to run the clock." href = "<?php echo base_url('assets/images/clock_code.jpg')?>" ><img src="<?php echo base_url('assets/images/clock_code.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Clock hardware components." href = "<?php echo base_url('assets/images/clock_no_case.jpg')?>" ><img src="<?php echo base_url('assets/images/clock_no_case.jpg')?>"  alt=""/></a>
                    </div>
                </div>
                <div class = "project_div">
                    <h2 class = "subtitle2">Miscellaneous</h2>
                    <h2 class = "subtitle3">UK Weather Forecast Tweeter</h2>
                    <p class = "intro_body">To develop my knowledge of python and API programming, I recently began working on a twitter bot capable of providing weather updates for the city of Canterbury. In its original implementation, the bot was comprised two main scripts: a HTML parser and tweeter. Weather updates would be parsed from the BBC website, formatted, and arranged into tweets to be sent from a bot account. This implementation worked nicely, but was relatively limited in terms of extensibility.</p>
                    <p class = "intro_body">In its current iteration, I have refactored it to be more object oriented, and intend to add a queryable interface: in which twitter users can tweet it with requests, and subsequently receive weather updates based on the specified parameters, and locations in the UK. To do so, i’m using the met office API, as well as some natural language processing to handle dissecting requests. Fortunately, the met office offer a comprehensive API for handling a variety of requests, so I am very excited to see what this project will eventually become! As a current WIP, I will be releasing more updates as it nears completion.</p>
                    <div class = "project_images">
                        <a data-fancybox data-caption="Tweet feed for the Twitter weatherbot." href = "<?php echo base_url('assets/images/weatherbot_tweets.jpg')?>" ><img src="<?php echo base_url('assets/images/weatherbot_tweets.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Arduino code to run the Twitter weatherbot." href = "<?php echo base_url('assets/images/weather_bot_python.jpg')?>" ><img src="<?php echo base_url('assets/images/weather_bot_python.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Twitter profile." href = "<?php echo base_url('assets/images/canterbury_weatherbot.jpg')?>" ><img src="<?php echo base_url('assets/images/canterbury_weatherbot.jpg')?>"  alt=""/></a>
                    </div>
                    <h2 class = "subtitle3">C++ Keylogger</h2>
                    <p class = "intro_body">As part of my exploration of offensive cybersecurity, I took up a C++ course on developing a Windows key logger as found on Udemy. In around 35 lectures worth of material, I learnt how to construct a fully functioning key logger - which is not only incredibly sensitive, but also imperceptible. Using calls to the Windows API to “hook” into the key presses of a user’s keyboard, the program stealthily logs activity and sends the data via email to a specified address. To avoid detection, the running script does not warrant the opening of a terminal window, and so can be seamlessly loaded onto a USB device and run automatically.</p>
                    <p class = "intro_body"> I took up this project out of sheer curiosity for how such devices work, as well as for educating myself about wider cyber threats. Furthermore, it helped me build upon my current knowledge of the C++ programming language, as a continuation of the recent module I took at masters level. For anyone with a strong background in programming and a genuine interest in cybersecurity, I would recommend this <a class = "text_links" href = "https://www.udemy.com/how-to-create-an-advanced-keylogger-from-scratch-for-windows/learn/v4/overview.">course.</a></p>
                    <div class = "project_images">
                        <a data-fancybox data-caption="Email output of captured keystrokes, tested on my pc." href = "<?php echo base_url('assets/images/keylogger_output.jpg')?>" ><img src="<?php echo base_url('assets/images/keylogger_output.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="C++ code for the keylogger." href = "<?php echo base_url('assets/images/keylogger_code.jpg')?>" ><img src="<?php echo base_url('assets/images/keylogger_code.jpg')?>"  alt=""/></a>
                    </div>
                    <h2 class = "subtitle3">Python Fractal Geometry</h2>
                    <p class = "intro_body">Having a keen interest in programming and visual art, a natural crossover project was found when I stumbled across the “Fractals in Python” course on Udemy. In  the 4.5 hours of lecture material it offered, I explored a vast array of basic and advanced mathematical concepts and fractal geometry, including L-systems, the Cantor set, and how to generate well known fractals such as the Serpinski Triangle/Arrowhead, and the Dragon Fractal found in the Jurassic Park novel. Additionally, the course touched on aspects of cellular automata, and concluded with a lecture on the Game of Life.</p>
                    <p class = "intro_body">The course primarily taught the mathematical underpinnings of fractal geometry, as well as how to generate them programmatically using Python. This was a fun and relaxed project, and a nice departure from concepts I am already familiar with. It helped build upon my already firm understanding on the Python programming language, and gave me an appreciation for just how powerful some of the smaller scripts can be! The course can be found <a class = "text_links" href = "https://www.udemy.com/fractal-geometry-in-python/learn/v4/overview.">here.</a></p>
                    <div class = "project_images">
                        <a data-fancybox data-caption="Dragon fractal from Jurassic Park." href = "<?php echo base_url('assets/images/jp_dragon_fractal.jpg')?>" ><img src="<?php echo base_url('assets/images/jp_dragon_fractal.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Serpinski arrowhead fractal." href = "<?php echo base_url('assets/images/serpinski_arrow.jpg')?>" ><img src="<?php echo base_url('assets/images/serpinski_arrow.jpg')?>"  alt=""/></a>
                        <a data-fancybox data-caption="Game of Life cellular automata simulation." href = "<?php echo base_url('assets/images/gol.jpg')?>" ><img src="<?php echo base_url('assets/images/gol.jpg')?>"  alt=""/></a>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'copyright.php';?>
    </body>
</html>
