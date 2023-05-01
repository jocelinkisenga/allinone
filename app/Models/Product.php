<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['company_id','name','price','total_quantity','image'];

    // public function categorie(){
    //     return $this->belongsTo(Category::class);
    // }

    public function company(){
        return $this->belongsTo(Company::class,'company_id');
    }

    public function orderDetails(){
        return $this->hasOne(OrderDetails::class);
    }
}
