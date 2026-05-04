
  
  <!-- Additional custom styles for modern attractive design -->
  <style>

    /* Hero section / contact header */
    .contact-header {
      background: linear-gradient(120deg, #0f2c3b 0%, #1b4f6e 100%);
      padding: 2.5rem 0;
      text-align: center;
      margin-bottom: 3rem;
      position: relative;
      overflow: hidden;
    }
    .contact-header h1 {
      font-size: 3rem;
      font-weight: 700;
      color: white;
      margin-bottom: 0.5rem;
      text-shadow: 2px 2px 8px rgba(0,0,0,0.1);
    }
    .contact-header p {
      font-size: 1.1rem;
      color: rgba(255,255,255,0.9);
      max-width: 600px;
      margin: 0 auto;
    }
    .contact-header::after {
      content: "✉️";
      position: absolute;
      bottom: -20px;
      right: 20px;
      font-size: 120px;
      opacity: 0.08;
      pointer-events: none;
    }

    /* Main contact card container */
    .contact-card {
      background: white;
      border-radius: 2rem;
      overflow: hidden;
      box-shadow: 0 35px 60px -25px rgba(0, 0, 0, 0.2);
      margin-bottom: 3rem;
      transition: transform 0.3s ease;
    }
    .contact-card:hover {
      transform: translateY(-5px);
    }

    /* Image column styling */
    .contact-image {
      height: 100%;
      min-height: 450px;
      /* background: linear-gradient(135deg, #ffe6d5, #ffd9c4); */
      position: relative;
      overflow: hidden;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .contact-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    .contact-image:hover img {
      transform: scale(1.02);
    }
    /* decorative overlay on image */
    .image-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      /* background: linear-gradient(45deg, rgba(255,180,71,0.1), rgba(26,74,111,0.1)); */
      pointer-events: none;
    }

    /* Right side details panel */
    .contact-details {
      padding: 2.8rem 2.5rem;
      height: 100%;
      background: white;
    }
    .section-badge {
      display: inline-block;
      background: #ffb34720;
      color: #c96f0e;
      font-weight: 600;
      font-size: 0.85rem;
      padding: 0.35rem 1rem;
      border-radius: 40px;
      margin-bottom: 1.2rem;
      letter-spacing: 0.3px;
    }
    .contact-details h2 {
      font-size: 2rem;
      font-weight: 700;
      color: #0a2b3e;
      margin-bottom: 1rem;
    }
    .divider {
      width: 70px;
      height: 4px;
      background: linear-gradient(90deg, #ffb347, #ff8c2e);
      border-radius: 4px;
      margin: 1rem 0 1.8rem 0;
    }
    .info-list {
      margin-top: 1.5rem;
    }
    .info-item {
      display: flex;
      align-items: flex-start;
      gap: 1.2rem;
      margin-bottom: 2rem;
      padding: 0.5rem 0;
      border-bottom: 1px solid #f0f0f0;
      transition: 0.2s;
    }
    .info-item:hover {
      transform: translateX(8px);
      border-bottom-color: #ffb347;
    }
    .info-icon {
      width: 52px;
      height: 52px;
      background: linear-gradient(145deg, #ffecd9, #ffe2cb);
      border-radius: 60px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.8rem;
      color: #e67e22;
      box-shadow: 0 6px 12px rgba(0,0,0,0.05);
      transition: 0.2s;
    }
    .info-item:hover .info-icon {
      background: #ffb347;
      color: white;
      transform: scale(1.02);
    }
    .info-content h4 {
      font-size: 1.7rem;
      font-weight: 700;
      color: #2c3e50;
      margin-bottom: 0.3rem;
    }
    .info-content p, .info-content a {
      font-size: 1.5rem;
      color: #5a6e7c;
      text-decoration: none;
      font-weight: 500;
      transition: 0.2s;
      display: inline-block;
    }
    .info-content a:hover {
      color: #ff8c2e;
      text-decoration: underline;
    }
    .social-links {
      margin-top: 2rem;
      padding-top: 0.8rem;
    }
    .social-links h4 {
      font-size: 1rem;
      font-weight: 600;
      color: #1f3b4a;
      margin-bottom: 1rem;
    }
    .social-icons a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 42px;
      height: 42px;
      background: #f5f7fa;
      border-radius: 50%;
      color: #1a4a6f;
      font-size: 1.2rem;
      margin-right: 10px;
      transition: 0.25s;
      text-decoration: none;
    }
    .social-icons a:hover {
      background: #ffb347;
      color: white;
      transform: translateY(-4px);
      box-shadow: 0 8px 16px rgba(0,0,0,0.1);
    }
    /* map placeholder or small map note */
    .map-note {
      background: #faf9ff;
      border-radius: 1.2rem;
      padding: 0.8rem 1rem;
      margin-top: 1.2rem;
      display: flex;
      align-items: center;
      gap: 10px;
      font-size: 1.2rem;
      border: 1px solid #ffe0bf;
    }
    .map-note i {
      font-size: 1.4rem;
      color: #ff9142;
    }

   
    @media (max-width: 768px) {
      .contact-details {
        padding: 2rem 1.5rem;
      }
      .contact-header h1 {
        font-size: 2rem;
      }
      .info-item {
        gap: 0.8rem;
      }
      .info-icon {
        width: 45px;
        height: 45px;
        font-size: 1.4rem;
      }
    }
    .btn-contact-custom {
      background: transparent;
      border: 2px solid #ffb347;
      color: #ffb347;
      border-radius: 50px;
      padding: 0.5rem 1.5rem;
      font-weight: 600;
      transition: 0.25s;
      display: inline-block;
      margin-top: 0.5rem;
    }
    .btn-contact-custom:hover {
      background: #ffb347;
      color: #0a2b3e;
      text-decoration: none;
    }
    /* animate.css enhancements */
    .wow {
      visibility: visible;
    }
  </style>




<!-- Contact Header Section -->
<section class="contact-header wow fadeInDown" data-wow-duration="1s">
  <div class="container">
    <h1>Get in Touch</h1>
    <p>We'd love to hear from you! Reach out through any of the channels below. Our team is here to assist you.</p>
  </div>
</section>

<!-- Main Contact Section Without Form: Image + Details -->
<div class="container mb-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="contact-card wow zoomIn" data-wow-duration="0.7s">
        <div class="row no-gutters">
          <!-- Left column: col-md-6 with image import -->
          <div class="col-md-6">
            <div class="contact-image">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3683.647367782935!2d86.4708093743538!3d22.592288532250247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f61d91e5a0dfb9%3A0x507f0525ec2fd8b4!2sJ.%20C.%20HIGH%20SCHOOL!5e0!3m2!1sen!2sin!4v1777448954873!5m2!1sen!2sin" width="100%" height="200px" style="border:0;" allowfullscreen="" object-fit:cover; loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  
              <!-- importing high quality illustration / office image from reliable source, also we use external representation but better to embed attractive contact svg/vector -->
             
              <div class="image-overlay"></div>
            </div>
          </div>
          <!-- Right column: col-md-6 with contact details like email, phone, address -->
          <div class="col-md-6">
            <div class="contact-details">
              <div class="section-badge">
                <i class="fa fa-commenting-o"></i> Connect With Us
              </div>
              <h2>Contact <span style="color:#ff9142;">Information</span></h2>
              <div class="divider"></div>
              <p style="color:#5f7f9c; margin-bottom: 1rem;">We're available during School hours. Feel free to drop a message or give us a call.</p>
              
              <div class="info-list">
                <!-- Email ID -->
                <div class="info-item wow fadeInRight" data-wow-delay="0.1s">
                  <div class="info-icon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <div class="info-content">
                    <h4>Email Us</h4>
                    <a href="mailto:helpdesk@jchighschool.in">helpdesk@jchighschool.in</a><br>
                    <a href="mailto:support@rcsindia.co.in" >support@rcsindia.co.in</a>
                  </div>
                </div>
                
                <!-- Contact Number / Phone -->
                <div class="info-item wow fadeInRight" data-wow-delay="0.2s">
                  <div class="info-icon">
                    <i class="fa fa-phone"></i>
                  </div>
                  <div class="info-content">
                    <h4>Call Us</h4>
                    <a href="tel:+919234676905">+91-9234676905</a><br>
                    <!-- <span style="font-size:0.85rem; color:#7f8c8d;">Toll Free: 1800-123-HELP</span> -->
                  </div>
                </div>
                
                <!-- Address with location -->
                <div class="info-item wow fadeInRight" data-wow-delay="0.3s">
                  <div class="info-icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <div class="info-content">
                    <h4>School Address</h4>
                    <p>Jagadish Chandra High School<br>
                    Location: Gopalpur North, College Road, Ghatsila, East Singhbhum, Jharkhand - 832303.<br>
                    India</p>
                  </div>
                </div>
              </div>
              
              <!-- additional subtle info: working hours with icons -->
              <div class="map-note">
                <i class="fa fa-clock-o"></i>
                <span><strong>Working Hours:</strong>April-June: 7:00 AM - 1:00 PM</span>
                <i class="fa fa-clock-o"></i> <span><strong>Working Hours:</strong>July-March: 9:00 AM - 3:00 PM</span>
              </div>
              
              <!-- social media handles (optional but modern) -->
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Optional: location snippet or additional cards (Google map placeholder not actual form) -->
<!-- <div class="container mb-5">
  <div class="row">
    <div class="col-md-12 text-center wow fadeInUp">
      <div class="bg-white p-4 rounded-lg shadow-sm" style="border-radius: 28px; background: white; box-shadow: 0 10px 25px -12px rgba(0,0,0,0.1);">
        <i class="fa fa-globe" style="font-size: 2rem; color:#ff9142;"></i>
        <h5 class="mt-2" style="font-weight:600;">Our Presence Across India</h5>
        <p style="color:#6082a0;">Regional offices in Mumbai, Bangalore, Kolkata & Chennai. <br> For specific queries, reach us via email or phone.</p>
      </div>
    </div>
  </div>
</div> -->
<!-- Initialize WOW animations for attractive scroll effects -->
<script>
  $(document).ready(function() {
    // Initialize WOW js for scroll animations (attractive)
    new WOW().init();
    
    // SlickNav for responsive menu (optional)
    $('.navbar-nav').slicknav({
      prependTo: '.navbar-custom .container',
      label: 'Menu',
      brand: 'RCS India'
    });
    
    // Additional small effect for demo (elegant)
    $('.info-item').each(function(index) {
      $(this).css('animation-delay', (index * 0.08) + 's');
    });
  });
</script>

<!-- Custom style overrides to ensure responsiveness and proper image scaling -->
<style>
  /* ensure no horizontal scroll */
  .no-gutters {
    margin-right: 0;
    margin-left: 0;
  }
  .contact-image img {
    object-fit: cover;
    
  }
  .rounded-lg {
    border-radius: 1.2rem;
  }
  .navbar-toggler-icon {
    background-image: none;
  }
  .navbar-toggler {
    border: 1px solid rgba(255,255,255,0.3);
  }
  /* maintain smooth hover transitions */
  .info-icon i {
    transition: 0.2s;
  }
  .info-item:hover .info-icon i {
    transform: scale(1.1);
  }
  .contact-details h2 span {
    background: linear-gradient(135deg, #ffb347, #ff7e2e);
    background-clip: text;
    -webkit-background-clip: text;
    color: transparent;
  }
  .btn-contact-custom {
    transition: 0.3s;
  }
  /* responsive touch */
  @media (max-width: 767px) {
    .contact-image {
      min-height: 280px;
    }
    .contact-details {
      padding: 1.8rem;
    }
    .contact-header h1 {
      font-size: 2rem;
    }
    .info-item {
      margin-bottom: 1.6rem;
    }
  }
  /* wow animate fallback */
  .wow {
    visibility: visible !important;
  }
</style>
