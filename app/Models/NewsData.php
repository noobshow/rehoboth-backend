<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsData extends Model
{
    use HasFactory;

    protected $table = "news_data";

    protected $fillable = [
        'time',
        'pair',
        'event',
        'impact', 
        'actual',
        'forecast',
        'previous',
    ];
    protected $casts = [
        'time' => 'datetime',
    ];

    protected $dateFormat = 'Y.m.d H:i';

    // public function setTimeAttribute( $value ) {        
    //     $this->attributes['time'] = \Carbon\Carbon::createFromFormat('Y.m.d H:i', $value);
    //   }
}
