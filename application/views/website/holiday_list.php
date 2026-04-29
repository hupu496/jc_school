<style>
        /* Trilingual styles */
        body {
            font-family: 'Poppins', 'Hind Siliguri', sans-serif;
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
        
        /* Holiday List specific styles */
        .holiday-section {
            background: #f9fafc;
            padding: 60px 0;
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
            color: white;
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
        .holiday-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            padding: 0;
            overflow: hidden;
            margin-bottom: 30px;
        }
        .holiday-header {
            background: #174873;
            color: white;
            padding: 18px 25px;
            font-weight: 700;
            font-size: 20px;
        }
        .holiday-header i {
            margin-right: 10px;
        }
        .holiday-table {
            width: 100%;
            border-collapse: collapse;
        }
        .holiday-table th {
            background: #f8f9fa;
            padding: 15px 20px;
            text-align: left;
            font-weight: 600;
            color: #333;
            border-bottom: 2px solid #174873;
            font-size: 16px;
        }
        .holiday-table td {
            padding: 12px 20px;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: middle;
        }
        .holiday-table tr:hover {
            background: #fef5f5;
        }
        .badge-holiday {
            background: #174873;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
        }
        .badge-saturday {
            background: #ff6b6b;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 500;
            display: inline-block;
        }
        .info-note {
            background: #e8f0fe;
            border-left: 4px solid #174873;
            padding: 20px;
            border-radius: 12px;
            margin-top: 30px;
        }
      
        @media (max-width: 768px) {
            .holiday-table th, .holiday-table td {
                padding: 10px 12px;
                font-size: 13px;
            }
            .page-title h1 { font-size: 28px; }
        }
        .print-btn {
            background: #28a745;
            color: white;
            border: none;
            padding: 10px 25px;
            border-radius: 30px;
            font-weight: 500;
            margin-bottom: 20px;
            transition: 0.3s;
        }
        .print-btn:hover {
            background: #218838;
            transform: scale(1.02);
        }
        @media print {
            .no-print, .lang-selector, .header-top, .footer, .print-btn, .header-bottom {
                display: none !important;
            }
            .holiday-card {
                box-shadow: none;
                border: 1px solid #ccc;
            }
            body {
                padding: 0;
                margin: 0;
            }
        }
    </style>

    <!-- header area end -->

    <!-- Page Title Area -->
    <div class="page-title">
        <div class="container">
            <h1>
                <span class="english-text">📅 Holiday List 2025-26</span>
                <span class="hindi-text">📅 अवकाश सूची 2025-26</span>
                <span class="bengali-text">📅 ছুটির তালিকা ২০২৫-২৬</span>
            </h1>
            <p>
                <span class="english-text">Academic Session | Jagadish Chandra High School, Ghatsila</span>
                <span class="hindi-text">शैक्षणिक सत्र | जगदीश चंद्र हाई स्कूल, घाटशिला</span>
                <span class="bengali-text">শিক্ষাবর্ষ | জগদীশ চন্দ্র হাই স্কুল, ঘাটশিলা</span>
            </p>
        </div>
    </div>

    <!-- Holiday List Section -->
    <div class="holiday-section">
        <div class="container">
            <!-- Print Button -->
            <div class="text-right no-print mb-3">
                <button onclick="window.print()" class="print-btn"><i class="fas fa-print"></i> <span class="english-text">Print Holiday List</span><span class="hindi-text">अवकाश सूची प्रिंट करें</span><span class="bengali-text">ছুটির তালিকা প্রিন্ট করুন</span></button>
            </div>

            <!-- Main Holiday Card -->
            <div class="holiday-card">
                <div class="holiday-header">
                    <i class="fas fa-calendar-alt"></i> 
                    <span class="english-text">Gazetted Holidays & Festivals</span>
                    <span class="hindi-text">सार्वजनिक अवकाश एवं त्योहार</span>
                    <span class="bengali-text">সরকারি ছুটি ও উৎসব</span>
                </div>
                <table class="holiday-table">
                    <thead>
                        <tr>
                            <th><span class="english-text">Sl. No.</span><span class="hindi-text">क्र.सं.</span><span class="bengali-text">ক্রমিক নং</span></th>
                            <th><span class="english-text">Date</span><span class="hindi-text">तिथि</span><span class="bengali-text">তারিখ</span></th>
                            <th><span class="english-text">Day</span><span class="hindi-text">दिन</span><span class="bengali-text">বার</span></th>
                            <th><span class="english-text">Occasion / Festival</span><span class="hindi-text">अवसर / त्योहार</span><span class="bengali-text">উপলক্ষ / উৎসব</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>15 August 2025</td><td>Friday</td><td><span class="english-text">Independence Day</span><span class="hindi-text">स्वतंत्रता दिवस</span><span class="bengali-text">স্বাধীনতা দিবস</span></td></tr>
                        <tr><td>2</td><td>16 August 2025</td><td>Saturday</td><td><span class="english-text">Parsi New Year (Shahenshahi)</span><span class="hindi-text">पारसी नव वर्ष</span><span class="bengali-text">পারসি নববর্ষ</span></td></tr>
                        <tr><td>3</td><td>27 August 2025</td><td>Wednesday</td><td><span class="english-text">Ganesh Chaturthi</span><span class="hindi-text">गणेश चतुर्थी</span><span class="bengali-text">গণেশ চতুর্থী</span></td></tr>
                        <tr><td>4</td><td>5 September 2025</td><td>Friday</td><td><span class="english-text">Teachers' Day</span><span class="hindi-text">शिक्षक दिवस</span><span class="bengali-text">শিক্ষক দিবস</span></td></tr>
                        <tr><td>5</td><td>2 October 2025</td><td>Thursday</td><td><span class="english-text">Gandhi Jayanti</span><span class="hindi-text">गांधी जयंती</span><span class="bengali-text">গান্ধী জয়ন্তী</span></td></tr>
                        <tr><td>6</td><td>22 October 2025</td><td>Wednesday</td><td><span class="english-text">Durga Puja (Maha Saptami)</span><span class="hindi-text">दुर्गा पूजा (महा सप्तमी)</span><span class="bengali-text">দুর্গাপূজা (মহা সপ্তমী)</span></td></tr>
                        <tr><td>7</td><td>23 October 2025</td><td>Thursday</td><td><span class="english-text">Durga Puja (Maha Ashtami)</span><span class="hindi-text">दुर्गा पूजा (महा अष्टमी)</span><span class="bengali-text">দুর্গাপূজা (মহা অষ্টমী)</span></td></tr>
                        <tr><td>8</td><td>24 October 2025</td><td>Friday</td><td><span class="english-text">Durga Puja (Maha Navami)</span><span class="hindi-text">दुर्गा पूजा (महा नवमी)</span><span class="bengali-text">দুর্গাপূজা (মহা নবমী)</span></td></tr>
                        <tr><td>9</td><td>25 October 2025</td><td>Saturday</td><td><span class="english-text">Vijaya Dashami (Dussehra)</span><span class="hindi-text">विजया दशमी (दशहरा)</span><span class="bengali-text">বিজয়া দশমী (দশেরা)</span></td></tr>
                        <tr><td>10</td><td>5 November 2025</td><td>Wednesday</td><td><span class="english-text">Diwali (Deepavali)</span><span class="hindi-text">दीपावली</span><span class="bengali-text">দীপাবলি</span></td></tr>
                        <tr><td>11</td><td>6 November 2025</td><td>Thursday</td><td><span class="english-text">Govardhan Puja</span><span class="hindi-text">गोवर्धन पूजा</span><span class="bengali-text">গোবর্ধন পূজা</span></td></tr>
                        <tr><td>12</td><td>7 November 2025</td><td>Friday</td><td><span class="english-text">Bhai Dooj</span><span class="hindi-text">भाई दूज</span><span class="bengali-text">ভাই ফোঁটা</span></td></tr>
                        <tr><td>13</td><td>15 November 2025</td><td>Saturday</td><td><span class="english-text">Guru Nanak Jayanti</span><span class="hindi-text">गुरु नानक जयंती</span><span class="bengali-text">গুরু নানক জয়ন্তী</span></td></tr>
                        <tr><td>14</td><td>25 December 2025</td><td>Thursday</td><td><span class="english-text">Christmas Day</span><span class="hindi-text">क्रिसमस दिवस</span><span class="bengali-text">বড়দিন</span></td></tr>
                        <tr><td>15</td><td>26 January 2026</td><td>Monday</td><td><span class="english-text">Republic Day</span><span class="hindi-text">गणतंत्र दिवस</span><span class="bengali-text">প্রজাতন্ত্র দিবস</span></td></tr>
                        <tr><td>16</td><td>15 February 2026</td><td>Sunday</td><td><span class="english-text">Saraswati Puja (Vasant Panchami)</span><span class="hindi-text">सरस्वती पूजा (वसंत पंचमी)</span><span class="bengali-text">সরস্বতী পূজা (বসন্ত পঞ্চমী)</span></td></tr>
                        <tr><td>17</td><td>28 February 2026</td><td>Saturday</td><td><span class="english-text">Shivaratri</span><span class="hindi-text">महाशिवरात्रि</span><span class="bengali-text">মহাশিবরাত্রি</span></td></tr>
                        <tr><td>18</td><td>13 March 2026</td><td>Friday</td><td><span class="english-text">Holi</span><span class="hindi-text">होली</span><span class="bengali-text">হোলি</span></td></tr>
                        <tr><td>19</td><td>27 March 2026</td><td>Friday</td><td><span class="english-text">Good Friday</span><span class="hindi-text">गुड फ्राइडे</span><span class="bengali-text">গুড ফ্রাইডে</span></td></tr>
                        <tr><td>20</td><td>29 March 2026</td><td>Sunday</td><td><span class="english-text">Easter Sunday</span><span class="hindi-text">ईस्टर संडे</span><span class="bengali-text">ইস্টার রবিবার</span></td></tr>
                        <tr><td>21</td><td>30 March 2026</td><td>Monday</td><td><span class="english-text">Easter Monday</span><span class="hindi-text">ईस्टर सोमवार</span><span class="bengali-text">ইস্টার সোমবার</span></td></tr>
                        <tr><td>22</td><td>31 March 2026</td><td>Tuesday</td><td><span class="english-text">Annual Closing (Academic Year End)</span><span class="hindi-text">वार्षिक समापन</span><span class="bengali-text">বার্ষিক সমাপনী</span></td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Second Holiday Card: Second Saturday & Weekly Holidays -->
            <div class="holiday-card">
                <div class="holiday-header" style="background: #ff6b6b;">
                    <i class="fas fa-calendar-week"></i> 
                    <span class="english-text">Weekly & Special Holidays</span>
                    <span class="hindi-text">साप्ताहिक एवं विशेष अवकाश</span>
                    <span class="bengali-text">সাপ্তাহিক ও বিশেষ ছুটি</span>
                </div>
                <table class="holiday-table">
                    <thead>
                        <tr>
                            <th><span class="english-text">Sl. No.</span><span class="hindi-text">क्र.सं.</span><span class="bengali-text">ক্রমিক নং</span></th>
                            <th><span class="english-text">Day / Date</span><span class="hindi-text">दिन / तिथि</span><span class="bengali-text">বার / তারিখ</span></th>
                            <th><span class="english-text">Holiday Type</span><span class="hindi-text">अवकाश प्रकार</span><span class="bengali-text">ছুটির ধরন</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td><span class="english-text">Every Sunday</span><span class="hindi-text">प्रत्येक रविवार</span><span class="bengali-text">প্রতি রবিবার</span></td><td><span class="badge-saturday"><span class="english-text">Weekly Holiday</span><span class="hindi-text">साप्ताहिक अवकाश</span><span class="bengali-text">সাপ্তাহিক ছুটি</span></span></td></tr>
                        <tr><td>2</td><td><span class="english-text">2nd Saturday of every month</span><span class="hindi-text">प्रत्येक माह का दूसरा शनिवार</span><span class="bengali-text">প্রতি মাসের দ্বিতীয় শনিবার</span></td><td><span class="badge-saturday"><span class="english-text">Holiday (2nd Saturday)</span><span class="hindi-text">अवकाश (दूसरा शनिवार)</span><span class="bengali-text">ছুটি (দ্বিতীয় শনিবার)</span></span></td></tr>
                        <tr><td>3</td><td><span class="english-text">3rd Saturday of every month</span><span class="hindi-text">प्रत्येक माह का तीसरा शनिवार</span><span class="bengali-text">প্রতি মাসের তৃতীয় শনিবার</span></td><td><span class="badge-holiday"><span class="english-text">Compulsory Holiday (Govt. Rule)</span><span class="hindi-text">अनिवार्य अवकाश (सरकारी नियम)</span><span class="bengali-text">বাধ্যতামূলক ছুটি (সরকারি নিয়ম)</span></span></td></tr>
                        <tr><td>4</td><td><span class="english-text">4th Saturday of every month</span><span class="hindi-text">प्रत्येक माह का चौथा शनिवार</span><span class="bengali-text">প্রতি মাসের চতুর্থ শনিবার</span></td><td><span class="english-text">Working Day (Normal)</span><span class="hindi-text">कार्य दिवस (सामान्य)</span><span class="bengali-text">কার্যদিবস (স্বাভাবিক)</span></td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Summer Vacation & Other Breaks -->
            <div class="holiday-card">
                <div class="holiday-header" style="background: #2c7da0;">
                    <i class="fas fa-umbrella-beach"></i> 
                    <span class="english-text">Vacation Breaks</span>
                    <span class="hindi-text">अवकाश अवधि</span>
                    <span class="bengali-text">ছুটির সময়কাল</span>
                </div>
                <table class="holiday-table">
                    <thead>
                        <tr><th><span class="english-text">Sl. No.</span><span class="hindi-text">क्र.सं.</span><span class="bengali-text">ক্রমিক নং</span></th><th><span class="english-text">Vacation Name</span><span class="hindi-text">अवकाश का नाम</span><span class="bengali-text">ছুটির নাম</span></th><th><span class="english-text">Duration</span><span class="hindi-text">अवधि</span><span class="bengali-text">সময়কাল</span></th></tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td><span class="english-text">Summer Vacation</span><span class="hindi-text">ग्रीष्मकालीन अवकाश</span><span class="bengali-text">গ্রীষ্মকালীন ছুটি</span></td><td><span class="english-text">May 15, 2025 to June 25, 2025</span><span class="hindi-text">15 मई 2025 से 25 जून 2025 तक</span><span class="bengali-text">১৫ মে ২০২৫ থেকে ২৫ জুন ২০২৫</span></td></tr>
                        <tr><td>2</td><td><span class="english-text">Puja Vacation (Durga Puja)</span><span class="hindi-text">पूजा अवकाश (दुर्गा पूजा)</span><span class="bengali-text">পূজার ছুটি (দুর্গাপূজা)</span></td><td><span class="english-text">October 20, 2025 to October 28, 2025</span><span class="hindi-text">20 अक्टूबर 2025 से 28 अक्टूबर 2025 तक</span><span class="bengali-text">২০ অক্টোবর ২০২৫ থেকে ২৮ অক্টোবর ২০২৫</span></td></tr>
                        <tr><td>3</td><td><span class="english-text">Winter Vacation</span><span class="hindi-text">शीतकालीन अवकाश</span><span class="bengali-text">শীতকালীন ছুটি</span></td><td><span class="english-text">December 27, 2025 to January 4, 2026</span><span class="hindi-text">27 दिसंबर 2025 से 4 जनवरी 2026 तक</span><span class="bengali-text">২৭ ডিসেম্বর ২০২৫ থেকে ৪ জানুয়ারি ২০২৬</span></td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Important Note -->
            <div class="info-note">
                <i class="fas fa-info-circle" style="color: #174873; font-size: 24px; margin-right: 15px; float: left;"></i>
                <div style="overflow: hidden;">
                    <strong><span class="english-text">📌 Note:</span><span class="hindi-text">📌 सूचना:</span><span class="bengali-text">📌 দ্রষ্টব্য:</span></strong>
                    <p class="mt-2 mb-0">
                        <span class="english-text">The above holiday list is subject to change as per government notifications. Parents and students are requested to check the school diary and website regularly for updates. 3rd Saturday holiday is applicable as per government rule. Last working day of the month will be till 5th period only.</span>
                        <span class="hindi-text">उपरोक्त अवकाश सूची सरकारी अधिसूचनाओं के अनुसार परिवर्तन के अधीन है। माता-पिता और छात्रों से अनुरोध है कि वे अपडेट के लिए नियमित रूप से स्कूल डायरी और वेबसाइट देखें। सरकारी नियमानुसार तीसरे शनिवार का अवकाश लागू होता है। माह का अंतिम कार्य दिवस केवल 5वीं अवधि तक होगा।</span>
                        <span class="bengali-text">উপরের ছুটির তালিকা সরকারি বিজ্ঞপ্তি অনুযায়ী পরিবর্তন সাপেক্ষ। অভিভাবক ও শিক্ষার্থীদের নিয়মিত আপডেটের জন্য স্কুল ডায়েরি এবং ওয়েবসাইট দেখার অনুরোধ করা হচ্ছে। সরকারি নিয়ম অনুযায়ী তৃতীয় শনিবারের ছুটি প্রযোজ্য। মাসের শেষ কার্যদিবস শুধুমাত্র ৫ম পিরিয়ড পর্যন্ত হবে।</span>
                    </p>
                </div>
            </div>
        </div>
    </div>

  
    
    <script>
        $(document).ready(function() {
            // Language switching functionality
            var savedLang = localStorage.getItem('schoolLangHoliday');
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
                localStorage.setItem('schoolLangHoliday', lang);
            });
        });
    </script>
