
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
            <h2 class="section__header">DÉCOUVREZ NOTRE PROGRAMME</h2>
          </div>
            <div class="review__member">
              <img src="assets/member1.png"/>
              <div class="review__member__details">
                <h4>Jane Cooper</h4>
                <p>Le créateur de la salle de sport FITCLUB, il a un passé dans le domaine des compétitions sportives et une passion pour l'innovation en fitness, ce qui l'a amené à créer une salle de sport alliant des techniques d'entraînement de pointe à une atmosphère communautaire de soutien.</p>
              </div>
            </div>
            <div class="review__member">
              <img src="assets/member2.png"/>
              <div class="review__member__details">
                <h4>Marie Cooper</h4>
                <p>Notre merveilleuse gestionnaire financière. Elle a un sens aigu du détail et des années d'expérience en planification financière dans l'industrie du fitness. Elle veille à ce que notre salle de sport fonctionne de manière fluide et efficace.</p>
              </div>
          </div>
          <div class="review__member">
              <img src="assets/member3.png"/>
              <div class="review__member__details">
                <h4>Jhonson Cooper</h4>
                <p>Un pilier de notre présence numérique, il veille à ce que le site web de notre salle de sport reste soigné et efficace. Passionné de fitness et doué pour le développement web.</p>
              </div>
        </div>
      </div>
    </section>
	<?php
	include 'footer.php';
	?>
  </body>
</html>
