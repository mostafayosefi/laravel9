<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentDomain extends Model
{
    protected $table = 'content-domains';


    protected $fillable = [
        'name',
        'text',
        'status',
        'image',
        'link',
        'price',
        'extension',
        'categorycontentdomain_id',
    ];



    public function categorycontentdomain(){
        return $this->belongsTo(Categorycontentdomain::class);
    }


}
