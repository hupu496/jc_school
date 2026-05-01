
    <style>
       
        
      
        
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
            box-sizing: border-box;
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

        .section-title {
            background: #174873;
            color: white;
            padding: 8px 12px;
            margin: 20px 0 10px 0;
            font-weight: bold;
            font-size: 16px;
        }

        .inline-group {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        .inline-group > div {
            flex: 1;
        }
        .checkbox-group {
            display: flex;
            gap: 15px;
            align-items: center;
            flex-wrap: wrap;
        }
        .checkbox-group label {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            font-weight: normal;
            margin-bottom: 0;
        }
        .checkbox-group input {
            width: auto;
        }
    </style>
<!-- Form Header -->
<div class="header">
    <span class="translatable" data-key="school_name">JAGADISH CHANDRA HIGH SCHOOL, GHATSILA</span><br>
    <span class="translatable" data-key="district">DIST. - EAST SINGHBHUM, JHARKHAND</span>
</div>
<div class="sub-header">
    <span class="translatable" data-key="admission_form">ADMISSION FORM</span><br>
    <span class="translatable" data-key="block_letters">(PLEASE WRITE IN BLOCK LETTERS - ALL INFORMATION MUST BE FULLY ENTERED)</span>
</div>

<!-- Fillable Form -->
<div class="form-section no-print">
    <div style="display: flex; gap: 30px; align-items: flex-start; flex-wrap: wrap;">
        
        <!-- Left Column -->
        <div style="flex: 1; min-width: 300px;">
            <!-- Admission No and Date Row -->
            <div style="display: flex; gap: 20px; margin-bottom: 15px;">
                <div style="flex:1;"><label class="translatable" data-key="adm_no">Admission No.:</label><input type="text" id="admNo" placeholder="Admission Number"></div>
                <div style="flex:1;"><label class="translatable" data-key="date">Date:</label><input type="date" id="date"></div>
            </div>

            <div style="border: 2px solid #174873; padding: 15px; margin-bottom: 20px;">
                <h3 style="text-align:center; margin-top:0; color:#174873;" class="translatable" data-key="application_title"># APPLICATION FOR ADMISSION</h3>
                
                <!-- Row with Aadhar, Bank A/C, Photo -->
                <div style="display: flex; gap: 15px; align-items: flex-start; flex-wrap: wrap;">
                    <div style="flex:2;">
                        <div class="inline-group">
                            <div><label class="translatable" data-key="aadhar">Aadhar No.</label><input type="text" id="aadhar" placeholder="Aadhar Number"></div>
                            <div><label class="translatable" data-key="bank_ac">Bank A/C. No.</label><input type="text" id="bankAc" placeholder="Bank Account Number"></div>
                        </div>
                        <div class="inline-group" style="margin-top:10px;">
                            <div><label class="translatable" data-key="bank_name">Name of the Bank :</label><input type="text" id="bankName" placeholder="Bank Name"></div>
                            <div><label class="translatable" data-key="ifsc">IFSC Code.</label><input type="text" id="ifsc" placeholder="IFSC Code"></div>
                        </div>
                        <div style="margin-top:10px;">
                            <label class="translatable" data-key="branch">Name of the Branch :</label>
                            <input type="text" id="branch" placeholder="Branch Name">
                        </div>
                        <div style="margin-top:10px;">
                            <label class="translatable" data-key="bpl">B.P.L. No.</label>
                            <input type="text" id="bpl" placeholder="BPL Number">
                        </div>
                    </div>
                    <div style="flex:1; text-align:center;">
                        <div class="photo-box" id="studentPhotoBox" onclick="triggerUpload('student')">
                            Click to Upload Photo<br>(Passport Size)<br>
                            <span class="upload-text">JPG / PNG</span>
                            <input type="file" id="studentFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'student')">
                        </div>
                        <span class="translatable" data-key="passport_photo">Passport Size Photo</span>
                    </div>
                </div>
            </div>

            <!-- STUDENTS Section -->
            <div class="section-title"><span class="translatable" data-key="students_section">STUDENTS</span></div>
            
            <table>
                <tr><td style="width:40%;"><label class="translatable" data-key="full_name">1. Full Name :</label></td><td><input type="text" id="fullName" placeholder="Full Name in Block Letters"></td></tr>
                <tr><td><label class="translatable" data-key="sex">2. Sex :</label></td>
                    <td><input type="text" id="gender" placeholder="Male/Female"> &nbsp;&nbsp; <label class="translatable" data-key="blood_group">Blood Group :</label> <input type="text" id="blood" style="width:100px;" placeholder="B+ / O+ etc"></td></tr>
                <tr><td><label class="translatable" data-key="dob">3. Date of Birth :</label></td><td><input type="date" id="dob"></td></tr>
                <tr><td><label class="translatable" data-key="birth_certificate">4. Birth Certificate (Mention Source) :</label></td><td><input type="text" id="birthCertificate" placeholder="Birth Certificate No. / Source"></td></tr>
                <tr><td><label class="translatable" data-key="caste">5. Caste / Sub Caste :</label></td><td><input type="text" id="casteSubCaste" placeholder="e.g., ST - Santhal / SC - etc"></td></tr>
                <tr><td><label class="translatable" data-key="nationality">6. Nationality :</label></td><td><input type="text" id="nationality" placeholder="Indian / Others"></td></tr>
                <tr><td><label class="translatable" data-key="mother_tongue">7. Mother Tongue :</label></td><td><input type="text" id="motherTongue" placeholder="Mother Tongue"></td></tr>
                <tr><td><label class="translatable" data-key="language_home">Language spoken at home :</label></td><td><input type="text" id="homeLanguage" placeholder="Language spoken at home"></td></tr>
                <tr><td><label class="translatable" data-key="last_school">8. School Last Attended :</label></td><td><input type="text" id="lastSchool" placeholder="Previous School Name"></td></tr>
                <tr><td><label class="translatable" data-key="class">9. Class :</label></td><td><input type="text" id="lastClass" placeholder="Last Class Studied"></td></tr>
                <tr><td><label class="translatable" data-key="promoted_to">10. Promoted to :</label></td><td><input type="text" id="promotedTo" placeholder="Promoted to Class"></td></tr>
                <tr><td><label class="translatable" data-key="wanted_class">11. Class to which admission wanted :</label></td><td><input type="text" id="wantedClass" placeholder="Class Seeking Admission"></td></tr>
                <tr><td><label class="translatable" data-key="first_language">12. Subject offered as 1st Language :</label></td><td><input type="text" id="firstLanguage" placeholder="Bengali / Hindi / Santhali"></td></tr>
                <tr><td><label class="translatable" data-key="additional_subject">Additional Subject :</label></td><td><input type="text" id="additionalSubject" placeholder="Additional Subject (if any)"></td></tr>
            </table>

            <!-- PARENT/GUARDIAN Section -->
            <div class="section-title"><span class="translatable" data-key="parent_section">PARENT/GUARDIAN</span></div>
            
            <table>
                <tr><td style="width:40%;"><label class="translatable" data-key="father_name">1. Full Name of Father :</label></td><td><input type="text" id="fatherName"></td></tr>
                <tr><td><label class="translatable" data-key="father_education">2. Education Qualification :</label></td><td><input type="text" id="fatherEdu" placeholder="Father's Qualification"></td></tr>
                <tr><td><label class="translatable" data-key="father_occupation">3. Occupation :</label></td><td><input type="text" id="fatherOcc"></td></tr>
                <tr><td><label class="translatable" data-key="residential_address">4. Residential Address :</label></td><td><textarea id="address" rows="3" style="width:100%; resize:none;" placeholder="Full Residential Address"></textarea></td></tr>
                <tr><td><label class="translatable" data-key="mother_name">5. Full Name of Mother :</label></td><td><input type="text" id="motherName"></td></tr>
                <tr><td><label class="translatable" data-key="mother_education">6. Education Qualification :</label></td><td><input type="text" id="motherEdu" placeholder="Mother's Qualification"></td></tr>
                <tr><td><label class="translatable" data-key="siblings_section">7. Brother/Sister Studying at J.C. High School.</label></td>
                    <td>
                        <div style="margin-bottom:5px;"><span class="translatable" data-key="name">Name :</span> <input type="text" id="siblingName" placeholder="Sibling Name" style="width:60%;"> &nbsp; <span class="translatable" data-key="class">Class :</span> <input type="text" id="siblingClass" style="width:25%;" placeholder="Class"></div>
                        <div><span class="translatable" data-key="name_optional">Name (2nd) :</span> <input type="text" id="siblingName2" placeholder="Second Sibling" style="width:60%;"> &nbsp; <span class="translatable" data-key="class">Class :</span> <input type="text" id="siblingClass2" style="width:25%;" placeholder="Class"></div>
                    </td>
                </tr>
            </table>

            <!-- Declaration Section -->
            <div class="section-title"><span class="translatable" data-key="declaration_title">DECLARATION</span></div>
            <p class="translatable" data-key="declaration_text" style="font-style:italic; margin:10px 0;">I declare that the caste certificate and birth certificate is correct and I shall not ask for its alteration at any time.</p>
            
            <div style="display: flex; justify-content: space-between; margin-top: 20px; flex-wrap: wrap;">
                <div>
                    <label class="translatable" data-key="date_sign">Date :</label>
                    <input type="date" id="declarationDate" style="width:150px;">
                </div>
                <div style="text-align:right;">
                    <label class="translatable" data-key="signature">Signature of Parent/Guardian :</label>
                    <input type="text" id="guardianSign" placeholder="Full Signature" style="width:250px;">
                </div>
            </div>

            <!-- Photo Signatures Section -->
            <div style="display:flex; gap:20px; margin-top:25px; flex-wrap:wrap;">
                <div>
                    <div class="photo-box small" id="fatherPhotoBox" onclick="triggerUpload('father')">
                        Click to Upload<br>Father Photo
                        <input type="file" id="fatherFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'father')">
                    </div>
                    <p style="text-align:center; margin:5px 0;" class="translatable" data-key="father_photo">Father's Photo</p>
                </div>
                <div>
                    <div class="photo-box small" id="motherPhotoBox" onclick="triggerUpload('mother')">
                        Click to Upload<br>Mother Photo
                        <input type="file" id="motherFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'mother')">
                    </div>
                    <p style="text-align:center;" class="translatable" data-key="mother_photo">Mother's Photo</p>
                </div>
                <div>
                    <div class="photo-box small" id="guardianPhotoBox" onclick="triggerUpload('guardian')">
                        Click to Upload<br>Guardian Photo
                        <input type="file" id="guardianFile" accept="image/*" style="display:none;" onchange="handleImageUpload(event, 'guardian')">
                    </div>
                    <p style="text-align:center;" class="translatable" data-key="guardian_photo">Guardian's Photo</p>
                </div>
            </div>
        </div>
    </div>

    <div style="text-align:center; margin-top:30px;">
        <button class="btn" id="generateBtn" onclick="generatePrint()">Generate Print Format</button>
        <button class="btn" id="printBtn" onclick="window.print()" style="background:#0066cc;">🖨️ Print Now</button>
    </div>
</div>

<!-- PRINTABLE VERSION (matches new PDF structure) -->
<div id="printArea" class="print-area">
    <div style="border:8px solid #c8102e; padding:20px;">
        <div style="text-align:center;">
            <h1 style="margin:0; color:#c8102e;" class="translatable" data-key="school_name">JAGADISH CHANDRA HIGH SCHOOL, GHATSILA</h1>
            <h3 style="margin:5px 0;" class="translatable" data-key="district">DIST. - EAST SINGHBHUM, JHARKHAND</h3>
            <h2 style="margin:10px 0;" class="translatable" data-key="admission_form_print">ADMISSION FORM</h2>
        </div>

        <div style="display:flex; justify-content:space-between; margin-bottom:15px;">
            <div><strong class="translatable" data-key="adm_no">Admission No.:</strong> <span id="printAdmNo">___________</span></div>
            <div><strong class="translatable" data-key="date">Date:</strong> <span id="printDate">___________</span></div>
        </div>

        <div style="border:2px solid #000; padding:15px; margin-bottom:20px;">
            <div style="display:flex; flex-wrap:wrap; gap:15px;">
                <div style="flex:2;">
                    <div><strong class="translatable" data-key="aadhar">Aadhar No.:</strong> <span id="printAadhar">___________</span> &nbsp;&nbsp; <strong class="translatable" data-key="bank_ac">Bank A/C. No.:</strong> <span id="printBankAc">___________</span></div>
                    <div style="margin-top:8px;"><strong class="translatable" data-key="bank_name">Name of the Bank :</strong> <span id="printBankName">___________</span> &nbsp;&nbsp; <strong class="translatable" data-key="ifsc">IFSC Code.:</strong> <span id="printIfsc">___________</span></div>
                    <div style="margin-top:8px;"><strong class="translatable" data-key="branch">Name of the Branch :</strong> <span id="printBranch">___________</span></div>
                    <div style="margin-top:8px;"><strong class="translatable" data-key="bpl">B.P.L. No.:</strong> <span id="printBpl">___________</span></div>
                </div>
                <div style="flex:1; text-align:center;">
                    <img id="printStudentPhoto" style="width:120px; height:140px; object-fit:contain; border:2px solid #000;" alt="Student Photo">
                    <div><small class="translatable" data-key="passport_photo">Passport Size Photo</small></div>
                </div>
            </div>
        </div>

        <h4 style="background:#174873; color:white; padding:6px; margin:15px 0 10px 0;" class="translatable" data-key="students_section">STUDENTS</h4>
        <table style="width:100%; border:2px solid #000;">
            <tr><td style="width:40%;"><strong>1. Full Name :</strong></td><td><span id="printFullName">___________</span></td></tr>
            <tr><td><strong>2. Sex :</strong></td><td><span id="printGender">___________</span> &nbsp;&nbsp; <strong>Blood Group :</strong> <span id="printBlood">___________</span></td></tr>
            <tr><td><strong>3. Date of Birth :</strong></td><td><span id="printDob">___________</span></td></tr>
            <tr><td><strong>4. Birth Certificate (Source) :</strong></td><td><span id="printBirthCert">___________</span></td></tr>
            <tr><td><strong>5. Caste / Sub Caste :</strong></td><td><span id="printCaste">___________</span></td></tr>
            <tr><td><strong>6. Nationality :</strong></td><td><span id="printNationality">___________</span></td></tr>
            <tr><td><strong>7. Mother Tongue :</strong></td><td><span id="printMotherTongue">___________</span></td></tr>
            <tr><td><strong>Language spoken at home :</strong></td><td><span id="printHomeLang">___________</span></td></tr>
            <tr><td><strong>8. School Last Attended :</strong></td><td><span id="printLastSchool">___________</span></td></tr>
            <tr><td><strong>9. Class :</strong></td><td><span id="printLastClass">___________</span></td></tr>
            <tr><td><strong>10. Promoted to :</strong></td><td><span id="printPromotedTo">___________</span></td></tr>
            <tr><td><strong>11. Class wanted :</strong></td><td><span id="printWantedClass">___________</span></td></tr>
            <tr><td><strong>12. 1st Language :</strong></td><td><span id="printFirstLang">___________</span></td></tr>
            <tr><td><strong>Additional Subject :</strong></td><td><span id="printAddSub">___________</span></td></tr>
        </table>

        <h4 style="background:#174873; color:white; padding:6px; margin:15px 0 10px 0;" class="translatable" data-key="parent_section">PARENT/GUARDIAN</h4>
        <table style="width:100%; border:2px solid #000;">
            <tr><td style="width:40%;"><strong>1. Full Name of Father :</strong></td><td><span id="printFatherName">___________</span></td></tr>
            <tr><td><strong>2. Education Qualification :</strong></td><td><span id="printFatherEdu">___________</span></td></tr>
            <tr><td><strong>3. Occupation :</strong></td><td><span id="printFatherOcc">___________</span></td></tr>
            <tr><td><strong>4. Residential Address :</strong></td><td><span id="printAddress">___________</span></td></tr>
            <tr><td><strong>5. Full Name of Mother :</strong></td><td><span id="printMotherName">___________</span></td></tr>
            <tr><td><strong>6. Education Qualification :</strong></td><td><span id="printMotherEdu">___________</span></td></tr>
            <tr><td><strong>7. Brother/Sister at J.C. High School :</strong></td><td><span id="printSibling">___________</span> (Class: <span id="printSiblingClass">___</span>) &nbsp; <span id="printSibling2">___________</span> (Class: <span id="printSiblingClass2">___</span>)</td></tr>
        </table>

        <p style="margin:20px 0; font-style:italic;" class="translatable" data-key="declaration_text">I declare that the caste certificate and birth certificate is correct and I shall not ask for its alteration at any time.</p>
        
        <div style="display:flex; justify-content:space-between; margin-top:20px;">
            <div><strong class="translatable" data-key="date_sign">Date :</strong> <span id="printDeclDate">___________</span></div>
            <div><strong class="translatable" data-key="signature">Signature of Parent/Guardian :</strong> <span id="printGuardianSign">___________</span></div>
        </div>

        <!-- Photos at bottom for print -->
        <div style="display:flex; justify-content:space-around; margin-top:30px;">
            <div style="text-align:center;"><img id="printFatherPhoto" style="width:100px; height:100px; border:1px solid #000;" alt="Father Photo"><br>Father's Photo</div>
            <div style="text-align:center;"><img id="printMotherPhoto" style="width:100px; height:100px; border:1px solid #000;" alt="Mother Photo"><br>Mother's Photo</div>
            <div style="text-align:center;"><img id="printGuardianPhoto" style="width:100px; height:100px; border:1px solid #000;" alt="Guardian Photo"><br>Guardian's Photo</div>
        </div>
    </div>
</div>

<script>
    // ====================== TRANSLATIONS (Fully extended for new fields) ======================
    const translations = {
        english: {
            school_name: "JAGADISH CHANDRA HIGH SCHOOL, GHATSILA",
            district: "DIST. - EAST SINGHBHUM, JHARKHAND",
            admission_form: "ADMISSION FORM",
            block_letters: "(PLEASE WRITE IN BLOCK LETTERS - ALL INFORMATION MUST BE FULLY ENTERED)",
            adm_no: "Admission No.:",
            date: "Date:",
            application_title: "# APPLICATION FOR ADMISSION",
            aadhar: "Aadhar No.",
            bank_ac: "Bank A/C. No.",
            bank_name: "Name of the Bank :",
            ifsc: "IFSC Code.",
            branch: "Name of the Branch :",
            bpl: "B.P.L. No.",
            passport_photo: "Passport Size Photo",
            students_section: "STUDENTS",
            full_name: "1. Full Name :",
            sex: "2. Sex :",
            blood_group: "Blood Group :",
            dob: "3. Date of Birth :",
            birth_certificate: "4. Birth Certificate (Mention Source) :",
            caste: "5. Caste / Sub Caste :",
            nationality: "6. Nationality :",
            mother_tongue: "7. Mother Tongue :",
            language_home: "Language spoken at home :",
            last_school: "8. School Last Attended :",
            class: "9. Class :",
            promoted_to: "10. Promoted to :",
            wanted_class: "11. Class to which admission wanted :",
            first_language: "12. Subject offered as 1st Language :",
            additional_subject: "Additional Subject :",
            parent_section: "PARENT/GUARDIAN",
            father_name: "1. Full Name of Father :",
            father_education: "2. Education Qualification :",
            father_occupation: "3. Occupation :",
            residential_address: "4. Residential Address :",
            mother_name: "5. Full Name of Mother :",
            mother_education: "6. Education Qualification :",
            siblings_section: "7. Brother/Sister Studying at J.C. High School.",
            name: "Name :",
            name_optional: "Name (2nd) :",
            declaration_title: "DECLARATION",
            declaration_text: "I declare that the caste certificate and birth certificate is correct and I shall not ask for its alteration at any time.",
            date_sign: "Date :",
            signature: "Signature of Parent/Guardian :",
            father_photo: "Father's Photo",
            mother_photo: "Mother's Photo",
            guardian_photo: "Guardian's Photo",
            admission_form_print: "ADMISSION FORM"
        },
        hindi: {
            school_name: "जगदीश चंद्र हाई स्कूल, घाटशिला",
            district: "जिला - पूर्वी सिंहभूम, झारखंड",
            admission_form: "प्रवेश फॉर्म",
            block_letters: "(कृपया ब्लॉक अक्षरों में लिखें - सभी जानकारी पूरी भरें)",
            adm_no: "प्रवेश संख्या:",
            date: "तिथि:",
            application_title: "# प्रवेश हेतु आवेदन",
            aadhar: "आधार संख्या",
            bank_ac: "बैंक खाता संख्या",
            bank_name: "बैंक का नाम :",
            ifsc: "आईएफएससी कोड",
            branch: "शाखा का नाम :",
            bpl: "बीपीएल संख्या",
            passport_photo: "पासपोर्ट साइज़ फोटो",
            students_section: "छात्र",
            full_name: "1. पूरा नाम :",
            sex: "2. लिंग :",
            blood_group: "रक्त समूह :",
            dob: "3. जन्म तिथि :",
            birth_certificate: "4. जन्म प्रमाण पत्र (स्रोत) :",
            caste: "5. जाति / उपजाति :",
            nationality: "6. राष्ट्रीयता :",
            mother_tongue: "7. मातृभाषा :",
            language_home: "घर पर बोली जाने वाली भाषा :",
            last_school: "8. अंतिम विद्यालय :",
            class: "9. कक्षा :",
            promoted_to: "10. पदोन्नत कक्षा :",
            wanted_class: "11. प्रवेश हेतु इच्छित कक्षा :",
            first_language: "12. प्रथम भाषा विषय :",
            additional_subject: "अतिरिक्त विषय :",
            parent_section: "माता-पिता/अभिभावक",
            father_name: "1. पिता का पूरा नाम :",
            father_education: "2. शैक्षणिक योग्यता :",
            father_occupation: "3. व्यवसाय :",
            residential_address: "4. निवास पता :",
            mother_name: "5. माता का पूरा नाम :",
            mother_education: "6. शैक्षणिक योग्यता :",
            siblings_section: "7. जे.सी. हाई स्कूल में भाई/बहन",
            name: "नाम :",
            name_optional: "दूसरा नाम :",
            declaration_title: "घोषणा",
            declaration_text: "मैं घोषणा करता हूं कि जाति प्रमाण पत्र और जन्म प्रमाण पत्र सही है और मैं कभी भी इसके संशोधन का अनुरोध नहीं करूंगा।",
            date_sign: "तिथि :",
            signature: "अभिभावक के हस्ताक्षर :",
            father_photo: "पिता का फोटो",
            mother_photo: "माता का फोटो",
            guardian_photo: "अभिभावक का फोटो",
            admission_form_print: "प्रवेश फॉर्म"
        },
        bengali: {
            school_name: "জগদীশ চন্দ্র হাই স্কুল, ঘটশিলা",
            district: "জেলা - পূর্ব সিংভূম, ঝাড়খণ্ড",
            admission_form: "ভর্তি ফর্ম",
            block_letters: "(দয়া করে ব্লক অক্ষরে লিখুন - সমস্ত তথ্য সম্পূর্ণ পূরণ করুন)",
            adm_no: "ভর্তি নম্বর:",
            date: "তারিখ:",
            application_title: "# ভর্তির আবেদন",
            aadhar: "আধার নম্বর",
            bank_ac: "ব্যাঙ্ক অ্যাকাউন্ট নম্বর",
            bank_name: "ব্যাঙ্কের নাম :",
            ifsc: "আইএফএসসি কোড",
            branch: "শাখার নাম :",
            bpl: "বিপিএল নম্বর",
            passport_photo: "পাসপোর্ট সাইজের ছবি",
            students_section: "ছাত্র",
            full_name: "1. সম্পূর্ণ নাম :",
            sex: "2. লিঙ্গ :",
            blood_group: "রক্তের গ্রুপ :",
            dob: "3. জন্ম তারিখ :",
            birth_certificate: "4. জন্ম সনদ (সূত্র) :",
            caste: "5. বর্ণ / উপবর্ণ :",
            nationality: "6. জাতীয়তা :",
            mother_tongue: "7. মাতৃভাষা :",
            language_home: "বাড়িতে কথ্য ভাষা :",
            last_school: "8. শেষ বিদ্যালয় :",
            class: "9. শ্রেণী :",
            promoted_to: "10. উত্তীর্ণ শ্রেণী :",
            wanted_class: "11. ভর্তি ইচ্ছুক শ্রেণী :",
            first_language: "12. প্রথম ভাষার বিষয় :",
            additional_subject: "অতিরিক্ত বিষয় :",
            parent_section: "পিতা-মাতা/অভিভাবক",
            father_name: "1. পিতার সম্পূর্ণ নাম :",
            father_education: "2. শিক্ষাগত যোগ্যতা :",
            father_occupation: "3. পেশা :",
            residential_address: "4. বাসস্থানের ঠিকানা :",
            mother_name: "5. মাতার সম্পূর্ণ নাম :",
            mother_education: "6. শিক্ষাগত যোগ্যতা :",
            siblings_section: "7. জে.সি. হাই স্কুলে ভাই/বোন",
            name: "নাম :",
            name_optional: "দ্বিতীয় নাম :",
            declaration_title: "ঘোষণা",
            declaration_text: "আমি ঘোষণা করছি যে জাতি সনদ এবং জন্ম সনদ সঠিক এবং আমি এর কোনো সংশোধন চাইব না।",
            date_sign: "তারিখ :",
            signature: "অভিভাবকের স্বাক্ষর :",
            father_photo: "পিতার ছবি",
            mother_photo: "মাতার ছবি",
            guardian_photo: "অভিভাবকের ছবি",
            admission_form_print: "ভর্তি ফর্ম"
        }
    };

    let currentLang = 'english';
    let studentImage = '', fatherImage = '', motherImage = '', guardianImage = '';

    function updateLanguage(lang) {
        currentLang = lang;
        $('.translatable').each(function() {
            const key = $(this).data('key');
            if (translations[lang] && translations[lang][key]) {
                $(this).html(translations[lang][key]);
            }
        });
    }

    function triggerUpload(type) { document.getElementById(type + 'File').click(); }
    function handleImageUpload(e, type) {
        const file = e.target.files[0];
        if (!file) return;
        const reader = new FileReader();
        reader.onload = function(ev) {
            const base64 = ev.target.result;
            if (type === 'student') { studentImage = base64; document.getElementById('studentPhotoBox').innerHTML = `<img src="${base64}" alt="Student Photo">`; }
            else if (type === 'father') { fatherImage = base64; document.getElementById('fatherPhotoBox').innerHTML = `<img src="${base64}" alt="Father Photo">`; }
            else if (type === 'mother') { motherImage = base64; document.getElementById('motherPhotoBox').innerHTML = `<img src="${base64}" alt="Mother Photo">`; }
            else if (type === 'guardian') { guardianImage = base64; document.getElementById('guardianPhotoBox').innerHTML = `<img src="${base64}" alt="Guardian Photo">`; }
        };
        reader.readAsDataURL(file);
    }

    function generatePrint() {
        const fields = {
            admNo: document.getElementById('admNo').value, date: document.getElementById('date').value,
            aadhar: document.getElementById('aadhar').value, bankAc: document.getElementById('bankAc').value,
            bankName: document.getElementById('bankName').value, ifsc: document.getElementById('ifsc').value,
            branch: document.getElementById('branch').value, bpl: document.getElementById('bpl').value,
            fullName: document.getElementById('fullName').value, gender: document.getElementById('gender').value,
            blood: document.getElementById('blood').value, dob: document.getElementById('dob').value,
            birthCert: document.getElementById('birthCertificate').value, caste: document.getElementById('casteSubCaste').value,
            nationality: document.getElementById('nationality').value, motherTongue: document.getElementById('motherTongue').value,
            homeLang: document.getElementById('homeLanguage').value, lastSchool: document.getElementById('lastSchool').value,
            lastClass: document.getElementById('lastClass').value, promotedTo: document.getElementById('promotedTo').value,
            wantedClass: document.getElementById('wantedClass').value, firstLang: document.getElementById('firstLanguage').value,
            addSub: document.getElementById('additionalSubject').value, fatherName: document.getElementById('fatherName').value,
            fatherEdu: document.getElementById('fatherEdu').value, fatherOcc: document.getElementById('fatherOcc').value,
            address: document.getElementById('address').value, motherName: document.getElementById('motherName').value,
            motherEdu: document.getElementById('motherEdu').value, siblingName: document.getElementById('siblingName').value,
            siblingClass: document.getElementById('siblingClass').value, siblingName2: document.getElementById('siblingName2').value,
            siblingClass2: document.getElementById('siblingClass2').value, declDate: document.getElementById('declarationDate').value,
            guardianSign: document.getElementById('guardianSign').value
        };
        for (let k in fields) document.getElementById('print' + k.charAt(0).toUpperCase() + k.slice(1)).innerText = fields[k] || '___________';
        document.getElementById('printStudentPhoto').src = studentImage || '';
        document.getElementById('printFatherPhoto').src = fatherImage || '';
        document.getElementById('printMotherPhoto').src = motherImage || '';
        document.getElementById('printGuardianPhoto').src = guardianImage || '';
        document.getElementById('printArea').style.display = 'block';
        document.getElementById('printArea').scrollIntoView({ behavior: 'smooth' });
        updateLanguage(currentLang);
        alert('✅ Print format ready! Click "Print Now" or press Ctrl+P');
    }

    $(document).ready(function() {
        var savedLang = localStorage.getItem('schoolLang') || 'english';
        currentLang = savedLang;
        updateLanguage(savedLang);
        // Language switcher - using existing lang buttons from original site
        $('.lang-btn').click(function() {
            var lang = $(this).data('lang');
            localStorage.setItem('schoolLang', lang);
            updateLanguage(lang);
        });
    });
</script>