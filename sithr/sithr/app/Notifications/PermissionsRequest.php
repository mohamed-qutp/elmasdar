<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PermissionsRequest extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['database'];
        // return ['sms'];
        // return ['mail'];
    }

    public function toDatabase()
    {
        return [
            'id' => '2',
            'user_id' => '6',
            'type' => 'اذن صباحي',
        ];
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
