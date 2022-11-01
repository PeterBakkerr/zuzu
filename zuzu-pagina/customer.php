<?php
$melding = "";
if (isset($_POST['overzicht'])) {
    if (!empty($_POST['aantal'])) {

        $amount = filter_input(INPUT_POST, "aantal", FILTER_SANITIZE_NUMBER_INT);
        if (!$amount) {
            $melding = "vul een aantal in";
        } else {
            session_start();
            $amount = $_POST['aantal'];
            $_SESSION['aantal'] = $amount;
            header('Location: overview.php');
        }
    } else {
        $melding = "niet alles is ingevuld";
    }
} else {
    $amount = "";
}
?>

<!DOCTYPE html>
<html>
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
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="bestellen.php">Bestellen</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="col-12">
        <div class="header-image img-fluid"></div>
      </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1> 1. saka nigiri </h1>
            </div>
                <h5 class="card-title"></h5>
            <div> <img class="image-c" src="img/img_10.png" ></div>
                <p class="card-text">1 piece €3.50 <br> impressie: chef's favorite </p>
                    <form method="post" action="">
                <input  name="aantal" type="number" class="form-control" id="aantal" >

            </div>
        </div>
    </div>

    <input type="submit" class="btn btn-primary" name="overzicht" value="Naar overzicht" class="knop">
    </form>
    <?php
    echo $melding;
    ?>
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