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
  <link rel="stylesheet" href="leaflet/leaflet.css" type="text/css">
  <script src="leaflet/leaflet.js"></script>

  <link rel="icon" href="slike/logo.png">

  <title>Status leta</title>
</head>

<body>
  <header id="vrh">
    <div class= "container-fluid" id="fiksirano">
        <div class="naslov">

              <div class= "col-75">
                <a href="index.php" >
                <img src="slike/logo.png" alt="logo sunca" class= "img-fluid" id="logo"></img> </a>
              </div>
              <div class="col-75">
                <a href="index.php" >  <h1>AirSpotl  </h1></a>
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
  <article class="prvi-gornji" >
  <br>
  <div class="opis">
    <h2>Status leta</h2>
    <br><br>
    <?php if(!isset($_POST["map"])){ ?>
    <form class="" action="modul2.php" method="post"><br>
      <label for="carrierCode">Kod kompanije:</label>
      <input type="text" name="carrierCode" value="AA"><br>
      <label for="flightNumber">Broj leta:</label>
      <input type="text" name="flightNumber" value="659"><br>
      <label for="scheduledDepartureDate">Datum odlaska:</label>
      <input type="date" name="scheduledDepartureDate" value="2021-03-27"><br>
      <input type="submit" name="map" class="gumb" value="Prikaži">
    </form>
  <?php }else{ ?>
   <div id="mapid" style="z-index:0; width:100%; height: 70vh; position: relative;"></div>
   <script>var mymap = L.map('mapid').setView([<?php echo $latav; ?>, <?php echo $lonav; ?>], <?php echo sqrt($latav**2+$lonav**2); ?>/25);
   L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoibmlub3Njb3JwIiwiYSI6ImNrbXBobWQ3ZDAzbzkyb214ODQ1bmV3bzEifQ.BdEFyOj7QS3bfykVhqcodA', {
      maxZoom: 18,
      attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
      id: 'mapbox/streets-v11',
      tileSize: 512,
      zoomOffset: -1,
       accessToken: 'pk.eyJ1Ijoibmlub3Njb3JwIiwiYSI6ImNrbXBobWQ3ZDAzbzkyb214ODQ1bmV3bzEifQ.BdEFyOj7QS3bfykVhqcodA'
    }).addTo(mymap);
     var polygon = L.polygon([
       <?php foreach($lociatalat as $key => $value){
         echo "[".$lociatalat[$key].", ".$lociatalon[$key]."],";
       }?>

   ]).addTo(mymap);</script>
 <?php } ?>
   </div>
   <br>
  </article>
</body>

<footer>
  <br>
  <p>
    &copy; AirSpotl
    <br>
    WastedPotential 2021
    <br>
    Tereza Bilić, Nino Nogić, Ana Zaninović
  </p>
  <br>
</footer>
</html>
