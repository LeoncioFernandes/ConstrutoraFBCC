<div style="background-color: rgb(245, 245, 245);">
    <div class="container mb-5">
        <div class="row">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="card hover-effect">
                        <div class="img-moldura">
                            <img src="https://maisconstrutora.com.br/wp-content/uploads/2022/03/Fachada-Porto-Sampaio-01.jpeg" class="card-img-top img" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">NOA</h5>
                            <p class="card-text"><i class="bi bi-geo-alt-fill"></i> Ponta de Campina</p>
                            <p class="card-text"><i class="bi bi-lamp-fill"></i> 1, 2 ou 3 dormitórios</p>
                            <p class="card-text"><i class="bi bi-rulers"></i> 37m², 57m², 71m² e 76m²</p>
                            <p class="card-text"><i class="bi bi-brightness-high-fill"></i> Um resort ao seu alcance</p>
                            <a href="?pg=projeto1" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card hover-effect">
                        <div class="img-moldura">
                            <img src="https://static.wixstatic.com/media/62f7fb_00cc9e79113a424abe49750b56add2ca~mv2.jpg/v1/fit/w_623,h_516,q_90/62f7fb_00cc9e79113a424abe49750b56add2ca~mv2.jpg" class="card-img-top img" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">AZIMUT</h5>
                            <p class="card-text"><i class="bi bi-geo-alt-fill"></i> Intermares</p>
                            <p class="card-text"><i class="bi bi-lamp-fill"></i> Studios</p>
                            <p class="card-text"><i class="bi bi-rulers"></i> 21,87m² a 56,98m²</p>
                            <p class="card-text"><i class="bi bi-brightness-high-fill"></i> Pé na areia</p>
                            <a href="?pg=projeto2" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <div>

        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <?php
                    $dir = opendir(getcwd()."/imagens/carrossel");
                    $cont = 0;
                    if ($dir) {
                        while (($item = readdir($dir)) !== false) {
                            if ($item == '.' || $item == '..') {
                                continue;
                            }
                        $cont++;
                        }
                        closedir($dir);
                    }
                ?>
                <?php for ($i = 0; $i < $cont; $i++){ ?>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="<?=$i?>" class="<?php if($i == 0) echo "active";?>"></button>
                <?php } ?>
                
            </div>
        
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <?php
                    $dir = opendir(getcwd()."/imagens/carrossel");
                    $cont = 0;
                    if ($dir){
                        while (($item = readdir($dir)) !== false) {
                            if ($item == '.' || $item == '..') {
                                continue;
                            }
                            ?>
                            <div class="carousel-item <?php if($cont == 0){echo "active";}?>">
                                <img src="<?="imagens/carrossel/".$item;?>" alt="<?=$item;?>" class="d-block w-100">
                                <div class="carousel-caption">
                                    <h3><?=$item;?></h3>
                                    <p>Lorem ipsum dolor sit amet!</p>
                                </div>
                            </div>
                        <?php $cont++;
                        }
                        closedir($dir);
                    }
                ?>
            </div>
        
            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>
</div>