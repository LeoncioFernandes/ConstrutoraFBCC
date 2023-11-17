<div class="container mt-5">
  <div class= "row">
    <div class= "col">
     
    </div>
    <div class= "col-6 border-bottom">
      <h2>Noa</h2>
      <h2>Residence Club</h2>
    </div>
    <div class= "col">
    </div>
  </div>
  </div>

  <div class="container mt-5 pb-5">
  <div class= "row">
    <div class= "col">
     
    </div>
    <div class= "col-6">
    <div class= "row">
    <div class="col">
    <img style= "width: 350px" src="https://static.wixstatic.com/media/62f7fb_00cc9e79113a424abe49750b56add2ca~mv2.jpg/v1/fit/w_623,h_516,q_90/62f7fb_00cc9e79113a424abe49750b56add2ca~mv2.jpg" class="float-start">

    </div>
                                                   
    <div class="col">
    <div id="accordion">

<div class="card">
  <div class="card-header">
    <a class="btn" data-bs-toggle="collapse" href="#collapseOne">
      Conceito
    </a>
  </div>
  <div id="collapseOne" class="collapse" data-bs-parent="#accordion">
    <div class="card-body">
    Sua praia é viver com lazer, segurança e de frente para o mar!
            Descanso, lazer, conexão com a natureza e muito mais, na localização mais desejada e exclusiva da Paraíba: a praia de Ponta de Campina!
            O Noa é um verdadeiro resort a 03 minutos da beira mar da praia de Ponta de Campina.
            Noa significa "descanso", "repouso", "consolação", "de longa vida". Um nome bíblico que carrega consigo o sentimento de alívio.
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <a class="collapsed btn" data-bs-toggle="collapse" href="#collapseTwo">
     Diferenciais
    </a>
  </div>
  <div id="collapseTwo" class="collapse" data-bs-parent="#accordion">
    <div class="card-body">
    O NOA é um verdadeiro RESORT a 03 minutos da beira mar da praia de Ponta de Campina. <br>
    <br>
Serão 02 Torres de apartamentos. Torre A e Torre B – Com 08 Pavimentos Cada.<br>
2 elevadores por torre<br>
Áreas de lazer (Térreo)<br>
<br>
Piscina Adulto (30m/raiai)<br>
Pool Kids<br>
Deck<br>
Lounge Negativo<br>
07 Espaços Gourmet com Churrasqueira<br>
Salão de Festas<br>
Salão de jogos<br>
Lounge Coberto<br>
Bar de Apoio<br>
Espaço Fitness<br>
Playground<br>
Brinquedoteca<br>
Acqua Kids<br>
Pista de Cooper<br>
Áreas de Lazer (Rooftop)<br>
<br>
Piscina<br>
Deck<br>
Espaço Gourmet<br>
Wine bar<br>
    </div>
  </div>
</div>



</div>



    </div>
    </div>
    </div>
    <div class= "col">
    </div>
    <div>

<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">
<div class="location-section text-center fade-in">
<h2 class=" pb-5 pt-5 "> More com comodidade, próximo a tudo!</h2>
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <?php
            $dir = opendir(getcwd()."/imagens/carrossel2");
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
            $dir = opendir(getcwd()."/imagens/carrossel2");
            $cont = 0;
            if ($dir){
                while (($item = readdir($dir)) !== false) {
                    if ($item == '.' || $item == '..') {
                        continue;
                    }
                    ?>
                    <div class="carousel-item <?php if($cont == 0){echo "active";}?>">
                        <img src="<?="imagens/carrossel2/".$item;?>" alt="<?=$item;?>" class="d-block w-100">
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

</div>

    <div class="location-section text-center fade-in">
    <h2 class=" pt-5 "> More com comodidade, próximo a tudo!</h2>
    <div class="container mt-5 pb-5 ">
    <iframe
        width="1000"
        height="500"
        class="custom-map"
        frameborder="0"
        style="border:0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4599.369171504119!2d-46.63477109592382!3d-23.55584474677134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5eac93e1b855%3A0x759c3d3b00f58684!2sRua%20Cayowaa%2C%20667%20-%20Perdizes%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005001-000!5e0!3m2!1spt-BR!2sbr!4v1671145384219!5m2!1spt-BR!2sbr"
        allowfullscreen=""
        loading="lazy"
      ></iframe>
    </div>

  </div>
  </div>