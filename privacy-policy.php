<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Privacy Policy | Aroma Broadbase</title>

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
      background: url('images/privacy.jpg') center/cover no-repeat;
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
    .policy-content {
      background-color: #fff;
      padding: 50px;
      border-radius: 10px;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .policy-content h3 {
      /*color: #007bff;
      font-weight: 600;
      margin-top: 30px;*/

      color: #143252;
    font-weight: 600;
    margin-top: 30px;
    font-size: 18px;
    }
    .policy-content p {
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
      <h1 class="animate__animated animate__fadeInDown">Privacy Policy</h1>
    </div>
  </section>

  <!-- Privacy Policy Content -->
  <section class="py-5">
    <div class="container">
      <div class="policy-content wow animate__animated animate__fadeInUp">
        <h3>1. Introduction</h3>
        <p>
          Welcome to Aroma Broadbase. Your privacy is very important to us. This Privacy Policy explains
          how we collect, use, and protect your personal information when you visit our website or use our services.
        </p>

        <h3>2. Information We Collect</h3>
        <p>
          We may collect personal details such as your name, email address, phone number, and company information
          when you contact us, subscribe to our newsletter, or fill out forms on our site.
        </p>

        <h3>3. How We Use Your Information</h3>
        <p>
          We use your information to respond to inquiries, improve our services, send updates, and process requests.
          We never sell or share your data with third parties without your consent.
        </p>

        <h3>4. Cookies</h3>
        <p>
          Our website uses cookies to improve user experience and analyze website performance.
          You can disable cookies through your browser settings.
        </p>

        <h3>5. Data Protection</h3>
        <p>
          We implement security measures such as SSL encryption and secure data storage to protect your
          information from unauthorized access, alteration, or disclosure.
        </p>

        <h3>6. Third-Party Services</h3>
        <p>
          Our website may contain links to third-party websites or services. We are not responsible for
          their content or privacy practices. Please review their policies before providing personal information.
        </p>

        <h3>7. Your Rights</h3>
        <p>
          You have the right to access, correct, or delete your personal data at any time by contacting us at
          <a href="mailto:info@aromabroadbase.com">info@aromabroadbase.com</a>.
        </p>

        <h3>8. Policy Updates</h3>
        <p>
          We may update this Privacy Policy occasionally. Updates will be posted on this page with the revised date.
        </p>

        <h3>9. Contact Us</h3>
        <p>
          If you have questions about our Privacy Policy or data practices, please contact us at:
        </p>
        <p>
          📍 Aroma Broadbase Pvt. Ltd.<br>
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
