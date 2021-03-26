<?php include("server.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Wasted potential">
  <meta name="viewport" content="width=device-width", initial-scale=1>
  <link rel="stylesheet" href="main.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
  <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <title>Administracija</title>

</head>

<body>
<header id="vrh">
    <div class= "container-fluid" id="fiksirano">
        <div class="naslov">

              <div class= "col-75">
                <a href="index.php" class="iritantan">
                <img src="slike/logo.png" alt="logo sunca" class= "img-fluid" id="logo"></img> </a>
              </div>
              <div class="col-75">
                <a href="index.php" class="iritantan">  <h1>AirSpotl  </h1></a>
              </div>

          <div class="col">
              <a href="onama.php" id="onama">O nama</a>
          </div>
        </div>

      <nav>
        <div class="row" id="navi">
          <div class="col"><a href="modul1.php" class="navlink"><img src="slike/ticket.png" class="pic" ></img> <strong>Rezervacija i kupnja</strong></a></div>
          <div class="col"><a href="modul2.php" class="navlink"> <img src="slike/globus.png" class="pic"></img><strong> Status leta </strong> </a></div>
          <div class="col"><a onclick="window.alert('Backend za login u izradi')" href="modul3.php" class="navlink"> <img src="slike/admin.png" class="pic"></img><strong> Admin </strong> </a></div>
        </div>
        <a href="#vrh"> <img id="sidro" src="slike/pointer.png" width="100"> </a>
      </nav>
    </div>


  </header>
  <article class="prvi-gornji">
  <br>
      <div class="opis">
      <?php if(!isset($_POST["traveledAndBooked"]) && !isset($_POST["delay"])){ ?>
        <h3>Najčešće posjećena mjesta i najiskorišteniji letovi</h3>
          <form class="" action="modul3.php" method="post">
          <label for="originCityCode">IATA polazišta:</label>
            <input type="text" name="originCityCode" value="<?php if(isset($_POST["originCityCode"])) echo $_POST["originCityCode"];else echo "BOS";?>"><br>
            <label for="period">Datum:</label>
            <input type="month" name="period" value="<?php if(isset($_POST["period"])) echo $_POST["period"];else echo "2017-01";?>"><br><br>
            <input type="submit" class="gumb br2" name="traveledAndBooked" value="Provjeri">
          <br>
      </div>
      <br>
      <div class="opis">
        <h3>Provjeri kašnjenja leta </h3>
        <form class="" action="modul3.php" method="post">
        <label for="originLocationCode">IATA polazišta:</label>
        <input type="text" name="originLocationCode" value="<?php if(isset($_POST["originLocationCode"])) echo $_POST["originLocationCode"];else echo "NCE";?>"><br>
        <label for="destinationLocationCode">IATA destinacije:</label>
        <input type="text" name="destinationLocationCode" value="<?php if(isset($_POST["destinationLocationCode"])) echo $_POST["destinationLocationCode"];else echo "IST";?>"><br>
        <label for="departureDate">Datum polaska:</label>
        <input type="date" name="departureDate" value="<?php if(isset($_POST["departureDate"])) echo $_POST["departureDate"];else echo "2020-08-01";?>"><br>
        <label for="departureTime">Vrijeme polaska:</label>
        <input type="time" name="departureTime" value="<?php if(isset($_POST["departureTime"])) echo $_POST["departureTime"];else echo "18:20:00";?>"><br>
        <label for="arrivalDate">Datum dolaska:</label>
        <input type="date" name="arrivalDate" value="<?php if(isset($_POST["arrivalDate"])) echo $_POST["arrivalDate"];else echo "2020-08-01";?>"><br>
        <label for="arrivalTime">Vrijeme dolaska:</label>
        <input type="time" name="arrivalTime" value="<?php if(isset($_POST["arrivalTime"])) echo $_POST["arrivalTime"];else echo "22:15:00";?>"><br>
        <label for="aircraftCode">Broj zrakoplova:</label>
        <input type="text" name="aircraftCode" value="<?php if(isset($_POST["aircraftCode"])) echo $_POST["aircraftCode"];else echo "321";?>"><br>
        <label for="carrierCode">Kod kompanije:</label>
        <input type="text" name="carrierCode" value="<?php if(isset($_POST["carrierCode"])) echo $_POST["carrierCode"];else echo "TK";?>"><br>
        <label for="flightNumber">Broj leta:</label>
        <input type="text" name="flightNumber" value="<?php if(isset($_POST["flightNumber"])) echo $_POST["flightNumber"];else echo "1816";?>"><br>
        <label for="duration">Trajanje:</label>
        <input type="text" name="duration" value="<?php if(isset($_POST["duration"])) echo $_POST["duration"];else echo "PT31H10M";?>"><br>
        <br>
        <input type="submit" class="gumb br2" name="delay" value="Provjeri">

        </form>
        <?php } ?>
        <?php if(isset($booked) || isset($traveled)){ ?>
          <form class="" action="modul3.php" method="post">
            <div style="display:none">
            <input type="text" name="originCityCode" value="<?php if(isset($_POST["originCityCode"])) echo $_POST["originCityCode"];else echo "BOS";?>"><br>
            <input type="month" name="period" value="<?php if(isset($_POST["period"])) echo $_POST["period"];else echo "2017-01";?>"><br>
            <input type="text" name="originLocationCode" value="<?php if(isset($_POST["originLocationCode"])) echo $_POST["originLocationCode"];else echo "NCE";?>"><br>
            <input type="text" name="destinationLocationCode" value="<?php if(isset($_POST["destinationLocationCode"])) echo $_POST["destinationLocationCode"];else echo "IST";?>"><br>
            <input type="date" name="departureDate" value="<?php if(isset($_POST["departureDate"])) echo $_POST["departureDate"];else echo "2020-08-01";?>"><br>
            <input type="time" name="departureTime" value="<?php if(isset($_POST["departureTime"])) echo $_POST["departureTime"];else echo "18:20:00";?>"><br>
            <input type="date" name="arrivalDate" value="<?php if(isset($_POST["arrivalDate"])) echo $_POST["arrivalDate"];else echo "2020-08-01";?>"><br>
            <input type="time" name="arrivalTime" value="<?php if(isset($_POST["arrivalTime"])) echo $_POST["arrivalTime"];else echo "22:15:00";?>"><br>
            <input type="text" name="aircraftCode" value="<?php if(isset($_POST["aircraftCode"])) echo $_POST["aircraftCode"];else echo "321";?>"><br>
            <input type="text" name="carrierCode" value="<?php if(isset($_POST["carrierCode"])) echo $_POST["carrierCode"];else echo "TK";?>"><br>
            <input type="text" name="flightNumber" value="<?php if(isset($_POST["flightNumber"])) echo $_POST["flightNumber"];else echo "1816";?>"><br>
            <input type="text" name="duration" value="<?php if(isset($_POST["duration"])) echo $_POST["duration"];else echo "PT31H10M";?>"><br>
            </div>
            <input type="submit" name="nazad" class="gumb br2" value="natrag">
            <br><br>
          </form>
          <table>


          <thead>
              <tr>
                <th>#</th>
                  <th>Najčešće korišteni letovi</th>
                  <th>Najčešće posjećene lokacije</th>
              </tr>
          </thead>
        <?php foreach ($booked["data"] as $key => $value) { ?>
          <tr>
            <td><?php echo $key+1; ?></td>
            <td><?php echo $value["destination"]; ?></td>
            <td><?php echo $traveled["data"][$key]["destination"]; ?></td>
          </tr>
          <?php } ?>
          </table>
      <?php } ?>
      <?php if(isset($delay)){ ?>
        <form class="" action="modul3.php" method="post">
            <div style="display:none">
            <input type="text" name="originCityCode" value="<?php if(isset($_POST["originCityCode"])) echo $_POST["originCityCode"];else echo "BOS";?>"><br>
            <input type="month" name="period" value="<?php if(isset($_POST["period"])) echo $_POST["period"];else echo "2017-01";?>"><br>
            <input type="text" name="originLocationCode" value="<?php if(isset($_POST["originLocationCode"])) echo $_POST["originLocationCode"];else echo "NCE";?>"><br>
            <input type="text" name="destinationLocationCode" value="<?php if(isset($_POST["destinationLocationCode"])) echo $_POST["destinationLocationCode"];else echo "IST";?>"><br>
            <input type="date" name="departureDate" value="<?php if(isset($_POST["departureDate"])) echo $_POST["departureDate"];else echo "2020-08-01";?>"><br>
            <input type="time" name="departureTime" value="<?php if(isset($_POST["departureTime"])) echo $_POST["departureTime"];else echo "18:20:00";?>"><br>
            <input type="date" name="arrivalDate" value="<?php if(isset($_POST["arrivalDate"])) echo $_POST["arrivalDate"];else echo "2020-08-01";?>"><br>
            <input type="time" name="arrivalTime" value="<?php if(isset($_POST["arrivalTime"])) echo $_POST["arrivalTime"];else echo "22:15:00";?>"><br>
            <input type="text" name="aircraftCode" value="<?php if(isset($_POST["aircraftCode"])) echo $_POST["aircraftCode"];else echo "321";?>"><br>
            <input type="text" name="carrierCode" value="<?php if(isset($_POST["carrierCode"])) echo $_POST["carrierCode"];else echo "TK";?>"><br>
            <input type="text" name="flightNumber" value="<?php if(isset($_POST["flightNumber"])) echo $_POST["flightNumber"];else echo "1816";?>"><br>
            <input type="text" name="duration" value="<?php if(isset($_POST["duration"])) echo $_POST["duration"];else echo "PT31H10M";?>"><br>
            </div>
            <input type="submit" name="nazad" class="gumb br2" value="natrag">
            <br><br>
          </form>
          <table>


          <thead>
              <tr>
                  <th>ID leta</th>
                  <th>Kašnjenje</th>
              </tr>
          </thead>
        <?php foreach ($delay["data"] as $key => $value) { ?>
          <tr>
            <td><?php echo $value["id"]; ?></td>
            <td><?php switch($value["result"]){
                case "LESS_THAN_30_MINUTES":
                  echo "Manje od 30 minuta";
                  break;
                case "BETWEEN_30_AND_60_MINUTES":
                  echo "Između 30 i 60 minuta";
                  break;
                case "BETWEEN_60_AND_120_MINUTES":
                  echo "Između 60 i 120 minuta";
                  break;
                case "OVER_120_MINUTES_OR_CANCELLED":
                  echo "Preko 120 minuta ili otkazano";
                  break;
                }
              ?></td>
          </tr>
          <?php } ?>
          </table>
      <?php } ?>
      <br>
    </article>
</body>

<footer>
  <br>
    &copy; AirSpotl
    <br>
    <p>WastedPotential</p>
    <p>Tereza Bilić, Nino Nogić, Ana Zaninović</p>
    <br>
</footer>
</html>
