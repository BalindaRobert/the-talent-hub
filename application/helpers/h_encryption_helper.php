<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('h_encrypt_decrypt'))
{
//function to encrypt and decrypt data like url ids account name codes etc
	function h_encrypt_decrypt($string,$action = false)
	{

	    $output = $string;

	    $encrypt_method = "AES-256-CBC";
	    //pls set your unique hashing key
	    $secret_key = 'hass';
	    $secret_iv = 'mtraby1';

	    // hash
	    $key = hash('sha256', $secret_key);

	    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);


	    if( $action == 'decrypt' )
	    {
	    	//decrypt the given text/string/number
	        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	    }
	    else
	    {
	    	//do the encyption given text/string/number
	        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	        $output = base64_encode($output);  	
	    }

    	return $output;
	}
	}
?>