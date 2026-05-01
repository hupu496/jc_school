<style>


    /* ========= GLOBAL HEADER STYLES (from page-title-bg + school identity) ========= */
    .page-title-bg {
      z-index: 1;
      position: relative;
      background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 25%, #1a5276 50%, #2980b9 75%, #1a2a3a 100%);
      background-size: 200% 200%;
      padding: 35px 0 40px 0;
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
    .page-title-bg::before {
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
      z-index: 1;
    }

    .particle {
      position: absolute;
      background: rgba(255, 255, 255, 0.2);
      border-radius: 50%;
      animation: float 15s infinite ease-in-out;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) rotate(0deg); opacity: 0.2; }
      50% { transform: translateY(-40px) rotate(180deg); opacity: 0.6; }
    }

    .container-header {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
      position: relative;
      z-index: 3;
    }

    /* School Logo + Title Combination inside header */
    .school-brand {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 25px;
    }

    .logo-circle {
      background: white;
      border-radius: 50%;
      width: 85px;
      height: 85px;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 10px 20px rgba(0,0,0,0.2);
      transition: transform 0.3s;
    }
    .logo-circle img {
      max-width: 70px;
      max-height: 70px;
    }
    .logo-circle:hover {
      transform: scale(1.02);
    }
    .title-text h1 {
      font-size: 38px;
      font-weight: 800;
      letter-spacing: -0.5px;
      margin: 0;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.4);
    }
    .title-text p {
      font-size: 14px;
      margin: 8px 0 0;
      font-weight: 500;
      color: #FFD966;
      letter-spacing: 0.5px;
    }

    /* Main Title Styling (from your snippet) */
    .page-title-bg h1 {
      font-size: 56px;
      font-weight: 800;
      margin: 0 0 16px 0;
      color: #fff;
      letter-spacing: -0.5px;
      text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
      animation: fadeInUp 0.8s ease;
    }
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Breadcrumb Styling */
    .breadcrumb-custom {
      margin-top: 20px;
      font-size: 15px;
      font-weight: 500;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(0,0,0,0.3);
      backdrop-filter: blur(8px);
      padding: 8px 24px;
      border-radius: 50px;
      border: 1px solid rgba(255,255,255,0.25);
    }
    .breadcrumb-custom a {
      color: #ffd700;
      text-decoration: none;
      transition: all 0.3s ease;
    }
    .breadcrumb-custom a:hover {
      color: #fff;
      text-shadow: 0 0 5px rgba(255,215,0,0.5);
    }
    .breadcrumb-custom i {
      margin-right: 6px;
    }

    /* FORM CARD (consistent with registration) */
    .form-card {
      max-width: 1100px;
      margin: -35px auto 60px auto;
      background: white;
      border-radius: 36px;
      box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.25);
      overflow: hidden;
      position: relative;
      z-index: 10;
    }
    .inner-form {
      padding: 2rem 2rem 1.8rem;
    }
    .form-section-title {
      background: #fef5e7;
      padding: 1rem 1.8rem;
      border-left: 6px solid #f4b942;
      font-weight: 700;
      font-size: 1.85rem;
      color: #1e4663;
      margin-bottom: 1.8rem;
    }
    .form-label {
      font-weight: 600;
      font-size: 1.35rem;
      color: #1f3a4b;
      margin-bottom: 0.3rem;
    }
    .required-field::after {
      content: "*";
      color: #dc3545;
      margin-left: 4px;
      font-weight: bold;
    }
    .form-control, .form-select {
      border-radius: 14px;
      border: 1px solid #cfdee9;
    
      font-size: 1.2rem;
    }
    .form-control:focus, .form-select:focus {
      border-color: #f4b942;
      box-shadow: 0 0 0 0.2rem rgba(244, 185, 66, 0.25);
    }
    .radio-group {
      display: flex;
      gap: 1.5rem;
      align-items: center;
      flex-wrap: wrap;
      margin-top: 0.3rem;
    }
    .radio-option {
      display: flex;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
    }
    .action-buttons {
      background: #f9fbfd;
      padding: 1.2rem 2rem;
      border-top: 2px dashed #cbdbe2;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1rem;
    }
    .btn-print {
      background: #1e4663;
      border: none;
      padding: 12px 28px;
      font-weight: 600;
      border-radius: 40px;
      color: white;
      transition: all 0.2s;
    }
    .btn-print:hover {
      background: #0f3550;
      transform: translateY(-2px);
    }
    .btn-reset {
      background: #eef2f6;
      border: 1px solid #cbdbe2;
      color: #2c4e6e;
      padding: 12px 28px;
      font-weight: 600;
      border-radius: 40px;
    }
    .btn-reset:hover {
      background: #e2e8f0;
    }
    @media print {
      body {
        background: white;
        padding: 0;
        margin: 0;
      }
      .page-title-bg {
        background: #1a5276 !important;
        -webkit-print-color-adjust: exact;
        print-color-adjust: exact;
        animation: none;
        margin-bottom: 20px;
        padding: 20px 0;
      }
      .form-card {
        box-shadow: none;
        margin-top: 10px;
      }
      .action-buttons, .btn-print, .btn-reset, .no-print {
        display: none !important;
      }
      .form-control, .form-select {
        border: none !important;
        border-bottom: 1px solid #aaa !important;
        background: transparent !important;
        padding: 0.2rem 0 !important;
      }
      .radio-group input {
        -webkit-appearance: checkbox;
        opacity: 1;
      }
      .breadcrumb-custom {
        background: transparent;
        border: none;
        color: black;
      }
      .breadcrumb-custom a {
        color: #0b2b3d;
      }
      @page {
        size: A4;
        margin: 1.6cm;
      }
      .logo-circle {
        border: 1px solid #ccc;
      }
    }
 
  </style>
<!-- ========= ANIMATED HEADER WITH YOUR STYLES (page-title-bg) + LOGO ========= -->
<div class="page-title-bg">
  <!-- floating particles (decorative) -->
  <div class="particles" id="particlesContainer"></div>
  
  <div class="container-header">
    <!-- School brand with logo + name (matching PDF identity) -->
    <div class="school-brand">
      <div class="logo-circle">
        <!-- dynamic logo as per school assets: SVG emblem -->
        <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="J.C. High School Logo">
      </div>
      <div class="title-text">
        <h1>JAGADISH CHANDRA HIGH SCHOOL</h1>
        <p>Affiliated to State Board | Govt. Aided Linguistic Minority Co-Ed School | Ghatsila, E.Singhbhum</p>
      </div>
    </div>
    
    <!-- Main animated title (exactly as your snippet) -->
    <h1>📝 Student Registration Form</h1>
    
    <!-- Breadcrumb (custom styled) -->
    <div class="breadcrumb-custom">
      <i class="fas fa-home"></i> <a href="#">Home</a> <i class="fas fa-chevron-right mx-1" style="font-size: 10px;"></i> 
      <span><i class="fas fa-edit"></i> Admission 2026-27</span> <i class="fas fa-chevron-right mx-1" style="font-size: 10px;"></i>
      <span style="color: #FFD966;">Registration Form</span>
    </div>
  </div>
</div>

<!-- ========= REGISTRATION FORM CARD (PDF structure) ========= -->
<div class="form-card">
  <div class="inner-form">
    <div class="form-section-title">
      <i class="fas fa-user-check me-2" style="color:#f4b942;"></i> Applicant's Details (as per official records)
    </div>
    
    <form id="registrationForm">
      <div class="row g-4">
        <!-- 1. Name of Applicant -->
        <div class="col-md-4">
          <label class="form-label required-field">1. Name of the Applicant</label>
          <input type="text" class="form-control" name="applicant_name" placeholder="Full name as per birth certificate" required>
        </div>
        <!-- 2. Date of Birth -->
        <div class="col-md-4">
          <label class="form-label required-field">2. Date of Birth</label>
          <input type="date" class="form-control" name="dob" required>
        </div>
        <!-- 3. Sex -->
        <div class="col-md-4">
          <label class="form-label required-field">3. Sex</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="sex" value="Male" required> Male</label>
            <label class="radio-option"><input type="radio" name="sex" value="Female"> Female</label>
            <label class="radio-option"><input type="radio" name="sex" value="Other"> Other</label>
          </div>
        </div>

        <!-- 4. Caste -->
        <div class="col-md-4">
          <label class="form-label required-field">4. Caste Category</label>
          <select class="form-select" name="caste" required>
            <option value="">-- Select --</option>
            <option>ST</option><option>SC</option><option>OBC</option><option>Primitive Tribe</option><option>General</option>
          </select>
        </div>
         <!-- 18. Present Address -->
        <div class="col-12">
          <label class="form-label required-field">5. Present Address (Village, PO, PS, District, Pin)</label>
          <textarea class="form-control" name="address" rows="2" placeholder="Complete address with landmark and pin code" required></textarea>
        </div>
        <!-- 5. Sub Caste -->
        <div class="col-md-4">
          <label class="form-label">6. Sub Caste (if any)</label>
          <input type="text" class="form-control" name="sub_caste" placeholder="e.g., Mahto, Murmu">
        </div>
        <!-- 6. Religion -->
        <div class="col-md-4">
          <label class="form-label required-field">7. Religion</label>
          <input type="text" class="form-control" name="religion" placeholder="Hindu / Muslim / Christian etc" required>
        </div>

        <!-- 7. BPL Card No. -->
        <div class="col-md-4">
          <label class="form-label">8. BPL Card No. (If any)</label>
          <input type="text" class="form-control" name="bpl_card" placeholder="XXXXXXXXXX">
        </div>
        <!-- 8. Aadhar No. -->
        <div class="col-md-4">
          <label class="form-label required-field">9. Aadhar No.</label>
          <input type="text" class="form-control" name="aadhar" placeholder="12-digit Aadhaar" pattern="[0-9]{12}" maxlength="12">
        </div>
        <!-- 9. Bank Account No. -->
        <div class="col-md-4">
          <label class="form-label">10. Bank Account No.</label>
          <input type="text" class="form-control" name="bank_account" placeholder="Optional">
        </div>

        <!-- 10. Registration for Class -->
        <div class="col-md-4">
          <label class="form-label required-field">11. Registration for Class</label>
          <select class="form-select" name="reg_class" required>
            <option value="">-- Select Class --</option>
            <option>Class I</option><option>Class II</option><option>Class III</option><option>Class IV</option>
            <option>Class V</option><option>Class VI</option><option>Class VII</option><option>Class VIII</option>
            <option>Class IX</option><option>Class X</option><option>Class XI</option><option>Class XII</option>
          </select>
        </div>
        <!-- 11. School Last Attended -->
        <div class="col-md-4">
          <label class="form-label">12. School Last Attended</label>
          <input type="text" class="form-control" name="last_school" placeholder="Previous school name">
        </div>
        <!-- 12. Gradation of Previous Class -->
        <div class="col-md-4">
          <label class="form-label">13. Gradation / Percentage</label>
          <input type="text" class="form-control" name="previous_grade" placeholder="e.g., 78% / A grade">
        </div>

        <!-- 13. Language Spoken -->
        <div class="col-md-4">
          <label class="form-label required-field">14. Language Spoken by child</label>
          <input type="text" class="form-control" name="mother_tongue" placeholder="Bengali, Hindi, Santhali, English" required>
        </div>
        <!-- 14. Father's Name -->
        <div class="col-md-4">
          <label class="form-label required-field">15. Father's Name</label>
          <input type="text" class="form-control" name="father_name" required>
        </div>

        <!-- 15. Occupation -->
        <div class="col-md-4">
          <label class="form-label">16. Occupation (Father/Guardian)</label>
          <input type="text" class="form-control" name="occupation" placeholder="Farmer, Teacher, Business etc">
        </div>
        <!-- 16. Education Qualification -->
        <div class="col-md-4">
          <label class="form-label">17. Education Qualification (Father/Guardian)</label>
          <input type="text" class="form-control" name="parent_qualification" placeholder="Graduate / Higher Secondary">
        </div>
        <!-- 17. Relationship -->
        <div class="col-md-4">
          <label class="form-label required-field">18. Applicant's Relationship</label>
          <select class="form-select" name="relationship" required>
            <option value="">-- Select --</option>
            <option>Father</option><option>Mother</option><option>Guardian</option>
          </select>
        </div>

       

        <!-- 19. Physically Handicapped -->
        <div class="col-md-4">
          <label class="form-label required-field">19. Physically Handicapped</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="handicapped" value="YES" required> YES</label>
            <label class="radio-option"><input type="radio" name="handicapped" value="NO" checked> NO</label>
          </div>
        </div>

        <!-- 20. First Language (Bengali/Hindi/Santhali) -->
        <div class="col-md-4">
          <label class="form-label">20. First Language (As per class eligibility)</label>
          <select class="form-select" name="first_language">
            <option value="">-- Choose Language --</option>
            <option>Bengali</option>
            <option>Hindi</option>
            <option>Santhali</option>
          </select>
          <div class="form-text small text-muted">Class V-VIII: Bengali/Hindi | Class IX: Bengali/Hindi/Santhali</div>
        </div>
      </div>
      
      <div class="mt-4 p-3 bg-light rounded-3 small">
        <i class="fas fa-info-circle text-warning"></i> <strong>Note:</strong> Incomplete forms will not be considered. All <span class="text-danger">*</span> fields are mandatory. Data verification will be done at the time of admission.
      </div>
    </form>
  </div>
  
  <div class="action-buttons no-print">
    <button type="button" class="btn-reset" id="resetFormBtn"><i class="fas fa-eraser me-2"></i>Clear Form</button>
    <button type="button" class="btn-print" id="printFormBtn"><i class="fas fa-print me-2"></i>Print Registration (A4)</button>
  </div>
</div>



<script>
  (function() {
    // particle generation script for decorative floating particles inside .page-title-bg
    function generateParticles() {
      const container = document.getElementById('particlesContainer');
      if (!container) return;
      const particleCount = 28;
      for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        const size = Math.floor(Math.random() * 12) + 3;
        particle.style.width = size + 'px';
        particle.style.height = size + 'px';
        particle.style.left = Math.random() * 100 + '%';
        particle.style.top = Math.random() * 100 + '%';
        particle.style.animationDelay = Math.random() * 15 + 's';
        particle.style.animationDuration = 12 + Math.random() * 12 + 's';
        particle.style.opacity = 0.2 + Math.random() * 0.4;
        container.appendChild(particle);
      }
    }
    generateParticles();

    const form = document.getElementById('registrationForm');
    const printBtn = document.getElementById('printFormBtn');
    const resetBtn = document.getElementById('resetFormBtn');

    // required validation before print
    function validateMandatoryFields() {
      const requiredFields = [
        'input[name="applicant_name"]', 'input[name="dob"]',
        'input[name="sex"]:checked', 'select[name="caste"]',
        'input[name="religion"]', 'input[name="aadhar"]',
        'select[name="reg_class"]', 'input[name="mother_tongue"]',
        'input[name="father_name"]', 'select[name="relationship"]',
        'textarea[name="address"]', 'input[name="handicapped"]:checked'
      ];
      for (let sel of requiredFields) {
        if (sel.includes(':checked')) {
          const radioName = sel.split(':')[0];
          const radioChecked = document.querySelector(`${radioName}:checked`);
          if (!radioChecked) {
            alert("❌ Please select option for " + (radioName.includes('sex') ? 'Sex' : 'Physically Handicapped'));
            return false;
          }
        } else {
          const elem = document.querySelector(sel);
          if (!elem || !elem.value || elem.value.trim() === "") {
            let labelText = sel.replace('input[name="','').replace('select[name="','').replace('"]','');
            alert(`❌ Field "${labelText}" is required. Please fill all mandatory fields.`);
            return false;
          }
        }
      }
      // aadhar length check
      const aadharVal = document.querySelector('input[name="aadhar"]').value.trim();
      if (aadharVal && aadharVal.length !== 12 && isNaN(Number(aadharVal))) {
        alert("⚠️ Aadhar number must be 12 digits numeric.");
        return false;
      }
      return true;
    }

    // Helper to extract values safely
    function getFieldValue(name, isSelectText = false) {
      const el = form.querySelector(`[name="${name}"]`);
      if (!el) return '';
      if (isSelectText && el.tagName === 'SELECT') {
        return el.options[el.selectedIndex]?.text || '';
      }
      return el.value || '';
    }

    function getCheckedRadio(radioName) {
      const checked = document.querySelector(`input[name="${radioName}"]:checked`);
      return checked ? checked.value : 'Not selected';
    }

    function printRegistration() {
      if (!validateMandatoryFields()) return;

      const appName = getFieldValue('applicant_name');
      const dob = getFieldValue('dob');
      const sex = getCheckedRadio('sex');
      const caste = getFieldValue('caste', true);
      const subCaste = getFieldValue('sub_caste');
      const religion = getFieldValue('religion');
      const bpl = getFieldValue('bpl_card');
      const aadhar = getFieldValue('aadhar');
      const bankAcc = getFieldValue('bank_account');
      const regClass = getFieldValue('reg_class', true);
      const lastSchool = getFieldValue('last_school');
      const previousGrade = getFieldValue('previous_grade');
      const motherTongue = getFieldValue('mother_tongue');
      const fatherName = getFieldValue('father_name');
      const occupation = getFieldValue('occupation');
      const parentQual = getFieldValue('parent_qualification');
      const relationship = getFieldValue('relationship', true);
      const address = getFieldValue('address');
      const handicapped = getCheckedRadio('handicapped');
      const firstLang = getFieldValue('first_language', true);

      const printWindow = window.open('', '_blank', 'width=1000,height=800,toolbar=yes,scrollbars=yes');
      printWindow.document.write(`
        <!DOCTYPE html>
        <html>
        <head><meta charset="UTF-8"><title>JCHS Registration - ${appName}</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <style>
          body { font-family: 'Inter', sans-serif; margin: 0; padding: 1.2cm; background: white; }
          .print-header { display: flex; align-items: center; gap: 16px; border-bottom: 3px solid #f4b942; padding-bottom: 10px; margin-bottom: 20px; }
          .logo-print { width: 70px; height: 70px; background: #1e4663; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #f4b942; font-size: 28px; font-weight: bold; }
          .school-title { font-weight: 800; font-size: 1.6rem; color: #1e4663; line-height: 1.2; }
          .info-grid { margin-top: 20px; }
          .info-row { display: flex; border-bottom: 1px solid #e2e8f0; padding: 8px 0; }
          .info-label { width: 36%; font-weight: 700; color: #0f3b5c; }
          .info-value { width: 64%; }
          .footer-print { margin-top: 30px; text-align: center; border-top: 1px solid #ccc; padding-top: 12px; font-size: 0.7rem; }
          @media print { body { margin: 0; padding: 0.8cm; } .no-break { page-break-inside: avoid; } }
        </style>
        </head>
        <body>
        <div class="print-header">
          <div class="logo-print">JC</div>
          <div><div class="school-title">JAGADISH CHANDRA HIGH SCHOOL</div><small>Ghatsila, East Singhbhum | State Govt. Aided Linguistic Minority</small></div>
        </div>
        <h5 style="background:#fef5e7; padding:6px 12px; border-left:6px solid #f4b942;"><i class="fas fa-file-alt"></i> STUDENT REGISTRATION FORM (Official Copy)</h5>
        <div class="info-grid">
          <div class="info-row"><div class="info-label">1. Applicant Name :</div><div class="info-value">${escapeHtml(appName)}</div></div>
          <div class="info-row"><div class="info-label">2. Date of Birth :</div><div class="info-value">${escapeHtml(dob)}</div></div>
          <div class="info-row"><div class="info-label">3. Sex :</div><div class="info-value">${escapeHtml(sex)}</div></div>
          <div class="info-row"><div class="info-label">4. Caste :</div><div class="info-value">${escapeHtml(caste)}</div></div>
          <div class="info-row"><div class="info-label">5. Sub Caste :</div><div class="info-value">${escapeHtml(subCaste || '—')}</div></div>
          <div class="info-row"><div class="info-label">6. Religion :</div><div class="info-value">${escapeHtml(religion)}</div></div>
          <div class="info-row"><div class="info-label">7. BPL Card No. :</div><div class="info-value">${escapeHtml(bpl || '—')}</div></div>
          <div class="info-row"><div class="info-label">8. Aadhar No. :</div><div class="info-value">${escapeHtml(aadhar)}</div></div>
          <div class="info-row"><div class="info-label">9. Bank Account No. :</div><div class="info-value">${escapeHtml(bankAcc || '—')}</div></div>
          <div class="info-row"><div class="info-label">10. Registration Class :</div><div class="info-value">${escapeHtml(regClass)}</div></div>
          <div class="info-row"><div class="info-label">11. School Last Attended :</div><div class="info-value">${escapeHtml(lastSchool || '—')}</div></div>
          <div class="info-row"><div class="info-label">12. Previous Grade :</div><div class="info-value">${escapeHtml(previousGrade || '—')}</div></div>
          <div class="info-row"><div class="info-label">13. Language Spoken :</div><div class="info-value">${escapeHtml(motherTongue)}</div></div>
          <div class="info-row"><div class="info-label">14. Father's Name :</div><div class="info-value">${escapeHtml(fatherName)}</div></div>
          <div class="info-row"><div class="info-label">15. Occupation :</div><div class="info-value">${escapeHtml(occupation || '—')}</div></div>
          <div class="info-row"><div class="info-label">16. Edu. Qualification :</div><div class="info-value">${escapeHtml(parentQual || '—')}</div></div>
          <div class="info-row"><div class="info-label">17. Relationship :</div><div class="info-value">${escapeHtml(relationship)}</div></div>
          <div class="info-row"><div class="info-label">18. Present Address :</div><div class="info-value">${escapeHtml(address)}</div></div>
          <div class="info-row"><div class="info-label">19. Physically Handicapped :</div><div class="info-value">${escapeHtml(handicapped)}</div></div>
          <div class="info-row"><div class="info-label">20. First Language :</div><div class="info-value">${escapeHtml(firstLang || 'Not specified')}</div></div>
        </div>
        <div class="footer-print"><i class="fas fa-certificate"></i> This registration data is true to best of my knowledge. Incomplete forms invalid. <br>Jagadish Chandra High School, Ghatsila | Registration reference: ${new Date().toLocaleDateString()}</div>
        </body></html>
      `);
      printWindow.document.close();
      printWindow.focus();
      printWindow.print();
    }

    function resetFormNow() {
      form.reset();
      const handicappedNo = document.querySelector('input[name="handicapped"][value="NO"]');
      if (handicappedNo) handicappedNo.checked = true;
    }

    function escapeHtml(str) {
      if (!str) return '';
      return str.replace(/[&<>]/g, function(m) {
        if(m === '&') return '&amp;';
        if(m === '<') return '&lt;';
        if(m === '>') return '&gt;';
        return m;
      });
    }

    printBtn.addEventListener('click', printRegistration);
    resetBtn.addEventListener('click', resetFormNow);
  })();
</script>
