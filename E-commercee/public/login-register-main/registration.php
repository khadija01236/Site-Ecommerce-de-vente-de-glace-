<?php
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
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style3.css">
</head>
<body>
    <div class="containerr">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"Tous les champs sont obligatoires");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "L'email n'est pas valide");
           }
           if (strlen($password)<8) {
            array_push($errors,"Le mot de passe doit contenir au moins 8 caractères");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Les mots de passe ne correspondent pas");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"L'email existe déjà !");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           } else {
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt, $sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt, "sss", $fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>Vous êtes inscrit avec succès.</div>";
            } else {
                die("Une erreur s'est produite");
            }
           }
        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Nom complet :">
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" placeholder="Email :">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe :">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Répétez le mot de passe :">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="S'inscrire" name="submit">
            </div>
        </form>
        <div>
        <div><p>Déjà inscrit ? <a href="login.php">Connectez-vous ici</a></p></div>
        <div><p>En vous inscrivant, vous acceptez notre<a href="condition.php">Conditions d'utilisation</a></p></div>

      </div>
    </div>
</body>
</html>
