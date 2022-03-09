<?php
$links = "../";
require $links.'inc/variables.php';
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <?php
    include $links.'inc/head.php';
    ?>
</head>
<body>
    <!-- loading screen -->
    <div class="se-pre-con"></div>
    <!--Content start-->
    <?php
    include $links.'inc/header.php';
    ?>
    <main role="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="waves" fill-opacity="1" d="M0,64L15,85.3C30,107,60,149,90,170.7C120,192,150,192,180,181.3C210,171,240,149,270,122.7C300,96,330,64,360,64C390,64,420,96,450,133.3C480,171,510,213,540,208C570,203,600,149,630,149.3C660,149,690,203,720,202.7C750,203,780,149,810,133.3C840,117,870,139,900,170.7C930,203,960,245,990,234.7C1020,224,1050,160,1080,133.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,208C1290,224,1320,224,1350,192C1380,160,1410,96,1425,64L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path>
        </svg>
        <!-- main container  -->
        <div class="container">
            <!-- Row start-->
            <!-- TODO: commented for now,redesign  -->
            <!-- <div class="row">
                <div class="align-items-center col-sm-12 col-12">
                    <div class="card mt-4 mr-2 ml-2 mb-3">
                        <div class="card-body">
                            <h4 class="text-center"><b>Lecții</b></h4>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 col-12 col-lg-12">
                                    <div class="col-12 cardx t-align text-center">
                                        <h5>
                                            Conținut digital al temelor din liceu pentru orice profil.
                                            Comform curicumurilor în vigoare. Începe să înveți acum!
                                        </h5>
                                    </div>
                                    <div class="col-12 cardx">
                                        <div class="row justify-content-center">
                                          
                                            <a href="# " class="btn btn-success mx-1 my-1">Cumpără-ne o cafea</a>

                                            <a href="contact_us.html" class="btn btn-success mx-1 my-1">Sugerează
                                                Modificări</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col-sm-12 col-12 col-lg-12">
                    <?php
                    foreach ($subjects as $subject) {
                        // $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
                        // foreach ($subject as $x => $val) {
                        echo '<div class=" col-6 col-sm-6 col-md-4 col-lg-3 cardx">
                                <div class="card shadow-md">
                                <img src="'.$subject['img'].'" class="img-fluid" alt="'.$alt.'" />
                                <div class="card-body">
                                    <div class="d-flex flex-wrap align-items-center">
                                    <a href="resources/subject?subject='.$subject['id'].'" class="btn btn-success btn-block">'.$subject['name'].'</a>
                                    </div>
                                </div>
                            </div>
                        </div>';
                        // }
                    }
                    ?>
                </div>
            </div>
        </div>
    </main>
    <?php include $links.'inc/footer.php'; ?>
</body>

</html>