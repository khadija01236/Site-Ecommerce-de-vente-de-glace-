<!-- marquee.php -->
<style>
  .marquee {
    width: 100%; 
    padding: 30px 10px;
    text-align: center;
    overflow: hidden;
    font-size: 40rem;
  }
  
  .marquee h3 {
    font-size: 60px; /*Changez cette valeur pour réduire la taille de la police */
    font-weight: 700;
    text-transform: uppercase;
  }
  
  .marquee .marquee-wrapper {
    width: 10000px;
    animation: marqueeAnimation 38s linear 0s infinite running;
  }
  
  .marquee h3 .marquee-title {
    margin-right: 20px;
    float: left;
    font-size: 3.5rem;
  }
  
  .text-stroke-black {
    color: transparent;
    -webkit-text-stroke: 1px;
    -webkit-text-stroke-color: #000000;
  }
  .bx.bx-popsicle {
    color: red;
}
  @keyframes marqueeAnimation {
    100% {
      transform: translateX(-4600px);
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

<!-- début barre déroulante -->
<section >
    <div class="marquee">
    <h3>
          <div class="marquee-wrapper">
            <div class="marquee-title">
              / Suivez nous <span class="text-stroke-black">sur nos réseaux sociaux</span>
              &amp; pour être a l'affut de nos nouvelles 
              <span class="text-stroke-black">Création </span><i class='bx bx-popsicle'></i>
              <span class="text-stroke-black">sur nos réseaux sociaux</span>
              &amp; pour être a l'affut de nos nouvelles 
              <span class="text-stroke-black">Création </span><i class='bx bx-popsicle'></i> 
            </div>
            <div class="marquee-title">
              / Suivez nous <span class="text-stroke-black">sur nos réseaux sociaux</span>
              &amp; pour être a l'affut de nos nouvelles
              <span class="text-stroke-black">création /</span><i class='bx bx-popsicle'></i>
              <span class="text-stroke-black">/ Suivez nous</span>
              &amp; sur nos réseaux sociaux
              <span class="text-stroke-black">pour être a l'affut de nos nouvelles création /</span><i class='bx bx-popsicle'>/</i>
            </div>
          </div>
        </h3>
        <!-- azertyuiop^$dsfghjklompyrtuiop^dgfhjykuli -->
        <h3>
          <div class="marquee-wrapper">
            <div class="marquee-title">
              / Suivez nous <span class="text-stroke-black">sur nos réseaux sociaux</span>
              &amp; pour être a l'affut de nos nouvelles 
              <span class="text-stroke-black">Suivez</span> Nous
              <span class="text-stroke-black">Sur</span>
              &amp; instagramme
              <span class="text-stroke-black">easy</span>
            </div>
            <div class="marquee-title">
              / Suivez <span class="text-stroke-black">nous</span>
              &amp; sur instagramme
              <span class="text-stroke-black">suivez</span> nous
              <span class="text-stroke-black">sur </span>
              &amp; instagramme °
              <span class="text-stroke-black">°</span>
            </div>
          </div>
        </h3>
      </div>
      
   </section>
<!-- <div class="marquee"> 
    <h3>
      <div class="marquee-wrapper">
        <div class="marquee-title">
          / Bienvenue <span class="text-stroke-black">sur le site</span>
          &amp; de Yummy
          <span class="text-stroke-black">Suivez</span> / chez
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
fin barre déroulante -->
