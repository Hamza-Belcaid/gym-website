
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
	    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css" />
    <title>Web Design Mastery | Fitclub</title>
  </head>
  <body>
<?php
include 'sidebar.php';
?>

<!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Contact</h1>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Contact Start -->
    <div class="container-fluid p-5">
        <div class="mb-5 text-center">
            <h5 class="text-primary text-uppercase">Contact Us</h5>
            <h1 class="display-3 text-uppercase mb-0" style="color: #fff;">Get In Touch</h1>
        </div>
        <div class="row g-5 mb-5">
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-map-marker-alt fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Visit Us</h5>
                    <p class="text-secondary mb-0">38 AV.Hassan II, Kénitra, Morocco</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-envelope fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Email Us</h5>
                    <p class="text-secondary mb-0">FitClub@gmail.com</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="d-flex flex-column align-items-center bg-dark rounded text-center py-5 px-3">
                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                        <i class="fa fa-phone fs-4 text-white"></i>
                    </div>
                    <h5 class="text-uppercase text-primary">Call Us</h5>
                    <p class="text-secondary mb-0">+212 558 5016 30</p>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-lg-6">
    <div class="bg-dark p-5">
        <form id="contactForm">
            <div class="row g-3">
                <div class="col-6">
                    <input type="text" id="name" class="form-control bg-light border-0 px-4" placeholder="Your Name" style="height: 55px;" required>
                </div>
                <div class="col-6">
                    <input type="email" id="email" class="form-control bg-light border-0 px-4" placeholder="Your Email" style="height: 55px;" required>
                </div>
                <div class="col-12">
                    <input type="text" id="subject" class="form-control bg-light border-0 px-4" placeholder="Subject" style="height: 55px;" required>
                </div>
                <div class="col-12">
                    <textarea id="message" class="form-control bg-light border-0 px-4 py-3" rows="4" placeholder="Message" required></textarea>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                </div>
            </div>
        </form>
        <div id="successMessage" class="mt-3 alert alert-success" style="display:none;">
            Your email has been sent. Thank you for contacting us. One of our team members will contact you soon.
        </div>
    </div>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the form from submitting the default way

    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;
    var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;

    if (!name || !email || !subject || !message) {
        alert('Please fill out all fields.');
        return;
    }

    if (!emailPattern.test(email)) {
        alert('Please enter a valid email address.');
        return;
    }

    // Show success message
    document.getElementById('successMessage').style.display = 'block';
});
</script>

            <div class="col-lg-6">
					<iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4091.9255796125335!2d-6.583323823676813!3d34.2591226067773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda759f26ad54751%3A0xd923c7b56e074612!2sJimmy&#39;s%20Fitness%20-%20Center!5e1!3m2!1sen!2sbd!4v1717162639486!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    <!-- Contact End -->

	 <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
	<?php
	include 'footer.php';
	?>
  </body>
</html>
