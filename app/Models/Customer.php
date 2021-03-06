<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $primaryKey = 'customer_id';

    protected $table = 'm_customer';

    public function sales()
    {
        return $this->hasOne(Sales::class, 'customer_id', 'customer_id');
    }
}
