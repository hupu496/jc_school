<style>

   
        /* alumni header */
        .alumni-header {
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
        .alumni-header::before {
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
        .alumni-header h1{
            font-size: 56px;
            color:white;
            font-weight: 800;
            margin: 0 0 20px 0;
            letter-spacing: -0.5px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease;
        }
        .alumni-header p { font-size: 1.1rem; opacity: 0.9; }
        .stats-badge {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(4px);
            border-radius: 100px;
            display: inline-block;
            padding: 0.4rem 1.2rem;
            font-weight: 500;
            margin-top: 1rem;
        }
        .filter-section {
            background: white;
            border-radius: 1.5rem;
            padding: 1rem 1.8rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }
        .alumni-card {
            background: white;
            border-radius: 1.25rem;
            overflow: hidden;
            transition: all 0.25s ease;
            border: 1px solid rgba(0,0,0,0.05);
            box-shadow: 0 8px 20px rgba(0,0,0,0.02);
            height: 100%;
        }
        .alumni-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -12px rgba(0,0,0,0.15);
            border-color: #cbd5e1;
        }
        .card-body-alumni { padding: 1.5rem; }
        .avatar-icon {
            width: 60px;
            height: 60px;
            background: #e9f5eb;
            border-radius: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #2a5a3a;
            margin-bottom: 1rem;
        }
        .alumni-name { font-size: 18px; font-weight: 700; margin-bottom: 0.25rem; color: #0f2b1d; }
        .alumni-batch {
            background: #eef2ff;
            display: inline-block;
            padding: 0.2rem 0.9rem;
            border-radius: 30px;
            font-size: 0.95rem;
            font-weight: 600;
            color: #1e4620;
            margin: 0.5rem 0;
        }
        .detail-item { font-size: 12px; margin-bottom: 0.5rem; color: #334155; display: flex; align-items: center; gap: 8px; }
        .detail-item i { width: 22px; color: #2a5a3a; }
        .btn-outline-alumni {
            border-radius: 60px;
            border: 1px solid #2a5a3a;
            color: #2a5a3a;
            font-weight: 500;
            padding: 0.3rem 1rem;
            transition: 0.2s;
        }
        .btn-outline-alumni:hover { background: #2a5a3a; color: white; }
        .btn-primary-alumni {
            background: #337ab7;
            border: none;
            border-radius: 2rem;
            padding: 0.6rem 1.6rem;
            font-weight: 600;
            color: white;
        }
        .btn-primary-alumni:hover { background: #3498db; }
        .modal-custom .modal-content { border-radius: 1.5rem; border: none; box-shadow: 0 25px 40px rgba(0,0,0,0.2); }
        .form-control, .form-select { border-radius: 0.9rem; padding: 0.65rem 1rem; border: 1px solid #e2e8f0; }
        .form-control:focus, .form-select:focus { border-color: #2a5a3a; box-shadow: 0 0 0 0.2rem rgba(42,90,58,0.2); }
        .empty-state { text-align: center; padding: 3rem; background: white; border-radius: 2rem; }
        footer { background: #3498db; color: #cbd5e1; margin-top: 4rem; padding: 2rem 0; text-align: center; }
        .lang-btn {
            background: transparent;
            border: 1px solid white;
            color: white;
            padding: 4px 12px;
            border-radius: 25px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            transition: 0.3s;
            margin-left: 6px;
        }
        .lang-btn:hover { background: #ff6b6b; border-color: #ff6b6b; }
        .lang-selector { display: flex; gap: 6px; align-items: center; }
        @media (max-width: 768px) {
            .alumni-header h1 { font-size: 1.8rem; }
            .filter-section { padding: 1rem; }
            .lang-btn { padding: 2px 8px; font-size: 10px; }
        }
    </style>
<!-- Alumni Header with Language Selector -->
 <div class="alumni-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2 mb-md-0">
                <h1><i class="fas fa-graduation-cap me-2"></i> <span class="english-text">Our Pride, Our Alumni</span><span class="hindi-text">हमारा गौरव, हमारे पूर्व छात्र</span><span class="bengali-text">আমাদের গর্ব, আমাদের প্রাক্তন ছাত্র</span></h1>
                <p><span class="english-text">Celebrating the legacy of Jagadish Chandra High School</span><span class="hindi-text">जगदीश चंद्र हाई स्कूल की विरासत का जश्न</span><span class="bengali-text">জগদীশ চন্দ্র হাই স্কুলের উত্তরাধিকার উদযাপন</span></p>
            </div>
          
        </div>
        <div class="stats-badge">
            <i class="fas fa-users"></i> <span id="alumniCountDisplay">0</span> 
            <span class="english-text">Registered Alumni</span><span class="hindi-text">पंजीकृत पूर्व छात्र</span><span class="bengali-text">নিবন্ধিত প্রাক্তন ছাত্র</span>
        </div>
    </div>
</div>
<div class="container mb-5">
    <!-- filter section -->
    <div class="filter-section">
        <div class="row align-items-center g-3">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <div class="input-group">
                   
                    <input type="text" class="form-control border-start-0" id="searchInput" placeholder="🔍 Search by name, city, profession...">
                </div>
            </div>
            <div class="col-md-4">
                <select class="form-select" id="batchFilter">
                    <option value="all">All Batches</option>
                </select>
            </div>
            <div class="col-md-1"></div>
           
        </div>
    </div>

    <!-- Alumni Cards Grid -->
    <div id="alumniGrid" class="row g-4">
        <div class="col-12 text-center py-5"><div class="spinner-border text-success" role="status"></div><p class="mt-2">Loading alumni directory...</p></div>
    </div>
</div>

<footer>
    <div class="container">
        <p><i class="fas fa-school"></i> Jagadish Chandra High School | <span class="english-text">Alumni Relations</span><span class="hindi-text">पूर्व छात्र संबंध</span><span class="bengali-text">প্রাক্তন সম্পর্ক</span> | <i class="fas fa-envelope"></i> alumni@jadishchandra.com</p>
        <p class="small">"<span class="english-text">Once a Jagadishian, always a Jagadishian</span><span class="hindi-text">एक बार जगदीशियन, हमेशा जगदीशियन</span><span class="bengali-text">একবার জগদীশিয়ান, চিরকাল জগদীশিয়ান</span>"</p>
    </div>
</footer>

<!-- MODAL POPUP (Opens automatically on page load) -->
<div class="modal fade modal-custom" id="alumniModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="alumniModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header border-0 pt-4 px-4">
                <h5 class="modal-title fw-bold" id="alumniModalLabel">
                    <i class="fas fa-user-graduate me-2"></i>
                    <span class="english-text">Alumni Registration</span>
                    <span class="hindi-text">पूर्व छात्र पंजीकरण</span>
                    <span class="bengali-text">প্রাক্তন নিবন্ধন</span>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-4 pb-4">
                <form id="alumniForm" novalidate>
                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label fw-semibold"><i class="fas fa-user"></i> <span class="english-text">Full Name</span><span class="hindi-text">पूरा नाम</span><span class="bengali-text">পুরো নাম</span> *</label><input type="text" class="form-control" id="fullName" placeholder="e.g. Aditya Sinha" required><div class="invalid-feedback">Name required.</div></div>
                        <div class="col-md-6"><label class="form-label fw-semibold"><i class="fas fa-phone-alt"></i> <span class="english-text">Phone No</span><span class="hindi-text">फोन नंबर</span><span class="bengali-text">ফোন নম্বর</span> *</label><input type="tel" class="form-control" id="phoneNo" placeholder="+91 XXXXX XXXXX" required><div class="invalid-feedback">Phone required.</div></div>
                        <div class="col-md-6"><label class="form-label fw-semibold"><i class="fas fa-envelope"></i> Email ID *</label><input type="email" class="form-control" id="emailId" placeholder="alumni@example.com" required><div class="invalid-feedback">Valid email required.</div></div>
                        <div class="col-md-6"><label class="form-label fw-semibold"><i class="fas fa-map-marker-alt"></i> <span class="english-text">Address</span><span class="hindi-text">पता</span><span class="bengali-text">ঠিকানা</span></label><input type="text" class="form-control" id="address" placeholder="Street, area"></div>
                        <div class="col-md-6"><label class="form-label fw-semibold"><i class="fas fa-city"></i> <span class="english-text">City</span><span class="hindi-text">शहर</span><span class="bengali-text">শহর</span> *</label><input type="text" class="form-control" id="city" placeholder="e.g. Jamshedpur" required><div class="invalid-feedback">City required.</div></div>
                        <div class="col-md-6"><label class="form-label fw-semibold"><i class="fas fa-map-pin"></i> <span class="english-text">State</span><span class="hindi-text">राज्य</span><span class="bengali-text">রাজ্য</span> *</label><input type="text" class="form-control" id="state" placeholder="Jharkhand" required><div class="invalid-feedback">State required.</div></div>
                        <div class="col-md-4"><label class="form-label fw-semibold"><i class="fas fa-calendar-alt"></i> <span class="english-text">Batch (Year)</span><span class="hindi-text">बैच (वर्ष)</span><span class="bengali-text">ব্যাচ (বছর)</span> *</label><input type="text" class="form-control" id="batch" placeholder="e.g. 2015" required><div class="invalid-feedback">Batch required.</div></div>
                        <div class="col-md-8"><label class="form-label fw-semibold"><i class="fas fa-briefcase"></i> <span class="english-text">Profession</span><span class="hindi-text">पेशा</span><span class="bengali-text">পেশা</span> *</label><input type="text" class="form-control" id="profession" placeholder="Engineer, Doctor, Teacher..." required><div class="invalid-feedback">Profession required.</div></div>
                    </div>
                    <div class="d-flex justify-content-end gap-3 mt-4">
                        <button type="button" class="btn btn-outline-secondary rounded-pill" data-bs-dismiss="modal"><span class="english-text">Cancel</span><span class="hindi-text">रद्द करें</span><span class="bengali-text">বাতিল</span></button>
                        <button type="submit" class="btn btn-primary-alumni px-4 rounded-pill"><i class="fas fa-save"></i> <span class="english-text">Save & Register</span><span class="hindi-text">सहेजें और पंजीकरण करें</span><span class="bengali-text">সংরক্ষণ ও নিবন্ধন</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    // ======================= MULTI-LANGUAGE HANDLER =======================
    function setLanguage(lang) {
        document.body.classList.remove('lang-english', 'lang-hindi', 'lang-bengali');
        document.body.classList.add(`lang-${lang}`);
        localStorage.setItem('jchs_alumni_lang', lang);
    }
    function initLanguage() {
        const saved = localStorage.getItem('jchs_alumni_lang');
        if(saved && ['english','hindi','bengali'].includes(saved)) setLanguage(saved);
        else setLanguage('english');
        document.querySelectorAll('.lang-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                const lang = btn.getAttribute('data-lang');
                if(lang) setLanguage(lang);
            });
        });
    }
    
    // ======================= ALUMNI DATA (simulated PDF extract + local storage) =======================
    let alumniArray = [];
    const extractedFromPDF = [
        { id: "1", name: "Priyanka Mukherjee", phone: "+91 98765 43210", email: "priyanka.m@alumni.com", address: "54 Lake Road", city: "Kolkata", state: "West Bengal", batch: "2012", profession: "Software Architect" },
        { id: "2", name: "Rahul Choudhary", phone: "+91 98321 45678", email: "rahul.c@techstar.com", address: "HIG-12, Adityapur", city: "Jamshedpur", state: "Jharkhand", batch: "2010", profession: "Civil Engineer" },
        { id: "3", name: "Anjali Kumari", phone: "+91 70045 67890", email: "anjali.k@medicure.in", address: "Sakchi House", city: "Ghatsila", state: "Jharkhand", batch: "2015", profession: "Medical Officer" },
        { id: "4", name: "Vikram Singh Deo", phone: "+91 99345 12345", email: "vikram.s@alumni.com", address: "Station Road", city: "Ghatsila", state: "Jharkhand", batch: "2008", profession: "Entrepreneur & Educator" },
        { id: "5", name: "Sudipta Dasgupta", phone: "+91 94321 77654", email: "sudipta.d@globalfin.com", address: "Dhatkidih", city: "Jamshedpur", state: "Jharkhand", batch: "2014", profession: "Financial Analyst" },
        { id: "6", name: "Rohan Verma", phone: "+91 98765 11223", email: "rohan.v@alumni.com", address: "Moubhandar", city: "Ghatsila", state: "Jharkhand", batch: "2018", profession: "Data Scientist" }
    ];

    function loadAlumniData() {
        const stored = localStorage.getItem("jchs_alumni_data_bilingual");
        if (stored) {
            alumniArray = JSON.parse(stored);
        } else {
            alumniArray = [...extractedFromPDF];
            saveToLocalStorage();
        }
    }
    function saveToLocalStorage() {
        localStorage.setItem("jchs_alumni_data_bilingual", JSON.stringify(alumniArray));
    }
    function generateId() { return Date.now().toString(36) + Math.random().toString(36).substring(2, 8); }
    
    function addAlumni(formData) {
        const newAlumni = {
            id: generateId(),
            name: formData.name.trim(),
            phone: formData.phone.trim(),
            email: formData.email.trim(),
            address: formData.address.trim(),
            city: formData.city.trim(),
            state: formData.state.trim(),
            batch: formData.batch.trim(),
            profession: formData.profession.trim()
        };
        alumniArray.unshift(newAlumni);
        saveToLocalStorage();
        renderAlumniGrid();
        updateStatsAndFilters();
    }
    
    function escapeHtml(str) { if(!str) return ''; return str.replace(/[&<>]/g, function(m){ if(m==='&') return '&amp;'; if(m==='<') return '&lt;'; if(m==='>') return '&gt;'; return m;}); }
    
    function renderAlumniGrid() {
        const searchTerm = document.getElementById("searchInput")?.value.toLowerCase() || "";
        const batchValue = document.getElementById("batchFilter")?.value || "all";
        let filtered = alumniArray.filter(alumni => {
            const matchesSearch = alumni.name.toLowerCase().includes(searchTerm) || alumni.city.toLowerCase().includes(searchTerm) || alumni.profession.toLowerCase().includes(searchTerm) || alumni.email.toLowerCase().includes(searchTerm);
            const matchesBatch = (batchValue === "all") || (alumni.batch === batchValue);
            return matchesSearch && matchesBatch;
        });
        const container = document.getElementById("alumniGrid");
        if(!container) return;
        if(filtered.length === 0) {
            container.innerHTML = `<div class="col-12"><div class="empty-state"><i class="fas fa-users-slash fa-3x text-secondary mb-3"></i><h5><span class="english-text">No alumni found</span><span class="hindi-text">कोई पूर्व छात्र नहीं मिला</span><span class="bengali-text">কোন প্রাক্তন ছাত্র পাওয়া যায়নি</span></h5><p class="text-muted"><span class="english-text">Try different filters or join as alumni!</span><span class="hindi-text">अलग फ़िल्टर आज़माएं या पूर्व छात्र के रूप में जुड़ें!</span><span class="bengali-text">ভিন্ন ফিল্টার চেষ্টা করুন বা প্রাক্তন হিসেবে যোগ দিন!</span></p></div></div>`;
            return;
        }
        let cardsHtml = "";
        filtered.forEach(alumni => {
            cardsHtml += `
                <div class="col-md-6 col-lg-4">
                    <div class="alumni-card">
                        <div class="card-body-alumni">
                            <div class="avatar-icon"><i class="fas fa-user-circle"></i></div>
                            <h3 class="alumni-name">${escapeHtml(alumni.name)}</h3>
                            <div class="alumni-batch"><i class="far fa-calendar-alt me-1"></i> <span class="english-text">Batch</span><span class="hindi-text">बैच</span><span class="bengali-text">ব্যাচ</span> ${escapeHtml(alumni.batch)}</div>
                            <div class="detail-item"><i class="fas fa-briefcase"></i> ${escapeHtml(alumni.profession)}</div>
                            <div class="detail-item"><i class="fas fa-map-marker-alt"></i> ${escapeHtml(alumni.city)}, ${escapeHtml(alumni.state)}</div>
                            <div class="detail-item"><i class="fas fa-envelope"></i> ${escapeHtml(alumni.email)}</div>
                            <div class="detail-item"><i class="fas fa-phone-alt"></i> ${escapeHtml(alumni.phone)}</div>
                            ${alumni.address ? `<div class="detail-item"><i class="fas fa-home"></i> ${escapeHtml(alumni.address)}</div>` : ''}
                            <hr class="my-3">
                            <div class="d-flex justify-content-between align-items-center"><small class="text-muted"><i class="fas fa-graduation-cap"></i> JCHS</small><span class="badge bg-light text-dark rounded-pill">#Alumni</span></div>
                        </div>
                    </div>
                </div>
            `;
        });
        container.innerHTML = cardsHtml;
    }
    
    function updateStatsAndFilters() {
        const countSpan = document.getElementById("alumniCountDisplay");
        if(countSpan) countSpan.innerText = alumniArray.length;
        const batchesSet = new Set();
        alumniArray.forEach(al => { if(al.batch) batchesSet.add(al.batch); });
        let sortedBatches = Array.from(batchesSet).sort((a,b) => { let na=parseInt(a,10), nb=parseInt(b,10); if(isNaN(na)) return 1; if(isNaN(nb)) return -1; return nb - na; });
        const batchSelect = document.getElementById("batchFilter");
        if(batchSelect) {
            const currentVal = batchSelect.value;
            batchSelect.innerHTML = '<option value="all">All Batches</option>';
            sortedBatches.forEach(b => { batchSelect.innerHTML += `<option value="${escapeHtml(b)}">${escapeHtml(b)}</option>`; });
            if(currentVal && (currentVal === "all" || sortedBatches.includes(currentVal))) batchSelect.value = currentVal;
            else batchSelect.value = "all";
        }
        renderAlumniGrid();
    }
    
    function bindEvents() {
        document.getElementById("searchInput")?.addEventListener("input", () => renderAlumniGrid());
        document.getElementById("batchFilter")?.addEventListener("change", () => renderAlumniGrid());
        const form = document.getElementById("alumniForm");
        if(form) {
            form.addEventListener("submit", (e) => {
                e.preventDefault();
                const name = document.getElementById("fullName").value.trim();
                const phone = document.getElementById("phoneNo").value.trim();
                const email = document.getElementById("emailId").value.trim();
                const city = document.getElementById("city").value.trim();
                const state = document.getElementById("state").value.trim();
                const batch = document.getElementById("batch").value.trim();
                const profession = document.getElementById("profession").value.trim();
                if(!name || !phone || !email || !city || !state || !batch || !profession) {
                    if(!name) document.getElementById("fullName").classList.add("is-invalid");
                    if(!phone) document.getElementById("phoneNo").classList.add("is-invalid");
                    if(!email) document.getElementById("emailId").classList.add("is-invalid");
                    if(!city) document.getElementById("city").classList.add("is-invalid");
                    if(!state) document.getElementById("state").classList.add("is-invalid");
                    if(!batch) document.getElementById("batch").classList.add("is-invalid");
                    if(!profession) document.getElementById("profession").classList.add("is-invalid");
                    alert("Please fill all required fields.");
                    return;
                }
                const emailPattern = /^[^\s@]+@([^\s@.,]+\.)+[^\s@.,]{2,}$/;
                if(!emailPattern.test(email)) { document.getElementById("emailId").classList.add("is-invalid"); alert("Valid email required."); return; }
                if(phone.length < 8) { alert("Phone number too short."); return; }
                const address = document.getElementById("address").value.trim();
                addAlumni({ name, phone, email, address, city, state, batch, profession });
                document.getElementById("alumniForm").reset();
                document.querySelectorAll(".is-invalid").forEach(el => el.classList.remove("is-invalid"));
                const modal = bootstrap.Modal.getInstance(document.getElementById("alumniModal"));
                if(modal) modal.hide();
                alert(`🎉 ${name} , you are now part of alumni network!`);
            });
        }
        document.querySelectorAll("#alumniForm .form-control").forEach(inp => { inp.addEventListener("input", function(){ this.classList.remove("is-invalid"); }); });
    }
    
    // Show modal automatically on page load (exactly as required)
    let modalShownFlag = false;
    function showModalOnLoad() {
        if(!modalShownFlag) {
            const modalEl = document.getElementById("alumniModal");
            if(modalEl) {
                const modal = new bootstrap.Modal(modalEl, { backdrop: 'static', keyboard: true });
                modal.show();
                modalShownFlag = true;
            }
        }
    }
    
    function init() {
        initLanguage();
        loadAlumniData();
        updateStatsAndFilters();
        bindEvents();
        setTimeout(() => { showModalOnLoad(); }, 300);
    }
    window.addEventListener("DOMContentLoaded", init);
</script>
