<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="" class="" alt="" width="">ZUZU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bestellen.php">Bestellen</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="col-12">
        <div class="img-fluid header-image"></div>
      </div>

    <div class="container">
      <div class="col-12">
        <h2 class="text-center mt-3">Goedemiddag, welkom bij ZuZu</h2>
      </div>
      <div class="col-12">
        <p class="text-center fw-light">Wij zijn gespecialiseerd in de Japanse keuken. <br>
        Het woord "sushi" is afkomstig van "su", wat azijn betekent en "shi" - rijst.</p>
      </div>
      <div class="col-12">
        <p class="text-center fw-bold "> Vandaag is het <?php echo date('Y/m/d'); ?> <br>
            <?php
            $time = date("G"); // Uur van 0 tm 23
            $uur = 20;
            if ($time >= 6 && $time < 12) {
                echo "goede morgen zonder zorgen <br>";
            }
            if ($time >= 12 && $time < 18) {
                echo "Het is middag tijd voor sushi <br>";
            }
            if ($time >= 18 && $time < 24) {
                echo "Het is avond nog tijd voor sushi <br>";
            }
            if ($time > 24 && $time < 6) {
                echo "Het is snachts we zijn gesloten <br>";
            }
            ?>
        Bezorgtijd vanaf nu:  <script>
                function startTime() {
                    var today = new Date();
                    var h = today.getHours();
                    var m = today.getMinutes();
                    var s = today.getSeconds();
                    m = checkTime(m);
                    s = checkTime(s);
                    document.getElementById('txt').innerHTML =
                        h+1 + ":" + m + ":" + s;
                    var t = setTimeout(startTime, 500);
                }
                function checkTime(i) {
                    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
                    return i;
                }
            </script>
            </head>

            <body onload="startTime()">

          <div class="text-center fw-bold" id="txt"></div>
          </p>


      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card" style="width: 100%">
            <img src="img/img_4.png" class="card-img-top" alt="..." style="height: 400px;">
            <div class="card-body">
              <p class="card-text">Bestel bij ons je sushi's</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="card" style="width: 100%">
            <img src="img/img_5.png" class="card-img-top" alt="..." style="height: 400px;" >
            <div class="card-body">
              <p class="card-text">Keuze uit verschillende soorten sushi's</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--footer (contactgegevens + openingstijden col-6)-->
    <div class="container-fluid bg-dark mt-5 pb-3">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="text-white fw-bold text-center mt-3 lh-1">Contactgegevens</p>
          <p class="text-white text-center lh-1">Restaurant ZuZu</p>
          <p class="text-white text-center lh-1">Appelstraat 1</p>
          <p class="text-white text-center lh-1">1111AA Fruit</p>
          <p class="text-white text-center lh-1">zuzu@gmail.com</p>
          <p class="text-white text-center lh-1">06-12345678</p>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <p class="text-white fw-bold text-center mt-3 lh-1">Openingstijden</p>
          <p class="text-white text-center lh-1">Maandag: Gesloten</p>
          <p class="text-white text-center lh-1">Dinsdag: 16:00-22:00</p>
          <p class="text-white text-center lh-1">Woensdag: 16:00-22:00</p>
          <p class="text-white text-center lh-1">Donderdag: 16:00-22:00</p>
          <p class="text-white text-center lh-1">Vrijdag: 15:00-22:00</p>
          <p class="text-white text-center lh-1">Zaterdag: 15:00-22:00</p>
          <p class="text-white text-center lh-1">Zondag: Gesloten</p>
        </div>
      </div>
    </div>

</body>
</html>