<?php

namespace App\Http\Service;

use App\Models\Notification;

class EmailNotificationSender extends INotificationSender
{
    public const TYPE_NOTIFY = 'email';
}
