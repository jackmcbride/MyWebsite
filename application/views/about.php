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
        <div class = "banner_about">
            <h1 class = "title">About me</h1>
            <span class = "typing_text"></span>
        </div>
        <div class = "content">
            <div class = "header">
                <script>
                    $(function(){
                        $(".typing_text").typed({
                        strings: ["A little about myself.",
                        ],
                        typeSpeed: 30,
                        backDelay: 100,
                        });
                    });
                </script>
            </div>
            <div class = "body">
                <h2 class = "subtitle2">About</h2>
                <p class = "intro_body">
                        I grew up in the seaside village of Minster, on the Isle of Sheppey, Kent. Around the age of seven I was exposed to my first computer: an old Time PC ("Why have an ordinary PC, when you can have a Time machine!") kept by my parents for letters, word documents and the odd game. I keep some very fond memories of playing “Serious Sam”, “Age of Empires II” and the first game of the “Unreal Tournament” franchise, which I would say have heavily influenced my keen interest in gaming and computing today! 
                    </p>
                <div class = "img_div">
                    <figure>
                        <img id = "about_me_pics" class = "me_canterbury_pic" src="<?php echo base_url('assets/images/me_canterbury_2017.jpg')?>">
                        <figcaption class = "caption_text">Westgate gardens, Canterbury.</figcaption>
                    </figure>
                </div>
                <h2 class = "subtitle2">Jiu-Jitsu</h2>
                <p class = "intro_body">
                    I’ve been a part of the University of Kent Jiu-Jitsu Society (TJJF) since 2013, taking up responsibilities as the Safety Officer (2015-2016) and President (2016-2017). We practice a style known as "Shorinji Kan Jiu Jitsu", incorporating an extensive syllabus of throws, joint locks, strike maneuvers and weapon defences. I am currently graded at purple belt level (4th kyu). I'm also interested in a range of other martial arts, such as Judo and Aikido, and am always on the lookout for new clubs opening in the Kent region.
                </p>
                <div class = "img_div">
                    <figure>
                        <img id = "about_me_pics" class = "jj_squad_pic" src="<?php echo base_url('assets/images/jiu_jitsu_team.jpg')?>">
                        <figcaption class = "caption_text">University of Kent Jiu-Jitsu squad photo.</figcaption>
                    </figure>
                </div>
                <h2 class = "subtitle2">Hobbies</h2>
                <p class = "intro_body">
                    In my free time, I enjoy sketching, reading, and making music. 
                    I’ve played guitar for around 9 years: a blend of classical influences, movie and game soundtracks, spanish guitar, bossanova and occasionally, some blues. 
                    Soon I’ll get round to recording a few covers which I’ll post <a class="text_links" href = "https://www.youtube.com/channel/UC9kU8Hw9sVl_xvkyVQk-fkA">here</a>. 
                    I’m also big into electronic music, and hope to get started with making my own beats, or networking with those that do. My listening habits are constantly changing on <a class = "text_links" href="spotify:user:1112171743">spotify</a>. 
                </p>
                <p class = "intro_body">
                    I'm an avid reader of fiction. When I'm not occupied with academic papers, I like to indulge in science-fiction, the postmodern, and classic literature. To catch up with what I'm reading, check out my <a class = "text_links" href = "https://www.goodreads.com/user/show/63241851-jack-mcbride">goodreads</a>. Currently I'm reading "Do Androids Dream of Electric Sheep" by Philip K. Dick, "American Gods" by Neil Gaiman, and "Psycho" by Robert Bloch.
                </p>
                <div class = "img_div">
                    <figure>
                            <img id = "about_me_pics" class = "me_guitar_pic" src="<?php echo base_url('assets/images/me_guitar.jpg')?>">
                            <figcaption class = "caption_text">Playing guitar in the campus makerspace.</figcaption>
                    </figure>
                </div>
                <h2 class = "subtitle2">Volunteering</h2>
                <p class = "intro_body">
                    I help contribute towards projects run by non-profit organisations such as <a class = "text_links" href = "https://www.torproject.org/"> The Tor Project.</a>
                <p class = "intro_body">
                    To help contribute, I recently began running two Raspberry Pi 3 devices as non-exit relay nodes, which are used in forming circuits of relay nodes for secure, encrypted connections to be made. So far, it's been a great learning experience, and I would recommend it to anyone with a computer to spare! To monitor the performance of my nodes, check out their Atlas stats<a class = "text_links" href = "https://atlas.torproject.org/#details/344CF5BC2963AF2EEC5437F7B2DD83498E7EE5A4"> here.</a>
                </p>
                <p class = "intro_body">
                    To find out more, contact me on social media or drop me an email!
                </p>
            </div>
        </div>
        <?php include 'copyright.php';?>
    </body>
</html>
