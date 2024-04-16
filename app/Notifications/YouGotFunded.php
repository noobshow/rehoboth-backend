<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class YouGotFunded extends Notification
{
    use Queueable;

    /**
     * Amount to be funded
     *
     * @var string
     */
    public string $amount;

    /**
     * Account Level
     * 
     * @var string
     */
    public string $level;

    /**
     * MT5 Account Login
     */
    public string $login;

    /**
     * MT5 Account Password
     */
    public string $password;

    /**
     * MT5 Account Server
     */
    public string $server;


    /**
     * Create a new notification instance.
     */
    public function __construct(string $amount, string $level, string $login, string $password, string $server)
    {
        $this->password = $password;
        $this->amount = $amount;
        $this->server = $server;
        $this->login = $login;
        $this->level = $level;
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
            ->from('get-funded@rehobothtraders.com', 'Rehoboth Traders Get Funded') //TODO change to the correct email
            ->replyTo('contact@rehobothtraders.com', 'Rehoboth Traders')
            ->subject($notifiable->name . ', You just Got Funded!')
            ->greeting('Hello ' . $notifiable->name . '!')
            ->line('Your request to get funded has been processed.')
            ->line('We are happy to welcome you into our team of successful and amazing traders.')
            ->line("Earlier, you have been activated with OptimusPro access, the digital panel of success")
            ->line('Now, we are happy to inform you that your trading account has been activated and funded with $' . $this->amount . '.')
            ->action('Visit your Accounts page to learn more', route('get-funded'))
            ->line('You can copy your trading account details and also download the trading terminal from your Accounts page.')
            ->line('Here are your login details for reference')
            ->line('MT5 Login:')
            ->line($this->login)
            ->line('MT5 Server:')
            ->line($this->server)
            ->line('MT5 Password:')
            ->line("Available in your Accounts Page.")
            ->line("Account is at the " . $this->level . " level.")
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
