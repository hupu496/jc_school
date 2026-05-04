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
            display: flex;
            flex-direction: column;
        }
        .alumni-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 30px -12px rgba(0,0,0,0.15);
            border-color: #cbd5e1;
        }
        .card-body-alumni { padding: 1.5rem;
     flex: 1; }
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
        .detail-item { font-size: 14px; margin-bottom: 0.5rem; color: #334155; display: flex; align-items: center; gap: 8px; }
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
            font-size:16px;
            color: white;
        }
        .btn-primary-alumni:hover { background: #3498db; }
        .form-control {
            margin-top: 10px;
        }
      
        .form-control, .form-select { border-radius: 0.9rem; padding: 0.65rem 1rem; border: 1px solid #e2e8f0; }
        .form-control:focus, .form-select:focus { border-color: #2a5a3a; box-shadow: 0 0 0 0.2rem rgba(42,90,58,0.2); }
        .empty-state { text-align: center; padding: 3rem; background: white; border-radius: 2rem; }
          /* ---------- MODAL CUSTOM : LUXURY GLASS + ELEGANT SHADOW + ANIMATION ---------- */
        .modal-custom .modal-content {
            border-radius: 2rem;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(0px);
            border: 1px solid rgba(46, 87, 62, 0.2);
            box-shadow: 0 35px 60px rgba(0, 0, 0, 0.25), 0 0 0 1px rgba(255,255,240,0.1);
            transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
        }

        .modal.show .modal-dialog {
            transform: scale(1);
            animation: modalPopIn 0.35s cubic-bezier(0.21, 1.11, 0.35, 1);
        }

        @keyframes modalPopIn {
            0% {
                opacity: 0;
                transform: scale(0.92) translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: scale(1) translateY(0);
            }
        }

        .modal-header {
            border-bottom: 2px solid rgba(42, 90, 58, 0.2);
            background: linear-gradient(115deg, #fef9f0 0%, #ffffff 100%);
            border-radius: 2rem 2rem 0 0;
            padding: 1.3rem 1.8rem;
        }

        .modal-header .modal-title {
            font-weight: 800;
            font-size: 1.65rem;
            background: linear-gradient(135deg, #1e4620, #2c7a47);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            letter-spacing: -0.3px;
        }

        .modal-header .close {
            background: rgba(0,0,0,0.05);
            border-radius: 50%;
            width: 38px;
            height: 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.9rem;
            line-height: 1;
            transition: 0.2s;
            opacity: 0.7;
            border: none;
            outline: none;
            color: #2c3e2f;
        }

        .modal-header .close:hover {
            background: #e74c3c;
            color: white;
            opacity: 1;
            transform: rotate(90deg);
        }

        /* form fields : modern, floating effect on focus */
        .modal-body {
            padding: 1.8rem 2rem 2rem;
        }
    
        /* custom submit button inside modal */
        .modal-body .btn-primary {
            background: linear-gradient(95deg, #1f5438, #2f8c50);
            border: none;
            border-radius: 2.5rem;
            padding: 0.8rem 1.8rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            width: 100%;
            font-size: 1.1rem;
            transition: 0.2s;
            box-shadow: 0 10px 18px -8px rgba(31,84,56,0.5);
            margin-top: 0.5rem;
        }

        .modal-body .btn-primary:hover {
            transform: scale(1.01);
            background: linear-gradient(95deg, #266e45, #38a35e);
            box-shadow: 0 14px 22px -8px #1f5438;
        }

        @media (max-width: 768px) {
            .alumni-header h1 { font-size: 1.8rem; }
            .filter-section { padding: 1rem; }
           
        }
        #batchFilter {
    max-height: 100px;
    overflow-y: auto;
}
 /* Certificate Badge */
        .certificate-badge {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background: linear-gradient(135deg, #ffd700, #ff8c00);
            padding: 12px 20px;
            border-radius: 50px;
            color: #1a4a6f;
            font-weight: 700;
            box-shadow: 0 5px 20px rgba(0,0,0,0.2);
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .certificate-badge:hover {
            transform: scale(1.05);
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
            
            <div class="col-md-6">
                <div class="input-group">
                   
                    <input type="text" class="form-control border-start-0" id="searchInput" placeholder="🔍 Search by name, city, profession...">
                </div>
            </div>
           <div class="col-md-4">

                <input type="text"
                    id="batchFilter"
                    class="form-control"
                    list="batchList"
                    placeholder="Select or type batch year">

                <datalist id="batchList">
                    <option value="all">All Batches</option>
                </datalist>

            </div>
         
            <div class="col-md-2">
                <button class="btn btn-primary-alumni " style="margin-top:10px;"
                data-toggle="modal"
                data-target="#alumniModal">
            ➕ Add Alumni
                </button></div>
            
                
                </div>
            </div>

    <!-- Alumni Cards Grid -->
    <div id="alumniGrid" class="row g-4">
        <div class="col-12 text-center py-5"><div class="spinner-border text-success" role="status"></div><p class="mt-2">Loading alumni directory...</p></div>
    </div>
</div>
<!-- MODAL POPUP (Opens automatically on page load) -->
<div class="modal fade modal-custom" id="alumniModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-center">
                    <i class="fas fa-user-graduate"></i> Alumni Registration
                </h5>
                <a href="<?php echo base_url('/edit_alumini'); ?>" class="btn btn-primary-alumni">Edit Alumni</a>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>

            <div class="modal-body">
                <form id="alumniForm">

                 <div class="row">

    <div class="col-md-6 mb-3 px-2">
        <input type="text" class="form-control" id="fullName" placeholder="Full Name" required>
    </div>

    <div class="col-md-6 mb-3 px-2">
        <input type="tel"
               class="form-control"
               id="phoneNo"
               placeholder="10 Digit Mobile Number"
               maxlength="10"
               pattern="[0-9]{10}"
               inputmode="numeric"
               required>
    </div>

    <div class="col-md-6 mb-3 px-2">
        <input type="email" class="form-control" id="emailId" placeholder="Email" required>
    </div>

    <div class="col-md-6 mb-3 px-2">
        <input type="text" class="form-control" id="city" placeholder="City" required>
    </div>

    <div class="col-md-6 mb-3 px-2">
        <input type="text" class="form-control" id="state" placeholder="State" required>
    </div>

    <div class="col-md-6 mb-3 px-2">
         <input type="text"
                    id="batch"
                    class="form-control"
                    list="batchList"
                    placeholder="Select or type batch year">

                <datalist id="batch">
                    <option value="all">All Batches</option>
                </datalist>
       
    </div>

    <div class="col-md-12 mb-3 px-2">
        <input type="text" class="form-control" id="profession" placeholder="Profession" required>
    </div>

    <div class="col-md-12 mb-3 px-2">
        <input type="text" class="form-control" id="address" placeholder="Address">
    </div>
   <div class="col-md-12">
    <small><b>Note:</b>I hereby declare that i am alumni of JCHS Ghatsila and all information is provide by me is or true and valid.</small>
   </div>
</div>
                    <button type="submit" class="btn btn-primary mt-3" style="font-size:15px;">
                        Submit
                    </button>

                </form>
            </div>

        </div>
    </div>
</div>

 <div class="certificate-badge" onclick="shareOnWhatsApp()">
    <i class="fas fa-share"></i> Share Alumni Page
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<script src="https://rcsindia.co.in/newcbse19/js/bootstrap.min.js"></script>
<script>
  function shareOnWhatsApp() {
    var url = window.location.href; // ✅ current page URL
    var text = "Check this page: " + url;

    var isMobile = /iPhone|Android/i.test(navigator.userAgent);

    var whatsappUrl = isMobile
        ? "https://api.whatsapp.com/send?text=" + encodeURIComponent(text)
        : "https://web.whatsapp.com/send?text=" + encodeURIComponent(text);

    window.open(whatsappUrl, '_blank');
}
    function maskPhone(phone) {
    if (!phone) return '';
    return phone.slice(0, -5).replace(/./g, 'x') + phone.slice(-5);
}

function maskEmail(email) {
    if (!email) return '';
    let parts = email.split('@');
    return 'xxxxx@' + parts[1];
}
    $('#phoneNo').on('input', function () {
    this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);
});
  $('#alumniForm').on('submit', function(e){
    e.preventDefault();
    let phone = $('#phoneNo').val();
    console.log(phone);

    // ✅ Strict validation
    if (!/^[6-9]\d{9}$/.test(phone)) {
        alert("❌ Enter valid 10 digit mobile number (starts with 6-9)");
        $('#phoneNo').focus();
        return;
    }

    $.ajax({
        url: "<?= base_url('homeservice/save_alumini'); ?>",
        type: "POST",
        data: {
            name: $('#fullName').val(),
            phone: phone,
            email: $('#emailId').val(),
            address: $('#address').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            batch: $('#batch').val(),
            profession: $('#profession').val()
        },
        success: function(res){
            let data = JSON.parse(res);

            if(data.status == 'success'){

                // ✅ CLOSE MODAL
                $('#alumniModal').modal('hide');

                // ✅ REMOVE BACKDROP FORCEFULLY
                $('body').removeClass('modal-open');
                $('.modal-backdrop').remove();

                // ✅ RESET FORM
                $('#alumniForm')[0].reset();

                // ✅ RELOAD DATA
                loadAlumni();
            }
        }
    });
});

function loadAlumni() {

    let search = $('#searchInput').val().trim();
    let batch  = $('#batchFilter').val().trim();

    // default fallback
    if(batch === '') batch = 'all';

    $.ajax({
        url: "<?= base_url('homeservice/get_alumini'); ?>",
        type: "GET",
        data: {
            search: search,
            batch: batch
        },
        success: function(res) {

            alumniArray = JSON.parse(res);

            renderAlumniGrid();

            $('#alumniCountDisplay').text(alumniArray.length);
        }
    });
}
document.getElementById("searchInput").addEventListener("input", function() {
    loadAlumni();
});

document.getElementById("batchFilter").addEventListener("change", function() {
    loadAlumni();
});
    // ======================= MULTI-LANGUAGE HANDLER =======================
   
    
    // ======================= ALUMNI DATA (simulated PDF extract + local storage) =======================
    let alumniArray = [];
   
   
    function generateId() { return Date.now().toString(36) + Math.random().toString(36).substring(2, 8); }
    
    function addAlumni(formData) {
        alumniArray.unshift({
        name: formData.get('name'),
        phone_no: formData.get('phone'),
        email: formData.get('email'),
        address: formData.get('address'),
        city: formData.get('city'),
        state: formData.get('state'),
        batch: formData.get('batch'),
        profession: formData.get('profession')
    });

    renderAlumniGrid();
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

filtered.forEach((alumni, index) => {

    // ✅ Start a new row every 3 items
    if (index % 3 === 0) {
        cardsHtml += '<div class="clearfix visible-md-block visible-lg-block"></div>';
    }

    cardsHtml += `
        <div class="col-md-4 col-lg-4">
            <div class="alumni-card">
                <div class="card-body-alumni">
                    <div class="avatar-icon"><i class="fas fa-user-circle"></i></div>
                    <h3 class="alumni-name">${escapeHtml(alumni.name)}</h3>
                    <div class="alumni-batch">
                        <i class="far fa-calendar-alt me-1"></i> Batch ${escapeHtml(alumni.batch)}
                    </div>
                    <div class="detail-item"><i class="fas fa-briefcase"></i> ${escapeHtml(alumni.profession)}</div>
                    <div class="detail-item"><i class="fas fa-map-marker-alt"></i> ${escapeHtml(alumni.city)}, ${escapeHtml(alumni.state)}</div>
                    <div class="detail-item"><i class="fas fa-envelope"></i> ${maskEmail(escapeHtml(alumni.email))}</div>
                    <div class="detail-item"><i class="fas fa-phone-alt"></i> ${maskPhone(escapeHtml(alumni.phone_no))}</div>
                    ${alumni.address ? `<div class="detail-item"><i class="fas fa-home"></i> ${escapeHtml(alumni.address)}</div>` : ''}
                    <hr class="my-3">
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted"><i class="fas fa-graduation-cap"></i> JCHS</small>
                        <span class="badge bg-light text-dark rounded-pill">#Alumni</span>
                    </div>
                </div>
            </div>
        </div>
    `;
});

container.innerHTML = cardsHtml;
    }
    function getBatchValue() {

    let inputYear = $('#batchInput').val().trim();
    let selectedYear = $('#batchFilter').val();

    // Priority: Input > Select > All
    if(inputYear !== '') {
        return inputYear;
    }

    return selectedYear || 'all';
}
   function updateBatchFilter(data) {
    let batchSet = new Set();

    data.forEach(item => {
        if(item.batch) batchSet.add(item.batch);
    });

    let select = document.getElementById("batchFilter");
    let current = select.value;

    select.innerHTML = `<option value="all">All Batches</option>`;

    [...batchSet].sort((a,b)=>b-a).forEach(batch => {
        select.innerHTML += `<option value="${batch}">${batch}</option>`;
    });

    select.value = current || 'all';
}
   function generateBatchDropdown() {

    let currentYear = new Date().getFullYear();
    let startYear = 1927;

    let dataList = $('#batchList');

    dataList.html('<option value="all">All Batches</option>');

    for(let year = currentYear; year >= startYear; year--) {
        dataList.append(`<option value="${year}">`);
    }
}
 $('#searchInput').on('keyup', function(){
    loadAlumni();
});

$('#batchFilter').on('input', function(){

    let val = $(this).val();

    // allow only 4 digit year or 'all'
    if(val !== 'All') {
        this.value = val.replace(/[^0-9]/g, '').slice(0,4);
    }

    loadAlumni();
});

// ⌨️ Enter key
$('#batchFilter').on('keypress', function(e){
    if(e.which === 13){
        loadAlumni();
    }
});
   window.addEventListener("DOMContentLoaded", function() {
    initLanguage();
    loadAlumni(); // 🔥 load from DB
});
  $(document).ready(function(){

    generateBatchDropdown();

    $('#batchFilter').val('all'); // default

    loadAlumni();
});
</script>
