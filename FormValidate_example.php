<?php
/**************************************
** Example of how to use the FormValidate.php Class
***************************************/

//Imports required class file
require("FormValidate.php");

//instantiates object
$validateForm = new FormValidate();

//variables to use
$first_name = ""; //$_POST['first_name'];  //Passed POST email variable from HTML FORM.  Note: $_GET[] can also be ussed;

//Checks for empty form field
if($validateForm->isEmpty($first_name))
   echo "empty field";
else
    echo "field contains information";
