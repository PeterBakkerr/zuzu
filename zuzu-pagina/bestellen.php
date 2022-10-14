<?php
$melding = "";
if (isset($_POST['menu'])) {
    if (!empty($_POST['voornaam']) && !empty($_POST['achternaam']) && !empty($_POST['E-mail']) && !empty($_POST['plaats'])
        && !empty($_POST['postcode']) && !empty($_POST['woonplaats'])) {

        $firstname = filter_input(INPUT_POST, "voornaam", FILTER_SANITIZE_STRING);
        $surname = filter_input(INPUT_POST, "achternaam", FILTER_SANITIZE_STRING);
        $mail = filter_input(INPUT_POST, "E-mail", FILTER_VALIDATE_EMAIL);
        $place = filter_input(INPUT_POST, "plaats", FILTER_SANITIZE_STRING);
        $zipcode = filter_input(INPUT_POST, "postcode", FILTER_SANITIZE_STRING);
        $livingplace = filter_input(INPUT_POST, "woonplaats", FILTER_SANITIZE_STRING);
        if (!$mail) {
            $melding = "vul een geldig email in";
        } else {
            session_start();
            $firstname = $_POST['voornaam'];
            $surname = $_POST['achternaam'];
            $livingplace = $_POST['woonplaats'];
            $zipcode = $_POST['postcode'];
            $place = $_POST['plaats'];
            $mail = $_POST['E-mail'];
            $_SESSION['voornaam'] = $firstname;
            $_SESSION['achternaam'] = $surname;
            $_SESSION['woonplaats'] = $livingplace;
            $_SESSION['postcode'] = $zipcode;
            $_SESSION['plaats'] = $place;
            $_SESSION['E-mail'] = $mail;
            header('Location: customer.php');
        }
    } else {
        $melding = "niet alles is ingevuld";
    }
} else {
    $firstname = "";
    $surname = "";
    $mail = "";
    $place = "";
    $zipcode = "";
    $livingplace = "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<!--header + navbar + banner-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="" class="" alt="" width="">ZUZU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="order.html">Bestellen</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="col-12">
    <div class="header-image img-fluid"></div>
</div>

<div class="container">
    <form method="post" action="">
        <div class="mb-3">
            <label for="voornaam" class="form-label">Voornaam</label>
            <input name="voornaam" type="text" class="form-control" id="voornaam">
        </div>
        <div class="mb-3">
            <label for="achternaam" class="form-label">achternaam</label>
            <input name="achternaam" type="text" class="form-control" id="achternaam">
        </div>
        <div class="mb-3">
            <label for="E-mail" class="form-label">email</label>
            <input name="E-mail" type="text" class="form-control" id="email">
        </div>
        <div class="mb-3">
            <label for="plaats" class="form-label">addres</label>
            <input name="plaats" type="text" class="form-control" id="adres">
        </div>
        <div class="mb-3">
            <label for="postcode" class="form-label">postcode</label>
            <input name="postcode" type="text" class="form-control" id="zipcode">
        </div>
        <div class="mb-3">
            <label for="woonplaats" class="form-label">woonplaats</label>
            <input name="woonplaats" type="text" class="form-control" id="woonplaats">
        </div>

        <input type="submit" class="btn btn-primary" name="menu" value="Naar menu" class="knop">
</div>
<?php
echo $melding;
?>

</form>
</div>

<div class="container-fluid bg-dark mt-3 pb-3">
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