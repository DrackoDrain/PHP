<?php  // Function 

echo " Welcome to php function tutorial ";
echo "<br>";

function processMarks($mark){
    $sum= 0;
     foreach ($mark as $value) {
        $sum += $value;
       
     }
     return $sum;
}

function avgMarks($mark){
    $sum= 0;
    $i = 1;

     foreach ($mark as $value) {
        $sum += $value;
       $i++;
     }
     return $sum/$i;
}

$Aryan = [90,97,98,93,92,1000];
$sumMarks = processMarks($Aryan);

echo " Total marks is $sumMarks ";

$averageMarks = avgMarks($Aryan);
echo " Total avg marks is $averageMarks ";



?>