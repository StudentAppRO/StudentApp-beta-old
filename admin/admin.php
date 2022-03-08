<?php
$prelink = "../";
require($prelink . "main.php");
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <?php
    include($prelink . "includes/head.php");
    ?>
</head>

<body>

    <!-- loading screen -->
    <div class="se-pre-con"></div>

    <!--Content start-->

    <?php
    include $prelink . "includes/header.php";
    ?>


    <main role="main">

        <!-- main container  -->
        <div class="container">
            <div class="main mt-2">
                <div class="row">
                    <div class="col">
                        <a href="" class="btn btn-success btn-lg">Log out</a>
                    </div>
                    <div class="col">
                        <?php echo $_GET['session_id'] ?>
                    </div>
                </div>

                <?php
                if (isset($_GET['session_id'])) {
                
                
                }
                // if (isset($_GET['session_id'])) {
                //     if ($_COOKIE['session_id'] == $_GET['session_id']) {
                //         #allow acces
                //         // $_COOKIE['session_id'] = $_GET['session_id'];
                //          echo "allow";
                //     }else{
                //         #error
                //         echo "error";
                //     }
                // }else{
                //     // header('Location: index.php');
                //     echo "error";
                // }
                // print_r($_COOKIE['session_id']);

                #allow acces to DB show cards
                print_r($_GET['session_id']);

                #connect to db 



                #show db content as cards


                ?>
            </div>

            <div class="row">

            </div>


        </div>


    </main>

    <?php include $prelink . "includes/footer.php"; ?>
</body>

</html>