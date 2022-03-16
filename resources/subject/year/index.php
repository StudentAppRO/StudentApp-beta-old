<?php
$links = '../../../';
require $links . 'inc/variables.php';
//param veification
if (isset($_GET['subject']) && isset($_GET['year'])) {
    foreach ($subjects as $subject) {
        if ($subject['id'] == $_GET['subject']) {
            $title = $subject['name'];
        }
    }
    if ($_GET['year'] == "all") {
        $subtitle = "toate resursele.";
    } else {
        foreach ($years as $year) {
            if ($year['id'] == $_GET['year']) {
                $subtitle = $year['name'];
            }
        }
    }
} else {
    //return to resources
    header('Location: ' . $links . 'resources');
    exit();
}
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
            <div class="row my-5">
                <div class="col-12">
                    <h2 class="text-center"><?php echo $title . ', ' . $subtitle; ?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!-- cards with content: -->
                <?php
                #sort 
                #get vars  
                $s = $_GET['subject'];
                $y = $_GET['year'];
                $img = '';
                $out_card_nr = 0;
                foreach ($subjects as $sub) {
                    if ($sub['id'] == $s) {
                        $img = $sub['img'];
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

                foreach ($content[$s] as $file) {
                    if (sortByYearOrTrue($y, $file['year'])) {
                        #TODO add all case
                        echo '
                            <div class="col-12 col-lg-6 cardx" style="margin: 12px 0 12px 0;">
                                <div class="card shadow-md h-100">
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
                                            <style>
                                                .d-flex a {
                                                    width: 70% !important;
                                                    margin: 8px auto 0 auto !important;
                                                }
                                            </style>
                                            <a href="" class="btn btn-success btn-block" data-toggle="modal" data-target="#id' . $file['id'] . '">Vezi tema</a>';

                        if (isset($file['quiz'])) {
                            if ($file['quiz'] != '') {
                                echo '<a href="" class="btn btn-success btn-block" data-toggle="modal" data-target="#quizid' . $file['id'] . '">Rezolvă testul</a>';
                            }
                        }
                        echo '    
                                        </div>
                                    </div>
                                </div>
                            </div>';

                        echo '    
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

                        if (isset($file['quiz'])) {
                            if ($file['quiz'] != '') {
                                echo '    
                                <div class="modal" id="quizid' . $file['id'] . '" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog modal-lg py-2" style="margin:auto;">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Test - ' . $file['name'] . '</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true" >&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row justify-content-center">
                                                    <div class="col-12 m-auto">
                                                        <div class="m-2">
                                                            <iframe src="' . $file['quiz'] . '" class="w-100 mt-5" height="800"></iframe>                                         
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }

                        $out_card_nr++;
                    }
                }
                if ($out_card_nr == 0) {
                    echo '
                    </br>
                    <h4>Nu exista continut :(</h4>
                    ';
                }
                #create array

                #if array null, echo no content




                ?>
                <!-- Large modal -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#id">Large modal</button> -->
            </div>
            <!-- row end -->
        </div>
    </main>
    <?php include $links . 'inc/footer.php'; ?>
</body>

</html>