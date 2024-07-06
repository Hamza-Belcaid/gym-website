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
            height: 10vh;
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
            flex-basis: calc(25%);
            margin: 15px;
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
        <h2 class="section__header">DÉCOUVREZ NOTRE PROGRAMME</h2>
      </div>

    <div class="explore__grid">
    <div class="explore__card">
      <img src="assets/cardio.jpg">
        <h4>Cardio</h4>
        <p>
          Adoptez l'essence de la force alors que nous explorons ses différents bénéfices physiques, mentaux et émotionnels.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/power_fitness.jpg">
        <h4>Power Fitness</h4>
        <p>
         Devenez sculpteur de votre propre physique en soulevant, poussant et tirant votre chemin vers une version plus forte et plus définie de vous-même.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/yoga.jpg">
        <h4>Yoga</h4>
        <p>
         Embrassez la sérénité du mouvement en enchaînant les poses qui harmonisent le corps et l'esprit, cultivant la force, la flexibilité et la paix intérieure.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/boxing.jpg">
        <h4>Boxing</h4>
        <p>
         Libérez votre combattant intérieur en enchaînant les jabs, crochets et esquives dans un entraînement intense qui développe l'endurance, l'agilité et la résistance mentale.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/areobic.jpg">
        <h4>Aérobie</h4>
        <p>
          Stimulez votre métabolisme et augmentez votre rythme cardiaque dans une danse dynamique de mouvements cardio, au son de pulsations rythmées et de routines énergiques.
        </p>
    </div>
    <div class="explore__card">
        <img src="assets/body_work.jpg">
        <h4>Travail corporel</h4>
        <p>
           Conçu pour les individus, notre programme offre une approche efficace pour prendre du poids de manière durable et garantie.
        </p>
    </div>
</div>

	<?php
	include 'footer.php';
	?>
  </body>
</html>
