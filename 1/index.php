<?php
    $url = "https://dd-wtlab2020.netlify.app/pre-final/ezquiz.json";    
    $response = file_get_contents($url);
    $result = json_decode($response);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
                <?php
                    echo '<div class="container">';
                    echo '<div class="row">';
                    for($i = 0; $i < sizeof($result->tracks->items); $i++){
                        echo '<div class="col-4">';
                        echo "<div class='card' style='width: 18rem;'>";
                        echo '<img class="card-img-top" src="'.$result->tracks->items[$i]->album->images[0]->url.'" alt="640">';
                        echo '<div class="card-body">';
                        echo "<b>".$result->tracks->items[$i]->album->name."</b>";
                        echo "<br>";
                        echo "Artist : ".$result->tracks->items[$i]->album->artists[0]->name;
                        echo "<br>";
                        echo "Release date : ".$result->tracks->items[$i]->album->release_date;
                        echo "<br>";
                        echo "Available : ".sizeof($result->tracks->items[$i]->album->available_markets);
                        echo "<br>";
                        echo '</div>';
                        echo '</div>';
                        echo "<br>";
                        echo '</div>';
                        echo "<br>";

                    }
                    echo '</div>';
                    echo '</div>';
                ?>
    </div>
</body>
</html>
