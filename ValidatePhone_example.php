<?php
/**************************************
** Example of how to use the ValidatePhone.php Class
***************************************/

//Imports required file.
require("ValidatePhone.php");

//Instatiates new object
$validatePhone = new ValidatePhone();

//Variable informtion to use in exmaple.  Note: Can be used by passing HTML Form information
$phone = "6546783544";

//Validates Phone nmumber e.g( (000) 000-0000 )
if($validatePhone->isPhone($phone)){
   echo "good Phone";
}//End if

else{
    echo "bad Phone number format<br>formating....<br>";

    //Formats Phone Number
    if($validatePhone->formatPhone($phone)){
       echo $validatePhone->formatPhone($phone);
    }
    else{
        echo "There was an error with the entered Phone Number";
    }

}//End else