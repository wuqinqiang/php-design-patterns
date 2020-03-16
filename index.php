<?php

namespace Remember\Patterns\object\ocp;

use Remember\Patterns\object\Di;
use Remember\Patterns\object\patterns\Builder\Director;
use Remember\Patterns\object\patterns\Builder\TruckBuilder;
use Remember\Patterns\object\patterns\Decorator\JSonRender;
use Remember\Patterns\object\patterns\Decorator\WebService;
use Remember\Patterns\object\patterns\Decorator\XmlRender;
use Remember\Patterns\object\patterns\Proxy\RecordProxy;
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

//$sign = Singleton1::getInstance(1, 2);
//var_dump($sign);

//建造者模式

//$dir=new Director();
//$veh=$dir->build(new TruckBuilder());
//var_dump($veh);

//代理

//$data=[];
//$pro=new RecordProxy($data);
//
//$pro->name='wuqinqiang';
//
//var_dump($pro->name);
//var_dump($pro->isDirty());

//装饰者

$decor=new WebService('wuqinqiang');

$serviceXlm=new XmlRender($decor);
$serviceJson=new JSonRender($decor);

var_dump($serviceJson->renderDate());






