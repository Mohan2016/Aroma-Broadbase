<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Services | Aroma Broadbase</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- WOW.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Custom Styles -->
  <style>
    body {
      font-family: "Poppins", sans-serif;
      scroll-behavior: smooth;
    }
    .navbar {
      background: #ffffff;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }
    .navbar-brand img {
      height: 40px;
      margin-right: 10px;
    }
    .page-header {
      background: url('images/services.jpg') center/cover no-repeat;
      color: #fff;
      text-align: center;
      padding: 120px 0;
      position: relative;
    }
    .page-header::after {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0,0,50,0.6);
    }
    .page-header h1 {
      position: relative;
      z-index: 2;
      font-weight: 700;
      font-size: 3rem;
    }
    .section-title {
      font-weight: 700;
      color: #003366;
      text-align: center;
      margin-bottom: 50px;
    }
    .service-card {
      background: #fff;
      border: none;
      border-radius: 10px;
      padding: 30px;
      text-align: center;
      box-shadow: 0 3px 10px rgba(0,0,0,0.05);
      transition: all 0.3s ease;
    }
    .service-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    }
    .service-card i {
      font-size: 45px;
      color: #00a3c8;
      margin-bottom: 20px;
    }
    .cta-section {
      background-color: #00a3c8;
      color: white;
      text-align: center;
      padding: 80px 20px;
      border-radius: 0;
    }
    .cta-section h2 {
      font-weight: 700;
    }
    .footer {
      background-color: #0d1b2a;
      color: #ccc;
      padding: 40px 0;
      text-align: center;
    }
    .footer a {
      color: #66b2ff;
      text-decoration: none;
    }
    .footer a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <script> new WOW().init(); </script>

  <?php include('header.php'); ?>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container position-relative">
      <h1 class="animate__animated animate__fadeInDown">Our Services</h1>
    </div>
  </section>

  <!-- Services Section -->
  <section class="py-5 wow animate__animated animate__fadeInUp">
    <div class="container">
      <h2 class="section-title">What We Offer</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="service-card">
            <i class="bi bi-tools"></i>
            <h4>Medical Equipment Repair</h4>
            <p>We specialize in repairing critical medical devices like ventilators, monitors, defibrillators, and more to ensure smooth operation in healthcare facilities.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="bi bi-gear"></i>
            <h4>Preventive Maintenance</h4>
            <p>Scheduled preventive maintenance programs designed to minimize downtime and extend the lifespan of your equipment.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="bi bi-bar-chart-line"></i>
            <h4>Equipment Calibration</h4>
            <p>Our certified calibration services guarantee accuracy and compliance with international healthcare standards.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="bi bi-lightning-charge"></i>
            <h4>Emergency Repairs</h4>
            <p>We provide 24/7 emergency on-site repairs for life-saving equipment to ensure uninterrupted patient care.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="bi bi-laptop"></i>
            <h4>Software Troubleshooting</h4>
            <p>Our experts handle firmware updates, software calibration, and fault diagnosis for modern medical systems.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-card">
            <i class="bi bi-recycle"></i>
            <h4>Refurbishment & Upgrades</h4>
            <p>We refurbish and upgrade old medical equipment, giving it new life and making it compliant with current standards.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call To Action -->
  <section class="cta-section wow animate__animated animate__fadeInUp">
    <div class="container">
      <h2>Need Immediate Equipment Support?</h2>
      <p class="lead mt-3 mb-4">Our engineers are available 24/7 to keep your medical devices running flawlessly.</p>
      <a href="contact.php" class="btn btn-light btn-lg">Contact Us Now</a>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
