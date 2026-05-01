<style>
        /* Animated Header */
        .affiliation-header {
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

        .affiliation-header::before {
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

        .affiliation-header h1 {
            font-size: 52px;
            font-weight: 800;
            color:white;
            letter-spacing: -1px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            position: relative;
            margin-bottom: 15px;
        }

        .affiliation-header p {
            font-size: 20px;
            opacity: 0.95;
            letter-spacing: 1px;
        }

        .udise-badge {
            display: inline-block;
            background: rgba(255,215,0,0.2);
            backdrop-filter: blur(10px);
            padding: 12px 30px;
            border-radius: 50px;
            margin-top: 20px;
            font-size: 24px;
            font-weight: 700;
            border: 1px solid rgba(255,215,0,0.5);
        }

        .udise-badge i {
            margin-right: 12px;
            color: #ffd700;
        }

        /* Main Container */
        .main-container {
            max-width: 1300px;
            margin: -30px auto 50px;
            padding: 0 20px;
            position: relative;
            z-index: 10;
        }

        /* Affiliation Cards */
        .affiliation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .affiliation-card {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            transition: all 0.4s ease;
            position: relative;
        }

        .affiliation-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 45px rgba(0,0,0,0.2);
        }

        .card-header {
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .card-header i {
            font-size: 48px;
            margin-bottom: 15px;
        }

        .card-header h3 {
            font-size: 24px;
            font-weight: 700;
            color: #fff;
        }

        .card-body {
            padding: 25px;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            padding: 12px 0;
            border-bottom: 1px solid #e0e0e0;
        }

        .info-label {
            font-weight: 600;
            color: #1a4a6f;
        }

        .info-value {
            color: #333;
            text-align: right;
        }

        /* Main Affiliation Details */
        .main-affiliation {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .section-title {
            background: linear-gradient(135deg, #ff6b35, #f7931e);
            padding: 20px 30px;
            color: white;
        }

        .section-title h2 {
            font-size: 28px;
            font-weight: 700;
            color: #fff;
        }

        .section-title h2 i {
            margin-right: 12px;
        }

        .affiliation-details {
            padding: 30px;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
        }

        .details-table tr {
            border-bottom: 1px solid #e0e0e0;
        }

        .details-table td {
            padding: 15px;
            vertical-align: top;
        }

        .details-table td:first-child {
            font-weight: 700;
            color: #1a4a6f;
            width: 35%;
            background: #f8f9fa;
        }

        .details-table td:last-child {
            color: #333;
        }

        /* Recognition Timeline */
        .timeline-section {
            background: white;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            margin-bottom: 40px;
        }

        .timeline {
            padding: 30px;
            position: relative;
        }

        .timeline-item {
            display: flex;
            margin-bottom: 30px;
            position: relative;
        }

        .timeline-year {
            min-width: 120px;
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            color: white;
            padding: 10px 20px;
            border-radius: 30px;
            text-align: center;
            font-weight: 700;
            margin-right: 25px;
            height: fit-content;
        }

        .timeline-content {
            background: #f8f9fa;
            padding: 15px 25px;
            border-radius: 15px;
            flex: 1;
            border-left: 4px solid #ff6b35;
        }

        .timeline-content h4 {
            color: #1a4a6f;
            margin-bottom: 8px;
        }

        /* Stats Section */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: white;
            border-radius: 20px;
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            color: white;
        }

        .stat-card i {
            font-size: 48px;
            margin-bottom: 15px;
            color: #ff6b35;
        }

        .stat-card:hover i {
            color: white;
        }

        .stat-number {
            font-size: 36px;
            font-weight: 800;
        }

        .stat-label {
            font-size: 14px;
            margin-top: 10px;
            opacity: 0.8;
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

        @media (max-width: 768px) {
            .affiliation-header h1 { font-size: 28px; }
            .udise-badge { font-size: 16px; padding: 8px 20px; }
            .timeline-item { flex-direction: column; }
            .timeline-year { margin-bottom: 10px; width: fit-content; }
            .details-table td { display: block; width: 100%; }
            .details-table td:first-child { width: 100%; }
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

        .affiliation-card, .main-affiliation, .timeline-section {
            animation: fadeInUp 0.6s ease forwards;
        }

        .affiliation-card:nth-child(2) { animation-delay: 0.1s; }
        .affiliation-card:nth-child(3) { animation-delay: 0.2s; }
    </style>
    <div class="affiliation-header">
        <h1>🏛️ JAGADISH CHANDRA HIGH SCHOOL</h1>
        <p>Jharkhand Academic Council, Ranchi</p>
        <div class="udise-badge">
            <i class="fas fa-qrcode"></i> UDISE CODE: 20180615501
        </div>
    </div>

    <div class="main-container">
        <!-- Stats Cards -->
        <div class="stats-grid">
            <div class="stat-card">
                <i class="fas fa-calendar-alt"></i>
                <div class="stat-number">1927</div>
                <div class="stat-label">Year of Establishment</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-graduation-cap"></i>
                <div class="stat-number">1943</div>
                <div class="stat-label">High School Recognition</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-chalkboard-user"></i>
                <div class="stat-number">25+</div>
                <div class="stat-label">Qualified Teachers</div>
            </div>
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <div class="stat-number">900+</div>
                <div class="stat-label">Enrolled Students</div>
            </div>
        </div>

        <!-- Affiliation Grid -->
        <div class="affiliation-grid">
            <div class="affiliation-card">
                <div class="card-header">
                    <i class="fas fa-school"></i>
                    <h3>School Information</h3>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label">School Name</span>
                        <span class="info-value">Jagadish Chandra High School</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">UDISE Code</span>
                        <span class="info-value">20180615501</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Location</span>
                        <span class="info-value">Ghatsila, East Singhbhum, Jharkhand</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Medium of Instruction</span>
                        <span class="info-value">Bengali, Hindi, English</span>
                    </div>
                </div>
            </div>

            <div class="affiliation-card">
                <div class="card-header">
                    <i class="fas fa-certificate"></i>
                    <h3>Recognition Details</h3>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label">Recognizing Body</span>
                        <span class="info-value">Government of Jharkhand</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Recognition Year</span>
                        <span class="info-value">1943</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">School Category</span>
                        <span class="info-value">Bengali Medium Minority School</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Status</span>
                        <span class="info-value">Permanently Recognized</span>
                    </div>
                </div>
            </div>

            <div class="affiliation-card">
                <div class="card-header">
                    <i class="fas fa-chart-line"></i>
                    <h3>Academic Levels</h3>
                </div>
                <div class="card-body">
                    <div class="info-row">
                        <span class="info-label">Primary Level</span>
                        <span class="info-value">Class I - V</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Upper Primary</span>
                        <span class="info-value">Class VI - VIII</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">High School</span>
                        <span class="info-value">Class IX - X</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Board</span>
                        <span class="info-value">Jharkhand Academic Council (JAC)</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Affiliation Details -->
        <div class="main-affiliation">
            <div class="section-title">
                <h2><i class="fas fa-file-alt"></i> Complete Affiliation Information</h2>
            </div>
            <div class="affiliation-details">
                <table class="details-table">
                    <tr>
                        <td>UDISE Code</td>
                        <td><strong>20180615501</strong> (Unified District Information System for Education)</td>
                    </tr>
                    <tr>
                        <td>School Code (JAC)</td>
                        <td>As per Jharkhand Academic Council, Ranchi</td>
                    </tr>
                    <tr>
                        <td>Affiliation Status</td>
                        <td><span style="background:#4caf50; color:white; padding:3px 10px; border-radius:20px;">✓ Active & Recognized</span></td>
                    </tr>
                    <tr>
                        <td>District</td>
                        <td>East Singhbhum</td>
                    </tr>
                    <tr>
                        <td>Block</td>
                        <td>Ghatsila</td>
                    </tr>
                    <tr>
                        <td>Village/Town</td>
                        <td>Ghatsila, Near NH-18 Highway</td>
                    </tr>
                    <tr>
                        <td>PIN Code</td>
                        <td>832303</td>
                    </tr>
                    <tr>
                        <td>Contact Email</td>
                        <td>j.c.hs.ghatsila.e.singhbhum@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Contact Phone</td>
                        <td>+91 9234676905</td>
                    </tr>
                    <tr>
                        <td>Management Type</td>
                        <td>State Government Aided-Minority (Bengali)</td>
                    </tr>
                    <tr>
                        <td>School Type</td>
                        <td>Co-educational</td>
                    </tr>
                    <tr>
                        <td>Residential Status</td>
                        <td>Non-Residential (Day School)</td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- Recognition Timeline -->
        <div class="timeline-section">
            <div class="section-title">
                <h2><i class="fas fa-history"></i> Historical Recognition Timeline</h2>
            </div>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-year">1927-28</div>
                    <div class="timeline-content">
                        <h4>School Established</h4>
                        <p>Started as a middle school named "J.C. High School" by local Bengali community.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">1936-37</div>
                    <div class="timeline-content">
                        <h4>Royal Patronage</h4>
                        <p>Raja Bahadur Jagadish Chandra Deo Dhabaldeb provided financial assistance. School renamed in his honour.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">1943</div>
                    <div class="timeline-content">
                        <h4>High School Recognition</h4>
                        <p>Recognized as a High School by the State Government.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">1959-1972</div>
                    <div class="timeline-content">
                        <h4>Higher Secondary Status</h4>
                        <p>School was upgraded to Higher Secondary level.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-year">1972</div>
                    <div class="timeline-content">
                        <h4>Minority School Declaration</h4>
                        <p>Declared as Bengali Medium Minority High School by State Govt.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Certificate Badge -->
    <div class="certificate-badge" onclick="window.print()">
        <i class="fas fa-print"></i> Download Affiliation Certificate
    </div>

    <script>
        // Add animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.affiliation-card, .main-affiliation, .timeline-section, .stat-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>
