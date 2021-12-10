<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'salesdetail_id';

    protected $table = 'th_salesdetail';

    public function sales()
    {
        return $this->belongsTo(Sales::class, 'sales_id', 'sales_id');
    }

    public funtion cluster()
    {
    	return $this->belongsTo(Cluster::class, 'cluster_id', 'cluster_id');
    }

    public funtion type()
    {
    	return $this->belongsTo(Cluster::class, 'type_id', 'type_id');
    }
}
