<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("includes/bimport.php"); ?>
    <title>Nieuwscollectie.nl | Globaal nieuws</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="nav navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="glyphicon glyphicon-th-list listicon"></span>
          </button>
          <span class="glyphicon glyphicon-globe logo"><h1>Globaal</h1></span>
        </div> <!-- nav header-->
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="nieuws.php">GA TERUG NAAR HET OVERZICHT</a></li>
        </div> <!--collapse -->
      </div>  <!-- container -->
    </nav>

    <!-- Jumbotron -->
    <div class="jumbotron text-center">
      <div class="container">
        <h2>Globaal nieuws</h2>
        <p>"From around the globe"</p>
        <button type="button" class="btn btn-default" onclick="location.href='weer.php';"><span class="glyphicon glyphicon-chevron-left"></span>Vorige</button>
        <button type="button" class="btn btn-default" onclick="location.href='regionaal.php';">Volgende<span class="glyphicon glyphicon-chevron-right"></span></button>
      </div>
    </div>

  </body>
</html>
