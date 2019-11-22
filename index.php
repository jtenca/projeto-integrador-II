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
                <div id="artigo" class="row">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 artigonovi">
                        <h1 class="artigoh1"> Curiosidades</h1>
                        <p> Aqui temos algumas das obras mais caras já comercializadas!</p>
                        <section  class="row ObrasCaras">
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
                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 artigoinfo">
                        <h1 class="artigoh1"> Informações</h1>
                        <div class="artigoobra1 col-xs-5 col-sm-5 col-md-5 col-lg-5">
                           <h5>O que é "ARTE"</h5>
                           <div class="texto_zoom">
                            <p>A arte é uma das melhores maneiras do ser humano expressar seus sentimentos e emoções. Ela pode estar representada de diversas maneiras, através da pintura plástica, escultura, cinema, teatro, dança, música, arquitetura, dentre outros. A arte é o reflexo da cultura e da história, considerando os valores estéticos da beleza, do equilíbrio e da harmonia.</p>
                           <a href="http://historia-da-arte.info/o-que-e-arte.html">Saiba mais</a>     
                           </div>
                        </div>
                        <div class="artigoobra2 col-xs-5 col-sm-5 col-md-5 col-lg-5">
                            Obra 2
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
                        <img src="img/ind01_leonardo-da-vinci-mona-lisa.jpg">
                        <h4>Mona Lisa, de Leonardo da Vinci</h4>
                        <p>A pintura considerada a obra-prima de Leonardo da Vinci foi iniciada em 1503/1506 e acabou sendo concluída somente em 1517. Apesar de ser uma tela pequena, com apenas 77 cm por 53 cm, Mona Lisa fascina os espectadores com o seu sorriso enigmático. Atualmente o quadro se encontra no museu do Louvre, em Paris.</p>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 artigoIMG2">
                        <img src="img/ind02-van-gogh-starry-night.jpg">
                        <h4>A noite estrelada, de Van Gogh</h4>
                        <p>Uma série de quadros do holandês Vincent van Gogh poderia figurar na lista de pinturas mais famosas do mundo. Escolhemos, no entanto, A noite estrelada, pintada em 1889. A peça é uma pintura a óleo em tela que mede 73,7 cm × 92,1 cm e se encontra atualmente no MoMA, em Nova Iorque.</p>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 artigoIMG3">
                        <img src="img/ind03_maxresdefault.jpg">
                        <h4>Composição número 5 (1948), de Pollock</h4>
                        <p>O pintor norte americano Jackson Pollock é uma referência no mundo da pintura abstrata. Sua Composição número 5 foi pintada em 1948 e adquirida em 2006 por um comprador particular que ofereceu 140 milhões de dólares pela obra.</p>
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 artigoIMG4">
                        <img src="img/ind04_rene.jpg">
                        <h4>A traição das imagens, de Magritte</h4>
                        <p>Representante do surrealismo, o pintor belga René Magritte criou obras polêmicas como A traição das imagens. O quadro de 63,5cm × 93,98cm foi pintado entre 1928 e 1929 e atualmente pertence a coleção do Museu de Arte do Condado de Los Angeles.</p>
                    </div>

                </div>
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