<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorycontentdomain extends Model
{


    protected $fillable = [
        'name',
    ];


    public function contentDomains(){
        return $this->hasMany(ContentDomain::class , 'categorycontentdomain_id');
    }


}
