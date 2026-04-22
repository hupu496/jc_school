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
        .page-title {
            background: linear-gradient(135deg, #174873 0%, #ff6b6b 100%);
            color: white;
            padding: 40px 0;
            margin-bottom: 40px;
            text-align: center;
        }
        .page-title h1 {
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .page-title p {
            font-size: 18px;
            opacity: 0.9;
        }
       
    </style>


    <!-- header area start -->
  
    <!-- header area end -->

    <!-- Page Title Area -->
    <div class="page-title">
        <div class="container">
            <h1>
                <span class="english-text">School Guidelines & Rules</span>
                <span class="hindi-text">विद्यालय दिशानिर्देश और नियम</span>
                <span class="bengali-text">বিদ্যালয়ের নির্দেশিকা ও নিয়মাবলী</span>
            </h1>
            <p>
                <span class="english-text">For Students, Parents & Guardians | Extracted from School Diary (Pages 26-27)</span>
                <span class="hindi-text">छात्रों, अभिभावकों के लिए | स्कूल डायरी (पृष्ठ 26-27) से सारांशित</span>
                <span class="bengali-text">শিক্ষার্থী, অভিভাবকদের জন্য | স্কুল ডায়েরি (পৃষ্ঠা ২৬-২৭) থেকে সংগৃহীত</span>
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
        </div>
    </div>

  
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
