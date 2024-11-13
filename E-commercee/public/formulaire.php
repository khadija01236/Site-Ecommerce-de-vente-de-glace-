<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "Bace2022";
$dbname = "newsletter_db";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Vérifier et créer la table si elle n'existe pas
$sql = "CREATE TABLE IF NOT EXISTS subscribers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";
if ($conn->query($sql) === FALSE) {
    die("Erreur de création de la table: " . $conn->error);
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validation de l'e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Préparer et exécuter la requête pour vérifier si l'email existe déjà
        $stmt = $conn->prepare("SELECT * FROM subscribers WHERE email = ?");
        if ($stmt) {
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                $message = "Vous êtes déjà inscrit à notre newsletter.";
            } else {
                // Préparer et exécuter la requête pour insérer un nouvel email
                $stmt = $conn->prepare("INSERT INTO subscribers (email) VALUES (?)");
                if ($stmt) {
                    $stmt->bind_param("s", $email);
                    if ($stmt->execute()) {
                        $message = "Merci pour votre inscription !";
                    } else {
                        $message = "Erreur : " . $stmt->error;
                    }
                } else {
                    $message = "Erreur de préparation de la déclaration : " . $conn->error;
                }
            }
            $stmt->close();
        } else {
            $message = "Erreur de préparation de la déclaration : " . $conn->error;
        }
    } else {
        $message = "Adresse e-mail invalide.";
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
<style>

#newsletter {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            align-items: center;
            background-image: url(images/back1.jpg);
            background-position: 20% 30%;
            padding: 20px;
            border-radius: 10px;
            height: 150px;
            width: auto;
            /* font-weight: 4rem; */
        }

#newsletter h4
{
    font-size: 22px;
    font-weight: 700;
  /*font-size: 1.5rem;
  font-weight: 700;
  padding-left: 10px;*/
}

#newsletter p
{
    font-size: 14px;
    font-weight: 600;
    color: #000;
  /*font-size: 1rem;
  font-weight: 600;
  color: #000;
  padding-left: 10px;*/
}

#newsletter p span
{
    /* font-size: 14px; */
    /* font-weight: 600; */
    color: #bd1e09;
}

#newsletter input {
            height: 3.125rem;
            padding: 0 1.25rem;
            font-size: 14px;
            width: calc(100% - 120px); /* Adjusted to fit the button next to it */
            border: 2px solid transparent;
            border-radius: 40px;
            outline: none;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
            flex:1;
            margin-right: -5px; To overlap the input and button slightly
}

#newsletter button {
            height: 3.125rem; /* Make button same height as input */
            background-color: #90bd09;
            border-bottom-left-radius: 0;
            border-top-left-radius: 0;
            border-radius: 20px; /* To make rounded corners */
            border: 2px solid transparent;
            padding: 0 20px; /* Adjust padding as needed */
            cursor: pointer;
}
#newsletter .formm
{
    display:flex;
    width: 100%;
    max-width: 600px; /* Adjust form width */
    margin-top: 10px;
}
#newsletter .newstext 
{
    flex:1;
}

  </style>
</head>
<body>
    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>S'inscrire à notre newsletter</h4>
            <p>Recevez par e-mail des informations sur notre dernière boutique et <span>nos offres spéciales.</span></p>
        </div>
        <div class="formm">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <input type="email" name="email" placeholder="Votre adresse mail" required>
                <button class="normal" type="submit">S'inscrire</button>
            </form>
        </div>
    </section>
    <p><?php echo $message; ?></p>
</body>
</html>
