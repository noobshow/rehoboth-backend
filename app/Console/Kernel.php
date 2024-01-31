<?php

namespace App\Console;

use App\Models\Settings;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Log;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $coreSignals = \App\Models\OptimusSignal::all();
            $newsDataSignals = \App\Models\NewsData::all();
            $cdlSignals = \App\Models\CDLSignal::all();
            $tradeBlotterSignals = \App\Models\TradeBlotter::all();

            // Log::info('OptimusSignalUpdated event firing');
            $cdlSignalsTime = Settings::where('name', 'cdlSignals')->first();
            $coreSignalsTime = Settings::where('name', 'coreSignals')->first();
            $newsDataSignalsTime = Settings::where('name', 'newsDataSignals')->first();
            $tradeBlotterSignalsTime = Settings::where('name', 'tradeBlotterSignals')->first();

            if ($cdlSignalsTime == null) {
                $cdlSignalsTime = new Settings();
                $cdlSignalsTime->name = 'cdlSignals';
                $cdlSignalsTime->value = now()->addMinutes(3);
                $cdlSignalsTime->save();
                // fire event
                event(new \App\Events\CDLSignalUpdated(
                    $cdlSignals->toArray()
                ));
                // Log::info('cdlSignals: ' . $cdlSignals->toJson());
            } else if ($cdlSignalsTime->value < now()) {
                $cdlSignalsTime->value = now()->addMinutes(3);
                $cdlSignalsTime->save();
                // fire event
                // Log::info('cdlSignals: ' . $cdlSignals->toJson());
                event(new \App\Events\CDLSignalUpdated(
                    $cdlSignals->toArray()
                ));
            }

            event(new \App\Events\OptimusSignalUpdated(
                    $coreSignals->toArray()
                ));

            if ($newsDataSignalsTime == null) {
                $newsDataSignalsTime = new Settings();
                $newsDataSignalsTime->name = 'newsDataSignals';
                $newsDataSignalsTime->value = now()->addMinutes(10);
                $newsDataSignalsTime->save();

                $result = [];
                $signals = $newsDataSignals->take(5);
                foreach ($signals as $item) {
                    $tmp = new \stdClass();
                    $tmp->time = $item->time->format('H:i');
                    $tmp->event = trim($item->event);
                    $tmp->impact = $item->impact;
                    $tmp->actual = $item->actual;
                    $tmp->forecast = $item->forecast;
                    $tmp->previous = $item->previous;
                    $result[] = $tmp;
                }
                // fire event
                event(new \App\Events\NewsDataUpdated(
                    $result
                ));
                // Log::info('newsDataSignals: ' . $newsDataSignals->toJson());
            } else if ($newsDataSignalsTime->value < now()) {
                $newsDataSignalsTime->value = now()->addMinutes(3);
                $newsDataSignalsTime->save();

                $result = [];
                $signals = $newsDataSignals->take(5);
                foreach ($signals as $item) {
                    $tmp = new \stdClass();
                    $tmp->time = $item->time->format('H:i');
                    $tmp->event = trim($item->event);
                    $tmp->impact = $item->impact;
                    $tmp->actual = $item->actual;
                    $tmp->forecast = $item->forecast;
                    $tmp->previous = $item->previous;
                    $result[] = $tmp;
                }

                // Log::info('newsDataSignals: ' . $newsDataSignals->toJson());
                event(new \App\Events\NewsDataUpdated(
                    $result
                ));
            }

            // if ($tradeBlotterSignalsTime == null) {
            //     $tradeBlotterSignalsTime = new Settings();
            //     $tradeBlotterSignalsTime->name = 'tradeBlotterSignals';
            //     $tradeBlotterSignalsTime->value = now()->addMinutes(1);
            //     $tradeBlotterSignalsTime->save();
                // fire event
                event(new \App\Events\TradeBlotterUpdated(
                    $tradeBlotterSignals->toArray()
                ));
                // Log::info('tradeBlotterSignals: ' . $tradeBlotterSignals->toJson());
            // } else if ($tradeBlotterSignalsTime->value < now()) {
            //     $tradeBlotterSignalsTime->value = now()->addMinutes(1);
            //     $tradeBlotterSignalsTime->save();
            //     // fire event
            //     // Log::info('tradeBlotterSignals: ' . $tradeBlotterSignals->toJson());
            //     event(new \App\Events\TradeBlotterUpdated(
            //         $tradeBlotterSignals->toArray()
            //     ));
            // }

            // Log::info('OptimusSignalUpdated event fired');
        })->everyThirtySeconds();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__ . '/Commands');

        require base_path('routes/console.php');
    }
}
