
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
     <style>
      .explore__header {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 10vh;
        }
      </style>
  </head>
  <body>
<?php
include 'sidebar.php';
?>	
    </div>

<section class="review">
      <div class="section__container review__container">
        <div class="review__content">
          <div class="explore__header">
            <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
          </div>
            <div class="review__member">
              <img src="assets/member1.png"/>
              <div class="review__member__details">
                <h4>Jane Cooper</h4>
                <p>The creator of FITCLUB gym, he has a background in competitive athletics and a passion for fitness innovation, whic made him create a gym that blends cutting-edge training techniques with a supportive community atmosphere.</p>
              </div>
            </div>
            <div class="review__member">
              <img src="assets/member2.png"/>
              <div class="review__member__details">
                <h4>Marie Cooper</h4>
                <p>our Wonderful financial manager. she has a keen eye for detail and years of experience in financial planning within the fitness industry, she ensures our gym operates smoothly and efficiently.</p>
              </div>
          </div>
          <div class="review__member">
              <img src="assets/member3.png"/>
              <div class="review__member__details">
                <h4>Jhonson Cooper</h4>
                <p>A cornerstone of our digital presence,he ensures our gym's website remains polished and efficient. With a passion for fitness and a knack for web development.</p>
              </div>
        </div>
      </div>
    </section>
	<?php
	include 'footer.php';
	?>
  </body>
</html>
