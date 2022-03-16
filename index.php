<?php
$links = "";
require $links . 'inc/variables.php';
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <?php
    include $links . 'inc/head.php';
    ?>
</head>

<body>

    <!-- loading screen -->
    <div class="se-pre-con"></div>

    <!--Content start-->

    <?php
    include $links . 'inc/header.php';
    ?>


    <main role="main">
        <div class="container-fluid">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="src/assets/images/carusel_test.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src/assets/images/carusel_test.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="src/assets/images/carusel_test.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="my-5 justify-content-center">
            <div class="col-12 text-center">
                <h1 class="typewrite" data-period="2000" data-type='[ " Student App", " Subiecte BAC"]'>
                    Student App
                    <span class="wrap"></span>
                </h1>
            </div>
            <div class="col-12 text-center">
                <p>Viitorul este acum</p>
            </div>
        </div>
        <hr />
        <!-- main container  -->
        <div class="container">
            <!-- Row start-->
            <div class="row">
                <div class="col-12">
                    <div class="jumbotron bg-glass">
                        <div class="row px-4">
                            <div class=" col-12 col-lg-6">
                                <h1 class="display-5">Un nou mod de a învăța!</h1>
                                <p class="lead">Materie mișto pe înțelesul tuturor.</p>
                                <!-- <hr class="my-4"> -->
                                <p>Lecții liceu & subiecte bac</p>
                                <br>
                                <br>
                                <br>
                                <div class="text-left">
                                    <a class="btn btn-success btn-lg animated-btn " href="resources/" role="button">
                                        Resurse scolare 👀</a>
                                </div>
                                <br><br>
                            </div>
                            <div class="col-12 col-lg-6 text-center mx-0">
                                <img class="mx-auto" src="src/assets/images/landing_page.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="mx-auto my-3">
                            <h2>Despre noi</h2>
                        </div>
                        <div class="row mx-3">
                            <div class="col-12 col-md-4 col-lg-4 cardx">
                                <img class="" src="src/assets/images/about_us.png" alt="">

                            </div>
                            <div class="col-12 col-md-8 col-lg-8 cardx">
                                <p class="card-body t-align">

                                    Aplicația <a href="http://studentapp.xyz"><strong>StudentApp.xyz</strong></a> este o
                                    aplicație web creata cu scopul de a ajuta elevii de liceu prin digitalizarea
                                    materialelor didactice si accesul or rapid si eficient.
                                    <br><br>
                                    Aplicația este încă în faza de inceput și ne dorim nespus de mult să ne informezi în
                                    legătură cu părerea ta sau în eventualitatea unor erori întâlnite. Pentru asta, poți
                                    folosi pagina de contact.
                                    <br><br>
                                    <strong>Despre echipă</strong>
                                    <br><br>
                                    Inițial, aplicația a fost concepută de @whos-gabi, însă, în scurt timp, s-au
                                    alăturat echipei mai multe persoane care au contribuit la forma actuală a
                                    proiectului.
                                    <br><br>
                                    <strong>Despre tehnologiile folosite și codul sursă</strong>
                                    <br><br>
                                    Partea de front-end a fost concepută folosit Bootstrap 4. Pe partea de back-end s-a
                                    folosit limbajul PHP, iar pentru baza de date am folosit MySQL. O parte a codului
                                    sursă al proiectului este disponibilă pe GitHub și oricine este invitat să
                                    contribuie.
                                    <br><br>
                                    Codul sursa este open source si cei care doresc sa participe să contribuie codului
                                    pot accesa proiectul pe <a
                                        href="https://github.com/StudentAppRO/StudentApp"><strong>Github</strong></a>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid my-5" style="background-color: var(--zen-bg);">
            <div class="container" style="background-color: transparent;">
                <div class="row">
                    <div class="col-12 card-blank my-3 ">
                        <div class="text-center mx-auto my-3">
                            <h3>Subiecte apreciate de alți elevi</h3>
                        </div>
                        <div class="row">
                            <div class=" col-12 col-md-4 col-lg-4 cardx  ">
                                <div class="card shadow-sm">
                                    <img src="src/assets/images/math.png" class="img-fluid" alt="Responsive image " />
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <a href="resources/subject?subject=1"
                                                class="btn btn-success btn-block">Matematica</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4 col-lg-4 cardx ">
                                <div class="card shadow-sm ">
                                    <img src="src/assets/images/coding.png " class="img-fluid"
                                        alt="Responsive image " />
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <a href="resources/subject?subject=7"
                                                class="btn btn-success btn-block">Informatica</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4 col-lg-4 cardx ">
                                <div class="card shadow-sm">
                                    <img src="src/assets/images/lectures.png " class="img-fluid"
                                        alt="Responsive image " />
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center">
                                            <a href="resources/subject?subject=5"
                                                class="btn btn-success btn-block">Limba Română</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-12 col-md-4 col-lg-4 mx-auto w-100">
                                <h5 class="d-flex flex-wrap align-items-center mb-3 mx-3">
                                    <!-- <a href="app.php" class="mx-auto"><u>Mai multe...</u></a> -->
                                    <a href="resources" class="mx-auto btn btn-success btn-block">Mai multe...</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 card">
                    <h2 class="text-center mx-auto my-3"><i class="fa fa-info-circle"></i> Intrebări frecvente</h2>
                    <div id="accordion" class=" my-3">
                        <div class="card acc-card">
                            <a class="link-no-dec" data-toggle="collapse" data-target="#collapse1" aria-expanded="true"
                                aria-controls="collapseTwo">
                                <div class="card-header d-flex justify-content-between 
                                        align-items-center" id="headingOne">
                                    <h5>
                                        <b> E gratis? </b>
                                    </h5>
                                    <p>
                                        <i class="fa fa-angle-down"></i>
                                    </p>
                                </div>
                            </a>
                            <div id="collapse1" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Da, aplicatia este conceputa exclusiv pentru elevi si este gratis.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card acc-card">
                            <a class="link-no-dec" data-toggle="collapse" data-target="#collapse2" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <div class="card-header d-flex justify-content-between 
                                        align-items-center" id="headingOne">
                                    <h5>
                                        <b> De ce StudentApp? </b>
                                    </h5>
                                    <p>
                                        <i class="fa fa-angle-down"></i>
                                    </p>
                                </div>
                            </a>
                            <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        In esenta StudentApp prezinta o colectie de resurse scolare stranse din toate
                                        colturile internetului.
                                        <br><br>
                                        In acest mod elevii nu trebuie sa acceseze 20 site-uri diferite pe zi, ci doar
                                        unul 🙂
                                    </p>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="card acc-card">
                            <a class="link-no-dec" data-toggle="collapse" data-target="#collapse3" aria-expanded="false"
                                aria-controls="collapseTwo">
                                <div class="card-header d-flex justify-content-between 
                                        align-items-center" id="headingOne">
                                    <h5>
                                        <b> Cum pot contribui? </b>
                                    </h5>
                                    <p>
                                        <i class="fa fa-angle-down"></i>
                                    </p>
                                </div>
                            </a>
                            <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <p>
                                        Proiectul este open source pe <a
                                            href="https://github.com/StudentAppRO/StudentApp"><strong>Github</strong></a>
                                        si orcine poate lasa un issue pentru problema intampinata de el.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include $links . 'inc/footer.php'; ?>
</body>

</html>