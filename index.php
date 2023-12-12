<?php
    $hotels = [
        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
    <?php 
    for($i = 0; $i < count($hotels); $i++ ) {
        $hotel = $hotels[$i];
      echo "<div>
                <h2>{$hotel['name']}</h2>
                <p>{$hotel['description']}</p>
                <p>{$hotel['parking']}</p>
                <p>{$hotel['vote']}</p>
                <p>{$hotel['distance_to_center']}</p>
            </div>";

            if($hotel['parking'] == true){
                echo "<p> Hotel con parcheggio </p>";
            } else{
                echo "<p> Hotel senza parcheggio </p>";
            }
    }
    ?>
</body>
</html>