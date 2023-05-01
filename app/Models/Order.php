<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ["user_id","company_id","name","surname", "email", "number_phone", "country" ,"town", "address_physique", "address_livraison" ,"company_id" ,"affecter"];

    public function order_details(){
        return $this->hasMany(OrderDetails::class);
    }

    public function company(){
        return $this->belongsTo(Company::class,'company_id');
    }
}
