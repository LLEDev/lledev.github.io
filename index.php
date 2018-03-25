<?php
date_default_timezone_set('Europe/Copenhagen');
$birthTimeStamp = 936144000;
$currentDate = new DateTime(null, new DateTimeZone('Europe/Copenhagen'));
$currentTimeStamp = $currentDate->getTimestamp();
$yearsOld = floor(($currentTimeStamp - $birthTimeStamp) / 60 / 60 / 24 / 365.25);
?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <meta name=”author” content="LLEDev - Lasse Lund-Egmose"/>
    <meta name=”description” content="Udvikler,Full-stack, Website,Webshop,Bootstrap,IT-projekt,IT-hjælp,HTML5,JavaScript,CSS,jQuery,PHP,MySQL,NodeJS,GIT,Android,Docker,Java,Windows,Ubuntu,Linux,Apple" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="https://lledev.com/" />
    <link rel="stylesheet" href="css/animate.min.css" />
    <link rel="stylesheet" href="css/devicon.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <script src="js/jquery.min.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/animations.min.js"></script>
    <title>LLEDev | Full-Stack-udvikling</title>
</head>

<body>
    <div id="container">
        <div id="inner-container">
            <div id="card">
                <div id="avatar">
                    <img src="img/lledev_small.jpg" title="LLEDev" alt="Billede af Lasse Lund-Egmose" />
                </div>
                <div id="top-line">
                    <!--TODO: Multiple languages-->
                </div>
                <h1><span>Har</span>&nbsp;<span>du</span>&nbsp;<span>eller</span>&nbsp;<span>din</span>&nbsp;<span>virksomhed</span>&nbsp;<span>brug</span>&nbsp;<span>for...</span></h1>
                <h1 id="typed" style="text-align:center;"><span>Et website?</span><span>En webshop?</span><span>En hjælpende hånd til det næste IT-projekt?</span></h1>
                <h2><span>Mit</span>&nbsp;<span>navn</span>&nbsp;<span>er</span>&nbsp;<span>Lasse</span>&nbsp;<span>Lund-Egmose</span>&nbsp;<span>og</span>&nbsp;<span>jeg</span>&nbsp;<span>er</span>&nbsp;<span>klar</span>&nbsp;<span>til</span>&nbsp;<span>at</span>&nbsp;<span>hjælpe!</span></h2>
                <hr />
                <p><b>Hvem er jeg?</b><br/>Jeg er en <?php echo $yearsOld; ?>-årig mand bosiddende i Odense. På nuværende tidspunkt studerer jeg på Sct. Knuds Gymnasium i Odense M. Jeg leder i øjeblikket efter job i mit forestående sabbatår.</p>
                <p><b>Full-Stack-udvikler:</b><br/>Jeg har i den seneste årrække arbejdet særdeles meget med IT og programmering. Med et primært fokus på website-udvikling har jeg været vidt omkring &mdash; bl.a. med både PHP- og MySQL-baseret backend-udvikling og Bootstrap- og jQuery-baseret frontend-udvikling af websites.</p>
                <p><b>Skal vi samarbejde om dit eller din virksomheds næste IT-projekt?</b><br/>Tøv ikke med at skrive til mig! &mdash; Enten på mail <a href="mailto:llund-egmose@hotmail.com">llund-egmose@hotmail.com</a> eller ring til mig på tlf. <a href="tel:+4523902119">+45 23 90 21 19</a>.</p>
                <hr />
                <div class="competence-container">
                    <i class="devicon-html5-plain-wordmark"></i>
                    <i class="devicon-javascript-plain"></i>
                    <i class="devicon-css3-plain-wordmark"></i>
                    <i class="devicon-jquery-plain-wordmark"></i>
                    <i class="devicon-bootstrap-plain-wordmark"></i>
                    <i class="devicon-nodejs-plain-wordmark"></i>
                    <i class="devicon-php-plain"></i>
                    <i class="devicon-mysql-plain-wordmark"></i>
                </div>
                <div class="competence-container">
                    <i class="devicon-git-plain-wordmark"></i>
                    <i class="devicon-android-plain"></i>
                    <i class="devicon-docker-plain-wordmark"></i>
                    <i class="devicon-java-plain-wordmark"></i>
                    <i class="devicon-windows8-plain"></i>
                    <i class="devicon-ubuntu-plain-wordmark"></i>
                    <i class="devicon-linux-plain"></i>
                    <i class="devicon-apple-plain"></i>
                </div>
                <hr />
                <footer>
                    <span class="footer-frame">llund-egmose@hotmail.com</span>
                    <span class="footer-frame">+45 23 90 21 19</span>
                    <span class="footer-frame"><a href="https://linkedin.com/in/lledev" target="_blank">LinkedIn</a></span>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>