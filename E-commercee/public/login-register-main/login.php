<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
if (isset($_SESSION["user"])) {
   header("Location: ../index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de connexion</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="containerr">
        <?php
        if (isset($_POST["login"])) {
           $email = $_POST["email"];
           $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    session_start();
                    $_SESSION["user"] = "yes";
                    header("Location: ../index.php");
                    die();
                } else {
                    echo "<div class='alert alert-danger'>Le mot de passe ne correspond pas</div>";
                }
            } else {
                echo "<div class='alert alert-danger'>L'email ne correspond pas</div>";
            }
        }
        ?>
      <form action="login.php" method="post">
        <div class="form-group">
            <input type="email" placeholder="Entrez votre email :" name="email" class="form-control">
        </div>
        <div class="form-group">
            <input type="password" placeholder="Entrez votre mot de passe :" name="password" class="form-control">
        </div>
        <div class="form-btn">
            <input type="submit" value="Connexion" name="login" class="btn btn-primary">
        </div>
      </form>
     <div><p>Pas encore inscrit ? <a href="registration.php">Inscrivez-vous ici</a></p></div>
    </div>
</body>
</html>
