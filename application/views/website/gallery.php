
<style>
        
        .gallery-header {
            z-index: -1;
            position: relative;
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 25%, #1a5276 50%, #2980b9 75%, #1a2a3a 100%);
            background-size: 200% 200%;
            padding: 60px 0;
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
        .gallery-header::before {
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
        .gallery-header h1 {
           font-size: 56px;
            font-weight: 800;
            color: #fff;
            margin: 0 0 15px 0;
            letter-spacing: -0.5px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            position: relative;
        }
        .gallery-header p {
            font-size: 1.2rem;
            opacity: 0.92;
            max-width: 700px;
            margin: 0 auto;
        }
        .stats-badge {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(8px);
            border-radius: 100px;
            display: inline-block;
            padding: 0.5rem 1.5rem;
            font-weight: 600;
            margin-top: 1.2rem;
            border: 1px solid rgba(255,255,255,0.3);
        }

        /* filter & category bar */
        .filter-section {
            background: white;
            border-radius: 1.5rem;
            padding: 1rem 1.8rem;
            margin-bottom: 2.5rem;
            box-shadow: 0 8px 20px rgba(0,0,0,0.05);
            border: 1px solid rgba(52,152,219,0.15);
        }
        .btn-category {
            border-radius: 40px;
            padding: 0.5rem 1.3rem;
            font-weight: 600;
            transition: all 0.25s ease;
            margin: 0.2rem;
            border: 1px solid #e2e8f0;
            background: white;
            color: #2c3e50;
        }
        .btn-category:hover, .btn-category.active {
            background: #3498db;
            border-color: #3498db;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 8px 16px -8px rgba(52,152,219,0.4);
        }
        /* gallery grid card (hover effect) */
        .gallery-card {
            position: relative;
            border-radius: 1.25rem;
            overflow: hidden;
            background: white;
            box-shadow: 0 12px 24px -12px rgba(0,0,0,0.12);
            transition: all 0.35s cubic-bezier(0.2, 0, 0, 1);
            cursor: pointer;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(52,152,219,0.2);
        }
        .gallery-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 28px 36px -16px rgba(44,62,80,0.35);
            border-color: #3498db;
        }
        .image-wrapper {
            position: relative;
            overflow: hidden;
            aspect-ratio: 4 / 3;
            background: #eef2f5;
        }
        .image-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .gallery-card:hover .image-wrapper img {
            transform: scale(1.08);
        }
        .overlay-gradient {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(44,62,80,0.85), transparent);
            padding: 1.2rem;
            color: white;
            opacity: 0;
            transition: opacity 0.3s ease;
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
        }
        .gallery-card:hover .overlay-gradient {
            opacity: 1;
        }
        .event-badge {
            background: #3498db;
            padding: 0.3rem 1rem;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            color: white;
        }
        .card-content {
            padding: 1.2rem 1.2rem 1.2rem;
        }
        .event-title {
            font-weight: 800;
            font-size: 1.25rem;
            margin-bottom: 0.3rem;
            color: #2c3e50;
        }
        .event-date {
            font-size: 0.8rem;
            color: #3498db;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 6px;
            margin-bottom: 0.6rem;
        }
        .event-desc {
            color: #5a6874;
            font-size: 0.85rem;
            line-height: 1.4;
        }
        /* lightbox modal style */
        .modal-gallery .modal-content {
            border-radius: 1.5rem;
            background: #1e2a36;
            border: none;
        }
        .modal-img {
            border-radius: 1rem;
            width: 100%;
            object-fit: cover;
        }
        .btn-close-white-custom {
            filter: invert(1);
        }
        @media (max-width: 768px) {
            .gallery-header h1 { font-size: 1.9rem; }
            .btn-category { padding: 0.3rem 1rem; font-size: 0.8rem; }
        }
        #modalThumbnailContainer img {
    width: 80px;
    height: 60px;
    object-fit: cover;
    border-radius: 6px;
    cursor: pointer;
    opacity: 0.6;
    border: 2px solid transparent;
    transition: 0.3s;
}
#modalThumbnailContainer img.active {
    opacity: 1;
    border-color: #3498db;
}
#modalThumbnailContainer img:hover {
    opacity: 1;
}
    </style>
<!-- Header with gradient (#2c3e50 to #3498db) -->
<div class="gallery-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="text-start mb-2 mb-md-0">
                <h1><i class="fas fa-images me-2"></i> Event Gallery</h1>
                <p>Capturing unforgettable moments — celebrations, sports, and achievements</p>
            </div>
        </div>
        <div class="stats-badge">
            <i class="fas fa-calendar-alt"></i> <span id="eventCountDisplay">0</span> 
            Memorable Events
        </div>
    </div>
</div>

<div class="container mb-5">
    <!-- category filter bar -->
    <div class="filter-section">
        <div class="row align-items-center">
            <div class="col-md-8 mb-2 mb-md-0">
                <div class="d-flex flex-wrap gap-2" id="categoryFilterGroup">
                    <button class="btn-category active" data-category="all">All Events</button>
                    <button class="btn-category" data-category="cultural">Cultural</button>
                    <button class="btn-category" data-category="sports">Sports</button>
                    <button class="btn-category" data-category="academic">Academic</button>
                </div>
            </div>
            <div class="col-md-4 text-md-end">
                <div class="input-group">
                    <input type="text" class="form-control" id="searchEventInput" placeholder="🔍 Search event...">
                </div>
            </div>
        </div>
    </div>

    <!-- Events Grid -->
    <div id="eventsGrid" class="row g-4">
        <div class="col-12 text-center py-5">
            <div class="spinner-border text-primary" style="color:#3498db;" role="status"></div>
            <p class="mt-2">Loading gallery moments...</p>
        </div>
    </div>
</div>

<!-- Lightbox Modal for detailed view -->
<div class="modal fade modal-gallery" id="eventModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" style="
    margin-top: 100px;
">
        <div class="modal-content bg-dark text-white">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="modalEventTitle">
                    <i class="fas fa-star-of-life" style="color:#3498db;"></i> Event Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="modal-image-container position-relative">
    <img id="modalEventImg" src="" class="modal-img">

    <button class="modal-nav-btn modal-nav-prev" onclick="navigateImage(-1)">
        <i class="fas fa-chevron-left"></i>
    </button>
    <button class="modal-nav-btn modal-nav-next" onclick="navigateImage(1)">
        <i class="fas fa-chevron-right"></i>
    </button>
</div>
<div id="modalThumbnailContainer" class="d-flex gap-2 mt-3 overflow-auto"></div>
                    </div>
                    <div class="col-md-4">
                        <div class="ps-md-3 mt-3 mt-md-0">
                            <h3 id="modalEventTitleText" class="mb-3" style="color: #3498db;"></h3>
                            <div class="mb-3">
                                <i class="fas fa-calendar-day text-info me-2"></i>
                                <strong>Date:</strong> <span id="modalEventDate"></span>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-tag text-info me-2"></i>
                                <strong>Category:</strong> <span id="modalEventCategory"></span>
                            </div>
                            <div class="mb-3">
                                <i class="fas fa-info-circle text-info me-2"></i>
                                <strong>Description:</strong>
                            </div>
                            <p id="modalEventDesc" class="mt-2" style="line-height: 1.6;"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://rcsindia.co.in/newcbse19/js/bootstrap.min.js"></script>
<script>
    // ====================== MULTI LANGUAGE HANDLER ======================
   
    
    // ====================== EVENT GALLERY DATA (rich content, styled with #3498db) ======================
    const eventsData = [
        { id: 1, title: "Annual Day 2025", title_hi: "वार्षिक दिवस 2025", title_bn: "বার্ষিক দিবস ২০২৫", desc: "A grand celebration with cultural performances and excellence awards.", desc_hi: "सांस्कृतिक प्रदर्शन और उत्कृष्टता पुरस्कारों के साथ भव्य उत्सव।", desc_bn: "সাংস্কৃতিক পরিবেশনা এবং এক্সেলেন্স অ্যাওয়ার্ড সহ একটি বড় উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/gallery15.jpeg'); ?>", category_icon: "fa-music" },
        { id: 2, title: "Inter-School Sports Meet", title_hi: "अंतर-विद्यालय खेलकूद प्रतियोगिता", title_bn: "আন্তঃবিদ্যালয় ক্রীড়া প্রতিযোগিতা", desc: "Athletics, football, and cricket tournaments with great spirit.", desc_hi: "एथलेटिक्स, फुटबॉल और क्रिकेट टूर्नामेंट जबरदस्त उत्साह के साथ।", desc_bn: "অ্যাথলেটিক্স, ফুটবল এবং ক্রিকেট টুর্নামেন্ট দুর্দান্ত উদ্যম সহ।", category: "sports", img: "<?php echo base_url('assets/images/banner7.jpeg'); ?>", category_icon: "fa-futbol" },
        { id: 3, title: "Inter-School Sports Meet", title_hi: "अंतर-विद्यालय खेलकूद प्रतियोगिता", title_bn: "আন্তঃবিদ্যালয় ক্রীড়া প্রতিযোগিতা", desc: "Athletics, football, and cricket tournaments with great spirit.", desc_hi: "एथलेटिक्स, फुटबॉल और क्रिकेट टूर्नामेंट जबरदस्त उत्साह के साथ।", desc_bn: "অ্যাথলেটিক্স, ফুটবল এবং ক্রিকেট টুর্নামেন্ট দুর্দান্ত উদ্যম সহ।", category: "sports", img: "<?php echo base_url('assets/images/banner8.jpeg'); ?>", category_icon: "fa-futbol" },
        { id: 4, title: "Inter-School Sports Meet", title_hi: "अंतर-विद्यालय खेलकूद प्रतियोगिता", title_bn: "আন্তঃবিদ্যালয় ক্রীড়া প্রতিযোগিতা", desc: "Athletics, football, and cricket tournaments with great spirit.", desc_hi: "एथलेटिक्स, फुटबॉल और क्रिकेट टूर्नामेंट जबरदस्त उत्साह के साथ।", desc_bn: "অ্যাথলেটিক্স, ফুটবল এবং ক্রিকেট টুর্নামেন্ট দুর্দান্ত উদ্যম সহ।", category: "sports", img: "<?php echo base_url('assets/images/sports_match.jpeg'); ?>", category_icon: "fa-futbol" },
        { id: 5, title: "Yoga Class 2025", title_hi: "योग कक्षा", title_bn: "যোগ ক্লাস", desc: "Students practicing yoga for health and mindfulness.", desc_hi: "स्वास्थ्य और एकाग्रता के लिए योग अभ्यास।", desc_bn: "এআই এবং পুনর্নবীকরণযোগ্য শক্তি নিয়ে শিক্ষার্থীদের উদ্ভাবনী প্রকল্প।", category: "academic", img: "<?php echo base_url('assets/images/gallery13.jpeg'); ?>", category_icon: "fa-flask" },
        { id: 6, title: "Martyr's Day", title_hi: "शहीद दिवस", title_bn: "শহীদ দিবস", desc: "Flag hoisting, patriotic songs, and cultural tableau.", desc_hi: "ध्वजारोहण, देशभक्ति गीत और सांस्कृतिक झांकी।", desc_bn: "পতাকা উত্তোলন, দেশাত্মবোধক গান এবং সাংস্কৃতিক ট্যাবলো।", category: "cultural", img: "<?php echo base_url('assets/images/banner10.jpeg'); ?>", category_icon: "fa-flag-checkered" },
        { id: 7, title: "Teachers' Day Felicitation", title_hi: "शिक्षक दिवस सम्मान समारोह", title_bn: "শিক্ষক দিবস সম্মাননা", desc: "Students honored teachers with heartfelt performances and gratitude.", desc_hi: "छात्रों ने हार्दिक प्रस्तुतियों और आभार के साथ शिक्षकों को सम्मानित किया।", desc_bn: "শিক্ষার্থীরা আন্তরিক পরিবেশনা এবং কৃতজ্ঞতা সহ শিক্ষকদের সম্মানিত করেছে।", category: "cultural", img: "<?php echo base_url('assets/images/cultural.jpeg'); ?>", category_icon: "fa-chalkboard-user" },
        { id: 8, title: "Annual Sports Championship", title_hi: "वार्षिक खेल चैंपियनशिप", title_bn: "বার্ষিক ক্রীড়া চ্যাম্পিয়নশিপ", desc: "High-energy track events, relay races and medal ceremony.", desc_hi: "उच्च-ऊर्जा ट्रैक इवेंट, रिले दौड़ और पदक समारोह।", desc_bn: "উচ্চ-শক্তির ট্র্যাক ইভেন্ট, রিলে রেস এবং পদক অনুষ্ঠান।",  category: "sports", img: "<?php echo base_url('assets/images/gallery1.jpeg'); ?>", category_icon: "fa-medal" },
        { id: 9, title: "Dance Pratice", title_hi: "नृत्य अभ्यास", title_bn: "নৃত্য অনুশীলন", desc: "Hands-on learning with Arduino and AI demonstrations.", desc_hi: "Arduino और AI प्रदर्शनों के साथ व्यावहारिक शिक्षा।", desc_bn: "আরডুইনো এবং এআই ডেমোনস্ট্রেশনের সাথে হ্যান্ডস-অন লার্নিং।",  category: "academic", img: "<?php echo base_url('assets/images/gallery14.jpeg'); ?>", category_icon: "fa-microchip" },
        { id: 10, title: "Assembley Event", title_hi: "प्रार्थना सभा कार्यक्रम", title_bn: "সকাল সমাবেশ অনুষ্ঠান", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/gallery4.jpeg'); ?>", category_icon: "fa-palette" },
         { id: 11, title: "Children Day", title_hi: "बाल दिवस", title_bn: "শিশু দিবস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।",  category: "cultural", img: "<?php echo base_url('assets/images/nehru_festival.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 12, title: "Children Day", title_hi: "बाल दिवस", title_bn: "শিশু দিবস", desc: "Colorful celebration with school family.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/nehru_diwas2.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 13, title: "Children Day", title_hi: "बाल दिवस", title_bn: "শিশু দিবস", desc: "Colorful celebration with school family.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/nehru_diwas3.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 14, title: "Children Day", title_hi: "बाल दिवस", title_bn: "শিশু দিবস", desc: "Colorful celebration with school family.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/children_day.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 15, title: "Children Day", title_hi: "बाल दिवस", title_bn: "শিশু দিবস", desc: "Colorful celebration with school family.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/children_day1.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 16, title: "Teachers' Day Felicitation", title_hi: "शिक्षक दिवस सम्मान समारोह", title_bn: "শিক্ষক দিবস সম্মাননা", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/teacherday.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 17, title: "Teachers' Day Felicitation", title_hi: "शिक्षक दिवस सम्मान समारोह", title_bn: "শিক্ষক দিবস সম্মাননা", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/teacherday1.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 18, title: "Teachers' Day Felicitation", title_hi: "शिक्षक दिवस सम्मान समारोह", title_bn: "শিক্ষক দিবস সম্মাননা", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/teacherday2.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 19, title: "Teachers' Day Felicitation", title_hi: "शिक्षक दिवस सम्मान समारोह", title_bn: "শিক্ষক দিবস সম্মাননা", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/teacherday3.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 20, title: "Yoga Class", title_hi: "योग कक्षा", title_bn: "যোগ ক্লাস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/yoga1.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 21, title: "Yoga Class", title_hi: "योग कक्षा", title_bn: "যোগ ক্লাস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/yoga2.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 22, title: "Computer Class", title_hi: "कंप्यूटर कक्षा", title_bn: "কম্পিউটার ক্লাস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/com_class1.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 23, title: "Smart Class", title_hi: "स्मार्ट कक्षा", title_bn: "স্মার্ট ক্লাস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/smart_classs.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 24, title: "Computer Class", title_hi: "कंप्यूटर कक्षा", title_bn: "কম্পিউটার ক্লাস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/computer_class.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 25, title: "Science Lab", title_hi: "विज्ञान प्रयोगशाला", title_bn: "বিজ্ঞান ল্যাব", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/science_lab.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 26, title: "Independence Day", title_hi: "स्वतंत्रता दिवस", title_bn: "স্বাধীনতা দিবস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/independence_day.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 27, title: "Teachers Day", title_hi: "शिक्षक दिवस ", title_bn: "শিক্ষক দিবস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/annual_function.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 28, title: "Celebration Rakhi", title_hi: "रक्षाबंधन उत्सव", title_bn: "রাখী উৎসব", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/celebration_rakhi.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 29, title: "Academic Award", title_hi: "शैक्षणिक पुरस्कार", title_bn: "একাডেমিক পুরস্কার", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/academic_award.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 30, title: "Academic Award", title_hi: "शैक्षणिक पुरस्कार", title_bn: "একাডেমিক পুরস্কার", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/academic_award2.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 31, title: "Foundation Day", title_hi: "स्थापना दिवस", title_bn: "প্রতিষ্ঠা দিবস", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "cultural", img: "<?php echo base_url('assets/images/foundation_day.jpeg'); ?>", category_icon: "fa-palette" },
        { id: 32, title: "Academic Award", title_hi: "शैक्षणिक पुरस्कार", title_bn: "একাডেমিক পুরস্কার", desc: "Colorful celebration with music, organic colors and traditional sweets.", desc_hi: "संगीत, जैविक रंगों और पारंपरिक मिठाइयों के साथ रंगीन उत्सव।", desc_bn: "সঙ্গীত, জৈব রং এবং ঐতিহ্যবাহী মিষ্টির সাথে রঙিন উদযাপন।", category: "academic", img: "<?php echo base_url('assets/images/celebration_champ.jpeg'); ?>", category_icon: "fa-palette" },
    ];
    
    let currentLang = 'english';
    let eventsArray = [...eventsData];
    let activeCategory = "all";
    let searchKeyword = "";
    let currentModalIndex = 0;
    let filteredEventsList = [];
    
    // Filter events based on category and search
    function filterAndRenderEvents() {
        let filtered = eventsArray.filter(ev => {
            const matchesCategory = (activeCategory === "all") || (ev.category === activeCategory);
            const titleMatch = ev.title.toLowerCase().includes(searchKeyword.toLowerCase());
            const descMatch = ev.desc.toLowerCase().includes(searchKeyword.toLowerCase());
            return matchesCategory && (titleMatch || descMatch);
        });
        
        filteredEventsList = filtered;
        document.getElementById("eventCountDisplay").innerText = filtered.length;
        const container = document.getElementById("eventsGrid");
        
        if (!container) return;
        
        if (filtered.length === 0) {
            container.innerHTML = `<div class="col-12"><div class="empty-state text-center p-5 bg-white rounded-4 shadow-sm"><i class="fas fa-calendar-times fa-3x" style="color:#3498db;"></i><h4 class="mt-3">No events found</h4></div></div>`;
            return;
        }
        
        let cardsHtml = "";
        filtered.forEach((ev, idx) => {
            let categoryDisplay = ev.category.charAt(0).toUpperCase() + ev.category.slice(1);
            cardsHtml += `
                <div class="col-md-6 col-lg-4">
                    <div class="gallery-card" data-index="${idx}">
                        <div class="image-wrapper">
                            <img src="${ev.img}" alt="${ev.title}" loading="lazy">
                            <div class="overlay-gradient">
                                <span class="event-badge"><i class="fas ${ev.category_icon || 'fa-calendar'}"></i> ${categoryDisplay}</span>
                                <i class="fas fa-expand-alt"></i>
                            </div>
                        </div>
                        <div class="card-content">
                            <div class="event-date"><i class="fas fa-calendar-alt" style="color:#3498db;"></i> ${ev.date}</div>
                            <h3 class="event-title">${escapeHtml(ev.title)}</h3>
                        
                        </div>
                    </div>
                </div>
            `;
        });
        container.innerHTML = cardsHtml;
        attachCardClickListeners();
    }
    
    // Attach click listeners to cards
    function attachCardClickListeners() {
        document.querySelectorAll('.gallery-card').forEach(card => {
            card.removeEventListener('click', card._listener);
            const listener = function(e) {
                const index = parseInt(card.getAttribute('data-index'));
                if (!isNaN(index) && filteredEventsList[index]) {
                    currentModalIndex = index;
                    openModal(index);
                }
            };
            card.addEventListener('click', listener);
            card._listener = listener;
        });
    }
    
function openModal(index) {
    if (!filteredEventsList[index]) return;

    currentModalIndex = index;

    renderModalContent();
    renderThumbnails();

    // ✅ Bootstrap 3 / jQuery way
    $('#eventModal').modal('show');
}
function renderModalContent() {
    const event = filteredEventsList[currentModalIndex];

    document.getElementById('modalEventImg').src = event.img;
    document.getElementById('modalEventTitle').innerHTML =
        `<i class="fas fa-image me-2" style="color:#3498db;"></i> ${event.title}`;
    document.getElementById('modalEventTitleText').innerText = event.title;
    document.getElementById('modalEventDesc').innerText = event.desc;
    document.getElementById('modalEventDate').innerText = event.date || "N/A";

    let categoryDisplay = event.category.charAt(0).toUpperCase() + event.category.slice(1);
    document.getElementById('modalEventCategory').innerHTML =
        `<span class="badge" style="background:#3498db;">${categoryDisplay}</span>`;
}
function renderThumbnails() {
    const container = document.getElementById('modalThumbnailContainer');

    container.innerHTML = "";

   
}
    
    // Navigate between images in modal
  function navigateImage(direction) {
    let newIndex = currentModalIndex + direction;

    if (newIndex >= 0 && newIndex < filteredEventsList.length) {
        currentModalIndex = newIndex;
        renderModalContent();
        renderThumbnails();
    }
}
    
    function escapeHtml(str) { 
        if(!str) return '';
        return str.replace(/[&<>]/g, function(m) { 
            if(m==='&') return '&amp;'; 
            if(m==='<') return '&lt;'; 
            if(m==='>') return '&gt;'; 
            return m; 
        });
    }
    
    function bindGalleryFilters() {
        document.querySelectorAll('.btn-category').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('.btn-category').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                activeCategory = btn.getAttribute('data-category');
                filterAndRenderEvents();
            });
        });
        
        const searchInput = document.getElementById('searchEventInput');
        if(searchInput) {
            searchInput.addEventListener('input', (e) => {
                searchKeyword = e.target.value;
                filterAndRenderEvents();
            });
        }
    }
    
    // Keyboard navigation for modal
    document.addEventListener('keydown', function(e) {
        const modal = document.getElementById('eventModal');
        if (modal.classList.contains('show')) {
            if (e.key === 'ArrowLeft') {
                navigateImage(-1);
            } else if (e.key === 'ArrowRight') {
                navigateImage(1);
            } else if (e.key === 'Escape') {
                const modalInstance = bootstrap.Modal.getInstance(modal);
                if (modalInstance) modalInstance.hide();
            }
        }
    });
    
    function init() {
        bindGalleryFilters();
        filterAndRenderEvents();
    }
    
    window.addEventListener('DOMContentLoaded', init);
</script>

