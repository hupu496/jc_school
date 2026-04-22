
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Arial:wght@400;700&display=swap');
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 20px;
            background: #f4f4f4;
        }
        
        .header {
            background: #174873;
            color: white;
            text-align: center;
            padding: 15px;
            font-size: 22px;
            font-weight: bold;
        }
        .sub-header {
            text-align: center;
            padding: 10px;
            border-bottom: 3px solid #174873;
            font-size: 18px;
        }
        .form-section {
            padding: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 15px 0;
        }
        td {
            padding: 10px;
            border: 1px solid #000;
            vertical-align: top;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #000;
            font-size: 16px;
        }
        .photo-box {
            width: 120px;
            height: 150px;
            border: 2px dashed #c8102e;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            color: #666;
            cursor: pointer;
            position: relative;
            overflow: hidden;
        }
        .photo-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .photo-box.small {
            width: 100px;
            height: 100px;
        }
        .upload-text {
            position: absolute;
            bottom: 5px;
            font-size: 10px;
            background: rgba(255,255,255,0.9);
            padding: 2px 8px;
            border-radius: 3px;
        }
        .btn {
            background: #c8102e;
            color: white;
            padding: 12px 25px;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 10px 8px;
        }
        .btn:hover { background: #a00c24; }
        .btn-success { background: #28a745; }
        .btn-success:hover { background: #218838; }
        
        .print-area {
            display: none;
            padding: 30px;
            background: white;
            border: 10px solid #c8102e;
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
                box-shadow: none;
                margin: 0;
                padding: 20px;
            }
            .no-print { display: none !important; }
        }
        .signature {
            border-top: 2px solid #000;
            width: 250px;
            margin-top: 40px;
        }

      
    </style>




    <!-- Form Header -->
    <div class="header">
        <span class="translatable" data-key="school_name">JAGADISH CHANDRA HIGH / PRIMARY SCHOOL</span><br>
        <span class="translatable" data-key="ghatsila">GHATSILA</span>
    </div>
    <div class="sub-header">
        <span class="translatable" data-key="student_record">STUDENT’S PERSONAL RECORD</span><br>
        <span class="translatable" data-key="filled_by">(TO BE FILLED BY THE PARENT / GUARDIAN)</span><br>
        <span class="translatable" data-key="block_letters">(PLEASE WRITE IN BLOCK LETTERS)</span>
    </div>

    <!-- Fillable Form -->
    <div class="form-section no-print">

        <div style="display: flex; gap: 30px; align-items: flex-start;">
            
            <!-- Left Column - Student Details -->
            <div style="flex: 1;">
                <table>
                    <tr>
                        <td colspan="2" style="text-align:center; font-size:18px; font-weight:bold;">
                            <span class="translatable" data-key="student_photo">Student’s Photo</span>
                        </td>
                        <td rowspan="8" style="width:140px;">
                            <div class="photo-box" id="studentPhotoBox" onclick="triggerUpload('student')">
                                Click to Upload Photo<br>(4×5 cm)<br>
                                <span class="upload-text">JPG / PNG / JPEG</span>
                                <input type="file" id="studentFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'student')">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="name">Name</span></label></td>
                        <td colspan="2"><input type="text" id="name" placeholder="Full Name in Block Letters"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="class">Class</span></label></td>
                        <td><input type="text" id="class" style="width:120px;"></td>
                        <td><label><span class="translatable" data-key="section">Section</span></label><input type="text" id="section" style="width:80px;"></td>
                        <td><label><span class="translatable" data-key="roll">Roll No.</span></label><input type="text" id="roll" style="width:120px;"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="adm_no">Adm. No.</span></label></td>
                        <td><input type="text" id="admNo"></td>
                        <td colspan="2"><label><span class="translatable" data-key="aadhar">Aadhar No.</span></label><input type="text" id="aadhar"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="bank_ac">Bank A/c No.</span></label></td>
                        <td><input type="text" id="bankAc"></td>
                        <td colspan="2"><label><span class="translatable" data-key="ifsc">IFSC Code</span></label><input type="text" id="ifsc"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="bank_name">Name of Bank</span></label></td>
                        <td><input type="text" id="bankName"></td>
                        <td colspan="2"><label><span class="translatable" data-key="branch">Branch</span></label><input type="text" id="branch"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="dob">Date of Birth</span></label></td>
                        <td><input type="date" id="dob"></td>
                        <td><label><span class="translatable" data-key="gender">Gender</span></label><input type="text" id="gender" placeholder="Male/Female"></td>
                        <td><label><span class="translatable" data-key="blood">Blood Group</span></label><input type="text" id="blood"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="bpl">BPL Card No.</span></label></td>
                        <td colspan="3"><input type="text" id="bpl"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="religion">Religion</span></label></td>
                        <td><input type="text" id="religion"></td>
                        <td colspan="2">
                            <label><span class="translatable" data-key="category">Category :</span></label>
                            <input type="checkbox" id="st"> ST &nbsp;
                            <input type="checkbox" id="sc"> SC &nbsp;
                            <input type="checkbox" id="obc"> OBC &nbsp;
                            <input type="checkbox" id="gen"> GEN
                        </td>
                    </tr>
                </table>

                <table>
                    <tr>
                        <td><label><span class="translatable" data-key="father_name">Father’s Name</span></label><input type="text" id="fatherName"></td>
                        <td><label><span class="translatable" data-key="occupation">Occupation</span></label><input type="text" id="fatherOcc"></td>
                    </tr>
                    <tr>
                        <td><label><span class="translatable" data-key="mother_name">Mother’s Name</span></label><input type="text" id="motherName"></td>
                        <td><label><span class="translatable" data-key="occupation">Occupation</span></label><input type="text" id="motherOcc"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label><span class="translatable" data-key="residential_address">Residential Address</span></label><textarea id="address" rows="3" style="width:100%; resize:none;"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><label><span class="translatable" data-key="ph_no">Ph. No.</span></label><input type="text" id="phone" style="width:100%;"></td>
                    </tr>
                </table>
            </div>

            <!-- Right Column - Page 2 Details -->
            <div style="flex: 1;">
                <h3 style="text-align:center; margin:10px 0;">
                    <span class="translatable" data-key="bro_sis">Brother’s / Sister’s in Jagadish Chandra High / Primary School</span>
                </h3>
                <table>
                    <tr><th>Sl. No.</th><th>Name</th><th>Class</th><th>Sec</th><th>Adm. No.</th></tr>
                    <tr><td>1.</td><td><input type="text" id="sib1"></td><td><input type="text" id="sib1Class" style="width:80px;"></td><td><input type="text" id="sib1Sec" style="width:60px;"></td><td><input type="text" id="sib1Adm" style="width:100px;"></td></tr>
                    <tr><td>2.</td><td><input type="text" id="sib2"></td><td><input type="text" id="sib2Class" style="width:80px;"></td><td><input type="text" id="sib2Sec" style="width:60px;"></td><td><input type="text" id="sib2Adm" style="width:100px;"></td></tr>
                </table>

                <p><label><span class="translatable" data-key="mother_tongue">Mother Tongue :</span></label><input type="text" id="motherTongue" style="width:100%;"></p>

                <p style="margin:20px 0; font-weight:bold;" class="translatable" data-key="declaration">
                    I have read the school rules and regulations laid down in the school diary and promise to abide by them.
                </p>

                <div style="display:flex; gap:15px; margin-top:20px;">
                    <div>
                        <div class="photo-box small" id="fatherPhotoBox" onclick="triggerUpload('father')">
                            Click to Upload<br>Father Photo
                            <input type="file" id="fatherFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'father')">
                        </div>
                        <p style="text-align:center; margin:5px 0;">Father’s Full Sign.<br><input type="text" id="fatherSign" placeholder="Signature"></p>
                    </div>
                    <div>
                        <div class="photo-box small" id="motherPhotoBox" onclick="triggerUpload('mother')">
                            Click to Upload<br>Mother Photo
                            <input type="file" id="motherFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'mother')">
                        </div>
                        <p style="text-align:center; margin:5px 0;">Mother’s Full Sign.<br><input type="text" id="motherSign" placeholder="Signature"></p>
                    </div>
                    <div>
                        <div class="photo-box small" id="guardianPhotoBox" onclick="triggerUpload('guardian')">
                            Click to Upload<br>Guardian Photo
                            <input type="file" id="guardianFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'guardian')">
                        </div>
                        <p style="text-align:center; margin:5px 0;">Guardian’s Full Sign.<br><input type="text" id="guardianSign" placeholder="Signature"></p>
                    </div>
                </div>

                <p><label><span class="translatable" data-key="date">Date :</span></label><input type="date" id="date"></p>
            </div>
        </div>

        <div style="text-align:center; margin-top:30px;">
            <button class="btn" id="saveBtn" onclick="saveFormData()">💾 Save Form Data (with Images)</button>
            <button class="btn btn-success" id="loadBtn" onclick="loadFormData()">📂 Load Saved Form</button>
            <button class="btn" id="generateBtn" onclick="generatePrint()">Generate Print Format</button>
            <button class="btn" id="printBtn" onclick="window.print()" style="background:#0066cc;">🖨️ Print Now</button>
        </div>
    </div>

    <!-- PRINTABLE VERSION -->
    <div id="printArea" class="print-area">
        <div style="border:8px solid #c8102e; padding:20px; margin-bottom:30px;">
            <div style="text-align:center;">
                <h1 style="margin:0; color:#c8102e;" class="translatable" data-key="school_name">JAGADISH CHANDRA HIGH / PRIMARY SCHOOL</h1>
                <h2 style="margin:5px 0;" class="translatable" data-key="ghatsila">GHATSILA</h2>
                <p style="font-size:20px; font-weight:bold;" class="translatable" data-key="student_record">STUDENT’S PERSONAL RECORD</p>
            </div>

            <table style="width:100%; border:2px solid #000;">
                <tr>
                    <td style="width:70%; vertical-align:top;">
                        <strong><span class="translatable" data-key="name">Name</span></strong> : <span id="printName"></span><br><br>
                        <strong><span class="translatable" data-key="class">Class</span></strong> : <span id="printClass"></span> &nbsp;&nbsp;
                        <strong><span class="translatable" data-key="section">Section</span></strong> : <span id="printSection"></span> &nbsp;&nbsp;
                        <strong><span class="translatable" data-key="roll">Roll No.</span></strong> : <span id="printRoll"></span><br><br>
                        <strong><span class="translatable" data-key="adm_no">Adm. No.</span></strong> : <span id="printAdm"></span> &nbsp;&nbsp;
                        <strong><span class="translatable" data-key="aadhar">Aadhar No.</span></strong> : <span id="printAadhar"></span><br><br>
                        <strong><span class="translatable" data-key="bank_ac">Bank A/c No.</span></strong> : <span id="printBankAc"></span> &nbsp;&nbsp;
                        <strong><span class="translatable" data-key="ifsc">IFSC Code</span></strong> : <span id="printIfsc"></span><br><br>
                        <strong><span class="translatable" data-key="bank_name">Bank</span></strong> : <span id="printBankName"></span> &nbsp;&nbsp;
                        <strong><span class="translatable" data-key="branch">Branch</span></strong> : <span id="printBranch"></span><br><br>
                        <strong><span class="translatable" data-key="dob">Date of Birth</span></strong> : <span id="printDob"></span> &nbsp;&nbsp;
                        <strong><span class="translatable" data-key="gender">Gender</span></strong> : <span id="printGender"></span><br><br>
                        <strong><span class="translatable" data-key="bpl">BPL Card No.</span></strong> : <span id="printBpl"></span> &nbsp;&nbsp;
                        <strong><span class="translatable" data-key="blood">Blood Group</span></strong> : <span id="printBlood"></span><br><br>
                        <strong><span class="translatable" data-key="religion">Religion</span></strong> : <span id="printReligion"></span><br><br>
                        <strong><span class="translatable" data-key="category">Category</span></strong> : <span id="printCategory"></span>
                    </td>
                    <td style="text-align:center; vertical-align:top;">
                        <img id="printStudentPhoto" style="width:140px; height:170px; object-fit:contain; border:2px solid #000;" alt="Student Photo">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <strong><span class="translatable" data-key="father_name">Father’s Name</span></strong> : <span id="printFather"></span> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong><span class="translatable" data-key="occupation">Occupation</span></strong> : <span id="printFatherOcc"></span><br><br>
                        <strong><span class="translatable" data-key="mother_name">Mother’s Name</span></strong> : <span id="printMother"></span> &nbsp;&nbsp;&nbsp;&nbsp;
                        <strong><span class="translatable" data-key="occupation">Occupation</span></strong> : <span id="printMotherOcc"></span><br><br>
                        <strong><span class="translatable" data-key="residential_address">Residential Address</span></strong> : <span id="printAddress"></span><br><br>
                        <strong><span class="translatable" data-key="ph_no">Ph. No.</span></strong> : <span id="printPhone"></span>
                    </td>
                </tr>
            </table>

            <h3 style="text-align:center; margin:20px 0 10px;" class="translatable" data-key="bro_sis">Brother’s / Sister’s in Jagadish Chandra High / Primary School</h3>
            <table style="width:100%; border:2px solid #000;">
                <tr style="background:#f0f0f0;">
                    <th>Sl. No.</th><th>Name</th><th>Class</th><th>Sec</th><th>Adm. No.</th>
                </tr>
                <tr><td>1.</td><td id="printSib1"></td><td id="printSib1Class"></td><td id="printSib1Sec"></td><td id="printSib1Adm"></td></tr>
                <tr><td>2.</td><td id="printSib2"></td><td id="printSib2Class"></td><td id="printSib2Sec"></td><td id="printSib2Adm"></td></tr>
            </table>

            <p><strong><span class="translatable" data-key="mother_tongue">Mother Tongue</span></strong> : <span id="printMotherTongue"></span></p>

            <p style="margin:25px 0; font-weight:bold; text-align:center;" class="translatable" data-key="declaration">
                I have read the school rules and regulations laid down in the school diary and promise to abide by them.
            </p>

            <div style="display:flex; justify-content:space-around; margin-top:30px;">
                <div style="text-align:center;">
                    <img id="printFatherPhoto" style="width:110px; height:110px; object-fit:contain; border:2px solid #000;" alt="Father Photo">
                    <p>Father’s Photo</p>
                    <div class="signature" id="printFatherSign"></div>
                </div>
                <div style="text-align:center;">
                    <img id="printMotherPhoto" style="width:110px; height:110px; object-fit:contain; border:2px solid #000;" alt="Mother Photo">
                    <p>Mother’s Photo</p>
                    <div class="signature" id="printMotherSign"></div>
                </div>
                <div style="text-align:center;">
                    <img id="printGuardianPhoto" style="width:110px; height:110px; object-fit:contain; border:2px solid #000;" alt="Guardian Photo">
                    <p>Guardian’s Photo</p>
                    <div class="signature" id="printGuardianSign"></div>
                </div>
            </div>

            <p style="text-align:right; margin-top:20px;"><strong><span class="translatable" data-key="date">Date :</span></strong> <span id="printDate"></span></p>

            <div style="text-align:center; margin-top:30px; font-size:14px; border-top:2px solid #c8102e; padding-top:10px;">
                JAGADISH CHANDRA HIGH / PRIMARY SCHOOL / 1 &nbsp;&nbsp;&nbsp;&nbsp; JAGADISH CHANDRA HIGH / PRIMARY SCHOOL / 2
            </div>
        </div>
    </div>


<script>
    // ====================== TRANSLATIONS (All content added - logic unchanged) ======================
    const translations = {
        english: {
            school_name: "JAGADISH CHANDRA HIGH / PRIMARY SCHOOL",
            ghatsila: "GHATSILA",
            student_record: "STUDENT’S PERSONAL RECORD",
            filled_by: "(TO BE FILLED BY THE PARENT / GUARDIAN)",
            block_letters: "(PLEASE WRITE IN BLOCK LETTERS)",
            student_photo: "Student’s Photo",
            name: "Name",
            class: "Class",
            section: "Section",
            roll: "Roll No.",
            adm_no: "Adm. No.",
            aadhar: "Aadhar No.",
            bank_ac: "Bank A/c No.",
            ifsc: "IFSC Code",
            bank_name: "Name of Bank",
            branch: "Branch",
            dob: "Date of Birth",
            gender: "Gender",
            blood: "Blood Group",
            bpl: "BPL Card No.",
            religion: "Religion",
            category: "Category :",
            father_name: "Father’s Name",
            mother_name: "Mother’s Name",
            occupation: "Occupation",
            residential_address: "Residential Address",
            ph_no: "Ph. No.",
            bro_sis: "Brother’s / Sister’s in Jagadish Chandra High / Primary School",
            mother_tongue: "Mother Tongue :",
            declaration: "I have read the school rules and regulations laid down in the school diary and promise to abide by them.",
            date: "Date :",
            save_btn: "💾 Save Form Data (with Images)",
            load_btn: "📂 Load Saved Form",
            generate_btn: "Generate Print Format",
            print_btn: "🖨️ Print Now"
        },
        hindi: {
            school_name: "जगदीश चंद्र हाई / प्राइमरी स्कूल",
            ghatsila: "घाटशिला",
            student_record: "छात्र का व्यक्तिगत रिकॉर्ड",
            filled_by: "(माता-पिता / अभिभावक द्वारा भरा जाए)",
            block_letters: "(कृपया ब्लॉक अक्षरों में लिखें)",
            student_photo: "छात्र की फोटो",
            name: "नाम",
            class: "कक्षा",
            section: "अनुभाग",
            roll: "रोल नं.",
            adm_no: "प्रवेश नं.",
            aadhar: "आधार नं.",
            bank_ac: "बैंक खाता नं.",
            ifsc: "IFSC कोड",
            bank_name: "बैंक का नाम",
            branch: "शाखा",
            dob: "जन्म तिथि",
            gender: "लिंग",
            blood: "रक्त समूह",
            bpl: "बीपीएल कार्ड नं.",
            religion: "धर्म",
            category: "श्रेणी :",
            father_name: "पिता का नाम",
            mother_name: "माता का नाम",
            occupation: "व्यवसाय",
            residential_address: "निवास पता",
            ph_no: "फोन नं.",
            bro_sis: "जगदीश चंद्र हाई / प्राइमरी स्कूल में भाई/बहन",
            mother_tongue: "मातृभाषा :",
            declaration: "मैंने स्कूल डायरी में दिए गए नियम पढ़ लिए हैं और उनका पालन करने का वादा करता/करती हूं।",
            date: "तिथि :",
            save_btn: "💾 फॉर्म डेटा सहेजें (छवियों सहित)",
            load_btn: "📂 सहेजा गया फॉर्म लोड करें",
            generate_btn: "प्रिंट फॉर्मेट तैयार करें",
            print_btn: "🖨️ अब प्रिंट करें"
        },
        bengali: {
            school_name: "জগদীশ চন্দ্র হাই / প্রাইমারি স্কুল",
            ghatsila: "ঘাটশিলা",
            student_record: "ছাত্রের ব্যক্তিগত রেকর্ড",
            filled_by: "(পিতা-মাতা / অভিভাবক দ্বারা পূরণ করতে হবে)",
            block_letters: "(দয়া করে ব্লক অক্ষরে লিখুন)",
            student_photo: "ছাত্রের ছবি",
            name: "নাম",
            class: "শ্রেণী",
            section: "বিভাগ",
            roll: "রোল নং",
            adm_no: "ভর্তি নং",
            aadhar: "আধার নং",
            bank_ac: "ব্যাঙ্ক অ্যাকাউন্ট নং",
            ifsc: "আইএফএসসি কোড",
            bank_name: "ব্যাঙ্কের নাম",
            branch: "শাখা",
            dob: "জন্ম তারিখ",
            gender: "লিঙ্গ",
            blood: "রক্তের গ্রুপ",
            bpl: "বিপিএল কার্ড নং",
            religion: "ধর্ম",
            category: "শ্রেণী :",
            father_name: "পিতার নাম",
            mother_name: "মাতার নাম",
            occupation: "পেশা",
            residential_address: "বাসস্থানের ঠিকানা",
            ph_no: "ফোন নং",
            bro_sis: "জগদীশ চন্দ্র হাই / প্রাইমারি স্কুলে ভাই/বোন",
            mother_tongue: "মাতৃভাষা :",
            declaration: "আমি স্কুল ডায়েরিতে দেওয়া নিয়মাবলী পড়েছি এবং সেগুলি মেনে চলার প্রতিশ্রুতি দিচ্ছি।",
            date: "তারিখ :",
            save_btn: "💾 ফর্ম ডেটা সংরক্ষণ করুন (ছবি সহ)",
            load_btn: "📂 সংরক্ষিত ফর্ম লোড করুন",
            generate_btn: "প্রিন্ট ফরম্যাট তৈরি করুন",
            print_btn: "🖨️ এখন প্রিন্ট করুন"
        }
    };

    let currentLang = 'english';

    // Update all translatable texts
    function updateLanguage(lang) {
        currentLang = lang;
        $('.translatable').each(function() {
            const key = $(this).data('key');
            if (translations[lang] && translations[lang][key]) {
                $(this).html(translations[lang][key]);
            }
        });

        // Update buttons
        $('#saveBtn').html(translations[lang].save_btn);
        $('#loadBtn').html(translations[lang].load_btn);
        $('#generateBtn').html(translations[lang].generate_btn);
        $('#printBtn').html(translations[lang].print_btn);
    }

    // ====================== ORIGINAL LOGIC (UNCHANGED) ======================
    let studentImage = '';
    let fatherImage = '';
    let motherImage = '';
    let guardianImage = '';

    function triggerUpload(type) {
        document.getElementById(type + 'File').click();
    }

    function handleImageUpload(e, type) {
        const file = e.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function (ev) {
            const base64 = ev.target.result;
            if (type === 'student') {
                studentImage = base64;
                document.getElementById('studentPhotoBox').innerHTML = `<img src="${base64}" alt="Student Photo">`;
            } else if (type === 'father') {
                fatherImage = base64;
                document.getElementById('fatherPhotoBox').innerHTML = `<img src="${base64}" alt="Father Photo">`;
            } else if (type === 'mother') {
                motherImage = base64;
                document.getElementById('motherPhotoBox').innerHTML = `<img src="${base64}" alt="Mother Photo">`;
            } else if (type === 'guardian') {
                guardianImage = base64;
                document.getElementById('guardianPhotoBox').innerHTML = `<img src="${base64}" alt="Guardian Photo">`;
            }
        };
        reader.readAsDataURL(file);
    }

    function saveFormData() {
        const formData = {
            name: document.getElementById('name').value,
            class: document.getElementById('class').value,
            section: document.getElementById('section').value,
            roll: document.getElementById('roll').value,
            admNo: document.getElementById('admNo').value,
            aadhar: document.getElementById('aadhar').value,
            bankAc: document.getElementById('bankAc').value,
            ifsc: document.getElementById('ifsc').value,
            bankName: document.getElementById('bankName').value,
            branch: document.getElementById('branch').value,
            dob: document.getElementById('dob').value,
            gender: document.getElementById('gender').value,
            blood: document.getElementById('blood').value,
            bpl: document.getElementById('bpl').value,
            religion: document.getElementById('religion').value,
            st: document.getElementById('st').checked,
            sc: document.getElementById('sc').checked,
            obc: document.getElementById('obc').checked,
            gen: document.getElementById('gen').checked,
            fatherName: document.getElementById('fatherName').value,
            fatherOcc: document.getElementById('fatherOcc').value,
            motherName: document.getElementById('motherName').value,
            motherOcc: document.getElementById('motherOcc').value,
            address: document.getElementById('address').value,
            phone: document.getElementById('phone').value,
            sib1: document.getElementById('sib1').value,
            sib1Class: document.getElementById('sib1Class').value,
            sib1Sec: document.getElementById('sib1Sec').value,
            sib1Adm: document.getElementById('sib1Adm').value,
            sib2: document.getElementById('sib2').value,
            sib2Class: document.getElementById('sib2Class').value,
            sib2Sec: document.getElementById('sib2Sec').value,
            sib2Adm: document.getElementById('sib2Adm').value,
            motherTongue: document.getElementById('motherTongue').value,
            fatherSign: document.getElementById('fatherSign').value,
            motherSign: document.getElementById('motherSign').value,
            guardianSign: document.getElementById('guardianSign').value,
            date: document.getElementById('date').value,
            studentImage: studentImage,
            fatherImage: fatherImage,
            motherImage: motherImage,
            guardianImage: guardianImage
        };
        localStorage.setItem('jagadishChandraAdmissionForm', JSON.stringify(formData));
        alert('✅ Form data + all images saved successfully in your browser!');
    }

    function loadFormData() {
        const savedData = localStorage.getItem('jagadishChandraAdmissionForm');
        if (!savedData) {
            alert('No saved form found!');
            return;
        }
        const data = JSON.parse(savedData);
        document.getElementById('name').value = data.name || '';
        document.getElementById('class').value = data.class || '';
        document.getElementById('section').value = data.section || '';
        document.getElementById('roll').value = data.roll || '';
        document.getElementById('admNo').value = data.admNo || '';
        document.getElementById('aadhar').value = data.aadhar || '';
        document.getElementById('bankAc').value = data.bankAc || '';
        document.getElementById('ifsc').value = data.ifsc || '';
        document.getElementById('bankName').value = data.bankName || '';
        document.getElementById('branch').value = data.branch || '';
        document.getElementById('dob').value = data.dob || '';
        document.getElementById('gender').value = data.gender || '';
        document.getElementById('blood').value = data.blood || '';
        document.getElementById('bpl').value = data.bpl || '';
        document.getElementById('religion').value = data.religion || '';
        document.getElementById('fatherName').value = data.fatherName || '';
        document.getElementById('fatherOcc').value = data.fatherOcc || '';
        document.getElementById('motherName').value = data.motherName || '';
        document.getElementById('motherOcc').value = data.motherOcc || '';
        document.getElementById('address').value = data.address || '';
        document.getElementById('phone').value = data.phone || '';
        document.getElementById('sib1').value = data.sib1 || '';
        document.getElementById('sib1Class').value = data.sib1Class || '';
        document.getElementById('sib1Sec').value = data.sib1Sec || '';
        document.getElementById('sib1Adm').value = data.sib1Adm || '';
        document.getElementById('sib2').value = data.sib2 || '';
        document.getElementById('sib2Class').value = data.sib2Class || '';
        document.getElementById('sib2Sec').value = data.sib2Sec || '';
        document.getElementById('sib2Adm').value = data.sib2Adm || '';
        document.getElementById('motherTongue').value = data.motherTongue || '';
        document.getElementById('fatherSign').value = data.fatherSign || '';
        document.getElementById('motherSign').value = data.motherSign || '';
        document.getElementById('guardianSign').value = data.guardianSign || '';
        document.getElementById('date').value = data.date || '';

        document.getElementById('st').checked = data.st || false;
        document.getElementById('sc').checked = data.sc || false;
        document.getElementById('obc').checked = data.obc || false;
        document.getElementById('gen').checked = data.gen || false;

        if (data.studentImage) {
            studentImage = data.studentImage;
            document.getElementById('studentPhotoBox').innerHTML = `<img src="${data.studentImage}" alt="Student Photo">`;
        }
        if (data.fatherImage) {
            fatherImage = data.fatherImage;
            document.getElementById('fatherPhotoBox').innerHTML = `<img src="${data.fatherImage}" alt="Father Photo">`;
        }
        if (data.motherImage) {
            motherImage = data.motherImage;
            document.getElementById('motherPhotoBox').innerHTML = `<img src="${data.motherImage}" alt="Mother Photo">`;
        }
        if (data.guardianImage) {
            guardianImage = data.guardianImage;
            document.getElementById('guardianPhotoBox').innerHTML = `<img src="${data.guardianImage}" alt="Guardian Photo">`;
        }
        alert('✅ Saved form loaded successfully!');
    }

    function generatePrint() {
        document.getElementById('printName').innerText = document.getElementById('name').value || '________________';
        document.getElementById('printClass').innerText = document.getElementById('class').value || '___';
        document.getElementById('printSection').innerText = document.getElementById('section').value || '___';
        document.getElementById('printRoll').innerText = document.getElementById('roll').value || '___';
        document.getElementById('printAdm').innerText = document.getElementById('admNo').value || '________________';
        document.getElementById('printAadhar').innerText = document.getElementById('aadhar').value || '________________';
        document.getElementById('printBankAc').innerText = document.getElementById('bankAc').value || '________________';
        document.getElementById('printIfsc').innerText = document.getElementById('ifsc').value || '________________';
        document.getElementById('printBankName').innerText = document.getElementById('bankName').value || '________________';
        document.getElementById('printBranch').innerText = document.getElementById('branch').value || '________________';
        document.getElementById('printDob').innerText = document.getElementById('dob').value || '________________';
        document.getElementById('printGender').innerText = document.getElementById('gender').value || '___';
        document.getElementById('printBpl').innerText = document.getElementById('bpl').value || '________________';
        document.getElementById('printBlood').innerText = document.getElementById('blood').value || '___';
        document.getElementById('printReligion').innerText = document.getElementById('religion').value || '________________';

        let cat = [];
        if (document.getElementById('st').checked) cat.push('ST');
        if (document.getElementById('sc').checked) cat.push('SC');
        if (document.getElementById('obc').checked) cat.push('OBC');
        if (document.getElementById('gen').checked) cat.push('GEN');
        document.getElementById('printCategory').innerText = cat.join(' / ') || '________________';

        document.getElementById('printFather').innerText = document.getElementById('fatherName').value || '________________';
        document.getElementById('printFatherOcc').innerText = document.getElementById('fatherOcc').value || '________________';
        document.getElementById('printMother').innerText = document.getElementById('motherName').value || '________________';
        document.getElementById('printMotherOcc').innerText = document.getElementById('motherOcc').value || '________________';
        document.getElementById('printAddress').innerText = document.getElementById('address').value || '________________';
        document.getElementById('printPhone').innerText = document.getElementById('phone').value || '________________';

        document.getElementById('printSib1').innerText = document.getElementById('sib1').value || '________________';
        document.getElementById('printSib1Class').innerText = document.getElementById('sib1Class').value || '___';
        document.getElementById('printSib1Sec').innerText = document.getElementById('sib1Sec').value || '___';
        document.getElementById('printSib1Adm').innerText = document.getElementById('sib1Adm').value || '___';
        document.getElementById('printSib2').innerText = document.getElementById('sib2').value || '________________';
        document.getElementById('printSib2Class').innerText = document.getElementById('sib2Class').value || '___';
        document.getElementById('printSib2Sec').innerText = document.getElementById('sib2Sec').value || '___';
        document.getElementById('printSib2Adm').innerText = document.getElementById('sib2Adm').value || '___';

        document.getElementById('printMotherTongue').innerText = document.getElementById('motherTongue').value || '________________';
        document.getElementById('printDate').innerText = document.getElementById('date').value || '________________';
        document.getElementById('printFatherSign').innerText = document.getElementById('fatherSign').value || '________________';
        document.getElementById('printMotherSign').innerText = document.getElementById('motherSign').value || '________________';
        document.getElementById('printGuardianSign').innerText = document.getElementById('guardianSign').value || '________________';

        document.getElementById('printStudentPhoto').src = studentImage || '';
        document.getElementById('printFatherPhoto').src = fatherImage || '';
        document.getElementById('printMotherPhoto').src = motherImage || '';
        document.getElementById('printGuardianPhoto').src = guardianImage || '';

        document.getElementById('printArea').style.display = 'block';
        document.getElementById('printArea').scrollIntoView({ behavior: 'smooth' });

        // Update print area texts to current language
        updateLanguage(currentLang);

        alert('✅ Print format with images generated!\n\nClick "Print Now" or press Ctrl + P');
    }

    // ====================== LANGUAGE SWITCH (jQuery as provided by you) ======================
    $(document).ready(function() {
        // Set initial language
        var savedLang = localStorage.getItem('schoolLang') || 'english';
        currentLang = savedLang;
        $('body').addClass('lang-' + savedLang);
        $('.lang-btn').removeClass('active');
        $('.lang-btn[data-lang="' + savedLang + '"]').addClass('active');
        updateLanguage(savedLang);

        // Language button click
        $('.lang-btn').click(function() {
            var lang = $(this).data('lang');
            $('body').removeClass('lang-english lang-hindi lang-bengali').addClass('lang-' + lang);
            $('.lang-btn').removeClass('active');
            $(this).addClass('active');
            localStorage.setItem('schoolLang', lang);
            updateLanguage(lang);
        });

        // Auto-load saved form if exists
        const saved = localStorage.getItem('jagadishChandraAdmissionForm');
        if (saved) {
            if (confirm('A saved form was found. Load it now?')) {
                loadFormData();
            }
        }
    });
</script>
