<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptimusSignal extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'asset',
        'range',
        'fundamental',
        'technical',
        'sentiment',
        'strategy',
        'volt',
        //colors
        'asset_clr',
        'fundamental_clr',
        'technical_clr',
        'sentiment_clr',
        'strategy_clr',
        'volt_clr',
    ];
}


