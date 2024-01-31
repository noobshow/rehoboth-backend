<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

// class CoreSignal
// {

//     /**
//      * Asset
//      * @var string
//      */
//     public $asset;

//     /**
//      * Range Signal
//      * @var string
//      */
//     public $range;

//     /**
//      * Fundamental Signal
//      * @var string
//      */
//     public $fundamental;

//     /**
//      * Technical Signal
//      * @var string
//      */
//     public $technical;

//     /**
//      * Sentiment Signal
//      * @var string
//      */
//     public $sentiment;

//     /**
//      * Strategy Signal
//      * @var string
//      */
//     public $strategy;

//     /**
//      * Volatility Signal
//      * @var string
//      */
//     public $volt;
//     //colors

//     /**
//      * Range Signal Color
//      * @var string
//      */
//     public $asset_clr;

//     /**
//      * Fundamental Signal Color
//      * @var string
//      */
//     public $fundamental_clr;

//     /**
//      * Technical Signal Color
//      * @var string
//      */
//     public $technical_clr;

//     /**
//      * Sentiment Signal Color
//      * @var string
//      */
//     public $sentiment_clr;

//     /**
//      * Strategy Signal Color
//      * @var string
//      */
//     public $strategy_clr;

//     /**
//      * Volatility Signal Color
//      * @var string
//      */
//     public $volt_clr;
// }

// class NewsDataSignal
// {

//     /**
//      * Time
//      * @var string
//      */
//     public $time;

//     /**
//      * Pair
//      * @var string
//      */
//     public $pair;

//     /**
//      * Event
//      * @var string
//      */
//     public $event;

//     /**
//      * Actual
//      * @var string
//      */
//     public $actual;

//     /**
//      * Forecast
//      * @var string
//      */
//     public $forecast;

//     /**
//      * Previous
//      * @var string
//      */
//     public $previous;
// }

// class CDLSignal
// {
//     public string $cdl;
//     public string $bias;
// }

// class TradeBlotterSignal
// {

//     public string $asset;

//     public string $time;

//     public string $size;

//     public string $price;

//     public string $sl;

//     public string $tp;

//     public string $pl;
//     //colors

//     public string $size_clr;

//     public string $pl_clr;
// }

class OptimusSignalUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct(
        /**
         * array of OptimusPro signals
         * @var \App\Models\OptimusSignal[]
         */
        public array $signals,
    ) {
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('optimus-pro.signals'),
        ];
    }

    /**
     * The event's broadcast name.
     */
    public function broadcastAs(): string
    {
        return 'OptimusSignalUpdated';
    }
}
