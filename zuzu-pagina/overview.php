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
    <!--header + navbar + banner-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="" class="" alt="" width="">ZUZU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" href="index.php">Home</a>
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

    <!--klantgegevens + form + button-->
      <div class="container">
        <div class="col-12 mt-3 p-3 border rounded">
            <h3 class="">bestelling</h3>
            <p class=""> saka nigiri :  <?php   session_start(); echo $_SESSION['aantal']; ?> </p>
            <p class=""></p>
        </div>
        <div class="col-12 p-3 border rounded">
            <h3 class="lh-1">Klantgegevens</h3>
            <p class="lh-1"><?php echo  $_SESSION['voornaam' ]; echo "."; echo $_SESSION['achternaam']; ?></p>
            <p class="lh-1"><?php echo $_SESSION['woonplaats']; ?></p>
            <p class="lh-1"><?php echo $_SESSION['postcode']; ?></p>
            <p class="lh-1"> <?php echo $_SESSION['E-mail']; ?></p>
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