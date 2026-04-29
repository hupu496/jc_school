<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&display=swap');
        
        .header {
            background: #174873;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 24px;
            font-weight: bold;
        }
        .sub-header {
            text-align: center;
            padding: 12px;
            border-bottom: 4px solid #174873;
            font-size: 20px;
            background: #fffaf0;
        }
       
        .section {
            padding: 25px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        td, th {
            padding: 12px;
            border: 1px solid #000;
            vertical-align: top;
            font-size: 16px;
        }
        .rule-number {
            font-weight: bold;
            width: 30px;
        }
        .print-area {
            display: none;
            padding: 30px;
            background: white;
            border: 12px solid #174873;
        }
        @media print {
            body * { visibility: hidden; }
            .print-area, .print-area * { visibility: visible; }
            .print-area {
                display: block !important;
                position: absolute;
                left: 0;
                top: 0;
                width: 100%;
                margin: 0;
                padding: 25px;
                box-shadow: none;
            }
        }
        .lang-english .en, .lang-hindi .hi, .lang-bengali .bn { display: block; }
        .lang-english .hi, .lang-english .bn,
        .lang-hindi .en, .lang-hindi .bn,
        .lang-bengali .en, .lang-bengali .hi { display: none; }
    </style>
</head>
<body>



  

    <!-- Header -->
    <div class="header">
        JAGADISH CHANDRA HIGH / PRIMARY SCHOOL<br>
        GHATSILA
    </div>
    <div class="sub-header">
        <span class="en">SCHOOL RULES FOR STUDENTS (Discipline)</span>
        <span class="hi">छात्र-छात्राओं के लिए विद्यालय नियम (अनुशासन)</span>
        <span class="bn">ছাত্র-ছাত্রীদের জন্য বিদ্যালয়ের নিয়ম (শৃঙ্খলা)</span>
    </div>

    <div class="section">

        <!-- Visiting Hours -->
        <h2 style="text-align:center; margin:20px 0;">
            <span class="en">VISITING HOURS</span>
            <span class="hi">मिलने का समय</span>
            <span class="bn">সাক্ষাৎকারের সময়</span>
        </h2>
        <p style="text-align:center; font-size:18px;">
            <span class="en">Headmistress : 11:00 a.m. to 12:00 Noon</span>
            <span class="hi">प्रधानाध्यापिका : सुबह 11:00 बजे से दोपहर 12:00 बजे तक</span>
            <span class="bn">প্রধান শিক্ষিকা : সকাল ১১:০০ থেকে দুপুর ১২:০০ পর্যন্ত</span>
        </p>

        <!-- School Hours -->
        <h2 style="text-align:center; margin:30px 0 15px;">
            <span class="en">SCHOOL HOURS</span>
            <span class="hi">विद्यालय समय</span>
            <span class="bn">বিদ্যালয়ের সময়</span>
        </h2>
        <table>
            <tr>
                <td><strong><span class="en">Monday to Saturday</span><span class="hi">सोमवार से शनिवार</span><span class="bn">সোমবার থেকে শনিবার</span></strong></td>
                <td><span class="en">Class I to IV : 9:00 a.m. to 2:00 p.m.</span><span class="hi">कक्षा I से IV : सुबह 9:00 से दोपहर 2:00 बजे तक</span><span class="bn">শ্রেণী I থেকে IV : সকাল ৯:০০ থেকে দুপুর ২:০০ পর্যন্ত</span></td>
            </tr>
            <tr>
                <td></td>
                <td><span class="en">Class V to X : 9:00 a.m. to 3:00 p.m.</span><span class="hi">कक्षा V से X : सुबह 9:00 से दोपहर 3:00 बजे तक</span><span class="bn">শ্রেণী V থেকে X : সকাল ৯:০০ থেকে দুপুর ৩:০০ পর্যন্ত</span></td>
            </tr>
            <tr>
                <td><strong><span class="en">3rd Saturday</span><span class="hi">तीसरा शनिवार</span><span class="bn">৩য় শনিবার</span></strong></td>
                <td><span class="en">Holiday as per Govt. rule</span><span class="hi">सरकारी नियम के अनुसार छुट्टी</span><span class="bn">সরকারি নিয়ম অনুসারে ছুটি</span></td>
            </tr>
            <tr>
                <td><strong><span class="en">Last working day of the month</span><span class="hi">माह का अंतिम कार्य दिवस</span><span class="bn">মাসের শেষ কর্মদিবস</span></strong></td>
                <td><span class="en">Till 5th period only</span><span class="hi">केवल 5वीं पीरियड तक</span><span class="bn">শুধুমাত্র ৫ম পিরিয়ড পর্যন্ত</span></td>
            </tr>
        </table>

        <!-- School Rules -->
        <h2 style="text-align:center; margin:40px 0 20px; background:#174873; color:white; padding:10px;">
            <span class="en">SCHOOL RULES FOR STUDENTS</span>
            <span class="hi">छात्र-छात्राओं के लिए विद्यालय नियम</span>
            <span class="bn">ছাত্র-ছাত্রীদের জন্য বিদ্যালয়ের নিয়ম</span>
        </h2>

        <table>
            <tr>
                <th class="rule-number">1.</th>
                <td class="en">Every student should carry his/her diary to school each day.</td>
                <td class="hi">प्रत्येक छात्र-छात्रा को अपनी डायरी प्रतिदिन विद्यालय लाना आवश्यक है।</td>
                <td class="bn">প্রত্যেক ছাত্র-ছাত্রীকে প্রতিদিন তার ডায়েরি বিদ্যালয়ে আনতে হবে।</td>
            </tr>
            <tr>
                <th class="rule-number">2.</th>
                <td class="en">Students should arrive at school 5 minutes before the 1st bell rings in the morning.</td>
                <td class="hi">छात्र-छात्राओं को सुबह पहली घंटी बजने से 5 मिनट पहले विद्यालय पहुँचना चाहिए।</td>
                <td class="bn">ছাত্র-ছাত্রীদের সকালের প্রথম ঘণ্টা বাজার ৫ মিনিট আগে বিদ্যালয়ে পৌঁছাতে হবে।</td>
            </tr>
            <tr>
                <th class="rule-number">3.</th>
                <td class="en">Students should maintain personal hygiene and come to school clean and neatly dressed. Students who are shabbily dressed or not in uniform will be sent back home.</td>
                <td class="hi">छात्र-छात्राओं को व्यक्तिगत स्वच्छता बनाए रखनी चाहिए और साफ-सुथरे वर्दी में आना चाहिए। गंदे कपड़ों में या वर्दी के बिना आने वाले छात्रों को घर वापस भेज दिया जाएगा।</td>
                <td class="bn">ছাত্র-ছাত্রীদের ব্যক্তিগত পরিচ্ছন্নতা বজায় রাখতে হবে এবং পরিষ্কার ও পরিপাটি পোশাকে আসতে হবে। যারা অপরিষ্কার পোশাকে বা ইউনিফর্ম ছাড়া আসবে তাদের বাড়ি ফেরত পাঠানো হবে।</td>
            </tr>
            <tr>
                <th class="rule-number">4.</th>
                <td class="en">Boys should get their hair cut at regular intervals. Boys are not allowed to wear low-waist narrow pants.</td>
                <td class="hi">लड़कों को नियमित अंतराल पर बाल कटवाने चाहिए। लड़कों को कमर से नीचे वाली संकरी पैंट पहनने की अनुमति नहीं है।</td>
                <td class="bn">ছেলেদের নিয়মিত বিরতিতে চুল কাটাতে হবে। ছেলেরা কোমরের নিচে সরু প্যান্ট পরতে পারবে না।</td>
            </tr>
            <tr>
                <th class="rule-number">5.</th>
                <td class="en">No shouting, spitting or whistling is allowed in the school premises.</td>
                <td class="hi">विद्यालय परिसर में चिल्लाना, थूकना या सीटी बजाना पूरी तरह प्रतिबंधित है।</td>
                <td class="bn">বিদ্যালয় চত্বরে চিৎকার করা, থুতু ফেলা বা শিস দেওয়া সম্পূর্ণ নিষিদ্ধ।</td>
            </tr>
            <tr>
                <th class="rule-number">6.</th>
                <td class="en">Care must be taken of all the school property. No writing on the desk/wall. No sitting on the grill in the auditorium or on the desk. Damage done even accidentally should be reported at once to the class teacher or headmistress. The charges will be borne by the person who is found responsible for the damage.</td>
                <td class="hi">विद्यालय की सभी संपत्ति की देखभाल करनी चाहिए। डेस्क/दीवार पर लिखना या ग्रिल पर बैठना वर्जित है। किसी भी क्षति (गलती से भी) की सूचना तुरंत क्लास टीचर या प्रधानाध्यापिका को दें। क्षति का खर्च जिम्मेदार व्यक्ति से वसूला जाएगा।</td>
                <td class="bn">বিদ্যালয়ের সকল সম্পত্তির যত্ন নিতে হবে। ডেস্ক/দেয়ালে লেখা বা গ্রিলে বসা নিষেধ। কোনো ক্ষতি হলে (অনিচ্ছাকৃত হলেও) তাৎক্ষণিক ক্লাস টিচার বা প্রধান শিক্ষিকাকে জানাতে হবে। ক্ষতির খরচ দায়ী ব্যক্তির কাছ থেকে আদায় করা হবে।</td>
            </tr>
            <tr>
                <th class="rule-number">7.</th>
                <td class="en">Students are not allowed to carry mobile phones, CDs or any electronic gadgets.</td>
                <td class="hi">छात्र-छात्राओं को मोबाइल फोन, सीडी या कोई भी इलेक्ट्रॉनिक गैजेट विद्यालय में लाना मना है।</td>
                <td class="bn">ছাত্র-ছাত্রীদের মোবাইল ফোন, সিডি বা কোনো ইলেকট্রনিক গ্যাজেট বিদ্যালয়ে আনা নিষেধ।</td>
            </tr>
        </table>
    </div>

    <div style="text-align:center; padding:20px; background:#f8f8f8; font-size:14px;">
        JAGADISH CHANDRA HIGH / PRIMARY SCHOOL / 20
    </div>

    <!-- Printable Version -->
    <div id="printArea" class="print-area">
        <div style="text-align:center; margin-bottom:20px;">
            <h1 style="color:#174873;">JAGADISH CHANDRA HIGH / PRIMARY SCHOOL, GHATSILA</h1>
            <h2>SCHOOL RULES FOR STUDENTS</h2>
        </div>
        
        <div style="display:grid; grid-template-columns:1fr 1fr 1fr; gap:20px;">
            <!-- English -->
            <div>
                <h3 style="background:#174873; color:white; padding:8px; text-align:center;">ENGLISH</h3>
                <ol style="padding-left:20px;">
                    <li>Every student should carry his/her diary to school each day.</li>
                    <li>Students should arrive at school 5 minutes before the 1st bell rings in the morning.</li>
                    <li>Students should maintain personal hygiene and come to school clean and neatly dressed. Students who are shabbily dressed or not in uniform will be sent back home.</li>
                    <li>Boys should get their hair cut at regular intervals. Boys are not allowed to wear low-waist narrow pants.</li>
                    <li>No shouting, spitting or whistling is allowed in the school premises.</li>
                    <li>Care must be taken of all the school property. No writing on the desk/wall. No sitting on the grill in the auditorium or on the desk. Damage done even accidentally should be reported at once to the class teacher or headmistress. The charges will be borne by the person who is found responsible for the damage.</li>
                    <li>Students are not allowed to carry mobile phones, CDs or any electronic gadgets.</li>
                </ol>
            </div>

            <!-- Hindi -->
            <div>
                <h3 style="background:#174873; color:white; padding:8px; text-align:center;">हिंदी</h3>
                <ol style="padding-left:20px;">
                    <li>प्रत्येक छात्र-छात्रा को अपनी डायरी प्रतिदिन विद्यालय लाना आवश्यक है।</li>
                    <li>छात्र-छात्राओं को सुबह पहली घंटी बजने से 5 मिनट पहले विद्यालय पहुँचना चाहिए।</li>
                    <li>छात्र-छात्राओं को व्यक्तिगत स्वच्छता बनाए रखनी चाहिए और साफ-सुथरे वर्दी में आना चाहिए। गंदे कपड़ों में या वर्दी के बिना आने वाले छात्रों को घर वापस भेज दिया जाएगा।</li>
                    <li>लड़कों को नियमित अंतराल पर बाल कटवाने चाहिए। लड़कों को कमर से नीचे वाली संकरी पैंट पहनने की अनुमति नहीं है।</li>
                    <li>विद्यालय परिसर में चिल्लाना, थूकना या सीटी बजाना पूरी तरह प्रतिबंधित है।</li>
                    <li>विद्यालय की सभी संपत्ति की देखभाल करनी चाहिए। डेस्क/दीवार पर लिखना या ग्रिल पर बैठना वर्जित है। किसी भी क्षति (गलती से भी) की सूचना तुरंत क्लास टीचर या प्रधानाध्यापिका को दें। क्षति का खर्च जिम्मेदार व्यक्ति से वसूला जाएगा।</li>
                    <li>छात्र-छात्राओं को मोबाइल फोन, सीडी या कोई भी इलेक्ट्रॉनिक गैजेट विद्यालय में लाना मना है।</li>
                </ol>
            </div>

            <!-- Bengali -->
            <div>
                <h3 style="background:#174873; color:white; padding:8px; text-align:center;">বাংলা</h3>
                <ol style="padding-left:20px;">
                    <li>প্রত্যেক ছাত্র-ছাত্রীকে প্রতিদিন তার ডায়েরি বিদ্যালয়ে আনতে হবে।</li>
                    <li>ছাত্র-ছাত্রীদের সকালের প্রথম ঘণ্টা বাজার ৫ মিনিট আগে বিদ্যালয়ে পৌঁছাতে হবে।</li>
                    <li>ছাত্র-ছাত্রীদের ব্যক্তিগত পরিচ্ছন্নতা বজায় রাখতে হবে এবং পরিষ্কার ও পরিপাটি পোশাকে আসতে হবে। যারা অপরিষ্কার পোশাকে বা ইউনিফর্ম ছাড়া আসবে তাদের বাড়ি ফেরত পাঠানো হবে।</li>
                    <li>ছেলেদের নিয়মিত বিরতিতে চুল কাটাতে হবে। ছেলেরা কোমরের নিচে সরু প্যান্ট পরতে পারবে না।</li>
                    <li>বিদ্যালয় চত্বরে চিৎকার করা, থুতু ফেলা বা শিস দেওয়া সম্পূর্ণ নিষিদ্ধ।</li>
                    <li>বিদ্যালয়ের সকল সম্পত্তির যত্ন নিতে হবে। ডেস্ক/দেয়ালে লেখা বা গ্রিলে বসা নিষেধ। কোনো ক্ষতি হলে তাৎক্ষণিক ক্লাস টিচার বা প্রধান শিক্ষিকাকে জানাতে হবে। ক্ষতির খরচ দায়ী ব্যক্তির কাছ থেকে আদায় করা হবে।</li>
                    <li>ছাত্র-ছাত্রীদের মোবাইল ফোন, সিডি বা কোনো ইলেকট্রনিক গ্যাজেট বিদ্যালয়ে আনা নিষেধ।</li>
                </ol>
            </div>
        </div>

        <div style="text-align:center; margin-top:40px; font-size:14px;">
            JAGADISH CHANDRA HIGH / PRIMARY SCHOOL / 20
        </div>
    </div>

    <div style="text-align:center; padding:25px;">
        <button onclick="window.print()" style="background:#174873; color:white; padding:14px 40px; font-size:18px; border:none; border-radius:6px; cursor:pointer;">
            🖨️ Print This Page (Trilingual)
        </button>
        <p style="margin-top:15px; font-size:13px;">(Click the language buttons above to switch between English, Hindi & Bengali before printing)</p>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.lang-btn').click(function() {
            var lang = $(this).data('lang');
            $('.lang-btn').removeClass('active');
            $(this).addClass('active');
            $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-' + lang);
        });

        // Default English
        $('body').addClass('lang-english');
    });
</script>
