<!DOCTYPE html>
<html lang="ro">

<?php
$prelink = "../";
include($prelink . "includes/head.php");
require($prelink . "main.php");
?>

<body>

    <!-- loading screen -->
    <div class="se-pre-con"></div>

    <!--Content start-->

    <?php
    include($prelink . "includes/header.php");
    // header_remove("Location"); 
    ?>

    <main role="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="waves" fill-opacity="1" d="M0,64L15,85.3C30,107,60,149,90,170.7C120,192,150,192,180,181.3C210,171,240,149,270,122.7C300,96,330,64,360,64C390,64,420,96,450,133.3C480,171,510,213,540,208C570,203,600,149,630,149.3C660,149,690,203,720,202.7C750,203,780,149,810,133.3C840,117,870,139,900,170.7C930,203,960,245,990,234.7C1020,224,1050,160,1080,133.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,208C1290,224,1320,224,1350,192C1380,160,1410,96,1425,64L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path>
        </svg>
        <!-- main container  -->
        <div class="container">

            <?php

            $error_message = '';

            if (isset($_POST['username']) || isset($_POST['password'])) {
                if ($_POST['username'] == $cms_username && $_POST['password'] == $cms_password) {
                    // if (isset($_SESSION)) {
                    //     $_SESSION['session_id'] = uniqid();

                    //     // exit();
                    // }
                    $_POST['sessionid'] = uniqid();
                    $location = "admin.php?session_id=" . strval($_POST['sessionid']);
                    // $location = "admin.php";
                    header("Location: " . $location);
                    unset($_POST);
                } else {
                    $error_message = "Incorect password or username";
                    unset($_POST);
                    session_unset();
                    // exit;
                }
            }
            ?>

            <!-- Form contacteaza-ne -->
            <div class="row" style="margin: auto;">


                <div class="contact_form my-5">
                    <div class="col contact_form_header">
                        <div class="row">
                            <div class="card col-10 col-md-8 col-lg-6 mx-auto">
                                <!-- TODO: redesign, add more contact things  -->
                                <br>
                                <div class="loading mx-auto">
                                    <h2>Log In</h2>
                                </div>
                                <br>
                                <div class="container form-top ">

                                    <div class="form_in loading">
                                        <div class="panel panel-danger">
                                            <div class="panel-body">

                                                <form id='contact' name='contact' method='POST' action="">
                                                    <!-- Currently with no action="/StudentApp/success.html" tag in <form> -->
                                                    <div class="form-group">
                                                        <label><?php echo $error_message; ?></label>
                                                        <input type="text" name="username" class="form-control" placeholder="Username">
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label> -->
                                                        <input type="password" name="password" class="form-control" placeholder="Password">
                                                    </div>
                                                    <div class="form-group">
                                                        <p></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-raised btn-block btn-success"> Log In</button>
                                                    </div>
                                                </form>
                                                
                                                <a href="" class="btn btn-raised btn-block btn-success">Open Admin Panel</a>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">

            </div>


        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="waves" fill-opacity="1" d="M0,64L15,85.3C30,107,60,149,90,170.7C120,192,150,192,180,181.3C210,171,240,149,270,122.7C300,96,330,64,360,64C390,64,420,96,450,133.3C480,171,510,213,540,208C570,203,600,149,630,149.3C660,149,690,203,720,202.7C750,203,780,149,810,133.3C840,117,870,139,900,170.7C930,203,960,245,990,234.7C1020,224,1050,160,1080,133.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,208C1290,224,1320,224,1350,192C1380,160,1410,96,1425,64L1440,32L1440,320L1425,320C1410,320,1380,320,1350,320C1320,320,1290,320,1260,320C1230,320,1200,320,1170,320C1140,320,1110,320,1080,320C1050,320,1020,320,990,320C960,320,930,320,900,320C870,320,840,320,810,320C780,320,750,320,720,320C690,320,660,320,630,320C600,320,570,320,540,320C510,320,480,320,450,320C420,320,390,320,360,320C330,320,300,320,270,320C240,320,210,320,180,320C150,320,120,320,90,320C60,320,30,320,15,320L0,320Z"></path>
        </svg>
    </main>

    <?php include $prelink . "includes/footer.php"; ?>
</body>

</html>