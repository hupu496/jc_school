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

    <div class="content-section">
        <div class="container">
            <!-- ABOUT SCHOOL PAGE -->
            <div id="page-about" class="page-content-block" style="display: none;">
                <div class="row">
                    <div class="col-md-8">
                        <div class="english-block">
                            <h3>Welcome to Jagadish Chandra High School</h3>
                            <p>Amidst this beautiful surroundings our school JAGADISH CHANDRA HIGH SCHOOL is grandly situated on the link road of Ghatsila and Jamshedpur near the NH-18 highway.</p>
                            <p>The school started as a middle school in the year 1927/1928 as Ghatsila school with the efforts of the local Bengali speaking people but catering to educational needs of multilingual students coming from the Hindu, Sikh, Muslim, tribal and even Christian populace.</p>
                            <p>During the period of 1936-1937 the then local raja named Raja Bahadur Jagadish Chandra Deo Dhabaldeb helped the school bountifully in cash and kind for its development, so the management named the school bearing his name in his honour and recognition of his services.
Later the school grew to be a high school getting its recognition in 1943 by the state govt. as a high school, later leading to its up-gradation to a higher secondary level in the year 1959 which continued gloriously till 1972.</p>
                            <div class="message-quote">"State Govt Aided Linguistic Minority Co-Educational School."</div>
                            <p>Since 1972, the school reverted to its high school level with dropping of higher secondary scheme by the state govt. but in the same year the school was declared a Bengali medium minority high school by the state govt. with the efforts of the local Bengali speaking community with a view to safeguard and develop its language and culture.</p>
                            <p>The school continues to be managed in the same order till date, contributing glorious achievements in its academic and cultural pursuits.</p>
                        </div>
                        <div class="hindi-block">
                            <h3>जगदीश चंद्र हाई स्कूल, घाटशिला में आपका स्वागत है</h3>
                            <p>1985 में स्थापित, जगदीश चंद्र हाई स्कूल, घाटशिला, एक प्रमुख सीबीएसई संबद्ध संस्थान है जो समग्र शिक्षा के लिए समर्पित है। हमारा मिशन युवा दिमागों को मूल्यों, ज्ञान और कौशल के साथ एक उज्ज्वल भविष्य के लिए तैयार करना है।</p>
                            <p>हम अत्याधुनिक बुनियादी ढाँचा, स्मार्ट कक्षाएँ, विज्ञान और कंप्यूटर प्रयोगशालाएँ, विशाल पुस्तकालय और खेल सुविधाएँ प्रदान करते हैं। हमारा समर्पित संकाय व्यक्तिगत ध्यान और शैक्षणिक उत्कृष्टता सुनिश्चित करता है।</p>
                            <p>स्कूल सह-पाठयक्रम गतिविधियों, सांस्कृतिक आदान-प्रदान और सामुदायिक सेवा पर जोर देता है, जो भारतीय मूल्यों में निहित वैश्विक नागरिकों का निर्माण करता है। 100% बोर्ड परिणामों और कई ओलंपियाड उपलब्धियों की विरासत के साथ, हमें अपने पूर्व छात्रों पर गर्व है जो दुनिया भर में उत्कृष्टता प्राप्त कर रहे हैं।</p>
                        </div>
                        <div class="bengali-block">
                            <h3>জগদীশ চন্দ্র হাই স্কুল, ঘাটশিলায় স্বাগতম</h3>
                            <p>১৯৮৫ সালে প্রতিষ্ঠিত, জগদীশ চন্দ্র হাই স্কুল, ঘাটশিলা, একটি প্রধান সিবিএসই অনুমোদিত প্রতিষ্ঠান যা সামগ্রিক শিক্ষার জন্য নিবেদিত। আমাদের মিশন তরুণ মনকে মূল্যবোধ, জ্ঞান এবং দক্ষতা সহ একটি উজ্জ্বল ভবিষ্যতের জন্য প্রস্তুত করা।</p>
                            <p>আমরা অত্যাধুনিক অবকাঠামো, স্মার্ট ক্লাসরুম, বিজ্ঞান ও কম্পিউটার ল্যাব, বিশাল গ্রন্থাগার এবং ক্রীড়া সুবিধা প্রদান করি। আমাদের নিবেদিত শিক্ষকমণ্ডলী ব্যক্তিগত মনোযোগ এবং একাডেমিক শ্রেষ্ঠত্ব নিশ্চিত করে।</p>
                            <p>স্কুল সহ-পাঠ্যক্রমিক কার্যক্রম, সাংস্কৃতিক বিনিময় এবং কমিউনিটি সার্ভিসের উপর জোর দেয়, যা ভারতীয় মূল্যবোধে নিহিত বিশ্ব নাগরিক তৈরি করে। ১০০% বোর্ড ফলাফল এবং অসংখ্য অলিম্পিয়াড অর্জনের উত্তরাধিকার নিয়ে, আমরা আমাদের প্রাক্তন ছাত্রদের নিয়ে গর্বিত যারা বিশ্বজুড়ে উৎকর্ষ অর্জন করছে।</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="profile-card text-center">
                            <img src="<?php echo base_url('assets/images/logo.png'); ?>" width="100px" alt="School" class="profile-img">
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
            <div id="page-president" class="page-content-block" style="display: none;">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://via.placeholder.com/220x220?text=President+Shri+Ramesh" alt="President" class="profile-img">
                        <h3><span class="english-text">Tapas Chatterjee</span><span class="hindi-text">श्री तापस चटर्जी</span><span class="bengali-text">শ্রী রামেশ্বর প্রসাদ</span></h3>
                        <p><span class="english-text">President, School Management Committee</span><span class="hindi-text">अध्यक्ष, विद्यालय प्रबंधन समिति</span><span class="bengali-text">সভাপতি, স্কুল ম্যানেজমেন্ট কমিটি</span></p>
                        <div class="team-social"><a href="#"><i class="fab fa-linkedin"></i></a><a href="#"><i class="fa fa-envelope"></i></a></div>
                    </div>
                    <div class="col-md-8">
                        <div class="english-block">
                            <h4>Message from the President</h4>
                            <p>With over three decades of experience in educational leadership, I envision Jagadish Chandra High School as a beacon of excellence. Our commitment is to provide an environment where every child discovers their potential and develops into a responsible citizen.</p>
                            <p>The school has grown remarkably under the able guidance of our principal and staff. We continuously upgrade infrastructure, introduce modern teaching aids, and ensure holistic development. I invite parents to partner with us in this noble journey.</p>
                            <p><strong>Vision:</strong> To create future leaders who are academically sound, morally upright, and socially conscious.</p>
                        </div>
                        <div class="hindi-block">
                            <h4>अध्यक्ष का संदेश</h4>
                            <p>शैक्षिक नेतृत्व में तीन दशकों से अधिक के अनुभव के साथ, मैं जगदीश चंद्र हाई स्कूल को उत्कृष्टता के प्रतीक के रूप में देखता हूँ। हमारी प्रतिबद्धता एक ऐसा वातावरण प्रदान करना है जहाँ हर बच्चा अपनी क्षमता को खोजे और एक जिम्मेदार नागरिक बने।</p>
                            <p>स्कूल हमारे प्रधानाचार्य और स्टाफ के सक्षम मार्गदर्शन में उल्लेखनीय रूप से विकसित हुआ है। हम लगातार बुनियादी ढांचे का उन्नयन करते हैं, आधुनिक शिक्षण सहायक सामग्री पेश करते हैं और समग्र विकास सुनिश्चित करते हैं। मैं अभिभावकों को इस महान यात्रा में हमारे साथ भागीदार बनने के लिए आमंत्रित करता हूँ।</p>
                        </div>
                        <div class="bengali-block">
                            <h4>সভাপতির বার্তা</h4>
                            <p>শিক্ষাগত নেতৃত্বে তিন দশকের বেশি অভিজ্ঞতা নিয়ে, আমি জগদীশ চন্দ্র হাই স্কুলকে শ্রেষ্ঠত্বের আলোকস্তম্ভ হিসাবে দেখি। আমাদের অঙ্গীকার একটি পরিবেশ প্রদান করা যেখানে প্রতিটি শিশু তার সম্ভাবনা আবিষ্কার করে এবং দায়িত্বশীল নাগরিক হয়ে ওঠে।</p>
                            <p>স্কুল আমাদের প্রধান শিক্ষক এবং কর্মীদের দক্ষ নির্দেশনায় উল্লেখযোগ্যভাবে বেড়েছে। আমরা ক্রমাগত অবকাঠামো আপগ্রেড করি, আধুনিক শিক্ষণ সহায়ক প্রবর্তন করি এবং সামগ্রিক বিকাশ নিশ্চিত করি। আমি অভিভাবকদের এই মহৎ যাত্রায় আমাদের সাথে অংশীদার হওয়ার জন্য আমন্ত্রণ জানাই।</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PRINCIPAL PAGE -->
            <div id="page-principal" class="page-content-block" style="display: none;">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://via.placeholder.com/220x220?text=Principal+Dr.+Anita" alt="Principal" class="profile-img">
                        <h3><span class="english-text">Dr. Anita Sharma</span><span class="hindi-text">डॉ. अनीता शर्मा</span><span class="bengali-text">ডঃ অনিতা শর্মা</span></h3>
                        <p>M.Sc., Ph.D. (Education)</p>
                        <div class="team-social"><a href="#"><i class="fab fa-twitter"></i></a><a href="#"><i class="fa fa-envelope"></i></a></div>
                    </div>
                    <div class="col-md-8">
                        <div class="english-block">
                            <h4>Principal's Desk</h4>
                            <p>It gives me immense pleasure to lead Jagadish Chandra High School, an institution where every child is valued. Our dedicated team works tirelessly to foster academic excellence, character development, and life skills.</p>
                            <p>We have implemented innovative pedagogies like experiential learning, digital classrooms, and regular assessments to ensure conceptual clarity. Our students regularly excel in CBSE board exams, science fairs, and sports competitions.</p>
                            <p>I believe in open communication with parents and community. Together, we can shape a generation that is compassionate, curious, and competent. Let’s join hands for a brighter tomorrow.</p>
                            <div class="message-quote">"The function of education is to teach one to think intensively and to think critically." – Martin Luther King Jr.</div>
                        </div>
                        <div class="hindi-block">
                            <h4>प्रधानाचार्य का संदेश</h4>
                            <p>जगदीश चंद्र हाई स्कूल का नेतृत्व करते हुए मुझे अपार खुशी हो रही है, एक ऐसा संस्थान जहाँ हर बच्चे को महत्व दिया जाता है। हमारी समर्पित टीम शैक्षणिक उत्कृष्टता, चरित्र विकास और जीवन कौशल को बढ़ावा देने के लिए अथक प्रयास करती है।</p>
                            <p>हमने अनुभवात्मक शिक्षण, डिजिटल कक्षाओं और नियमित मूल्यांकन जैसी नवीन शिक्षण विधियों को लागू किया है। हमारे छात्र नियमित रूप से सीबीएसई बोर्ड परीक्षाओं, विज्ञान प्रदर्शनियों और खेल प्रतियोगिताओं में उत्कृष्टता प्राप्त करते हैं।</p>
                        </div>
                        <div class="bengali-block">
                            <h4>প্রধান শিক্ষকের বার্তা</h4>
                            <p>জগদীশ চন্দ্র হাই স্কুলের নেতৃত্ব দিতে আমার অসীম আনন্দ হচ্ছে, একটি প্রতিষ্ঠান যেখানে প্রতিটি শিশুকে মূল্য দেওয়া হয়। আমাদের নিবেদিত দল একাডেমিক শ্রেষ্ঠত্ব, চরিত্র বিকাশ এবং জীবন দক্ষতা বৃদ্ধির জন্য неустанно কাজ করে।</p>
                            <p>আমরা অভিজ্ঞতামূলক শিক্ষা, ডিজিটাল ক্লাসরুম এবং নিয়মিত মূল্যায়নের মতো উদ্ভাবনী শিক্ষণ পদ্ধতি বাস্তবায়ন করেছি। আমাদের ছাত্ররা নিয়মিত সিবিএসই বোর্ড পরীক্ষা, বিজ্ঞান মেলা এবং ক্রীড়া প্রতিযোগিতায় উৎকর্ষ অর্জন করে।</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECRETARY PAGE -->
            <div id="page-secretary" class="page-content-block" style="display: none;">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="https://via.placeholder.com/220x220?text=Secretary+Mr.+Mukherjee" alt="Secretary" class="profile-img">
                        <h3><span class="english-text">Mr. S. K. Mukherjee</span><span class="hindi-text">श्री एस. के. मुखर्जी</span><span class="bengali-text">শ্রী এস. কে. মুখার্জী</span></h3>
                        <p><span class="english-text">Secretary, Governing Body</span><span class="hindi-text">सचिव, प्रशासनिक निकाय</span><span class="bengali-text">সচিব, গভর্নিং বডি</span></p>
                    </div>
                    <div class="col-md-8">
                        <div class="english-block">
                            <h4>From the Secretary's Desk</h4>
                            <p>As Secretary of the school, I ensure smooth administration and policy implementation. Our focus is on transparency, accountability, and quality education for all. We have introduced scholarships for meritorious and underprivileged students.</p>
                            <p>We are proud of our state-of-the-art digital library, career counseling cell, and teacher training programs. The school follows a child-centric approach with regular parent-teacher meets. We aim to make education inclusive and future-ready.</p>
                            <p>I invite everyone to visit our campus and experience the positive energy. Let us build a learning community that inspires excellence and empathy.</p>
                            <p><strong>Contact:</strong> secretary@jchighschool.edu | +91-9876543210</p>
                        </div>
                        <div class="hindi-block">
                            <h4>सचिव का संदेश</h4>
                            <p>स्कूल के सचिव के रूप में, मैं सुचारू प्रशासन और नीति कार्यान्वयन सुनिश्चित करता हूँ। हमारा ध्यान पारदर्शिता, जवाबदेही और सभी के लिए गुणवत्तापूर्ण शिक्षा पर है। हमने मेधावी और वंचित छात्रों के लिए छात्रवृत्ति शुरू की है।</p>
                            <p>हमें अपनी अत्याधुनिक डिजिटल लाइब्रेरी, करियर काउंसलिंग सेल और शिक्षक प्रशिक्षण कार्यक्रमों पर गर्व है। स्कूल नियमित अभिभावक-शिक्षक बैठकों के साथ बाल-केंद्रित दृष्टिकोण का पालन करता है। हम शिक्षा को समावेशी और भविष्य के लिए तैयार बनाने का लक्ष्य रखते हैं।</p>
                        </div>
                        <div class="bengali-block">
                            <h4>সচিবের বার্তা</h4>
                            <p>স্কুলের সচিব হিসাবে, আমি মসৃণ প্রশাসন এবং নীতি বাস্তবায়ন নিশ্চিত করি। আমাদের ফোকাস স্বচ্ছতা, জবাবদিহিতা এবং সবার জন্য মানসম্মত শিক্ষার উপর। আমরা মেধাবী ও সুবিধাবঞ্চিত ছাত্রদের জন্য বৃত্তি চালু করেছি।</p>
                            <p>আমরা আমাদের অত্যাধুনিক ডিজিটাল লাইব্রেরি, ক্যারিয়ার কাউন্সেলিং সেল এবং শিক্ষক প্রশিক্ষণ কর্মসূচিতে গর্বিত। স্কুল নিয়মিত অভিভাবক-শিক্ষক মিটিং সহ শিশু-কেন্দ্রিক পদ্ধতি অনুসরণ করে। আমরা শিক্ষাকে অন্তর্ভুক্তিমূলক এবং ভবিষ্যত-প্রস্তুত করার লক্ষ্য রাখি।</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- footer area same as original -->
    

    <script src="https://rcsindia.co.in/newcbse19/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/bootstrap.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/owl.carousel.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/jquery.slicknav.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/main.js"></script>

    <script>
        $(document).ready(function(){
            // language persistence
            var savedLang = localStorage.getItem('schoolLang');
            if(savedLang && (savedLang === 'english' || savedLang === 'hindi' || savedLang === 'bengali')){
                $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-'+savedLang);
                $('.lang-btn').removeClass('active');
                $('.lang-btn[data-lang="'+savedLang+'"]').addClass('active');
            } else { $('body').addClass('lang-english'); $('.lang-btn[data-lang="english"]').addClass('active');}
            $('.lang-btn').click(function(){
                var lang = $(this).data('lang');
                $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-'+lang);
                $('.lang-btn').removeClass('active'); $(this).addClass('active');
                localStorage.setItem('schoolLang', lang);
            });
            
            // Routing simulation: detect which page based on URL filename or hash
            function showPage(pageId){
                $('.page-content-block').hide();
                $('#'+pageId).show();
                // update title and breadcrumb
                var titles = {
                    'page-about': { en:'About Our School', hi:'हमारा विद्यालय', bn:'আমাদের স্কুল' },
                    'page-president': { en:'President', hi:'अध्यक्ष', bn:'সভাপতি' },
                    'page-principal': { en:'Principal', hi:'प्रधानाचार्य', bn:'প্রধান শিক্ষক' },
                    'page-secretary': { en:'Secretary', hi:'सचिव', bn:'সচিব' }
                };
                var t = titles[pageId];
                if(t){
                    $('#pageMainTitle .english-text').text(t.en);
                    $('#pageMainTitle .hindi-text').text(t.hi);
                    $('#pageMainTitle .bengali-text').text(t.bn);
                    $('#breadcrumbCurrent .english-text').text(t.en);
                    $('#breadcrumbCurrent .hindi-text').text(t.hi);
                    $('#breadcrumbCurrent .bengali-text').text(t.bn);
                }
            }
            
            var path = window.location.pathname.split('/').pop();
            if(path.includes('about-school') || path.includes('about')) showPage('page-about');
            else if(path.includes('president')) showPage('page-president');
            else if(path.includes('principal')) showPage('page-principal');
            else if(path.includes('secretary')) showPage('page-secretary');
            else showPage('page-about'); // default
            
            // handle navigation clicks from menu to simulate separate pages
            $('a[href="about-school.html"]').click(function(e){ e.preventDefault(); window.history.pushState({}, '', 'about-school.html'); showPage('page-about'); });
            $('a[href="president.html"]').click(function(e){ e.preventDefault(); window.history.pushState({}, '', 'president.html'); showPage('page-president'); });
            $('a[href="principal.html"]').click(function(e){ e.preventDefault(); window.history.pushState({}, '', 'principal.html'); showPage('page-principal'); });
            $('a[href="secretary.html"]').click(function(e){ e.preventDefault(); window.history.pushState({}, '', 'secretary.html'); showPage('page-secretary'); });
            $('a[href="index.html"]').click(function(e){ e.preventDefault(); window.history.pushState({}, '', 'index.html'); showPage('page-about'); });
            
            // also handle hash or other inner links
            $(document).on('click', '.mainmenu ul li a', function(){
                var href = $(this).attr('href');
                if(href && href.includes('about-school')){ showPage('page-about'); }
                if(href && href.includes('president')){ showPage('page-president'); }
                if(href && href.includes('principal')){ showPage('page-principal'); }
                if(href && href.includes('secretary')){ showPage('page-secretary'); }
            });
        });
    </script>
