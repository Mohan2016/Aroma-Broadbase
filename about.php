<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>About Us | Aroma Broadbase</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- WOW.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>
  <script> new WOW().init(); </script>

  <?php include('header.php'); ?>

  <!-- Page Header -->
  <section class="page-header">
    <div class="container position-relative">
      <h1 class="animate__animated animate__fadeInDown">About Aroma Broadbase</h1>
    </div>
  </section>

  <!-- Company Overview -->
  <section class="content-section sect_about wow animate__animated animate__fadeInUp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="images/slider2.jpg" alt="About Us" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-lg-6">
          <h2 class="section-title text-start">Who We Are</h2>
          <p>Aroma Broadbase is a leading biomedical equipment repair and maintenance provider. With years of experience, we specialize in ensuring healthcare devices function accurately, safely, and efficiently. Our certified engineers offer fast turnaround, precise diagnostics, and cost-effective solutions to hospitals and clinics.</p>
          <p>We are committed to maintaining high standards in every service — from preventive maintenance to emergency repairs.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission & Vision -->
  <section class="content-section bg-light wow animate__animated animate__fadeInUp">
    <div class="container">
      <h2 class="section-title">Our Mission & Vision</h2>
      <div class="row g-4">
        <div class="col-md-6">
          <div class="mission-box text-center">
            <i class="bi bi-bullseye"></i>
            <h4>Our Mission</h4>
            <p>To deliver reliable, efficient, and affordable medical equipment repair services ensuring healthcare providers can operate without interruptions.</p>
          </div>
        </div>
        <div class="col-md-6">
          <div class="mission-box text-center">
            <i class="bi bi-eye"></i>
            <h4>Our Vision</h4>
            <p>To be the most trusted biomedical service partner, advancing healthcare technology through innovation and expertise.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Team Section -->
  <section class="content-section wow animate__animated animate__fadeInUp">
    <div class="container">
      <h2 class="section-title">Meet Our Team</h2>
      <div class="row g-4">
        <div class="col-md-4 text-center">
          <div class="team-member">
            <img src="images/team1.png" class="img-fluid mb-3" alt="Team Member 1">
            <h5>Rahul Mehra</h5>
            <p class="text-muted">Chief Engineer</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="team-member">
            <img src="images/team3.jpg" class="img-fluid mb-3" alt="Team Member 2">
            <h5>Priya Sharma</h5>
            <p class="text-muted">Operations Head</p>
          </div>
        </div>
        <div class="col-md-4 text-center">
          <div class="team-member">
            <img src="images/team2.jpg" class="img-fluid mb-3" alt="Team Member 3">
            <h5>Vikram Singh</h5>
            <p class="text-muted">Biomedical Technician</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
