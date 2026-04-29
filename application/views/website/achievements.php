
    <style>
       
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
            font-weight: 800;
            margin: 0 0 20px 0;
            color: #fff;
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

        /* Result Summary Cards */
        .summary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .summary-card {
            background: white;
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .summary-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 45px rgba(0,0,0,0.15);
        }

        .summary-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #1a4a6f, #ff6b35);
        }

        .summary-card i {
            font-size: 48px;
            color: #1a4a6f;
            margin-bottom: 15px;
        }

        .summary-number {
            font-size: 42px;
            font-weight: 800;
            color: #1a4a6f;
        }

        .summary-label {
            font-size: 14px;
            color: #666;
            margin-top: 8px;
            font-weight: 500;
        }

        /* Division Cards */
        .division-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .division-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            transition: all 0.3s ease;
        }

        .division-card:hover {
            transform: scale(1.02);
        }

        .division-card.first { border-bottom: 5px solid #ffd700; }
        .division-card.second { border-bottom: 5px solid #c0c0c0; }
        .division-card.third { border-bottom: 5px solid #cd7f32; }
        .division-card.marginal { border-bottom: 5px solid #ff6b6b; }

        .division-icon {
            font-size: 40px;
            margin-bottom: 10px;
        }

        .division-number {
            font-size: 48px;
            font-weight: 800;
        }

        .division-card.first .division-number { color: #ffd700; }
        .division-card.second .division-number { color: #c0c0c0; }
        .division-card.third .division-number { color: #cd7f32; }
        .division-card.marginal .division-number { color: #ff6b6b; }

        .division-label {
            font-size: 18px;
            font-weight: 600;
            color: #333;
        }

        /* Result Percentage Circle */
        .result-circle {
            background: white;
            border-radius: 25px;
            padding: 35px;
            text-align: center;
            margin-bottom: 50px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .circle-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .circle {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.02); }
        }

        .circle-percent {
            font-size: 52px;
            font-weight: 800;
        }

        .circle-label {
            font-size: 16px;
            opacity: 0.9;
        }

        /* Top Students Section */
        .top-students {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-bottom: 50px;
        }

        .top-header {
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .top-header h2 {
            font-size: 28px;
            font-weight: 700;
            color:white;
        }

        .top-header i {
            margin-right: 10px;
        }

        .rank-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
        }

        .rank-item {
            padding: 30px 20px;
            text-align: center;
            position: relative;
            transition: all 0.3s ease;
        }

        .rank-item:hover {
            background: #f8f9fa;
            transform: translateY(-5px);
        }

        .rank-item:not(:last-child) {
            border-right: 1px solid #e0e0e0;
        }

        .rank-badge {
            display: inline-block;
            width: 60px;
            height: 60px;
            line-height: 60px;
            border-radius: 50%;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .rank-1 { background: linear-gradient(135deg, #ffd700, #ffb347); color: #fff; box-shadow: 0 5px 15px rgba(255,215,0,0.3); }
        .rank-2 { background: linear-gradient(135deg, #c0c0c0, #a8a8a8); color: #fff; box-shadow: 0 5px 15px rgba(192,192,192,0.3); }
        .rank-3 { background: linear-gradient(135deg, #cd7f32, #b87333); color: #fff; box-shadow: 0 5px 15px rgba(205,127,50,0.3); }

        .student-name {
            font-size: 20px;
            font-weight: 700;
            color: #1a4a6f;
        }

        .student-marks {
            font-size: 28px;
            font-weight: 800;
            color: #333;
            margin: 10px 0;
        }

        .student-percent {
            font-size: 16px;
            color: #ff6b35;
            font-weight: 600;
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
            margin-top: 30px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .page-title h1 { font-size: 28px; }
            .rank-container { grid-template-columns: 1fr; }
            .rank-item:not(:last-child) { border-right: none; border-bottom: 1px solid #e0e0e0; }
            .summary-number { font-size: 32px; }
            .division-number { font-size: 36px; }
        }

        @media print {
            .print-btn-container, .footer, .page-title::before {
                display: none !important;
            }
            .page-title {
                background: #1a4a6f;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            .summary-card, .division-card, .result-circle, .top-students {
                box-shadow: none;
                border: 1px solid #ccc;
            }
        }
    </style>


    <!-- Page Title -->
    <div class="page-title">
        <div class="container">
            <h1>📊 JAC Annual Secondary Examination 2026</h1>
            <p>Jagadish Chandra High School, Ghatsila | सत्यमेव जयते</p>
        </div>
    </div>

    <div class="container">
        <!-- Summary Cards -->
        <div class="summary-grid">
            <div class="summary-card">
                <i class="fas fa-users"></i>
                <div class="summary-number">207</div>
                <div class="summary-label">Total Appeared Students</div>
            </div>
            <div class="summary-card">
                <i class="fas fa-trophy"></i>
                <div class="summary-number">205</div>
                <div class="summary-label">Total Passed Students</div>
            </div>
            <div class="summary-card">
                <i class="fas fa-chart-line"></i>
                <div class="summary-number">99.03%</div>
                <div class="summary-label">Overall Result Percentage</div>
            </div>
        </div>

        <!-- Division Cards -->
        <div class="division-grid">
            <div class="division-card first">
                <div class="division-icon">🥇</div>
                <div class="division-number">125</div>
                <div class="division-label">1st Division</div>
            </div>
            <div class="division-card second">
                <div class="division-icon">🥈</div>
                <div class="division-number">78</div>
                <div class="division-label">2nd Division</div>
            </div>
            <div class="division-card third">
                <div class="division-icon">🥉</div>
                <div class="division-number">2</div>
                <div class="division-label">3rd Division</div>
            </div>
            <div class="division-card marginal">
                <div class="division-icon">📝</div>
                <div class="division-number">2</div>
                <div class="division-label">Marginal</div>
            </div>
        </div>

        <!-- Result Percentage Circle -->
        <div class="result-circle">
            <div class="circle-container">
                <div class="circle">
                    <div class="circle-percent">99.03%</div>
                    <div class="circle-label">Success Rate</div>
                </div>
            </div>
            <p style="color: #555; font-size: 16px;">🎉 Outstanding Achievement! 🎉<br>Jagadish Chandra High School continues its legacy of excellence in education</p>
        </div>

        <!-- Top Three Students -->
        <div class="top-students">
            <div class="top-header">
                <h2><i class="fas fa-crown"></i> Top Three Performers</h2>
                <p>Secondary Board Examination 2026 - Merit List</p>
            </div>
            <div class="rank-container">
                <!-- Rank 1 -->
                <div class="rank-item">
                    <div class="rank-badge rank-1">🥇</div>
                    <div class="student-name">Antra Mandal</div>
                    <div class="student-marks">455 / 500</div>
                    <div class="student-percent">91.00%</div>
                    <p style="margin-top: 10px; font-size: 12px; color: #888;">🏆 School Topper</p>
                </div>
                <!-- Rank 2 -->
                <div class="rank-item">
                    <div class="rank-badge rank-2">🥈</div>
                    <div class="student-name">Sushmita Mahato</div>
                    <div class="student-marks">448 / 500</div>
                    <div class="student-percent">89.60%</div>
                    <p style="margin-top: 10px; font-size: 12px; color: #888;">🥈 Second Rank</p>
                </div>
                <!-- Rank 3 -->
                <div class="rank-item">
                    <div class="rank-badge rank-3">🥉</div>
                    <div class="student-name">Rohit Haldar</div>
                    <div class="student-marks">426 / 500</div>
                    <div class="student-percent">85.20%</div>
                    <p style="margin-top: 10px; font-size: 12px; color: #888;">🥉 Third Rank</p>
                </div>
            </div>
        </div>

        <!-- Print Button -->
        <div class="print-btn-container">
            <button class="print-btn" onclick="window.print()">
                <i class="fas fa-print"></i> Print Result
            </button>
        </div>
    </div>