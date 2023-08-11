<?php  // Operators


// Assignment Operators

$a = 45;
$b = 8;
echo ($a+$b) ;
echo "For a+B is " . ($a+$b);
echo "<br>";

echo "For a-B is " . ($a-$b);
echo "<br>";

echo "For a*B is " . ($a*$b);
echo "<br>";

echo "For a/B is " . ($a/$b);
echo "<br>";

echo "For a%B is " . ($a%$b);
echo "<br>";

echo "For a**B is " . ($a**$b);
echo "<br>";

// Comparison Operators 

$g = 77 ;
$h = 80 ;

echo " for g==h the result is ";
// echo ($g>$h);
echo var_dump($g>$h); 
echo "<br>";  // ($g <> $h ) not equal to sign 


// Logical Operators

$m = false ;
$n = true ;
echo "for m and n , the result is ";
echo var_dump($m and $n);
echo "<br>";
echo " fopr m or n , the result is ";
echo var_dump($m || $n);



?>