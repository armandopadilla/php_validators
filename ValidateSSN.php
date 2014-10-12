<?php
/*****************************************************
** File Name:        ValidateSSN.php 
**
** Author:           Armando Padilla
**			         personal site - http://www.armando.ws
**
** Description:      PHP class.  Checks and formats United States Social 
**					 Security Number (000-00-0000).
**				
** Recommened Files: FormValidate.php, ValidateEmail.php, 
**				     ValidatePhone.php,
*******************************************************/

class ValidateSSN
{

	/*********************************************
	** Default Constructor
	**********************************************/
	function ValidateSSN(){}
	
	/**********************************************
	** Checks that entered SSN is properly formated 
	** 000-00-0000
	**********************************************/
	function isSSN($str){
		$SSN=trim($str);
		if(ereg("^[0-9]{3}-[0-9]{2}-[0-9]{4}$", $SSN)) //looks for formated SSN string
			return TRUE; //good SSN
		else
			return FALSE; //bad SSN
	}//End function: isSSN($str)
	
	
	/**********************************************
	** Format Entered SSN 
	** (United States Social Security Number Format)
	**********************************************/
	function formatSSN($str){
		$SSN = $str;
	
		$SSN = eregi_replace("([ ])+", "", $SSN);  //deletes any white spaces
		$SSN = str_replace("-", "", $SSN);		   //deletes any - from string
		
		//Checks that length is valid
		if(strlen($SSN) == 9){
		
			//Creates new SSN string
			$one   = substr($SSN,0,3);
			$two   = substr($SSN, -6, -4); 
			$three = substr($SSN, 5, 9); 
			
			$SSN = $one."-".$two."-".$three;
			return $SSN;
			
		}//End if 
		else {
			return FALSE;
		}//End else
	
	}//End function: formatSSN($str)
	
}//End class: ValidateSSN()