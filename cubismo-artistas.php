<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-reboot.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-grid.css" />
    <link rel="stylesheet" href="css/estilo.css" />
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Advent+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Antic+Slab&display=swap" rel="stylesheet">

    <title>Los Hellen</title>
</head>
<body>

    <div class="container">

        <div class="row">
            <div class="col-12">
                <header>
                    <?php include('includes/header.php'); ?>
                </header>
            </div>
        </div>

        <div class="row">
            <div class="col-12 shadow-sm">
                <nav>
                    <?php include('includes/menu.php'); ?>
                </nav>
            </div>
        </div>

        <!---------------- CONTEÚDO --------------->
        <h4 class="text-center mt-2">Artistas Cubistas ou com Influências Cubistas</h4>
        <div class="row mt-2">
            <div class="col-3">
                <div class="card" >
                    <div class="card-title text-center">Pablo Picasso</div>
                    <img class="card-img-top" src="img/pablo-picasso.jpg" />
                    <div class="card-body">
                        <p class="text-justify">Foi um pintor espanhol, escultor, ceramista, cenógrafo, poeta e dramaturgo que passou a maior parte da sua vida na França.</p>
                        <a href="https://pt.wikipedia.org/wiki/Pablo_Picasso" class="btn btn-primary">Ir para a página</a>
                    </div>
                </div>
            </div> <!-- div card 1 -->
            
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">Georges Braque</div>
                    <img class="card-img-top" src="img/georges-braque.jpg" />
                    <div class="card-body">
                        <p class="text-justify">Foi um pintor e escultor francês, que fundou o cubismo juntamente com Pablo Picasso, a maior parte da sua adolescência foi passada em Le Havre.</p>
                        <a href="https://pt.wikipedia.org/wiki/Georges_Braque" class="btn btn-primary">Ir para a página</a>
                    </div>
                </div>
            </div> <!-- div card 2 -->
            
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">Juan Gris</div>
                    <img class="card-img-top" src="img/juan-gris.jpg" />
                    <div class="card-body">
                        <p class="text-justify"> Foi um dos mais famosos e versáteis pintores e escultores cubistas espanhóis. Apesar de ter falecido jovem, Juan Gris representa o expoente máximo do cubismo sintético</p>
                        <a href="https://pt.wikipedia.org/wiki/Juan_Gris" class="btn btn-primary">Ir para a página</a>
                    </div>
                </div>
            </div> <!-- div card 3 -->
            
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">Fernand Léger</div>
                    <img class="card-img-top" src="img/leger.jpg" />
                    <div class="card-body">
                        <p class="text-justify">A partir do de 1911, conheceu Pablo Picasso e Georges Braque, os quais lhe transmitiram influências cubistas, nas quais se aplicou e trabalhou durante a maior parte da sua carreira artística.</p>
                        <a href="https://pt.wikipedia.org/wiki/Fernand_Léger" class="btn btn-primary">Ir para a página</a>
                    </div>
                </div>
            </div> <!-- div card 4 -->
                    
        </div> <!-- div row 1 -->
        
        <div class="row">
            
            <div class="col-3">
                <div class="card">
                    <div class="card-title text-center">Marcel Duchamp</div>
                    <img class="card-img-top" src="img/duchamp.jpg" />
                    <div class="card-body">
                        <p class="text-justify">Marcel Duchamp começou sua carreira como artista criando pinturas de inspiração romantista, expressionista e cubista.</p>
                        <a href="https://pt.wikipedia.org/wiki/Marcel_Duchamp" class="btn btn-primary">Ir para a página</a>
                    </div>
                </div>
            </div> <!-- div card 4 -->
            
            
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="" />
                    <div class="card-body">
                        <p class="text-justify"></p>
                    </div>
                </div>
            </div> <!-- div card 5 -->
            
            
            <div class="col-3">
                <div class="card">
                    <img class="card-img-top" src="" />
                    <div class="card-body">
                        <p class="text-justify"></p>
                    </div>
                </div>
            </div> <!-- div card 6 -->
        </div>
        <!-------------------------------->
        <div class="row">
            <div class="col-12 fixed-bottom">
                <?php include('includes/footer.php'); ?> 
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>