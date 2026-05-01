<style>
        /* Trilingual styles */
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&display=swap');
       body {
            font-family: 'Arial', sans-serif;
           
            background: linear-gradient(135deg, #f0f2f5 0%, #e8ecf1 100%);
        }
        
        /* Guidelines specific styles */
        .guidelines-section {
            background: #f9fafc;
            padding: 60px 0;
        }
        .guidelines-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 8px 25px rgba(0,0,0,0.05);
            padding: 30px;
            margin-bottom: 30px;
            transition: all 0.3s ease;
            border-left: 5px solid #174873;
        }
        .guidelines-card h3 {
            color: #174873;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 24px;
        }
        .guidelines-list {
            list-style: none;
            padding-left: 0;
        }
        .guidelines-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }
        .guidelines-list li i {
            color: #174873;
            margin-top: 3px;
            font-size: 16px;
        }
        .guidelines-list li span {
            flex: 1;
            line-height: 1.6;
        }
        .badge-custom {
            background: #174873;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
            margin-bottom: 15px;
        }
        .rule-number {
            background: #174873;
            color: white;
            width: 28px;
            height: 28px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-size: 14px;
            font-weight: bold;
            margin-right: 12px;
            flex-shrink: 0;
        }
        .double-column {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
        }
        .double-column > div {
            flex: 1;
            min-width: 280px;
        }
        @media (max-width: 768px) {
            .guidelines-card { padding: 20px; }
            .guidelines-card h3 { font-size: 20px; }
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
            color: #fff;
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
        .profile-card { background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; transition: transform 0.3s; text-align: center; }
        .profile-card:hover { transform: translateY(-5px); }
        .profile-img { width: 180px; height: 180px; border-radius: 50%; object-fit: cover; border: 5px solid #ff6b6b; margin-bottom: 20px; background: #e9ecef; }
        .page-title-bg { background: linear-gradient(135deg, #1e3c72, #2a5298); padding: 50px 0; margin-bottom: 50px; color: white; text-align: center; }
        .school-badge { background: #ff6b6b10; border-radius: 15px; padding: 20px; margin-bottom: 25px; border-left: 4px solid #ff6b6b; }
        .staff-table { background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 5px 15px rgba(0,0,0,0.05); }
        .staff-table th { background: #2c3e50; color: white; }
        .section-title { border-left: 5px solid #ff6b6b; padding-left: 20px; margin: 30px 0 20px; }
        .school-badge { background: #ff6b6b10; border-radius: 15px; padding: 20px; margin-bottom: 25px; border-left: 4px solid #ff6b6b; }
        @media (max-width: 768px) { .profile-img { width: 130px; height: 130px; } .lang-btn { padding: 2px 8px; font-size: 10px; } }
        .footer-widget h2 { font-size: 18px; }
        .message-box { background: #f8f9fa; border-radius: 15px; padding: 25px; font-style: italic; border-left: 5px solid #ff6b6b; margin-top: 20px; }


              /* House Grid */
        .house-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 30px;
            padding: 50px 0;
        }

        /* House Cards */
        .house-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
        }

        .house-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 30px 50px rgba(0,0,0,0.2);
        }

        /* House Header Colors */
        .house-card.red { border-top: 8px solid #dc3545; }
        .house-card.blue { border-top: 8px solid #007bff; }
        .house-card.green { border-top: 8px solid #28a745; }
        .house-card.yellow { border-top: 8px solid #ffc107; }

        .house-header {
            padding: 25px;
            text-align: center;
            position: relative;
        }

        .house-header.red { background: linear-gradient(135deg, #dc3545, #ff6b6b); }
        .house-header.blue { background: linear-gradient(135deg, #007bff, #4da8ff); }
        .house-header.green { background: linear-gradient(135deg, #28a745, #5cb85c); }
        .house-header.yellow { background: linear-gradient(135deg, #e6a017, #ffc107); }

        .house-header h2 {
            color: white;
            font-size: 28px;
            font-weight: 800;
            margin-top: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        .house-header h3 {
            color: rgba(255,255,255,0.9);
            font-size: 18px;
            font-weight: 500;
        }

        /* SVG Icon */
        .house-svg {
            width: 100px;
            height: 100px;
            margin: 0 auto 15px;
            background: white;
            border-radius: 50%;
            padding: 15px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .house-body {
            padding: 25px;
        }

        .member-list {
            list-style: none;
            margin-top: 15px;
        }

        .member-list li {
            padding: 10px 0;
            border-bottom: 1px solid #e0e0e0;
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 14px;
        }

        .member-list li:last-child {
            border-bottom: none;
        }

        .member-list li i {
            width: 25px;
            color: #1a4a6f;
            font-size: 14px;
        }

        .supervisor-badge {
            background: #ffd700;
            color: #1a4a6f;
            padding: 2px 8px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
            margin-left: 8px;
        }

        .house-master-badge {
            background: #28a745;
            color: white;
            padding: 2px 8px;
            border-radius: 20px;
            font-size: 10px;
            font-weight: 700;
            margin-left: 8px;
        }

        /* Overall Supervisor Section */
        .supervisor-section {
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            border-radius: 20px;
            padding: 30px;
            text-align: center;
            margin: 20px 0 50px;
            color: white;
        }

        .supervisor-section i {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .supervisor-section h3 {
            font-size: 24px;
            font-weight: 700;
            color: #fff;
        }

        .supervisor-section p {
            font-size: 18px;
            margin-top: 10px;
            opacity: 0.9;
        }

        /* Dress Code Section */
        .dress-code-section {
            background: white;
            border-radius: 25px;
            padding: 35px;
            margin: 30px 0;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .dress-code-section h2 {
            text-align: center;
            font-size: 32px;
            font-weight: 800;
            background: linear-gradient(135deg, #1a4a6f, #ff6b35);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 30px;
        }

        .dress-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
        }

        .dress-card {
            background: #f8f9fa;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
        }

        .dress-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .dress-color {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin: 0 auto 15px;
            border: 3px solid white;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }

        .dress-card h4 {
            font-size: 20px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .dress-card p {
            font-size: 14px;
            color: #555;
        }
 @media (max-width: 768px) {
            .page-title h1 { font-size: 28px; }
            .house-grid { grid-template-columns: 1fr; }
            .dress-grid { grid-template-columns: 1fr; }
        }
    </style>


    <!-- header area start -->
  
    <!-- header area end -->

    <!-- Page Title Area -->
     <?php if($role == 'all_guide'): ?>
    <div class="page-title">
        <div class="container">
            <h1>
                <span class="english-text">School Guidelines & Rules</span>
                <span class="hindi-text">विद्यालय दिशानिर्देश और नियम</span>
                <span class="bengali-text">বিদ্যালয়ের নির্দেশিকা ও নিয়মাবলী</span>
            </h1>
            <p>
                <span class="english-text">For Students, Parents & Guardians | Extracted from School Diary</span>
                <span class="hindi-text">छात्रों, अभिभावकों के लिए | स्कूल डायरी  से सारांशित</span>
                <span class="bengali-text">শিক্ষার্থী, অভিভাবকদের জন্য | স্কুল ডায়েরি  থেকে সংগৃহীত</span>
            </p>
        </div>
    </div>

    <!-- Guidelines Content Section -->
    <div class="guidelines-section">
        <div class="container">
            <div class="double-column">
                <!-- Left Column: School Rules for Students / छात्र नियम / ছাত্রদের নিয়ম -->
                <div class="guidelines-card">
                    <div class="badge-custom">
                        <i class="fas fa-graduation-cap"></i> 
                        <span class="english-text">For Students</span>
                        <span class="hindi-text">छात्र-छात्राओं के लिए</span>
                        <span class="bengali-text">শিক্ষার্থীদের জন্য</span>
                    </div>
                    <h3>
                        <span class="english-text">📖 School Rules for Students</span>
                        <span class="hindi-text">📖 छात्र-छात्राओं के लिए विद्यालय के नियम</span>
                        <span class="bengali-text">📖 শিক্ষার্থীদের জন্য বিদ্যালয়ের নিয়মাবলী</span>
                    </h3>
                    <ul class="guidelines-list">
                        <li><i class="fas fa-book"></i> <span class="english-text">Every student should carry his/her diary to school each day.</span><span class="hindi-text">प्रत्येक छात्र–छात्रा को अपनी डायरी प्रतिदिन लाना आवश्यक है।</span><span class="bengali-text">প্রত্যেক শিক্ষার্থীকে প্রতিদিন তার/তার ডায়েরি স্কুলে আনতে হবে।</span></li>
                        <li><i class="fas fa-clock"></i> <span class="english-text">Students should arrive at school 5 minutes before the 1st bell rings in the morning.</span><span class="hindi-text">छात्र–छात्राओं को पहली घंटी बजने के 5 मिनट पहले विद्यालय पहुँचना चाहिए।</span><span class="bengali-text">শিক্ষার্থীদের প্রথম ঘণ্টা বাজার ৫ মিনিট আগে স্কুলে পৌঁছাতে হবে।</span></li>
                        <li><i class="fas fa-hand-holding-heart"></i> <span class="english-text">Students should maintain personal hygiene and come to school clean and neatly dressed. Students who are shabbily dressed or not in uniform will be sent back home.</span><span class="hindi-text">छात्र–छात्राओं को अपने स्वास्थ्य का ख्याल रखना चाहिए तथा साफ–सुथरे पोशाक में विद्यालय आना चाहिए। वैसे विद्यार्थी जो विद्यालय पोशाक में नहीं होंगे अथवा गंदे पोशाक में होंगे उसे वापस घर भेज दिया जायेगा।</span><span class="bengali-text">শিক্ষার্থীদের ব্যক্তিগত পরিচ্ছন্নতা বজায় রাখতে হবে এবং পরিষ্কার ও পরিচ্ছন্ন পোশাকে স্কুলে আসতে হবে। যারা স্কুলের পোশাকে না থাকবে বা অপরিচ্ছন্ন পোশাকে থাকবে তাদের বাড়ি ফেরত পাঠানো হবে।</span></li>
                        <li><i class="fas fa-cut"></i> <span class="english-text">Boys should get their hair cut at regular intervals. Boys are not allowed to wear low-waist narrow pants.</span><span class="hindi-text">छात्रों को समय–समय पर अपने बाल कटवाने चाहिए तथा तंग पैंट या कमर से नीचे वाली पैंट नहीं पहननी चाहिए।</span><span class="bengali-text">ছেলেদের নিয়মিত চুল কাটাতে হবে। ছেলেদের নিচু কোমরের সরু প্যান্ট পরার অনুমতি নেই।</span></li>
                        <li><i class="fas fa-volume-off"></i> <span class="english-text">No shouting, spitting or whistling is allowed in the school premises.</span><span class="hindi-text">विद्यालय परिसर में विद्यार्थियों को शोर करना, थूकना या सीटी बजाना बिल्कुल मना है।</span><span class="bengali-text">বিদ্যালয় চত্বরে চিৎকার করা, থুতু ফেলা বা হুইসেল বাজানো সম্পূর্ণ নিষিদ্ধ।</span></li>
                        <li><i class="fas fa-building"></i> <span class="english-text">Care must be taken of all the school property. No writing on the desk/wall. No sitting on the grill in the auditorium or on the desk. Damage done even accidentally should be reported at once to the class teacher or headmistress. The charges will be borne by the person who is found responsible for the damage.</span><span class="hindi-text">विद्यालय की संपत्ति की रक्षा का ख्याल विद्यार्थियों को रखना चाहिए डेस्क या सभागार के बाहर वाले ग्रिल पर नहीं बैठना चाहिए। अगर कोई छात्र–छात्रा विद्यालय की वस्तुओं को नुकसान पहुँचाता है तो इसकी सूचना वर्ग शिक्षक / शिक्षिका अथवा प्रधानाध्यापिका को तुरंत देनी चाहिए। क्षति के जिम्मेवार छात्र–छात्राओं से मरम्मत शुल्क अथवा लागत मूल्य वसूला जायेगा।</span><span class="bengali-text">বিদ্যালয়ের সম্পত্তির যত্ন নিতে হবে। ডেস্ক/দেয়ালে লেখা যাবে না। অডিটোরিয়ামের গ্রিল বা ডেস্কে বসা যাবে না। দুর্ঘটনাবশত কোনো ক্ষতি হলে তা অবিলম্বে ক্লাস শিক্ষক বা প্রধান শিক্ষিকাকে জানাতে হবে। ক্ষতির জন্য দায়ী ব্যক্তিকে খরচ বহন করতে হবে।</span></li>
                        <li><i class="fas fa-mobile-alt"></i> <span class="english-text">Students are not allowed to carry mobile phones, CDs or any electronic gadgets.</span><span class="hindi-text">विद्यार्थियों को मोबाइल, CD या अन्य प्रकार के विद्युत चालित उपकरण / यूज विद्यालय में लाना मना है।</span><span class="bengali-text">শিক্ষার্থীদের মোবাইল ফোন, সিডি বা কোনো ইলেকট্রনিক গ্যাজেট বহন করার অনুমতি নেই।</span></li>
                        <li><i class="fas fa-smile"></i> <span class="english-text">Students should observe and follow polite manners wherever they go and they should always remember that the school is judged by their conduct.</span><span class="hindi-text">विद्यार्थियों को विनम्र आचरण अपनाना चाहिए तथा इसका अनुसरण भी करना चाहिए। उन्हें यह याद रखनी चाहिए कि विद्यालय का गौरव उन पर निर्भर करता है।</span><span class="bengali-text">শিক্ষার্থীদের সর্বত্র ভদ্র আচরণ মেনে চলতে হবে এবং তাদের সর্বদা মনে রাখতে হবে যে বিদ্যালয়ের মর্যাদা তাদের আচরণ দ্বারা বিচারিত হয়।</span></li>
                        <li><i class="fas fa-tasks"></i> <span class="english-text">Students should never say 'No' to any work assigned.</span><span class="hindi-text">विद्यार्थियों को विद्यालय द्वारा दिए जाने वाले कार्य को पूरा करना चाहिए तथा कभी 'ना' नहीं कहना चाहिए।</span><span class="bengali-text">শিক্ষার্থীদের কখনো দেওয়া কোনো কাজের জন্য 'না' বলা উচিত নয়।</span></li>
                    </ul>
                </div>

                <!-- Right Column: Guidelines for Parents/Guardians -->
                <div class="guidelines-card">
                    <div class="badge-custom">
                        <i class="fas fa-users"></i> 
                        <span class="english-text">For Parents & Guardians</span>
                        <span class="hindi-text">माता-पिता एवं अभिभावकों के लिए</span>
                        <span class="bengali-text">পিতামাতা ও অভিভাবকদের জন্য</span>
                    </div>
                    <h3>
                        <span class="english-text">👪 General Guidelines to Parents / Guardian</span>
                        <span class="hindi-text">👪 माता-पिता / अभिभावक के लिए सामान्य दिशा निर्देश</span>
                        <span class="bengali-text">👪 পিতামাতা / অভিভাবকের জন্য সাধারণ নির্দেশিকা</span>
                    </h3>
                    <ul class="guidelines-list">
                        <li><i class="fas fa-comment-dots"></i> <span class="english-text">Any communication made by parents/guardians should be made to the Headmistress.</span><span class="hindi-text">किसी प्रकार की वातचीत माता-पिता / अभिभावक को प्रधानाध्यापिका से करनी चाहिए।</span><span class="bengali-text">পিতামাতা/অভিভাবকদের যেকোনো যোগাযোগ প্রধান শিক্ষিকার সাথে করতে হবে।</span></li>
                        <li><i class="fas fa-book-reader"></i> <span class="english-text">Parents are requested to read the contents of the school diary carefully and abide by the rules laid down by the school authorities.</span><span class="hindi-text">अभिभावकों से अनुरोध है कि वे विद्यालय डायरी में विद्यालय प्रबंधन द्वारा दिए गये तथ्यों को भली–भांति समझ लें तथा तदनुरूप अनुशरण करें।</span><span class="bengali-text">পিতামাতাদের অনুরোধ করা হচ্ছে যে তারা স্কুল ডায়েরির বিষয়বস্তু মনোযোগ সহকারে পড়ুন এবং স্কুল কর্তৃপক্ষের নির্ধারিত নিয়ম মেনে চলুন।</span></li>
                        <li><i class="fas fa-handshake"></i> <span class="english-text">Parents co-operation is highly solicited to build the future of their ward.</span><span class="hindi-text">बच्चों के भविष्य निर्माण के लिए अभिभावकों का सहयोग बहुत ही महत्वपूर्ण है।</span><span class="bengali-text">তাদের সন্তানের ভবিষ্যত গঠনে অভিভাবকদের সহযোগিতা অত্যন্ত কাম্য।</span></li>
                        <li><i class="fas fa-door-closed"></i> <span class="english-text">No child will be allowed to leave the premises before the school is over.</span><span class="hindi-text">विद्यालय अवधि पूरा होने के पहले विद्यार्थियों को विद्यालय परिसर छोड़ना मना है।</span><span class="bengali-text">বিদ্যালয় শেষ হওয়ার আগে কোনো শিশুকে প্রাঙ্গণ ছেড়ে যাওয়ার অনুমতি দেওয়া হবে না।</span></li>
                        <li><i class="fas fa-chart-line"></i> <span class="english-text">If you feel that your ward is not making the desired progress, then the Headmistress should be contacted.</span><span class="hindi-text">अगर आपको लगता है कि आपके बच्चे आशानुरूप प्रगति नहीं कर रहे हैं तो आप प्रधानाध्यापिका से सम्पर्क कर सकते हैं।</span><span class="bengali-text">যদি আপনি মনে করেন যে আপনার সন্তান কাঙ্খিত অগ্রগতি করছে না, তাহলে প্রধান শিক্ষিকার সাথে যোগাযোগ করুন।</span></li>
                        <li><i class="fas fa-chalkboard-teacher"></i> <span class="english-text">Parents are requested not to enter class rooms during school hours.</span><span class="hindi-text">विद्यालय अवधि में कक्षा में प्रवेश करना अभिभावकों के लिए निषेध है।</span><span class="bengali-text">পিতামাতাদের অনুরোধ করা হচ্ছে স্কুলের সময় ক্লাসরুমে প্রবেশ না করতে।</span></li>
                        <li><i class="fas fa-calendar-alt"></i> <span class="english-text">Parents must attend parent teacher meeting and frequently meet the teacher to discuss the progress of their child.</span><span class="hindi-text">शिक्षक–अभिभावक बैठक में अभिभावकों को निश्चित रूप से भाग लेना चाहिए तथा बच्चों के प्रगति के लिए खुलकर बातें करनी चाहिए।</span><span class="bengali-text">পিতামাতাদের অবশ্যই পিতা-মাতা-শিক্ষক সভায় যোগ দিতে হবে এবং তাদের সন্তানের অগ্রগতি নিয়ে আলোচনা করতে শিক্ষকের সাথে নিয়মিত দেখা করতে হবে।</span></li>
                        <li><i class="fas fa-pen-fancy"></i> <span class="english-text">Please do not write any remarks in the children's note book.</span><span class="hindi-text">बच्चों के नोट बुक पर किसी प्रकार का रिमार्क (चिह्न) न दें।</span><span class="bengali-text">শিশুদের নোটবুকে কোনো মন্তব্য লিখবেন না।</span></li>
                    </ul>
                </div>
            </div>

            <!-- Additional Information: School Hours & Important Notes -->
            <div class="guidelines-card" style="margin-top: 20px;">
                <div class="badge-custom">
                    <i class="fas fa-school"></i>
                    <span class="english-text">School Hours & Important Information</span>
                    <span class="hindi-text">विद्यालय का समय और महत्वपूर्ण जानकारी</span>
                    <span class="bengali-text">বিদ্যালয়ের সময় ও গুরুত্বপূর্ণ তথ্য</span>
                </div>
                <div class="double-column">
                    <div>
                        <h4><i class="fas fa-clock"></i> <span class="english-text">School Hours</span><span class="hindi-text">विद्यालय का समय</span><span class="bengali-text">বিদ্যালয়ের সময়সূচি</span></h4>
                        <ul class="guidelines-list">
                            <li><i class="fas fa-child"></i> <span class="english-text">Class I to IV: 9:00 a.m. to 2:00 p.m.</span><span class="hindi-text">कक्षा I से IV: सुबह 9:00 से दोपहर 2:00 बजे तक</span><span class="bengali-text">প্রথম থেকে চতুর্থ শ্রেণি: সকাল ৯:০০ থেকে বিকাল ২:০০ পর্যন্ত</span></li>
                            <li><i class="fas fa-user-graduate"></i> <span class="english-text">Class V to X: 9:00 a.m. to 3:00 p.m.</span><span class="hindi-text">कक्षा V से X: सुबह 9:00 से दोपहर 3:00 बजे तक</span><span class="bengali-text">পঞ্চম থেকে দশম শ্রেণি: সকাল ৯:০০ থেকে বিকাল ৩:০০ পর্যন্ত</span></li>
                            <li><i class="fas fa-calendar-week"></i> <span class="english-text">3rd Saturday holiday as per government rule. Last working day of the month till 5th period.</span><span class="hindi-text">सरकारी नियमानुसार तीसरा शनिवार अवकाश। माह का अंतिम कार्य दिवस पांचवीं अवधि तक।</span><span class="bengali-text">সরকারি নিয়ম অনুযায়ী তৃতীয় শনিবার ছুটি। মাসের শেষ কার্যদিবস পঞ্চম পিরিয়ড পর্যন্ত।</span></li>
                        </ul>
                    </div>
                    <div>
                        <h4><i class="fas fa-info-circle"></i> <span class="english-text">Important Note</span><span class="hindi-text">महत्वपूर्ण सूचना</span><span class="bengali-text">গুরুত্বপূর্ণ তথ্য</span></h4>
                        <ul class="guidelines-list">
                            <li><i class="fas fa-clock"></i> <span class="english-text">Headmistress available from 11:00 a.m. to 12:00 Noon for parents.</span><span class="hindi-text">प्रधानाध्यापिका अभिभावकों के लिए सुबह 11:00 से दोपहर 12:00 बजे तक उपलब्ध हैं।</span><span class="bengali-text">প্রধান শিক্ষিকা অভিভাবকদের জন্য সকাল ১১:০০ থেকে দুপুর ১২:০০ পর্যন্ত উপলব্ধ।</span></li>
                            <li><i class="fas fa-hands-helping"></i> <span class="english-text">Lily Foundation Book Bank: Students can borrow one book at a time for one week.</span><span class="hindi-text">लिली फाउंडेशन बुक बैंक: छात्र एक समय में एक पुस्तक एक सप्ताह के लिए उधार ले सकते हैं।</span><span class="bengali-text">লিলি ফাউন্ডেশন বুক ব্যাংক: শিক্ষার্থীরা একবারে একটি বই এক সপ্তাহের জন্য ধার নিতে পারে।</span></li>
                            <li><i class="fas fa-trophy"></i> <span class="english-text">Smile Scholarship for academically strong students from low-income families.</span><span class="hindi-text">कम आय वाले परिवारों के शैक्षणिक रूप से मजबूत छात्रों के लिए स्माइल स्कॉलरशिप।</span><span class="bengali-text">নিম্ন আয়ের পরিবারের শিক্ষার্থীদের জন্য স্মাইল স্কলারশিপ।</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- guidellines -->
              <div class="school-badge" style="margin-top: 30px;">
            <h3><span class="english-text">📜 School Rules & Uniform (Excerpts from School Diary)</span><span class="hindi-text">📜 विद्यालय नियम और पोशाक</span><span class="bengali-text">📜 স্কুলের নিয়ম ও পোশাক</span></h3>
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Attendance:</strong> 75% attendance mandatory. Latecomers not allowed.</p>
                    <p><strong>Discipline:</strong> No shouting, spitting, mobile phones. Respect school property.</p>
                    <p><strong>Uniform (Boys):</strong> White half shirt & navy blue half pant (I-IV); White half shirt & navy blue full pant (V-X). White canvas shoes & white socks.</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Uniform (Girls):</strong> White shirt & navy blue skirt (I-VIII); Navy blue kameej & white salwar (IX-X). Wednesday: White salwar & white kameej.</p>
                    <p><strong>School Hours:</strong> I-IV: 9 AM - 2 PM; V-X: 9 AM - 3 PM. 3rd Saturday holiday.</p>
                    <p><i class="fa fa-heart" style="color:#ff6b6b;"></i> <strong>Lily Foundation Book Bank & Smile Scholarship available for needy students.</strong></p>
                    <p><strong>Book Bank:</strong> Students can borrow one book for one week.</p>
                    <p> <strong>Smile Scholarship:</strong> Financial aid for economically weak but academically strong students.</p>
                </div>
            </div>
        </div>
        </div>
    </div>
     <?php endif; ?>
    <?php if($role == 'teacher'): ?>
     <div class="page-title">
    <div class="container">
        <h1>
            <span class="english-text">Our Dedicated Teachers & Staff</span>
            <span class="hindi-text">हमारे समर्पित शिक्षक और कर्मचारी</span>
            <span class="bengali-text">আমাদের নিবেদিত শিক্ষক এবং কর্মী</span>
        </h1>
        <p>
            <span class="english-text">Committed to excellence in education and guidance</span>
            <span class="hindi-text">शिक्षा और मार्गदर्शन में उत्कृष्टता के लिए प्रतिबद्ध</span>
            <span class="bengali-text">শিক্ষা এবং নির্দেশনায় উৎকর্ষের জন্য প্রতিশ্রুতিবদ্ধ</span>
        </p>
    </div>
</div>

    <div class="container" style="padding-bottom: 60px;">
   <!-- Complete Teachers List (Secondary + Primary) as per PDF -->
        <div class="staff-table">
            <h3 class="section-title"><span class="english-text"><i class="fa fa-chalkboard-user"></i> Our Dedicated Teachers (Secondary Section)</span><span class="hindi-text">हमारे शिक्षकगण (माध्यमिक)</span><span class="bengali-text">আমাদের শিক্ষকবৃন্দ (মাধ্যমিক)</span></h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead><tr><th>#</th><th><span class="english-text">Name</span><span class="hindi-text">नाम</span><span class="bengali-text">নাম</span></th><th>Qualification</th></tr></thead>
                    <tbody>
                        <tr><td>1</td><td>Mr. Rupnath Tiwari (H.M.)</td><td>M.A., B.Ed.</td></tr><tr><td>2</td><td>Mrs. Mousumi Bhattacherjee</td><td>M.A., B.Ed.</td></tr><tr><td>3</td><td>Mrs. Archana Rani Sharma</td><td>M.A., B.Ed.</td></tr><tr><td>4</td><td>Mrs. Arpita Roy</td><td>M.A., B.Ed.</td></tr><tr><td>5</td><td>Mrs. Rashmi Sharma</td><td>M.A., B.Ed.</td></tr><tr><td>6</td><td>Mr. Tapobrat Giri</td><td>M.Sc., B.Ed.</td></tr><tr><td>7</td><td>Mr. Shishulal Mahato</td><td>M.A., B.Ed.</td></tr><tr><td>8</td><td>Mr. Umesh Bhagat</td><td>M.Sc., B.Ed.</td></tr><tr><td>10</td><td>Mr. Pallab Kumar Dey</td><td>B.A., M.P.Ed.</td></tr><tr><td>11</td><td>Mr. Goutam Kumar Barik</td><td>M.Sc., B.Ed.</td></tr><tr><td>12</td><td>Mr. Partha Pratim Ghosh</td><td>M.Sc., B.Ed.</td></tr><tr><td>13</td><td>Mrs. Mousumi Dutta</td><td>M.A., B.Ed.</td></tr><tr><td>14</td><td>Mrs. Baby Shaw</td><td>M.A., B.Ed.</td></tr><tr><td>15</td><td>Mrs. Riya Kumari</td><td>M.A., B.Ed.</td></tr><tr><td>16</td><td>Mr. Madhusudan Mal</td><td>M.A., B.Ed., M.Ed.</td></tr><tr><td>17</td><td>Mr. Tampa Rajak</td><td>M.A., B.Ed.</td></tr><tr><td>18</td><td>Mrs. Paromita Guin</td><td>B.Sc., B.Ed.</td></tr><tr><td>19</td><td>Miss Shanti Baskey</td><td>M.A., B.Ed.</td></tr>
                    </tbody>
                </table>
            </div>
            <h3 class="section-title"><span class="english-text"><i class="fa fa-laptop-code"></i> Computer Teachers & Staff</span><span class="hindi-text">कंप्यूटर शिक्षक एवं कर्मचारी</span><span class="bengali-text">কম্পিউটার শিক্ষক ও কর্মী</span></h3>
            <div class="row"><div class="col-md-6"><ul><li><strong>Mr. Debraj Mukherjee</strong> (D.El.Ed,B.Com., ADIM/WE)</li><li><strong>Mr. Sourabh Sarkar</strong> (D.El.Ed)</li></ul></div><div class="col-md-6"><ul><li><strong>Office Staff:</strong> Mr. Subhash Chandra Dey (Head Clerk), Mr. Arup Choudhury (2nd Clerk)</li><li><strong>Peons:</strong> Rabidas Namata, Deepak Gantait, Suman Das, Ram Prasad Mandal</li></ul></div></div>
            <h3 class="section-title"><span class="english-text"><i class="fa fa-school"></i> Primary Section Teachers</span><span class="hindi-text">प्राथमिक शिक्षक</span><span class="bengali-text">প্রাথমিক শিক্ষক</span></h3>
            <ul><li>Ms. Uma Mitra (In-Charge) - M.A, B.Ed, D.El.Ed</li><li>Ms. Senoka Mitra - B.A Honrs, D.El.Ed</li><li>Mr. Rakhal Bisayee - M.A., D.El.Ed</li><li>Mr. Jaikishan Karmakar - B.Com, B.Ed</li><li>Miss Pramila Mahakur - B.A., B.Ed</li><li>Miss Shakuntala Tudu -M.A. B.Ed:</li></ul>
        </div>
     </div>
            


    <?php endif; ?>
   
    <?php if($role == 'housedress'): ?>

          <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <h1>🏠 HOUSE DISTRIBUTION 2026-27</h1>
            <p>Jagadish Chandra High School, Ghatsila | Four Pillars of Excellence</p>
        </div>
    </div>

    <div class="container">
        <!-- House Grid -->
        <div class="house-grid">
            
            <!-- RED HOUSE - NETAJI HOUSE -->
            <div class="house-card red">
                <div class="house-header red">
                    <div class="house-svg">
                         <img src="<?php echo base_url('assets/netaji.png'); ?>" alt="Netaji" style="width: 100%; height: 100%; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                    <h2>RED HOUSE</h2>
                    <h3>🏆 NETAJI HOUSE</h3>
                </div>
                <div class="house-body">
                    <ul class="member-list">
                        <li><i class="fas fa-crown"></i> Mrs. M. Bhattacherjee <span class="supervisor-badge">Supervisor</span></li>
                        <li><i class="fas fa-star"></i> Mr. R. Sharma <span class="house-master-badge">House Master</span></li>
                        <li><i class="fas fa-user"></i> Mr. S. L. Mahato</li>
                        <li><i class="fas fa-user"></i> Mrs. B. Shaw</li>
                        <li><i class="fas fa-user"></i> Mr. S. Sarkar</li>
                        <li><i class="fas fa-user"></i> Mr. R. D. Namata</li>
                        <li><i class="fas fa-user"></i> Mr. R. P. Mandal</li>
                    </ul>
                </div>
            </div>

            <!-- BLUE HOUSE - GANDHI HOUSE -->
            <div class="house-card blue">
                <div class="house-header blue">
                    <div class="house-svg">
                          <img src="<?php echo base_url('assets/gandhi.png'); ?>" alt="Netaji" style="width: 100%; height: 100%; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                    <h2>BLUE HOUSE</h2>
                    <h3>🏆 GANDHI HOUSE</h3>
                </div>
                <div class="house-body">
                    <ul class="member-list">
                        <li><i class="fas fa-crown"></i> Mrs. A. R. Sharma <span class="supervisor-badge">Supervisor</span></li>
                        <li><i class="fas fa-star"></i> Mr. G. Barik <span class="house-master-badge">House Master</span></li>
                        <li><i class="fas fa-user"></i> Miss S. Baskey</li>
                        <li><i class="fas fa-user"></i> Mr. A. Choudhury</li>
                        <li><i class="fas fa-user"></i> Mr. S. Das</li>
                    </ul>
                </div>
            </div>

            <!-- GREEN HOUSE - RABINDRA HOUSE -->
            <div class="house-card green">
                <div class="house-header green">
                    <div class="house-svg">
                          <img src="<?php echo base_url('assets/rabidra.png'); ?>" alt="Netaji" style="width: 100%; height: 100%; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                    <h2>GREEN HOUSE</h2>
                    <h3>🏆 RABINDRA HOUSE</h3>
                </div>
                <div class="house-body">
                    <ul class="member-list">
                        <li><i class="fas fa-crown"></i> Mr. P. K. Kuila <span class="supervisor-badge">Supervisor</span></li>
                        <li><i class="fas fa-star"></i> Mr. T. Giri <span class="house-master-badge">House Master</span></li>
                        <li><i class="fas fa-user"></i> Mrs. P. Guin</li>
                        <li><i class="fas fa-user"></i> Mr. S. C. Dey</li>
                        <li><i class="fas fa-user"></i> Mr. D. K. Gantait</li>
                    </ul>
                </div>
            </div>

            <!-- YELLOW HOUSE - VIVEKANANDA HOUSE -->
            <div class="house-card yellow">
                <div class="house-header yellow">
                    <div class="house-svg">
                         <img src="<?php echo base_url('assets/vivekanand.png'); ?>" alt="Netaji" style="width: 100%; height: 100%; object-fit: contain; display: block; margin: 0 auto;">
                    </div>
                    <h2>YELLOW HOUSE</h2>
                    <h3>🏆 VIVEKANANDA HOUSE</h3>
                </div>
                <div class="house-body">
                    <ul class="member-list">
                        <li><i class="fas fa-crown"></i> Mrs. A. Roy <span class="supervisor-badge">Supervisor</span></li>
                        <li><i class="fas fa-star"></i> Mr. U. Bhagat <span class="house-master-badge">House Master</span></li>
                        <li><i class="fas fa-user"></i> Mr. M. Mal</li>
                        <li><i class="fas fa-user"></i> Mrs. R. Kumari</li>
                        <li><i class="fas fa-user"></i> Mrs. T. Rajak</li>
                        <li><i class="fas fa-user"></i> Mr. Suman Das</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Overall Supervisor -->
        <div class="supervisor-section">
            <i class="fas fa-user-graduate"></i>
            <h3>Overall House Supervisor</h3>
            <p>🏅 Responsibility for the supervision of all houses has been assigned to <strong>Mr. Rupnath Tiwary Sir</strong></p>
        </div>

        <!-- Dress Code Section -->
        <div class="dress-code-section">
            <h2><i class="fas fa-tshirt"></i> HOUSE DRESS CODE</h2>
            <div class="dress-grid">
                <div class="dress-card">
                    <div class="dress-color" style="background: #dc3545;"></div>
                    <h4>RED HOUSE</h4>
                    <p>Netaji House</p>
                    <p><strong>Dress:</strong> White Shirt + White Pant + Red Tie/Belt + Red Sash</p>
                    <p><strong>House Day:</strong> Red Accessories</p>
                </div>
                <div class="dress-card">
                    <div class="dress-color" style="background: #007bff;"></div>
                    <h4>BLUE HOUSE</h4>
                    <p>Gandhi House</p>
                    <p><strong>Dress:</strong> White Shirt + White Pant + Blue Tie/Belt + Blue Sash</p>
                    <p><strong>House Day:</strong> Blue Accessories</p>
                </div>
                <div class="dress-card">
                    <div class="dress-color" style="background: #28a745;"></div>
                    <h4>GREEN HOUSE</h4>
                    <p>Rabindra House</p>
                    <p><strong>Dress:</strong> White Shirt + White Pant + Green Tie/Belt + Green Sash</p>
                    <p><strong>House Day:</strong> Green Accessories</p>
                </div>
                <div class="dress-card">
                    <div class="dress-color" style="background: #ffc107;"></div>
                    <h4>YELLOW HOUSE</h4>
                    <p>Vivekananda House</p>
                    <p><strong>Dress:</strong> White Shirt + White Pant + Yellow Tie/Belt + Yellow Sash</p>
                    <p><strong>House Day:</strong> Yellow Accessories</p>
                </div>
            </div>
        </div>
    </div>

    <?php endif; ?>
    <script>
        $(document).ready(function() {
            // Language switching functionality
            var savedLang = localStorage.getItem('schoolLangGuidelines');
            if (savedLang && (savedLang === 'english' || savedLang === 'hindi' || savedLang === 'bengali')) {
                $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-' + savedLang);
                $('.lang-btn').removeClass('active');
                $('.lang-btn[data-lang="' + savedLang + '"]').addClass('active');
            } else {
                $('body').addClass('lang-english');
                $('.lang-btn[data-lang="english"]').addClass('active');
            }
            
            $('.lang-btn').click(function() {
                var lang = $(this).data('lang');
                $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-' + lang);
                $('.lang-btn').removeClass('active');
                $(this).addClass('active');
                localStorage.setItem('schoolLangGuidelines', lang);
            });
        });
    </script>
