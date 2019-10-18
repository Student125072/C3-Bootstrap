<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("includes/bimport.php"); ?>
    <link rel="stylesheet" href="css/nieuws.css">

    <title>Nieuwscollectie.nl | Nieuws</title>
  </head>
  <body>

    <!-- Navbar -->
    <nav class="nav navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="glyphicon glyphicon-th-list listicon"></span>
          </button>
          <span class="glyphicon glyphicon-globe logo"><h1>Nieuwscollectie.nl</h1></span>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li><a href="nieuws.php" class="active">NIEUWS</a></li>
            <li><a href="nieuwsbrief.php">NIEUWSBRIEF</a></li>
            <li><a href="opmerkingen.php">OPMERKINGEN</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron text-center">
      <div class="container">
        <h2>het laatste nieuws</h2>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-2">
          <ul class="list-group">
            <li class="list-group-item li-header">Categorieën</li>
            <a href="#" class="list-group-item list-group-item-action li-link active">
              Globaal<span class="badge badge-primary badge-pill">2</span>
            </a> <!-- a -->
            <a href="#" class="list-group-item list-group-item-action li-link">
              Regionaal<span class="badge badge-primary badge-pill">1</span>
            </a> <!-- a -->
            <a href="#" class="list-group-item list-group-item-action li-link">
              Weer<span class="badge badge-primary badge-pill">1</span>
            </a> <!-- a -->
          </ul>
        </div>




      <div class="col-sm-10">
          <div class="well">
            
          </div>
      </div>





      </div> <!-- row -->
    </div>

    <!-- <div id="subjects" class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-4 global">
          <button class="navbtn" onclick="location.href='globaal.php';">
            <div class="content">
              <span class="glyphicon glyphicon-globe logo-small"></span>
              <h4>GLOBAAL</h4>
              <p>Nieuws van over de hele wereld</p>
            </div>
          </button>
        </div>
        <div class="col-sm-4">
          <button class="navbtn" onclick="location.href='regionaal.php';">
            <div class="content">
              <span class="glyphicon glyphicon-screenshot logo-small"></span>
              <h4>REGIONAAL</h4>
              <p>Nieuws per regio</p>
            </div>
          </button>
        </div>
        <div class="col-sm-4 weather">
          <button class="navbtn" onclick="location.href='weer.php';">
            <div class="content">
              <span class="glyphicon glyphicon-cloud logo-small"></span>
              <h4>WEER</h4>
              <p>Het weer</p>
            </div>
          </button>
        </div>
      </div>
    </div> -->

  </body>
</html>
