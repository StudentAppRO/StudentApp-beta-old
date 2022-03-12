<?php
//session start
session_start();
$links = "../";
require $links . 'inc/variables.php';

$error_message = '';
$ShowRedirectBtn = false;
if (isset($_POST['g-recaptcha-response'])) {
    function getCaptcha($SecretKey)
    {
        $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . SECRET_KEY . "&response={$SecretKey}");
        $Return = json_decode($Response);
        return $Return;
    }
    $Return = getCaptcha($_POST['g-recaptcha-response']);

    if ($Return->success == true && $Return->score > 0.5) {
        // Create connection
        $conn = db_connect();
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // echo "Connected successfully </br>";
        $result = mysqli_query($conn, "SELECT * FROM `Admin`");

        //test DB content
        // while ($row = mysqli_fetch_array($result)) {
        //     #selects arr from Admins where user = inputed user (admin)
        //     echo "admin id" . " => " . $row['AdminID'] . "</br>";
        //     echo "admin name" . " => " . $row['Name'] . "</br>";
        //     echo "admin password hash" . " => " . $row['Password'] . "</br>";
        //     echo "admin level" . " => " . $row['Level'] . "</br>";
        // }

        ///check for user and pas match hash lol :)
        function checkUserAuth($in_username, $in_password, $user, $pass)
        {
            // echo $in_username . "</br>";
            // echo $user . "</br>";
            // echo (password_verify($in_password, $pass) ? 'true' : 'false') . "</br>";
            if ($user == $in_username) {
                echo "Userii sunt la fel</br>";
                $password="Test1234";
                $options = [
                    'cost' => 11
                ];
                $hashed_password=password_hash($password, PASSWORD_BCRYPT, $options);
                if (password_verify($password, $hashed_password)) {
                    echo "Password match";
                    return true;
                }else{
                    echo "Password dont match";
                }
            }
            return false;

        }

        $u = $_POST['username'];
        $p = $_POST['password'];
        // unset($_POST);
        // print_r($u.'  '.$p);
        $res = false;
        while ($row = mysqli_fetch_array($result)) {
            # while goes through every row in the data base

            # $res gets the true value if credentials are correct, false if not
            $res = checkUserAuth($u, $p, $row['Name'], $row['Password']);
            if ($res) {
                $_SESSION['admin_id'] = $row['AdminID'];
                header("Location: ../admin/dashboard");
                exit;
                break;
            }
        }
        if (!$res) {
            // $ShowRedirectBtn = false;
            $error_message = "Incorect password or username";
        }
    } else {
        $error_message = "reCaptcha doesn&apos;t let you to make that request.";
    }
}
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <?php
    include $links . 'inc/head.php';
    ?>
    <script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>
</head>

<body>
    <!-- loading screen -->
    <div class="se-pre-con"></div>
    <!--Content start-->
    <?php
    include $links . 'inc/header.php';
    // header_remove("Location"); 
    ?>

    <main role="main">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="waves" fill-opacity="1" d="M0,64L15,85.3C30,107,60,149,90,170.7C120,192,150,192,180,181.3C210,171,240,149,270,122.7C300,96,330,64,360,64C390,64,420,96,450,133.3C480,171,510,213,540,208C570,203,600,149,630,149.3C660,149,690,203,720,202.7C750,203,780,149,810,133.3C840,117,870,139,900,170.7C930,203,960,245,990,234.7C1020,224,1050,160,1080,133.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,208C1290,224,1320,224,1350,192C1380,160,1410,96,1425,64L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z"></path>
        </svg>
        <!-- main container  -->
        <div class="container">
            <?php


            //recaptcha and form validate
            // if (isset($_POST['g-recaptcha-response'])) {
            //     function getCaptcha($SecretKey)
            //     {
            //         $Response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . SECRET_KEY . "&response={$SecretKey}");
            //         $Return = json_decode($Response);
            //         return $Return;
            //     }
            //     $Return = getCaptcha($_POST['g-recaptcha-response']);
            //     //var_dump($Return);
            //     if ($Return->success == true && $Return->score > 0.5) {
            //         //good captcha

            //         // print_r($_POST);
            //         // if (isset($_POST)) {
            //         //     echo "test;";
            //         // }
            //     } else {
            //         //bad captcha
            //         #error message
            //         $error_message = "Incorect Captcha";
            //     }
            // }

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
                                                <form method='POST' action="" form-validate>
                                                    <!-- Currently with no action="/StudentApp/success.html" tag in <form> -->
                                                    <div class="form-group">
                                                        <label><?php echo $error_message; ?></label>
                                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <!-- <label><i class="fa fa-envelope" aria-hidden="true"></i> Email</label> -->
                                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <p></p>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-raised btn-block btn-success" id="g-recaptcha-response" name="g-recaptcha-response"> Log In</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path class="waves" fill-opacity="1" d="M0,64L15,85.3C30,107,60,149,90,170.7C120,192,150,192,180,181.3C210,171,240,149,270,122.7C300,96,330,64,360,64C390,64,420,96,450,133.3C480,171,510,213,540,208C570,203,600,149,630,149.3C660,149,690,203,720,202.7C750,203,780,149,810,133.3C840,117,870,139,900,170.7C930,203,960,245,990,234.7C1020,224,1050,160,1080,133.3C1110,107,1140,117,1170,138.7C1200,160,1230,192,1260,208C1290,224,1320,224,1350,192C1380,160,1410,96,1425,64L1440,32L1440,320L1425,320C1410,320,1380,320,1350,320C1320,320,1290,320,1260,320C1230,320,1200,320,1170,320C1140,320,1110,320,1080,320C1050,320,1020,320,990,320C960,320,930,320,900,320C870,320,840,320,810,320C780,320,750,320,720,320C690,320,660,320,630,320C600,320,570,320,540,320C510,320,480,320,450,320C420,320,390,320,360,320C330,320,300,320,270,320C240,320,210,320,180,320C150,320,120,320,90,320C60,320,30,320,15,320L0,320Z"></path>
        </svg>
        <!-- Recaptcha: -->
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('<?php echo SITE_KEY; ?>', {
                        action: 'submit'
                    })
                    .then(function(token) {
                        // console.log(token);
                        document.getElementById('g-recaptcha-response').value = token;
                    });
            });
        </script>
    </main>
    <?php include $links . 'inc/footer.php'; ?>
</body>


</html>