<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("includes/bimport.php"); ?>
    <link rel="stylesheet" href="css/index.css">

    <!-- titel -->
    <title>Nieuwscollectie.nl | Home</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="nav navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="glyphicon glyphicon-th-list listicon"></span>
          </button>
          <span class="glyphicon glyphicon-globe logo">Nieuwscollectie</span>
        </div> <!-- nav header-->
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="nieuws.php">NIEUWS</a></li>
            <li><a href="#">BRONNEN</a></li>
            <li><a href="nieuwsbrief.php">NIEUWSBRIEF</a></li>
          </ul>
        </div> <!--collapse -->
      </div>  <!-- container -->
    </nav>

    <div class="container carousel">

      <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel" data-slide-to="0" class="active"></li>
          <li data-target="#carousel" data-slide-to="1"></li>
          <li data-target="#carousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrappers -->
        <div class="carousel-inner" style="height: 50vh;">

          <div class="item active">
            <img src="img/carousel1.jpg" alt="First slide" style="width:100%; height: 50vh;">
            <div class="carousel-caption">
              <h5>Boerenprotest op weg naar Den Haag</h5>
            </div>
          </div>

          <div class="item">
            <img src="img/carousel2.jpg" alt="Second slide" style="width:100%; height: 50vh;">
            <div class="carousel-caption">
              <h5>Kabinet wil telefoonnummer 113 beschikbaar maken voor zelfdodingspreventie</h5>
            </div>
          </div>

          <div class="item">
            <img src="img/carousel3.jpg" alt="Second slide" style="width:100%; height: 50vh;">
            <div class="carousel-caption">
              <h5>Rutte noemt irritatie over bemoeienis onderwijs-cao ‘terecht’</h5>
            </div>
          </div>

        </div> <!-- carousel inner -->

        <a class="left carousel-control" href="#carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

      </div> <!-- carousel -->

    </div> <!-- container -->



  </body>
</html>
