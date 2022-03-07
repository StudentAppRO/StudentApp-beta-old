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
        $subtitle_arr = array(
            "9" => "clasa a IX-a",
            "10" => "clasa a X-a",
            "11" => "clasa a XI-a",
            "12" => "clasa a XII-a"
        );
        if (isset($_GET['grade'])) {
            $subtitle = $subtitle_arr[$_GET['grade']];
        } else if (isset($_GET['type'])) {
            $subtitle = $_GET['type'];
        } else {
            // if page is not subjects, and it doesent have grade or type 
            if ($_GET['page'] != "subjects") {
                //return to app with url param error
                header('Location: app.php');
                exit();
            }
        }
        // $title = $_GET['page'];
        //switch case param.page to fill in the data in cards
        switch ($_GET['page']) {
            case "math":
                $title = $card_list[0]['name'];
                $img = $card_list[0]['img'];

                break;
            case "chemestry":
                $title = $card_list[1]['name'];
                $img = $card_list[1]['img'];

                break;
            case "physics":
                $title = $card_list[2]['name'];
                $img = $card_list[2]['img'];

                break;
            case "biology":
                $title = $card_list[3]['name'];
                $img = $card_list[3]['img'];

                break;
            case "lectures":
                $title = $card_list[4]['name'];
                $img = $card_list[4]['img'];

                break;
            case "english":
                $title = $card_list[5]['name'];
                $img = $card_list[5]['img'];

                break;
            case "coding":
                $title = $card_list[6]['name'];
                $img = $card_list[6]['img'];

                break;
            case "subjects":
                $title = $card_list[7]['name'];
                $img = $card_list[7]['img'];
                //redirect to data subjects
                header('Location: data.php?page=subjects');
                exit();
                break;
            default:
                //by default redirect to App php
                header('Location: app.php');
                exit();
        }
    } else {
        //return to app.php
        header('Location: app.php');
        exit();

    }

    ?>



    <main role="main">
        <!-- main container  -->
        <div class="container">
            <!-- Row start-->

            <div class="row">
                <div class="col-sm-12 col-12">
                    <br>
                    <h2 class="text-center"><?php echo $title . ', ' . $subtitle; ?></h2>
                </div>
            </div>

            <br>
            <div class="row">
                <!-- cards with content: -->

                <?php

                //check page type 
                //check if sort by grade/type
                //special case subjects
                //finish setting up files and filter them out 
                // File-Name_bac/notBac_grade_id.pdf
                //
                $page = $_GET['page'];
                if(isset($_GET['grade'])){
                    $grade = $_GET['grade'];
                }else if(isset($_GET['subject'])){

                }

                //get into folder
                $path = 'DB/' . $page;
                // $files = scandir($path);
                $files_brut = array_diff(scandir($path), array('.', '..'));

                //show file arr to output
                $main_file_list = array();
                $id = 0;
                foreach ($files_brut as $fil) {
                    // echo "<a href='$file'>$file</a>";
                    // use of explode
                    $file = substr_replace($fil, "", -4);
                    // $str_arr = array();
                    $str_arr = explode("_", $file);
                    //keep only the number of itmes ordered
                    // $str_arr[0] = strval($str_arr[0]);
                    // $str_arr[1] = intval($str_arr[1]);
                    // $str_arr[2] = intval($str_arr[2])
                    
                    // print_r($str_arr);
                    //0 - name
                    //1 - bac: true/false
                    //2 - grade

                    if ($grade == $str_arr[2]) {
                        $f = array(
                            "title" => $str_arr[0],
                            "path" => $path . '/' . $file . '.pdf',
                            "id" => $id++,
                        );
                        //add array of elem to main array
                        array_push($main_file_list, $f);
                    }
                }

                foreach ($main_file_list as $file) {

                    //TODO: debug modal
                    echo '
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 cardx">
                        <div class="card shadow-md">
                            <div class="row">
                                <div class="col-3">
                                    <img src="' . $img . '" class="img-fluid" alt="' . $alt . '" />
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-body">' . $file['title'] . '</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="" class="btn btn-success btn-block" data-toggle="modal" data-target="#id' . $file['id'] . '">Vezi tema</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="modal" id="id' . $file['id'] . '" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg py-2" style="margin:auto;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">' . $file['title'] . '</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col-12 m-auto">
                                        <div class="m-2">
                                            <iframe src="' . $file['path'] . '" class="w-100 " height="800"></iframe>                                         
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                    // print_r( $file['path']);
                }


                ?>
                <!-- Large modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#id">Large modal</button> -->






            </div>

            <!-- row end -->
        </div>
    </main>

    <?php include "includes/footer.php"; ?>
</body>

</html>