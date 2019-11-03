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
                        <img src="img/Jasper_Johns.jpg" alt="Perfil Jasper Johns">
                        <img src="img/Andy_Warhol.jpg" alt="Perfil Andy Warhol">
                        <img src="img/Peter_Blake.jpg" alt="Perfil Perter Blake">
                        <img src="img/Richard_Hamilton.jpg" alt="Perfil Richard Hamilton">
                        <img src="img/Roy_Lichtenstein.jpg" alt="Perfil Roy Lichtensteins">
                        <img src="img/wayne_Thiebaud.jpg" alt="Perfil Wayne Thiebaud">
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
