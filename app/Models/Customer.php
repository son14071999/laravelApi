<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $fillable = [
        'name_customer',
        'phone_customer',
        'email_customer',
        'address_customer',
        'city_customer',
    ];
    protected $primaryKey = 'id_customer';
}
