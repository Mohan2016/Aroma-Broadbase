<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Terms & Conditions | Aroma Broadbase</title>

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
      background: url('images/terms.jpg') center/cover no-repeat;
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
    .terms-content {
      background-color: #fff;
      padding: 50px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .terms-content h3 {
      /*color: #007bff;
      font-weight: 600;
      margin-top: 30px;*/

      color: #143252;
    font-weight: 600;
    margin-top: 30px;
    font-size: 18px;
    }
    .terms-content p {
      line-height: 1.8;
      color: #555;
      margin-bottom: 15px;
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
      <h1 class="animate__animated animate__fadeInDown">Terms & Conditions</h1>
    </div>
  </section>

  <!-- Terms Content -->
  <section class="py-5">
    <div class="container">
      <div class="terms-content wow animate__animated animate__fadeInUp">
        <h3>1. Introduction</h3>
        <p>
          Welcome to Aroma Broadbase. By accessing or using our website and services, you agree to comply with
          these Terms & Conditions. Please read them carefully before using our site.
        </p>

        <h3>2. Use of Our Website</h3>
        <p>
          You agree to use our website for lawful purposes only and not to engage in any conduct that could harm,
          disable, or interfere with our operations or other users’ experiences.
        </p>

        <h3>3. Intellectual Property Rights</h3>
        <p>
          All content, logos, images, and designs displayed on this website are owned or licensed by Aroma Broadbase.
          You may not reproduce or distribute any materials without written permission.
        </p>

        <h3>4. Product and Service Information</h3>
        <p>
          We make every effort to ensure the accuracy of product details and prices. However, errors or omissions
          may occur, and we reserve the right to correct such errors without prior notice.
        </p>

        <h3>5. Limitation of Liability</h3>
        <p>
          Aroma Broadbase shall not be liable for any damages arising from the use or inability to use our website,
          products, or services, including indirect or consequential losses.
        </p>

        <h3>6. Third-Party Links</h3>
        <p>
          Our website may contain links to external sites. We are not responsible for the content or policies of these
          third-party websites.
        </p>

        <h3>7. Privacy</h3>
        <p>
          Your use of our website is also governed by our <a href="privacy-policy.php">Privacy Policy</a>.
        </p>

        <h3>8. Changes to Terms</h3>
        <p>
          We reserve the right to modify or update these Terms & Conditions at any time. Updates will be reflected on
          this page with the revised date.
        </p>

        <h3>9. Governing Law</h3>
        <p>
          These Terms shall be governed by and construed in accordance with the laws of India.
          Any disputes will be subject to the jurisdiction of the courts in Noida, Uttar Pradesh.
        </p>

        <h3>10. Contact Information</h3>
        <p>
          If you have questions or concerns about these Terms, please contact us at:<br>
          📍 Aroma Broadbase<br>
          D-87, Vyapar Marg, D Block, Sector 2, Noida, 201301<br>
          📧 info@aromabroadbase.com<br>
          ☎️ +91 98765 43210
        </p>
      </div>
    </div>
  </section>

  <?php include('footer.php'); ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
