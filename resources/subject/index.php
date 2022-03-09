<?php
$links = "../../";
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

    <?php


    if (!isset($_GET['subject'])) {
        //return to resources
        header('Location: '.$links.'resources');
    }else{
        foreach($subjects as $subject){
            if($subject['id']==$_GET['subject']){
                $title = $subject['name'];
            }
        }
    }

    ?>


    <main role="main">
        <!-- main container  -->
        <div class="container">
            <!-- Row start-->

            <div class="row">
                <div class="col-sm-12 col-12">
                    <br>
                    <h2 class="text-center"><?php echo $title; ?></h2>
                </div>
            </div>

            <br>
            <div class="row">
                <!-- cards with content: -->
                <?php

                foreach($years as $year){
                    echo '
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 content_card">
                    <a id="cl9" class="link-no-dec" href="resources/subject/year?subject='.$_GET['subject'].'&year='.$year['id'].'">
                        <div class="card card-btn mx-3">
                            <div class="card-body">
                                <br>
                                <br>
                                <h2 class="text-center">'.$year['name'].'</h2>
                                <br>
                                <br>
                            </div>
                        </div>
                    </a>
                    </div>';
                }

                ?>



            </div>
            <br>
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    <div class="d-flex flex-wrap align-items-center">
                        <!-- goet current url params and add ?type=all /grade -->
                        <a href="resources/subject/year?subject=<?php $_GET['subject'] ?>&year=all" class="btn btn-success btn-block">Vezi tot</a>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </main>

    <?php include $links.'inc/footer.php'; ?>
</body>

</html>