<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TraceApi extends Model
{

    protected $fillable = [
        'ip',  'operator',   'status' , 'user_id' ,
    ];


    public function user()
    {
        return $this->belongsTo(User::class );
    }




}
