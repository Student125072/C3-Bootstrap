<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("includes/bimport.php"); ?>
    <title>Nieuwscollectie.nl | Nieuwsbrief</title>
  </head>
  <body>

      <?php require("includes/formsubmit.php"); ?>

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
            <li><a href="nieuws.php">NIEUWS</a></li>
            <li><a href="#">BRONNEN</a></li>
            <li><a href="nieuwsbrief.php" class="active">NIEUWSBRIEF</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <div class="container">
        <h2>inschrijven voor de nieuwsbrief</h2>
      </div>
    </div>

    <div class="container-fluid">
      <div class="alert <?php echo $alert; ?> <?php echo $class; ?> text-center">
        <?php echo $msg; ?>
      </div>
    </div>



    <div class="container-fluid">
      <div class="formdiv">
        <form class="form" method="post">
          <div class="form-group">
            <label for="naamInput">Naam</label>
            <input type="text" class="form-control" id="naamInput" placeholder="Voor- en achternaam">
          </div>
          <div class="form-group">
            <label for="adresInput">Adres</label>
            <input type="text" class="form-control" id="adresInput" placeholder="Verzonnenstraat 21">
          </div>
          <div class="form-group">
            <label for="postcodeInput">Postcode</label>
            <input type="text" class="form-control" id="postcodeInput" placeholder="1234 AB">
            <small id="postcodeHelp" class="form-text text-muted">Wij delen uw informatie niet met anderen.</small>
          </div>
          <div class="form-row">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#confirmModal">
                Inschrijven
          </button>

          <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Bevestig uw ingevulde informatie</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Weet u zeker dat u alles goed ingevuld heeft?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sluiten</button>
                    <button type="submit" name="submit" class="btn btn-primary">Ja, doorgaan</button>
                </div>
              </div>
            </div>
          </div>

          </div>
        </form>
      </div>
    </div>

    <!-- <button type="submit"  name="submit" class="btn btn-primary subbtn">Inschrijven</button> -->


  </body>
</html>
