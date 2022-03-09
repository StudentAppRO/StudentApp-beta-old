<!-- file for functions and variables  -->
<?php
#important variables
include $links.'inc/db_variables.php';

$alt = "Student App StudentApp learning Romania school";

$subjects = array(
    array(
        "id" => 1,
        "name" => "Matematică",
        "img" => "src/assets/images/math.png"
    ),
    array(
        "id" => 2,
        "name" => "Chimie",
        "img" => "src/assets/images/chemistry.png"
    ),
    array(
        "id" => 3,
        "name" => "Fizică",
        "img" => "src/assets/images/physics.png"
    ),
    array(
        "id" => 4,
        "name" => "Biologie",
        "img" => "src/assets/images/biology.png"
    ),
    array(
        "id" => 5,
        "name" => "Limba Română",
        "img" => "src/assets/images/lectures.png"
    ),
    array(
        "id" => 6,
        "name" => "Engleză",
        "img" => "src/assets/images/english.png"
    ),
    array(
        "id" => 7,
        "name" => "Informatică",
        "img" => "src/assets/images/coding.png"
    )
);

$years = array(
    array(
        "id" => 9,
        "name" => "Clasa a IX-a"
    ),
    array(
        "id" => 10,
        "name" => "Clasa a X-a"
    ),
    array(
        "id" => 11,
        "name" => "Clasa a XI-a"
    ),
    array(
        "id" => 12,
        "name" => "Clasa a XII-a"
    )
);
?>