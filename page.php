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

    <?php


    if (isset($_GET['page'])) {
        $page_cards = array(
            "1" => "Clasa a IX-a",
            "2" => "Clasa a X-a",
            "3" => "Clasa a XI-a",
            "4" => "Clasa a XII-a",
            "1link" => "data.php?page=". $_GET['page']."&grade=9",
            "2link" => "data.php?page=". $_GET['page']."&grade=10",
            "3link" => "data.php?page=". $_GET['page']."&grade=11",
            "4link" => "data.php?page=". $_GET['page']."&grade=12",
        );
        // $title = $_GET['page'];
        //switch case param.page to fill in the data in cards
        switch ($_GET['page']) {
            case "math":
                $title = $card_list[0]['name'];
                break;
            case "chemestry":
                $title = $card_list[1]['name'];

                break;
            case "physics":
                $title = $card_list[2]['name'];

                break;
            case "biology":
                $title = $card_list[3]['name'];

                break;
            case "lectures":
                $title = $card_list[4]['name'];

                break;
            case "english":
                $title = $card_list[5]['name'];

                break;
            case "coding":
                $title = $card_list[6]['name'];

                break;
            case "subjects":
                $title = $card_list[7]['name'];
                //redirect to data subjects
                header('Location: data.php?page=subjects');
                break;
            default:
                //by default redirect to App php
                header('Location: app.php');
        }
    } else {
        //return to app.php
        header('Location: app.php');
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

                for($id = 1;$id<=4;$id++) {
                    echo '
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 content_card">
                    <a id="cl9" class="link-no-dec" href="'.$page_cards[$id.'link'].'">
                        <div class="card card-btn mx-3">
                            <div class="card-body">
                                <br>
                                <br>
                                <h2 class="text-center">'.$page_cards[$id].'</h2>
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
                        <a href="data.php?page=<?php echo $_GET['page'];?>&type=all" class="btn btn-success btn-block">Vezi tot</a>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>

</html>