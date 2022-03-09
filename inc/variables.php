<!-- file for functions and variables  -->
<?php
#important variables
include $links . 'inc/db_variables.php';

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

//general function to call a rest API
function CallAPI($method, $url, $data)
{
    $curl = curl_init();

    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);

            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_PUT, 1);
            break;
        default: //GET
            if ($data)
                $url = sprintf("%s?%s", $url, http_build_query($data));
    }

    // Optional Authentication:
    // curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec($curl);

    curl_close($curl);
    //returns json response
    return $result;
}

//math api returns math expression e.g. 33/11=3
function callMathAPI()
{
    $url = "https://x-math.herokuapp.com/api/random";
    $data = array(
        "max" => "999",
        "negative" => "1"
    );
    $res = CallAPI('GET', $url, $data);
    $res_arr = json_decode($res);
    $res_str = $res_arr->{'expression'} . ' = ' . $res_arr->{'answer'};
    return $res_str;
}
// echo callMathAPI();
?>