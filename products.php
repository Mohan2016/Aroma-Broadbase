<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Products | Aroma Broadbase</title>

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
      background: url('images/product.jpg') center/cover no-repeat;
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
    .product-card {
      background: #fff;
      border: 1px solid #eee;
      border-radius: 10px;
      padding: 15px;
      text-align: center;
      transition: all 0.3s ease;
      height: 100%;
    }
    .product-card:hover {
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      transform: translateY(-5px);
    }
    .product-card img {
      width: 100%;
      height: 220px;
      object-fit: cover;
      border-radius: 10px;
    }
    .product-card h5 {
      font-size: 1.1rem;
      font-weight: 600;
      margin-top: 15px;
      color: #003366;
    }
    .product-card p {
      font-size: 0.95rem;
      color: #555;
    }
    .btn-buy {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 25px;
      border-radius: 30px;
      margin-top: 10px;
      transition: 0.3s;
    }
    .btn-buy:hover {
      background-color: #0056b3;
    }
    .filter-buttons {
      text-align: center;
      margin-bottom: 40px;
    }
    .filter-buttons button {
      margin: 5px;
      border: none;
      background-color: #f1f1f1;
      color: #333;
      padding: 10px 20px;
      border-radius: 20px;
      transition: 0.3s;
    }
    .filter-buttons button.active,
    .filter-buttons button:hover {
      background-color: #007bff;
      color: white;
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
      <h1 class="animate__animated animate__fadeInDown">Our Products</h1>
    </div>
  </section>

  <!-- Product Filter Buttons -->
  <section class="py-5 wow animate__animated animate__fadeInUp">
    <div class="container">
      <h2 class="section-title">Explore Our Equipment</h2>
      <div class="filter-buttons">
        <button class="active" onclick="filterProducts('all')">All</button>
        <button onclick="filterProducts('diagnostic')">Diagnostic</button>
        <button onclick="filterProducts('surgical')">Surgical</button>
        <button onclick="filterProducts('monitoring')">Monitoring</button>
      </div>

      <!-- Product Grid -->
      <div class="row g-4" id="productList">
        <div class="col-md-4 product-item diagnostic">
          <div class="product-card">
            <img src="images/ecg.jpg" alt="ECG Machine">
            <h5>ECG Machine</h5>
            <p>High-precision ECG device designed for accurate cardiac monitoring.</p>
            <!-- <button class="btn-buy">Buy Now</button> -->
          </div>
        </div>
        <div class="col-md-4 product-item surgical">
          <div class="product-card">
            <img src="images/Surgical.jpg" alt="Surgical Lamp">
            <h5>Surgical Lamp</h5>
            <p>LED-powered shadowless operation light with adjustable intensity.</p>
          </div>
        </div>
        <div class="col-md-4 product-item monitoring">
          <div class="product-card">
            <img src="images/Monitor.jpg" alt="Patient Monitor">
            <h5>Patient Monitor</h5>
            <p>Multi-parameter patient monitor suitable for ICU and OT use.</p>
          </div>
        </div>
        <div class="col-md-4 product-item diagnostic">
          <div class="product-card">
            <img src="images/Ultrasound.jpg" alt="Ultrasound Machine">
            <h5>Ultrasound Machine</h5>
            <p>Portable ultrasound system offering clear imaging and fast scanning.</p>
          </div>
        </div>
        <div class="col-md-4 product-item surgical">
          <div class="product-card">
            <img src="images/Defibrillator.jpg" alt="Defibrillator">
            <h5>Defibrillator</h5>
            <p>Reliable life-saving equipment for cardiac emergencies.</p>
          </div>
        </div>
        <div class="col-md-4 product-item monitoring">
          <div class="product-card">
            <img src="images/Infusion.jpg" alt="Infusion Pump">
            <h5>Infusion Pump</h5>
            <p>Accurate and easy-to-operate pump designed for precise dosage delivery.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

 <?php include('footer.php'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Product Filter Script -->
  <script>
    function filterProducts(category) {
      const items = document.querySelectorAll(".product-item");
      const buttons = document.querySelectorAll(".filter-buttons button");
      
      buttons.forEach(btn => btn.classList.remove("active"));
      event.target.classList.add("active");

      items.forEach(item => {
        if (category === "all" || item.classList.contains(category)) {
          item.style.display = "block";
        } else {
          item.style.display = "none";
        }
      });
    }
  </script>
</body>
</html>
