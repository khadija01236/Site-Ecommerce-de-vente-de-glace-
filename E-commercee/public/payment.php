<?php
 include 'curseur.php';
 ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire de paiement responsive pour passerelle de paiement en hindi</title>
    <link rel="stylesheet" type="text/css" href="payment.css">
</head>
<body>
<header>
    <div class="container">
        <div class="left">
            <h3>ADRESSE DE FACTURATION</h3>
            <form>
                Nom complet
                <input type="text" name="" placeholder="Entrez votre nom">
                Email
                <input type="text" name="" placeholder="Entrez votre email">

                Adresse
                <input type="text" name="" placeholder="Entrez votre adresse">
                
                Ville
                <input type="text" name="" placeholder="Entrez votre ville">
                <div id="zip">
                    <label>
                        État
                        <select>
                            <option>Choisir l'état..</option>
                            <option>Rajasthan</option>
                            <option>Haryana</option>
                            <option>Uttar Pradesh</option>
                            <option>Madhya Pradesh</option>
                        </select>
                    </label>
                        <label>
                        Code postal
                        <input type="number" name="" placeholder="Code postal">
                    </label>
                </div>
            </form>
        </div>
        <div class="right">
            <h3>PAIEMENT</h3>
            <form>
                Carte acceptée <br>
                <img src="image/card1.png" width="100">
                <img src="image/card2.png" width="50">
                <br><br>

                Numéro de carte de crédit
                <input type="text" name="" placeholder="Entrez le numéro de carte">
                
                Mois d'expiration
                <input type="text" name="" placeholder="Entrez le mois">
                <div id="zip">
                    <label>
                        Année d'expiration
                        <select>
                            <option>Choisir l'année..</option>
                            <option>2022</option>
                            <option>2023</option>
                            <option>2024</option>
                            <option>2025</option>
                        </select>
                    </label>
                        <label>
                        CVV
                        <input type="number" name="" placeholder="CVV">
                    </label>
                </div>
            </form>
            <input type="submit" name="" value="Procéder au paiement">
        </div>
    </div>
</header>
</body>
</html>
