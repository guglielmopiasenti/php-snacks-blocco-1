<?php
if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];

    if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
        $access_granted = true;
        
        $access_message = "Accesso Garantito";
        $access_color = "green";
    } else {
        $access_message = "Accesso Negato";
        $access_color = "red";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Autenticathor</title>
</head>
<body>
    <div class="container">
        <p style="color: <?= $access_color ?>"><?= $access_message ?></p>
    </div>
</body>
</html>