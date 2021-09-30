
<?php

//1. Integer
$a = 10;
var_dump($a);
echo"<br>";

$b = -10;
var_dump($b);
echo "<br>";

$c = 12.56;
var_dump($c);
echo "<br>";

$d = 10.2e4;
var_dump($d);
echo "<br>";

//2. Strings
$text1="Hellow World";
echo $text1;
echo "<br>";

//3. Boolean
$is_married = false;
var_dump($is_married);
echo "<br>";

//4. Arrays
    //4.1 Normal Array
    $fruits = array('bananna','mango','orange');
    print_r($fruits);
    echo "<br>";

    //4.2 associative array

    $trainers=array(
        "fullstack"=>"chaithra gowda",
        "pml"=>"reetesh",
        "robotics"=>"bindu"
    );
    print_r($trainers);
    echo"<br>";
//operators
    //assignment operator
    $a=0;
    //comparision operator
    //==
    //!=
    //===
    //!==
    //<
    //<=
    //>
    //>=

    $a<=10;
    //mathematical operator
    //+
    //-
    //*
    // /
    //%
    //.
    $text1="hello";
    $text2="world";
    echo $text1." 2 dot we use to give space ".$text2;

?>
