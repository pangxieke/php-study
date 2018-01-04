<?php
abstract class sms
{
    protected $text = '[xx公司]你好，你的验证码是';

    abstract public function sendSms($mobile = 0);

    public function makeText()
    {
        $this->text .= rand(0000, 9999);
    }

    final function send($mobile = 0)
    {
        $this->makeText();
        $this->sendSms($mobile);
    }
}