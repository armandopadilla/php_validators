<?php
/**************************************
** Example of how to use the FormValidate.php Class
***************************************/

//Imports required class file
require("ValidateEmail.php");

//instantiates object
$validateEmail = new ValidateEmail();

//variables to use
$email = $_POST['email'];  //Passed POST email variable from HTML FORM.  Note: $_GET[];

//Checks for propertly formated email
if($validateEmail->isEmail($email))
   echo "email is good";
else
    echo "email bad so fix";
