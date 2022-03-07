<?php
$nav_items = array(
    array(
        "name" => "Home",
        "link" => "index.php"
    ),
    array(
        "name" => "Resurse",
        "link" => "app.php"
    ),
    array(
        "name" => "BAC",
        "link" => "data.php?page=subjects"
    ),
    array(
        "name" => "Contacte",
        "link" => "contact_us.php"
    )
);
?>
<header>
    <nav class="navbar navbar-expand-sm navbar-fixed-top shadow-sm">
        <div class="container">
            <a href="index.php" class="navbar-brand d-flex align-items-center">
                <img src="<?php echo $prelink; ?>src/assets/images/logo/logo_mini.png" class="img-fluid" width="30" height="30" />
                <strong class="text-dark">StudentApp</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <!--<p>
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </p>-->
                <div class="toggler"></div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <?php
                    $active = '';
                    
                    foreach ($nav_items as $itm) {
                        //get page.php from url
                        $query = $_SERVER['PHP_SELF'];
                        $path = pathinfo($query);
                        $what_you_want = $path['basename'];
                        //check if its good
                        if ($what_you_want == $itm['link']) {
                            $active = 'active';
                        }
                        //output
                        echo '
                        <li class="nav-item ' . $active . '">
                            <a class="nav-link" href="' . $prelink . $itm['link'] . '">' . $itm['name'] . '</a>
                        </li>
                        ';
                        //make active blank again
                        $active = '';
                    }
                    ?>
                    <li class="nav-item ">
                        <p id="theme-toggle" class=" nav-link custom-control custom-switch">
                        </p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>