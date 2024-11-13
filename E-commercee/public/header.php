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
    font-size: 30px;
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
        <li><a href="ecomerce.php">À propos</a></li>
        <li><a href="productDetails.php">Glaces</a></li>
        <li><a href="sorbet.php">Sorbet</a></li>
        <li><a href="glace_bio.php">Bio</a></li>
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
<script src="JS/script.js"></script>
<script src="JS/cart.js"></script>