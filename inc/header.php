<?php
$nav_items = array(
    array(
        "name" => "Home",
        "link" => ""
    ),
    array(
        "name" => "Resurse",
        "link" => "resources"
    ),
    array(
        "name" => "BAC",
        "link" => "bac"
    ),
    array(
        "name" => "Contact",
        "link" => "contact"
    )
);
?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-529QB69" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header>
    <nav class="navbar navbar-expand-sm navbar-fixed-top shadow-sm">
        <div class="container">
            <a href="" class="navbar-brand d-flex align-items-center">
                <img src="src/assets/images/logo/logo_mini.png" class="img-fluid" width="30" height="30" />
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
                    foreach ($nav_items as $itm) {
                        //get page.php from url
                        $url = $_SERVER['REQUEST_URI'];
                        $parts = parse_url($url);
                        $file_name = basename($parts['path']);
                        //check if its good
                        if ($file_name!=$itm['link']) {
                            $active = '';
                        }else{
                            $active = ' active';
                        }
                        //output
                        echo '
                        <li class="nav-item'.$active.'">
                            <a class="nav-link" href="'.$itm['link'].'">'.$itm['name'].'</a>
                        </li>
                        ';
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