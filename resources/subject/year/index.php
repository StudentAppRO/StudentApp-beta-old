<?php
$links = '../../../';
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
    if (isset($_GET['subject'])&&isset($_GET['year'])) {
        foreach($subjects as $subject){
            if($subject['id']==$_GET['subject']){
                $title = $subject['name'];
            }
        }
        foreach($years as $year){
            if($year['id']==$_GET['year']){
                $subtitle = $year['name'];
            }
        }
    } else {
        //return to resources
        header('Location: '.$links.'resources');
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
                    <h2 class="text-center"><?php echo $title.', '.$subtitle; ?></h2>
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
                $page = $_GET['subject'];
                if (isset($_GET['year'])) {
                    $grade = $_GET['year'];
                } else if (isset($_GET['subject'])) {
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
                                    <img src="'.$img.'" class="img-fluid" alt="'.$alt.'" />
                                </div>
                                <div class="col-9">
                                    <div class="card-body">
                                        <h5 class="card-body">'.$file['title'].'</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center">
                                    <a href="" class="btn btn-success btn-block" data-toggle="modal" data-target="#id'.$file['id'].'">Vezi tema</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="modal" id="id'.$file['id'].'" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg py-2" style="margin:auto;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">'.$file['title'].'</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true" >&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="row justify-content-center">
                                    <div class="col-12 m-auto">
                                        <div class="m-2">
                                            <iframe src="'.$file['path'].'" class="w-100 " height="800"></iframe>                                         
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
    <?php include $links.'inc/footer.php'; ?>
</body>

</html>