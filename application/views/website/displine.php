<style>
       
        /* Animated Header */
        .header {
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

        .header::before {
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


        .header h1 {
            font-size: 42px;
            color:white;
            font-weight: 800;
            letter-spacing: -0.5px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            position: relative;
        }

        .header p {
            font-size: 18px;
            opacity: 0.9;
            margin-top: 10px;
        }

        /* Sub Header */
        .sub-header {
            text-align: center;
            padding: 25px;
            background: linear-gradient(135deg, #fffaf0 0%, #ffe4b5 100%);
            border-bottom: 5px solid #1a4a6f;
            position: relative;
            overflow: hidden;
        }

        .sub-header h2 {
            font-size: 32px;
            font-weight: 700;
            color: #1a4a6f;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        /* Main Container */
        .main-container {
            max-width: 1300px;
            margin: 40px auto;
            padding: 0 20px;
        }

        /* Info Cards */
        .info-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .info-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .info-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }

        .info-card i {
            font-size: 48px;
            color: #1a4a6f;
            margin-bottom: 15px;
        }

        .info-card h3 {
            font-size: 22px;
            font-weight: 700;
            color: #1a4a6f;
            margin-bottom: 10px;
        }

        .info-card p {
            font-size: 16px;
            color: #555;
            font-weight: 500;
        }

        .info-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, #ff6b35, #f7931e, #ffd700);
            transition: left 0.4s ease;
        }

        .info-card:hover::before {
            left: 0;
        }

        /* Schedule Table */
        .schedule-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0 30px;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .schedule-table th,
        .schedule-table td {
            padding: 15px 20px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        .schedule-table th {
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            color: white;
            font-weight: 600;
            font-size: 16px;
        }

        .schedule-table tr:hover {
            background: #f8f9fa;
        }

        /* Rules Section */
        .rules-section {
            background: white;
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin: 30px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .section-title h2 {
            font-size: 32px;
            font-weight: 800;
            background: linear-gradient(135deg, #1a4a6f, #ff6b35);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: inline-block;
            padding-bottom: 10px;
        }

        .rules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 20px;
        }

        .rule-card {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 18px;
            padding: 20px;
            transition: all 0.3s ease;
            border-left: 5px solid #1a4a6f;
            cursor: pointer;
        }

        .rule-card:hover {
            transform: translateX(8px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            border-left-color: #ff6b35;
        }

        .rule-number {
            display: inline-block;
            width: 35px;
            height: 35px;
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 35px;
            font-weight: 800;
            margin-bottom: 12px;
            font-size: 14px;
        }

        .rule-text {
            font-size: 14px;
            line-height: 1.6;
            color: #333;
        }

        /* Print Button */
        .print-btn-container {
            text-align: center;
            margin: 30px 0;
        }

        .print-btn {
            background: linear-gradient(135deg, #1a4a6f, #ff6b35);
            color: white;
            padding: 14px 42px;
            font-size: 18px;
            font-weight: 700;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .print-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
        }

        .print-btn i {
            margin-right: 10px;
        }

        /* Footer */
        .footer {
            text-align: center;
            padding: 30px;
            background: linear-gradient(135deg, #0f2b3d, #1a4a6f);
            color: white;
            margin-top: 50px;
        }

        /* Print Area */
        .print-area {
            display: none;
            padding: 30px;
            background: white;
            border: 12px solid #1a4a6f;
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

        /* Responsive */
        @media (max-width: 768px) {
            .header h1 { font-size: 24px; }
            .sub-header h2 { font-size: 22px; }
            .section-title h2 { font-size: 24px; }
            .rules-grid { grid-template-columns: 1fr; }
            .schedule-table th, .schedule-table td { padding: 10px; font-size: 12px; }
        }

        /* Animation on Scroll */
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

        .info-card, .rule-card, .schedule-table {
            animation: fadeInUp 0.6s ease forwards;
        }
    </style>
    <!-- Header -->
    <div class="header">
        <h1>🏫 JAGADISH CHANDRA HIGH / PRIMARY SCHOOL</h1>
        <p>GHATSILA | EST. 1927 | "SATYAMEVA JAYATE"</p>
    </div>

    <div class="sub-header">
        <h2>📖 SCHOOL RULES & REGULATIONS (Discipline)</h2>
    </div>

    <div class="main-container">
        <!-- Info Cards -->
        <div class="info-cards">
            <div class="info-card">
                <i class="fas fa-clock"></i>
                <h3>Visiting Hours</h3>
                <p>Headmistress: 11:00 AM - 12:00 Noon</p>
            </div>
            <div class="info-card">
                <i class="fas fa-calendar-week"></i>
                <h3>School Days</h3>
                <p>Monday to Saturday</p>
            </div>
            <div class="info-card">
                <i class="fas fa-percent"></i>
                <h3>Attendance Required</h3>
                <p>75% Mandatory Attendance</p>
            </div>
        </div>

        <!-- School Hours Table -->
        <h2 style="text-align:center; margin:30px 0 15px; color:#1a4a6f;">⏰ SCHOOL HOURS</h2>

        <table class="schedule-table">
            <thead>
                <tr><th>Day / Class</th>
                    <th>Timing</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Class I to IV</strong></td>
                    <td>9:00 AM - 2:00 PM</td>
                </tr>
                <tr>
                    <td><strong>Class V to X</strong></td>
                    <td>9:00 AM - 3:00 PM</td>
                </tr>
                <tr>
                    <td><strong>3rd Saturday</strong></td>
                    <td>Holiday (Government Rule)</td>
                </tr>
                <tr>
                    <td><strong>Last Working Day of Month</strong></td>
                    <td>Till 5th Period Only</td>
                </tr>
            </tbody>
        </table>

        <!-- Rules Section -->
        <div class="rules-section">
            <div class="section-title">
                <h2>⚖️ DISCIPLINE RULES ⚖️</h2>
            </div>

            <div class="rules-grid">
                <div class="rule-card">
                    <div class="rule-number">1</div>
                    <div class="rule-text">
                        Every student should carry his/her diary to school each day.
                    </div>
                </div>
                <div class="rule-card">
                    <div class="rule-number">2</div>
                    <div class="rule-text">
                        Students should arrive at school 5 minutes before the 1st bell rings in the morning.
                    </div>
                </div>
                <div class="rule-card">
                    <div class="rule-number">3</div>
                    <div class="rule-text">
                        Students should maintain personal hygiene and come to school clean and neatly dressed. Students who are shabbily dressed or not in uniform will be sent back home.
                    </div>
                </div>
                <div class="rule-card">
                    <div class="rule-number">4</div>
                    <div class="rule-text">
                        Boys should get their hair cut at regular intervals. Boys are not allowed to wear low-waist narrow pants.
                    </div>
                </div>
                <div class="rule-card">
                    <div class="rule-number">5</div>
                    <div class="rule-text">
                        No shouting, spitting or whistling is allowed in the school premises.
                    </div>
                </div>
                <div class="rule-card">
                    <div class="rule-number">6</div>
                    <div class="rule-text">
                        Care must be taken of all the school property. No writing on the desk/wall. No sitting on the grill in the auditorium or on the desk. Damage done even accidentally should be reported at once to the class teacher or headmistress. The charges will be borne by the person who is found responsible for the damage.
                    </div>
                </div>
                <div class="rule-card">
                    <div class="rule-number">7</div>
                    <div class="rule-text">
                        Students are not allowed to carry mobile phones, CDs or any electronic gadgets.
                    </div>
                </div>
            </div>
        </div>

        <!-- Print Button -->
        <div class="print-btn-container">
            <button class="print-btn" onclick="window.print()">
                <i class="fas fa-print"></i> Print School Rules
            </button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer">
        <p>© 2025 JAGADISH CHANDRA HIGH / PRIMARY SCHOOL, GHATSILA | All Rights Reserved</p>
        <p style="font-size: 12px; margin-top: 10px; opacity: 0.8;">
            "Discipline is the bridge between goals and accomplishment"
        </p>
    </div>

    <!-- Printable Version -->
    <div id="printArea" class="print-area">
        <div style="text-align:center; margin-bottom:20px;">
            <h1 style="color:#174873;">JAGADISH CHANDRA HIGH / PRIMARY SCHOOL, GHATSILA</h1>
            <h2>SCHOOL RULES FOR STUDENTS</h2>
        </div>
        
        <ol style="padding-left:20px; line-height:1.8;">
            <li>Every student should carry his/her diary to school each day.</li>
            <li>Students should arrive at school 5 minutes before the 1st bell rings in the morning.</li>
            <li>Students should maintain personal hygiene and come to school clean and neatly dressed. Students who are shabbily dressed or not in uniform will be sent back home.</li>
            <li>Boys should get their hair cut at regular intervals. Boys are not allowed to wear low-waist narrow pants.</li>
            <li>No shouting, spitting or whistling is allowed in the school premises.</li>
            <li>Care must be taken of all the school property. No writing on the desk/wall. No sitting on the grill in the auditorium or on the desk. Damage done even accidentally should be reported at once to the class teacher or headmistress. The charges will be borne by the person who is found responsible for the damage.</li>
            <li>Students are not allowed to carry mobile phones, CDs or any electronic gadgets.</li>
        </ol>

        <div style="text-align:center; margin-top:40px; font-size:14px;">
            JAGADISH CHANDRA HIGH / PRIMARY SCHOOL / 20
        </div>
    </div>

    <script>
        $(document).ready(function() {
            // Add smooth scrolling for better experience
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });
        });
    </script>
