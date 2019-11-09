<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <?php include('includes/head.php'); ?>

    <title>Los Hellen</title>
</head>
<body>

    <div class="">

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
        <div class="row lg md sm">
            <section class="mt-2">
                <h5>Fases do Cubismo</h5>
                <div class="col-3">
                    <div class="card mt-5" style="width: 14rem;" >
                        <img class="card-img-top" src="img/autorretrato-picasso-cubismo-pre-analitico.jpg" alt="" />
                        <div class="text-center">
                        <a href="https://pt.wikipedia.org/wiki/Cubismo_c%C3%A9zanniano" class="text-center">Cubismo Cézanniano</a>
                        </div> <!-- card body -->
                    </div> <!-- div card -->


                    <div class="card mt-5" style="width: 14rem;" >
                        <img class="card-img-top" src="img/violino-e-candelabro-cubismo.jpg" alt="" />
                        <div class="text-center">
                        <a href="https://pt.wikipedia.org/wiki/Cubismo_anal%C3%ADtico" class="text-center">Cubismo Analítico</a>
                        </div> <!-- card body -->
                    </div> <!-- div card -->

                    <div class="card mt-5" style="width: 14rem;" >
                        <img class="card-img-top" src="img/cubismo-sintetico.jpg" alt="" />
                        <div class="text-center">
                        <a href="http://lulanzi6.blogspot.com/2013/04/8s-anos-bimestre-cubismo-ideia-da.html" class="text-center">Cubismo Sintético</a>
                        </div> <!-- card body -->
                    </div> <!-- div card -->

                </div> <!-- div coluna -->
            </section>

            <div class="col-5 mt-2">
                <article>
                    <h4>Guernica</h4>
                    <p class="text-justify">Com 349 cm de altura por 776,5 cm de comprimento, Guernica, uma das obras mais famosas de Pablo Picasso.</p>
                    <figure>
                        <img src="img/guernica-picasso.jpg" alt="">
                        <figurecaption class="text-center">Guernica de Pablo Picasso - 1937</figurecaption>   
                    </figure>

                    <h4>Sobre Guernica:</h4>
                        <p class="text-justify">Considerada uma das mais importantes obras produzidas no século XX, Guernica, de Pablo Picasso, não é somente uma pintura; é um documento histórico. Em determinado momento ela fala sobre si e nesse momento podemos identificar traços de uma época distante, analisar aspectos políticos, culturais e sociais de um período conturbado.</p>
                        <p class="text-justify">A cidade de Guernica está localizada no norte da Espanha, no país Basco. Ela foi bombardeada dia 26 de abril de 1937, mediante um ataque aéreo feito pela Alemanha nazista.</p>
                        <p class="text-justify">Com cerca de 6 mil habitantes, estima-se que 1 660 pessoas morreram e 890 ficaram feridas.</p>
                </article>
            </div> <!-- div article -->

            <div class="col-4 mt-2">
            
                <aside>
                    <h5>Galerias de Arte</h5>

                    <div class="border border-success rounded p-2">
                      <h5>Choque Cultural</h5>
                      <p class="text-justify">O espaço é uma referência em arte urbana e na investigação de novas linguagens contemporâneas. Apresenta jovens artistas ao lado de nomes já consagrados e internacionais, investindo em intercâmbios, residências, exposições, colaborações, imersões, projetos institucionais e de arte pública.</p>
                      <p class="text-center">Onde: Rua Medeiros de Albuquerque, 250 - Vila Madalena.</p>
                      <a href="https://www.facebook.com/ChoqueCultural/">Site Oficial</a>
                  </div>
                  
                  <div class="border border-success rounded mt-1 p-2">
                      <h4>A7MA</h4>
                      <p class="text-justify">Pronuncia-se a sétima. O espaço surgiu com o objetivo de explorar, amplificar e conceder visibilidade à arte de rua e às vertentes da arte contemporânea influenciadas por ela. O espaço na Vila Madalena com pouco mais de 100 m² é referência no que se refere à arte de rua na cidade de São Paulo.</p>
                      <p class="text-center">Onde: Rua Harmonia, 95B - Vila Madalena</p>
                      <a href="http://a7ma.art.br/">Site Oficial</a>
                  </div>
                </aside>
            </div> <!-- div aside -->
        </div> <!-- div row -->

        <div></div> <!-- div row 2 -->

        <!-------------------------------->
        <div class="row">
            <div class="col-12">
                <?php include('includes/footer.php'); ?> 
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>