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
        <h4>MEILLEURE FORME EN VILLE</h4>
        <h1><span></span>SCULPTEZ VOTRE SILHOUETTE</h1>
        <p>
       Libérez votre potentiel et embarquez pour un voyage vers un vous plus fort, plus en forme et plus confiant. Inscrivez-vous dès maintenant à 'Sculptez Votre Corps' et découvrez la transformation incroyable dont votre corps est capable !**
        </p>
      </div>
      <div class="header__image">
        <img src="assets/header.png" alt="header" />
      </div>
    </header>

    <section class="section__container explore__container">
      <div class="explore__header">
        <h2 class="section__header">DÉCOUVREZ NOTRE PROGRAMME</h2>

      </div>
      <div class="explore__grid">
        <div class="explore__card">
          <span><i class="ri-boxing-fill"></i></span>
          <h4>Force</h4>
          <p>
            Adoptez l'essence de la force en explorant ses différentes dimensions : physique, mentale et émotionnelle.
          </p>
        </div>
        <div class="explore__card">
          <span><i class="ri-heart-pulse-fill"></i></span>
          <h4>Condition physique</h4>
          <p>
           Cela englobe une gamme d'activités qui améliorent la santé, la force, la flexibilité et le bien-être général.
          </p>
        </div>
        <div class="explore__card">
          <span><i class="ri-run-line"></i></span>
          <h4>Perte de graisse</h4>
          <p>
           Grâce à une combinaison de programmes d'entraînement et de conseils d'experts, nous vous donnerons les moyens d'atteindre vos objectifs.
          </p>
        </div>
        <div class="explore__card">
          <span><i class="ri-shopping-basket-fill"></i></span>
          <h4>Prise de poids</h4>
          <p>
            Conçu pour les individus, notre programme offre une approche efficace pour prendre du poids de manière durable.
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
        <h2 class="section__header">LES COURS QUE VOUS RECEVREZ ICI</h2>
        <p>
        Dirigé par notre équipe d'instructeurs experts et motivants, "Le Cours Que Vous Recevrez Ici" est une session haute énergie axée sur les résultats, qui combine parfaitement cardio, musculation et exercices fonctionnels. Chaque cours est soigneusement élaboré pour vous maintenir engagé et stimulé, garantissant que vous ne rencontriez jamais de plateau dans vos efforts de remise en forme.
        </p>
        <button class="btn" onclick="window.location.href = 'classes.php';">Réservez un cours</button>
      </div>
    </section>

    <section class="section__container join__container">
      <h2 class="section__header">POURQUOI NOUS REJOINDRE ?</h2>
      <p class="section__subheader">
 Notre base de membres diversifiée crée une atmosphère amicale et de soutien, où vous pouvez vous faire des amis et rester motivé.
      </p>
      <div class="join__image">
        <img src="assets/ji1.jpg" alt="ji1" />
        <div class="join__grid">
          <div class="join__card">
            <span><i class="ri-user-star-fill"></i></span>
            <div class="join__card__content">
              <h4>Entraîneur personnel</h4>
              <p>Débloquez votre potentiel avec nos entraîneurs personnels experts.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-vidicon-fill"></i></span>
            <div class="join__card__content">
              <h4>Séances d'entraînement</h4>
              <p>Élevez votre condition physique avec des séances d'entraînement.</p>
            </div>
          </div>
          <div class="join__card">
            <span><i class="ri-building-line"></i></span>
            <div class="join__card__content">
              <h4>Bonne gestion</h4>
              <p>Une gestion bienveillante pour votre réussite en fitness.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section__container price__container">

      <h2 class="section__header">Plans d'adhésion</h2>
      <p class="section__subheader">
       Notre plan tarifaire propose différents niveaux d'adhésion, chacun adapté à différentes préférences et aspirations en matière de remise en forme.
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__card__content">
            <h4>Adhésion Standard</h4>
            <h3>à partir de MAD 39.99 par mois</h3>
			<p><i class="ri-checkbox-circle-line"></i>Tous les cours standards</p>
			<p><i class="ri-checkbox-circle-line"></i>Tous les cours virtuels</p>
			<p><i class="ri-checkbox-circle-line"></i>Induction à la salle de gym GRATUITE</p>
			<p><i class="ri-checkbox-circle-line"></i>Une consultation gratuite avec un entraîneur personnel</p>
			<p><i class="ri-checkbox-circle-line"></i>Accès 24 heures</p>
			<p><i class="ri-checkbox-circle-line"></i>Parking GRATUIT</p>
				
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Rejoignez maintenant</button>
        </div>
        <div class="price__card">
          <div class="price__card__content">
            <h4>Adhésion Premium</h4>
            <h3>à partir de MAD 49.99 par mois</h3>
            <p><i class="ri-checkbox-circle-line"></i>Tous les avantages du plan Standard, EN PLUS</p>
			<p><i class="ri-checkbox-circle-line"></i>Tous les cours premium</p>
			<p><i class="ri-checkbox-circle-line"></i>1 passe d'invité GRATUITE par mois</p>
			<p><i class="ri-checkbox-circle-line"></i>Une consultation gratuite avec un entraîneur personnel</p>
			<p><i class="ri-checkbox-circle-line"></i>Ceinture MyZone MZ3 à prix réduit à 79,99 MAD</p>
          </div>
          <button class="btn price__btn" onclick="window.location.href = 'start.php';">Rejoignez maintenant</button>
        </div>
        <div class="price__card">
          <div class="price__card__content">
            <h4>Adhésions spéciales</h4>
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

    </section>

    <section class="review">
      <div class="section__container review__container">
        <span><i class="ri-double-quotes-r"></i></span>
        <div class="review__content">
          <h4>AVIS DES MEMBRES</h4>
          <p>
           Ce qui distingue vraiment cette salle de gym, c'est leur équipe d'entraîneurs experts. Les entraîneurs sont compétents, accessibles et véritablement investis dans l'aide aux membres à atteindre leurs objectifs de remise en forme. Ils prennent le temps de comprendre les besoins individuels et créent des plans d'entraînement personnalisés, garantissant des résultats optimaux et la sécurité des membres.
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
