<?php
/*****************************************************
** File Name:        FormValidate.php 
**
** Author:           Armando Padilla
**			         personal site - http://www.armando.ws
**
** Description:      PHP class.  Contains methods to assist 
**  		         with validating HTML FORM Fields.
**				
** Recommened Files: ValidateEmail.php, ValidatePhone.php,
**					 ValidateSSN.php
*******************************************************/

class FormValidate
{

	/*********************************************
	** Default Constructor
	**********************************************/
	function FormValidate(){}
	
	/**********************************************
	** Checks for empty passed variables/form fields
	**********************************************/
	function isEmpty($str){
		$str = $str;
		if(strlen(trim($str)) == 0 || empty($str))
			return TRUE; 
		else 
			return FALSE; 
	}//End function: isBlank($str)
	
}//End of class: FormValidate()
