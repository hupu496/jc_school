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
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="https://rcsindia.co.in/newcbse19/css/responsive.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <!-- Google Fonts for better multilingual support -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
    /* ========== 3D LANGUAGE BUTTONS CUSTOMIZATION ========== */
         body {
            font-family: 'Poppins', 'Hind Siliguri', sans-serif;
            background: linear-gradient(135deg, #f0f2f5 0%, #e8ecf1 100%);
            min-height: 100vh;
        }
    .lang-selector {
        display: flex;
        gap: 12px;
        margin-left: 15px;
        perspective: 500px;
    }
    
    /* 3D Button Base Styles */
    .lang-btn-3d {
        position: relative;
        padding: 8px 18px;
        font-size: 13px;
        font-weight: 700;
        border: none;
        border-radius: 12px;
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        text-transform: uppercase;
        letter-spacing: 0.5px;
        background: linear-gradient(135deg, #fff 0%, #f0f0f0 100%);
        color: #333;
        box-shadow: 0 5px 0 #b0b0b0;
        transform: translateY(-2px);
    }
    
    .lang-btn-3d:active {
        transform: translateY(3px);
        box-shadow: 0 2px 0 #b0b0b0;
    }
    
    /* English Button - Blue Theme */
    .lang-btn-3d[data-lang="english"] {
        background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
        color: white;
        box-shadow: 0 5px 0 #0f2347;
    }
    
    .lang-btn-3d[data-lang="english"]:hover {
        background: linear-gradient(135deg, #2a5298 0%, #1e3c72 100%);
        transform: translateY(-3px);
        box-shadow: 0 7px 0 #0f2347;
    }
    
    .lang-btn-3d[data-lang="english"].active {
        background: linear-gradient(135deg, #ffd700 0%, #ff8c00 100%);
        color: #1e3c72;
        box-shadow: 0 5px 0 #cc7000;
        transform: translateY(-2px);
    }
    
    /* Hindi Button - Saffron/Orange Theme */
    .lang-btn-3d[data-lang="hindi"] {
        background: linear-gradient(135deg, #ff6b35 0%, #f7931e 100%);
        color: white;
        box-shadow: 0 5px 0 #c4541a;
    }
    
    .lang-btn-3d[data-lang="hindi"]:hover {
        background: linear-gradient(135deg, #f7931e 0%, #ff6b35 100%);
        transform: translateY(-3px);
        box-shadow: 0 7px 0 #c4541a;
    }
    
    .lang-btn-3d[data-lang="hindi"].active {
        background: linear-gradient(135deg, #4caf50 0%, #2e7d32 100%);
        color: white;
        box-shadow: 0 5px 0 #1b5e20;
    }
    
    /* Bengali Button - Green/Red Theme */
    .lang-btn-3d[data-lang="bengali"] {
        background: linear-gradient(135deg, #006442 0%, #e03a3a 100%);
        color: white;
        box-shadow: 0 5px 0 #a82828;
    }
    
    .lang-btn-3d[data-lang="bengali"]:hover {
        background: linear-gradient(135deg, #e03a3a 0%, #006442 100%);
        transform: translateY(-3px);
        box-shadow: 0 7px 0 #a82828;
    }
    
    .lang-btn-3d[data-lang="bengali"].active {
        background: linear-gradient(135deg, #2196f3 0%, #0d47a1 100%);
        color: white;
        box-shadow: 0 5px 0 #0a2a5e;
    }
    
    /* 3D Button with Flag Icons */
    .flag-icon-3d {
        display: inline-block;
        margin-right: 6px;
        font-size: 14px;
        filter: drop-shadow(0 1px 1px rgba(0,0,0,0.3));
    }
    
    /* Button Text Styling */
    .lang-btn-3d span {
        font-weight: 700;
        text-shadow: 0 1px 1px rgba(0,0,0,0.2);
    }
    
    /* Ripple Effect on Click */
    .lang-btn-3d {
        overflow: hidden;
        position: relative;
    }
    
    .lang-btn-3d::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 0;
        height: 0;
        border-radius: 50%;
        background: rgba(255,255,255,0.3);
        transform: translate(-50%, -50%);
        transition: width 0.4s, height 0.4s;
    }
    
    .lang-btn-3d:active::after {
        width: 120px;
        height: 120px;
    }
    
    /* Pulse Animation for Active Button */
    @keyframes pulse-glow {
        0%, 100% {
            box-shadow: 0 5px 0 currentColor, 0 0 0 0 rgba(255,215,0,0.4);
        }
        50% {
            box-shadow: 0 5px 0 currentColor, 0 0 0 10px rgba(255,215,0,0);
        }
    }
    
    .lang-btn-3d.active {
        animation: pulse-glow 1.5s ease-in-out 2;
    }
    
    /* Tooltip on Hover */
    .lang-btn-3d {
        position: relative;
    }
    
    .lang-btn-3d::before {
        content: attr(data-tooltip);
        position: absolute;
        bottom: 100%;
        left: 50%;
        transform: translateX(-50%) translateY(-8px);
        background: rgba(0,0,0,0.8);
        color: white;
        font-size: 10px;
        padding: 3px 8px;
        border-radius: 6px;
        white-space: nowrap;
        opacity: 0;
        visibility: hidden;
        transition: all 0.2s ease;
        pointer-events: none;
        font-weight: normal;
        text-transform: none;
        z-index: 100;
    }
    
    .lang-btn-3d:hover::before {
        opacity: 1;
        visibility: visible;
        transform: translateX(-50%) translateY(-12px);
    }
    
    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .lang-selector {
            gap: 8px;
            flex-wrap: wrap;
            justify-content: flex-end;
        }
        .lang-btn-3d {
            padding: 5px 12px;
            font-size: 10px;
        }
        .flag-icon-3d {
            font-size: 11px;
            margin-right: 4px;
        }
    }
    
    /* 3D Hover Lift Effect */
    .lang-btn-3d:hover {
        transform: translateY(-4px);
    }
    
    /* Glass Morph Reflection Effect */
    .lang-btn-3d {
        backdrop-filter: blur(2px);
    }
    
    /* Neomorphic Shadow Variation for Container */
    .lang-selector {
        background: rgba(255,255,255,0.1);
        padding: 5px 12px;
        border-radius: 40px;
        backdrop-filter: blur(5px);
    }
    
    /* Loading Spinner inside button (optional) */
    .lang-btn-3d.loading {
        pointer-events: none;
        opacity: 0.7;
    }
    
    .lang-btn-3d.loading::after {
        content: '⏳';
        position: absolute;
        right: 8px;
        top: 50%;
        transform: translateY(-50%);
        font-size: 12px;
    }
</style>
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
            background: #ff6b6b;
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
        .green-hover {
            background: #14e926;
            transition: 0.3s; /* Optional: makes the color change smooth */
        }
  .green-hover:hover {
    background: #14e926;
    border-color: #14e926;
  }
  .bengali-hover{
     background: #fff;
    transition: 0.3s;
    color:black;
  }
  .bengali-hover:hover{
    background: #fff;
    border-color: #fff;
    color: black;
  }
        .lang-btn.active {
            background: #ff6b6b;
            border-color: #ff6b6b;
        }
         .green-hover.active {
            background: #14e926;
            border-color: #14e926;
            
        }
        .bengali-hover.active {
            background: #fff;
            border-color: #fff;
            color: black;
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
        /* Mobile Header Buttons */
.mobile-icons {
    display: flex;
    gap: 8px;
}

.mobile-btn {
    display: flex;
    align-items: center;
    gap: 4px;
   
    padding: 5px 8px;
    border-radius: 6px;
    font-size: 12px;
    font-weight: 700; /* BOLD */
    color: #000;
    background: #f1f1f1;
}

.mobile-btn i {
    font-size: 14px;
}

.mobile-btn:hover {
    background: #ff6b6b;
    color: #fff;
    border-color: #ff6b6b;
}
.VIpgJd-ZVi9od-ORHb-OEVmcd {
    opacity:0.0;
    left: 0;
    top: 0;
    height: 39px;
    width: 100%;
    z-index: 10000001;
    position: fixed;
    border: none;
    border-bottom: 1px solid #6B90DA;
    margin: 0;
    box-shadow: 0 0 8px 1px #999;
}
.designer-badge {
    background: #222;
    color: #fff;
    padding: 6px 12px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 500;
    display: inline-block;
}

.designer-badge a {
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    transition: 0.3s;
}

/* Hover effect */
.designer-badge a:hover {
    color: yellow;
}
    </style>
</head>
<body class="lang-english">
    <div id="google_translate_element" style="display:none;"></div>
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
                        <div class=""><a href="<?php echo base_url('/'); ?>"><img src="<?php echo base_url('assets\images\logo.png'); ?>" alt="School Logo" width="100px"/></a><span style="color:white; font-weight:500; font-size:22px; text-shadow: 2px 2px 6px rgba(0,0,0,0.9);">JAGADISH CHANDRA HIGH SCHOOL</span></div>
                  
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="header-top-right text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> <span class="english-text">Admin</span><span class="hindi-text">प्रशासक</span><span class="bengali-text">প্রশাসক</span></a></li>
                                <li><a href="mailto:j.c.hs.ghatsila.e.singhbhum@gmail.com"><i class="fa fa-envelope-o"></i> j.c.hs.ghatsila.e.singhbhum@gmail.com</a></li>
                                <li><a href="tel:+919234676905"><i class="fa fa-phone"></i>+91 9234676905</a></li>
                                <li>
                                    <div class="lang-selector">
                                        <button class="lang-btn bengali-hover" data-lang="bengali">🇧🇩 বাংলা</button>
                                        <button class="lang-btn  green-hover" data-lang="hindi">🇮🇳 हिंदी</button>
                                        <button class="lang-btn" data-lang="english">🇬🇧 EN</button>
                                    </div>
                                </li>
                             
                                    <li><a href="#" ><img src="<?php echo base_url('assets/facebook.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo base_url('assets/instagram.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo base_url('assets/linkedin.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo base_url('assets/youtube.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                  
                              
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom" id="sticky-header">
            <div class="container">
                <div class="row">
                  
                <div class="col-md-4 col-sm-3 col-xs-8 hidden-lg hidden-md hidden-sm">
    <div class="mobile-icons">

        <!-- Home Icon -->
        <a href="<?php echo base_url('/'); ?>" class="mobile-btn">
            <i class="fa fa-home"></i>
            <span>Home</span>
        </a>

       

    </div>
</div>
                    <div class="col-md-8 col-sm-9 hidden-xs">
                        <div class="mainmenu text-right text-bold" style="font-weight:800;">
                            <ul id="navigation">
                                <li class=""><a href="<?php echo base_url('/'); ?>"><span class="english-text">Home</span><span class="hindi-text">मुखपृष्ठ</span><span class="bengali-text">হোম</span></a></li>
                                <li><a href="#"><span class="english-text">About Us</span><span class="hindi-text">हमारे बारे में</span><span class="bengali-text">আমাদের সম্পর্কে</span> &raquo;</a>
                                    <ul>
                                        <li><a href="<?php echo base_url('/our_school'); ?>"><span class="english-text">About Our School</span><span class="hindi-text">हमारा विद्यालय</span><span class="bengali-text">আমাদের স্কুল</span></a></li>
                                        <li><a href="<?php echo base_url('/officemember/president'); ?>"><span class="english-text">President</span><span class="hindi-text">प्रबंधन समिति</span><span class="bengali-text">স্কুল ম্যানেজমেন্ট</span></a></li>
                                        <li><a href="<?php echo base_url('/officemember/principal'); ?>"><span class="english-text">Principal</span><span class="hindi-text">प्रधानाचार्य</span><span class="bengali-text">প্রধান শিক্ষক</span></a></li>
                                        <li><a href="<?php echo base_url('/officemember/secretary'); ?>"><span class="english-text">Secretary</span><span class="hindi-text">अध्यक्ष</span><span class="bengali-text">চেয়ারম্যান</span></a></li>
                                        <li><a href="<?php echo base_url('/officemember/man_commite'); ?>"><span class="english-text">Management Committee</span><span class="hindi-text">प्रबंध समिति</span><span class="bengali-text">ব্যবস্থাপনা কমিটি</span></a></li>
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
                                <li><a href="#"><span class="english-text">Academic</span><span class="hindi-text">शैक्षणिक</span><span class="bengali-text">শিক্ষামূলক</span> &raquo;</a>
                                    <ul class="right">
                                        <li><a href="<?php echo base_url('guideline/all_guide'); ?>"><span class="english-text">Guidelines</span><span class="hindi-text">दिशा-निर्देश</span><span class="bengali-text">নির্দেশিকা</span></a></li>
                                        <li><a href="<?php echo base_url('guideline/teacher');?>"><span class="english-text">Teacher & Staff</span><span class="hindi-text">शिक्षक और कर्मचारी</span><span class="bengali-text">শিক্ষক এবং কর্মী</span></a></li>
                                        <!-- <li><a href="#"><span class="english-text">Olympiad</span><span class="hindi-text">ओलंपियाड</span><span class="bengali-text">অলিম্পিয়াড</span></a></li> -->
                                        <li><a href="<?php echo base_url('holiday_list'); ?>"><span class="english-text">Holiday Calendar</span><span class="hindi-text">खेलकूद</span><span class="bengali-text">খেলা ও ক্রীড়া</span></a></li>
                                       
                                    </ul>
                                </li>

</li>
                               
                                <li><a href="#"><span class="english-text">Achievements</span><span class="hindi-text">उपलब्धियाँ</span><span class="bengali-text">অর্জন</span> &raquo;</a>
                                    <ul class="right">
                                        
                                        <li><a href="#"><span class="english-text">Board Results</span><span class="hindi-text">बोर्ड परिणाम</span><span class="bengali-text">বোর্ড ফলাফল</span></a></li>
                                        <!-- <li><a href="#"><span class="english-text">Olympiad</span><span class="hindi-text">ओलंपियाड</span><span class="bengali-text">অলিম্পিয়াড</span></a></li> -->
                                        <li><a href="#"><span class="english-text">Game & Sports</span><span class="hindi-text">खेलकूद</span><span class="bengali-text">খেলা ও ক্রীড়া</span></a></li>
                                        <li><a href="#"><span class="english-text">Other curriculum</span><span class="hindi-text">अन्य पाठ्यक्रम</span><span class="bengali-text">অন্যান্য পাঠ্যক্রম</span></a></li>
                                    </ul>
                                </li>
                               <li><a href="<?php echo base_url('/alumini'); ?>"><span class="english-text">Alumni</span><span class="hindi-text">पूर्व छात्र</span><span class="bengali-text">প্রাক্তন ছাত্র</span></a></li>
                                <li><a href="<?php echo base_url('/affiliation'); ?>"><span class="english-text">Affiliation</span><span class="hindi-text">संबद्धता</span><span class="bengali-text">অনুমোদন</span></a></li>
                               
                                <li><a href="<?php echo base_url('gallery'); ?>"><span class="english-text">Gallery</span><span class="hindi-text">गैलरी</span><span class="bengali-text">গ্যালারি</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-4 hidden-lg hidden-md hidden-sm ">
                        <div class="mobile-icons responsive-menu-wrap floatright"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>