<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['company_id','name','price','total_quantity','image'];

    public function categorie(){
        return $this->belongsTo(Category::class);
    }
}
