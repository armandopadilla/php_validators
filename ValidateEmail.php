<?php
/*****************************************************
** File Name:        ValidateEmail.php 
**
** Author:           Armando Padilla
**			         personal site - http://www.armando.ws
**
** Description:      PHP class.  Checks and formats generic Email Address
**					 someaddy@somedomain.somecountry.someextension or
**					 someaddy@somedomain.someextension
**				
** Recommened Files: FormValidate.php, ValidateEmail.php, 
**				     ValidatePhone.php,
*******************************************************/

class ValidateEmail 
{
	/*********************************************
	** Default Constructor
	**********************************************/
	function ValidateEmail(){}

	/**********************************************
	** Checks that entered Email is properly formated.   
	** (something@something.com) OR 
	** something@somthing.any country.any extension
	**********************************************/
	function isEmail($str){
		$email = $str;
		//Checks that email is properly formated
		if(strlen(trim($email)) > 0){ 			
			if(ereg("^[a-z0-9\_.]+@([a-z0-9][a-z0-9-]*[a-z0-9]\.)+.([a-z]+\.)?.([a-z]+)$", $email))
				return TRUE;  //properly formated email
			else
				return FALSE; //not properly formated email
		}//End of if
		else
			return FALSE;
	}//End of function: validateEmail($str)
	
}//End class: ValidateEmail