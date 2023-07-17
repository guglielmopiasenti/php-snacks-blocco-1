<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticathor</title>
</head>
<body>
    <div class="container">
    <?php
    if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];

        if (strlen($name) > 3 && strpos($mail, '.') !== false && strpos($mail, '@') !== false && is_numeric($age)) {
    ?>
        <p>Accesso riuscito</p>
    <?php
        } else {
    ?>
        <p>Accesso negato</p>
    <?php
        }
    } else {
    ?>
        <p>Accesso negato</p>
    <?php
    }
    ?>
    </div>
</body>
</html>
