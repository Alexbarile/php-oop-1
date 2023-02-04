<?php

    // creo la classe MOVIE

    class Movie{

        // creo variabili d'istanze

        public $path;
        public $film;
        public $trama;
        public $regista;
        public $anno;
        public $protagonista;
        public $more;

        // funzione 'construct'

        function __construct($_path, $_film, $_trama, $_regista, $_anno, $_protagonista, More $_more){
            $this->path = $_path;
            $this->film = $_film;
            $this->trama = $_trama;
            $this->regista = $_regista;
            $this->anno = $_anno;
            $this->protagonista = $_protagonista;

            // variabile d'istanza della nuova classe MORE

            $this->more = $_more;
        }

        // metodo GET

        public function getFilm(){
            return $this->film;
        }
    }

    // nuova classe MORE

    class More{

        public $lingua;
        public $genere;

        function __construct($_lingua, $_genere){
            $this->lingua = $_lingua;
            $this->genere = $_genere;
        }
    }

    // OGGETTI MOVIE_1 / MOVIE_2

    $movie_1 = new Movie('./img/Fast&Furious.jpg','Fast & Furious','Per indagare su una serie di furti, il poliziotto Brian O"Connor diventa un infiltrato sotto copertura nel mondo delle corse clandestine di Los Angeles. Mentre cerca di guadagnarsi la fiducia del capo, l"uomo rischia di essere smascherato.', 'Justin Lin', '2001', 'Vin Diesel & Paul Walker', new More('Inglese', 'Action'));
    $movie_2 = new Movie('./img/Interstaellar.jpg','Interstellar','In un futuro non precisato, un drastico cambiamento climatico colpisce duramente l"agricoltura. Il granturco è l"unica coltivazione ancora in grado di crescere ed un gruppo di scienziati è intenzionato ad attraversare lo spazio per trovare nuovi luoghi adatti a coltivarlo.', 'Christopher Nolan', '2014', 'Matthew McConaughey', new More('Inglese', 'Fantasy'));

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
        <div class="row pt-5">

            <!-- PRIMO MOVIE -->

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $movie_1->path; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php 
                                echo $movie_1->getFilm();
                            ?>
                        </h5>
                        <p>
                            <?php 
                                echo $movie_1->trama;
                            ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Regista:</strong>
                            <?php 
                                echo $movie_1->regista;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Anno:</strong>
                            <?php 
                                echo $movie_1->anno;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Protagonisti:</strong>
                            <?php 
                                echo $movie_1->protagonista;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Lingua:</strong>
                            <?php 
                                echo $movie_1->more->lingua;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Genere:</strong>
                            <?php 
                                echo $movie_1->more->genere;
                            ?>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- SECONDO MOVIE -->

            <div class="col-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $movie_2->path; ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php 
                                echo $movie_2->getFilm();
                            ?>
                        </h5>
                        <p>
                            <?php 
                                echo $movie_2->trama;
                            ?>
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <strong>Regista:</strong>
                            <?php 
                                echo $movie_2->regista;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Anno:</strong>
                            <?php 
                                echo $movie_2->anno;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Protagonisti:</strong>
                            <?php 
                                echo $movie_2->protagonista;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Lingua:</strong>
                            <?php 
                                echo $movie_2->more->lingua;
                            ?>
                        </li>
                        <li class="list-group-item">
                            <strong>Genere:</strong>
                            <?php 
                                echo $movie_2->more->genere;
                            ?>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</body>
</html>