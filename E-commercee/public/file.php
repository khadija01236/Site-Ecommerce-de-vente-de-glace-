<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire de paiement responsive pour passerelle de paiement en hindi</title>
    <link rel="stylesheet" type="text/css" href="payment.css">
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
            display: flex;
            animation: marqueeAnimation 38s linear infinite;
        }
        
        .marquee .marquee-title {
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
            0% { transform: translateX(0) translateY(0); }
            10% { transform: translateX(-10%) translateY(-10px); }
            20% { transform: translateX(-20%) translateY(10px); }
            30% { transform: translateX(-30%) translateY(-10px); }
            40% { transform: translateX(-40%) translateY(10px); }
            50% { transform: translateX(-50%) translateY(-10px); }
            60% { transform: translateX(-60%) translateY(10px); }
            70% { transform: translateX(-70%) translateY(-10px); }
            80% { transform: translateX(-80%) translateY(10px); }
            90% { transform: translateX(-90%) translateY(-10px); }
            100% { transform: translateX(-100%) translateY(10px); }
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
<header>
    <section>
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
</header>
</body>
</html>
