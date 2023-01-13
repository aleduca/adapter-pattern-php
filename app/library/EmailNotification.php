<?php

namespace app\library;

use app\interfaces\NotificationInterface;

class EmailNotification implements NotificationInterface
{
	public function send()
	{
		var_dump('send with email');
	}
}
