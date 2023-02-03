<?php

    class Movie{

        public $film;
        public $regista;
        public $anno;
        public $protagonista;

        function __construct($_film, $_regista, $_anno, $_protagonista){
            $this->film = $_film;
            $this->regista = $_regista;
            $this->anno = $_anno;
            $this->protagonista = $_protagonista;
        }

        function getFilm(){
            return $this->film;
        }
    }

    $movie_1 = new Movie('Fast & Furious', 'Justin Lin', '2001', 'Vin Diesel & Paul Walker');
    $movie_2 = new Movie('Interstellar', 'Christopher Nolan', '2014', 'Matthew McConaughey');



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP OOP</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php 
                                echo $movie_1->getFilm();
                            ?>
                        </h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>