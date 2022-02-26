<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Domain extends Model
{

    use SoftDeletes;

    protected $fillable = [
        'domain',
        'price',
        'status',
        'riyal',
        'user_id',
        'contact_id',
    ];


    public function contact(){
        return $this->belongsTo(Contact::class  , 'contact_id' , 'id');
    }

    public function user(){
        return $this->belongsTo(User::class  , 'user_id' , 'id');
    }

    public function nameserver(){
        return $this->hasOne(Nameserver::class , 'id');
    }



}
