<?php
require_once 'functions.php'; // Inclut les fonctions
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
        <p id="currDate"><?php echo "Today's Date is: " . getFullDate(); ?></p>
        <p>Enter your Date of Birth in format: (MM/DD/YYYY)</p>
        <form method="POST" action="process.php">
            <input type="text" name="dob" placeholder="Enter your D.O.B" required>
            <button type="submit" name="CalcAge">Calculate Age</button>
        </form>
    </div>
</body>
</html>
