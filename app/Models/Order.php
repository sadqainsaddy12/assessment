<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name','payment_id'];



public function payment()
{
    return $this->hasOne(Payment::class,'id','payment_id');
}


}
