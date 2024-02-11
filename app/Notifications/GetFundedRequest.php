<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class GetFundedRequest extends Notification
{
    use Queueable;

    /**
    * Amount to be funded
    *
    * @var string
    */
    public string $amount;

    /**
     * One-time fee
     * 
     * @var string
     */
    public string $fee;

    /**
     * Create a new notification instance.
     */
    public function __construct(string $amount, string $fee)
    {
        $this->amount = $amount;
        $this->fee = $fee;
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
                    ->from('get-funded@rehobothtraders.com', 'Rehoboth Traders Get Funded')//TODO change to the correct email
                    ->replyTo('contact@rehobothtraders.com', 'Rehoboth Traders')
                    ->subject('Processing Your Request to Get Funded')
                    ->greeting('Hello ' . $notifiable->name . '!')
                    ->line('Your request to get funded has been received and is being processed.')
                    ->line('You will be notified once your account is funded.')
                    ->line('Your account has been activated with free access to OptimusPro for as long as your account is actively funded.')
                    ->action('Access OptimusPro Here', route('optimus-pro'))
                    ->line('You were charged a one-time fee of ' . $this->fee . ' USD(or equivalent in your currency).')
                    ->line('The amount to be funded is $' . $this->amount . '.')
                    ->line('Please note that you may be required to provide additional information before your account is funded.')
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
