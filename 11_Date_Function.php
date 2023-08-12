<?php // Date Function 
    echo " Welcome to data function ";
    echo "<br>";

    // Print something like monday 
    $d =  date("l");
    echo date("l");
    echo "<br>";

    date_default_timezone_set('UTC');  // default
    // Print something like Saturday 12th of August 02:45:45
    echo date('l jS \of F Y h:i:s A');

    echo "<br>";
    
    echo date("W F Y");  // w -> Week no. f-> Month Y-> YEar 
    echo "<br> ";
    echo date("dS F Y, g:i A");



?> 