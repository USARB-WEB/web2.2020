<?php
error_reporting(0);
?>
<!doctype html>
<html lang="en">
    <head>
        <title>This is Page title <?="PHP Title"?></title>
    </head>
    <body>
    This is HTML.

    <?php echo "This is PHP"; ?>
    <?
    $x = 2;
    $y = 3;
    echo "<br>";
    echo $x + $y;
    ?>
    <br>
    <?
    echo "x - y = " . ($x - $y);

    $a = 2;
    $b = 5;
    ?>
    <br>
    <?
    echo "a + b = " . ($a + $b);
    ?>
    <br>
    <?
    echo "a + b = " . ($a + 6);
    ?>
    <br>
    <?
    echo "a + b = " . ($a + "2");
    ?>
    <br>
    <?
    echo "a + b = " . ("2a" + "2b");
    ?>
    <br>
    <?
    echo "a + b = " . ("3a" + "2b");
    ?>
    <br>
    <?
    echo "a + b = " . ("1a2b" + "2b1a");
    ?>
    <br>
    <?
    echo "a + b = " . ("a" + "b");
    ?>

    <?
    define("SOME_CONSTANT", 4);
    $x = 4;
    echo SOME_CONSTANT;
    ?>

    <?
    ?>
    <br>
    <?
    $test = 2;
    if($test > 3) {
        echo ">3";
    } else {
        echo "<3";
    }

    $month = 5;
    switch ($month) {
        case 3:
            echo "March";
            break;
        case 4:
            echo "April";
            break;
        default:
            echo "Not a moth";
    }

    ?>
    <hr>
    <?
    for ($i = 1; $i <= 10; $i++){
        echo " ". $i;
    }
    ?>

    <hr>
    <?
    $i = 1;
    while ( $i <= 10){
        echo " ". $i;
        $i++;
    }
    ?>
    <hr>
    <?
    $i = 1;
    do{
        echo " ". $i;
        $i++;
    }while ( $i <= 10);


    ?>
    <hr>
    <?
    $numbers = [1, 4, 6, 8];
    print_r($numbers);
    ?>
    <hr>
    <?

    for ($i = 0; $i <= count($numbers); $i++){
        echo " ". $numbers[$i];
    }


    foreach ($numbers as $number) {
        echo " ". $number;
    }
    ?>
    <hr>
    <?

    $polymorphic = [1, "4", [], "33424", 3.14, true];
    print_r($polymorphic);

    $student = [
        "name" => "Mihai Eminescu",
        "age" => 123
    ];
    echo "<pre>";
    print_r($student);
    echo "</pre>";


    $group = [
        [
            "name" => "Mihai Eminescu",
            "age" => 123,
            "marks" => [8, 9, 10]
        ],
        [
            "name" => "Ion Eminescu",
            "age" => 222
        ],
        [
            "name" => "Mihai Creanga",
            "age" => 333
        ]
    ];
    echo "<pre>";
    print_r($group);
    echo "</pre>";


    echo $group[0]['name'];


    function someFunction($param1, $param2){
        echo $param1;
    }
    someFunction("1", 2);

    function average($marks){
        return array_sum($marks) / count($marks);
    }
    ?>
    <hr>
    <?
    echo average([9, 10]);


    ?>
    </body>
</html>
