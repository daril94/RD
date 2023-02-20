<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<body>
    <?php
    include 'header.php';
    ?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/home.jpg" class="img-fliud">
            </div>
            <div class="carousel-item">
                <img src="Images/home1.jpg">
            </div>
            <div class="carousel-item">
                <img src="Images/home2.jpg">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

    <div class="row align-items-center justify-content-left" style="background-image: url('Images/mision.png');background-size: cover;background-repeat: no-repeat;width:auto; height:700px">

        <div class="col-md-5 offset-md-1">
            <h2 class="titulos4 text-center "> Misión
            </h2>
            <p class="bordes" style="color:black; font-weight:700">
                Resiliencia deportiva: "Un espacio donde se muestra los cambios que ha
                 tenido el periodismo deportivo como consecuencia de la pandemia de la
                  Covid-19, poniendo a su disposición productos periodísticos de calidad. 
                  Informar a las audiencias de dichas transformaciones, a través de contenidos 
                  multimedia donde priman la credibilidad y la investigación".
            </p>
        </div>

        <div class="col-md-4">

        </div>

    </div>



    <div class="row align-items-center" style="background-image: url('Images/vision.jpeg');background-size: cover;background-repeat: no-repeat;width:auto; height:700px">

        <div class="col-md-5 offset-md-6">


            <h2 class="text-center titulos4"> Visión
            </h2>
            <p class="bordes" style="color:black; font-weight:700">
                Este proyecto multimedia tiene como propósito ayudar a futuras investigaciones y consultas de trabajo por parte de las audiencias, periodistas deportivos, investigadores, expertos y todos los grupos de interés relacionados con el deporte y la Covid-19.
            </p>
        </div>

    </div>



    <?php include 'footer.php' ?>
</body>


</html>