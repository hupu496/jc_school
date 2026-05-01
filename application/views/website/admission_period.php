<style>

        .page-title {
            z-index: 1;
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

        .container-header {
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
        .breadcrumb-custom {
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

        .breadcrumb-custom a {
            color: #ffd700;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .breadcrumb-custom a:hover {
            color: #fff;
            text-shadow: 0 0 5px rgba(255,215,0,0.5);
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

        /* ========== MAIN CONTENT AREA ========== */
        .admission-container {
            max-width: 1200px;
            margin: -35px auto 50px auto;
            padding: 0 20px;
            position: relative;
            z-index: 10;
        }

        /* Hero / Period Card */
        .period-hero {
            background: linear-gradient(135deg, #ffffff 0%, #fef9ef 100%);
            border-radius: 40px;
            padding: 40px;
            margin-bottom: 40px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
            text-align: center;
            border: 1px solid rgba(244, 185, 66, 0.3);
        }
        .calendar-icon {
            font-size: 70px;
            color: #ff6b6b;
            background: #fff0e0;
            width: 120px;
            height: 120px;
            line-height: 120px;
            border-radius: 60px;
            margin: 0 auto 20px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .period-date {
            font-size: 3rem;
            font-weight: 800;
            color: #1e4663;
            letter-spacing: -1px;
        }
        .period-year {
            font-size: 1.4rem;
            color: #ff6b6b;
            font-weight: 600;
        }
        .status-badge {
            display: inline-block;
            background: #28a745;
            color: white;
            padding: 8px 25px;
            border-radius: 40px;
            font-weight: 700;
            font-size: 1rem;
            margin-top: 20px;
        }

        /* Info Cards */
        .info-card {
            background: white;
            border-radius: 28px;
            padding: 30px;
            margin-bottom: 30px;
            box-shadow: 0 12px 28px rgba(0,0,0,0.06);
            transition: transform 0.2s;
            height: 100%;
        }
        .info-card:hover {
            transform: translateY(-5px);
        }
        .info-card h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #174873;
            border-left: 5px solid #f4b942;
            padding-left: 18px;
            margin-bottom: 25px;
        }
        .info-card ul {
            list-style: none;
            padding: 0;
        }
        .info-card ul li {
            margin-bottom: 14px;
            font-size: 1.4rem;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        .info-card ul li i {
            width: 28px;
            color: #f4b942;
            font-size: 1.2rem;
        }
        .step-number {
            background: #174873;
            color: white;
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 800;
            margin-right: 12px;
        }
        .btn-admission {
            background: #ff6b6b;
            color: white;
            padding: 14px 35px;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-block;
            border: none;
        }
        .btn-admission:hover {
            background: #a00c24;
            transform: translateY(-2px);
            color: white;
            box-shadow: 0 10px 20px rgba(200,16,46,0.3);
        }
        .btn-outline-primary-custom {
            background: transparent;
            border: 2px solid #174873;
            color: #174873;
            padding: 12px 28px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-outline-primary-custom:hover {
            background: #174873;
            color: white;
        }

        .timeline-item {
            display: flex;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        .timeline-icon {
            background: #f4b942;
            width: 48px;
            height: 48px;
            border-radius: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 18px;
            flex-shrink: 0;
        }
        .timeline-content h4 {
            font-weight: 700;
            margin-bottom: 5px;
            color: #1e4663;
        }
        .important-note {
            background: #fff8e7;
            border-left: 5px solid #f4b942;
            padding: 20px;
            border-radius: 20px;
            margin: 25px 0;
        }
    
        @media (max-width: 768px) {
            .page-title h1 { font-size: 32px; }
            .period-date { font-size: 2rem; }
            .calendar-icon { width: 80px; height: 80px; line-height: 80px; font-size: 40px; }
            .info-card h3 { font-size: 1.4rem; }
        }
        .print-btn {
            position: fixed;
            bottom: 25px;
            right: 25px;
            z-index: 1000;
            background: #ff6b6b;
            width: 55px;
            height: 55px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 16px rgba(0,0,0,0.2);
            cursor: pointer;
            border: none;
        }
        .print-btn:hover { background: #a00c24; transform: scale(1.05); }
        @media print {
            body { background: white; padding: 0; }
            .print-btn, .page-title .particles, .page-title::before { display: none; }
            .page-title { background: #1a5276 !important; -webkit-print-color-adjust: exact; margin-bottom: 20px; }
            .period-hero, .info-card { box-shadow: none; break-inside: avoid; }
        }
    </style>

<!-- ========== ANIMATED PAGE TITLE HEADER ========== -->
<div class="page-title">
    <div class="particles" id="particlesContainer"></div>
    <div class="container-header">
        <h1><i class="fas fa-calendar-alt me-3"></i> Admission Period 2026-27</h1>
        <div class="breadcrumb-custom">
            <a href="#"><i class="fas fa-home"></i> Home</a>
            <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
            <a href="#">Admission</a>
            <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
            <span style="color: #FFD966;"><i class="fas fa-clock"></i> Admission Period</span>
        </div>
    </div>
    <script>
        (function generateParticles() {
            const container = document.getElementById('particlesContainer');
            if (!container) return;
            for (let i = 0; i < 35; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                const size = Math.floor(Math.random() * 14) + 4;
                particle.style.width = size + 'px';
                particle.style.height = size + 'px';
                particle.style.left = Math.random() * 100 + '%';
                particle.style.top = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 15 + 's';
                particle.style.animationDuration = 10 + Math.random() * 15 + 's';
                container.appendChild(particle);
            }
        })();
    </script>
</div>

<!-- MAIN CONTENT - ADMISSION PERIOD (APRIL TO JUNE) -->
<div class="admission-container">
    <!-- Hero Section: Admission Period Highlight -->
    <div class="period-hero">
        <div class="calendar-icon">
            <i class="fas fa-calendar-check"></i>
        </div>
        <div class="period-date">
            April <i class="fas fa-arrow-right"></i> June 2026
        </div>
        <div class="period-year">
            Academic Session 2026-27
        </div>
        <div class="status-badge">
            <i class="fas fa-hourglass-half me-2"></i> Admissions Open Now
        </div>
        <p class="mt-4 fs-5" style="color:#2c3e50; max-width:700px; margin-left:auto; margin-right:auto;">
            Jagadish Chandra High School invites applications for new academic session. 
            Register your child during the admission window from <strong>1st April 2026 to 30th June 2026</strong>.
        </p>
    </div>

    <div class="row g-4">
        <!-- Left Column: Important Dates & Schedule -->
        <div class="col-lg-6">
            <div class="info-card">
                <h3><i class="fas fa-calendar-week me-2"></i> Admission Schedule</h3>
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fas fa-play text-white"></i></div>
                    <div class="timeline-content">
                        <h4>Start of Admission</h4>
                        <p><strong>1st April 2026 (Wednesday)</strong> - Online & Offline registration begins.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fas fa-file-signature text-white"></i></div>
                    <div class="timeline-content">
                        <h4>Form Submission Deadline</h4>
                        <p><strong>25th June 2026</strong> - Last date to submit registration forms.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fas fa-list-check text-white"></i></div>
                    <div class="timeline-content">
                        <h4>Merit List / Interaction</h4>
                        <p><strong>28th - 30th June 2026</strong> - Document verification & interaction schedule.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-icon"><i class="fas fa-chalkboard-user text-white"></i></div>
                    <div class="timeline-content">
                        <h4>Commencement of Classes</h4>
                        <p><strong>1st July 2026</strong> - New academic year begins.</p>
                    </div>
                </div>
                <div class="important-note">
                    <i class="fas fa-exclamation-triangle text-warning me-2"></i> 
                    <strong>Note:</strong> Admission period is from <strong>April to June</strong> only. Late applications may be considered subject to seat availability with late fee.
                </div>
            </div>
        </div>

        <!-- Right Column: Eligibility & Process -->
        <div class="col-lg-6">
            <div class="info-card">
                <h3><i class="fas fa-graduation-cap me-2"></i> Eligibility Criteria</h3>
                <ul>
                    <li><i class="fas fa-check-circle"></i> <strong>Class V to VIII:</strong> Minimum age 9+ years as on 31st March 2026</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Class IX & X:</strong> Based on previous class marks & entrance (if applicable)</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Transfer Cases:</strong> Accepted throughout the year with valid TC from recognized board.</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Documents Required:</strong> Birth Certificate, Aadhar Card, Previous Marksheet, TC, Caste Certificate (if applicable), BPL Card (if any), Passport size photos.</li>
                </ul>
            </div>

            <div class="info-card">
                <h3><i class="fas fa-clipboard-list me-2"></i> Admission Process</h3>
                <ul>
                    <li><span class="step-number">1</span> Obtain registration form from school office or download from website.</li>
                    <li><span class="step-number">2</span> Fill complete form (block letters) and attach required documents.</li>
                    <li><span class="step-number">3</span> Submit form along with registration fee at school counter / online portal.</li>
                    <li><span class="step-number">4</span> After verification, provisional admission letter will be issued.</li>
                    <li><span class="step-number">5</span> Pay admission & tuition fee as per fee structure to confirm seat.</li>
                </ul>
                <div class="text-center mt-3">
                    <a href="#" class="btn-admission"><i class="fas fa-download me-2"></i> Download Admission Form</a>
                    <a href="#" class="btn-outline-primary-custom ms-3"><i class="fas fa-print me-2"></i> Print Application</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Row: Timings and Contact -->
  
   
</div>


<!-- Floating Print Button
<button class="print-btn" onclick="window.print();" title="Print Admission Period Details">
    <i class="fas fa-print fa-xl" style="color:white;"></i>
</button> -->

