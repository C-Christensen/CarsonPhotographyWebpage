<?php
//config.php

include 'credentials.php';

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//helps prevent date errors
date_default_timezone_set('America/Los_Angeles');


$title = THIS_PAGE;
$logo = 'jim-photography-logo.png';
switch(THIS_PAGE){
        
    case 'index.php':
        $title = 'JIM CARSON PHOTOGRAPHY';
    break;
        
    case 'about.php':
        $title = 'ABOUT JIM CARSON PHOTOGRAPHY';
        $heading2 = 'ABOUT ME';
    break;
    
    case 'pricing.php':
        $title = 'GET YOUR QUOTE WITH US TODAY - JIM CARSON PHOTOGRAPHY';
        $heading2 = 'PRICE';
    break;
        
    case 'contact.php':
        $title = 'CONTACT JIM CARSON PHOTOGRAPHY';
        $heading2 = 'CONTACT ME';

    break;
}

//place URL & labels in the array here for navigation:
$nav1['index.php'] = "Home |";
$nav1['about.php'] = "About |";
$nav1['pricing.php'] = "Pricing |";
$nav1['contact.php'] = "Contact |";



/*
makeLinks function will create our dynamic nav when called.
Call like this:
echo makeLinks($nav1); #in which $nav1 is an associative array of links
*/
function makeLinks($linkArray)
{
    $myReturn = '';

    foreach($linkArray as $url => $text)
    {
        if($url == THIS_PAGE)
        {//selected page - add class reference
	    	$myReturn .= '<li><a class="selected" href="' . $url . '">' . $text . '</a></li>' . PHP_EOL;
    	}else{
	    	$myReturn .= '<li><a href="' . $url . '">' . $text . '</a></li>'  . PHP_EOL;
    	}    
    }
      
    return $myReturn;    
}



?>