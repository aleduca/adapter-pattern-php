<?php

namespace app\library;

use app\interfaces\NotificationInterface;

class Client
{
	public function send(NotificationInterface $notification)
	{
		$notification->send();
	}
}
