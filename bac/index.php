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

            <div class="row mx-3">
                <div class="col-sm-12 col-12 col-lg-12">
                    <h1>
                        <?php
                        echo "show content";
                        ?>
                    </h1>

                </div>
            </div>
        </div>
    </main>

    <?php include $links . 'inc/footer.php'; ?>
</body>

</html>