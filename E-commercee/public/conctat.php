<?php
 include 'curseur.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="contact.css">
<script src="https://kit.fontawesome.com/aa7454d09f.js" crossorigin="anonymous"></script>
<?php
include 'header.php';
?>
<br><br><br><br><br><br>
<body>
   <section class="contact-form">
  
    <h1 class="heading">Contactez-nous</h1>
    <p class="para">Pour toute demande, n’hésitez pas à remplir le formulaire de contact ci-dessous. Nous nous efforçons de répondre à toutes les questions dans un délai de 24 heures.

        Merci de faire partie de la famille Yummy ! Nous avons hâte de vous régaler avec nos délicieuses glaces artisanales.
        
        </p>
    
    <div class="contactForm">
        <form action="#">
         <h1 class="sub-heading">Remplissez!</h1>
         <p class="para para2">Contactez-nous pour a quote , vous aidez à nous joindres.</p>
         <input type="text" class="input" placeholder="votre Nom">
         <input type="text" class="input" placeholder="votre E-mail">
         <input type="text" class="input" placeholder="Le motif">
         <textarea class="input" cols="30" rows="5" placeholder="votre message..."></textarea>
         <input type="submit" class="input submit" value="Envoyer Message">
        </form>

        <div class="map-container">
            <div class="mapBg"></div>
            <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.9914410252845!2d2.291906375932066!3d48.85837360070842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sEiffel%20Tower!5e0!3m2!1sen!2set!4v1695627657575!5m2!1sen!2set" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            </div>
        </div>
    </div>

    <div class="contactMethod">
        <div class="method">
            <i class="fa-solid fa-location-dot contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Localisation</h1>
                <p class="para">2276 Lynn Ogden Lane Beaumont</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-envelope contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading">Email</h1>
                <p class="para">yummydelices@gmail.</p>
            </article>
        </div>

        <div class="method">
            <i class="fa-solid fa-phone contactIcon"></i>
            <article class="text">
                <h1 class="sub-heading fg">Telephone</h1>
                <p class="para">06056886098</p>
            </article>
        </div>
    </div>
   </section>
</body>
<br><br><br>
<?php
include 'footer.php';
?>
</html>