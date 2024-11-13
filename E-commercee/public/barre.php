<!-- marquee.php -->
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Marquee</title>
  <style>
    .marquee {
      width: 100%; 
      padding: 30px 10px;
      text-align: center;
      overflow: hidden;
      position: relative;
    }
    
    .marquee h3 {
      font-size: 60px; /* Changez cette valeur pour réduire la taille de la police */
      font-weight: 700;
      text-transform: uppercase;
      position: relative;
    }
    
    .marquee .marquee-wrapper {
      display: inline-block;
      white-space: nowrap;
      animation: marqueeCurveAnimation 10s linear infinite;
    }
    
    .marquee-title {
      display: inline-block;
      padding-right: 100px;
      font-size: 3.5rem;
    }
    
    .text-stroke-black {
      color: transparent;
      -webkit-text-stroke: 1px;
      -webkit-text-stroke-color: #000000;
    }
    
    @keyframes marqueeCurveAnimation {
      0% {
        transform: translateX(100%) translateY(0);
      }
      25% {
        transform: translateX(75%) translateY(-20px);
      }
      50% {
        transform: translateX(50%) translateY(20px);
      }
      75% {
        transform: translateX(25%) translateY(-20px);
      }
      100% {
        transform: translateX(0) translateY(0);
      }
    }
    
    @media (max-width: 992px) {
      .marquee h3 {
        font-size: 40px; /* Changez cette valeur pour réduire la taille de la police pour les écrans plus petits */
      }
    }
    
    @media (max-width: 549px) {
      .marquee h3 {
        font-size: 30px; /* Changez cette valeur pour réduire la taille de la police pour les écrans encore plus petits */
      }
    }
  </style>
</head>
<body>
  <!-- début barre déroulante -->
  <div class="marquee">
    <h3>
      <div class="marquee-wrapper">
        <div class="marquee-title">
          / Bienvenue <span class="text-stroke-black">sur le site</span>
          &amp; de Yummy
          <span class="text-stroke-black">Bienvenue</span> / chez
          <span class="text-stroke-black">Yummy</span>
          &amp; des glaces délicieuses
          <span class="text-stroke-black">easy</span>
        </div>
        <div class="marquee-title">
          / Yummy'ice cream <span class="text-stroke-black">Pour</span>
          &amp; vivre un moment
          <span class="text-stroke-black">de bonheur</span> / Testez nos 
          <span class="text-stroke-black">délicieux produits</span>
          &amp; humm
          <span class="text-stroke-black">Yummy</span>
        </div>
      </div>
    </h3>
  </div>
  <!-- fin barre déroulante -->
</body>
</html>

