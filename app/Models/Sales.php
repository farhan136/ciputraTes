<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $primaryKey = 'sales_id';

    protected $table = 'th_sales';

    public function detail()
    {
        return $this->hasMany(SalesDetail::class, 'sales_id', 'sales_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id', 'customer_id');
    }
}
