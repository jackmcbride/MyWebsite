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
                <h2 class = "subtitle">A little about who I am & what I do.</h2>
                <script>
                    $(function(){
                        $(".typing_text").typed({
                        strings: ["About me.",
                        ],
                        typeSpeed: 50,
                        backDelay: 200,
                        });
                    });
                </script>
            </div>
            <div class = "body">
                <p class = "intro_body">
                        I grew up in the seaside village of Minster, on the Isle of Sheppey. At the tender age of seven I was exposed to my first computer: an old Time PC ("Why have an ordinary PC, when you can have a Time machine!") kept by my parents for letters, word documents and the odd game. I have some very fond memories of playing “Serious Sam”, “Age of Empires” and the first “Unreal Tournament” games, which I would say have heavily influenced my keen interest in computing today! 
                    </p>
                <div class = "img_div">
                    <figure>
                        <img id = "about_me_pics" class = "me_canterbury_pic" src="<?php echo base_url('assets/images/me_canterbury_2017.jpg')?>">
                        <figcaption class = "caption_text">A summer afternoon spent in Westgate gardens, Canterbury, 2017.</figcaption>
                    </figure>
                </div>
                <p class = "intro_body">
                    During my studies, I have developed a strong interest in computer security and privacy, ethical hacking, cryptography and online anonymity. I’ve competed in a couple of hackathons, contributed material and workshops to the University of Kent Cyber Security Society, and researched IoT security as part of the Computer Security Research Group, focusing on hacking home security, penetration testing and smart lock vulnerabilities.
                </p>
                <p class = "intro_body">
                    Outside of my academic pursuits, I’ve been a part of the University of Kent Jiu-Jitsu Society (TJJF) since 2013, serving as the Safety Officer (2015-2016) and President (2016-2017). We practice a style known as "Shorinji Kan Jiu Jitsu", incorporating an extensive syllabus of throws, joint locks, strike maneuvers and weapon defences. I am currently graded at purple belt level (4th kyu). I'm also interested in a range of other martial arts, such as Judo and Aikido, and am always on the lookout for new clubs opening in the Kent region.
                </p>
                <div class = "img_div">
                    <figure>
                        <img id = "about_me_pics" class = "jj_squad_pic" src="<?php echo base_url('assets/images/jiu_jitsu_team.jpg')?>">
                        <figcaption class = "caption_text">University of Kent Jiu-Jitsu squad photo, winter 2015.</figcaption>
                    </figure>
                </div>
                <p class = "intro_body">
                    In my free time, I enjoy sketching, reading, and making music. 
                    I’ve played guitar for around 9 years: a blend of classical influences, obscure movie and game soundtracks, spanish guitar, bossanova and occasionally, some blues. 
                    Soon i’ll get round to recording a few covers which i’ll post <a class="text_links" href = "https://www.youtube.com/channel/UC9kU8Hw9sVl_xvkyVQk-fkA">here</a>. 
                    I’m also big into electronic music, and hope to get started with making my own beats, or networking with those that do. My listening habits are constantly changing on <a class = "text_links" href="spotify:user:1112171743">spotify</a>. 
                </p>
                <p class = "intro_body">
                    I'm an avid reader of fiction. When I'm not occupied with academic papers, I like to indulge in science fiction, the postmodern, and classic literature. To catch up with what i'm reading, check out my <a class = "text_links" href = "https://www.goodreads.com/user/show/63241851-jack-mcbride">goodreads</a>. Currently in my sights is "Do Androids Dream of Electric Sheep" by Philip K. Dick, "American Gods" by Neil Gaiman, and "Psycho" by Robert Bloch.
                </p>

                <div class = "img_div">
                    <figure>
                            <img id = "about_me_pics" class = "me_guitar_pic" src="<?php echo base_url('assets/images/me_guitar.jpg')?>">
                            <figcaption class = "caption_text">Playing guitar in the campus makerspace, 2016.</figcaption>
                    </figure>
                </div>
                <p class = "intro_body">
                    I participate in projects run by non-profit organisations such as <a class = "text_links" href = "https://www.torproject.org/"> The Tor Project.</a> Tor is a service which provides anonymity and digital safety to many censorship burdened cultures worldwide, so I am happy to provide small contributions of my own. 
                <p class = "intro_body">
                    To help contribute, I recently began running two Raspberry Pi 3 devices as non-exit relay nodes: a task which for a minimal amount of time and money can provide a helping hand. See the Atlas stats of my nodes <a class = "text_links" href = "https://atlas.torproject.org/#details/344CF5BC2963AF2EEC5437F7B2DD83498E7EE5A4"> here.</a>
                </p>
                <p class = "intro_body">
                    I also keep up to date with cryptocurrency forums, and am part of the team working on <a class = "text_links" href = "https://archain.org"> archain: a de-centralised archive for the internet inside a cryptocurrency.</a> 
                    <br>
                </p>
                <p class = "intro_body">
                    I am currently very excited about the future possibilities the blockchain will bring to computing! In future programming projects, I intend to develop applications for it. 
                </p>
            </div>
        </div>
        <?php include 'copyright.php';?>
    </body>
</html>
