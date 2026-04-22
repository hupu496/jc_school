<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Jagadish Chandra High School | Ghatsila | English | हिंदी | বাংলা</title>
    <meta name="description" content="CBSE School Website with English, Hindi and Bengali language support">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url("assets\images\logo.png");  ?>" type="image/x-icon">
    <!-- all css here -->
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/animate.css">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/owl.carousel.css">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/slicknav.min.css">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/video-js.css">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/style.css">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts for better multilingual support -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
<style>
        /* Trilingual styles */
        body {
            font-family: 'Poppins', 'Hind Siliguri', sans-serif;
        }
        .lang-selector {
            display: flex;
            gap: 8px;
            margin-left: 15px;
        }
        .lang-btn {
            background: transparent;
            border: 1px solid #fff;
            color: white;
            padding: 4px 12px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .lang-btn:hover {
            background: #ff6b6b;
            border-color: #ff6b6b;
        }
        .lang-btn.active {
            background: #ff6b6b;
            border-color: #ff6b6b;
        }
        .header-top-right ul {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            justify-content: flex-end;
        }
        /* Language visibility classes */
        .hindi-text, .bengali-text {
            display: none;
        }
        body.lang-english .english-text { display: inline; }
        body.lang-english .english-block { display: block; }
        body.lang-english .hindi-text, body.lang-english .bengali-text { display: none; }
        body.lang-english .hindi-block, body.lang-english .bengali-block { display: none; }
        
        body.lang-hindi .hindi-text { display: inline; }
        body.lang-hindi .hindi-block { display: block; }
        body.lang-hindi .english-text, body.lang-hindi .bengali-text { display: none; }
        body.lang-hindi .english-block, body.lang-hindi .bengali-block { display: none; }
        
        body.lang-bengali .bengali-text { display: inline; }
        body.lang-bengali .bengali-block { display: block; }
        body.lang-bengali .english-text, body.lang-bengali .hindi-text { display: none; }
        body.lang-bengali .english-block, body.lang-bengali .hindi-block { display: none; }
        
        .hindi-block, .bengali-block, .english-block {
            display: none;
        }
        body.lang-english .english-block { display: block; }
        body.lang-hindi .hindi-block { display: block; }
        body.lang-bengali .bengali-block { display: block; }
        
        .slider-content h2 {
            font-size: 48px;
            font-weight: 700;
        }
        @media (max-width: 768px) {
            .lang-selector { gap: 5px; margin-left: 5px; }
            .lang-btn { padding: 2px 8px; font-size: 10px; }
            .slider-content h2 { font-size: 28px; }
        }
        .flag-icon {
            margin-right: 4px;
        }
        .course-content p {
            text-align: justify;
        }
        .preview-wrap img {
            width: 100%;
            max-width: 200px;
            border-radius: 10px;
            margin: 10px 0;
        }
        .footer-widget h2 {
            font-size: 18px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body class="lang-english">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <!-- header area start -->
    <header>
        <div class="header-top bg-1 ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-left">
                            <ul class="socil-icon">
                                <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> <span class="english-text">Admin</span><span class="hindi-text">प्रशासक</span><span class="bengali-text">প্রশাসক</span></a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i> info@jadishchandra.com</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i> 06585-295539</a></li>
                                <li>
                                    <div class="lang-selector">
                                        <button class="lang-btn" data-lang="english">🇬🇧 EN</button>
                                        <button class="lang-btn" data-lang="hindi">🇮🇳 हिंदी</button>
                                        <button class="lang-btn" data-lang="bengali">🇧🇩 বাংলা</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom" id="sticky-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-3 col-xs-8">
                        <div class=""><a href="#"><img src="<?php echo base_url('assets\images\logo.png'); ?>" alt="School Logo" width="120px"/></a></div>
                    </div>
                    <div class="col-md-8 col-sm-9 hidden-xs">
                        <div class="mainmenu text-right">
                            <ul id="navigation">
                                <li class="active"><a href="#"><span class="english-text">Home</span><span class="hindi-text">मुखपृष्ठ</span><span class="bengali-text">হোম</span></a></li>
                                <li><a href="#"><span class="english-text">About Us</span><span class="hindi-text">हमारे बारे में</span><span class="bengali-text">আমাদের সম্পর্কে</span> &raquo;</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('/our_school'); ?>"><span class="english-text">About Our School</span><span class="hindi-text">हमारा विद्यालय</span><span class="bengali-text">আমাদের স্কুল</span></a></li>
                                        <li><a href="<?php echo base_url('/officemember/president'); ?>"><span class="english-text">President</span><span class="hindi-text">प्रबंधन समिति</span><span class="bengali-text">স্কুল ম্যানেজমেন্ট</span></a></li>
                                        <li><a href="<?php echo base_url('/officemember/principal'); ?>"><span class="english-text">Principal</span><span class="hindi-text">प्रधानाचार्य</span><span class="bengali-text">প্রধান শিক্ষক</span></a></li>
                                        <li><a href="<?php echo base_url('/officemember/secretary'); ?>"><span class="english-text">Secretary</span><span class="hindi-text">अध्यक्ष</span><span class="bengali-text">চেয়ারম্যান</span></a></li>
                                        
                                    </ul>
                                </li>
                                <li><a href="#"><span class="english-text">Admission</span><span class="hindi-text">प्रवेश</span><span class="bengali-text">ভর্তি</span> &raquo;</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('admission_guide'); ?>"><span class="english-text">Admission Form</span><span class="hindi-text">प्रवेश फॉर्म</span><span class="bengali-text">ভর্তির ফর্ম</span></a></li>
                                        <li><a href="<?php echo base_url('displine'); ?>"><span class="english-text">Discipline</span><span class="hindi-text">अनुशासन</span><span class="bengali-text">শৃঙ্খলা</span></a></li>
                                        <li><a href="#"><span class="english-text">Admission Period</span><span class="hindi-text">प्रवेश अवधि</span><span class="bengali-text">ভর্তির সময়কাল</span></a></li>
                                    </ul>
                                </li>
                               <li>
    <a href="<?php echo base_url('guideline'); ?>">
        <span class="english-text">Guideline</span>
        <span class="hindi-text">दिशा-निर्देश</span>
        <span class="bengali-text">নির্দেশিকা</span>
    </a>
</li>
                                <li><a href="<?php echo base_url('holiday_list'); ?>"><span class="english-text">Holiday Calendar</span><span class="hindi-text">अवकाश कैलेंडर</span><span class="bengali-text">ছুটির ক্যালেন্ডার</span></a></li>
                                <li><a href="#"><span class="english-text">Achievements</span><span class="hindi-text">उपलब्धियाँ</span><span class="bengali-text">অর্জন</span> &raquo;</a>
                                    <ul class="right">
                                        <li><a href="#"><span class="english-text">Alumni</span><span class="hindi-text">पूर्व छात्र</span><span class="bengali-text">প্রাক্তন ছাত্র</span></a></li>
                                        <li><a href="#"><span class="english-text">Board Results</span><span class="hindi-text">बोर्ड परिणाम</span><span class="bengali-text">বোর্ড ফলাফল</span></a></li>
                                        <li><a href="#"><span class="english-text">Olympiad</span><span class="hindi-text">ओलंपियाड</span><span class="bengali-text">অলিম্পিয়াড</span></a></li>
                                        <li><a href="#"><span class="english-text">Game & Sports</span><span class="hindi-text">खेलकूद</span><span class="bengali-text">খেলা ও ক্রীড়া</span></a></li>
                                    </ul>
                                </li>
                               
                                <li><a href="#"><span class="english-text">Affiliation</span><span class="hindi-text">संबद्धता</span><span class="bengali-text">অনুমোদন</span></a></li>
                               
                                <li><a href="#"><span class="english-text">Gallery</span><span class="hindi-text">गैलरी</span><span class="bengali-text">গ্যালারি</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-4 hidden-lg hidden-md hidden-sm">
                        <div class="responsive-menu-wrap floatright"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>