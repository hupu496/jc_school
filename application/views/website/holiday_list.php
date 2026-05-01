<style>
  

        /* Animated Header */
        .page-title {
            z-index: -1;
            position: relative;
            background: linear-gradient(135deg, #1a2a3a 0%, #2c3e50 25%, #1a5276 50%, #2980b9 75%, #1a2a3a 100%);
            background-size: 200% 200%;
            padding: 60px 0;
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

        .page-title h1 {
            font-size: 56px;
            font-weight: 800;
            color: #fff;
            margin: 0 0 15px 0;
            letter-spacing: -0.5px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            position: relative;
        }

        .page-title p {
            font-size: 20px;
            opacity: 0.9;
        }

        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        /* Holiday Section */
        .holiday-section {
            padding: 50px 0;
        }

        /* Print Button */
        .print-btn-container {
            text-align: right;
            margin-bottom: 25px;
        }

        .print-btn {
            background: linear-gradient(135deg, #1a4a6f, #ff6b35);
            color: white;
            border: none;
            padding: 12px 30px;
            border-radius: 50px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .print-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }

        .print-btn i {
            margin-right: 8px;
        }

        /* Holiday Cards */
        .holiday-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 35px;
            transition: transform 0.3s ease;
        }

        .holiday-card:hover {
            transform: translateY(-5px);
        }

        .holiday-header {
            background: linear-gradient(135deg, #1a4a6f, #2a5298);
            color: white;
            padding: 20px 25px;
            font-weight: 700;
            font-size: 22px;
        }

        .holiday-header i {
            margin-right: 12px;
        }

        .holiday-table {
            width: 100%;
            border-collapse: collapse;
        }

        .holiday-table th {
            background: #f8f9fa;
            padding: 15px 20px;
            text-align: left;
            font-weight: 700;
            color: #1a4a6f;
            border-bottom: 2px solid #1a4a6f;
            font-size: 15px;
        }

        .holiday-table td {
            padding: 12px 20px;
            border-bottom: 1px solid #e0e0e0;
            vertical-align: middle;
            color: #333;
        }

        .holiday-table tr:hover {
            background: #fef5f5;
        }

        /* Badges */
        .badge-holiday {
            background: #1a4a6f;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            display: inline-block;
        }

        .badge-saturday {
            background: #ff6b6b;
            color: white;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            display: inline-block;
        }

        /* Vacation Cards */
        .vacation-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
            overflow: hidden;
            margin-bottom: 35px;
        }

        .vacation-header {
            background: linear-gradient(135deg, #2c7da0, #1a4a6f);
            color: white;
            padding: 20px 25px;
            font-weight: 700;
            font-size: 22px;
        }

        .vacation-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            padding: 25px;
        }

        .vacation-item {
            background: #f8f9fa;
            border-radius: 15px;
            padding: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border-left: 4px solid #1a4a6f;
        }

        .vacation-item:hover {
            transform: translateX(5px);
            background: #f0f2f5;
        }

        .vacation-item h4 {
            font-size: 18px;
            font-weight: 700;
            color: #1a4a6f;
            margin-bottom: 10px;
        }

        .vacation-item p {
            font-size: 14px;
            color: #555;
        }

        .vacation-days {
            display: inline-block;
            background: #ff6b35;
            color: white;
            padding: 3px 12px;
            border-radius: 20px;
            font-size: 12px;
            margin-top: 10px;
        }

        /* Info Note */
        .info-note {
            background: #e8f0fe;
            border-left: 4px solid #1a4a6f;
            padding: 20px 25px;
            border-radius: 12px;
            margin-top: 30px;
        }

        .info-note i {
            font-size: 24px;
            color: #1a4a6f;
            margin-right: 15px;
            float: left;
        }

        .info-note strong {
            color: #1a4a6f;
        }

        .info-note p {
            margin-left: 40px;
            line-height: 1.6;
            color: #333;
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
            .page-title p { font-size: 14px; }
            .holiday-table th, .holiday-table td { padding: 10px 12px; font-size: 12px; }
            .holiday-header { font-size: 18px; }
            .print-btn-container { text-align: center; }
        }

        /* Print Styles */
        @media print {
            .print-btn-container, .footer, .page-title::before {
                display: none !important;
            }
            .holiday-card, .vacation-card {
                box-shadow: none;
                border: 1px solid #ccc;
                break-inside: avoid;
            }
            .page-title {
                background: #1a4a6f;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }
            body {
                background: white;
            }
        }
    </style>
</head>
<body>

    <!-- Page Title Area -->
    <div class="page-title">
        <div class="container">
            <h1>📅 Holiday Calendar 2026-2027</h1>
            <p>Academic Session | Jagadish Chandra High School, Ghatsila</p>
        </div>
    </div>

    <!-- Holiday List Section -->
    <div class="holiday-section">
        <div class="container">
            <!-- Print Button -->
            <div class="print-btn-container">
                <button onclick="window.print()" class="print-btn">
                    <i class="fas fa-print"></i> Print Holiday Calendar
                </button>
            </div>

            <!-- Main Holiday Card - Gazetted Holidays -->
            <div class="holiday-card">
                <div class="holiday-header">
                    <i class="fas fa-calendar-alt"></i> Gazetted Holidays & Festivals (2026)
                </div>
                <table class="holiday-table">
                    <thead>
                        <tr><th>Sl. No.</th><th>Holiday Name</th><th>Date(s)</th><th>Day(s)</th><th>No. of Days</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Winter Break</td><td>Jan 1 – Jan 5</td><td>Thu – Mon</td><td>5</td></tr>
                        <tr><td>2</td><td>Sohrai</td><td>Jan 12</td><td>Monday</td><td>1</td></tr>
                        <tr><td>3</td><td>Sohrai (Khuntau)</td><td>Jan 13</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>4</td><td>Makar Sankranti</td><td>Jan 14</td><td>Wednesday</td><td>1</td></tr>
                        <tr><td>5</td><td>Netaji Subhash Chandra Bose Jayanti / Basant Panchami</td><td>Jan 23</td><td>Friday</td><td>1</td></tr>
                        <tr><td>6</td><td>Republic Day</td><td>Jan 26</td><td>Monday</td><td>1</td></tr>
                        <tr><td>7</td><td>Sant Ravidas Jayanti</td><td>Feb 1</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>8</td><td>Mahashivratri</td><td>Feb 15</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>9</td><td>Holika Dahan</td><td>Mar 3</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>10</td><td>Holi</td><td>Mar 4</td><td>Wednesday</td><td>1</td></tr>
                        <tr><td>11</td><td>Eid-ul-Fitr / Sarhul (3rd Saturday)</td><td>Mar 21</td><td>Saturday</td><td>0</td></tr>
                        <tr><td>12</td><td>Sarhul (Phulkhosi)</td><td>Mar 22</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>13</td><td>Ram Navami</td><td>Mar 26</td><td>Thursday</td><td>1</td></tr>
                        <tr><td>14</td><td>Mahavir Jayanti</td><td>Mar 31</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>15</td><td>Good Friday</td><td>Apr 3</td><td>Friday</td><td>1</td></tr>
                        <tr><td>16</td><td>Ambedkar Jayanti</td><td>Apr 14</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>17</td><td>Labour Day / Budh Purnima / Pt. Raghunath Murmu Jayanti</td><td>May 1</td><td>Friday</td><td>1</td></tr>
                        <tr><td>18</td><td>Bakrid / Eid-ul-Zuha (During Summer Break)</td><td>May 27</td><td>Wednesday</td><td>-</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Summer Vacation Card -->
            <div class="vacation-card">
                <div class="vacation-header">
                    <i class="fas fa-umbrella-beach"></i> Summer Vacation & Long Breaks
                </div>
                <div class="vacation-grid">
                    <div class="vacation-item">
                        <h4>☀️ Summer Vacation</h4>
                        <p>May 22 – June 10, 2026</p>
                        <span class="vacation-days">20 Days</span>
                    </div>
                    <div class="vacation-item">
                        <h4>❄️ Winter Break</h4>
                        <p>December 25 – January 5, 2027</p>
                        <span class="vacation-days">4 Days</span>
                    </div>
                </div>
            </div>

            <!-- Main Holiday Card - July to December 2026 -->
            <div class="holiday-card">
                <div class="holiday-header">
                    <i class="fas fa-calendar-alt"></i> Gazetted Holidays & Festivals (July - December 2026)
                </div>
                <table class="holiday-table">
                    <thead>
                        <tr><th>Sl. No.</th><th>Holiday Name</th><th>Date(s)</th><th>Day(s)</th><th>No. of Days</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>19</td><td>Muharram</td><td>June 26</td><td>Friday</td><td>1</td></tr>
                        <tr><td>20</td><td>Hul Diwas</td><td>June 30</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>21</td><td>Rath Yatra</td><td>July 16</td><td>Thursday</td><td>1</td></tr>
                        <tr><td>22</td><td>World Tribal Day</td><td>Aug 9</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>23</td><td>Independence Day (3rd Saturday)</td><td>Aug 15</td><td>Saturday</td><td>0</td></tr>
                        <tr><td>24</td><td>Milad-un-Nabi</td><td>Aug 26</td><td>Wednesday</td><td>1</td></tr>
                        <tr><td>25</td><td>Raksha Bandhan</td><td>Aug 28</td><td>Friday</td><td>1</td></tr>
                        <tr><td>26</td><td>Janmashtami</td><td>Sept 4</td><td>Friday</td><td>1</td></tr>
                        <tr><td>27</td><td>Ganesh Chaturthi</td><td>Sept 14</td><td>Monday</td><td>1</td></tr>
                        <tr><td>28</td><td>Vishwakarma Puja</td><td>Sept 17</td><td>Thursday</td><td>1</td></tr>
                        <tr><td>29</td><td>Karma Puja</td><td>Sept 22</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>30</td><td>Karma (Phulkhosi)</td><td>Sept 23</td><td>Wednesday</td><td>1</td></tr>
                        <tr><td>31</td><td>Mahatma Gandhi Jayanti</td><td>Oct 2</td><td>Friday</td><td>1</td></tr>
                        <tr><td>32</td><td>Shardiya Navratri / Kalash Sthapana</td><td>Oct 11</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>33</td><td>Maha Saptami</td><td>Oct 18</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>34</td><td>Maha Ashtami</td><td>Oct 19</td><td>Monday</td><td>1</td></tr>
                        <tr><td>35</td><td>Maha Navami / Vijaya Dashami</td><td>Oct 20</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>36</td><td>Deepawali</td><td>Nov 8</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>37</td><td>Govardhan Puja</td><td>Nov 9</td><td>Monday</td><td>1</td></tr>
                        <tr><td>38</td><td>Bhai Dooj / Chitragupt Puja</td><td>Nov 11</td><td>Wednesday</td><td>1</td></tr>
                        <tr><td>39</td><td>Birsa Munda Jayanti / Chhath (Evening Arghya)</td><td>Nov 15</td><td>Sunday</td><td>0</td></tr>
                        <tr><td>40</td><td>Chhath (Morning Arghya)</td><td>Nov 16</td><td>Monday</td><td>1</td></tr>
                        <tr><td>41</td><td>Guru Nanak Jayanti</td><td>Nov 24</td><td>Tuesday</td><td>1</td></tr>
                        <tr><td>42</td><td>Christmas</td><td>Dec 25</td><td>Friday</td><td>1</td></tr>
                        <tr><td>43</td><td>Winter Break</td><td>Dec 28 – Dec 31</td><td>Mon – Thu</td><td>4</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- District Level Local Holidays -->
            <div class="holiday-card">
                <div class="holiday-header" style="background: linear-gradient(135deg, #ff6b6b, #ff4757);">
                    <i class="fas fa-map-marker-alt"></i> District Specific Holidays (East Singhbhum, Jamshedpur)
                </div>
                <table class="holiday-table">
                    <thead>
                        <tr><th>Sl. No.</th><th>Holiday Name</th><th>Date</th><th>Day</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Akhan Jatra</td><td>Jan 15, 2026</td><td>Thursday</td></tr>
                        <tr><td>2</td><td>Baha Parv</td><td>Feb 23, 2026</td><td>Monday</td></tr>
                        <tr><td>3</td><td>Jamat-Al-Vida</td><td>Mar 20, 2026</td><td>Friday</td></tr>
                        <tr><td>4</td><td>Jivitputrika (Jiutya)</td><td>Oct 3, 2026</td><td>Saturday</td></tr>
                        <tr><td>5</td><td>Bandna Parv</td><td>Nov 10, 2026</td><td>Tuesday</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Weekly Holidays -->
            <div class="holiday-card">
                <div class="holiday-header" style="background: linear-gradient(135deg, #2c7da0, #1a4a6f);">
                    <i class="fas fa-calendar-week"></i> Weekly & Special Holidays
                </div>
                <table class="holiday-table">
                    <thead>
                        <tr><th>Sl. No.</th><th>Day / Date</th><th>Holiday Type</th></tr>
                    </thead>
                    <tbody>
                        <tr><td>1</td><td>Every Sunday</td><td><span class="badge-saturday">Weekly Holiday</span></td></tr>
                        <tr><td>2</td><td>2nd Saturday of every month</td><td><span class="badge-saturday">Holiday (2nd Saturday)</span></td></tr>
                        <tr><td>3</td><td>3rd Saturday of every month</td><td><span class="badge-holiday">Compulsory Holiday (Govt. Rule)</span></td></tr>
                        <tr><td>4</td><td>4th Saturday of every month</td><td>Working Day (Normal)</td></tr>
                    </tbody>
                </table>
            </div>

            <!-- Important Note -->
            <div class="info-note">
                <i class="fas fa-info-circle"></i>
                <strong>📌 Important Note:</strong>
                <p>The above holiday list is subject to change as per government notifications. Parents and students are requested to check the school diary and website regularly for updates. 3rd Saturday holiday is applicable as per government rule. Last working day of the month will be till 5th period only.<br><br>
                <strong>Note:</strong> Holidays marked with 0 days fall on Sundays or 3rd Saturdays which are already weekly/compulsory holidays. Bakrid/Eid-ul-Zuha (May 27, 2026) falls during Summer Vacation.</p>
            </div>
        </div>
    </div>

