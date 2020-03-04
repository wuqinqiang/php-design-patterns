<?php

namespace Remember\Patterns\object\ocp;

use Remember\Patterns\object\Di;
use Remember\Patterns\object\patterns\Singleton1;

require_once __DIR__ . '/vendor/autoload.php';


//$apiStatus = new ApiStatInfo();
////$apiStatus=$apiStatus;
//$apiStatus = $apiStatus->setTimeOut(20);
//$apiStatus = $apiStatus->setRequestCount(100);
//
//$app = new ApplicationHandle();
//$app->init();
//
//$app->check($apiStatus);
//
//$message = new Di\EmailMessage();
//
//$notice = new Di\Notification($message);
//$notice->notification();

$sign = Singleton1::getInstance(1, 2);
var_dump($sign);






