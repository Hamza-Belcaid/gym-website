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
    <title>Nos Plans d'Adhésion - FIT CLUB GYM</title>
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
      <h2 class="section__header">Plans d'adhésion</h2>
      <p class="section__subheader">
      Notre plan de tarification comprend plusieurs niveaux d'adhésion, chacun adapté pour répondre à différentes préférences et aspirations en matière de condition physique.
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__card__content">
            <h4>Adhésion Standard</h4>
            <h3>à partir de MAD 39,99 par mois</h3>
			<p><i class="ri-checkbox-circle-line"></i>Toutes les classes standard</p>
			<p><i class="ri-checkbox-circle-line"></i>Toutes les classes virtuelles</p>
			<p><i class="ri-checkbox-circle-line"></i>Induction gratuite à la salle de sport</p>
			<p><i class="ri-checkbox-circle-line"></i>Une consultation gratuite avec un entraîneur personnel</p>
			<p><i class="ri-checkbox-circle-line"></i>Accès 24 heures</p>
			<p><i class="ri-checkbox-circle-line"></i>Stationnement gratuit</p>
				
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Rejoignez maintenant</button>
        </div>
        <div class="price__card">
          <div class="price__card__content">
            <h4>Adhésion Premium</h4>
            <h3>à partir de MAD 49,99 par mois</h3>
            <p><i class="ri-checkbox-circle-line"></i>Toutes les classes standard</p>
			<p><i class="ri-checkbox-circle-line"></i>Toutes les classes premium</p>
			<p><i class="ri-checkbox-circle-line"></i>1 pass invité GRATUIT par mois</p>
			<p><i class="ri-checkbox-circle-line"></i>Une consultation gratuite avec un entraîneur personnel</p>
			<p><i class="ri-checkbox-circle-line"></i>Ceinture MyZone MZ3 à prix réduit à 79,99 MAD</p>
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Rejoignez maintenant</button>
        </div>
        <div class="price__card">Adhésion Premium
          <div class="price__card__content">
            <h4>Special Memberships</h4>
            <p><i class="ri-checkbox-circle-line"></i>Adhésion pour les plus de 55 ans (Utilisez le code promo : OVER55)</p>
			<p><i class="ri-checkbox-circle-line"></i>Adhésion étudiante (Utilisez le code promo : STUDENT)</p>
			<p><i class="ri-checkbox-circle-line"></i>Adhésion Blue Light (Utilisez le code promo : BLUELIGHT)</p>
			<p></br></p>
			<p>Découvrez plus sur nos plans d'adhésion spéciaux en cliquant ci-dessous.</p>
			
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Rejoignez maintenant</button>
        </div>
      </div>
    </section>

        <div class="mem-question-area mt-4">
            <h2 class="section__header">Caractéristiques de l'adhésion</h2>
			<div class="table-responsive">
                <table class="table table-bordered mt-3">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">À la une</th>
                            <th scope="col">Adhésion standard</th>
                            <th scope="col">Premium Membership</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">Accès 24 heures</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Utilisation du parking</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Cours virtuels</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Consultation GRATUITE avec un entraîneur personnel</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Tous les cours standards</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Cours premium</td>
                            <td></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Un pass invité gratuit par mois</td>
                            <td></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Application pour les membres</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">Réduction sur la carte d'accès</td>
                            <td></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                        <tr>
                            <td scope="row">MyZone à prix réduit</td>
                            <td><i class="fas fa-check text-success"></i></td>
                            <td><i class="fas fa-check text-success"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

      <section class="section__container explore__container">
    <div class="explore__header">
        <h2 class="section__header">DÉCOUVREZ NOTRE PROGRAMME</h2>
        <div class="explore__nav">
            <span class="explore__prev"><i class="ri-arrow-left-line"></i></span>
            <span class="explore__next"><i class="ri-arrow-right-line"></i></span>
        </div>
    </div>
    <div class="explore__grid">
        <div class="explore__card">
            <span><i class="ri-team-line"></i></span>
            <h4>Les cours sont-ils inclus ?</h4>
            <p>
               Oui ! Tous nos cours sont inclus, à l'exception de nos cours premium, qui sont indiqués en noir sur notre emploi du temps. Vous êtes intéressé par les cours premium ? Il vous suffit de souscrire à une adhésion standard, d'essayer un cours premium gratuitement, et nous pourrons toujours vous proposer une mise à niveau ultérieure.
            </p>
            
        </div>
        <div class="explore__card">
            <span><i class="ri-parking-box-line"></i></span>
            <h4>Avez-vous un stationnement gratuit ?</h4>
            <p>
                Oui, nous avons notre propre parking à l'arrière du bâtiment.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-24-hours-line"></i></span>
            <h4>À quelle heure êtes-vous ouvert ?</h4>
            <p>
               Nous sommes ouverts 24 heures sur 24, 365 jours par an. Nous ne fermons jamais, même les jours de Noël, du Nouvel An et les jours fériés.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-graduation-cap-line"></i></span>
            <h4>Avez-vous une option pour les étudiants ?</h4>
            <p>
                Oui, nous en avons. Vous pouvez soit saisir vos informations sur le site web, soit nous appeler et nous pourrons vous en dire plus.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-exchange-fill"></i></span>
            <h4>Avez-vous une option de mois en mois ou renouvelable automatiquement ?</h4>
            <p>
               Oui, nous en avons.
            </p>
        </div>
        <div class="explore__card">
            <span><i class="ri-layout-left-line"></i></span>
            <h4>Si vous partez pour un certain temps, nous avons des options pour suspendre votre adhésion. Contactez-nous et nous pourrons discuter des détails spécifiques et des conditions applicables à votre situation.</h4>
            <p>
               Pas d'inquiétude, nous pouvons mettre votre adhésion en pause jusqu'à 3 mois par année civile.
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
