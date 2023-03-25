<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
 use HasFactory;
    protected $table = 'clients';
    protected $fillable = ['customer_first_name', 'customer_last_name', 'customer_email', 'customer_subject', 'customer_message'];
}
