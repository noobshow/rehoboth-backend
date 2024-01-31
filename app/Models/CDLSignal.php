<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDLSignal extends Model
{
    use HasFactory;

    protected $table = "c_d_l_signals";
    
    protected $fillable = [
        'cdl',
        'bias',
        'cdl_clr',
        'bias_clr',
    ];
}
