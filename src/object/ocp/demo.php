<?php

namespace Remember\Patterns\object\ocp;


$apiStatus = new ApiStatInfo();
$apiStatus=$apiStatus;
$apiStatus = $apiStatus->setTimeOut(20);
$apiStatus = $apiStatus->setRequestCount(100);

$app=new ApplicationHandle();
$app->init();

$app->check($apiStatus);

