<?php

namespace app\library;

use app\interfaces\NotificationInterface;

class FacebookNotificationAdapter implements NotificationInterface
{
	public function __construct(private FacebookNotification $notification)
	{
	}

	public function send()
	{
		$this->notification->sendWithfacebook();
	}
}
