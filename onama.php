<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Wasted potential">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/%22%3E">
    <link rel="icon" href="slike/logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
  <title >O nama</title>

</head>

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
    <body>
    <article class="prvi-gornji">
   <br>
      <div class="opis container-fluid">
        <img src="slike/airplane.jpg" alst="zračna luka" class="slika1 col-30"></img>
        <div class="col-70">
          <h2 class="col-70">O nama</h2>
            <p>
              Mi smo nova avio kompanija koja je motivirana poboljšati Vam iskustvo planiranja putovanja. <br>
              Svakodnevno nudimo gotovo 1.700 letova do 130 odredišta u 50 zemalja. <br>
              Pod temeljnim vrijednostima "sigurnosti" i "zadovoljstva kupaca", nastavit ćemo posvećivati ​​najveći napor uspostavljanju AirSpotla, zrakoplovne tvrtke s kojom svi žele letjeti.
            </p>
        </div>
      </div>
      <br>
      <div class="opis container-fluid">
        <img src="slike/paperairplane.jpg" alst="zračna luka" class="slika1 col-30"></img>
        <div class="col-70">
          <h2 class="col-70">Kontakt:</h2>
            <p>
              Ukoliko imate pitanja obratite nam se preko:
                <br>
                &emsp; <a href="mailto:AirSpotl@gmail.hr">e-maila</a>
              <br>
              Naš pozivni centar:
                <br>
                &emsp; <a href="tel:123-456-7890">123-456-7890</a>
            </p>
        </div>
      </div>


    </article>
    <br>
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
