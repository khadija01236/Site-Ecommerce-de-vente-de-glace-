<?php
 include 'curseur.php';
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blog - Frenchcoder</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"/>
</head>
<body>
  <?php 
  include 'header.php';
  ?>
  <br><br><br><br>
  
  <section class="articles">
    <h2 class="blog">Bienvenue à la section blog</h2><br><br><br>
    
     <div class="article">
      <div class="left">
        <img src="images/smiley.png" alt="Smiley">
      </div>
      <div class="right">
        <p class="date">Mai, 05, 2024</p>
        <h4>Les Meilleurs Parfums de Glace pour l'Été</h4>
        <p class="description">Découvrez les parfums de glace les plus rafraîchissants pour cet été. De la vanille classique aux mélanges exotiques, trouvez votre nouvelle saveur préférée.</p>
        <p class="auteur">Arnauld</p>
      </div>
    </div> 
    
    <div class="article">
      <div class="left">
        <img src="images/portrait1 (1).png" alt="Portrait">
      </div>
      <div class="right">
        <p class="date">Juin, 04, 2024</p>
        <h4>Interview - Les Secrets d'un Artisan Glacier</h4>
        <p class="description">Rencontrez Jean-Pierre, un artisan glacier passionné, et découvrez les secrets derrière ses délicieuses créations glacées.</p>
        <p class="auteur">Sarah</p>
      </div>
    </div>
    
    <div class="article">
      <div class="left">
        <img src="images/portrait1 (2).png" alt="Portrait">
      </div>
      <div class="right">
        <p class="date">Mai, 24, 2024</p>
        <h4>Les Glaces Bio : Une Tendance à Savourer</h4>
        <p class="description">Les glaces bio gagnent en popularité. Apprenez-en plus sur cette tendance et pourquoi vous devriez les essayer cet été.</p>
        <p class="auteur">Julie Lablonde</p>
      </div>
    </div>
  </section>

  <section class="post" id="blog">
    <h1 class="heading"> <i class="fas fa-quote-left"></i> Nos Derniers Articles <i class="fas fa-quote-right"></i></h1>
    <div class="box-container">
        <div class="box">
            <img src="images/blog.jpg" alt="Glace">
            <div class="content">
                <span><i class='bx bxs-calendar-alt'></i>2 janv. 2023</span>
                <h3>Les Tendances Glace de 2023</h3>
                <p>Découvrez les tendances en matière de glaces pour 2023, des nouvelles saveurs aux innovations écologiques.</p>
                <a href="https://www.topsante.com/nutrition-et-recettes/manger-equilibre/conseils-dietetiques/mangez-des-glaces-bonnes-pour-la-sante-22310" class="btn">Lire plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/blog0.jpg" alt="Glace">
            <div class="content">
                <span><i class='bx bxs-calendar-alt'></i>2 janv. 2023</span>
                <h3>Comment Fabriquer sa Propre Glace Maison</h3>
                <p>Une guide pour fabriquer votre propre glace maison avec des ingrédients simples et naturels.</p>
                <a href="https://www.topsante.com/nutrition-et-recettes/manger-equilibre/conseils-dietetiques/mangez-des-glaces-bonnes-pour-la-sante-22310" class="btn">Lire plus</a>
            </div>
        </div>
        <div class="box">
            <img src="images/blog1.jpg" alt="Glace">
            <div class="content">
                <span><i class='bx bxs-calendar-alt'></i>2 janv. 2023</span>
                <h3>Les Bienfaits des Glaces à Base de Fruits</h3>
                <p>Les glaces à base de fruits sont non seulement délicieuses mais aussi bénéfiques pour la santé. Découvrez pourquoi.</p>
                <a href="https://www.topsante.com/nutrition-et-recettes/manger-equilibre/conseils-dietetiques/mangez-des-glaces-bonnes-pour-la-sante-22310" class="btn">Lire plus</a>
            </div>
        </div>
    </div>
</section> 
  
<!-- <footer> 
    <h2>&copy; 2021, by Julie Lablonde</h2>
    <div class="social-media">
      <p><i class="fab fa-facebook"></i></p>
      <p><i class="fab fa-twitter"></i></p>
      <p><i class="fab fa-instagram"></i></p>
    </div>
</footer> -->
</body>
<style>
@import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Crimson+Text:wght@600&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-transform: capitalize;
    text-decoration: none;
    transition: all .5s cubic-bezier(.37,1.14,.26,1.24);
}
html{
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
    scroll-padding-top: 4rem;
}
body{ 
  margin: 5px 80px;
  font-family: 'Noto Sans JP', sans-serif;
}
.blog {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 3rem;
  color: #66C3B8;
}


p {
  font-size:1.5rem
}
nav {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}
nav h1{
  font-family: 'Crimson Text', serif;
  font-size: 30px;
}
nav .onglets{
  margin-top: 35px;
}
nav .onglets a{
  text-decoration: none;
  color: #7f7e7e;
  margin-right: 10px;
}

.articles{
  margin-top: 30px;
}
.articles .article{
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 30px;
}
.articles .article .left img{
  height: 300px;
  width: 500px;
}
.articles .article .right {
  margin-left: 40px;
  max-width: 50%;
}
.articles .article .right p.date{
  color: #7f7e7e;
}
.articles .article .right p.description{
  color: #2d2d2d;
}

footer {
  margin-top: 30px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  color: #494949;
}
footer h2{
  font-size: 20px;
  font-family: 'Crimson Text', serif;
  margin-top: 20px;
}
footer .social-media{
  display: flex;
}
footer .social-media p{
  font-size: 18px;
  margin-right: 20px;
}

@media screen and (max-width: 640px){
  body{
    margin: 10px 20px;
  }
  nav .onglets{
    margin-top: -10px;
  }
  .articles .article .left img{
    height: 100%;
    width: 100%;
  }
  .articles .article .right{
    margin: 0px;
    max-width: 100%;
  }
  footer .social-media{
    margin-top: -20px;
  }
}
</style>
<?php 
  include 'footer.php';
?>
</html>
