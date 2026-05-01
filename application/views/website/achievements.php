
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
            font-size: 53px;
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
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    height: 100px;
    border-radius: 100%;
    overflow: hidden;
    margin: 0 auto 49px auto;
    background: transparent;
}

.rank-badge img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
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
        /* autotrium */
          /* Facility Main Card Style — Rectangle with image + details */
        .facility-hero {
            background: #ffffff;
            border-radius: 2rem;
            overflow: hidden;
            box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.2);
            margin-bottom: 3rem;
            transition: transform 0.3s ease, box-shadow 0.3s;
            border: 1px solid rgba(46, 87, 62, 0.15);
        }
        .facility-hero:hover {
            transform: translateY(-6px);
            box-shadow: 0 32px 56px -16px rgba(0, 32, 64, 0.25);
        }
        .facility-img-col {
            background: #eef3fc;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            min-height: 380px;
            overflow: hidden;
        }
        .facility-img-col img {
            width: 100%;
            height: auto;
            max-height: 380px;
            object-fit: cover;
            border-radius: 1.5rem;
            box-shadow: 0 12px 28px rgba(0,0,0,0.1);
            transition: transform 0.5s ease;
        }
        .facility-img-col img:hover {
            transform: scale(1.02);
        }
        .facility-details {
            padding: 2rem 2rem 2rem 1.8rem;
            background: white;
        }
        .facility-details h2 {
            font-size: 2.45rem;
            font-weight: 800;
            background: linear-gradient(125deg, #1f3b2c, #2a7a4b);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            margin-bottom: 1.5rem;
            border-left: 5px solid #2c7a47;
            padding-left: 20px;
        }
        .facility-details p {
            color: #2d3e3a;
            line-height: 1.6;
            font-size: 1.45rem;
            margin-bottom: 1.6rem;
        }
        .highlight-list {
            list-style: none;
            padding-left: 0;
            margin-top: 1rem;
        }
        .highlight-list li {
            margin-bottom: 0.9rem;
           
            align-items: flex-start;
            gap: 12px;
            font-size: 1.45rem;
            color: #1f2937;
        }
        .highlight-list li i {
            color: #2c7a47;
            font-size: 1.4rem;
            margin-top: 3px;
            width: 24px;
        }
        /* ========== SCIENCE LAB SECTION - THREE COLUMN CARD STYLE ========== */
        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 800;
            background: linear-gradient(125deg, #1f3b2c, #2a7a4b);
            background-clip: text;
            -webkit-background-clip: text;
            color: transparent;
            display: inline-block;
        }
        .section-title .subtitle {
            font-size: 1rem;
            color: #5b6e5c;
            margin-top: 8px;
        }
        .lab-card {
            background: white;
            border-radius: 1.5rem;
            overflow: hidden;
            transition: all 0.35s ease;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05), 0 8px 10px -6px rgba(0, 0, 0, 0.02);
            border: 1px solid rgba(0,0,0,0.05);
            height: 100%;
        }
        .lab-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 35px -12px rgba(34, 85, 51, 0.25);
            border-color: #c8e0cf;
        }
        .lab-img {
            background: #eef3fc;
            padding: 1.8rem 1rem;
            text-align: center;
            border-bottom: 1px solid #eef2f0;
        }
        .lab-img i {
            font-size: 3.5rem;
            color: #2c7a47;
            transition: transform 0.3s;
        }
        .lab-card:hover .lab-img i {
            transform: scale(1.1);
        }
        .lab-card-body {
            padding: 1.5rem;
        }
        .lab-card-body h4 {
            font-weight: 700;
            color: #1a3a2a;
            margin-bottom: 0.8rem;
            font-size: 1.5rem;
        }
        .lab-card-body p {
            color: #4a5b52;
            font-size: 0.95rem;
            line-height: 1.5;
        }
        .lab-features {
            margin-top: 1rem;
            list-style: none;
            padding-left: 0;
        }
        .lab-features li {
            font-size: 0.85rem;
            padding: 5px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #2c4b36;
        }
        .lab-features li i {
            color: #2c7a47;
            width: 22px;
            font-size: 0.9rem;
        }
        /* Annex card minimal style */
        .annex-glow {
            background: linear-gradient(135deg, #fef9e6, #ffffff);
            border-radius: 2rem;
            padding: 2rem;
            box-shadow: 0 20px 35px -12px rgba(0,0,0,0.08);
            border: 1px solid #f0e8cf;
        }
        .btn-outline-facility {
            border-radius: 60px;
            border: 1px solid #2c7a47;
            background: transparent;
            color: #2c7a47;
            padding: 0.4rem 1.4rem;
            font-weight: 500;
            transition: 0.2s;
        }
        .btn-outline-facility:hover {
            background: #2c7a47;
            color: white;
        }
        @media (max-width: 768px) {
            .page-title h1 { font-size: 2rem; }
            .facility-details h2 { font-size: 1.7rem; }
            .section-title h2 { font-size: 1.8rem; }
        }
      

        /* Subtle background wave */
        .bg-wave {
            position: relative;
        }
    
    </style>
 <?php if(isset($role) && $role == 'board_result'): ?>

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
                    <div class="circle-label">Pass Percentage</div>
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
                    <div class="rank-badge rank-1"><img src="<?php echo base_url('assets/images/antra_mandal.jpeg'); ?>" alt="" ></div>
                    <div class="student-name">Antra Mandal</div>
                    <div class="student-marks">455 / 500</div>
                    <div class="student-percent">91.00%</div>
                    <p style="margin-top: 10px; font-size: 12px; color: #888;">🏆 School Topper</p>
                </div>
                <!-- Rank 2 -->
                <div class="rank-item">
                    <div class="rank-badge rank-2"><img src="<?php echo base_url('assets/images/sushmita.jpeg'); ?>" alt="" ></div>
                    <div class="student-name">Sushmita Mahato</div>
                    <div class="student-marks">448 / 500</div>
                    <div class="student-percent">89.60%</div>
                    <p style="margin-top: 10px; font-size: 12px; color: #888;">🥈 Second Rank</p>
                </div>
                <!-- Rank 3 -->
                <div class="rank-item">
                    <div class="rank-badge rank-3"><img src="<?php echo base_url('assets/images/Rohit_haldar.jpeg'); ?>" alt="" ></div>
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

  <?php endif; ?>

    <!-- ======================== SCIENCE LAB SECTION ======================== -->
    <?php if($role == 'Science' || $role == 'Auditorium' || $role == 'Annex'): ?>

    <!-- autotiuriujm -->
     <div class="page-title">
    <div class="particles" id="particlesContainer"></div>
    <div class="container">
        <h1>
            <i class="fas fa-microphone-alt me-2"></i> 
            <?php 
                // Dynamic title based on role
                if(isset($role) && $role == 'Auditorium') echo "Asha Auditorium";
                elseif(isset($role) && $role == 'Science Lab') echo "Science & Innovation Hub";
                elseif(isset($role) && $role == 'Annex') echo "Plus 2 Annex – Higher Secondary Wing";
                else echo "Our Milestones & Facilities";
            ?>
        </h1>
        <p>Excellence in infrastructure, empowering young minds for tomorrow</p>
        <div class="breadcrumb-custom">
           
        </div>
    </div>
</div>

<div class="container bg-wave" style="margin-bottom: 80px;">
    <!-- ======================== AUDITORIUM SECTION ======================== -->
    <?php if(isset($role) && $role == 'Auditorium'): ?>
    <div class="facility-hero row g-0 align-items-stretch">
        <div class="col-md-6 facility-img-col">
            <!-- Rectangle Image (representative + attractive) -->
            <img src="<?php echo base_url('assets/images/auditorium.jpeg'); ?>" 
                 alt="Asha Auditorium JC High School" 
                 class="img-fluid rounded-4 shadow-lg"
                 onerror="this.src='https://placehold.co/800x500/2c5a3a/white?text=Modern+Auditorium'">
        </div>
        <div class="col-md-6 facility-details">
            <h2><i class="fas fa-landmark me-2" style="color: #2c7a47;"></i> Asha Auditorium</h2>
            <p>Asha Auditorium is a modern event and multipurpose hall located on the campus of Jagdish Chandra (JC) High School in Ghatsila, Jharkhand. This state-of-the-art venue represents the spirit of community and academic excellence.</p>
            <ul class="highlight-list">
                <li><i class="fas fa-calendar-alt"></i> <strong>Establishment:</strong> Built through generous sponsorship of <strong>J.P. Sarkar</strong>, US-based NRI and former student of JC High School.</li>
                <li><i class="fas fa-chalkboard-user"></i> <strong>Usage:</strong> Hosts annual functions, cultural festivals, seminars, workshops, and extracurricular activities.</li>
                <li><i class="fas fa-microphone"></i> <strong>Capacity & Features:</strong> Sound-proof acoustics, digital lighting, green rooms, and wheelchair accessible.</li>
                <li><i class="fas fa-award"></i> <strong>Legacy:</strong> A place where students showcase talent and alumni reconnect with alma mater.</li>
            </ul>
            <div class="mt-3">
                <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill"><i class="fas fa-building"></i> 500+ seats</span>
                <span class="badge bg-light text-dark ms-2 px-3 py-2 rounded-pill"><i class="fas fa-video"></i> AV equipped</span>
            </div>
        </div>
    </div>
    <!-- Additional beautiful description cards (rectangle style) -->
   
    <?php endif; ?>

    <!-- ======================== SCIENCE LAB SECTION ======================== -->
    <?php if(isset($role) && $role == 'Science'): ?>
    <div class="facility-hero row g-0 align-items-stretch">
        <div class="col-md-6 facility-img-col">
            <img src="<?php echo base_url('assets/images/science_lab2.jpeg'); ?>" 
                 alt="Science Laboratory JC High School"
                 class="img-fluid rounded-4 shadow-lg">
        </div>
        <div class="col-md-6 facility-details">
            <h2><i class="fas fa-flask me-2"></i> Science Lab Complex</h2>
            <p>A well-equipped Science Laboratory at J C High School, set up in association with <strong>TSRDS</strong>, provides students with hands-on experience in physics, chemistry, and biology. These labs bridge the gap between theory and practical application, fostering critical thinking and scientific inquiry.</p>
            
            <div class="lab-grid mt-3">
                <div class="lab-badge">
                    <strong><i class="fas fa-atom"></i> Physics Lab</strong>
                    <p>Optical benches, spectrometers, multimeters, mechanics pendulums, electricity setups.</p>
                </div>
                <div class="lab-badge">
                    <strong><i class="fas fa-vial"></i> Chemistry Lab</strong>
                    <p>Fume hoods, analytical balances, titration kits, safety gear for chemical reactions.</p>
                </div>
                <div class="lab-badge">
                    <strong><i class="fas fa-microscope"></i> Biology Lab</strong>
                    <p>Compound microscopes, preserved specimens, slides for cellular & botany studies.</p>
                </div>
            </div>
            <div class="mt-3 pt-2">
                <i class="fas fa-chalkboard-user text-success me-1"></i> <strong>Pedagogy focus:</strong> Regular lab sessions, science exhibitions, and experiential learning projects.
            </div>
        </div>
    </div>
  
    <?php endif; ?>

    <!-- ======================== ANNEX (PLUS 2) SECTION ======================== -->
    <?php if(isset($role) && $role == 'Annex'): ?>
    <div class="facility-hero row g-0 align-items-stretch">
        <div class="col-md-6 facility-img-col">
            <img src="<?php echo base_url('assets/images/annex2.jpeg'); ?>" 
                 alt="Plus 2 Annex Building JC High School"
                 class="img-fluid rounded-4 shadow-lg">
        </div>
        <div class="col-md-6 facility-details">
            <h2><i class="fas fa-school-circle-check me-2"></i> Plus 2 Annex – Higher Secondary Wing</h2>
            <p>A dedicated four-classroom higher secondary wing for grades 11 and 12 is built within the school campus in association with the <strong>Lily Foundation</strong>, adhering to JAC specification. This extension offers seamless transition from secondary to senior secondary education.</p>
            <div class="annex-quote mt-3">
                <i class="fas fa-quote-left text-success me-2"></i> State-of-the-art class rooms with smart boards, library corner, and career counseling zone.
            </div>
            <ul class="highlight-list mt-4">
                <li><i class="fas fa-chalkboard"></i><strong>Smart classrooms:</strong> Interactive panels, digital resources for science & commerce streams.</li>
                <li><i class="fas fa-hands-helping"></i><strong>Lily Foundation Partnership:</strong> Sponsorship for infrastructure & student scholarships.</li>
                <li><i class="fas fa-users"></i> <strong>Student capacity:</strong> 200+ students per year, dedicated common room and staff room.</li>
                <li><i class="fas fa-certificate"></i><strong>JAC compliant:</strong> Full adherence to Jharkhand Academic Council curriculum and examination standards.</li>
            </ul>
        </div>
    </div>
   
    <?php endif; ?>

    <!-- If no role or role doesn't match above, show a beautiful default message -->
    <?php if(!isset($role) || ($role != 'Auditorium' && $role != 'Science' && $role != 'Annex')): ?>
    <div class="text-center py-5 my-5 bg-white rounded-4 shadow-sm p-5">
        <i class="fas fa-info-circle fa-4x text-secondary mb-3"></i>
        <h3 class="fw-bold">Facility Overview</h3>
        <p class="text-muted">Select a facility to explore — Auditorium, Science Lab, or Annex. Our institution boasts world-class infrastructure.</p>
        <div class="row mt-4 justify-content-center g-3">
            <div class="col-auto"><a href="?role=Auditorium" class="btn btn-outline-success rounded-pill px-4"><i class="fas fa-building"></i> Auditorium</a></div>
            <div class="col-auto"><a href="?role=Science%20Lab" class="btn btn-outline-success rounded-pill px-4"><i class="fas fa-microscope"></i> Science Lab</a></div>
            <div class="col-auto"><a href="?role=Annex" class="btn btn-outline-success rounded-pill px-4"><i class="fas fa-school"></i> Plus 2 Annex</a></div>
        </div>
    </div>
    <?php endif; ?>
</div>

 <?php endif; ?>

<!-- JavaScript for floating particles (purely decorative) -->
<script>
    (function generateParticles() {
        const container = document.getElementById('particlesContainer');
        if(!container) return;
        const particleCount = 35;
        for(let i=0; i<particleCount; i++) {
            const particle = document.createElement('div');
            particle.classList.add('particle');
            const size = Math.random() * 12 + 4;
            particle.style.width = size + 'px';
            particle.style.height = size + 'px';
            particle.style.left = Math.random() * 100 + '%';
            particle.style.top = Math.random() * 100 + '%';
            particle.style.animationDelay = Math.random() * 15 + 's';
            particle.style.animationDuration = 12 + Math.random() * 12 + 's';
            particle.style.opacity = Math.random() * 0.4 + 0.1;
            container.appendChild(particle);
        }
    })();
</script>