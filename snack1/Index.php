<?php

$partite = [
    [
        "squadra_casa" => "Olimpia Milano",
        "squadra_ospite" => "Banco di Sardegna Sassari",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
    [
        "squadra_casa" => "Virtus Segafredo Bologna",
        "squadra_ospite" => "A|X Armani Exchange Milano",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
    [
        "squadra_casa" => "Dolomiti Energia Trentino",
        "squadra_ospite" => "Openjobmetis Varese",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
    [
        "squadra_casa" => "Allianz Pallacanestro Trieste",
        "squadra_ospite" => "Happy Casa Brindisi",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
    [
        "squadra_casa" => "Carpegna Prosciutto Basket Pesaro",
        "squadra_ospite" => "Fratelli Beretta Derthona",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
    [
        "squadra_casa" => "Germani Brescia Leonessa",
        "squadra_ospite" => "De Longhi Treviso",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
    [
        "squadra_casa" => "Vanoli Cremona",
        "squadra_ospite" => "Umana Reyer Venezia",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
    [
        "squadra_casa" => "UNAHOTELS Reggio Emilia",
        "squadra_ospite" => "Pallacanestro Varese",
        "punti_casa" => rand(50, 100),
        "punti_ospite" => rand(50, 100),
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
<div class="container">
        <?php foreach ($partite as $partita): ?>
            <p>
                <?= $partita['squadra_casa'] ?> - <?= $partita['squadra_ospite'] ?> | <?= $partita['punti_casa'] ?>-<?= $partita['punti_ospite'] ?>
            </p>
        <?php endforeach; ?>
    </div>
</body>
</html>
