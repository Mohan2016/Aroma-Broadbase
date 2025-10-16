<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Request a Quote</title>
  <!-- ✅ Bootstrap 4.6.2 + jQuery (Working CDN Links) -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
/>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<section class="quote-section py-5" style="background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card shadow border-0 rounded-lg">
          <div class="card-body p-4">
            <h3 class="text-center mb-4 text-primary">Request a Quote</h3>

            <!-- ✅ Alert Box -->
            <div id="alertBox"></div>

            <form id="quoteForm" method="POST" action="quote.php">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="phone" placeholder="Phone Number" required>
                </div>
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" name="equipment" placeholder="Equipment Type" required>
                </div>
                <div class="form-group col-12">
                  <textarea class="form-control" name="message" rows="4" placeholder="Describe your issue or request" required></textarea>
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

<!-- ✅ Auto-fade Alert -->
<script>
$(document).ready(function() {
  const urlParams = new URLSearchParams(window.location.search);
  const status = urlParams.get('status');

  if (status === 'success') {
    showAlert('✅ Thank you! Your request has been submitted successfully.', 'success');
  } else if (status === 'error') {
    showAlert('❌ There was an error submitting your request. Please try again.', 'danger');
  }

  function showAlert(message, type) {
    $('#alertBox').html(`
      <div class="alert alert-${type} alert-dismissible fade show" role="alert">
        ${message}
        <button type="button" class="close" data-dismiss="alert">&times;</button>
      </div>
    `);

    setTimeout(() => {
      $('.alert').fadeOut(600, function() { $(this).alert('close'); });
    }, 5000);
  }
});
</script>

</body>
</html>
