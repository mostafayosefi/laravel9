<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{

    protected $fillable = [
        'renew_id',   'order_id',   'type', 'status', 'textUser', 'textAdmin', 'transfer_id' ,
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }


    public function renew()
    {
        return $this->belongsTo(Renew::class);
    }

    public function transfer()
    {
        return $this->belongsTo(Transfer::class);
    }

}
