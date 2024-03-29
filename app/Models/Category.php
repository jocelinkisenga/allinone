<?php

namespace App\Models;

use GuzzleHttp\Handler\Proxy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable  = ['company_id','name'];

    public function compagny(){
        return $this->belongsTo(Company::class,'company_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
