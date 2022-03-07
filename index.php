<!DOCTYPE html>
<html lang="ro">

<?php
$prelink = "";
include "includes/head.php";
require "main.php";
?>

<body>

    <!-- loading screen -->
    <div class="se-pre-con"></div>

    <!--Content start-->

    <?php
    include "includes/header.php";
    ?>


    <main role="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="waves" fill-opacity="1" d="M0,64L15,85.3C30,107,60,149,90,170.7C120,192,150,192,180,181.3C210,171,240,149,270,122.7C300,96,330,64,360,64C390,64,420,96,450,133.3C480,171,510,213,540,208C570,203,600,149,630,149.3C660,149,690,203,720,202.7C750,203,780,149,810,133.3C840,117,870,139,900,170.7C930,203,960,245,990,234.7C1020,224,1050,160,1080,133.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,208C1290,224,1320,224,1350,192C1380,160,1410,96,1425,64L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path>
        </svg>

        <div class=" my-5 justify-content-center">
            <div class="col-12 text-center">
                <h1 class="typewrite" data-period="2000" data-type='[ " Student App", " Subiecte BAC"]'>
                    Student App
                    <span class="wrap"></span>
                </h1>
            </div>
            <div class="col-12 text-center">
                <p>Viitorul este acum</p>
                <?php
                // Method: POST, PUT, GET etc
                // Data: array("param" => "value") ==> index.php?param=value

                function CallAPI($method, $url, $data = false)
                {
                    $curl = curl_init();

                    switch ($method) {
                        case "POST":
                            curl_setopt($curl, CURLOPT_POST, 1);

                            if ($data)
                                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                            break;
                        case "PUT":
                            curl_setopt($curl, CURLOPT_PUT, 1);
                            break;
                        default:
                            if ($data)
                                $url = sprintf("%s?%s", $url, http_build_query($data));
                    }

                    // Optional Authentication:
                    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
                    curl_setopt($curl, CURLOPT_USERPWD, "username:password");

                    curl_setopt($curl, CURLOPT_URL, $url);
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

                    $result = curl_exec($curl);

                    curl_close($curl);

                    return $result;
                }
                //TODO: finish, and set this to repeat every 2s
                function callMathAPI()
                {
                    $url = "https://x-math.herokuapp.com/api/random";
                    $data = array(
                        "max" => "999",
                        "negative" => "1"
                    );
                    $res = CallAPI('GET', $url, $data);
                    $res_arr = json_decode($res);
                    // print_r($res_arr);
                    $res_str = $res_arr->{'expression'} . ' = ' . $res_arr->{'answer'};
                    return $res_str;
                }
                // echo callMathAPI();
                ?>

            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="waves" fill-opacity="1" d="M0,64L15,85.3C30,107,60,149,90,170.7C120,192,150,192,180,181.3C210,171,240,149,270,122.7C300,96,330,64,360,64C390,64,420,96,450,133.3C480,171,510,213,540,208C570,203,600,149,630,149.3C660,149,690,203,720,202.7C750,203,780,149,810,133.3C840,117,870,139,900,170.7C930,203,960,245,990,234.7C1020,224,1050,160,1080,133.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,208C1290,224,1320,224,1350,192C1380,160,1410,96,1425,64L1440,32L1440,320L1425,320C1410,320,1380,320,1350,320C1320,320,1290,320,1260,320C1230,320,1200,320,1170,320C1140,320,1110,320,1080,320C1050,320,1020,320,990,320C960,320,930,320,900,320C870,320,840,320,810,320C780,320,750,320,720,320C690,320,660,320,630,320C600,320,570,320,540,320C510,320,480,320,450,320C420,320,390,320,360,320C330,320,300,320,270,320C240,320,210,320,180,320C150,320,120,320,90,320C60,320,30,320,15,320L0,320Z"></path>
        </svg>
        <hr />
        <!-- main container  -->
        <div class="container">
            <!-- Row start-->

            <div class="row">
                <div class="col-12">
                    <br>
                    <div class="jumbotron bg-glass">
                        <div class="row pl-4">
                            <div class=" col-12 col-lg-6 mx-0">
                                <h1 class="display-5">Un nou mod de a învăța!</h1>
                                <p class="lead">Materie mișto pe înțelesul tuturor.</p>
                                <!-- <hr class="my-4"> -->
                                <p>Lecții liceu & subiecte bac</p>
                                <br>
                                <br>
                                <br>
                                <div class="text-left">
                                    <a class="btn btn-success btn-lg animated-btn " href="app.php" role="button">
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

            <div class="row mx-3">
                <div class="col-sm-12 col-12 col-lg-12">

                    <div class="row">

                        <div class="col-12 card">

                            <h2 class="text-center mx-auto my-3"><i class="fa fa-info-circle"></i> Intrebări frecvente
                            </h2>

                            <div id="accordion" class=" my-3">
                                <div class="card acc-card">
                                    <a class="link-no-dec" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapseTwo">
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
                                    <a class="link-no-dec" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapseTwo">
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
                                            In esenta StudentApp prezinta o colectie de resurse scolare stranse din toate colturile internetului. 
                                            <br><br>
                                            In acest mod elevii nu trebuie sa acceseze 20 site-uri diferite pe zi, ci doar unul 🙂
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <br>

                                <div class="card acc-card">
                                    <a class="link-no-dec" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapseTwo">
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
                                               Proiectul este open source pe <a href="https://github.com/StudentAppRO/StudentApp"><strong>Github</strong></a> si orcine poate lasa un issue pentru problema intampinata de el.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

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
                                                <a href="page.php?page=math" class="btn btn-success btn-block">Matematica</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12 col-md-4 col-lg-4 cardx ">
                                    <div class="card shadow-sm ">
                                        <img src="src/assets/images/coding.png " class="img-fluid" alt="Responsive image " />
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <a href="page.php?page=coding" class="btn btn-success btn-block">Informatica</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12 col-md-4 col-lg-4 cardx ">
                                    <div class="card shadow-sm">
                                        <img src="src/assets/images/english.png " class="img-fluid" alt="Responsive image " />
                                        <div class="card-body">
                                            <div class="d-flex flex-wrap align-items-center">
                                                <a href="page.php?page=english" class="btn btn-success btn-block">Engleza</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class=" col-12 col-md-4 col-lg-4 mx-auto w-100">
                                    <h5 class="d-flex flex-wrap align-items-center mb-3 mx-3">
                                        <!-- <a href="app.php" class="mx-auto"><u>Mai multe...</u></a> -->
                                        <a href="app.php" class="mx-auto btn btn-success btn-block">Mai multe...</a>

                                    </h5>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="mx-auto my-3">
                                    <h3>Despre noi</h3>
                                </div>

                                <div class="row mx-3">
                                    <div class="col-12 col-md-4 col-lg-4 cardx">
                                        <img class="" src="src/assets/images/about_us.png" alt="">

                                    </div>
                                    <div class="col-12 col-md-8 col-lg-8 cardx">
                                        <p class="card-body t-align">

                                            Aplicația <a href="http://studentapp.xyz"><strong>StudentApp.xyz</strong></a> este o aplicație web creata cu scopul de a ajuta elevii de liceu prin digitalizarea materialelor didactice si accesul or rapid si eficient.
                                            <br><br>
                                            Aplicația este încă în faza de inceput și ne dorim nespus de mult să ne informezi în legătură cu părerea ta sau în eventualitatea unor erori întâlnite. Pentru asta, poți folosi pagina de contact.
                                            <br><br>
                                            <strong>Despre echipă</strong>
                                            <br><br>
                                            Inițial, aplicația a fost concepută de @whos-gabi (hodo.codes), însă, în scurt timp, s-au alăturat echipei mai multe persoane care au contribuit la forma actuală a proiectului.
                                            <br><br>
                                            <strong>Despre tehnologiile folosite și codul sursă</strong>
                                            <br><br>
                                            Partea de front-end a fost concepută folosit Bootstrap 4. Pe partea de back-end s-a folosit limbajul PHP, iar pentru baza de date am folosit MySQL. O parte a codului sursă al proiectului (reprezentând partea front-end) este disponibilă pe GitHub și oricine este invitat să contribuie.
                                            <br><br>
                                            Codul sursa este open source si cei care doresc sa participe să contribuie codului pot accesa proiectul pe <a href="https://github.com/StudentAppRO/StudentApp"><strong>Github</strong></a>.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>

</html>