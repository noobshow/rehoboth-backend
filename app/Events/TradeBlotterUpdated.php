<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class TradeBlotterUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        // public string $asset,
        // public string $time,
        // public string $size,
        // public string $price,
        // public string $sl,
        // public string $tp,
        // public string $pl,
        // //colors
        // public string $size_clr,
        // public string $pl_clr,
        /**
         * array of TradeBlotter object
         * @var \App\Models\TradeBlotter[]
         */
        public array $signals,
    )
    {
        //
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('optimus-pro'),
        ];
    }
}
