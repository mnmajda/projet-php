<?php
require_once 'functions.php'; // Inclut les fonctions

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['CalcAge'])) {
    $dob = $_POST['dob'] ?? ''; // Récupère la date de naissance depuis le formulaire

    // Appelle la fonction calculateAge pour déterminer l'âge
    $age = calculateAge($dob);

    if ($age !== null) {
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
