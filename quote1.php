<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Request a Quote</title>

  <!-- ✅ Bootstrap 4.6.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- ✅ Font Awesome 5.15.4 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-dymHYTz5Z1zB6Z0kU9xE2Uc7bB3d6fYwW8tKk6vStOIp2Vv5QqZTqEErJ5N2VJgGv5z8D0Kp0S7r1p3oM6Y5xg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- ✅ jQuery + Bootstrap Bundle -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <style>
    body {
      background-color: #f8f9fa;
    }
    .quote-section {
      background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);
      color: white;
    }
    .quote-section .card {
      border-radius: 1rem;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    }
    .input-group-text {
      background-color: #f1f1f1;
      border: none;
    }
    .alert {
      display: none;
    }
  </style>
</head>
<body>

<!-- ✅ Request a Quote Section -->
<section class="quote-section py-5">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">

        <div class="text-center mb-4">
          <h2 class="fw-bold">Request a Quote</h2>
          <p>Need repair or maintenance for your medical equipment?  
          Fill out the form and our service team will contact you shortly.</p>
        </div>

        <!-- ✅ Alert Messages -->
        <div id="alertSuccess" class="alert alert-success text-center" role="alert">
          <i class="fas fa-check-circle"></i> Thank you! Your request has been submitted successfully.
        </div>
        <div id="alertError" class="alert alert-danger text-center" role="alert">
          <i class="fas fa-exclamation-triangle"></i> Please fill out all required fields correctly.
        </div>

        <div class="card">
          <div class="card-body p-4">
            <form id="quoteForm">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                    </div>
                    <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-phone-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" id="phone" placeholder="Phone Number" required>
                  </div>
                </div>

                <div class="form-group col-md-6">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-tools"></i></span>
                    </div>
                    <input type="text" class="form-control" id="equipment" placeholder="Equipment Type" required>
                  </div>
                </div>

                <div class="form-group col-12">
                  <textarea class="form-control" id="message" rows="4" placeholder="Describe your issue or request" required></textarea>
                </div>

                <div class="col-12 text-center mt-3">
                  <button type="submit" class="btn btn-light px-4 py-2 rounded-pill">
                    <i class="fas fa-paper-plane"></i> Submit Request
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

<!-- ✅ JavaScript Validation + Fade Alert -->
<script>
  $(document).ready(function() {
    $("#quoteForm").on("submit", function(e) {
      e.preventDefault();

      // Simple form validation
      let isValid = true;
      $("#quoteForm input, #quoteForm textarea").each(function() {
        if ($(this).val().trim() === "") isValid = false;
      });

      if (isValid) {
        $("#alertSuccess").fadeIn().delay(5000).fadeOut(); // Success alert fades out after 5s
        $("#quoteForm")[0].reset();
      } else {
        $("#alertError").fadeIn().delay(5000).fadeOut(); // Error alert fades out after 5s
      }
    });
  });
</script>

</body>
</html>
