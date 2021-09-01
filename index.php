<?php
$year = $_GET['year'];
$bg = $_GET['bg'];
if ($year == '' or (int)$year < 2022){
    $year = 2022;
}
if ($bg == '' or (int)$bg > 10){
    $bg = rand(1,10);
}
?>
﻿<html>
<head>
    <title><?=$year?>普通高中学业水平考试 - Nation College Entrance Exam</title>
    <link rel="icon" href="./favicon.ico" type="image/x-icon"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="./assets/css/main.css"  />
    <style type="text/css">
        #bg:after {
            -moz-transform: scale(1.125);
            -webkit-transform: scale(1.125);
            -ms-transform: scale(1.125);
            transform: scale(1.125);
            -moz-transition: -moz-transform 0.325s ease-in-out, -moz-filter 0.325s ease-in-out;
            -webkit-transition: -webkit-transform 0.325s ease-in-out, -webkit-filter 0.325s ease-in-out;
            -ms-transition: -ms-transform 0.325s ease-in-out, -ms-filter 0.325s ease-in-out;
            transition: transform 0.325s ease-in-out, filter 0.325s ease-in-out;
            background-image: url("/images/bg<?=$bg?>.png");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            z-index: 1;
        }
    </style>
    <noscript><link rel="stylesheet" href="./assets/css/noscript.css" /></noscript>
    <style>
        #ncee-box h1 {
            letter-spacing: 3px;
            font-weight: 500;
            color: #fff;
        }
        #ncee-time {
            display: flex;
            flex-direction: row;
            line-height: 50px;
        }
        #ncee-time span {
            font-size: 20px;
            color: #fff;
        }
        #ncee-time strong {
            text-align: center;
            margin-left: 20px;
            background-color: #3f5174;
            border-radius: 10px;
            width: 70px;
            height: 50px;
            display: block;
        }
    </style>
</head>
<body onselectstart="return false" oncontextmenu=self.event.returnValue=false>
<!-- BGM -->
<!--
<audio src="./back.mp3" autoplay="autoplay" loop="loop"></audio>
-->
<!-- Wrapper -->
<div id="wrapper">

    <!-- Header -->
    <header id="header">
        <div class="logo">

            <span class="icon fa-diamond"><font size="5"><?=$year?></font></span>
        </div>
        <div class="content">
            <div id="ncee-box" class="inner">
                <h2>距离高考，还有</h2>
                <div id="ncee-time">
                    <span id="day">**天</span>
                    <strong><span id="hour">**时</span></strong>
                    <strong><span id="minute">**分</span></strong>
                    <strong><span id="second">**秒</span></strong>
                </div>
                <script src="./js/common.js"></script>
                <script>
                    var daySpan = my$('day');
                    var hourSpan = my$('hour');
                    var minuteSpan = my$('minute');
                    var secondSpan = my$('second');
                    TimeRow();
                    setInterval(TimeRow, 1000)

                    function TimeRow() {
                        var end = new Date('<?=$year?>-6-7 9:0:0');
                        var start = new Date();
                        var time = getInterval(start, end);
                        setInnerText(daySpan, time.day+'天');
                        setInnerText(hourSpan, time.hour+'时');
                        setInnerText(minuteSpan, time.minute+'分');
                        setInnerText(secondSpan, time.second+'秒');
                    }
                </script>
            </div>
        </div>
        <nav>
            <ul>
                <li><a href="https://www.bilibili.com/video/BV155411E7Bv">开启征程</a></li>
                <!--<li><a href="#elements">Elements</a></li>-->
            </ul>
        </nav>
    </header>

    <!-- Footer -->
    <footer id="footer">
    </footer>

</div>

<!-- BG -->
<div id="bg"></div>

<!-- Scripts -->
<script src="./assets/js/jquery.min.js" ></script>
<script src="./assets/js/skel.min.js" ></script>
<script src="./assets/js/util.js" ></script>
<script src="./assets/js/main.js" ></script>


</body>
</html>
