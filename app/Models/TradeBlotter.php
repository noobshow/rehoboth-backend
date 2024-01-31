<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TradeBlotter extends Model
{
    use HasFactory;

    // protected $table = "trade_blotters";

    protected $fillable = [
        'id',
        'asset',
        'time',
        'size',
        'price',
        'sl',
        'tp',
        'pl',
        //colors
        'size_clr',
        'pl_clr',
    ];
}
