<?php
//session start
// if (!isset($_SESSION)) {
//     session_start();
// }
$links = "../../";
require $links . 'inc/variables.php';
?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <?php
    include $links . 'inc/head.php';
    ?>
    <!-- <script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script> -->
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

        <!-- main container  -->
        <div class="container">
            <div class="main mt-2">
                <div class="row">
                    <div class="col">
                        <a href="" class="btn btn-primary btn-lg ">Upload files</a>
                    </div>
                    <div class="col">
                        <a href="../" class="btn btn-danger btn-lg float-right">Log out</a>
                    </div>
                    
                </div>

                <?php
                #connect to db

                // Create connection
                $conn = db_connect();

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                echo "Connected successfully </br>";


                $result = mysqli_query($conn, "SELECT *  FROM `File`");

                // $result = mysqli_query($conn,"SELECT * FROM `Admins` WHERE `AdminID`= 1");
                // print_r(mysqli_fetch_array($result));

                while ($row = mysqli_fetch_array($result)) {
                    #selects arr from Admins where user = inputed user (admin)
                    // echo "admin id" . " => " . $row['AdminID'] . "</br>";
                    // echo "admin name" . " => " . $row['AdminName'] . "</br>";
                    // echo "admin password hash" . " => " . $row['AdminPassword'] . "</br>";
                    // echo "admin level" . " => " . $row['AdminLevel'] . "</br>";
                    #here check if inputed usernme is the same as the one inputed else return error message
                    #if it is check password compatibility
                }



                ?>
            </div>

           
        </div>


    </main>

    <?php include $links . "inc/footer.php"; ?>
</body>

</html>