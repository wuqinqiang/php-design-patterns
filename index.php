<?php

namespace Remember\Patterns\object\ocp;

use Remember\Patterns\object\Di;
use Remember\Patterns\object\patterns\Adapter\Ebook;
use Remember\Patterns\object\patterns\Adapter\Kindle;
use Remember\Patterns\object\patterns\Builder\Director;
use Remember\Patterns\object\patterns\Builder\TruckBuilder;
use Remember\Patterns\object\patterns\Decorator\JSonRender;
use Remember\Patterns\object\patterns\Decorator\Test2\Dressing;
use Remember\Patterns\object\patterns\Decorator\Test2\Espresso;
use Remember\Patterns\object\patterns\Decorator\Test2\Mocha;
use Remember\Patterns\object\patterns\Decorator\Test2\Whip;
use Remember\Patterns\object\patterns\Decorator\WebService;
use Remember\Patterns\object\patterns\Decorator\XmlRender;
use Remember\Patterns\object\patterns\Facade\Event;
use Remember\Patterns\object\patterns\Facade\UserCourse;
use Remember\Patterns\object\patterns\Facade\WeChatMessage;
use Remember\Patterns\object\patterns\Fly\Test;
use Remember\Patterns\object\patterns\Observer\OrderServer;
use Remember\Patterns\object\patterns\Observer\SmsService;
use Remember\Patterns\object\patterns\Observer\WechatService;
use Remember\Patterns\object\patterns\Proxy\RecordProxy;
use Remember\Patterns\object\patterns\Singleton1;
use Remember\Patterns\object\reflection\Circle;

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

//$decor=new WebService('wuqinqiang');
//
//$serviceXlm=new XmlRender($decor);
//$serviceJson=new JSonRender($decor);
//
//var_dump($serviceJson->renderDate());

//适配器
//$kind=new Kindle();
//
//$Ebook=new Ebook($kind);
//
//var_dump($Ebook->getPage());
//var_dump($Ebook->open());
//var_dump($Ebook->turnPage());

//门面
//$wechat=new WeChatMessage();
//$userCourse=new UserCourse();
//$event=new Event($wechat,$userCourse);
//$event->buyCourseHandle('wuqinqiang');

//享元
//$test=new Test();
//
//$test->test();

//观察者

//$order = new OrderServer();
//
//$order->registerObserver(new WechatService());
//$order->registerObserver(new SmsService());
////下单了 我要通知一直盯着我的人
//$order->notice();

//装饰者2
//$espresso=new Espresso();
//
//$dress=new Dressing($espresso);
//
//$whip=new Whip($dress);
//$whip=new Whip($whip);
//
//
//$Mocha=new Mocha($whip);
//
//
//var_dump($Mocha->cost());

//装饰者3


//反射
$test = new \Remember\Patterns\object\reflection\Test();
$circle = $test->make(Circle::class);
var_dump($circle,$circle->area());









