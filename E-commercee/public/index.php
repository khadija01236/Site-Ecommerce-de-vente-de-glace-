<!-- 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login-register-main/login.php");
   exit();
}

 -->
<!--  -->
 <?php
 include 'curseur.php';
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design de site Web de crème glacée complet et réactif</title>
    <!-- lien cdn boxicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link
    href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>
    <!-- section d'en-tête -->
 <header> 

        <a href="#">
        <i class='bx bxs-popsicle popi'></i>
        <span class="popsicle-text">Yummy</span>
    </a>
        <style>
            .bx.bxs-popsicle {
            color: pink;
            font-size: 35px;
        }
        .popsicle-text {
            color: #66C3B8;
            font-size: 37px;
            font-weight: bold;
        }
    </style>

        <nav class="navbar">
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="ecomerce.php">À propos de nous</a></li>
                <li><a href="productDetails.php">Glaces</a></li>
                <li><a href="sorbet.php">Sorbet</a></li>
                <li><a href="glace_bio.php">Glaces Bio</a></li>
                <li><a href="conctat.php">contact</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="#faq">FAQ</a></li>
            </ul>
        </nav>
        <div class="icon">
            <a href="#"><i class='bx bx-search-alt-2'></i></a>
            <a href="favoris.php"><i class='bx bxs-heart'></i></a>

<a href="login-register-main/logout.php" class="login-link" id="login"><i class='bx bxs-user'></i></a>
<!-- <a href="blog.php" class="login-link" id="login"><i class='bx bxs-user'></i></a> -->


             <!-- début partie panier  -->
            <a href="#" id="cart-icon" data-quantity="0"><i class='bx bxs-cart'></i></a>
             <!-- panier  -->
            <div class="carttt">
                <h2 class="cart-titre">Votre Panier</h2>
                <!-- contenu -->
                 <div class="cart-content"> 
                </div>
                <!-- Total -->
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">0&#8364;</div>
                </div>
                 <!-- Bouton pour payer  -->
                <a href="payment.php"><button type="button" class="btn-buy">Payer</button></a>
                <!-- fermer panier  -->
                <i class="fa-solid fa-xmark" id="close-cart"></i>
            </div>
            <!-- fin partie panier  -->
        </div>
        <div class="bx bx-menu"></div>
        <li><a href="login-register-main/logout.php" class="btn btn-warning">Se déconnecter</a></li>
        <!-- <li><a href="index.php" class="btn btn-warning">Se déconnecter</a></li> -->


        <style>
            a{
                text-decoration:none;
            }
        </style>
    </header> 
    <!-- section d'en-tête -->

    <!-- section d'accueil -->
    <section class="home" id="home">
        <div class="box-container">
            <div class="box">
                <!-- <span>Crème glacée premium</span> -->
                <h1>DÉTENDEZ-VOUS ET PRENEZ UN MOMENT POUR VOUS AMUSER</h1>
                <p>Sublimez vos papilles avec nos glaces artisanales irrésistibles ! Découvrez un monde de saveurs exquises chez Yummy, où chaque bouchée est un pur bonheur.</p>
                <a href="productDetails.php" class="btn">Où acheter</a>
            </div>
            <div class="box">
                <img src="images/1.png" alt="">
            </div>
        </div>
    </section>
    <!-- début barre déroulante -->
    <div class="marquee">
        <h3>
            <div class="marquee-wrapper">
                <div class="marquee-title">
                    / Bienvenue <span class="text-stroke-black">sur le site</span>
                    &amp; de Yummy <i class='bx bx-popsicle'></i>
                    <span class="text-stroke-black">Bienvenue</span> / chez
                    <span class="text-stroke-black">Yummy</span>
                    &amp; des glaces délicieuses 
                    <span class="text-stroke-black"><i class='bx bx-popsicle'></i></span>
                </div>
                <div class="marquee-title">
                    / Yummy'ice cream <span class="text-stroke-black">Pour</span>
                    &amp; vivre un moment
                    <span class="text-stroke-black">de bonheur <i class='bx bx-popsicle'></i></span> / Testez nos
                    <span class="text-stroke-black">délicieuses glaces</span>
                    &amp; <i class='bx bx-popsicle'></i>
                    <span class="text-stroke-black">Yummy</span>
                </div>
            </div>
        </h3>
        <!-- oijuhygtfrdseqdfghjkl -->
        <h3>
            <div class="marquee-wrapper">
                <div class="marquee-title">
                    / Bienvenue <span class="text-stroke-black">sur le site</span>
                    &amp; de Yummy <i class='bx bx-popsicle'></i>
                    <span class="text-stroke-black">Bienvenue</span> / chez
                    <span class="text-stroke-black">Yummy</span>
                    &amp; des glaces délicieuses 
                    <span class="text-stroke-black"><i class='bx bx-popsicle'></i></span>
                </div>
                <div class="marquee-title">
                    / Yummy'ice cream <span class="text-stroke-black">Pour</span>
                    &amp; vivre un moment
                    <span class="text-stroke-black">de bonheur <i class='bx bx-popsicle'></i></span> / Testez nos
                    <span class="text-stroke-black">délicieuses glaces</span>
                    &amp; <i class='bx bx-popsicle'></i>
                    <span class="text-stroke-black">Yummy</span>
                </div>
            </div>
        </h3>
    </div>
    <!-- fin barre déroulante -->

    <!-- section à propos -->
    <section class="about" id="about">
        <div class="row">
            <div class="image">
                <img src="images/img_2.png" alt="">
            </div>
            <div class="content">
                <h3>La saveur dont vous avez besoin, la consistance que vous voulez—glace !</h3>
                <p>Découvrez notre gamme exquise de glaces, préparées avec des ingrédients frais et naturels. Chaque bouchée offre une explosion de saveurs, parfaite pour tous les palais, qu'il s'agisse de classiques comme la vanille et le chocolat ou de combinaisons audacieuses comme le basilic citronné et la lavande miel.</p>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere omnis fugit corporis dignissimos saepe ! Accusamus accusantium enim laudantium voluptatem ab ?</p> -->
                <a href="about.php" class="btn">En savoir plus</a>
            </div>
        </div>
        
        <div class="box-container">
            <div class="box">
                <img src="images/group.png" alt="">
                <h1>Café & Boutique</h1>
                <p>Lobortis sociosqu aliquet volutpat imperdiet eros tempor suspendisse hac suscipit.</p>
                <a href="" class="btn">Visitez notre boutique</a>
            </div>
            <div class="box">
                <img src="images/group0.png" alt="">
                <h1>Camion de nourriture</h1>
                <p>Lobortis sociosqu aliquet volutpat imperdiet eros tempor suspendisse hac suscipit.</p>
                <a href="" class="btn">Visitez notre spot</a>
            </div>
            <div class="box">
                <img src="images/group1.png" alt="">
                <h1>Traiteur</h1>
                <p>Lobortis sociosqu aliquet volutpat imperdiet eros tempor suspendisse hac suscipit.</p>
                <a href="" class="btn">Commander maintenant</a>
            </div>
            <div class="box">
                <img src="images/group2.png" alt="">
                <h1>Événements spéciaux</h1>
                <p>En été, commandez nos glaces en quantités souhaitées pour tous vos événements spéciaux, et ravissez vos invités avec nos saveurs uniques et notre service personnalisé.</p>
                <a href="contact.php" class="btn">Réserver maintenant</a>
            </div>
        </div>
        
    </section>
    <div class="container">
        <img src="images/shap.png" alt="">
        <div class="detail">
            <i class='bx bxs-popsicle'></i>
            <h1>Le mélange parfait <br> de l'été et du plaisir</h1>
            <p>Faites-vous plaisir, on ne vit qu'une fois !</p>
            <a href="about.php" class="btn">Découvrir plus</a>
        </div>
    </div>
    <section class="features">
    <h1>Nos différentes gammes</h1>
    <div class="box-container">
        <div class="box one">
            <img src="images/img_2.png" alt="">
            <h2>Créme glacée</h2>
            <p>Découvrez notre crème glacée onctueuse et savoureuse, élaborée à partir d'ingrédients naturels et frais. Parfaite pour tous les gourmands, elle saura éveiller vos papilles à chaque bouchée.</p>
            <a href="productDetails.php" class="btn">voir les produits</a>
        </div>
        <div class="box two">
            <img src="images/gelato.png" alt="">
            <h2>Sorbet</h2>
            <p>Frais, léger et irrésistible, notre sorbet est le compagnon idéal pour les journées chaudes. Fabriqué à partir de fruits frais, il offre une explosion de saveurs naturelles et rafraîchissantes.</p>
            <a href="sorbet.php" class="btn">voir les produits</a>
        </div>
        <div class="box three">
            <img src="images/img_5.png" alt="">
            <h2>Glaces Bio</h2>
            <p>Plongez dans la douceur de nos glaces bio, faites avec des ingrédients certifiés biologiques. Une expérience gourmande respectueuse de votre santé et de l'environnement.</p>
            <a href="sorbet.php" class="btn">voir les produits</a>
        </div>
    </div>
</section>
    
<!-- section menu -->
<section class="menu" id="menu">
    <h1 class="heading">Crémeux, froid et délicieux : <br> c’est notre promesse pour vous !</h1>
    <div class="box-container">
        <div class="recipe">
            <h1>Recette de Cornet de Gaufre</h1>
            <div class="detail">
                <img src="images/recipe.png" alt="">
                <div>
                    <h3><span>Vanille</span><span>5&#8364;</span></h3>
                    <p>Plongez dans une explosion tropicale avec notre glace à la mangue. Faite à partir de mangues mûres et juteuses.</p>
                </div>
            </div>
            <div class="detail">
                <img src="images/recipe0.png" alt="">
                <div>
                    <h3><span>Chocolat</span><span>5&#8364;</span></h3>
                    <p>Découvrez l'extase du chocolat pur avec notre glace au chocolat. Fabriquée avec du chocolat noir de haute qualité, elle offre une texture riche et crémeuse qui ravira tous les amateurs de cacao.</p>
                </div>
            </div>
            <div class="detail">
                <img src="images/recipe1.png" alt="">
                <div>
                    <h3><span>Fraise</span><span>5&#8364;</span></h3>
                   <p>Succombez à la douceur de notre glace à la fraise. Réalisée avec des fraises fraîches et juteuses, elle combine une saveur délicatement sucrée à une texture onctueuse pour un plaisir fruité irrésistible.</p>
                    <!-- <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p> -->
                </div>
            </div>
            <div class="detail">
                <img src="images/mente1.png" alt="">
                <div>
                    <h3><span>Menthe</span><span>5&#8364;</span></h3>
                    <p>Profitez d'un festival de saveurs avec notre glace à la menthe, d'une fraicheur.</p>
                    <!-- <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p> -->
                </div>
            </div>
        </div>
        <div class="img">
            <img src="images/img_6.png" alt="">
        </div>
    </div>
    <div class="box-container">
        <div class="recipe">
            <h1>Recette de Cornet de Gaufre</h1>
            <div class="detail">
                <img src="images/recipe.png" alt="">
                <div>
                    <h3><span>Vanille</span><span>5&#8364;</span></h3>
                    <p>Plongez dans une explosion tropicale avec notre glace à la mangue. Faite à partir de mangues mûres et juteuses.</p>
                </div>
            </div>
            <div class="detail">
                <img src="images/recipe0.png" alt="">
                <div>
                    <h3><span>Chocolat</span><span>5&#8364;</span></h3>
                    <p>Découvrez l'extase du chocolat pur avec notre glace au chocolat. Fabriquée avec du chocolat noir de haute qualité, elle offre une texture riche et crémeuse qui ravira tous les amateurs de cacao.</p>
                </div>
            </div>
            <div class="detail">
                <img src="images/recipe1.png" alt="">
                <div>
                    <h3><span>Fraise</span><span>5&#8364;</span></h3>
                   <p>Succombez à la douceur de notre glace à la fraise. Réalisée avec des fraises fraîches et juteuses, elle combine une saveur délicatement sucrée à une texture onctueuse pour un plaisir fruité irrésistible.</p>
                    <!-- <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p> -->
                </div>
            </div>
            <div class="detail">
                <img src="images/mente1.png" alt="">
                <div>
                    <h3><span>Menthe</span><span>5&#8364;</span></h3>
                    <p>Profitez d'un festival de saveurs avec notre glace à la menthe, d'une fraicheur.</p>
                    <!-- <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p> -->
                </div>
            </div>
        </div>
        <div class="img">
            <img src="images/log.png" alt="">
        </div>
    </div>

    <!-- <div class="box-container"> 
        <div class="img">
            <img src="images/log.png" alt="">
        </div>
        <div class="recipe">
            <h1>Recette Classique</h1>
            <div class="detail">
                <img src="images/recipe.png" alt="">
                <div>
                    <h3><span>mangue</span><span>5&#8364;</span></h3>
                    <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p>
                </div>
            </div>
            <div class="detail">
                <img src="images/recipe0.png" alt="">
                <div>
                    <h3><span>fraise</span><span>5&#8364;</span></h3>
                    <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p>
                </div>
            </div>
            <div class="detail">
                <img src="images/recipe1.png" alt="">
                <div>
                    <h3><span>chocolat</span><span>5&#8364;</span></h3>
                    <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p>
                </div>
            </div>
            <div class="detail">
                <img src="images/recipe2.png" alt="">
                <div>
                    <h3><span>mélange de fruits</span><span>5&#8364;</span></h3>
                    <p>Suscipit torquent class sollicitudin hendrerit dictumst tellus turpis massa netus rhoncus in pharetra aenean</p>
                </div>
            </div>
        </div>
     </div> -->
</section>
<!-- boutique -->
<!-- section boutique -->
    <section class="shop" id="shop">
        <!-- ///////////////////////////////////////////////__________________________________________ -->
        <h1 class="heading"> <i class="fas fa-quote-left"></i> Nos meilleures ventes <i class="fas fa-quote-right"></i></h1>
        
       <!--  -->
        <div class="box-container pro-container">     <!-- pro-container-->
            <div class="box pro">
                <div class="detail">
                    <img src="images/product.png"  class="product-img" alt="">
                    
                    <h3 class="product-title"> 3 boules vanille </h3>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <style>
                    .star i {color: #FFD700; font-size: 15px; }
                    .price { color : #088178; font-size: 20px;}
                .cartt .add-cart {  border-radius: 20px;
    background-color: #BBE4DF;
    padding: 1rem 2rem;
    cursor: pointer;
    text-transform: capitalize;
    text-align: center;
    font-size: 1.9rem;
    color: #000;
    transition: .5s;
                        
                    } 
                </style>
                <h4 class="price">10.50&#8364;</h4>
                <p>Mélange savoureux aimé par nos clients </p>
                <i class="fa-solid fa-cart-shopping cartt add-cart  btn"></i>
                </div>
            </div>
            <!-- oiuytr -->
            <div class="box pro">
                <div class="detail">
                    <img src="images/product0.png"  class="product-img" alt="">
                    
                    <h3 class="product-title">Glaces</h3>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <style>
                    .star i {color: #FFD700; font-size: 15px; }
                    .price { color : #088178; font-size: 20px;}
                .cartt .add-cart {  border-radius: 20px;
    background-color: #BBE4DF;
    padding: 1rem 2rem;
    cursor: pointer;
    text-transform: capitalize;
    text-align: center;
    font-size: 1.9rem;
    color: #000;
    transition: .5s;
                        
                    } 
                </style>
                <h4 class="price">10.50&#8364;</h4>
                <p>Mélange savoureux aimé par nos clients </p>
                <i class="fa-solid fa-cart-shopping cartt add-cart  btn"></i>

                </div>
            </div>
            <div class="box pro">
                <div class="detail">
                    <img src="images/product1.png"  class="product-img" alt="">
                    
                    <h3 class="product-title">3 boules</h3>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <style>
                    .star i {color: #FFD700; font-size: 15px; }
                    .price { color : #088178; font-size: 20px;}
                .cartt .add-cart {  border-radius: 20px;
    background-color: #BBE4DF;
    padding: 1rem 2rem;
    cursor: pointer;
    text-transform: capitalize;
    text-align: center;
    font-size: 1.9rem;
    color: #000;
    transition: .5s;
                        
                    } 
                </style>
                <h4 class="price">10.50&#8364;</h4>
                <p>Mélange savoureux aimé par nos clients </p>
                <i class="fa-solid fa-cart-shopping cartt add-cart  btn"></i>

                </div>
            </div>
            <div class="box pro">
                <div class="detail">
                    <img src="images/product2.png"  class="product-img" alt="">
                    
                    <h3 class="product-title">3 boules</h3>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <style>
                    .star i {color: #FFD700; font-size: 15px; }
                    .price { color : #088178; font-size: 20px;}
                .cartt .add-cart {  border-radius: 20px;
    background-color: #BBE4DF;
    padding: 1rem 2rem;
    cursor: pointer;
    text-transform: capitalize;
    text-align: center;
    font-size: 1.9rem;
    color: #000;
    transition: .5s;
                        
                    } 
                </style>
                <h4 class="price">10.50&#8364;</h4>
                <p>Mélange savoureux aimé par nos clients</p>
                <i class="fa-solid fa-cart-shopping cartt add-cart  btn"></i>

                </div>
            </div>
            <div class="box pro">
                <div class="detail">
                    <img src="images/product3.png"  class="product-img" alt="">
                    
                    <h3 class="product-title">3 boules</h3>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <style>
                    .star i {color: #FFD700; font-size: 15px; }
                    .price { color : #088178; font-size: 20px;}
                .cartt .add-cart {  border-radius: 20px;
    background-color: #BBE4DF;
    padding: 1rem 2rem;
    cursor: pointer;
    text-transform: capitalize;
    text-align: center;
    font-size: 1.9rem;
    color: #000;
    transition: .5s;
                        
                    } 
                </style>
                <h4 class="price">10.50&#8364;</h4>
                <p>Mélange savoureux aimé par nos clients </p>
                <i class="fa-solid fa-cart-shopping cartt add-cart  btn"></i>

                </div>
            </div>
            <div class="box pro">
                <div class="detail">
                    <img src="images/product4.png"  class="product-img" alt="">
                    
                    <h3 class="product-title">3 boules</h3>
                    <div class="star">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
                <style>
                    .star i {color: #FFD700; font-size: 15px; }
                    .price { color : #088178; font-size: 20px;}
                .cartt .add-cart {  border-radius: 20px;
    background-color: #BBE4DF;
    padding: 1rem 2rem;
    cursor: pointer;
    text-transform: capitalize;
    text-align: center;
    font-size: 1.9rem;
    color: #000;
    transition: .5s;
                        
                    } 
                </style>
                <h4 class="price">10.45&#8364;</h4>
                <p>Mélange savoureux aimé par nos clients</p>
                <i class="fa-solid fa-cart-shopping cartt add-cart  btn"></i>

                </div>
            </div>
            <!-- fa-solid fa-cart-shopping  c -
           
            <div class="box">
                <div class="detail">
                    <img src="images/product0.png" alt="">
                    <h3>Glaces</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nemo ?</p>
                    <a href="" class="btn">Acheter maintenant</a>
                </div>
            </div>
            <div class="box">
                <div class="detail">
                    <img src="images/product1.png" alt="">
                    <h3>Glaces</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nemo ?</p>
                    <a href="" class="btn">Acheter maintenant</a>
                </div>
            </div>
            <div class="box">
                <div class="detail">
                    <img src="images/product4.png" alt="">
                    <h3>Glaces</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nemo ?</p>
                    <a href="" class="btn">Acheter maintenant</a>
                </div>
            </div>
            <div class="box">
                <div class="detail">
                    <img src="images/product2.png" alt="">
                    <h3>Glaces</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nemo ?</p>
                    <a href="" class="btn">Acheter maintenant</a>
                </div>
              </div> 
            <div class="box">
    <div class="detail">
        <img src="images/product3.png" alt="">
        <h3>glaces</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, nemo?</p>
        <a href="" class="btn">acheter maintenant</a>
     </div> 
</div>-->
</div>
</section> 
<!-- section contact -->
<section class="faq" id="faq">
    <h1 class="heading">Questions Fréquemment Posées</h1>
    <div class="box-container">
        <div class="img-box">
            <div class="overlay"></div>
            <img src="images/1.jpg" alt="">
            <div class="detail">
                <i class='bx bx-headphone' ></i><br>
                <span>BESOIN DE PLUS D'AIDE ?</span>
                <h2 style="word-break: break-all;">01-40-04-23-14</h2>
                <!-- <h2> style=""le01-40-04-23-14</h2> -->
                <a href="" class="btn">appelez-nous</a>
            </div>
        </div>
        <div class="accordion">
            <div class="contentBox">
                <div class="label">Où sont situées vos boutiques de crème glacée ?</div>
                <div class="content">
                    <p>Nos boutiques de crème glacée sont situées à plusieurs endroits à Paris, y compris dans le 15ème arrondissement
                        à l'adresse : 15 rue quai grenelle 75150, paris. 
                    </p>
                </div>
            </div>
            <div class="contentBox">
                <div class="label">Quels sont vos horaires d'ouverture dans le 15ème arrondissement ?</div>
                <div class="content">
                    <p>Notre boutique dans le 15ème arrondissement de Paris est ouverte du lundi au dimanche, de 10h à 22h. Pour les horaires exacts de toutes nos boutiques.</p>
                </div>
            </div>
            <div class="contentBox">
                <div class="label">Proposez-vous des options sans gluten/sans lactose ?</div>
                <div class="content">
                    <p>Oui, nous proposons des options sans gluten et sans lactose. Nous avons une gamme de crèmes glacées adaptées aux personnes ayant des restrictions alimentaires. N'hésitez pas à demander plus d'informations sur "Contact" du site.
                    </p>
                </div>
            </div>
            <div class="contentBox">
                <div class="label">Avez-vous un programme de fidélité ?</div>
                <div class="content">
                    <p>Oui, nous avons un programme de fidélité qui vous permet de gagner des points à chaque achat. Ces points peuvent être échangés contre des réductions ou des produits gratuits. Inscrivez-vous à notre newsletter pour en savoir plus.
                    </p>
                </div>
            </div>
            <div class="contentBox">
                <div class="label">Comment puis-je contacter le service client ?</div>
                <div class="content">
                <p>Vous pouvez contacter notre service client via notre formulaire de contact en ligne, par e-mail à support@icecreamshop.com, ou par téléphone au +33 1 23 45 67 89.</p>
</div>
</div>

<div class="contentBox">
    <div class="label">Est-il possible d'avoir une consultation vidéo/téléphonique avant de visiter la clinique ?</div>
    <div class="content">
        <p>Oui, vous pouvez consulter un dentiste via une vidéo ou un appel téléphonique avant de visiter la clinique. Pour votre commodité et votre sécurité, nous avons décidé de rendre notre consultation initiale plus facile d'accès. Chez Clove Dental, nos dentistes sont maintenant disponibles pour donner des avis et des conseils professionnels par vidéo ou par téléconsultation.</p>
    </div>
</div>
</div>
</div>
</section>
<!-- section articles 
<section class="post" id="blog">
    <h1 class="heading"> <i class="fas fa-quote-left"></i> nos derniers articles <i class="fas fa-quote-right"></i></h1>
    <div class="box-container">
        <div class="box">
            <img src="images/blog.jpg" alt="">
            <div class="content">
                <span><i class='bx bxs-calendar-alt'></i>2 janv. 2023</span>
                <h3>titre de l'article ici</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo veritatis nostrum voluptates cumque deserunt incidunt, minus mollitia rem molestiae ad.</p>
                <a href="#" class="btn">lire plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/blog0.jpg" alt="">
            <div class="content">
                <span><i class='bx bxs-calendar-alt'></i>2 janv. 2023</span>
                <h3>titre de l'article ici</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo veritatis nostrum voluptates cumque deserunt incidunt, minus mollitia rem molestiae ad.</p>
                <a href="#" class="btn">lire plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/blog1.jpg" alt="">
            <div class="content">
                <span><i class='bx bxs-calendar-alt'></i>2 janv. 2023</span>
                <h3>titre de l'article ici</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo veritatis nostrum voluptates cumque deserunt incidunt, minus mollitia rem molestiae ad.</p>
                <a href="#" class="btn">lire plus</a>
            </div>
        </div>
    </div>
</section> -->
<?php include 'formulaire.php';
        include 'BarreDeroulante.php';
?>


<!-- section clients 
<section class="client">
    <div class="box-container">
        <img src="images/client.png" alt="">
        <img src="images/client0.png" alt="">
        <img src="images/client1.png" alt="">
        <img src="images/client2.png" alt="">
        <img src="images/client3.png" alt="">
        <img src="images/client3.png" alt="">
    </div>
</section>
 section footer -->
 <footer>
        <div class="content">
            <div class="box">
            <a href="#">
        <i class='bx bxs-popsicle popi'></i>
        <span class="popsicle-text">Yummy</span>
    </a>
        <style>
            .bx.bxs-popsicle {
            color: pink;
            font-size: 35px;
        }
        .popsicle-text {
            color: #66C3B8;
            font-size: 37px;
            font-weight: bold;
        }
    </style>
                <!-- <img src="images/logo.png"> -->
                <h3>Découvrez l'Univers Délicieux de Yummy!</h3>
                <p>Rejoignez-nous pour savourer les meilleures crèmes glacées artisanales. Suivez-nous sur les réseaux sociaux pour des mises à jour gourmandes et des offres exclusives!</p>
                <!-- <p>Nous sommes toujours à la recherche de personnes talentueuses et motivées. N'hésitez pas à vous présenter !</p> -->
                <a href="contact.php" class="btn">Contactez-nous</a>
            </div>
            <div class="box">
                <h3>Liens utiles</h3>
                <a href="https://www.santemagazine.fr/alimentation/aliments-et-sante/produits-sucres/combien-de-calories-contient-une-glace-et-quels-sont-ses-bienfaits-894910#:~:text=Les%20bienfaits%20de%20la%20glace%20sur%20la%20sant%C3%A9,-Quels%20apports%20en&text=Et%20il%20se%20trouve%20que,ne%20remplacent%20pas%20un%20laitage.">Bienfaits des glaces</a>
                <a href="https://www.weightwatchers.com/ch/fr/blog/alimentation/recettes-glaces-saines"> recette de glaces saines</a>
                <a href="https://www.apivia.fr/actualites/toute-l-actu/bien-shydrater-en-ete/#:~:text=Les%20fruits%20et%20l%C3%A9gumes%20frais,%2C%20melon)%20pour%20vous%20d%C3%A9salt%C3%A9rer%20!">Bien s'hydrater en été</a>
                <a href="https://www.inrae.fr/actualites/sucre-facteur-risque-cancer#:~:text=L'exc%C3%A8s%20de%20sucre%2C%20et,2%20et%20de%20maladies%20cardiovasculaires.">Ice cream</a>
                <a href="https://www.inrae.fr/actualites/sucre-facteur-risque-cancer#:~:text=L'exc%C3%A8s%20de%20sucre%2C%20et,2%20et%20de%20maladies%20cardiovasculaires.">Abus de sucre</a>
            </div>
            <div class="box">
                <h3>Notre entreprise</h3>
                <a href="contact.php">Contactez-nous</a>
                <a href="index.php">Page d'accueil</a>
                <a href="blog.php">Blog</a>
                <a href="login-register-main/logout.php">Se connecter</a>
                <a href="productDetails.php">Boutique</a>
            </div>
            <div class="box">
                <h3>Nous contacter</h3>
                <p>Téléphone :01 36 45 78 85</p>
                <p>Email : serviceclientyummy@gmail.com</p>
                <p>Lieu : France, paris</p>
                <div class="icons">
                    <a href="https://www.instagram.com/yummy202427?igsh=MWZ1bmU5MXFtYWphZw%3D%3D&utm_source=qr"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.tiktok.com/@yummy_292?_t=8nVR8KUMPQc&_r=1"><i class='bx bxl-tiktok'></i></a>
                    <a href=""><i class='bx bxl-facebook-circle' ></i></a>
                    <a href=""><i class='bx bxl-twitter' ></i></a>
                   <style>
    .icons {
        display: flex;
        gap: 10px; /* Ajustez l'espace entre les icônes selon vos préférences */
    }
    .icons a {
        display: flex;
        align-items: center;
        justify-content: center;
    }
</style>
                </div>
            </div>
        </div>
        <div class="bottom">
            <p>Copyright © 2024 Khadidiatou_Salimata_Koudedia_Ameziane. Tous droits réservés</p>
            <a href="espace_adminpp/admin_dashbord.php">Espace admin</a>
        </div>
        <style>
             p {
        color:black;
    }
        </style>
    </footer>
<?php
include 'popup.php'
?>
<script src="JS/script.js"></script>
<script src="JS/cart.js"></script>
</body>
</html>

