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

        <section class="artistas_container">
            <div class="row">
                <div class="col-2">
                    <figure>
                        <img src="img/mikey-andy-wahrol.jpg" alt="Obra de Andy Wahrol">
                        <figcaption>Quadrant Mickey Mouse (1981), de Andy Wahrol. </figcaption>

                        <img src="img/MarilynMonroe_andy.jpg" alt="Obra de Andy Wahrol">
                        <figcaption>Marilyn Monroe (1962), Andy Warhol. </figcaption>

                        <img src="img/roy-lichtenstein-gopnik-tease.jpg" alt="Obra de Roy Lichtensteins">
                        <figcaption>Oh, Jeff...I Love You, Too...But...(1964), Roy Lichtenstein.</figcaption>

                        <img src="img/forgetit_forgetme.jpg" alt="Obra de Roy Lichtenstein">
                        <figcaption>Forget it! Forget me!(1962), Roy Lichtenstein. </figcaption>
                        
                        <img src="img/mao-tse-cke.jpg" alt="Obra de Andy Warhol">
                        <figcaption>Mao Tse Tung (1972), Andy Warhol. </figcaption>
                        
                        <img src="img/colagemderichardhamilton.jpg" alt="Obra de Richard Hamilton">
                        <figcaption>Colagem de This is Tomorrow (1956), Richard Hamilton. </figcaption>

                    </figure>




                </div>
            </div>

        </section>




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
