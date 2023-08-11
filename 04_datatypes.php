<?php  // Datatypes

/* 
 Data types in php
 1. String 
 2. Integer 
 3. Float
 4. Boolean 
 5. Object 
 6. Array
 7. NULL 
*/

    // String -> Sequence of character 

    $name ="Aryan";
    $friend = "Rohan";
    echo " $friend is friend of $name ";


    // Integer -> Non decimal numbers 

    $income = 466;
    $debt = -344;

    echo "<br>";
    echo $income;
    echo "<br>";
    echo $debt;

    //Float -> Decimal point number 

    $income = 355.5;
    $debt = 200.1;

    echo $income;
    echo "<br>";
    echo $debt;
    echo "<br>";


    // Boolean -> Can be either true or false k

    $x = true;
    $y = false;
    
    echo var_dump($x);
    echo "<br>";
    echo var_dump($y);
    echo "<br>";

    // Object -> Instance of class 
    // Employee is a class -> Aryan can be one object 


   // Array -> Used to store multiple values in a single variable 

   $friend = array("Rohan", "Shubham", " Skillf ", " Larry ");
   echo var_dump($friend);
   echo "<br>";

   // NULL 

    $name = NULL;
    echo $name;
    echo var_dump($name);
?>