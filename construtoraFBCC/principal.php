<div class="container my-5">
    <div class="row">
        <div class="col-sm-4">
            <h3>Column 1</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Column 2</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
        </div>
        <div class="col-sm-4">
            <h3>Column 3</h3>        
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
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