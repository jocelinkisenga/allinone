<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','description','image','status','address','contact'];

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
