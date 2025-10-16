<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Us | Aroma Broadbase</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- WOW.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!-- Custom CSS -->
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background-color: #f8f9fa;
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
      background: url('images/contact.jpg') center/cover no-repeat;
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
    .contact-info {
      background-color: #fff;
      border-radius: 10px;
      padding: 30px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .contact-info i {
      font-size: 2rem;
      color: #007bff;
      margin-bottom: 15px;
    }
    .contact-info h5 {
      font-weight: 600;
      margin-bottom: 10px;
    }
    .contact-form {
      background-color: #fff;
      padding: 40px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .form-control {
      border-radius: 8px;
      box-shadow: none;
    }
    .btn-send {
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 30px;
      padding: 10px 25px;
      transition: 0.3s;
    }
    .btn-send:hover {
      background-color: #0056b3;
    }
    iframe {
      border: none;
      border-radius: 10px;
      width: 100%;
      height: 350px;
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
      <h1 class="animate__animated animate__fadeInDown">Contact Us</h1>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="py-5">
    <div class="container">
      <div class="row g-5">
        <!-- Contact Information -->
        <div class="col-lg-4 wow animate__animated animate__fadeInLeft">
          <div class="contact-info">
            <div class="text-center mb-4">
              <i class="bi bi-geo-alt"></i>
              <h5>Our Office</h5>
              <p>D-87, Vyapar Marg, D Block, Sector 2, Noida, 201301</p>
            </div>
            <div class="text-center mb-4">
              <i class="bi bi-envelope"></i>
              <h5>Email Us</h5>
              <p>info@aromabroadbase.com</p>
            </div>
            <div class="text-center mb-4">
              <i class="bi bi-telephone"></i>
              <h5>Call Us</h5>
              <p>+91 98765 43210</p>
            </div>
            <div class="text-center">
              <i class="bi bi-clock"></i>
              <h5>Working Hours</h5>
              <p>Mon - Sat: 9:00 AM - 6:00 PM</p>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="col-lg-8 wow animate__animated animate__fadeInRight">
          <div class="contact-form">
            <h3 class="mb-4 text-primary">Send Us a Message</h3>
            <form id="contactForm">
              <div class="row">
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="email" class="form-control" placeholder="Your Email" required>
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="Phone Number">
                </div>
                <div class="col-md-6 mb-3">
                  <input type="text" class="form-control" placeholder="Subject">
                </div>
                <div class="col-12 mb-3">
                  <textarea class="form-control" rows="5" placeholder="Your Message..." required></textarea>
                </div>
                <div class="col-12 text-end">
                  <button type="submit" class="btn-send">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- Google Map -->
      <div class="mt-5 wow animate__animated animate__fadeInUp">
        <iframe 
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14014.674937482923!2d77.382756!3d28.535516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5369fbbf5e9%3A0xa5cbe597abcb68b0!2sNoida!5e0!3m2!1sen!2sin!4v1696591234567" 
          allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Form Submit Script -->
  <script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
      e.preventDefault();
      alert("✅ Your message has been sent successfully!");
      this.reset();
    });
  </script>
</body>
</html>
