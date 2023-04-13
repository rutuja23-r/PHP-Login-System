<?php

//If there is no constant defined 

if(!defined('__CONFIG__')) {
    exit('You do not have a config file');
} 

//Our config is below 
// Allow error 
error_reporting(-1) ;
ini_set('display_errors' ,'On') ;
// Include the DB.php  file ;


include_once 'classes/DB.php' ;
include_once 'classes/Filter.php' ;

 $con = DB::getConnection()  ; 
?>