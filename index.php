<!DOCTYPE html>
<html lang="pt-br">

<head>

    <?php include('includes/head.php'); ?>
    <title>Los Hellen</title>
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
    <div class="container">
        <article class="artigoGeral sect1">
            <div id="artigo" class="row no-gutter">
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 artigonovi no-gutter">
                    <h1 class="artigoh1"> Curiosidades</h1>
                    <p> Aqui temos algumas das obras mais caras já comercializadas!</p>
                    <section class="row ObrasCaras">
                        <div class="1OC col-6">
                            <div class="zoom">
                                <img src="img/1oc.jpg" alt="primeira obra mais cara já vendida" class="img-responsive">
                            </div>
                            <p><strong>1. The Card Players (1892-93), Paul Cezanne – U$259 milhões.</strong> Esta é, na verdade, uma série de cinco pinturas feitas pelo artista pós-impressionista da França chamado Paul Cezanne.</p>
                        </div>
                        <div class="2OC col-6">
                            <div class="zoom">
                                <img src="img/2oc.jpg" alt="segunda obra mais cara já vendida" class="img-responsive">
                            </div>
                            <p><strong>2. No. 5, (1948), Jackson Pollock – U$140 milhões.</strong>
                                Um comprador desconhecido comprou esta pintura por meio de uma venda privada realizada na Sothebys em 2006. Originalmente propriedade de Samuel Irving Newhouse Jr., a pin</p>
                        </div>

                    </section>
                </div>
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 artigoinfo no-gutter">
                    <h1 class="artigoh1"> Informações</h1>
                    <div class="row">
                        <hr noshade="noshade" width=“100%” size=“100”>
                    </div>
                    <div class="row">
                        <div class="artigoobra1 col-xs-11 col-sm-12 col-md-12 col-lg-12">
                            <!-- style="padding:0;">!-->
                            <h5>O que é "ARTE"</h5>
                            <div class="texto_zoom">
                                <p>A arte é uma das melhores maneiras do ser humano expressar seus sentimentos e emoções. Ela pode estar representada de diversas maneiras, através da pintura plástica, escultura, cinema, teatro, dança, música, arquitetura, dentre outros. A arte é o reflexo da cultura e da história, considerando os valores estéticos da beleza, do equilíbrio e da harmonia.</p>
                                <a href="http://historia-da-arte.info/o-que-e-arte.html"><strong>Saiba mais</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr noshade="noshade" width=“100%” size=“100”>
                    </div>
                    <div class="row">
                        <div class="artigoobra1 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <!-- style="padding:0;">!-->
                            <h5>Surrealismo, expressionismo, cubismo... </h5>
                            <div class="texto_zoom">
                                <p>Depois de séculos apreciando obras clássicas, a sociedade pós-Revolução Industrial se viu com novas tecnologias como a fotografia e o cinema, e nas artes plásticas as formas abstratas ganharam espaço. São tantos os movimentos surgidos nos períodos de arte moderna, contemporânea e pós-contemporânea, que é possível se confundir com algumas das características.</p>
                                <p>Para minimizar essa confusão, conheça alguns dos artistas que se destacam em seus cenários</p>
                                <ul>
                                    <li>Kandinsky (1866-1944)</li>
                                    <li>Pablo Picasso (1881-1973)</li>
                                    <li>Joan Miró (1893-1983)</li>
                                    <li>Andy Warhol (1928-1987)</li>
                                    <li>Romero Britto (1963 - )</li>
                                </ul>
                                <a href="index.php#artigo3"><strong>Saiba mais</strong></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <hr noshade="noshade" width=“100%” size=“100”>
                    </div>
                    <!--<div class="artigoobra3 col-xs-3 col-sm-3 col-md-3 col-lg-3">
                            Obra 3
                        </div>!-->
                </div>
                <div class=" col-xs-3 col-sm-4 col-md-4 col-lg-4 artigocale">
                    <h3 class="artigoh3"> Calendário Exposições</h3>

                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Data</th>
                                <th>Evento</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                setlocale(LC_ALL, "en_US.UTF-8");
                                $handle = fopen( 'calendario.txt', 'r');
                                $cont=0;
                                $A30s=0;
                                $D30s=0;
                                while (!feof($handle)){
                                $linha = fgets($handle,1024);
                                if ( strlen( trim($linha))>0){
                                $alinha=explode( '|',$linha);
                                //$hora=$alinha[2].':'.$alinha[3].':'.$alinha[4];
                                
                                echo "<tr>
                                    <td>{$alinha[0]}</td>
                                    <td>{$alinha[1]}</td>
                                </tr>";
                                }
                                }
                                fclose($handle);
                                ?>
                            <!--
                                <tr>
                                    <td>Outubro</td>
                                    <td>Exposição Adriá Juliá na Pinacoteca.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Mostra de Fernanda Gomes, León Ferrari Gravura Social Moderna na Pinacoteca.</td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Mostra de Lucia Laguna no galpão Fortes D’Aloia & Gabriel.</td>
                                </tr>
                                
                                <tr>
                                    <td>Novembro</td>
                                    <td>Mostra de Anna Bella Geiger no MASP.</td>
                                    
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Mostra de Marcia Pastore na Pinacoteca.</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>Mostra Retratos – Adriana Varejão, Laura Lima, Valeska Soares na galeria Fortes D’Aloia & Gabriel.</td>
                                    
                                </tr>
                                <tr>
                                    <td>Dezembro</td>
                                    <td>Mostras de Leonor Antunes e Gego no MASP.</td>
                                    
                                </tr>
                                !-->
                        </tbody>
                    </table>
                </div>
            </div>
            <div id="artigo2" class="row">
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 artigoIMG1">
                    <div class="zoom">
                        <img src="img/ind01_leonardo-da-vinci-mona-lisa.jpg" alt="quadro de Mona Lisa de Leonardo Da Vinci">
                    </div>
                    <h4>Mona Lisa, de Leonardo da Vinci</h4>
                    <p>A pintura considerada a obra-prima de Leonardo da Vinci foi iniciada em 1503/1506 e acabou sendo concluída somente em 1517. Apesar de ser uma tela pequena, com apenas 77 cm por 53 cm, Mona Lisa fascina os espectadores com o seu sorriso enigmático. Atualmente o quadro se encontra no museu do Louvre, em Paris.</p>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 artigoIMG2">
                    <div class="zoom">
                        <img src="img/ind02-van-gogh-starry-night.jpg" alt="quadro de van gogh, a noite estrelada">
                    </div>
                    <h4>A noite estrelada, de Van Gogh</h4>
                    <p>Uma série de quadros do holandês Vincent van Gogh poderia figurar na lista de pinturas mais famosas do mundo. Escolhemos, no entanto, A noite estrelada, pintada em 1889. A peça é uma pintura a óleo em tela que mede 73,7 cm × 92,1 cm e se encontra atualmente no MoMA, em Nova Iorque.</p>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 artigoIMG3">
                    <div class="zoom">
                        <img src="img/ind03_maxresdefault.jpg" alt="quadro de Jackson Pollock, Composição numero 5">
                    </div>
                    <h4>Composição número 5 (1948), de Pollock</h4>
                    <p>O pintor norte americano Jackson Pollock é uma referência no mundo da pintura abstrata. Sua Composição número 5 foi pintada em 1948 e adquirida em 2006 por um comprador particular que ofereceu 140 milhões de dólares pela obra.</p>
                </div>
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 artigoIMG4">
                    <div class="zoom">
                        <img src="img/ind04_rene.jpg" alt="quadro de René Magritte, a traição das imagens">
                    </div>
                    <h4>A traição das imagens, de Magritte</h4>
                    <p>Representante do surrealismo, o pintor belga René Magritte criou obras polêmicas como A traição das imagens. O quadro de 63,5cm × 93,98cm foi pintado entre 1928 e 1929 e atualmente pertence a coleção do Museu de Arte do Condado de Los Angeles.</p>
                </div>

            </div>
            <hr noshade="noshade" width=“100%” size=“100”>

            <div id="artigo3" class="row">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 artigo3IMG1">
                    <li>Kandinsky (1866-1944)</li>
                    <img src="img/ind08_foto_kandisk.jpg" alt="foto de Wassily Kandisky">
                    O russo Wassily Kandinsky é um dos responsáveis pela inserção da abstração nas artes visuais. Suas obras tinham direta influência da música clássica, especialmente o compositor Arnold Schönberg, com quem manteve correspondência entre 1911 e 1914.
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 artigo3IMG1">
                    <li>Pablo Picasso (1881-1973)</li>
                    <img src="img/pablo-picasso.jpg" alt="foto de pblo picasso">
                    <p>O espanol Pablo Ruiz Picasso é um dos pintores mais conhecidos no mundo e se detacou por fundar o Cubismo, ao lado de Georges Braque. Uma de suas pinturas mais famosas é o mural feito como crítica ao bombardeio alemão de Guernica durante a Guerra Civil Espanhola. Atualmente, a obra está em exposição permanente no Museu Nacional Centro de Arte Rainha Sofia, em Madri.</p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 artigo3IMG1">
                    <li>Joan Miró (1893-1983)</li>
                    <img src="img/03_joan_miro.jpg" alt="foto de joan miró">
                    <p>O artista espanhol se formou em Barcelona e, em Paris, teve contato com tendências modernistas como o fauvismo e o dadaísmo. Após conhecer Picasso e André Breton, fundadores do surrealismo, Miró fez as obras "O Carnaval do Arlequim" e "Maternidade", que dão início a uma linguagem em que símbolos remetem a uma fantasia, opondo-se às profundezas da arte surreal.</p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 artigo3IMG1">
                    <li>Andy Warhol (1928-1987)</li>
                    <img src="img/Andy_Warhol.jpg" alt="foto de andy warhol">
                    <p>Norte-americano descendente de família eslovaca, Andy Warhol se graduou em design pelo Instituto de Tecnologia de Carnegie, atuamente Universidade Carnegie Mellon. Trabalhou como ilustrador de diversas revistas, e na década de 1960 passou a utilizar conceitos da publicidade em suas obras - característica que o alçou para o sucesso.</p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 artigo3IMG1">
                    <li>Romero Britto (1963 - )</li>
                    <img src="img/ind09_foto_romeroBrito.jpg" alt="foto de romero brito">
                    <p>Apesar de ser brasileiro (nasceu no Recife, Pernambuco, em 1963), Romero Britto foi radicado em Miami, nos Estados Unidos, onde é também embaixador das artes do Estado da Flórida desde 2005. Reconhecido como um artista pop, Britto tem uma carreira controversa: enquanto suas obras são chamadas de "arte da cura" por admiradores, críticos consideram que seu trabalho é uma diluição genérica do estilo pop art. Já produziu quadros para a presidente Dilma Rousseff e o casal real príncipe William e Kate Middleton.</p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 artigo3IMG1">
                    <li>Tarcila Amaral (1886 - 1973)</li>
                    <img src="img/ind10_foto_tarcilaAmaral.jpg" alt="foto de tarcila do amaral">
                    <p>Tarsila do Amaral foi uma pintora, desenhista e tradutora brasileira e uma das figuras centrais da pintura e da primeira fase do movimento modernista no Brasil, ao lado de Anita Malfatti. Seu quadro Abaporu, de 1928, inaugura o movimento antropofágico nas artes plásticas.</p>
                </div>
                <hr noshade="noshade" width=“100%” size=“100”>
        </article>
    </div> <!-- fechamento div container -->

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
