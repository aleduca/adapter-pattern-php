<?php

namespace app\library;

use app\interfaces\NotificationInterface;

class SmsNotificationAdapter implements NotificationInterface
{

	public function __construct(private SmsNotification $smsNotification)
	{
	}

	public function send()
	{
		$this->smsNotification->sendWithSms();
	}
}
