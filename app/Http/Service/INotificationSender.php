<?php

namespace App\Http\Service;

use App\Models\Notification;

abstract class INotificationSender{

    public const TYPE_NOTIFY = '';
    public function sendNotify(string $message): void
    {
        // Implementation of the send metho
        try{
            $notification = new Notification();
            $notification->type = static::TYPE_NOTIFY;
            $notification->message = $message;
            $notification->save();
        } catch (\Exception $e) {
            // Handle the exception, log it, or rethrow it
            throw new \RuntimeException("Failed to send notification: " . $e->getMessage());
        }
    }
}
