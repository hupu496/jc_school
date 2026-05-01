<style>
     
        
        /* profile card styles */
        .profile-card {
            background: #f9f9f9;
            border-radius: 15px;
            padding: 30px;
            margin-bottom: 40px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s;
        }
        .profile-card:hover { transform: translateY(-5px); }
        .profile-img {
            width: 200px;
            height: 200px;
            /* object-fit: cover; */
            border-radius: 10%;
            border: 5px solid #ff6b6b;
            margin-bottom: 20px;
        }
       /* Animated Gradient Background */
        .page-title {
            z-index:-1;
            position: relative;
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 25%, #1a5276 50%, #2980b9 75%, #1a2a3a 100%);
            background-size: 200% 200%;
            padding: 50px 0;
            margin-bottom: 60px;
            color: white;
            text-align: center;
            overflow: hidden;
            animation: gradientShift 8s ease infinite;
        }

        @keyframes gradientShift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Animated Overlay Pattern */
        .page-title::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: 
                radial-gradient(circle at 20% 40%, rgba(255,255,255,0.08) 2px, transparent 2px),
                radial-gradient(circle at 80% 70%, rgba(255,255,255,0.06) 1px, transparent 1px);
            background-size: 50px 50px, 30px 30px;
            pointer-events: none;
            animation: floatDots 20s linear infinite;
        }

        @keyframes floatDots {
            0% { background-position: 0 0, 0 0; }
            100% { background-position: 100px 100px, 60px 60px; }
        }

        /* Floating Particles */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.15);
            border-radius: 50%;
            animation: float 15s infinite ease-in-out;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.3; }
            50% { transform: translateY(-50px) rotate(180deg); opacity: 0.8; }
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Main Title Styling */
        .page-title h1 {
            font-size: 56px;
            font-weight: 800;
            margin: 0 0 20px 0;
            letter-spacing: -0.5px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease;
        }
         /* Breadcrumb Styling */
        .breadcrumb {
            margin-top: 30px;
            font-size: 16px;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(0,0,0,0.25);
            backdrop-filter: blur(8px);
            padding: 10px 25px;
            border-radius: 50px;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .breadcrumb a {
            color: #ffd700;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .breadcrumb a:hover {
            color: #fff;
            text-shadow: 0 0 5px rgba(255,215,0,0.5);
        }

        .content-section { padding: 30px 0 70px; }
        .message-quote { font-style: italic; border-left: 4px solid #ff6b6b; padding-left: 20px; margin: 20px 0; }
        @media (max-width: 768px) {
            .lang-selector { gap: 5px; }
            .lang-btn { padding: 2px 8px; font-size: 10px; }
            .profile-img { width: 150px; height: 150px; }
            .page-title h1 { font-size: 28px; }
        }
        .footer-widget h2 { font-size: 18px; margin-bottom: 20px; }
        .team-social a { margin-right: 10px; color: #555; font-size: 18px; }
            
        /* Mission & Vision Module Styles */
        .mission-vision-section {
            background: linear-gradient(135deg, rgba(20, 166, 228, 1) 0%, #174873 100%);
            border-radius: 20px;
            padding: 40px;
            margin: 30px 0;
            color: white;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }
        .mission-box, .vision-box {
            background: rgba(255,255,255,0.15);
            border-radius: 15px;
            padding: 25px;
            height: 100%;
            backdrop-filter: blur(5px);
            transition: transform 0.3s;
        }
        .mission-box:hover, .vision-box:hover { transform: translateY(-5px); background: rgba(255,255,255,0.25); }
        .mission-box h3, .vision-box h3 { font-size: 28px; margin-bottom: 20px; border-bottom: 2px solid #ffeb3b; display: inline-block; padding-bottom: 5px; }
        .mission-list, .vision-list { padding-left: 20px; margin-top: 15px; }
        .mission-list li, .vision-list li { margin-bottom: 12px; line-height: 1.6; }
        .mission-list li i, .vision-list li i { margin-right: 10px; color: #ffeb3b; }
        .core-values {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            justify-content: center;
        }
        .footer-widget h2 { font-size: 18px; margin-bottom: 20px; }
        .team-social a { margin-right: 10px; color: #555; font-size: 18px; }
        .school-stats { background: #fff; border-radius: 15px; padding: 20px; margin-top: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .value-badge {
            background: rgba(255,255,255,0.2);
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            font-weight: 500;
        }
        
        @media (max-width: 768px) {
            .lang-selector { gap: 5px; }
            .lang-btn { padding: 2px 8px; font-size: 10px; }
            .profile-img { width: 150px; height: 150px; }
            .page-title h1 { font-size: 28px; }
            .mission-vision-section { padding: 25px; }
            .mission-box h3, .vision-box h3 { font-size: 22px; }
        }
    </style>

    <!-- Dynamic Page Content based on URL (simulating separate pages) -->
    <div class="page-title">
        <div class="container">
            <h1 id="pageMainTitle" style="color:white;"><span class="english-text">About Our School</span><span class="hindi-text">हमारा विद्यालय</span><span class="bengali-text">আমাদের স্কুল</span></h1>
            <div class="breadcrumb">
                <a href="index.html"><span class="english-text">Home</span><span class="hindi-text">मुखपृष्ठ</span><span class="bengali-text">হোম</span></a> / <span id="breadcrumbCurrent"><span class="english-text">About School</span><span class="hindi-text">विद्यालय</span><span class="bengali-text">স্কুল</span></span>
            </div>
        </div>
    </div>

    <div class="">
        <div class="container">
            <!-- ABOUT SCHOOL PAGE -->
            <div id="page-about" class="page-content-block" >
                <div class="row">
                    <div class="col-md-8">
                        <div class="english-block">
                            <h2 style="font-weight:800;">Welcome to Jagadish Chandra High School</h2>
                            <p>Amidst this beautiful surroundings our school JAGADISH CHANDRA HIGH SCHOOL is grandly situated on the link road of Ghatsila and Jamshedpur near the NH-18 highway.</p>
                            <p>The school started as a middle school in the year 1927/1928 as Ghatsila school with the efforts of the local Bengali speaking people but catering to educational needs of multilingual students coming from the Hindu, Sikh, Muslim, tribal and even Christian populace.</p>
                            <p>During the period of 1936-1937 the then local raja named Raja Bahadur Jagadish Chandra Deo Dhabaldeb helped the school bountifully in cash and kind for its development, so the management named the school bearing his name in his honour and recognition of his services.
Later the school grew to be a high school getting its recognition in 1943 by the state govt. as a high school, later leading to its up-gradation to a higher secondary level in the year 1959 which continued gloriously till 1972.</p>
                            <div class="message-quote">"State Govt Aided Linguistic Minority Co-Educational School."</div>
                            <p>Since 1972, the school reverted to its high school level with dropping of higher secondary scheme by the state govt. but in the same year the school was declared a Bengali medium minority high school by the state govt. with the efforts of the local Bengali speaking community with a view to safeguard and develop its language and culture.</p>
                            <p>The school continues to be managed in the same order till date, contributing glorious achievements in its academic and cultural pursuits.</p>
                        </div>
                       
                        
                    </div>
                    <div class="col-md-4">
                        <div class="profile-card text-center">
                            <img src="<?php echo base_url('assets/images/about_us.jpeg'); ?>" width="100px" alt="School" class="profile-img">
                            <h4><span class="english-text">Our Campus</span><span class="hindi-text">हमारा परिसर</span><span class="bengali-text">আমাদের ক্যাম্পাস</span></h4>
                            <p><i class="fa fa-map-marker"></i> Ghatsila, East Singhbhum, Jharkhand</p>
                        </div>
                    </div>
                </div>
            </div>
                     <div class="mission-vision-section">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mission-box">
                                        <h3><i class="fas fa-bullseye"></i> <span class="english-text">Our Mission</span><span class="hindi-text">हमारा मिशन</span><span class="bengali-text">আমাদের মিশন</span></h3>
                                        <ul class="mission-list">
                                            <li class="english-text"><i class="fas fa-check-circle"></i> To help students become men and women of character, ready to serve others</li>
                                            </br> <li class="english-text"><i class="fas fa-check-circle"></i> To courageously uphold honesty, truth and good values - 'Satya Meva Jayate'</li>
                                            </br><li class="english-text"><i class="fas fa-check-circle"></i> To imbibe love and appreciation for India's diverse culture</li>
                                            </br><li class="english-text"><i class="fas fa-check-circle"></i> To encourage independent judgement, reasoning and self-reliance</li>
                                            </br><li class="english-text"><i class="fas fa-check-circle"></i> To inculcate dignity of labour, self-respect and love for others</li>
                                          <li class="english-text"><i class="fas fa-check-circle"></i> To encourage team spirit and leadership through school activities</li>
                                            
                                            <li class="hindi-text"><i class="fas fa-check-circle"></i> छात्रों को चरित्रवान नागरिक बनने में मदद करना</li>
                                            </br><li class="hindi-text"><i class="fas fa-check-circle"></i> सत्य, ईमानदारी और अच्छे मूल्यों को बनाए रखना - 'सत्यमेव जयते'</li>
                                            </br><li class="hindi-text"><i class="fas fa-check-circle"></i> भारत की विविध संस्कृति के लिए प्रेम और सराहना पैदा करना</li>
                                            </br><li class="hindi-text"><i class="fas fa-check-circle"></i> स्वतंत्र निर्णय, तर्क और आत्मनिर्भरता को प्रोत्साहित करना</li>
                                           <li class="hindi-text"><i class="fas fa-check-circle"></i> श्रम की गरिमा, आत्मसम्मान और दूसरों के लिए प्यार पैदा करना</li>
                                            
                                            <li class="bengali-text"><i class="fas fa-check-circle"></i> ছাত্রদের চরিত্রবান নাগরিক হতে সাহায্য করা</li>
                                            </br><li class="bengali-text"><i class="fas fa-check-circle"></i> সত্য, সততা ও ভাল মূল্যবোধ বজায় রাখা - 'সত্যমেব জয়তে'</li>
                                            </br><li class="bengali-text"><i class="fas fa-check-circle"></i> ভারতের বৈচিত্র্যময় সংস্কৃতির প্রতি ভালবাসা ও উপলব্ধি তৈরি করা</li>
                                           <li class="bengali-text"><i class="fas fa-check-circle"></i> স্বাধীন সিদ্ধান্ত, যুক্তি ও আত্মনির্ভরশীলতা উৎসাহিত করা</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="vision-box">
                                        <h3><i class="fas fa-eye"></i> <span class="english-text">Our Vision</span><span class="hindi-text">हमारा दृष्टिकोण</span><span class="bengali-text">আমাদের দৃষ্টিভঙ্গি</span></h3>
                                        <ul class="vision-list">
                                            <li class="english-text"><i class="fas fa-star"></i> To create future leaders who are academically sound, morally upright, and socially conscious</li>
                                            </br><li class="english-text"><i class="fas fa-star"></i> To build a learning community that inspires excellence and empathy</li>
                                            </br><li class="english-text"><i class="fas fa-star"></i> To make education inclusive, accessible, and future-ready for every child</li>
                                            </br><li class="english-text"><i class="fas fa-star"></i> To preserve and promote Bengali minority language and culture since 1972</li>
                                           <li class="english-text"><i class="fas fa-star"></i> To empower rural students with skills for global opportunities</li>
                                            
                                            </br><li class="hindi-text"><i class="fas fa-star"></i> शैक्षणिक रूप से सक्षम, नैतिक रूप से ईमानदार और सामाजिक रूप से जागरूक नेता बनाना</li>
                                            </br><li class="hindi-text"><i class="fas fa-star"></i> एक ऐसा शिक्षण समुदाय बनाना जो उत्कृष्टता और सहानुभूति को प्रेरित करे</li>
                                            <li class="hindi-text"><i class="fas fa-star"></i> शिक्षा को समावेशी और भविष्य के लिए तैयार बनाना</li>
                                            
                                            </br><li class="bengali-text"><i class="fas fa-star"></i> একাডেমিকভাবে সক্ষম, নৈতিকভাবে সৎ ও সামাজিকভাবে সচেতন নেতা তৈরি করা</li>
                                            </br><li class="bengali-text"><i class="fas fa-star"></i> একটি শিক্ষণ সম্প্রদায় গড়ে তোলা যা শ্রেষ্ঠত্ব ও সহানুভূতি অনুপ্রাণিত করে</li>
                                            <li class="bengali-text"><i class="fas fa-star"></i> শিক্ষাকে অন্তর্ভুক্তিমূলক ও ভবিষ্যত-প্রস্তুত করা</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="core-values">
                                <span class="value-badge"><i class="fas fa-heart"></i> सत्यमेव जयते</span>
                                <span class="value-badge"><i class="fas fa-handshake"></i> Service Before Self</span>
                                <span class="value-badge"><i class="fas fa-globe"></i> Unity in Diversity</span>
                                <span class="value-badge"><i class="fas fa-book"></i> Excellence in Education</span>
                            </div>
                        </div>
            <!-- PRESIDENT PAGE -->
            
    </div>

    <!-- footer area same as original -->
    

    <script src="https://rcsindia.co.in/newcbse19/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/bootstrap.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/owl.carousel.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/jquery.slicknav.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/main.js"></script>

    