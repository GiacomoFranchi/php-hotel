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
    $table = 'table-bordered';

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <title>PHP Hotel</title>
</head>
    <body>
        <form action="index.php" method="GET">
            <div class="form-check">
                <select name="park" id="park">
                    <option value="" disabled selected>OPZIONI PARCHEGGIO</option>
                    <option value="true">con parcheggio</option>
                    <option value="false">senza parcheggio</option>
                </select>
            </div>
            <div>
                <select name="options" id="options">
                    <option value="" disabled selected>Numero di stelle</option>
                    <option value="1">1stella</option>
                    <option value="2">2stella</option>
                    <option value="3">3stella</option>
                    <option value="4">4stella</option>
                    <option value="5">5stella</option>
                </select>
            </div>
            <div>
                <button type="submit">Invia</button>
            </div>
        </form>
       <?php if (empty($_GET)) {
        echo 
        "<table class=$table>
            <thead>
                <tr>
                <th >NOME</th>
                <th >DESCRIZIONE</th>
                <th >VOTO</th>
                <th >DISTANZA DAL CENRO</th>
                <th >PARCHEGGIO</th>
                </tr>
            </thead>" ;         
            for($i = 0; $i < count($hotels); $i++ ) {    ?>
                <?php $hotel = $hotels[$i]; ?>
                <?php
                echo
                "<tbody>
                    <tr>
                        <th>{$hotel['name']}</th>
                        <td>{$hotel['description']}</td>
                        <td>{$hotel['vote']}</td>
                        <td>{$hotel['distance_to_center']} km</td>
                        <td>";if($hotel['parking'] == true){
                                echo "<p> Hotel con parcheggio </p>";
                            } else{
                                echo "<p> Hotel senza parcheggio </p>";
                            }
                        "</td>    
                    </tr>
                </tbody>";
            }
        "</table>";
            } elseif($_GET == true){
                for($i = 0; $i < count($hotels); $i++ ) {    ?>
                    <?php $hotel = $hotels[$i]; 
                if($hotel['parking'] == true){
                $p_hotel[] = $hotel;}}   
                echo 
                "<table class=$table>
                    <thead>
                        <tr>
                        <th >NOME</th>
                        <th >DESCRIZIONE</th>
                        <th >VOTO</th>
                        <th >DISTANZA DAL CENRO</th>
                        <th >PARCHEGGIO</th>
                        </tr>
                    </thead>" ;      
                        for($j = 0; $j < count($p_hotel); $j++ ) {    ?>
                        <?php $park = $p_hotel[$j];
                echo "<tbody>
                    <tr>
                        <th>{$park['name']}</th>
                        <td>{$park['description']}</td>
                        <td>{$park['vote']}</td>
                        <td>{$park['distance_to_center']} km</td>
                        <td>";if($park['parking'] == true){
                                echo "<p> Hotel con parcheggio </p>";
                            } else{
                                echo "<p> Hotel senza parcheggio </p>";
                            }
                        "</td>    
                    </tr>
                </tbody>";}}
                elseif($_GET == false){
                    for($i = 0; $i < count($hotels); $i++ ) {    ?>
                        <?php $hotel = $hotels[$i]; 
                    if($park !== true){
                    $np_hotel[] = $hotel;}}   
                    var_dump($np_hotel);
                    echo 
                    "<table class=$table>
                        <thead>
                            <tr>
                            <th >NOME</th>
                            <th >DESCRIZIONE</th>
                            <th >VOTO</th>
                            <th >DISTANZA DAL CENRO</th>
                            <th >PARCHEGGIO</th>
                            </tr>
                        </thead>" ;      
                            for($j = 0; $j < count($np_hotel); $j++ ) {    ?>
                            <?php $park = $np_hotel[$j];
                    echo "<tbody>
                        <tr>
                            <th>{$park['name']}</th>
                            <td>{$park['description']}</td>
                            <td>{$park['vote']}</td>
                            <td>{$park['distance_to_center']} km</td>
                            <td>";if($park['parking'] == true){
                                    echo "<p> Hotel con parcheggio </p>";
                                } else{
                                    echo "<p> Hotel senza parcheggio </p>";
                                }
                            "</td>    
                        </tr>
                    </tbody>";}}
            
            ?>

</body>
</html>