<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/styles.css" />
	    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css"rel="stylesheet"/>
    <title>Web Design Mastery | Fitclub</title>
     <style>
      .explore__header {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            height: 15vh;
        }

        .section__header {
            text-align: center;
        }

        .explore__grid {
            display: flex;
            flex-wrap: wrap;
        }

        .explore__card {
            flex-grow: 1;
            flex-basis: calc(30%); 
            margin: 20px; 
        }
            }
        }
      </style>
  </head>
  <body>
<?php
include 'sidebar.php';
?>

      <div class="explore__header">
        <h2 class="section__header">EXPLORE OUR PROGRAM</h2>
      </div>

    <div class="explore__grid">
    <div class="explore__card">
      <img src="assets/cardio.jpg">
        <h4>Cardio</h4>
        <p>
            Embrace the essence of strength as we delve into its various
            dimensions physical, mental, and emotional benefits.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/power_fitness.jpg">
        <h4>Power Fitness</h4>
        <p>
          Become a sculptor of your own physique as you lift, push,
          and pull your way to a stronger, more defined version of you.              
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/yoga.jpg">
        <h4>Yoga</h4>
        <p>
          Embrace the serenity of movement as you flow through poses that harmonize body and mind,
          cultivating strength, flexibility, and inner peace.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/boxing.jpg">
        <h4>Boxing</h4>
        <p>
         Channel your inner fighter as you jab, hook, and dodge your way through a 
         high-energy workout that builds endurance, agility, and mental toughness.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/areobic.jpg">
        <h4>Areobic</h4>
        <p>
            Ignite your metabolism and elevate your heart rate in a dynamic dance of cardio moves,
            pulsating beats, and energetic routines that fuel your stamina and vitality.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/body_work.jpg">
        <h4>Body work</h4>
        <p>
            Designed for individuals, our program offers an effective approach
            to gaining weight in a sustainable and guaranteed manner.
        </p>
    </div>
</div>

	<?php
	include 'footer.php';
	?>
  </body>
</html>
