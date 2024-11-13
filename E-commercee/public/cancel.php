<?php
 include 'curseur.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cancel payment</title>
    <!-- <link rel="stylesheet" href="..CSS/style.css"> -->
</head>
<body>
    <style>
        
.sc-container{
  width: 100%;
  height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
.sc-container img
{
  width: 200px;
  margin: 2rem 0;
}
.sc-container h1{
  font-size: 2.8rem;
  margin-bottom: 10px;
}
.sc-container p{
  max-width: 600px;
  font-size: 0.970rem;
  text-align: center;
  margin: 0.5rem 0;
}
.sc-btn{
  padding: 12px 20px;
  border-radius: 2rem;
  background: green;
  color: white;
  font-size: 1rem;
  font-weight: 500;
}
    </style>
   <div class="sc-container">
    <h1>Une erreur s'est produite</h1>
    <p>Nous nous s'éxcusons du désagrément mais une erreur s'est produite lors du processus de paiement</p>
    <p>N'hésitez pas a contacter notre service client a cette adresse mail : support@yummy.fr</p>
    <img src="images/cancel (1).png" alt="">
    <a href="http://localhost:3000" class="sc-btn">Retourner à la page d'accueil</a>
   </div>
</body>
</html>