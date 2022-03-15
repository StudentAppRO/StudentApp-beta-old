<?php
//session start
session_start();
if(!isset($_SESSION['admin_id'])){
    header("Location: ../");
    exit;
}
if(isset($_GET['page'])){
    switch ($_GET['page']) {
        case 'admins':
        case 'users':
        case 'files':
        case 'subjects':
        case 'years':
            break;
        default:
            header("Location: ../dashboard");
            exit;
    }
}
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
            <div class="main">
                <div class="row mt-5">
                    <div class="col-10">
                        <a href="admin/dashboard?page=admins" class="btn btn-primary btn-lg ">Manage Admins</a>
                        <a href="admin/dashboard?page=users" class="btn btn-primary btn-lg ">Manage Users</a>
                        <a href="admin/dashboard?page=files" class="btn btn-primary btn-lg ">Manage Files</a>
                        <a href="admin/dashboard?page=subjects" class="btn btn-primary btn-lg ">Manage Subjects</a>
                        <a href="admin/dashboard?page=years" class="btn btn-primary btn-lg ">Manage Years</a>
                    </div>
                    <div class="col-2">
                        <a href="admin/dashboard/logout.php" class="btn btn-danger btn-lg float-right">Log out</a>
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

                // $result = mysqli_query($conn,"SELECT * FROM `Admins` WHERE `AdminID`= 1");
                // print_r(mysqli_fetch_array($result));

                // while ($row = mysqli_fetch_array($result)) {
                //     #selects arr from Admins where user = inputed user (admin)
                //     // echo "admin id" . " => " . $row['AdminID'] . "</br>";
                //     // echo "admin name" . " => " . $row['AdminName'] . "</br>";
                //     // echo "admin password hash" . " => " . $row['AdminPassword'] . "</br>";
                //     // echo "admin level" . " => " . $row['AdminLevel'] . "</br>";
                //     #here check if inputed usernme is the same as the one inputed else return error message
                //     #if it is check password compatibility
                // }
                ?>
                <style>
                    input {
                        border: 1px #fff solid !important;
                        color:#fff !important;
                    }
                </style>
                <div class="row mt-5">
                    <?php
                        if(isset($_GET['page'])){
                            echo '<table class="table table-dark">
                            <thead>
                              <tr>';
                            switch ($_GET['page']) {
                                case 'admins':
                                    $sql = "SELECT * FROM `Admin`";
                                    echo '
                                    <th scope="col">AdminID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>';
                                    break;
                                case 'users':
                                    $sql = "SELECT * FROM `User`";
                                    echo '
                                    <th scope="col">UserID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Password</th>
                                    <th scope="col">Data</th>';
                                    break;
                                case 'files':
                                    $sql = "SELECT * FROM `File`";
                                    echo '
                                    <th scope="col">FileID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">FKU</th>
                                    <th scope="col">SubjectID</th>
                                    <th scope="col">YearID</th>
                                    <th scope="col">Bac</th>
                                    <th scope="col">Uploader</th>
                                    <th scope="col">AdminID</th>
                                    <th scope="col">UserID</th>';
                                    break;
                                case 'subjects':
                                    $sql = "SELECT * FROM `Subject`";
                                    echo '
                                    <th scope="col">SubjectID</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Img</th>';
                                    break;
                                case 'years':
                                    $sql = "SELECT * FROM `Year`";
                                    echo '
                                    <th scope="col">YearID</th>
                                    <th scope="col">Name</th>';
                                    break;
                            }
                            echo '
                              </tr>
                            </thead>
                            <tbody>';
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($result)) {
                                switch ($_GET['page']) {
                                    case 'admins':
                                        echo '
                                            <tr>
                                                <th scope="row">'.$row['AdminID'].'</th>
                                                <td><input type="text" class="form-control" id="adminname'.$row['AdminID'].'" placeholder="'.$row['Name'].'">'.(($row['AdminID']==$_SESSION['admin_id'])?'<p class="mt-2 text-warning">This is you.</p>':'').'</td>
                                                <td><input type="password" class="form-control" id="adminpwd'.$row['AdminID'].'" placeholder="New Password"><input type="password" class="form-control mt-2" id="adminrepwd'.$row['AdminID'].'" placeholder="Confirm Password"></td>
                                                <td><input type="number" class="form-control mt-2" id="adminlevel'.$row['AdminID'].'" placeholder="'.$row['Level'].'"></td>
                                                <td>'.$row['Date'].'</td>
                                                <td><a class="btn btn-danger btn-sm" href="admin/dashboard" role="button">Delete</a></td>
                                                <td><a class="btn btn-primary btn-sm" href="admin/dashboard" role="button">Update</a></td>
                                            </tr>';
                                        break;
                                    case 'users':
                                        echo '
                                            <tr>
                                                <th scope="row">'.$row['UserID'].'</th>
                                                <td>'.$row['Name'].'</td>
                                                <td>'.$row['Email'].'</td>
                                                <td>'.$row['Phone'].'</td>
                                                <td>'.$row['Password'].'</td>
                                                <td>'.$row['Data'].'</td>
                                            </tr>';
                                        break;
                                    case 'files':
                                        echo '
                                            <tr>
                                                <th scope="row">'.$row['FileID'].'</th>
                                                <td>'.$row['Name'].'</td>
                                                <td>'.$row['FKU'].'</td>
                                                <td>'.$row['SubjectID'].'</td>
                                                <td>'.$row['YearID'].'</td>
                                                <td>'.$row['Bac'].'</td>
                                                <td>'.$row['Uploader'].'</td>
                                                <td>'.$row['AdminID'].'</td>
                                                <td>'.$row['UserID'].'</td>
                                            </tr>';
                                        break;
                                    case 'subjects':
                                        echo '
                                            <tr>
                                                <th scope="row">'.$row['SubjectID'].'</th>
                                                <td>'.$row['Name'].'</td>
                                                <td>'.$row['Img'].'</td>
                                            </tr>';
                                        break;
                                    case 'years':
                                        echo '
                                            <tr>
                                                <th scope="row">'.$row['YearID'].'</th>
                                                <td>'.$row['Name'].'</td>
                                            </tr>';
                                        break;
                                }
                            }
                              
                              echo '
                            </tbody>
                          </table>';
                        }
                    ?>
                </div>
            </div>
        </div>


    </main>

    <?php include $links . "inc/footer.php"; ?>
</body>

</html>