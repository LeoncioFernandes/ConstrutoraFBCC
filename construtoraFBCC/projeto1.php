<div class="row" style="background-color: rgb(245, 245, 245);">
  <div class="col-2"></div>

  <div class="col">

    <div class= "row">
      <div class= "border-2 border-bottom border-secondary">
        <h2 class="mt-5">Noa</h2>
        <h2>Residence Club</h2>
      </div>
    </div>

    <div class="row mt-4 justify-content-center">
      <div class="row row-cols-1 row-cols-lg-2">
        <div class="col">
          <img class="rounded w-100" src="https://maisconstrutora.com.br/wp-content/uploads/2022/03/Fachada-Porto-Sampaio-01.jpeg">
        </div>
        <div class="col">

          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne">
                  Conceito
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body" style="text-align: justify">
                  Com um projeto arquitetônico diferenciado, o Porto Sampaio Residence une design, sofisticação e conforto trazendo tudo o que você almeja em um excelente investimento:
                  Viver com qualidade de vida em uma localização privilegiada. No bairro dos Bancários e a poucos metros da principal das três ruas, o Porto Sampaio está localizado próximo a escolas, supermercados, shoppings, farmácias, restaurantes, universidades e muito mais.<br>
                  Unidades de 02 ou 03 quartos.<br>
                  1 ou 2 vagas de garagem
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                  Diferenciais
                </button>
              </h2>
              <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                  Piscina com Deck e Spa <br>
                  Área Gourmet <br>
                  Guarderia <br>
                  Lavanderia <br>
                  Bicicletário <br>
                  Academia <br>
                  Officepod
                  Bar de Apoio
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    

    <div class="row">
      <div class="mt-5">
        <!-- Carousel -->
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <?php
                    $dir = opendir(getcwd()."/imagens/carrossel1");
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
            <div class="carousel-inner rounded">
                <?php
                    $dir = opendir(getcwd()."/imagens/carrossel1");
                    $cont = 0;
                    if ($dir){
                        while (($item = readdir($dir)) !== false) {
                            if ($item == '.' || $item == '..') {
                                continue;
                            }
                            ?>
                            <div class="carousel-item <?php if($cont == 0){echo "active";}?>">
                                <img src="<?="imagens/carrossel1/".$item;?>" alt="<?=$item;?>" class="d-block w-100">
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

    <div class="row">

      <div class="location-section text-center fade-in">
        <h2 class="pt-5"> More com comodidade, próximo a tudo!</h2>
        <div class="mt-5 pb-5">
          <iframe class="custom-map w-100 rounded" style="height:500px" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4599.369171504119!2d-46.63477109592382!3d-23.55584474677134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5eac93e1b855%3A0x759c3d3b00f58684!2sRua%20Cayowaa%2C%20667%20-%20Perdizes%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005001-000!5e0!3m2!1spt-BR!2sbr!4v1671145384219!5m2!1spt-BR!2sbr"
            allowfullscreen=""
            loading="lazy">
          </iframe>
        </div>
      </div>
    </div>

  </div>
  
  <div class="col-2"></div>
</div>