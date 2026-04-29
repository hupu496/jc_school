
    <style>
        body { font-family: 'Poppins', 'Hind Siliguri', sans-serif; background: #f4f7fc; }
      
        .profile-card { background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; transition: transform 0.3s; text-align: center; }
        .profile-card:hover { transform: translateY(-5px); }
        .profile-img { width: 180px; height: 180px; border-radius: 50%; object-fit: cover; border: 5px solid #ff6b6b; margin-bottom: 20px; background: #e9ecef; }
        /* Animated Gradient Background */
        .page-title-bg  {
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
        .page-title-bg ::before {
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
        .page-title-bg  h1 {
            font-size: 56px;
            font-weight: 800;
            margin: 0 0 20px 0;
            color: #fff;
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
        .staff-table { background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .staff-table th { background: #2c3e50; color: white; }
        .section-title { border-left: 5px solid #ff6b6b; padding-left: 20px; margin: 30px 0 20px; }
        .school-badge { background: #ff6b6b10; border-radius: 15px; padding: 20px; margin-bottom: 25px; border-left: 4px solid #ff6b6b; }
        @media (max-width: 768px) { .profile-img { width: 130px; height: 130px; } .lang-btn { padding: 2px 8px; font-size: 10px; } }
        .footer-widget h2 { font-size: 18px; }
        .message-box { background: #f8f9fa; border-radius: 15px; padding: 25px; font-style: italic; border-left: 5px solid #ff6b6b; margin-top: 20px; }
    </style>
    <style>
    .profile-card {
        background: white;
        border-radius: 20px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        margin-bottom: 30px;
        transition: transform 0.3s;
    }
    .profile-card:hover { transform: translateY(-5px); }
    .profile-img {
        width: 200px;
        height: 200px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #ff6b6b;
        margin-bottom: 20px;
        background: #e9ecef;
    }

    .message-box {
        background: #f8f9fa;
        border-radius: 15px;
        padding: 20px;
        font-style: italic;
        border-left: 5px solid #ff6b6b;
        margin-top: 20px;
    }
    .back-btn {
        display: inline-block;
        margin-bottom: 20px;
        padding: 8px 20px;
        background: #6c757d;
        color: white;
        border-radius: 30px;
        text-decoration: none;
    }
    .back-btn:hover { background: #ff6b6b; color: white; }
    @media (max-width: 768px) {
        .profile-img { width: 150px; height: 150px; }
    }
    </style>

    <div class="page-title-bg">
        <div class="container">
            <?php if($role == 'president'): ?>
            <h1 id="pageMainTitle"><span class="english-text">School Leadership & Management</span><span class="hindi-text">विद्यालय नेतृत्व एवं प्रबंधन</span><span class="bengali-text">বিদ্যালয়ের নেতৃত্ব ও ব্যবস্থাপনা</span></h1>
            <?php elseif($role == 'principal'): ?>
            <h1><span class="english-text">Principal / Headmistress</span><span class="hindi-text">प्रधानाचार्य / प्रधानाध्यापिका</span><span class="bengali-text">প্রধান শিক্ষক / প্রধান শিক্ষিকা</span></h1>
            <?php elseif($role == 'secretary'): ?>
             <h1><span class="english-text">School Secretary</span><span class="hindi-text">विद्यालय सचिव</span><span class="bengali-text">বিদ্যালয়ের সচিব</span></h1>
              <?php elseif($role == 'man_commite'): ?>   
                  <h1><span class="english-text">Management Committee</span><span class="hindi-text">विद्यालय सचिव</span><span class="bengali-text">বিদ্যালয়ের সচিব</span></h1>    
                     <?php endif; ?>
            <p><span class="english-text">Based on Official School Diary 2025-26 | Jagadish Chandra High School, Ghatsila</span><span class="hindi-text">आधिकारिक स्कूल डायरी 2026-27 पर आधारित</span><span class="bengali-text">অফিসিয়াল স্কুল ডায়েরি 2025-26 এর ভিত্তিতে</span></p></div>
    </div>

    <div class="container" style="padding-bottom: 60px;">
         <?php if($role == 'president'): ?>
        <!-- President Section (from PDF data: Mr. Tapas Chatterjee) -->
        <div id="president" class="profile-card">
            <div class="row">
                <div class="col-md-3 text-center"><img src="<?php echo base_url('assets/images/seceratory.jpeg'); ?>" class="profile-img" alt="President"><h3><span class="english-text">Mr. Tapas Chatterjee</span><span class="hindi-text">श्री तपस चटर्जी</span><span class="bengali-text">শ্রী তপস চট্টোপাধ্যায়</span></h3><p><strong><span class="english-text">President, School Management Committee</span><span class="hindi-text">अध्यक्ष, विद्यालय प्रबंधन समिति</span><span class="bengali-text">সভাপতি, স্কুল ম্যানেজমেন্ট কমিটি</span></strong></p></div>
                <div class="col-md-9">
                    <div class="english-block"><h4>Official Message from President</h4><p>As per the school records (Page 17 of official diary), I, Tapas Chatterjee, serve as the President of Jagadish Chandra High School. Our institution, established in 1927/1928 as Ghatsila Middle School, has a rich legacy supported by Raja Bahadur Jagadish Chandra Deo Dhabaldeb. We are committed to providing quality education to the multilingual, multicultural community of Ghatsila. Our vision is to uphold honesty, truth, and good values — 'Satya Meva Jayate'. We strive to empower rural students with character, self-reliance, and leadership.</p><div class="message-box">"Our mission: To help students become men and women of character, ready to give themselves in service of others." — President's Desk</div></div>
                    <div class="hindi-block"><h4>अध्यक्ष का आधिकारिक संदेश</h4><p>स्कूल रिकॉर्ड के अनुसार, मैं तपस चटर्जी, जगदीश चंद्र हाई स्कूल के अध्यक्ष के रूप में कार्यरत हूँ। हमारी संस्था, जिसकी स्थापना 1927/28 में हुई, राजा बहादुर जगदीश चंद्र देव धबलदेव द्वारा समर्थित है। हम गुणवत्तापूर्ण शिक्षा, सत्य और ईमानदारी के प्रति प्रतिबद्ध हैं।</p></div>
                    <div class="bengali-block"><h4>সভাপতির অফিসিয়াল বার্তা</h4><p>বিদ্যালয়ের রেকর্ড অনুযায়ী, আমি তপস চট্টোপাধ্যায়, জগদীশ চন্দ্র হাই স্কুলের সভাপতি। আমাদের প্রতিষ্ঠান ১৯২৭/২৮ সালে প্রতিষ্ঠিত, রাজা বাহাদুর জগদীশ চন্দ্র দেব ধবলদেব দ্বারা সমর্থিত। আমরা গুণগত শিক্ষা ও সত্যের প্রতি প্রতিশ্রুতিবদ্ধ।</p></div>
                </div>
            </div>
        </div>
        <?php endif; ?>
         <?php if($role == 'principal'): ?>
        <!-- Principal / Headmistress Section (from PDF: Mrs. Rita Mandal, H.M.) -->
        <div id="principal" class="profile-card">
            <div class="row">
                <div class="col-md-3 text-center"><img src="<?php echo base_url('assets/images/head_master.jpeg'); ?>" class="profile-img" alt="Principal"><h3><span class="english-text">Mr. Rupnath Tiwari</span><span class="hindi-text">श्रीमती रीता मंडल</span><span class="bengali-text">শ্রীমতী রীতা মন্ডল</span></h3><p><strong>M.A., B.Ed. <span class="english-text">(Headmistress)</span><span class="hindi-text">(प्रधानाध्यापिका)</span><span class="bengali-text">(প্রধান শিক্ষিকা)</span></strong></p></div>
                <div class="col-md-9">
                    <div class="english-block"><h4>Headmistress's Desk</h4><p>I, Rupnath Tiwari, am honored to lead Jagadish Chandra High School as the Headmistress. Our school diary (Page 17 & 19) reflects our commitment to holistic education. We focus on character building, academic excellence, and co-curricular activities. Our students have excelled in board exams, Olympiads, and cultural events. I urge parents and students to follow school rules, maintain 75% attendance, and wear proper uniform as prescribed. Together we shall continue the glorious legacy of this institution.</p><ul><li><i class="fa fa-calendar"></i> School Hours: Mon-Sat 9:00 AM - 3:00 PM (V to X)</li><li><i class="fa fa-graduation-cap"></i> Mission: Dignity of labour, self-respect & teamwork</li></ul><div class="message-box">"Education is the manifestation of perfection already in man" – Swami Vivekananda (School Diary, Page 23)</div></div>
                    <div class="hindi-block"><h4>प्रधानाध्यापिका का संदेश</h4><p>मैं, रीता मंडल, जगदीश चंद्र हाई स्कूल की प्रधानाध्यापिका हूँ। हम चरित्र निर्माण, शैक्षणिक उत्कृष्टता और 75% उपस्थिति पर जोर देते हैं। स्कूल ड्रेस और नियमों का पालन अनिवार्य है।</p></div>
                    <div class="bengali-block"><h4>প্রধান শিক্ষিকার বার্তা</h4><p>আমি, রীতা মন্ডল, জগদীশ চন্দ্র হাই স্কুলের প্রধান শিক্ষিকা। আমরা চরিত্র গঠন ও একাডেমিক উৎকর্ষে বিশ্বাসী। ৭৫% উপস্থিতি ও স্কুল ড্রেস বাধ্যতামূলক।</p></div>
                </div>
            </div>
        </div>
 <?php endif; ?>

    <?php if($role == 'secretary'): ?>
        <!-- Secretary Section (from PDF: Mr. Manoranjan Baksi) -->
        <div id="secretary" class="profile-card">
            <div class="row">
                <div class="col-md-3 text-center"><img src="<?php echo base_url('assets/images/principal.jpeg'); ?>" class="profile-img" alt="Secretary"><h3><span class="english-text">Mr. Manoranjan Baksi</span><span class="hindi-text">श्री मनोरंजन बक्षी</span><span class="bengali-text">শ্রী মনোরঞ্জন বক্সী</span></h3><p><strong><span class="english-text">Secretary, Governing Body</span><span class="hindi-text">सचिव, प्रशासनिक निकाय</span><span class="bengali-text">সচিব, গভর্নিং বডি</span></strong></p></div>
                <div class="col-md-9">
                    <div class="english-block"><h4>Secretary's Message</h4><p>As Secretary (as recorded in school diary page 17), I, Manoranjan Baksi, ensure smooth administration and implementation of policies. We have initiated Book Bank facility through Lily Foundation for needy students and 'Smile Scholarship' for underprivileged meritorious children. Our school is a Bengali minority institution recognized by the state government since 1972, safeguarding language and culture. We are proud of our dedicated teachers, computer labs, and digital library. Parents are requested to cooperate and attend parent-teacher meetings regularly.</p><p><strong>Book Bank:</strong> Students can borrow one book for one week. <strong>Smile Scholarship:</strong> Financial aid for economically weak but academically strong students.</p></div>
                    <div class="hindi-block"><h4>सचिव का संदेश</h4><p>सचिव मनोरंजन बक्षी के अनुसार, लिली फाउंडेशन द्वारा बुक बैंक और स्माइल स्कॉलरशिप की सुविधा। अभिभावकों से सहयोग की अपील।</p></div>
                    <div class="bengali-block"><h4>সচিবের বার্তা</h4><p>সচিব মনোরঞ্জন বক্সী জানিয়েছেন, লিলি ফাউন্ডেশন দ্বারা বই ব্যাংক ও স্মাইল স্কলারশিপ সুবিধা। অভিভাবকদের সহযোগিতা কাম্য।</p></div>
                </div>
            </div>
        </div>
 <?php endif; ?>
 <?php if($role == 'man_commite'): ?>
<div id="teachers" class="school-badge">
            <h3 class="section-title"><span class="english-text"><i class="fa fa-users"></i> Management Committee (As per School Diary)</span><span class="hindi-text">प्रबंध समिति (स्कूल डायरी के अनुसार)</span><span class="bengali-text">ম্যানেজমেন্ট কমিটি (স্কুল ডায়েরি অনুযায়ী)</span></h3>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-user-circle"></i> <strong>Mr. Tapas Chatterjee</strong> - President</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mr. Manoranjan Baksi</strong> - Secretary</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mr. Uttam Kumar Sinha</strong> - Bursar</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mr. Nil Shankar Dutta</strong> - M.C. Member</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mrs. Amita Bose</strong> - M.C. Member</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mr. Kantalal Das</strong> - M.C. Member</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mrs. Shilpi Sarkar</strong> - M.C. Member</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mrs. Rita Mandal</strong> - H.M.</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mrs. Rashmi Sharma</strong> - T.R.</li>
                        <li><i class="fa fa-user-circle"></i> <strong>Mr. Jaharlal Soren</strong> - G.R.</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="english-block"><p><i class="fa fa-info-circle"></i> The school was established in 1927/28, upgraded to high school in 1943, and declared a Bengali Minority High School in 1972. Affiliated to CBSE pattern, following state curriculum.</p><p><strong>Origin:</strong> Amidst beautiful surroundings on NH-18 link road, Ghatsila. The school continues to contribute glorious achievements in academic and cultural pursuits.</p></div>
                </div>
            </div>
        </div>

     
<?php endif; ?>
    </div>
    <script src="https://rcsindia.co.in/newcbse19/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            var savedLang = localStorage.getItem('schoolLang');
            if(savedLang && (savedLang === 'english' || savedLang === 'hindi' || savedLang === 'bengali')){ $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-'+savedLang); $('.lang-btn').removeClass('active'); $('.lang-btn[data-lang="'+savedLang+'"]').addClass('active'); }
            else { $('body').addClass('lang-english'); $('.lang-btn[data-lang="english"]').addClass('active'); }
            $('.lang-btn').click(function(){ var lang = $(this).data('lang'); $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-'+lang); $('.lang-btn').removeClass('active'); $(this).addClass('active'); localStorage.setItem('schoolLang', lang); });
            // Smooth scroll for anchors
            $('a[href^="#"]').on('click', function(e){ e.preventDefault(); var target = $(this.getAttribute('href')); if(target.length) { $('html,body').stop().animate({ scrollTop: target.offset().top - 70 }, 600); } });
        });
    </script>
</body>
</html>