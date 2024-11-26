<?php
// Active l'affichage des erreurs PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Définir le fuseau horaire si nécessaire
date_default_timezone_set('America/New_York'); // Changez selon votre fuseau horaire
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
    <!-- Lien vers le fichier CSS externe -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <p id="currDate"><?php echo "Today's Date is: " . date("m/d/Y"); ?></p>
        <p>Enter your Date of Birth in format: (MM/DD/YYYY)</p>
        <form method="POST" action="">
            <input type="text" name="dob" placeholder="Enter your D.O.B" required>
            <button type="submit" name="CalcAge">Calculate Age</button>
        </form>
    </div>

    <?php
    if (isset($_POST['CalcAge'])) {
        $dob = $_POST['dob']; // Récupère la date de naissance
        $birthDate = DateTime::createFromFormat('m/d/Y', $dob);

        // Vérifier si la date est valide
        if ($birthDate && $birthDate->format('m/d/Y') === $dob) {
            $today = new DateTime();
            $age = $today->diff($birthDate)->y; // Calcule l'âge
            echo "
            <div id='displayAge'>
                <p id='age'>You are $age years old.</p>
            </div>";
        } else {
            echo "
            <div id='displayAge'>
                <p id='age' style='color: red;'>Invalid date format. Please use MM/DD/YYYY.</p>
            </div>";
        }
    }
    ?>
</body>
</html>
