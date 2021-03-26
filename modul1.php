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
  <title>Rezervacija i kupnja</title>
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
          <h2>Odaberite svoj let</h2>
          <br><br>
        <?php if(!isset($_POST["pregled"])){ ?>
        <form class="" action="modul1.php" method="post">
            <label for="originLocationCode">IATA polazišta:*</label>
            <input type="text" id="originLocationCode" name="originLocationCode" value = "<?php if(isset($_POST["originLocationCode"])) echo $_POST["originLocationCode"];else echo "SYD";?>" required><br> 
            <label for="destinationLocationCode">IATA destinacije:*</label>
            <input type="text" id="destinationLocationCode" name="destinationLocationCode" value = "<?php if(isset($_POST["destinationLocationCode"])) echo $_POST["destinationLocationCode"];else echo "BKK";?>" required><br> 
            <label for="departureDate">Datum polaska:</label>
            <input type="date" id="departureDate" name="departureDate" value = "<?php if(isset($_POST["departureDate"])) echo $_POST["departureDate"]; else echo "2021-11-01";?>"><br>
            
            <label for="adults">Broj odraslih:*</label>
            <input type="number" name="adults" id="" value = "<?php if(isset($_POST["adults"])) echo $_POST["adults"];else echo "1";?>" required><br>

            <label for="maxPrice">Najveća cijena:</label>
            <input type="int" id="maxPrice" name="maxPrice" placeholder="EUR" value = "<?php if(isset($_POST["maxPrice"])) echo $_POST["maxPrice"]?>"><br>

            <label for="vietravelClasswBy">Klasa:</label>
            <select class="travelClass" name="travelClass">
              <option value="ECONOMY" <?php if(isset($_POST["travelClass"]) && $_POST["travelClass"] =="ECONOMY") echo "selected";?>>Economy</option>
              <option value="PREMIUM_ECONOMY" <?php if(isset($_POST["travelClass"]) && $_POST["travelClass"] =="PREMIUM_ECONOMY") echo "selected";?>>Premium economy</option>
              <option value="BUSINESS" <?php if(isset($_POST["travelClass"]) && $_POST["travelClass"] =="BUSINESS") echo "selected";?>>Poslovna klasa</option>
              <option value="FIRST" <?php if(isset($_POST["travelClass"]) && $_POST["travelClass"] =="FIRST") echo "selected";?>>Prva klasa</option>
            </select>
            <br>
            <br>
            <input type="submit" class="gumb br2" name="pregled" value="pregledaj">
        </form>
        <?php } ?>
        
        <?php if(isset($result)) { $count=0; ?>
            <form class="" action="modul1.php" method="post">
            <div style="display:none"> 
            <input type="text" id="originLocationCode" name="originLocationCode" value = "<?php if(isset($_POST["originLocationCode"])) echo $_POST["originLocationCode"];else echo "SYD";?>" required><br> 
            <input type="text" id="destinationLocationCode" name="destinationLocationCode" value = "<?php if(isset($_POST["destinationLocationCode"])) echo $_POST["destinationLocationCode"];else echo "BKK";?>" required><br> 
            <input type="date" id="departureDate" name="departureDate" value = "<?php if(isset($_POST["departureDate"])) echo $_POST["departureDate"]; else echo "2021-11-01";?>"><br>
            <input type="number" name="adults" id="" value = "<?php if(isset($_POST["adults"])) echo $_POST["adults"];else echo "1";?>">
            <input type="int" id="maxPrice" name="maxPrice" value = "<?php if(isset($_POST["maxPrice"])) echo $_POST["maxPrice"]?>"><br>
            <select class="travelClass" name="travelClass">
              <option value="ECONOMY" <?php if(isset($_POST["travelClass"]) && $_POST["travelClass"] =="ECONOMY") echo "selected";?>>Economy</option>
              <option value="PREMIUM_ECONOMY" <?php if(isset($_POST["travelClass"]) && $_POST["travelClass"] =="PREMIUM_ECONOMY") echo "selected";?>>Premium economy</option>
              <option value="BUSINESS" <?php if(isset($_POST["travelClass"]) && $_POST["v"] =="BUSINESS") echo "selected";?>>Poslovna klasa</option>
              <option value="FIRST" <?php if(isset($_POST["travelClass"]) && $_POST["travelClass"] =="FIRST") echo "selected";?>>Prva klasa</option>
            </select>
            </div>
            <input type="submit" name="nazad" class="gumb br2" value="natrag">
            <br><br>
          </form>
          
        <table>
        
          <table border="1">
          <p style="text-align: center;">Zelena boja označava cijenu koja je nižu od prosjeka, crvena boja označava cijenu višu od prosjeka.</p>
          <thead>
              <tr>
                  <th>IATA polazišta</th>
                  <th>IATA destinacije</th>  
                  <th>Datum polaska</th>
                  <th>Datum dolaska</th>
                  <th>Cijena</th>
                  <th>Rezerviraj</th>
                  <th>Kupi</th>
              </tr>
          </thead>
          <?php  foreach ($result["data"] as $key => $value) {
              if(isset( $value["itineraries"][0]["segments"][0]["carrierCode"]) && isset($value["itineraries"][0]["segments"][0]["number"]))
              $flight = $value["itineraries"][0]["segments"][0]["carrierCode"].$value["itineraries"][0]["segments"][0]["number"];
              else
              $flight = "#nepoznato#";
            ?>
          <tr>

                <td><?php if(isset($value["itineraries"][0]["segments"][0]["departure"]["iataCode"])) echo $value["itineraries"][0]["segments"][0]["departure"]["iataCode"]; else echo "nepoznato"; ?></td>
                <td><?php if(isset($value["itineraries"][0]["segments"][1]["arrival"]["iataCode"])) echo $value["itineraries"][0]["segments"][1]["arrival"]["iataCode"]; else echo "nepoznato"; ?></td>
                <td><?php if(isset($value["itineraries"][0]["segments"][0]["departure"]["at"])) echo substr($value["itineraries"][0]["segments"][0]["departure"]["at"], 0, 10)." ".substr($value["itineraries"][0]["segments"][0]["departure"]["at"], 12, 8); else echo "nepoznato"; ?></td>
                <td><?php if(isset($value["itineraries"][0]["segments"][1]["arrival"]["at"])) echo substr($value["itineraries"][0]["segments"][1]["arrival"]["at"], 0, 10)." ".substr($value["itineraries"][0]["segments"][0]["arrival"]["at"], 12, 8); else echo "nepoznato"; ?></td>
                <td class="<?php if(isset($value["price"]["total"]))if($value["price"]["total"]< $cijena["data"][0]["priceMetrics"][1]["amount"]) echo "good"; else echo "bad";?> ">
                <?php if(isset($value["price"]["total"])) echo $value["price"]["total"]. $value["price"]["currency"]; else echo ""; ?>
                </td>
                <td><button class="gumb" onclick="window.alert('Let <?php echo $flight; ?> nije još moguće rezervirati. Backend u izradi')">Rezerviraj</button></td>
                <td><button class="gumb" onclick="window.alert('Let <?php echo $flight; ?> nije još moguće kupiti. Backend u izradi')">Kupi</button></td>
             
            </tr>
            <?php } ?>
        </table>
        <?php } ?>
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
