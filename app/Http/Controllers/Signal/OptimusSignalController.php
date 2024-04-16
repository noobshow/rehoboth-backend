<?php

namespace App\Http\Controllers\Signal;

use App\Events\OptimusAlertUpdated;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TradeBlotter;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class OptimusSignalController extends Controller
{

    /**
     * Push Optimus Pro Signals
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function pushOptimusProSignals(Request $request)
    {
        $request->validate([
            'token' => 'required',
            // 'data' => 'required'
        ]);
        $token = $request->token;
        if ($token !== config('product.optimus_pro_token')) {
            return response()->json(['status' => false], 404);
        }
        // is data empty
        if (!$request->data) {
            $count = \App\Models\OptimusSignal::count();
            if ($count > 0) {
                \App\Models\OptimusSignal::truncate();
                // event(new OptimusSignalUpdated([]));
            }
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        // get array of OptimusData from request
        $optimus_data = json_decode($request->data)->main;
        // main exists
        if (!$optimus_data) {
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        // \Illuminate\Support\Facades\Log::info('optimus_data: '.json_encode($optimus_data));
        // loop through JSON array
        foreach ($optimus_data as $data) {
            //log 'strategy' if not empty
            if (strlen($data->strategy) > 0) {
                Log::info("Strategy: " . $data->strategy);
            }
            // update OptimusData model
            \App\Models\OptimusSignal::where('asset', $data->asset)->update([
                'range' => $data->range,
                'fundamental' => $data->fundamental,
                'technical' => $data->technical,
                'sentiment' => $data->sentiment,
                'strategy' => $data->strategy,
                'volt' => $data->volt,
                //colors
                'asset_clr' => $data->asset_clr,
                'fundamental_clr' => $data->fundamental_clr,
                'technical_clr' => $data->technical_clr,
                'sentiment_clr' => $data->sentiment_clr,
                'strategy_clr' => $data->strategy_clr,
                'volt_clr' => $data->volt_clr,
            ]);
            // event(new OptimusSignalUpdated(
            //     strtolower($data->asset),
            // ));
        }

        return response()->json(['status' => true, 'message' => 'Y'], 200);
    }

    /**
     * Push Optimus Pro CDL Signals
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function pushOptimusProCDLSignals(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'data' => 'required'
        ]);
        $token = $request->token;
        if ($token !== config('product.optimus_pro_token')) {
            return response()->json(['status' => false], 404);
        }
        // is data empty
        if (!$request->data) {
            $count = \App\Models\CDLSignal::count();
            if ($count > 0) {
                \App\Models\CDLSignal::truncate();
            }
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        // get array of OptimusData from request
        $optimus_data = json_decode($request->data)->cdl;
        // cdl exists
        if (!$optimus_data) {
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        //empty CDLSignal table
        \App\Models\CDLSignal::truncate();
        // loop through JSON array
        foreach ($optimus_data as $data) {
            // create new CDLSignal
            \App\Models\CDLSignal::create([
                'cdl' => $data->cdl,
                'bias' => $data->bias,
                //colors
                'cdl_clr' => $data->cdl_clr,
                'bias_clr' => $data->bias_clr,
            ]);
        }
        return response()->json(['status' => true, 'message' => 'Y'], 200);
    }

    /**
     * Push Optimus Pro News Calendar
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function pushOptimusProNewsDatas(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'data' => 'required'
        ]);
        $token = $request->token;
        if ($token !== config('product.optimus_pro_token')) {
            return response()->json(['status' => false], 404);
        }
        // is data empty
        if (!$request->data) {
            $count = \App\Models\NewsData::count();
            if ($count > 0) {
                \App\Models\NewsData::truncate();
            }
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        // prevent malformed UTF-8 characters, possibly incorrectly encoded error in json_decode
        $data = preg_replace('/[\x00-\x1F\x80-\xFF]/', '', $request->data);
        // mb_convert_encoding($data, 'UTF-8', 'UTF-8');
        // get array of OptimusData from request
        $optimus_data = json_decode($data);
        // news exists
        if (!$optimus_data) {
            \Illuminate\Support\Facades\Log::error('No news data: \r\n' . $data . json_last_error());
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        //empty NewsData table
        \App\Models\NewsData::truncate();
        // loop through JSON array
        foreach ($optimus_data as $data) {
            // create new NewsData
            \App\Models\NewsData::create([
                'time' => $data->t, //time
                'pair' => "", //$data->p,//pair
                'event' => $data->e, //event
                'actual' => $data->a, //actual
                'forecast' => $data->f, //forecast
                'previous' => $data->p, //previous
            ]);
        }
        return response()->json(['status' => true, 'message' => 'Y'], 200);
    }

    /**
     * Push Optimus Pro Trade Blotter
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function pushOptimusProTradeBlotters(Request $request)
    {
        $request->validate([
            'token' => 'required',
            // 'data' => 'required'
        ]);
        $token = $request->token;
        if ($token !== config('product.optimus_pro_token')) {
            return response()->json(['status' => false], 404);
        }
        // is data empty
        if (!$request->data) {
            $count = TradeBlotter::count();
            if ($count > 0) {
                TradeBlotter::truncate();
            }
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        // get array of OptimusData from request
        $optimus_data = json_decode($request->data)->trade_blotter;
        // tradeblotter exists
        if (!$optimus_data) {
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        //empty TradeBlotter table
        \App\Models\TradeBlotter::truncate();
        // loop through JSON array
        foreach ($optimus_data as $data) {
            // skip if asset is empty
            if (!$data->asset) {
                continue;
            }
            $pl = doubleval($data->pl);
            // $data->pl = -1.00, 0.00, 1.00. Convert to double
            $data->pl_clr = $pl < 0 ? 'red' : ($pl > 0 ? 'green' : 'black');
            // convert string Sell(1) | Buy(1) to Sell x1 | Buy x1
            $data->size = str_replace(['(', ')'], [' x', ''], $data->size);
            // create new TradeBlotter
            \App\Models\TradeBlotter::create([
                'asset' => $data->asset,
                'time' => $data->time,
                'size' => $data->size,
                'price' => $data->price,
                'sl' => $data->sl,
                'tp' => $data->tp,
                'pl' => $data->pl,
                //colors
                'size_clr' => $data->size_clr,
                'pl_clr' => $data->pl_clr,
            ]);
        }
        return response()->json(['status' => true, 'message' => 'Y'], 200);
    }

    /**
     * 
     * Push Optimus Pro Total Pips
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function pushOptimusProTotalPips(Request $request)
    {
        $request->validate([
            'token' => 'required',
            // 'data' => 'required'
        ]);
        $token = $request->token;
        if ($token !== config('product.optimus_pro_token')) {
            return response()->json(['status' => false], 404);
        }
        // get array of OptimusData from request
        $total_pips = json_decode($request->data)->total_pips;
        // tradeblotter exists
        if (!$total_pips) {
            return response()->json(['status' => false, 'message' => ''], 200);
        }

        // Storing the value
        Cache::forever('total_pips', $total_pips);
        return response()->json(['status' => true, 'message' => 'Y'], 200);
    }

    /**
     * Push Optimus Pro Alert
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function pushOptimusProAlerts(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'alert' => 'required',
        ]);
        $token = $request->token;
        if ($token !== config('product.optimus_pro_token')) {
            return response()->json(['status' => false], 404);
        }
        $alert = $request->alert;
        Cache::put("optimus-mover-alert", $alert, now()->addMinutes(2));
        // trigger event
        event(new OptimusAlertUpdated($alert));
        return response()->json(['status' => true], 200);
    }

    /**
     * Push Optimus Pro Trade Blotter - backup
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JSONResponse
     */
    public function pushOptimusProTradeBlottersv2_backup(Request $request)
    {
        $request->validate([
            'token' => 'required',
        ]);
        $token = $request->token;
        if ($token !== config('product.optimus_pro_token')) {
            return response()->json(['status' => false], 404);
        }
        // is data empty
        if (!$request->data) {
            $count = TradeBlotter::count();
            if ($count > 0) {
                TradeBlotter::truncate();
                // event(new TradeBlotterUpdated([]));
            }
            return response()->json(['status' => false, 'message' => ''], 200);
        }
        // get array of OptimusData from request
        $optimus_data = json_decode($request->data)->trade_blotter;
        // tradeblotter exists
        if (!$optimus_data) {
            return response()->json(['status' => false, 'message' => ''], 200);
        }

        $changed = false;
        // loop through JSON array
        foreach ($optimus_data as $data) {
            $pl = doubleval($data->pl);
            // $data->pl = -1.00, 0.00, 1.00. Convert to double
            $data->pl_clr = $pl < 0 ? 'red' : ($pl > 0 ? 'green' : 'black');
            // convert string Sell(1) | Buy(1) to Sell x1 | Buy x1
            $data->size = str_replace(['(', ')'], [' x', ''], $data->size);

            // if $data->id exists in the model, update TradeBlotter
            $trade_blotter = TradeBlotter::where('id', $data->id)->first();
            //compare $trade_blotter and $data
            if ($trade_blotter) {
                if (
                    $trade_blotter->asset !== $data->asset ||
                    $trade_blotter->time !== $data->time ||
                    $trade_blotter->size !== $data->size ||
                    $trade_blotter->price !== $data->price ||
                    $trade_blotter->sl !== $data->sl ||
                    $trade_blotter->tp !== $data->tp ||
                    $trade_blotter->pl !== $data->pl ||
                    $trade_blotter->size_clr !== $data->size_clr ||
                    $trade_blotter->pl_clr !== $data->pl_clr
                ) {
                    TradeBlotter::where('ticket', $data->id)->update([
                        'asset' => $data->asset,
                        'time' => $data->time,
                        'size' => $data->size,
                        'price' => $data->price,
                        'sl' => $data->sl,
                        'tp' => $data->tp,
                        'pl' => $data->pl,
                        //colors
                        'size_clr' => $data->size_clr,
                        'pl_clr' => $data->pl_clr,
                    ]);
                    $changed = true;
                    continue;
                }
            } else {
                // if $data->id does not exist in the model, create new TradeBlotter
                // create new TradeBlotter
                TradeBlotter::create([
                    'ticket' => $data->id,
                    'asset' => $data->asset,
                    'time' => $data->time,
                    'size' => $data->size,
                    'price' => $data->price,
                    'sl' => $data->sl,
                    'tp' => $data->tp,
                    'pl' => $data->pl,
                    //colors
                    'size_clr' => $data->size_clr,
                    'pl_clr' => $data->pl_clr,
                ]);
                $changed = true;
            }
        }
        // remove TradeBlotter(s) that are not in the $optimus_data based on its id
        $trade_blotters = TradeBlotter::all();
        foreach ($trade_blotters as $trade_blotter) {
            $found = false;
            foreach ($optimus_data as $data) {
                if ($trade_blotter->ticket === $data->id) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                TradeBlotter::where('ticket', $trade_blotter->ticket)->delete();
                $changed = true;
            }
        }

        if ($changed) {
            // event(new TradeBlotterUpdated(TradeBlotter::all()->toArray()));
        }
        return response()->json(['status' => true, 'message' => 'Y'], 200);
    }
}
