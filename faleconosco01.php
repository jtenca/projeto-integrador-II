<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include('includes/head.php'); ?>
        <title>Normas de Utilização</title>
    </head>
    <body>
        
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
        <article class="faleconosco">
            <h3>FALE CONOSCO:</h3>
            <div class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <img class="imgFC01" src="img/faleconosco1.jpg" alt="área fale conosco">
                </div>!-->
                <div class="col-xs-9 col-sm-8 col-md-8 col-lg-8 sect3">
                    <form>
                        <label class="FaleCon01">Digite teu nome:
                            <input type="text" class="form-control" />
                        </label>
                        <p></p>
                        <label class="FaleCon02">Digite teu e-mail:
                            <input type="e-mail" class="form-control" />
                        </label>
                        <p></p>
                        <label class="FaleCon03">Digite teu telefone:
                            <input type="fone" class="form-control" />
                        </label>
                        <p></p>
                        <label class="FaleCon04">Qual tipo de arte você gosta ?
                            <select class="form-control">
                                <option>Cubismo</option>
                                <option>Expressionismo</option>
                                <option>Surrealismo</option>
                                <option>Abstracionismo</option>
                                <option>Pop-arte</option>
                                <option>TODOS OS TIPOS</option>
                            </select>
                        </label>
                        <p></p>
                        <label class="FaleCon05">Digite a mensagem:
                            <textarea name=" " class="form-control" id-"" cols="30" rows="=10">
                            </textarea>
                        </label>
                        <br>
                        <input type="submit" value="ENVIAR">
                    </form>
                </div>
            </div>
        </div>
    </article>
    <!-- fechamento div container -->
    <!-------------------------------->
    <div class="row">
        <div class="col-12">
            <?php include('includes/footer.php'); ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>