<style>
    /* alumni header */
        .alumni-header {
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
        .alumni-header::before {
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
        .alumni-header h1{
            font-size: 56px;
            color:white;
            font-weight: 800;
            margin: 0 0 20px 0;
            letter-spacing: -0.5px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.3);
            animation: fadeInUp 0.8s ease;
        }
        .alumni-header p { font-size: 1.1rem; opacity: 0.9; }
        .stats-badge {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(4px);
            border-radius: 100px;
            display: inline-block;
            padding: 0.4rem 1.2rem;
            font-weight: 500;
            margin-top: 1rem;
        }
        /* Form Container */
.edit-form-wrapper {
    max-width: 700px;
    margin: 40px auto;
    padding: 30px 35px;
    border-radius: 20px;
    background: rgba(255,255,255,0.95);
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    border: 1px solid rgba(0,0,0,0.05);
    transition: 0.3s;
}

/* Title */
.edit-form-title {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #2c3e50;
    text-align: center;
}

/* Input Fields */
.edit-form-wrapper .form-control {
    border-radius: 12px;
    padding: 10px 14px;
    border: 1px solid #dcdcdc;
    transition: all 0.25s ease;
    font-size: 14px;
    background: #f9fafb;
}

/* Focus Effect */
.edit-form-wrapper .form-control:focus {
    border-color: #2a5a3a;
    box-shadow: 0 0 0 3px rgba(42,90,58,0.15);
    background: #fff;
}

/* Label Style */
.form-label-custom {
    font-weight: 600;
    font-size: 13px;
    margin-bottom: 4px;
    color: #444;
}

/* Button */
.btn-update {
    width: 100%;
    border-radius: 50px;
    padding: 10px;
    font-weight: 600;
    font-size: 16px;
    background: linear-gradient(135deg, #1f7a4c, #2ecc71);
    border: none;
    color: #fff;
    transition: 0.3s;
    margin-top: 10px;
}

.btn-update:hover {
    transform: scale(1.02);
    box-shadow: 0 10px 20px rgba(0,0,0,0.15);
}

/* Grid spacing */
.form-group {
    margin-bottom: 15px;
}

</style>
<div class="alumni-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <div class="mb-2 mb-md-0">
                <h1><i class="fas fa-graduation-cap me-2"></i> <span class="english-text">Our Alumni Edit Section</span><span class="hindi-text">हमारा गौरव, हमारे पूर्व छात्र</span><span class="bengali-text">আমাদের গর্ব, আমাদের প্রাক্তন ছাত্র</span></h1>
                <p><span class="english-text">Celebrating the legacy of Jagadish Chandra High School</span><span class="hindi-text">जगदीश चंद्र हाई स्कूल की विरासत का जश्न</span><span class="bengali-text">জগদীশ চন্দ্র হাই স্কুলের উত্তরাধিকার উদযাপন</span></p>
            </div>
          
        </div>
        <div class="stats-badge">
            <i class="fas fa-users"></i>
            <span class="english-text">Edit Alumni Data</span><span class="hindi-text">पंजीकृत पूर्व छात्र</span><span class="bengali-text">নিবন্ধিত প্রাক্তন ছাত্র</span>
        </div>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <input type="text" id="searchAlumni" class="form-control" placeholder="Search by name or mobile">
    </div>

    <div class="col-md-6">
        <select id="alumniSelect" class="form-control">
            <option value="">-- Select Alumni --</option>
            <?php foreach($alumni as $a){ ?>
                <option value="<?= $a['id']; ?>"
                    data-name="<?= $a['name']; ?>"
                    data-phone="<?= $a['phone_no']; ?>"
                    data-email="<?= $a['email']; ?>"
                    data-city="<?= $a['city']; ?>"
                    data-state="<?= $a['state']; ?>"
                    data-batch="<?= $a['batch']; ?>"
                    data-profession="<?= $a['profession']; ?>"
                    data-address="<?= $a['address']; ?>">
                    
                    <?= $a['name']; ?> (<?= $a['phone_no']; ?>)
                </option>
            <?php } ?>
        </select>
    </div>
</div>
<div class="edit-form-wrapper">

    <div class="edit-form-title">
        ✏️ Edit Alumni Details
    </div>

    <form id="editForm">

        <input type="hidden" id="alumniId">

        <div class="form-group">
            <label class="form-label-custom">Full Name</label>
            <input type="text" id="name" class="form-control" placeholder="Enter full name">
        </div>

        <div class="form-group">
            <label class="form-label-custom">Mobile Number</label>
            <input type="text" id="phone" class="form-control" placeholder="Enter mobile number">
        </div>

        <div class="form-group">
            <label class="form-label-custom">Email Address</label>
            <input type="email" id="email" class="form-control" placeholder="Enter email">
        </div>

        <div class="row">
            <div class="col-md-6 form-group">
                <label class="form-label-custom">City</label>
                <input type="text" id="city" class="form-control" placeholder="City">
            </div>

            <div class="col-md-6 form-group">
                <label class="form-label-custom">State</label>
                <input type="text" id="state" class="form-control" placeholder="State">
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 form-group">
                <label class="form-label-custom">Batch</label>
                <input type="text" id="batch" class="form-control" placeholder="Batch year">
            </div>

            <div class="col-md-6 form-group">
                <label class="form-label-custom">Profession</label>
                <input type="text" id="profession" class="form-control" placeholder="Profession">
            </div>
        </div>

        <div class="form-group">
            <label class="form-label-custom">Address</label>
            <input type="text" id="address" class="form-control" placeholder="Full address">
        </div>

        <button type="submit" class="btn btn-update">
            🚀 Update Alumni
        </button>

    </form>

</div>
<script>
    $('#alumniSelect').on('change', function(){

    let selected = $(this).find(':selected');

    $('#alumniId').val($(this).val());
    $('#name').val(selected.data('name'));
    $('#phone').val(selected.data('phone'));
    $('#email').val(selected.data('email'));
    $('#city').val(selected.data('city'));
    $('#state').val(selected.data('state'));
    $('#batch').val(selected.data('batch'));
    $('#profession').val(selected.data('profession'));
    $('#address').val(selected.data('address'));
});
$('#searchAlumni').on('keyup', function(){
    let value = $(this).val().toLowerCase();

    $("#alumniSelect option").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});
$('#editForm').on('submit', function(e){
    e.preventDefault();

    $.ajax({
        url: "<?= base_url('homeservice/update_alumini'); ?>",
        type: "POST",
        data: {
            id: $('#alumniId').val(),
            name: $('#name').val(),
            phone_no: $('#phone').val(),
            email: $('#email').val(),
            city: $('#city').val(),
            state: $('#state').val(),
            batch: $('#batch').val(),
            profession: $('#profession').val(),
            address: $('#address').val()
        },
        success: function(res){
            alert("✅ Updated successfully");
        }
    });
});
</script>