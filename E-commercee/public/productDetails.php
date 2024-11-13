
<?php
 include 'curseur.php';
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Box icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
    <!-- Custom StyleSheet -->
    <link rel="stylesheet" href="style/styles1.css"/>
    <link rel="stylesheet" href="CSS/styles.css"/>
    <title>Glace Yummy - Codevo</title>
  </head>

    <!-- Détails du produit  -->
    <?php
    include 'header.php'
    ?>
    <section class="section product-detail">
      <div class="details  ">
        <div class="left image-container">
          <div class="main">
            <img src="images/vanille.jpeg" id="zoom" alt="Glace vanille" />
          </div>
        </div>
        <div class="right">
          <span>Accueil/Glace</span>
          <h1>Glace Vanille</h1>
          <div class="price">3€</div>
          <form>
            <div>
              <select>
                <option value="Select Size" selected>
                  Sélectionner Taille
                </option>
                <option value="petite">Petite</option>
                <option value="moyenne">Moyenne</option>
                <option value="grande">Grande</option>
              </select>
              <span><i class="bx bx-chevron-down"></i></span>
            </div>
          </form>
          <form class="form">
            <input type="text" placeholder="1" />
            <!-- <i class="fa-solid fa-cart-shopping cartt add-cart  btn "></i> -->
            <a href="#" class="addCart">Ajouter au panier</a>
          </form>
          <h3>Détail du produit</h3>
          <p>
            Délicieuse glace à la vanille fabriquée avec des ingrédients de qualité supérieure pour une expérience gustative exceptionnelle.
          </p>
        </div>
      </div>
    </section>
    
    <section class="section product-detail">
      <div class="details  ">
        <div class="left image-container">
          <div class="main">
            <img src="images/product4.png" id="zoom" alt="Glace chocolat" />
          </div>
        </div>
        <div class="right">
          <span>Accueil/Glace</span>
          <h1>Glace Chocolat</h1>
          <div class="price">3€</div>
          <form>
            <div>
              <select>
                <option value="Select Size" selected >
                  Sélectionner Taille
                </option>
                <option value="petite">Petite</option>
                <option value="moyenne">Moyenne</option>
                <option value="grande">Grande</option>
              </select>
              <span><i class="bx bx-chevron-down"></i></span>
            </div>
          </form>
          <form class="form">
            <input type="text" placeholder="1" />
            <a href="cart.html" class="addCart">Ajouter au panier</a>
          </form>
          <h3>Détail du produit</h3>
          <p>
            Savoureuse glace au chocolat faite avec du cacao pur et des ingrédients frais pour une saveur riche et intense.
          </p>
        </div>
      </div>
    </section>
    
    <section class="section product-detail">
      <div class="details  ">
        <div class="left image-container">
          <div class="main">
            <img src="images/mint.jpeg" id="zoom" alt="Glace menthe" />
          </div>
        </div>
        <div class="right">
          <span>Accueil/Glace</span>
          <h1>Glace Menthe</h1>
          <div class="price">3€</div>
          <form>
            <div>
              <select>
                <option value="Select Size">
                  Sélectionner Taille
                </option>
                <option value="petite">Petite</option>
                <option value="moyenne">Moyenne</option>
                <option value="grande">Grande</option>
              </select>
              <span><i class="bx bx-chevron-down"></i></span>
            </div>
          </form>
          <form class="form">
            <input type="text" placeholder="1" />
            <a href="cart.html" class="addCart">Ajouter au panier</a>
          </form>
          <h3>Détail du produit</h3>
          <p>
            Rafraîchissante glace à la menthe avec des morceaux de chocolat croquants, parfaite pour une pause gourmande.
          </p>
        </div>
      </div>
    </section>
    
    <section class="section product-detail">
      <div class="details  ">
        <div class="left image-container">
          <div class="main">
            <img src="images/back3.jpeg" id="zoom" alt="Glace pistache" />
          </div>
        </div>
        <div class="right">
          <span>Accueil/Glace</span>
          <h1>Glace Pistache</h1>
          <div class="price">3€</div>
          <form>
            <div>
              <select>
                <option value="Select Size" selected>
                  Sélectionner Taille
                </option>
                <option value="petite">Petite</option>
                <option value="moyenne">Moyenne</option>
                <option value="grande">Grande</option>
              </select>
              <span><i class="bx bx-chevron-down"></i></span>
            </div>
          </form>
          <form class="form">
            <input type="text" placeholder="1" />
            <a href="#" class="addCart">Ajouter au panier</a>
          </form>
          <h3>Détail du produit</h3>
          <p>
            Glace crémeuse à la pistache, préparée avec des pistaches fraîchement grillées pour un goût authentique.
          </p>
        </div>
      </div>
    </section>
    
    <section class="section product-detail">
  <div class="details">
    <div class="left image-container">
      <div class="main">
        <img src="images/fraise.png" id="zoom" alt="Glace fraise" />
      </div>
    </div>
    <div class="right">
      <span>Accueil/Glace</span>
      <h1>Glace Fraise</h1>
      <div class="price">3€</div>
      <form>
        <div>
          <select name="size">
            <option value="Select Size" selected>
              Sélectionner Taille
            </option>
            <option value="petite">Petite</option>
            <option value="moyenne">Moyenne</option>
            <option value="grande">Grande</option>
          </select>
          <span><i class="bx bx-chevron-down"></i></span>
        </div>
      </form>
      <form class="form">
        <input type="text" placeholder="1" />
        <a href="#" class="addCart">Ajouter au panier</a>
      </form>
      <h3>Détail du produit</h3>
      <p>
        Délicieuse glace à la fraise, faite avec des fraises fraîches pour une saveur fruitée et rafraîchissante.
      </p>
    </div>
  </div>
</section>

    <style>
      .product-detail .left .main {
  text-align: center;
  background-color: #f6f2f1;
  margin-bottom: 2rem;
  height: auto; /* Ajuste automatiquement à la taille de l'image */
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem; /* Ajouter du padding pour réduire la taille visuelle */
}

.product-detail .left .main img {
  object-fit: cover;
  max-height: 300px; /* Hauteur maximale de l'image */
  max-width: 300px;  /* Largeur maximale de l'image */
  width: auto; /* Permet à l'image de conserver son ratio d'aspect */
  height: auto; /* Permet à l'image de conserver son ratio d'aspect */
}

.product-detail .left {
  margin-left: auto; /* Centrer horizontalement la section gauche */
  margin-right: auto; /* Centrer horizontalement la section gauche */
  width: fit-content; /* Ajuster la largeur à son contenu */
}
/*  */
.product-detail .left .main {
      text-align: center;
      background-color: #f6f2f1;
      margin-bottom: 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1rem;
    }

    .product-detail .left .main img {
      object-fit: cover;
      max-height: 300px;
      max-width: 300px;
      width: auto;
      height: auto;
    }
    <style>
      .product-detail .left .main {
  text-align: center;
  background-color: #f6f2f1;
  margin-bottom: 2rem;
  height: auto; /* Ajuste automatiquement à la taille de l'image */
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 1rem; /* Ajouter du padding pour réduire la taille visuelle */
}

.product-detail .left .main img {
  object-fit: cover;
  max-height: 300px; /* Hauteur maximale de l'image */
  max-width: 300px;  /* Largeur maximale de l'image */
  width: auto; /* Permet à l'image de conserver son ratio d'aspect */
  height: auto; /* Permet à l'image de conserver son ratio d'aspect */
}

.product-detail .left {
  margin-left: auto; /* Centrer horizontalement la section gauche */
  margin-right: auto; /* Centrer horizontalement la section gauche */
  width: fit-content; /* Ajuster la largeur à son contenu */
}
/*  */
.product-detail .left .main {
      text-align: center;
      background-color: #f6f2f1;
      margin-bottom: 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 1rem;
    }

    .product-detail .left .main img {
      object-fit: cover;
      max-height: 300px;
      max-width: 300px;
      width: auto;
      height: auto;
    }

    .product-detail .left {
      margin-left: auto;
      margin-right: auto;
      width: fit-content;
    }

    select {
      width: 100%;
      padding: 0.5rem;
      margin-top: 1rem;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    select:focus {
      border-color: #007bff;
      box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
      outline: none;
    }
</style>

    <?php
    include 'footer.php'
    ?>
  
    <!-- Custom Script -->
    <script src="java-script/index.js"></script>
    <script
      src="https://code.jquery.com/jquery-3.4.0.min.js"
      integrity="sha384-JUMjoW8OzDJw4oFpWIB2Bu/c6768ObEthBMVSiIx4ruBIEdyNSUQAjJNFqT5pnJ6"
      crossorigin="anonymous"
    ></script>
    <script src="java-script/zoomsl.min.js"></script>
    <script>
      $(function () {
        console.log("hello");
        $("#zoom").imagezoomsl({
          zoomrange: [4, 4],
        });
      });
      // azertyuiopsdfghjkxcvbn
    
  // JavaScript pour le formulaire (optionnel)
  document.getElementById('product-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche l'envoi du formulaire pour cet exemple
    let selectedSize = document.getElementById('size').value;
    console.log('Taille sélectionnée :', selectedSize);
    // Ici, vous pouvez ajouter le code pour traiter le formulaire (envoi au panier, etc.)
    // Exemple : fetch('url_du_serveur', { method: 'POST', body: new FormData(this) });
  });

    </script>
    <script src="JS/script.js"></script>
    <script src="JS/cart.js"></script>
  </body>
</html>