<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['name','ratio'];

public function order()
{
    return $this->belongsTo(Order::class);
}


}
