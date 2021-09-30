<?php
$a=10;
if($a<=10){
    echo"value is lesser or equal";
}
else{
    echo"value is greater or not equal";
}echo "<br>";
//for understanding
echo '<script>
a=10
if(a<=10){
    console.log("value is lesser or equal")
}else{
    console.log("value is greater or not equal")
}</script>';



//
//switch case
$case_variable=5;
switch($case_variable){
    case 1:echo "its a one";
    break;
    case 2:echo "its a two";
    break;
    case 3:echo "its a three";
    break;
    case 4:echo "its a four";
    break;
    case 5:echo "its a five";
    break;
    default:echo"invalid input";
    break;

}echo "<br>";

//for loop
//1.first
for($i=0;$i<=10;$i++){
    echo $i;

}echo "<br>";
//2.diffrenr way
for($j=0;$j<=10;$j++){
    echo $j. "<br>";
}echo "<br>";


//while 

$i=0;
while($i<=10){
    echo $i."<br>";
    $i++;

}echo"<br>";

//do while
$i=0;
do{
    echo $i."<br>";
    $i++;
}while($i<=10) ;
echo"<br>";

//foe each loop

$fruits= array('banana', 'apple', 'guava', 'orange', 'pomogranate');
print_r($fruits);

foreach($fruits as $fruit){
    echo $fruit;
}echo"<br>";
//foreach syntax
foreach(array/objectname as anyindividualnoun)



?>






 




