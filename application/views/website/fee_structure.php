<style>
        /* ========== ANIMATED GRADIENT BACKGROUND (ADDED) ========== */
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
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Main Title Styling */
        .page-title h1 {
            font-size: 56px;
            font-weight: 800;
            color: #fff;
            margin: 0 0 20px 0;
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

        /* ========== FEE STRUCTURE STYLES (FONT SIZES INCREASED) ========== */
        .fee-container {
            max-width: 1300px;
            margin: -35px auto 40px auto;
            padding: 0 20px;
            position: relative;
            z-index: 10;
        }
        
        /* Section Cards */
        .section-card {
            background: white;
            border-radius: 28px;
            box-shadow: 0 12px 28px rgba(0,0,0,0.08);
            margin-bottom: 40px;
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .section-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 20px 35px rgba(0,0,0,0.12);
        }
        .card-header-custom {
            background: #174873;
            color: white;
            padding: 18px 28px;
            font-weight: 800;
            font-size: 1.60rem;
            border-bottom: 4px solid #f4b942;
        }
        .card-header-custom i {
            margin-right: 12px;
            color: #f4b942;
        }
        .table-fee {
            margin-bottom: 0;
        }
        .table-fee th {
            background: #f8f9fc;
            font-weight: 700;
            color: #1e4663;
            border-top: none;
            font-size: 1.45rem;
            padding: 16px 14px;
        }
        .table-fee td {
            padding: 14px 12px;
            vertical-align: middle;
            font-weight: 500;
            font-size: 1.45rem;
        }
        .total-row {
            background: #fff8e7;
            font-weight: 800;
            border-top: 2px solid #f4b942;
        }
        .total-row td {
            font-weight: 800;
            color: #b84c1a;
            font-size: 1.45rem;
        }
        .badge-class {
            background: #f4b94220;
            color: #b85c1a;
            font-weight: 600;
            padding: 5px 14px;
            border-radius: 20px;
            font-size: 1rem;
            display: inline-block;
        }
        .misc-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 28px;
        }
        .misc-box {
            flex: 1;
            min-width: 300px;
            background: #fef9ef;
            border-radius: 28px;
            padding: 25px;
            border-left: 6px solid #f4b942;
        }
        .misc-box h4 {
            color: #1e4663;
            font-weight: 800;
            font-size: 1.6rem;
            margin-bottom: 22px;
            border-bottom: 3px dashed #f4b942;
            display: inline-block;
            padding-bottom: 8px;
        }
        .fee-list {
            list-style: none;
            padding: 0;
        }
        .fee-list li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px solid #e2dccd;
            font-size: 1rem;
            font-weight: 500;
        }
        .fee-list li span:first-child {
            font-weight: 700;
            color: #2c3e50;
            font-size: 1.45rem;
        }
        .fee-list li span:last-child {
            font-weight: 800;
            color: #c0392b;
            background: #fff0e0;
            padding: 5px 14px;
            border-radius: 30px;
            font-size: 1.45rem;
        }
        .total-misc {
            background: #174873;
            color: white;
            padding: 14px 20px;
            border-radius: 48px;
            text-align: center;
            margin-top: 25px;
            font-weight: 800;
            font-size: 1.45rem;
        }
      
        /* Component explanation & guidelines - increased font size */
        .component-list {
            font-size: 1rem;
            line-height: 1.6;
        }
        .component-list li {
            margin-bottom: 12px;
            font-size: 1.45rem;
        }
        .alert-custom {
            font-size: 1.45rem;
            padding: 14px;
        }
        .list-group-item {
            font-size: 0.98rem;
            padding: 12px 0;
        }
        .contact-info {
            font-size: 1.45rem;
        }
        
        @media (max-width: 768px) {
            .page-title h1 { font-size: 32px; }
            .card-header-custom { font-size: 1.3rem; padding: 14px 18px; }
            .table-fee th, .table-fee td { font-size: 0.85rem; padding: 10px 8px; }
            .misc-box h4 { font-size: 1.3rem; }
            .fee-list li { font-size: 0.85rem; }
            .total-misc { font-size: 1rem; }
            .fee-container { padding: 0 12px; }
        }
        
        .print-btn {
            position: fixed;
            bottom: 25px;
            left: 25px;
            z-index: 1000;
            background: #c8102e;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 6px 16px rgba(0,0,0,0.25);
            transition: 0.2s;
            cursor: pointer;
            border: none;
        }
        .print-btn:hover {
            background: #a00c24;
            transform: scale(1.05);
        }
        
        @media print {
            body {
                background: white;
                padding: 0.5cm;
            }
            .print-btn, .page-title .particles, .page-title::before {
                display: none;
            }
            .section-card {
                box-shadow: none;
                break-inside: avoid;
                page-break-inside: avoid;
            }
            .page-title {
                background: #1a5276 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
                margin-bottom: 30px;
            }
            .card-header-custom {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            .total-misc {
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
        }
    </style>
</head>
<body>

<!-- ========== ANIMATED PAGE TITLE HEADER (ADDED) ========== -->
<div class="page-title">
    <div class="particles" id="particlesContainer"></div>
    <div class="container-header">
        <h1><i class="fas fa-chalkboard-user me-3"></i> Fee Structure 2026-27</h1>
        <!-- Breadcrumb -->
        <div class="breadcrumb-custom">
            <a href="#"><i class="fas fa-home"></i> Home</a>
            <i class="fas fa-chevron-right" style="font-size: 12px;"></i>
            <span style="color: #FFD966;"><i class="fas fa-coins"></i> Fee Structure</span>
        </div>
    </div>
    <script>
        // Generate floating particles
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
                particle.style.opacity = 0.2 + Math.random() * 0.5;
                container.appendChild(particle);
            }
        })();
    </script>
</div>

<!-- MAIN FEE STRUCTURE CONTENT (FONT SIZES INCREASED) -->
<div class="fee-container">
    <!-- MAIN FEE TABLE (CLASS WISE) - extracted from image -->
    <div class="section-card">
        <div class="card-header-custom">
            <i class="fas fa-table-list"></i> CLASS-WISE TERM FEE STRUCTURE 
            <small style="font-size: 1.1rem; opacity:0.9;">(Maintenance + Comp. + Add. + Misc + Uniform accessories)</small>
        </div>
        <div class="table-responsive">
            <table class="table table-fee table-bordered mb-0">
                <thead>
                    <tr>
                        <th>CLASS</th>
                        <th>MAINT. (₹)</th>
                        <th>COMP. (₹)</th>
                        <th>ADDITIONAL (₹)</th>
                        <th>MISC. (₹)</th>
                        <th>TIE/BELT/MONO (₹)</th>
                        <th class="bg-warning-subtle">GRAND TOTAL (₹)</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Class V-VI as per image data -->
                    <tr>
                        <td><strong style="font-size:1.45rem;">V - VI</strong></td>
                        <td>425+25+25 = <strong>475</strong></td>
                        <td>175+25+00 = <strong>200</strong></td>
                        <td>240+50+25 = <strong>315</strong></td>
                        <td>265+75 = <strong>340</strong></td>
                        <td>₹100</td>
                        <td class="fw-bold text-danger" style="font-size:1.45rem;">₹1,430</td>
                    </tr>
                    <!-- Class VII -->
                    <tr>
                        <td><strong style="font-size:1.45rem;">VII</strong></td>
                        <td>425+25+25 = <strong>475</strong></td>
                        <td>275+25+00 = <strong>300</strong></td>
                        <td>240+50+25 = <strong>315</strong></td>
                        <td>265+75 = <strong>340</strong></td>
                        <td>₹100</td>
                        <td class="fw-bold text-danger" style="font-size:1.45rem;">₹1,530</td>
                    </tr>
                    <!-- Class VIII -->
                    <tr>
                        <td><strong style="font-size:1.45rem;">VIII</strong></td>
                        <td>425+50+25 = <strong>500</strong></td>
                        <td>275+50+25 = <strong>350</strong></td>
                        <td>240+60+30 = <strong>330</strong></td>
                        <td>265+75 = <strong>340</strong></td>
                        <td>₹100</td>
                        <td class="fw-bold text-danger" style="font-size:1.45rem;">₹1,620</td>
                    </tr>
                    <!-- Class IX-X -->
                    <tr>
                        <td><strong style="font-size:1.45rem;">IX - X</strong></td>
                        <td>425+50+50 = <strong>525</strong></td>
                        <td>275+50+25 = <strong>350</strong></td>
                        <td>240+60+25 = <strong>325</strong></td>
                        <td>305+125 = <strong>430</strong></td>
                        <td>₹100</td>
                        <td class="fw-bold text-danger" style="font-size:1.45rem;">₹1,730</td>
                    </tr>
                </tbody>
                <tfoot class="total-row">
                    <tr>
                        <td colspan="6" class="text-end fw-bold" style="font-size:1rem;">Note: One-time admission fee extra (see misc. collection)</td>
                        <td class="fw-bold">Inclusive of taxes</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- GEN. / MISC. FEE COLLECTION - extracted from image (V-VIII vs IX-X) -->
    <div class="section-card">
        <div class="card-header-custom">
            <i class="fas fa-coins"></i> GENERAL & MISCELLANEOUS FEE BREAKDOWN
        </div>
        <div class="misc-grid">
            <!-- CLASS V - VIII column -->
            <div class="misc-box">
                <h4><i class="fas fa-book-open me-2"></i> CLASS V - VIII</h4>
                <ul class="fee-list">
                    <li><span>1. Admission Fee</span> <span>₹ 40 + 20 = ₹60</span></li>
                    <li><span>2. Sports & G. Fee</span> <span>₹ 25 + 05 = ₹30</span></li>
                    <li><span>3. Library</span> <span>₹ 10 + 00 = ₹10</span></li>
                    <li><span>4. Electric</span> <span>₹ 30 + 10 = ₹40</span></li>
                    <li><span>5. C. Room</span> <span>₹ 15 + 00 = ₹15</span></li>
                    <li><span>6. Exam Fee</span> <span>₹ 60 + 20 = ₹80</span></li>
                    <li><span>7. S. Levy</span> <span>₹ 20 + 10 = ₹30</span></li>
                    <li><span>8. Dairy/R.B</span> <span>₹ 25 + 25 = ₹50</span></li>
                    <li><span>9. S. Guide</span> <span>₹ 05 + 05 = ₹10</span></li>
                    <li><span>10. P.B.F</span> <span>₹ 10 + 05 = ₹15</span></li>
                </ul>
                <div class="total-misc">
                    <i class="fas fa-calculator"></i> TOTAL MISC. (V-VIII) : ₹ 265 + ₹ 75 = <strong>₹ 340</strong>
                </div>
            </div>

            <!-- CLASS IX & X column -->
            <div class="misc-box">
                <h4><i class="fas fa-trophy me-2"></i> CLASS IX & X</h4>
                <ul class="fee-list">
                    <li><span>1. Admission Fee</span> <span>₹ 40 + 40 = ₹80</span></li>
                    <li><span>2. Sports & G. Fee</span> <span>₹ 25 + 15 = ₹40</span></li>
                    <li><span>3. Library</span> <span>₹ 10 + 00 = ₹10</span></li>
                    <li><span>4. Electric</span> <span>₹ 30 + 20 = ₹50</span></li>
                    <li><span>5. C. Room</span> <span>₹ 15 + 00 = ₹15</span></li>
                    <li><span>6. Exam Fee</span> <span>₹ 100 + 20 = ₹120</span></li>
                    <li><span>7. S. Levy</span> <span>₹ 20 + 20 = ₹40</span></li>
                    <li><span>8. Dairy/R.B</span> <span>₹ 25 + 25 = ₹50</span></li>
                    <li><span>9. S. Guide</span> <span>₹ 05 + 05 = ₹10</span></li>
                    <li><span>10. P.B.F</span> <span>₹ 10 + 05 = ₹15</span></li>
                </ul>
                <div class="total-misc">
                    <i class="fas fa-calculator"></i> TOTAL MISC. (IX-X) : ₹ 305 + ₹ 125 = <strong>₹ 430</strong>
                </div>
            </div>
        </div>
        <div class="p-3 bg-light border-top small text-muted d-flex justify-content-between flex-wrap" style="font-size:0.9rem;">
            
        </div>
    </div>

    <!-- Additional informative summary (Fee Components & Guidelines) - fonts increased -->
    <div class="row g-4 mb-4">
        <div class="col-md-6">
            <div class="section-card h-100">
                <div class="card-header-custom">
                    <i class="fas fa-chart-simple"></i> FEE COMPONENTS EXPLANATION
                </div>
                <div class="p-4">
                    <ul class="list-unstyled component-list">
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2 fa-lg"></i> <strong>MAINT.</strong> : Maintenance & Development Fund</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2 fa-lg"></i> <strong>COMP.</strong> : Computer / Lab / Practical Fee</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2 fa-lg"></i> <strong>ADD.</strong> : Additional Academic Activities / Magazine / Welfare</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2 fa-lg"></i> <strong>MISC.</strong> : Includes Admission, Sports, Library, Electric, Exam, Levy, Dairy, Guide, PBF etc.</li>
                        <li class="mb-3"><i class="fas fa-check-circle text-success me-2 fa-lg"></i> <strong>TIE/BELT/MONO</strong> : Uniform accessories (one-time)</li>
                    </ul>
                    <div class="alert alert-warning mt-3 alert-custom">
                        <i class="fas fa-info-circle fa-lg me-2"></i> For classes V to X, the fee mentioned is per term (half-yearly) structure as per school policy. The grand total includes all compulsory components.
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="section-card h-100">
                <div class="card-header-custom" >
                    <i class="fas fa-hand-holding-usd"></i> IMPORTANT GUIDELINES
                </div>
                <div class="p-4">
                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent" style="font-size:1.45rem;"><i class="fas fa-dot-circle text-primary me-2"></i> Fee payable at the beginning of each term (April & September).</li>
                        <li class="list-group-item bg-transparent" style="font-size:1.45rem;"><i class="fas fa-dot-circle text-primary me-2"></i> Late fee fine applicable after due date as per school diary.</li>
                        <li class="list-group-item bg-transparent" style="font-size:1.45rem;"><i class="fas fa-dot-circle text-primary me-2"></i> Annual Examination fee included in Misc. collection (Exam Fee).</li>
                        <li class="list-group-item bg-transparent" style="font-size:1.45rem;"><i class="fas fa-dot-circle text-primary me-2"></i> Concession for BPL category & multiple siblings available (contact admin).</li>
                        <li class="list-group-item bg-transparent" style="font-size:1.45rem;"><i class="fas fa-dot-circle text-primary me-2"></i> Sports & Games, Smart Class, Library facilities included.</li>
                    </ul>
                    <!-- <div class="mt-4 p-3 rounded-3 text-center contact-info" style="background:#eef2fa;">
                        <i class="fas fa-phone-alt me-2"></i> For any query: +91 9234676905 | j.c.hs.ghatsila.e.singhbhum@gmail.com
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Footer note -->
  
</div>

<!-- Floating Print Button -->
<button class="print-btn" onclick="window.print();" title="Print Fee Structure (A4)">
    <i class="fas fa-print fa-2x" style="color:white;"></i>
</button>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
