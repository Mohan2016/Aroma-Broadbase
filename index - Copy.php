<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aroma Broadbase | Medical Equipment Repair & Maintenance</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- Poppins font-family -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">


  <!-- WOW.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

  <!-- Custom css here -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
  <!-- Initialize WOW.js -->
  <script>
    new WOW().init();
  </script>

  <?php include('header.php'); ?>

  <!-- ===== Hero Slider ===== -->
  <section class="slider_box">
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url('images/slider1.jpg');">
        <div class="carousel-caption text-center">
          <h1 class="animate__animated animate__fadeInDown">Medical Equipment Repair Experts</h1>
          <p class="animate__animated animate__fadeInUp">We keep your healthcare devices running flawlessly.</p>
          <a href="contact.php" class="btn btn-primary mt-3">Request Service</a>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('images/slider2.jpg');">
        <div class="carousel-caption text-center">
          <h1 class="animate__animated animate__fadeInDown">Trusted Maintenance Solutions</h1>
          <p class="animate__animated animate__fadeInUp">Ensure safety, precision, and performance of all medical tools.</p>
          <a href="services.php" class="btn btn-primary mt-3">View Services</a>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url('images/slider3.jpg');">
        <div class="carousel-caption text-center">
          <h1 class="animate__animated animate__fadeInDown">On-site & Off-site Support</h1>
          <p class="animate__animated animate__fadeInUp">Quick turnaround and reliable diagnostics by professionals.</p>
          <a href="about.php" class="btn btn-primary mt-3">Learn More</a>
        </div>
      </div>
    </div>

    <!-- Controls -->
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  </section>


  <!-- USP Section -->
<section class="py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold text-primary animate__animated animate__fadeInDown">
        Medical Equipment Repair & Maintenance
      </h2>
      <p class="text-muted animate__animated animate__fadeInUp">
        Trusted service and precision maintenance to keep your medical devices performing at their best.
      </p>
    </div>

    <div class="row g-4">
      <!-- 1 -->
      <div class="col-md-6 col-lg-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-person-badge"></i></div>
          <h5 class="fw-bold">Certified Technicians</h5>
          <p class="text-muted">
            Our factory-trained engineers provide expert repair and calibration for all major medical devices.
          </p>
        </div>
      </div>

      <!-- 2 -->
      <div class="col-md-6 col-lg-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-clock-history"></i></div>
          <h5 class="fw-bold">Quick Turnaround</h5>
          <p class="text-muted">
            We prioritize your uptime — delivering fast, reliable repairs with minimal equipment downtime.
          </p>
        </div>
      </div>

      <!-- 3 -->
      <div class="col-md-6 col-lg-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.3s">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-wallet2"></i></div>
          <h5 class="fw-bold">Affordable Plans</h5>
          <p class="text-muted">
            Flexible maintenance contracts that suit your budget and ensure continuous performance.
          </p>
        </div>
      </div>

      <!-- 4 -->
      <div class="col-md-6 col-lg-3 text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.4s">
        <div class="p-4 bg-white rounded shadow-sm h-100">
          <div class="mb-3 text-primary fs-1"><i class="bi bi-tools"></i></div>
          <h5 class="fw-bold">Genuine Parts</h5>
          <p class="text-muted">
            Only original spare parts used — ensuring reliability, durability, and safety in every repair.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- ===== About Section ===== -->
  <section class="py-5 sect_about wow animate__animated animate__fadeInUp">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="images/slider2.jpg" alt="About Aroma Broadbase" class="img-fluid rounded shadow-sm">
        </div>
        <div class="col-lg-6">
          <h2 class="section-title text-start">About Aroma Broadbase</h2>
          <p>We specialize in the repair, maintenance, and calibration of medical and surgical equipment. Our engineers ensure precision, compliance, and reliability across every service we deliver.</p>
          <ul>
            <li>✔ Certified biomedical technicians</li>
            <li>✔ Quick response and turnaround</li>
            <li>✔ Affordable maintenance contracts</li>
          </ul>
          <a href="about.php" class="btn btn-primary mt-3">Learn More</a>
        </div>
      </div>
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


  <!-- ===== Services Section ===== -->
  <section class="py-5 bg-light wow animate__animated animate__fadeInUp">
    <div class="container">
      <h2 class="section-title">Our Services</h2>
      <div class="row g-4">
        <div class="col-md-4">
          <div class="service-box text-center">
            <i class="bi bi-tools"></i>
            <h5>Equipment Repair</h5>
            <p>Comprehensive repair of diagnostic, laboratory, and hospital equipment with certified precision.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box text-center">
            <i class="bi bi-gear-fill"></i>
            <h5>Preventive Maintenance</h5>
            <p>Scheduled maintenance ensures device longevity and avoids costly breakdowns.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box text-center">
            <i class="bi bi-lightning-charge"></i>
            <h5>Emergency Support</h5>
            <p>Round-the-clock technical assistance to keep your hospital operations uninterrupted.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



<!-- Client Testimonials -->
<section class="testimonials-section py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold text-primary mb-4 animate__animated animate__fadeInDown">
      What Our Clients Say
    </h2>
    <p class="text-muted mb-5 animate__animated animate__fadeInUp">
      Hear from hospitals and healthcare professionals who trust our repair and maintenance services.
    </p>

    <!-- Swiper Slider -->
    <div class="swiper testimonialSwiper">
      <div class="swiper-wrapper">
        <!-- Testimonial 1 -->
        <div class="swiper-slide">
          <div class="testimonial-card p-4 bg-white shadow rounded-3">
            <img src="assets/images/clients/client1.jpg" alt="Client 1" class="rounded-circle mb-3 client-img">
            <h5 class="fw-bold text-dark">Dr. Neha Sharma</h5>
            <p class="text-muted mb-1">City Care Hospital</p>
            <div class="stars mb-3">⭐⭐⭐⭐⭐</div>
            <p class="testimonial-text text-secondary">
              “Excellent service and quick response time. Our ECG and X-Ray machines are working perfectly thanks to their regular maintenance.”
            </p>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="swiper-slide">
          <div class="testimonial-card p-4 bg-white shadow rounded-3">
            <img src="assets/images/clients/client2.jpg" alt="Client 2" class="rounded-circle mb-3 client-img">
            <h5 class="fw-bold text-dark">Mr. Rajesh Kumar</h5>
            <p class="text-muted mb-1">Metro Heart Institute</p>
            <div class="stars mb-3">⭐⭐⭐⭐⭐</div>
            <p class="testimonial-text text-secondary">
              “Their technicians are well-trained and professional. Maintenance scheduling is always on time and cost-effective.”
            </p>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="swiper-slide">
          <div class="testimonial-card p-4 bg-white shadow rounded-3">
            <img src="assets/images/clients/client3.jpg" alt="Client 3" class="rounded-circle mb-3 client-img">
            <h5 class="fw-bold text-dark">Dr. Priya Verma</h5>
            <p class="text-muted mb-1">LifeLine Clinic</p>
            <div class="stars mb-3">⭐⭐⭐⭐⭐</div>
            <p class="testimonial-text text-secondary">
              “Reliable and trustworthy team. They repaired our ultrasound equipment quickly with genuine parts.”
            </p>
          </div>
        </div>

        <!-- Testimonial 4 -->
        <div class="swiper-slide">
          <div class="testimonial-card p-4 bg-white shadow rounded-3">
            <img src="assets/images/clients/client3.jpg" alt="Client 3" class="rounded-circle mb-3 client-img">
            <h5 class="fw-bold text-dark">Dr. Priya Verma</h5>
            <p class="text-muted mb-1">LifeLine Clinic</p>
            <div class="stars mb-3">⭐⭐⭐⭐⭐</div>
            <p class="testimonial-text text-secondary">
              “Reliable and trustworthy team. They repaired our ultrasound equipment quickly with genuine parts.”
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Request a Quote / Enquiry Form -->
<section class="quote-section py-5" style="background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);">
  <div class="container">
    <div class="row align-items-center">
      <!-- Left Text -->
      <div class="col-lg-5 text-white mb-4 mb-lg-0 animate__animated animate__fadeInLeft">
        <h2 class="fw-bold mb-3">Request a Quote</h2>
        <p class="lead">
          Need repair or maintenance for your medical equipment?  
          Fill out the form and our service team will contact you shortly.
        </p>
        <ul class="list-unstyled mt-4">
          <li><i class="bi bi-telephone-fill me-2"></i> +91 98765 43210</li>
          <li><i class="bi bi-envelope-fill me-2"></i> support@medicareequip.com</li>
          <li><i class="bi bi-geo-alt-fill me-2"></i> Noida, Uttar Pradesh, India</li>
        </ul>
      </div>

      <!-- Form Section -->
      <div class="col-lg-7 animate__animated animate__fadeInRight">
        <div class="card shadow border-0 rounded-4">
          <div class="card-body p-4">
            <form id="quoteForm">
              <div class="row g-3">
                <div class="col-md-6">
                  <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6">
                  <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number" required>
                </div>
                <div class="col-md-6">
                  <input type="text" class="form-control" id="equipment" placeholder="Equipment Type" required>
                </div>
                <div class="col-12">
                  <textarea class="form-control" id="message" rows="4" placeholder="Describe your issue or request" required></textarea>
                </div>
                <div class="col-12 text-center mt-3">
                  <button type="submit" class="btn btn-primary px-4 py-2 rounded-pill">
                    Submit Request
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>






<!-- Trusted by Hospitals Section -->
<section class="trusted-section py-5 bg-white">
  <div class="container text-center">
    <h2 class="fw-bold text-primary mb-4 animate__animated animate__fadeInDown">
      Trusted by Leading Hospitals & Clinics
    </h2>
    <p class="text-muted mb-5 animate__animated animate__fadeInUp">
      We are proud to serve renowned healthcare institutions across the nation with reliable equipment repair and maintenance services.
    </p>

    <!-- Swiper Slider -->
    <div class="swiper trustedSwiper">
      <div class="swiper-wrapper">
        <!-- Logo Items -->
        <div class="swiper-slide"><img src="images/team1.png" alt="Hospital 1" class="img-fluid logo-item"></div>
        <div class="swiper-slide"><img src="images/team1.png" alt="Hospital 2" class="img-fluid logo-item"></div>
        <div class="swiper-slide"><img src="images/team1.png" alt="Hospital 3" class="img-fluid logo-item"></div>
        <div class="swiper-slide"><img src="images/team1.png" alt="Hospital 4" class="img-fluid logo-item"></div>
        <div class="swiper-slide"><img src="images/team1.png" alt="Hospital 5" class="img-fluid logo-item"></div>
        <div class="swiper-slide"><img src="images/team1.png" alt="Hospital 6" class="img-fluid logo-item"></div>
      </div>
    </div>
  </div>
</section>


  <!-- ===== Call To Action ===== -->
  <section class="cta-section wow animate__animated animate__fadeIn">
    <div class="container">
      <h2>Need Your Medical Equipment Repaired?</h2>
      <p>Contact our certified team today for fast, affordable, and reliable service.</p>
      <a href="contact.php" class="btn btn-light mt-3">Contact Us</a>
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
  

<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  const swiper = new Swiper(".trustedSwiper", {
    slidesPerView: 5,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: { slidesPerView: 2 },
      576: { slidesPerView: 3 },
      768: { slidesPerView: 4 },
      992: { slidesPerView: 5 },
    },
  });
</script>

<!-- Swiper Initialization -->
<script>
  const testimonialSwiper = new Swiper(".testimonialSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 },
    },
  });
</script>


<script>
document.getElementById("quoteForm").addEventListener("submit", async function(e) {
  e.preventDefault();
  
  const data = {
    name: document.getElementById("name").value,
    email: document.getElementById("email").value,
    phone: document.getElementById("phone").value,
    equipment: document.getElementById("equipment").value,
    message: document.getElementById("message").value,
  };

  const response = await fetch("http://localhost:5000/api/quotes", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data)
  });

  if (response.ok) {
    alert("✅ Your request has been submitted successfully!");
    document.getElementById("quoteForm").reset();
  } else {
    alert("❌ Something went wrong. Please try again.");
  }
});
</script>



</body>
</html>
