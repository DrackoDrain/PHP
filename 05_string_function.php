

<?php // String Function 
$name = " Aryan is a good boy";

echo $name;
echo "<br>";

echo "The length of" . " my string is". strlen($name);
echo "<br>";

echo str_word_count($name);
echo "<br>";

echo strrev($name);
echo "<br>";

echo strpos($name, "Aryan ");
echo "<br>";

echo str_replace("Aryan ", "Ayush", $name);
echo "<br>";

echo str_repeat($name , 20);
echo "<br>";

echo "<pre>";

echo rtrim("     This is a good boy     ");
echo "<br>";
echo ltrim("     This is a good boy     ");

echo "</pre>";

?>