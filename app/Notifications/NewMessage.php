<?php

namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewMessage extends Notification
{
    use Queueable;

    public $contact;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)            
                    ->subject('وصلتك رسالة جديدة')
                    ->greeting('مرحباً سيد مصطفى')    
                    ->line('لديك رسالة جديدة من أحد زوار الموقع.')                
                    ->line('اسم المرسل: ')
                    ->line($this->contact->name)
                    ->line('ايميل المرسل: ')
                    ->line($this->contact->email)
                    ->line('عنوان الرسالة: ')
                    ->line($this->contact->subject)
                    ->line('نص الرسالة: ')
                    ->line($this->contact->message);
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
