<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/tooplate-gymso-style.css">
    <title>Our Membership Plans - FIT CLUB GYM</title>
    <style>
        /* Adjustments for membership table */
        .table-bordered td, .table-bordered th {
            background-color: #fff; /* White background */
            color: #333; /* Dark text */
        }
    </style>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="container">
      
		<section class="section__container price__container">
      <h2 class="section__header">Membership Plans</h2>
      <p class="section__subheader">
        Our pricing plan comes with various membership tiers, each tailored to
        cater to different preferences and fitness aspirations.
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__card__content">
            <h4>Standard Membership</h4>
            <h3>from $39.99/month</h3>
			<p><i class="ri-checkbox-circle-line"></i>All Standard Classes</p>
			<p><i class="ri-checkbox-circle-line"></i>All Virtual Classes</p>
			<p><i class="ri-checkbox-circle-line"></i>FREE Gym Induction</p>
			<p><i class="ri-checkbox-circle-line"></i>One Free Consult with a PT</p>
			<p><i class="ri-checkbox-circle-line"></i>24 Hour Access</p>
			<p><i class="ri-checkbox-circle-line"></i>FREE Parking</p>
				
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Join Now</button>
        </div>
        <div class="price__card">
          <div class="price__card__content">
            <h4>Premium Membership</h4>
            <h3>from $49.99/month</h3>
            <p><i class="ri-checkbox-circle-line"></i>All Standard Plan benefits, PLUS</p>
			<p><i class="ri-checkbox-circle-line"></i>All Premium Classes</p>
			<p><i class="ri-checkbox-circle-line"></i>1 FREE Guest Pass/month</p>
			<p><i class="ri-checkbox-circle-line"></i>One Free Consult with a PT</p>
			<p><i class="ri-checkbox-circle-line"></i>Discounted MyZone MZ3 Belt at $79.99 (Amazon RRP $129.99)</p>
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Join Now</button>
        </div>
        <div class="price__card">
          <div class="price__card__content">
            <h4>Special Memberships</h4>
            <p><i class="ri-checkbox-circle-line"></i>Over 55’s Membership (Use promo code: OVER55)</p>
			<p><i class="ri-checkbox-circle-line"></i>Student Membership (Use promo code: STUDENT)</p>
			<p><i class="ri-checkbox-circle-line"></i>Blue Light Membership (Use promo code: BLUELIGHT)</p>
			<p></br></p>
			<p>Find out more about our ‘Special Membership’ plans by clicking below.</p>
			
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Join Now</button>
        </div>
      </div>
    </section>

        <!-- Membership Features Table -->
        <div class="mem-question-area mt-4">
            <h2 class="section__header">Membership Features</h2>
			<div class="table-responsive">
                <table class="table table-bordered mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Featured</th>
                            <th scope="col">Standard Membership</th>
                            <th scope="col">Premium Membership</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">24-Hour access</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Use of the car park</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Virtual classes</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">FREE Consultation with a Personal Trainer</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">All standard classes</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Premium classes</td>
                            <td></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">One free guest pass per month</td>
                            <td></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Member App</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Access Card discount</td>
                            <td></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Discounted MyZone</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

      <section class="section__container explore__container">
    <div class="explore__header">
        <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
        <div class="explore__nav">
            <span class="explore__prev"><i class="ri-arrow-left-line"></i></span>
            <span class="explore__next"><i class="ri-arrow-right-line"></i></span>
        </div>
    </div>
    <div class="explore__grid">
        <div class="explore__card">
            <span><i class="ri-team-line"></i></span>
            <h4>Are classes included?</h4>
            <p>
                Yes! All of our classes are included, except for our premium classes, and they are marked black on our timetable. Not sure if you want to try premium classes? Simply join on a standard membership, try a premium class for free, and we can always upgrade you later.
            </p>
            
        </div>
        <div class="explore__card">
            <span><i class="ri-parking-box-line"></i></span>
            <h4>Do you have free parking?</h4>
            <p>
                Yes, we have our own car park at the rear of the building.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-24-hours-line"></i></span>
            <h4>What time are you open?</h4>
            <p>
                We are open 24 hours a day, 365 days a year. Christmas Day, New Years, bank holidays…we never close.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-graduation-cap-line"></i></span>
            <h4>Do you have an option for students?</h4>
            <p>
                Yes we do. Either enter your information on the website or give us a call and we can tell you more.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-exchange-fill"></i></span>
            <h4>Do you have a month to month/rolling option?</h4>
            <p>
                Yes we do.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-layout-left-line"></i></span>
            <h4>What if I am going away for a while?</h4>
            <p>
                Don’t worry, we can freeze your membership for up to 3 months per calendar year.
            </p>
        </div>
    </div>
</section>


		
	</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function() {
        var cardCount = $('.explore__card').length; // Total number of cards
        var visibleCards = 4; // Number of cards initially visible
        var currentIndex = 0; // Current index of the first visible card

        // Function to show cards based on current index
        function showCards() {
            $('.explore__card').hide(); // Hide all cards
            $('.explore__card').slice(currentIndex, currentIndex + visibleCards).show(); // Show the next set of cards
        }

        // Show initial set of cards
        showCards();

        // Click event for next navigation
        $('.explore__next').click(function() {
            if (currentIndex + visibleCards < cardCount) {
                currentIndex++;
                showCards();
            }
        });

        // Click event for previous navigation
        $('.explore__prev').click(function() {
            if (currentIndex > 0) {
                currentIndex--;
                showCards();
            }
        });
    });
</script>


    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <?php include 'footer.php'; ?>
</body>
</html>
