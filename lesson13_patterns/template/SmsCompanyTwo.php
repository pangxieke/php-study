<?php
class SmsCompanyTwo extends Sms
{
    public function sendSms($mobile = 0)
    {
        // 实现具体的短信发送方法
        echo "厂商 two 给手机号{$mobile}发送了短信：{$this->text} <br>";
    }
}