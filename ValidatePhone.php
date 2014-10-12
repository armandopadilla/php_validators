<?php
/*****************************************************
** File Name:        ValidatePhone.php 
**
** Author:           Armando Padilla
**			         personal site - http://www.armando.ws
**
** Description:      PHP class.  Checks and formats United States Phone Number
**					 (000) 000-0000.
**				
** Recommened Files: FormValidate.php, ValidateEmail.php, 
**				     ValidateSSN.php,
*******************************************************/
class ValidatePhone
{

	/*********************************************
	** Default Constructor
	**********************************************/
	function ValidatePhone(){}
	
	/**********************************************
	** Checks that entered Phone Number is properly 
	** formated (000) 000-0000
	**********************************************/
	function isPhone($str){
		$Phone = $str;
		
		if(ereg("^\([0-9]{3}\) ([0-9]){3}-([0-9]){4}$", $Phone))
			return TRUE; //good Phone Number
		else
			return FALSE; //bad Phone Number
	}//End function: isPhone($str)
	

	/**********************************************
	** Format Entered Phone (000) 000-0000 
	** (United States Phone Numbers)
	**********************************************/
	function formatPhone($str){
		$Phone = $str;
		$Phone = eregi_replace("([ ])+", "", $Phone); //Deletes all white spaces in string
		
		$replace_array = array("(", ")", "-"); //Array of chacters to find and replace in string
		$Phone = str_replace($replace_array, "", $Phone); //new Phone information
		
		//If phone number enteed proper length then format
		if(strlen(trim($Phone)) == 10 ){
				$area_code  = substr($Phone,0,3);			//area code
				$suffix 	= substr($Phone, -7, -4); 		//suffix
				$preffix    = substr($Phone, 6, 9);			//preffix
				
				$Phone =  "(".$area_code.") "."".$suffix."-".$preffix;  //formated phone numer (000) 000-000
				
				return $Phone;		//returns formated phone number
				
		}//End if  
		else {
			return FALSE;
		}//End else

	}//End function: formatPhone($str)
	
}//End class ValidatePhone
