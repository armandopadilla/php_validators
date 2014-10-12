<?php
/**************************************
** Example of how to use the ValidateSSN.php Class
***************************************/

//Imports required file.
require("ValidateSSN.php");

//Instatiates new object
$validateSSN = new ValidateSSN();

//Variable to use in example
$SSN = "000-00-0000";

//Validates Social Security Number
if($validateSSN->isSSN($SSN))
   echo "good SSN";
else {
    echo "bad SSN format<br>formating now...<br>";

    //Formats entered SSN
    if($validateSSN->formatSSN($SSN))
       echo     $validateSSN->formatSSN($SSN);
    else
        echo "there was an error with the SSN provided";

}//End else