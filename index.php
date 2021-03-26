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
  <title >AirSpotl</title>

</head >
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
          <img src="slike/airport.jpg" alst="zračna luka" class="slika1 col-30"></img>
          <div class="col-70">
          <h2 class="col-70">Putuj sa samopouzdanjem!</h2>
          <p>
            Putuj sa samopouzdanjem <br> Ovdje smo da Vam olakšamo putovanje. AirSpotl letovi lete na preko 130 odredišta širom svijeta, približavajući Vas ljudima i mjestima do kojih vam je najviše stalo.
          </p>
          </div>

        </div>
        <br>

        <div class="opis container-fluid">

          <img src="slike/map.jpg" alst="zračna luka" class="slika2 col-30" text-align="left" ></img>
          <div class="col-70">
          <h2>Pronađite najisplativiji let za vaše putovanje!</h2>
          <p> Pomoći ćemo Vam pronaći najbolju opciju te pokazati usporedbu s prijašnjim cijenama kako biste izabrali optimalan let.<br>
            Putovanja avionom znaju biti zbunjujuća i zastrašujuća i nadamo se taj stres umanjiti.<br>
            Ciljamo prikazati najrelevantnija putnička rješenja za Vaše sljedeće putovanje i biti uz Vas dok otkrivate svijet.
          </p>
          </div>
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
