<?php
switch($_SERVER["HTTP_HOST"]){
	case "localhost":
       define('ENVIRONMENT', 'development');
       $pathValue = 'http://localhost';
    break;
    case "test.com":
        define('ENVIRONMENT', 'test');
        $pathValue = 'http://test.com';
    break;
    case "example.com":
        define('ENVIRONMENT', 'example');
        $pathValue = 'http://example.com';
    break;
    case "dev-report.intermesh.net:8080":
        define('ENVIRONMENT','dev');
        $pathValue = 'http://dev-report.intermesh.net';
    break;
    case "dev-report.intermesh.net:8080":
        define('ENVIRONMENT','dev');
        $pathValue = 'https://dev-report.intermesh.net';
    break;
    case "dev-report.intermesh.net":
        define('ENVIRONMENT','dev');
        $pathValue = 'http://dev-report.intermesh.net';
    break;
	default:
       define('ENVIRONMENT', 'production');
       $pathValue = 'https://report.intermesh.net';
	break;
	}
   
    // echo ENVIRONMENT ;
    // echo $pathValue;
 


  //client ID -- 
// 64436141311-95ltn246r19d1d85nhpae7di55frd1rd.apps.googleusercontent.com
// Cleint Secret -- 
// Z69Iak1fotx2vCZDKDuQsMaD  

?>  
