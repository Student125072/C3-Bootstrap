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
    <nav class="nav navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="glyphicon glyphicon-th-list listicon"></span>
          </button>
          <span class="glyphicon glyphicon-globe logo"><h1>Nieuwscollectie.nl</h1></span>
        </div> <!-- nav header-->
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php" class="active">HOME</a></li>
            <li><a href="nieuws.php">NIEUWS</a></li>
            <li><a href="#">BRONNEN</a></li>
            <li><a href="nieuwsbrief.php">NIEUWSBRIEF</a></li>
            <li><a href="opmerkingen.php">OPMERKINGEN</a></li>
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
        <div class="carousel-inner" style="height: 60vh;">

          <div class="item active">
            <img src="img/carousel1.jpg" alt="First slide" style="width:100%; height: 60vh;">
            <div class="carousel-caption">
              <h5>Boerenprotest op weg naar Den Haag</h5>
            </div>
          </div>

          <div class="item">
            <img src="img/carousel2.jpg" alt="Second slide" style="width:100%; height: 60vh;">
            <div class="carousel-caption">
              <h5>Kabinet wil telefoonnummer 113 beschikbaar maken voor zelfdodingspreventie</h5>
            </div>
          </div>

          <div class="item">
            <img src="img/carousel3.jpg" alt="Second slide" style="width:100%; height: 60vh;">
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

    <h1 class="text-center headline-text">HEADLINERS</h1>

    <div class="container-fluid">
      <div class="page-content">
        <div class="well well-md">
          <div class="row">
            <div class="col-sm-6 headline">
              <h2>Gezin Ruinerwold volgelingen van Moonsekte</h2>
              <h3>Het gezin dat jaren geïsoleerd zat in Ruinerwold, zou zijn aangesloten bij de Moonsekte, ook wel moonies genoemd. Ook de Oostenrijker Josef B., die het gezin vasthield, was lid van deze sekte. Het gezin en Josef B. kennen elkaar daar ook van.
                Dat zeggen bronnen tegen RTV Drenthe. </h3>
                <p>De familie zou al vanaf de tijd dat ze in Hasselt wonen bij de Verenigingskerk horen, zoals de religieuze beweging internationaal heet.
                  Leider was de Zuid-Koreaanse dominee Sun Myung Moon. Hij riep zich in de vijftiger jaren uit tot messias. In 1965 is de beweging naar Nederland gebracht. Leden van de Verenigingskerk zijn heel erg naar binnen gericht, op de eigen familie.
                  Sekteleider Moon, die zeer vermogend was, overleed in 2012.</p>
                  <p>Moonies zitten verspreid over de hele wereld. Volgelingen leven van donaties. Ook het gezin, dat negen jaar geïsoleerd leefde in de afgelegen boerderij in Ruinerwold, zou op die manier geld hebben gekregen. De vader van het gezin zou altijd veel goed werk hebben verricht voor de sekte. Nadat hij drie jaar geleden door een herseninfarct werd getroffen, waardoor hij deels verlamd raakte, bleef het gezin om deze reden ook geld ontvangen. In de boerderij is ook een grote hoeveelheid cash geld gevonden.</p>
                </div> <!-- col -->
                <div class="col-sm-6 headline">
                  <img src="img/ruinersworld.jpg">
                </div> <!-- col -->
              </div> <!-- row -->
        </div> <!-- well -->
        <div class="well well-md">
          <div class="row">
            <div class="col-sm-6 headline">
              <h2>EU bereikt deal over Brexit met Londen</h2>
              <h3>BRUSSEL - EU-onderhandelaars en het Verenigd Koninkrijk hebben een nieuwe Brexit-deal gesloten.
                Vanmiddag buigen de leiders van 27 EU-landen zich over het pakket afspraken.</h3>
                <p>„Waar een wil is, is een deal”, twitterde president van de Europese Commissie Juncker even voor twaalf uur vanmiddag. Het akkoord moet voorkomen dat het VK op 31 oktober uit de Unie crasht. Een no deal-Brexit, zonder afspraken dus, zou grote economische en maatschappelijke gevolgen hebben omdat het VK dan van het ene op het andere moment een zogeheten derde land zou worden en uit de EU crasht.
                  Premier Mark Rutte noemt het behalen van een principeakkoord over de brexit „heel bemoedigend nieuws. We gaan nu naar de tekst kijken.” Hij zei dat in Brussel voorafgaand aan een EU-top.</p>
                </div>
                <div class="col-sm-6 headline">
                  <img src="img/brexit.jpg">
                </div>
              </div> <!-- row -->
        </div> <!-- well -->
      </div> <!-- content -->
    </div>



  </body>
</html>
