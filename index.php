<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Web Design Mastery | Fitclub</title>
  </head>
  <body>
<?php
include 'sidebar.php';
?>

    <header class="section__container header__container">
      <div class="header__content">
        <span class="bg__blur"></span>
        <span class="bg__blur header__blur"></span>
        <h4>BEST FITNESS IN THE TOWN</h4>
        <h1><span>MAKE</span> YOUR BODY SHAPE</h1>
        <p>
        Unleash your potential and embark on a journey towards a stronger,
        fitter, and more confident you. Sign up for 'Make Your Body Shape' now
        and witness the incredible transformation your body is capable of!
        </p>
      </div>
      <div class="header__image">
        <img src="assets/header.png" alt="header" />
      </div>
    </header>

    <section class="section__container explore__container">
      <div class="explore__header">
        <h2 class="section__header">EXPLORE OUR PROGRAM</h2>

      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>
          <h4>Strength</h4>
          <p>
            Embrace the essence of strength as we delve into its various
            dimensions physical, mental, and emotional.
          </p>
        </div>
        <div class="explore__card">
          <span><i class="ri-heart-pulse-fill"></i></span>
          <h4>Physical Fitness</h4>
          <p>
            It encompasses a range of activities that improve health, strength,
            flexibility, and overall well-being.
          </p>
        </div>
        <div class="explore__card">
          <span><i class="ri-run-line"></i></span>
          <h4>Fat Lose</h4>
          <p>
            Through a combination of workout routines and expert guidance, we'll
            empower you to reach your goals.
          </p>
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-basket-fill"></i></span>
          <h4>Weight Gain</h4>
          <p>
            Designed for individuals, our program offers an effective approach
            to gaining weight in a sustainable manner.
          </p>
        </div>
      </div>
    </section>

    <section class="section__container class__container">
      <div class="class__image">
        <span class="bg__blur"></span>
        <img src="assets/home3.jpg" alt="class" class="home3" />
        <img src="assets/class-2.jpg" alt="class" class="class__img-2" />
      </div>
      <div class="class__content">
        <h2 class="section__header">THE CLASS YOU WILL GET HERE</h2>
        <p>
          Led by our team of expert and motivational instructors, "The Class You
          Will Get Here" is a high-energy, results-driven session that combines
          a perfect blend of cardio, strength training, and functional
          exercises. Each class is carefully curated to keep you engaged and
          challenged, ensuring you never hit a plateau in your fitness
          endeavors.
        </p>
        <button class="btn" onclick="window.location.href = 'classes.php';">Book A Class</button>
      </div>
    </section>

    <section class="section__container join__container">
      <h2 class="section__header">WHY JOIN US ?</h2>
      <p class="section__subheader">
        Our diverse membership base creates a friendly and supportive
        atmosphere, where you can make friends and stay motivated.
      </p>
      <div class="join__image">
        <img src="assets/ji1.jpg" alt="ji1" />
        <div class="join__grid">
          <div class="join__card">
            <span><i class="ri-user-star-fill"></i></span>
            <div class="join__card__content">
              <h4>Personal Trainer</h4>
              <p>Unlock your potential with our expert Personal Trainers.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-vidicon-fill"></i></span>
            <div class="join__card__content">
              <h4>Practice Sessions</h4>
              <p>Elevate your fitness with practice sessions.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-building-line"></i></span>
            <div class="join__card__content">
              <h4>Good Management</h4>
              <p>Supportive management, for your fitness success.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

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

    </section>

    <section class="review">
      <div class="section__container review__container">
        <span><i class="ri-double-quotes-r"></i></span>
        <div class="review__content">
          <h4>MEMBER REVIEW</h4>
          <p>
            What truly sets this gym apart is their expert team of trainers. The
            trainers are knowledgeable, approachable, and genuinely invested in
            helping members achieve their fitness goals. They take the time to
            understand individual needs and create personalized workout plans,
            ensuring maximum results and safety.
          </p>
          <div class="review__rating">
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-fill"></i></span>
            <span><i class="ri-star-half-fill"></i></span>
          </div>
         <div class="review__footer">
			
        
          </div> 
        </div>
      </div>
    </section>
	<?php
	include 'footer.php';
	?>
  </body>
</html>
