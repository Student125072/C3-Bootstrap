<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <?php include("includes/bimport.php"); ?>
    <title>Nieuwscollectie.nl | Nieuwsbrief</title>
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
            <li><a href="nieuws.php">NIEUWS</a></li>
            <li><a href="nieuwsbrief.php" class="active">NIEUWSBRIEF</a></li>
            <li><a href="opmerkingen.php">OPMERKINGEN</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
      <div class="container">
        <h2>inschrijven voor de nieuwsbrief</h2>
      </div>
    </div>

    <?php require("includes/formsubmit.php"); ?>

    <div class="container-fluid">
      <div class="alert <?php echo $alert; ?> <?php echo $class; ?> text-center">
        <?php echo $msg; ?>
      </div>
    </div>



    <div class="container-fluid">
      <div class="formdiv">
        <form class="form" method="post" id="formfield">
          <div class="form-group">
            <label for="naam">Naam</label>
            <input type="text" name="naam"  class="form-control" placeholder="Voor- en achternaam">
          </div>
          <div class="form-group">
            <label for="adres">Adres</label>
            <input type="text" name="adres" class="form-control" placeholder="Straatnaam 12">
          </div>
          <div class="form-group">
            <label for="postcode">Postcode</label>
            <input type="text" name="postcode" class="form-control" placeholder="1234 AB">
            <small id="postcodeHelp" class="form-text text-muted">Wij delen uw informatie niet met anderen.</small>
          </div>
          <button type="button" id="submitBtn" name="confirmSubmit" class="btn btn-primary" data-toggle="modal" data-target="#confirmSubmit">Inschrijven</button>
          <button type="submit" name="submit" class="btn btn-primary hidden">Ja</button>
        </form>
      </div>
    </div>

    <div class="modal fade" tabindex="-1" role="dialog" id="confirmSubmit">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Bevestigen</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>Weet u zeker dat u het formulier wil verzenden?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Nee</button>
            <button type="button" class="btn btn-primary"><label for="submit">Ja</label></button>
          </div>
        </div>
      </div>
    </div>


  </body>
</html>
