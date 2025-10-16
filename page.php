<!-- ✅ Request a Quote / Enquiry Form -->
<section class="quote-section py-5" style="background: linear-gradient(135deg,#007bff 0%,#00c6ff 100%);">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10 animated fadeInUp">
        <div class="card shadow-lg border-0 rounded-lg">
          <div class="card-body p-5">
            <h2 class="text-center text-primary mb-4 font-weight-bold">Request a Quote</h2>
            <p class="text-center text-muted mb-5">
              Fill in your details below, and our support team will contact you shortly.
            </p>

            <form id="quoteForm" novalidate>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label class="font-weight-bold">Full Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                  <small class="text-danger d-none" id="nameError">Please enter your name</small>
                </div>
                <div class="form-group col-md-6">
                  <label class="font-weight-bold">Email Address</label>
                  <input type="email" class="form-control" id="email" placeholder="example@email.com" required>
                  <small class="text-danger d-none" id="emailError">Enter a valid email address</small>
                </div>
                <div class="form-group col-md-6">
                  <label class="font-weight-bold">Phone Number</label>
                  <input type="text" class="form-control" id="phone" placeholder="+91 98765 43210" required>
                  <small class="text-danger d-none" id="phoneError">Enter a valid phone number</small>
                </div>
                <div class="form-group col-md-6">
                  <label class="font-weight-bold">Equipment Type</label>
                  <input type="text" class="form-control" id="equipment" placeholder="e.g. ECG Machine" required>
                  <small class="text-danger d-none" id="equipmentError">Please enter equipment type</small>
                </div>
                <div class="form-group col-12">
                  <label class="font-weight-bold">Your Message</label>
                  <textarea class="form-control" id="message" rows="4" placeholder="Describe your issue or request" required></textarea>
                  <small class="text-danger d-none" id="messageError">Please enter your message</small>
                </div>
                <div class="col-12 text-center mt-4">
                  <button type="submit" class="btn btn-primary px-5 py-2 rounded-pill font-weight-bold">
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

<!-- ✅ Success Modal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content text-center p-4">
      <div class="modal-body">
        <i class="bi bi-check-circle-fill text-success" style="font-size:60px;"></i>
        <h4 class="mt-3">Thank You!</h4>
        <p class="text-muted">Your enquiry has been submitted successfully. Our team will get back to you soon.</p>
        <button type="button" class="btn btn-primary rounded-pill px-4" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- ✅ JavaScript Validation + Auto-Close Modal -->
<script>
document.getElementById("quoteForm").addEventListener("submit", function(e) {
  e.preventDefault();

  let name = document.getElementById("name").value.trim();
  let email = document.getElementById("email").value.trim();
  let phone = document.getElementById("phone").value.trim();
  let equipment = document.getElementById("equipment").value.trim();
  let message = document.getElementById("message").value.trim();

  let nameError = document.getElementById("nameError");
  let emailError = document.getElementById("emailError");
  let phoneError = document.getElementById("phoneError");
  let equipmentError = document.getElementById("equipmentError");
  let messageError = document.getElementById("messageError");

  [nameError, emailError, phoneError, equipmentError, messageError].forEach(e => e.classList.add("d-none"));

  let valid = true;

  if (name === "") { nameError.classList.remove("d-none"); valid = false; }
  const emailPattern = /^[^\\s@]+@[^\\s@]+\\.[^\\s@]+$/;
  if (!emailPattern.test(email)) { emailError.classList.remove("d-none"); valid = false; }
  const phonePattern = /^[0-9]{10}$/;
  if (!phonePattern.test(phone.replace(/\\D/g, ''))) { phoneError.classList.remove("d-none"); valid = false; }
  if (equipment === "") { equipmentError.classList.remove("d-none"); valid = false; }
  if (message === "") { messageError.classList.remove("d-none"); valid = false; }

  if (valid) {
    $('#successModal').modal('show');
    document.getElementById("quoteForm").reset();

    // ✅ Auto close modal after 3 seconds
    setTimeout(function(){
      $('#successModal').modal('hide');
    }, 3000);
  }
});
</script>

<!-- ✅ Bootstrap 4 Dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
