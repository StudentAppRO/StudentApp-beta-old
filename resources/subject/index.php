<?php
$links = "../../";
require $links . 'inc/variables.php';
//param verification
if (!isset($_GET['subject']) || $_GET['subject'] == '') {
    //return to resources
    header('Location: ' . $links . 'resources');
    exit();
} else {
    foreach ($subjects as $subject) {
        if ($subject['id'] == $_GET['subject']) {
            $title = $subject['name'];
        }
    }
}
if($_GET['subject'] == '5') {
    header('Location: ' . $links . 'resources/subject/year?subject=5&year=all');
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
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-center"><?php echo $title; ?></h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <!-- cards with content: -->
                <?php
                foreach ($years as $year) {
                    echo '
                    <div class="col-12 col-lg-6 content_card" style="margin: 16px 0 16px 0;">
                        <a class="link-no-dec" href="resources/subject/year?subject='.$_GET['subject'].'&year='.$year['id'].'">
                            <div class="card card-btn mx-3">
                                <div class="card-body">
                                    <h2 class="text-center py-5">'.$year['name'].'</h2>
                                </div>
                            </div>
                        </a>
                    </div>';
                }
                ?>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-3">
                    <div class="d-flex flex-wrap align-items-center">
                        <!-- goet current url params and add ?type=all /grade -->
                        <a href="resources/subject/year?subject=<?php echo $_GET['subject'] ?>&year=all" class="btn btn-success btn-block">Vezi tot</a>
                    </div>
                </div>
            </div>
            <!-- row end -->
        </div>
    </main>

    <?php include $links . 'inc/footer.php'; ?>
</body>

</html>