<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nameserver extends Model
{


    protected $fillable = [
        'newhost',
        'currenthost',
        'ip1',
        'ip2',
        'ip3',
        'domain_id',
    ];


    public function domain(){
        return $this->belongsTo(Domain::class  , 'domain_id' , 'id');
    }

}
