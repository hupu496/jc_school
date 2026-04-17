
    <style>
        body { font-family: 'Poppins', 'Hind Siliguri', sans-serif; background: #f4f7fc; }
        .lang-selector { display: flex; gap: 8px; margin-left: 15px; }
        .lang-btn { background: transparent; border: 1px solid #fff; color: white; padding: 4px 12px; border-radius: 25px; font-size: 12px; cursor: pointer; transition: 0.3s; }
        .lang-btn:hover, .lang-btn.active { background: #ff6b6b; border-color: #ff6b6b; }
        .header-top-right ul { display: flex; align-items: center; flex-wrap: wrap; justify-content: flex-end; }
        /* Trilingual */
        .hindi-text, .bengali-text { display: none; }
        body.lang-english .english-text { display: inline; }
        body.lang-english .english-block { display: block; }
        body.lang-english .hindi-text, body.lang-english .bengali-text { display: none; }
        body.lang-hindi .hindi-text { display: inline; }
        body.lang-hindi .hindi-block { display: block; }
        body.lang-hindi .english-text, body.lang-hindi .bengali-text { display: none; }
        body.lang-bengali .bengali-text { display: inline; }
        body.lang-bengali .bengali-block { display: block; }
        body.lang-bengali .english-text, body.lang-bengali .hindi-text { display: none; }
        .hindi-block, .bengali-block, .english-block { display: none; }
        body.lang-english .english-block { display: block; }
        body.lang-hindi .hindi-block { display: block; }
        body.lang-bengali .bengali-block { display: block; }
        .profile-card { background: white; border-radius: 20px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); margin-bottom: 30px; transition: transform 0.3s; text-align: center; }
        .profile-card:hover { transform: translateY(-5px); }
        .profile-img { width: 180px; height: 180px; border-radius: 50%; object-fit: cover; border: 5px solid #ff6b6b; margin-bottom: 20px; background: #e9ecef; }
        .page-title-bg { background: linear-gradient(135deg, #1e3c72, #2a5298); padding: 50px 0; margin-bottom: 50px; color: white; text-align: center; }
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
    .page-title-bg {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        padding: 50px 0;
        margin-bottom: 50px;
        color: white;
        text-align: center;
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
                     <?php else: ?>
                     <?php endif; ?>
            <p><span class="english-text">Based on Official School Diary 2025-26 | Jagadish Chandra High School, Ghatsila</span><span class="hindi-text">आधिकारिक स्कूल डायरी 2025-26 पर आधारित</span><span class="bengali-text">অফিসিয়াল স্কুল ডায়েরি 2025-26 এর ভিত্তিতে</span></p></div>
    </div>

    <div class="container" style="padding-bottom: 60px;">
         <?php if($role == 'president'): ?>
        <!-- President Section (from PDF data: Mr. Tapas Chatterjee) -->
        <div id="president" class="profile-card">
            <div class="row">
                <div class="col-md-3 text-center"><img src="https://via.placeholder.com/180x180?text=President" class="profile-img" alt="President"><h3><span class="english-text">Mr. Tapas Chatterjee</span><span class="hindi-text">श्री तपस चटर्जी</span><span class="bengali-text">শ্রী তপস চট্টোপাধ্যায়</span></h3><p><strong><span class="english-text">President, School Management Committee</span><span class="hindi-text">अध्यक्ष, विद्यालय प्रबंधन समिति</span><span class="bengali-text">সভাপতি, স্কুল ম্যানেজমেন্ট কমিটি</span></strong></p></div>
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
                <div class="col-md-3 text-center"><img src="https://via.placeholder.com/180x180?text=Headmistress" class="profile-img" alt="Principal"><h3><span class="english-text">Mrs. Rita Mandal</span><span class="hindi-text">श्रीमती रीता मंडल</span><span class="bengali-text">শ্রীমতী রীতা মন্ডল</span></h3><p><strong>M.A., B.Ed. <span class="english-text">(Headmistress)</span><span class="hindi-text">(प्रधानाध्यापिका)</span><span class="bengali-text">(প্রধান শিক্ষিকা)</span></strong></p></div>
                <div class="col-md-9">
                    <div class="english-block"><h4>Headmistress's Desk</h4><p>I, Rita Mandal, am honored to lead Jagadish Chandra High School as the Headmistress. Our school diary (Page 17 & 19) reflects our commitment to holistic education. We focus on character building, academic excellence, and co-curricular activities. Our students have excelled in board exams, Olympiads, and cultural events. I urge parents and students to follow school rules, maintain 75% attendance, and wear proper uniform as prescribed. Together we shall continue the glorious legacy of this institution.</p><ul><li><i class="fa fa-calendar"></i> School Hours: Mon-Sat 9:00 AM - 3:00 PM (V to X)</li><li><i class="fa fa-graduation-cap"></i> Mission: Dignity of labour, self-respect & teamwork</li></ul><div class="message-box">"Education is the manifestation of perfection already in man" – Swami Vivekananda (School Diary, Page 23)</div></div>
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
                <div class="col-md-3 text-center"><img src="https://via.placeholder.com/180x180?text=Secretary" class="profile-img" alt="Secretary"><h3><span class="english-text">Mr. Manoranjan Baksi</span><span class="hindi-text">श्री मनोरंजन बक्षी</span><span class="bengali-text">শ্রী মনোরঞ্জন বক্সী</span></h3><p><strong><span class="english-text">Secretary, Governing Body</span><span class="hindi-text">सचिव, प्रशासनिक निकाय</span><span class="bengali-text">সচিব, গভর্নিং বডি</span></strong></p></div>
                <div class="col-md-9">
                    <div class="english-block"><h4>Secretary's Message</h4><p>As Secretary (as recorded in school diary page 17), I, Manoranjan Baksi, ensure smooth administration and implementation of policies. We have initiated Book Bank facility through Lily Foundation for needy students and 'Smile Scholarship' for underprivileged meritorious children. Our school is a Bengali minority institution recognized by the state government since 1972, safeguarding language and culture. We are proud of our dedicated teachers, computer labs, and digital library. Parents are requested to cooperate and attend parent-teacher meetings regularly.</p><p><strong>Book Bank:</strong> Students can borrow one book for one week. <strong>Smile Scholarship:</strong> Financial aid for economically weak but academically strong students.</p></div>
                    <div class="hindi-block"><h4>सचिव का संदेश</h4><p>सचिव मनोरंजन बक्षी के अनुसार, लिली फाउंडेशन द्वारा बुक बैंक और स्माइल स्कॉलरशिप की सुविधा। अभिभावकों से सहयोग की अपील।</p></div>
                    <div class="bengali-block"><h4>সচিবের বার্তা</h4><p>সচিব মনোরঞ্জন বক্সী জানিয়েছেন, লিলি ফাউন্ডেশন দ্বারা বই ব্যাংক ও স্মাইল স্কলারশিপ সুবিধা। অভিভাবকদের সহযোগিতা কাম্য।</p></div>
                </div>
            </div>
        </div>
 <?php endif; ?>

        <!-- Management Committee & Teachers List from PDF pages 17-18 -->
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

        <!-- Complete Teachers List (Secondary + Primary) as per PDF -->
        <div class="staff-table">
            <h3 class="section-title"><span class="english-text"><i class="fa fa-chalkboard-user"></i> Our Dedicated Teachers (Secondary Section)</span><span class="hindi-text">हमारे शिक्षकगण (माध्यमिक)</span><span class="bengali-text">আমাদের শিক্ষকবৃন্দ (মাধ্যমিক)</span></h3>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead><tr><th>#</th><th><span class="english-text">Name</span><span class="hindi-text">नाम</span><span class="bengali-text">নাম</span></th><th>Qualification</th></tr></thead>
                    <tbody>
                        <tr><td>1</td><td>Mrs. Rita Mandal (H.M.)</td><td>M.A., B.Ed.</td></tr><tr><td>2</td><td>Mr. Rupnath Tiwary</td><td>M.Sc., B.Ed.</td></tr><tr><td>3</td><td>Mrs. Mousumi Bhattacherjee</td><td>M.A., B.Ed.</td></tr><tr><td>4</td><td>Mr. Pradyot Kumar Kuila</td><td>M.Sc., B.Ed.</td></tr><tr><td>5</td><td>Mrs. Archana Rani Sharma</td><td>M.A., B.Ed.</td></tr><tr><td>6</td><td>Mrs. Arpita Roy</td><td>M.A., B.Ed.</td></tr><tr><td>7</td><td>Mrs. Rashmi Sharma</td><td>M.A., B.Ed.</td></tr><tr><td>8</td><td>Mr. Tapobrat Giri</td><td>M.Sc., B.Ed.</td></tr><tr><td>9</td><td>Mr. Shishulal Mahato</td><td>M.A., B.Ed.</td></tr><tr><td>10</td><td>Mr. Umesh Bhagat</td><td>M.Sc., B.Ed.</td></tr><tr><td>11</td><td>Mr. Pallab Kumar Dey</td><td>B.A., M.P.Ed.</td></tr><tr><td>12</td><td>Mr. Goutam Kumar Barik</td><td>M.Sc., B.Ed.</td></tr><tr><td>13</td><td>Mr. Partha Pratim Ghosh</td><td>M.Sc., B.Ed.</td></tr><tr><td>14</td><td>Mrs. Mousumi Dutta</td><td>M.A., B.Ed.</td></tr><tr><td>15</td><td>Mrs. Baby Shaw</td><td>M.A., B.Ed.</td></tr><tr><td>16</td><td>Mrs. Riya Kumari</td><td>M.A., B.Ed.</td></tr><tr><td>17</td><td>Mr. Madhusudan Mal</td><td>M.A., B.Ed., M.Ed.</td></tr><tr><td>18</td><td>Mr. Tampa Rajak</td><td>M.A., B.Ed.</td></tr><tr><td>19</td><td>Mrs. Paromita Guin</td><td>B.Sc., B.Ed.</td></tr><tr><td>20</td><td>Miss Shanti Baskey</td><td>M.A., B.Ed.</td></tr>
                    </tbody>
                </table>
            </div>
            <h3 class="section-title"><span class="english-text"><i class="fa fa-laptop-code"></i> Computer Teachers & Staff</span><span class="hindi-text">कंप्यूटर शिक्षक एवं कर्मचारी</span><span class="bengali-text">কম্পিউটার শিক্ষক ও কর্মী</span></h3>
            <div class="row"><div class="col-md-6"><ul><li><strong>Mr. Debraj Mukherjee</strong> (B.Com., ADIM/WE)</li><li><strong>Mr. Sourabh Sarkar</strong> (BCA)</li></ul></div><div class="col-md-6"><ul><li><strong>Office Staff:</strong> Mr. Subhash Chandra Dey (Head Clerk), Mr. Arup Choudhury (2nd Clerk)</li><li><strong>Peons:</strong> Rabidas Namata, Deepak Gantait, Suman Das, Ram Prasad Mandal</li></ul></div></div>
            <h3 class="section-title"><span class="english-text"><i class="fa fa-school"></i> Primary Section Teachers</span><span class="hindi-text">प्राथमिक शिक्षक</span><span class="bengali-text">প্রাথমিক শিক্ষক</span></h3>
            <ul><li>Ms. Uma Mitra (In-Charge) - M.A, B.Ed, D.El.Ed</li><li>Ms. Senoka Mitra - B.A Honrs, D.El.Ed</li><li>Mr. Rakhal Bisayee - M.A., D.El.Ed</li><li>Mr. Jaikishan Karmakar - B.Com, B.Ed</li><li>Miss Pramila Mahakur - B.A., B.Ed</li><li>Peon: Mr. Sujit Bagti</li></ul>
        </div>

        <!-- School Rules & Uniform from PDF -->
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
                </div>
            </div>
        </div>
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