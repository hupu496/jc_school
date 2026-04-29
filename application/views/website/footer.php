 <!-- footer-area start -->
    <footer>
        <div class="footer-top ptb-120">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h2><span class="english-text">Contact Us</span><span class="hindi-text">संपर्क करें</span><span class="bengali-text">যোগাযোগ করুন</span></h2>
                            <p><i class="fa fa fa-home"></i>&nbsp; <span class="">JAGADISH CHANDRA HIGH SCHOOL</span><span class="hindi-text">जगदीश चंद्र हाई / प्राइमरी स्कूल।</span><span class="bengali-text">জগদীশ চন্দ্র হাই / প্রাইমারি স্কুল। ডিজাইন</span></p>
                            <p><i class="fa fa-phone"></i>&nbsp;+91 9234676905</p>
                            <p><i class="fa fa-envelope-o"></i>&nbsp;j.c.hs.ghatsila.e.singhubhum@gmail.com</p>
                            <div class="socil-icon">
                                <ul>
                                    <li><a href="#" ><img src="<?php echo base_url('assets/facebook.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo base_url('assets/instagram.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo base_url('assets/linkedin.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                    <li><a href="#"><img src="<?php echo base_url('assets/youtube.png'); ?>" style="border:2px solid #fff;border-radius:100px;" alt=""></a></li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget footer-menu">
                            <h2><span class="english-text">Useful Links</span><span class="hindi-text">उपयोगी लिंक</span><span class="bengali-text">উপযোগী লিঙ্ক</span></h2>
                            <ul>
                                <li><a href="<?php echo base_url('our_school'); ?>"><span class="english-text">About School</span><span class="hindi-text">विद्यालय के बारे में</span><span class="bengali-text">স্কুল সম্পর্কে</span></a></li>
                                <li><a href="<?php echo base_url('guideline/all_guide'); ?>"><span class="english-text">Guideline Details</span><span class="hindi-text">पाठ्यक्रम विवरण</span><span class="bengali-text">কোর্সের বিবরণ</span></a></li>
                                <li><a href="<?php echo base_url('gallery'); ?>"><span class="english-text">Events Gallery</span><span class="hindi-text">कार्यक्रम गैलरी</span><span class="bengali-text">ইভেন্ট গ্যালারি</span></a></li>
                                <li><a href="<?php echo base_url('guideline/teacher');?>"><span class="english-text">Teachers Details</span><span class="hindi-text">शिक्षक विवरण</span><span class="bengali-text">শিক্ষকদের বিবরণ</span></a></li>
                            </ul>
                        </div>
                    </div>
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="footer-widget">
        <h2>
            <span class="english-text">Visitor Count</span>
            <span class="hindi-text">आगंतुक संख्या</span>
            <span class="bengali-text">দর্শনার্থী সংখ্যা</span>
        </h2>
        <div align="left">
           
            <div class="visitor-counter-box" style="margin-top: 10px;">
                <div class="counter-display" id="visitorCounterDisplay" style="background: #df2525; padding: 8px 15px; border-radius: 30px; display: inline-block; box-shadow: 0 2px 8px rgba(0,0,0,0.2);">
                    <span id="visitorNumber" style="font-size: 30px; font-weight: 800; color: #ffd966; font-family: monospace; letter-spacing: 2px;">9999</span>
                </div>
                <p class="mt-2 mb-0" style="font-size: 12px; color: #aaa;">
                    <span class="english-text">Total Visits</span>
                    <span class="hindi-text">कुल विज़िट</span>
                    <span class="bengali-text">মোট ভিজিট</span>
                </p>
            </div>
        </div>
    </div>
</div>


<style>
    .visitor-counter-box {
        transition: all 0.3s ease;
    }
    .counter-display {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .counter-display:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    }
    #visitorNumber {
        font-size: 28px;
        font-weight: 800;
        background: linear-gradient(135deg, #ffd966, #ffb347);
        -webkit-background-clip: text;
        background-clip: text;
        color: #ffd966;
        text-shadow: 1px 1px 2px rgba(0,0,0,0.5);
    }
    @media (max-width: 768px) {
        #visitorNumber { font-size: 22px; }
    }
</style>

<script>
    (function() {
        // Visitor counter functionality - increments on each page reload
        // Starting from 9999 as requested
        
        // Key for localStorage
        const STORAGE_KEY = 'jchs_visitor_count_footer';
        
        // Function to get current count
        function getCurrentCount() {
            let count = localStorage.getItem(STORAGE_KEY);
            if (count === null) {
                // First time - start from 9999 as specified
                return 9999;
            }
            return parseInt(count, 10);
        }
        
        // Function to update count (increment by 1)
        function updateAndGetNewCount() {
            let currentCount = getCurrentCount();
            // Increment by 1 on each page load/reload
            let newCount = currentCount + 1;
            // Save back to localStorage
            localStorage.setItem(STORAGE_KEY, newCount);
            return newCount;
        }
        
        // Format number with commas (e.g., 10,000)
        function formatNumber(num) {
            return num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        
        // Apply counter to DOM element
        function displayCounter() {
            const counterElement = document.getElementById('visitorNumber');
            if (counterElement) {
                // Increment and show
                const newCount = updateAndGetNewCount();
                counterElement.textContent = formatNumber(newCount);
            }
        }
        
        // Execute when DOM is fully loaded
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', displayCounter);
        } else {
            displayCounter();
        }
    })();
</script>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-widget">
                            <h2>
                                <span class="english-text">School Timings</span>
                                <span class="hindi-text">विद्यालय का समय</span>
                                <span class="bengali-text">স্কুলের সময়সূচি</span>
                            </h2>
                            
                            <p class="english-text">
                                Mon-Fri: 9:00 AM - 2:00 PM<br>
                                3rd Saturday will be Holiday
                            </p>
                            
                            <p class="hindi-text">
                                सोम-शुक्र: सुबह 9:00 - दोपहर 2:00<br>
                                तीसरा शनिवार अवकाश रहेगा
                            </p>
                            
                            <p class="bengali-text">
                                সোম-শুক্র: সকাল ৯:০০ - দুপুর ২:০০<br>
                                তৃতীয় শনিবার ছুটি থাকবে
                            </p>
                        </div>
                    </div>
                    
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
   
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.647367782935!2d86.4708093743538!3d22.592288532250247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f61d91e5a0dfb9%3A0x507f0525ec2fd8b4!2sJ.%20C.%20HIGH%20SCHOOL!5e0!3m2!1sen!2sin!4v1777448954873!5m2!1sen!2sin" width="200" height="100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
</div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="copyright">
                            <span class="english-text">&copy; 2026 JAGADISH CHANDRA HIGH / PRIMARY School. </span>
                             <br><span class="designer-badge">
    Designed by 
    <a href="https://comsysit.in" target="_blank">ComSys IT</a>
</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-area end -->
    
    <!-- all js here -->
    <script src="https://rcsindia.co.in/newcbse19/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/bootstrap.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/owl.carousel.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/video.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/jquery.slicknav.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/jquery.waypoints.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/counterup.main.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/videojs-ie8.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/wow.min.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/plugins.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/main.js"></script>
    <script src="https://rcsindia.co.in/newcbse19/js/home.js"></script>
    <script>

function googleTranslateElementInit() {
    new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'en,hi,bn',
        autoDisplay: false
    }, 'google_translate_element');
}
</script>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
   function hideGoogleBar() {
    let frame = document.querySelector('.goog-te-banner-frame');
    if (frame) {
        frame.style.display = 'none';   // ✅ hide only
    }

    document.body.style.top = '0px';
}

// keep checking (Google injects again)
setInterval(hideGoogleBar, 500);
</script>
<script>
function setLanguage(lang) {
    let googleLang = {
        english: 'en',
        hindi: 'hi',
        bengali: 'bn'
    };

    let select = document.querySelector('.goog-te-combo');

    if (select) {
        select.value = googleLang[lang];
        select.dispatchEvent(new Event('change'));
    }

    // Update active button UI
    document.querySelectorAll('.lang-btn').forEach(btn => {
        btn.classList.remove('active');
    });

    document.querySelector(`[data-lang="${lang}"]`).classList.add('active');

    // Save preference
    localStorage.setItem('selected_lang', lang);
}

// Init buttons
document.querySelectorAll('.lang-btn').forEach(btn => {
    btn.addEventListener('click', function () {
        setLanguage(this.dataset.lang);
    });
});

// Load saved language on refresh
window.addEventListener('load', () => {
    let savedLang = localStorage.getItem('selected_lang') || 'english';
    setLanguage(savedLang);
});
// 

</script>
    <!-- Trilingual Toggle Script -->
    <script>
        $(document).ready(function() {
            // Check localStorage for language preference
            var savedLang = localStorage.getItem('schoolLang');
           
            
            // Fix for marquee scrolling
            var pausespeed = 0;
            var marqueespeed = 1;
            var copyspeed = marqueespeed;
            
            var marqueeContent = $('#vmarquee');
            var startPosition = 65;
            var currentPosition = startPosition;
            setInterval(function() {
                if (copyspeed !== pausespeed) {
                    currentPosition -= 0.5;
                    if (currentPosition < -350) {
                        currentPosition = startPosition + 150;
                    }
                    marqueeContent.css('top', currentPosition + 'px');
                }
            }, 50);
        });
    </script>
        <script>
    // 
    const whatsappIcon = document.createElement("div");
whatsappIcon.innerHTML = `
  <a href="https://wa.me/9234676905?text=Hello%2C%20I%20am%20interested%20in%20your%20School For admission." target="_blank">
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp" width="50" height="50">
  </a>
`;

// Apply styles to keep it fixed
whatsappIcon.style.position = "fixed";
whatsappIcon.style.bottom = "20px";
whatsappIcon.style.right = "20px";
whatsappIcon.style.zIndex = "1000";

// Append to the body
document.body.appendChild(whatsappIcon);
// 
const callicon = document.createElement("div");
callicon.innerHTML = `
   <a href="tel:9234676905" target="_blank">
   <img width="40" height="40" src="<?php echo base_url('assets/images/call.webp'); ?>" alt="phone"/>
  </a>
`;

// Apply styles to keep it fixed
callicon.style.position = "fixed";
callicon.style.bottom = "80px";
callicon.style.right = "20px";
callicon.style.zIndex = "1000";

// Append to the body
document.body.appendChild(callicon);
// fkldjsf
document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".dropdown").forEach(function(dropdown) {
        dropdown.addEventListener("mouseenter", function() {
            let menu = this.querySelector(".dropdown-menu");
            menu.style.display = "block";
            setTimeout(() => {
                menu.style.opacity = "1";
                menu.style.transform = "translateY(0)";
            }, 10);
        });

        dropdown.addEventListener("mouseleave", function() {
            let menu = this.querySelector(".dropdown-menu");
            menu.style.opacity = "0";
            menu.style.transform = "translateY(-10px)";
            setTimeout(() => {
                menu.style.display = "none";
            }, 500);
        });
    });
});

</script>
</body>
</html>