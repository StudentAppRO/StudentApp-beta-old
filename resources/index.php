<?php
$links = "../";
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
        <!-- main container  -->
        <div class="container">
            <!-- Row start-->
            <!-- TODO: commented for now,redesign  -->
            <div class="row mt-5">
                <div class="align-items-center col-sm-12 col-12">
                    <div class="card mt-4 mr-2 ml-2 mb-3">
                        <div class="card-body">
                            <h2 class="text-center"><b>Resurse</b></h2>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 col-12 col-lg-12">
                                    <div class="col-12 cardx t-align text-center">
                                        <h5>
                                            Conținut digital al temelor din liceu pentru orice profil.
                                            Comform curicumurilor în vigoare. Începe să înveți acum!
                                        </h5>
                                    </div>
                                    <!-- <div class="col-12 cardx">
                                        <div class="row justify-content-center">

                                            <a href="# " class="btn btn-success mx-1 my-1">Cumpără-ne o cafea</a>

                                            <a href="contact_us.html" class="btn btn-success mx-1 my-1">Sugerează
                                                Modificări</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <?php
                foreach ($subjects as $subject) {
                    // $age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
                    // foreach ($subject as $x => $val) {
                    echo '<div class=" col-6 col-sm-6 col-md-4 col-lg-3 cardx">
                            <div class="card shadow-md">
                            <img src="' . $subject['img'] . '" class="img-fluid" alt="' . $alt . '" />
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center">
                                <a href="resources/subject?subject=' . $subject['id'] . '" class="btn btn-success btn-block">' . $subject['name'] . '</a>
                                </div>
                            </div>
                        </div>
                    </div>';
                    // }
                }
                ?>
            </div>
        </div>
    </main>
    <?php include $links . 'inc/footer.php'; ?>
</body>

</html>