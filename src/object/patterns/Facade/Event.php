<?php

namespace Remember\Patterns\object\patterns\Facade;

//用户购买极客课程后需要1执行通知用户购买成功2给用户书单里加上此课程
class Event
{
    protected $message;

    protected $userCourse;

    public function __construct(MessageInterface $message, UserCourse $course)
    {
        $this->message = $message;
        $this->userCourse = $course;
    }

    public function buyCourseHandle($username)
    {
        //通知用户
        $this->message->send($username);
        //加书
        $this->userCourse->addUserCourse($username);
    }

}