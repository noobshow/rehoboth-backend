<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundedAccount extends Model
{
    use HasFactory;
    protected $table = 'funded_accounts';

    protected $fillable = [
        'level',
        'active',
        'user_id',
        'mt5_login',
        'mt5_server',
        'mt5_password',
        'funded_amount',
        'invoice_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
