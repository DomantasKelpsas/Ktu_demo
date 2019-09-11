<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1.0">
    <title>Ateik ir įveik 2019</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

<div>
    <?php
    if (isset($_POST['register'])) {
        echo "<div class='bg-success text-center text-white text-uppercase'>submitted</div>";

    } else
        echo "<div class='bg-danger text-center text-white text-uppercase'>not working</div>";
    ?>
</div>

<section id="register">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <a class="navbar-brand" href="#">
            <h3>Ateik ir įveik 2019</h3>
            <small class="text-muted">Bėgimas, skirtas prof. KTU</small>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="#">Registracija <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Nuostatai</a>
                <a class="nav-item nav-link" href="#">Privatumo politika</a>
                <a class="nav-item nav-link" href="#">Trasos</a>
                <a class="nav-item nav-link" href="#">Dalyviai</a>
                <a class="nav-item nav-link" href="#">Informacija</a>
            </div>
        </div>
    </nav>
    <div class="d-block float-left mt-5 ml-5">
        <img class="d-block img-med" src="img/tshirt-front-1.png" alt="">
        <!-- <div class="clearfix"></div> -->
        <img class="d-block clearfix mt-5 img-med" src="img/tshirt-back-1.png" alt="">
    </div>
    <div class="d-block float-right mt-5 mr-5">
        <img class="d-block logo" src="img/ktu.png" alt="">
        <!-- <div class="clearfix"></div> -->
        <img class="d-block clearfix mt-5 logo" src="img/lbma.png" alt="">
    </div>

    <div class="container h-100 w-50">

        <!-- FORMA   action="data.php" -->
        <form id="register-form" method="post" class="form col-12 rounded p-5 m-1">
            <div class="row justify-content-center mb-4">
                <h1 class="justify-content-center text-uppercase">Registracija</h1>
            </div>

            <div class="form-group has-error has-feedback row py-2">

                <div class="col-6">
                    <label class="font-weight-bold">Vardas</label>
                    <input id="name" type="text" name="name" class="form-control" placeholder="Vardas">
                    <span class="help-text">anjv</span>
                </div>
                <div class="col-6">
                    <label class="font-weight-bold">Pavarde</label>
                    <input id="surname" type="text" name="surname" class="form-control" placeholder="Pavarde">
                </div>

            </div>
            <div class="form-group row py-2">
                <div class="col-3">
                    <label class="font-weight-bold">Lytis</label>
                    <select id="gender" name="gender" class="form-control">
                        <option value="1">Vyras</option>
                        <option value="2">Moteris</option>
                        <option value="0">Unknown</option>
                    </select>

                </div>
                <div class="col-3">
                    <label class="font-weight-bold">Gimimo Data</label>
                    <input type="date" name="birthdate" class="form-control" value="1999-03-08">
                </div>
            </div>

            <div class="form-group row py-2">
                <div class="col-4">
                    <label class="font-weight-bold">Šalis</label>
                    <input id="country" type="text" name="country" class="form-control" placeholder="Šalis">
                </div>
                <div class="col-4">
                    <label class="font-weight-bold">Miestas</label>
                    <input id="city" type="text" name="city" class="form-control" placeholder="Miestas">
                </div>
                <div class="col-4">
                    <label class="font-weight-bold">Organizacija</label>
                    <input type="text" name="org" class="form-control" placeholder="Organizacija">
                </div>
            </div>
            <div class="form-group row py-2">
                <div class="col-4">
                    <label for="distance" class="font-weight-bold">Atstumas</label>
                    <select name="distance" class="form-control">
                        <option value="1">8 km</option>
                        <option value="2">4 km</option>
                        <option value="3">2 km</option>
                        <option value="4">1 km</option>
                        <option value="5">400 m</option>
                    </select>
                </div>
                <div class="col-8">
                    <label for="team-name" class="font-weight-bold">Komandos Pavadinimas</label>
                    <input type="text" name="team" class="form-control" placeholder="Komanda">
                </div>

            </div>
            <div class="form-group row py-2">
                <div class="col-4">
                    <label for="phone-number" class="font-weight-bold">Telefono Nr.</label>
                    <input type="text" name="phone" class="form-control" placeholder="+3706 ...">
                </div>
                <div class="col-8">
                    <label for="email" class="font-weight-bold">El. Pastas</label>
                    <input type="email" name="email" class="form-control" placeholder="ktu@edu.lt">
                </div>
            </div>
            <div class="form-group row py-4 align-items-center">
                <div class="col-5">
                    <label for="tshirt" class="form-check-label pl-3 font-weight-bold"><input id="tshirt-check-box"
                                                                                              type="checkbox"
                                                                                              class="form-check-input"
                                                                                              onchange="myFunction()"
                                                                                              name="tshirt-check-box">Norėsiu
                        įsigyti marškinėlius</label>
                </div>

                <div id="tshirt-options-col" class="col-3">
                    <label for="tshirt-size" class="font-weight-bold">Dydis</label>
                    <select id="tshirt-options" class="form-control">
                        <option>S</option>
                        <option>M</option>
                        <option>L</option>
                        <option>XL</option>
                    </select>
                </div>

            </div>

            <label for="accept-contidionts" class="accept-contidionts-label pl-3 col-12"><input
                        id="accept-contidionts-box" type="checkbox" class="form-check-input" onchange=""
                        name="accept-contidionts-box">* Susipažinau ir sutinku su bėgimo „Ateik ir
                įveik!”, skirto prof. K. Baršauskui atminti 2019 m. nuostatais (norint užsiregistruoti - pažymėti
                privaloma)</label>
            <label for="accept-politics" class="accept-politics-label pl-3 col-12"><input id="accept-politics-box"
                                                                                          type="checkbox"
                                                                                          class="form-check-input"
                                                                                          onchange=""
                                                                                          name="accept-politics-box">*
                Susipažinau ir sutinku šia asmens duomenų Privatumo
                politika (norint užsiregistruoti - pažymėti privaloma)</label>
            <label for="accept-privacy" class="accept-privacy-label pl-3 col-12"><input id="accept-privacy-box"
                                                                                        type="checkbox"
                                                                                        class="form-check-input"
                                                                                        onchange=""
                                                                                        name="accept-privacy-box">*
                Sutinku registracijoje nurodytu el. paštu gauti nuorodą į
                apklausą po renginio, siekiant įvertinti renginio kokybę ir sužinoti dalyvių atsiliepimus (pažymėti
                neprivaloma)</label>
            <div class="row w-100 py-2 justify-content-end">
                <button id="register" type="submit" name="register" class="btn btn-lg btn-primary px-5">Registruotis
                </button>

            </div>
        </form>

    </div>
</section>

<section id="info">

</section>

<script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="js/functions.js">

</script>


<script>

    // $("#register-form").submit(function(e) {
    //     e.preventDefault();
    // });
    //
    //
    // $("#register").click(function () {
    //     var x = $('#name').val();
    //     console.log(x);
    // });

    $("#register-form").submit(function( event ) {
        console.log( $( this ).serializeArray() );
        event.preventDefault();
    });



</script>

</body>

</html>

