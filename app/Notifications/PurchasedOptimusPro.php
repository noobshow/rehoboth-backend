<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PurchasedOptimusPro extends Notification
{
    use Queueable;

    /**
     * Subscription timeframe
     * 
     * @var string
     */
    public string $timeframe;

    /**
     * Subscription amount
     * 
     * @var string
     */
    public string $amount;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $timeframe, string $amount)
    {
        $this->timeframe = $timeframe;
        $this->amount = $amount;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
        ->line('Your account has been successfully activated with '. $this->timeframe. ' of access to OptimusPro.')
        ->line('You can have access to subscribed features by logging in to your account. at '. route('dashboard'))
        ->line('You can also access OptimusPro by clicking the button below.')
        ->action('Access OptimusPro', route('optimus-pro'))
        ->line('You were charged '. $this->amount. ' for this subscription.')
        ->line('Your subscription will be automatically renewed after '. $this->timeframe. '.')
        ->line('You can cancel your subscription at any time from your account settings or by contacting us.')
        ->line('Thank you for using Rehoboth Traders.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
