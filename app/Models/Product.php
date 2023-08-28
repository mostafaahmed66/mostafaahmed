<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $table="my_products";
    use HasFactory;

   protected $primaryKey = 'product_id';
    protected $guarded=[];
    public $timestamps=false;
    function category()
    {
        return $this->belongsTo(category::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'product_user');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }

    

    

}
