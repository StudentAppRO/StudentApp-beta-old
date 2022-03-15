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

            <div class="row mx-3 px-3">
                <div class="col-sm-12 col-12 col-lg-12">
                        <?php
                        // $s = $_GET['subject'];
                        // $y = $_GET['year'];
                        $img = 'src/assets/images/logo/logo_def.png';

                        function chackSubjId_Name($subjects, $id)
                        {
                            foreach ($subjects as $sub) {
                                if ($sub['id'] == $id) {
                                    return $sub['name'];
                                }
                            }
                        }

                        function sortByYearOrTrue($get_year, $value)
                        {
                            #if year val is all, allways true
                            if ($get_year == "all") {
                                return true;
                            } else if ($value == $get_year) {
                                #sort by year
                                return true;
                            } else {
                                #if != year, allways false
                                return false;
                            }
                        }
                        foreach ($content as $sid => $subj) {
                            echo '
                            <div class="row">
                                <div class="col-12 text-center">
                                <h3 class="m-2">' . chackSubjId_Name($subjects, $sid) . '</h3>
                                </div>
                            </div>
                            <br>
                            ';
                            
                            //reset image for every row
                            $key = array_search($sid, array_column($subjects, 'id'));
                            $img=$subjects[$key]['img'];

                            foreach ($subj as $file) {
                                if($file['bac']){
                                    echo '
                                        <div class="col-12 col-lg-6 col-md-12 col-sm-12 cardx">
                                            <div class="card shadow-md">
                                                <div class="row">
                                                    <div class="col-3">
                                                        <img src="' . $img . '" class="img-fluid" alt="' . $alt . '" />
                                                    </div>
                                                    <div class="col-9">
                                                        <div class="card-body">
                                                            <h5 class="card-body">' . $file['name'] . '</h5>
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
                                                    <h5 class="modal-title">' . $file['name'] . '</h5>
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
                                }
                            }
                        }



                        ?>

                </div>
            </div>
        </div>
    </main>

    <?php include $links . 'inc/footer.php'; ?>
</body>

</html>