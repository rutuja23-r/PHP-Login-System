<?php  
// Allow the config
define('__CONFIG__', true);
	// Require the config
	require_once "../inc/config.php";
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Always return JSON format
         header('Content-Type: application/json') ; 
         $return = [] ;
            
            // Make sure the user does not exist .
            // Make sure the user Can be added  AND is added
            // Return the proper information back to javascript  to redirect as

       //  $return['redirect'] = 'dashboard.php' ;

        $return['name'] = "kalob Taulien" ;

          echo  json_encode($return , JSON_PRETTY_PRINT);  
        } 
    else {
        //Die 
        exit('test') ;

    
}
?>
