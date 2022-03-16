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
    // array(
    //     "id" => 2,
    //     "name" => "Chimie",
    //     "img" => "src/assets/images/chemistry.png"
    // ),
    array(
        "id" => 3,
        "name" => "Fizică",
        "img" => "src/assets/images/physics.png"
    ),
    // array(
    //     "id" => 4,
    //     "name" => "Biologie",
    //     "img" => "src/assets/images/biology.png"
    // ),
    array(
        "id" => 5,
        "name" => "Limba Română",
        "img" => "src/assets/images/lectures.png"
    ),
    // array(
    //     "id" => 6,
    //     "name" => "Engleză",
    //     "img" => "src/assets/images/english.png"
    // ),
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

$content = array(
    //mate - 1
    "1" => array(
        array(
            'name' => "Progresii Aritmetice ",
            'path' => "DB/mate/Progresii_aritmetice.pdf",
            'year' => "9",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Functia de gradul 1",
            'path' => "DB/mate/FunctiaDeGrad1.pdf",
            'year' => "9",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Combinatorica - Permutari - Aranjamente",
            'path' => "DB/mate/Combinatorica.pdf",
            'year' => "10",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Numere Complexe",
            'path' => "DB/mate/NumereComplexe.pdf",
            'year' => "10",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Matrici",
            'path' => "DB/mate/Matrici.pdf",
            'year' => "11",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Formule Analiza Matematica",
            'path' => "DB/mate/Formule_Analiza.pdf",
            'year' => "11",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Formule Matematica BAC",
            'path' => "DB/mate/Formule_Matematica.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Integrla Nedefinita",
            'path' => "DB/mate/IntegralaNedefinita.pdf",
            'year' => "12",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Structuri Algebrice BAC",
            'path' => "DB/mate/StructuriAlgebriceBac.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        )
    ),
    //fizica - 3
    "3" => array(
        array(
            'name' => "Gruparea Rezistoarelor",
            'path' => "DB/fizica/Gruparea_rezistoarelor.pdf",
            'year' => "10",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Legile lui Kirchhoff",
            'path' => "DB/fizica/legile_kirchhoff.pdf",
            'year' => "10",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Propagarea si Reflexia Luminii",
            'path' => "DB/fizica/propagarea_luminii_reflexia.pdf",
            'year' => "9",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Proprietatile miscarii oscilatorii armonice, pendulul gravitational",
            'path' => "DB/fizica/proprietatile-miscarii-oscilatorii-armonice-pendulul-gravitational.pdf",
            'year' => "11",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Miscarea oscilatorie - miscarea oscilatorie armonica, pendulul elastic",
            'path' => "DB/fizica/miscarea-oscilatorie-miscarea-oscilatorie-armonica-pendulul-elastic.pdf",
            'year' => "11",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Transformarile galilei, principiul relativitatii restranse",
            'path' => "DB/fizica/transformarile-galilei-principiul-relativitatii-restranse.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Experimentul Michelson",
            'path' => "DB/fizica/Experimentul-Michelson.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        )
    ),
    //romana - 5
    "5" => array(
        array(
            'name' => "Comentarii Literale",
            'path' => "DB/romana/Comentarii_3.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Eseuri Si Sabloane BAC",
            'path' => "DB/romana/eseuri_sabloane_bac.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Bibliografie BAC",
            'path' => "DB/romana/PROGRAMA-BAC-SINTETIZATA.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Portofoliu: Curente Genuri Eseuri",
            'path' => "DB/romana/portofoliu_romana.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        )
    ),
    //engleza -6
    // "6"=>array( 
    //     array(
    //         'name' => "file",
    //         'path' => "file://",
    //         'year' => "9",
    //         'bac' => false,
    //         'id'=>uniqid()
    //     ),
    // ),
    //info - 7
    "7" => array(
        array(
            'name' => "Algoritmi Elementari",
            'path' => "DB/info/Cifrele_unui_numar_2.pdf",
            'year' => "9",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Algoritmi de Divizibilitate",
            'path' => "DB/info/Divizori_9.pdf",
            'year' => "9",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Functii - Siruri de Caracrtere",
            'path' => "DB/info/Functii_siruri_de_caractere_5.pdf",
            'quiz'=> 'https://docs.google.com/forms/d/e/1FAIpQLSfe3TKN7t8ctlyJULwh3mLfBpgOLTv8jC4OC6XsCUjLIvXWyw/viewform?embedded=true',
            'year' => "10",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Limbajul de Pseudocod",
            'path' => "DB/info/Limbajul_pseudocod_6.pdf",
            'year' => "9",
            'bac' => false,
            'id' => uniqid()
        ),
        array(
            'name' => "Prelucrarea unei multimi de date",
            'path' => "DB/info/Parcurgerea_numerelor_7.pdf",
            'year' => "9",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Teorie Grafuri Si Arbori",
            'path' => "DB/info/Teorie_grafuri_si_arbori_8.pdf",
            'quiz' => "https://docs.google.com/forms/d/e/1FAIpQLSfX5lnxbsHtCRgXlh2QvtqdbAguTk9AF7aUYnG2pgcbWFn49Q/viewform?embedded=true",
            'year' => "11",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Teorie Informatică BAC",
            'path' => "DB/info/Teorie_Informatică_bac_4.pdf",
            'year' => "12",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Teorie Matrici",
            'path' => "DB/info/Teorie_matrici_1.pdf",
            'year' => "9",
            'bac' => true,
            'id' => uniqid()
        ),
        array(
            'name' => "Tipul Struct",
            'path' => "DB/info/Tipul_struct_3.pdf",
            'year' => "10",
            'bac' => true,
            'id' => uniqid()
        )
    )

); //

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