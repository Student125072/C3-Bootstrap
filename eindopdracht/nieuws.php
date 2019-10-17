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
    <nav class="nav navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="glyphicon glyphicon-th-list listicon"></span>
          </button>
          <span class="glyphicon glyphicon-globe logo">Nieuwscollectie</span>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">HOME</a></li>
            <li><a href="nieuws.php" class="active">NIEUWS</a></li>
            <li><a href="#">BRONNEN</a></li>
            <li><a href="nieuwsbrief.php">NIEUWSBRIEF</a></li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="jumbotron text-center">
      <div class="container">
        <h2>het laatste nieuws</h2>
        <p>kies een onderwerp</p>
      </div>
    </div>

    <div id="subjects" class="container-fluid text-center">
      <div class="row">
        <div class="col-sm-4">
          <button class="navbtn">
            <div class="content">
              <span class="glyphicon glyphicon-globe logo-small"></span>
              <h4>GLOBAAL</h4>
              <p>Nieuws van over de hele wereld</p>
            </div>
          </button>
        </div>
        <div class="col-sm-4">
          <button class="navbtn">
            <div class="content">
              <span class="glyphicon glyphicon-screenshot logo-small"></span>
              <h4>REGIONAAL</h4>
              <p>Nieuws per regio</p>
            </div>
          </button>
        </div>
        <div class="col-sm-4">
          <button class="navbtn">
            <div class="content">
              <span class="glyphicon glyphicon-cloud logo-small"></span>
              <h4>WEER</h4>
              <p>Het weer</p>
            </div>
          </button>
        </div>
      </div>
    </div>

  </body>
</html>
