<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;

    protected $primaryKey = 'cluster_id';

    protected $table = 'm_cluster';

    public function salesdetail()
    {
        return $this->hasMany(SalesDetail::class, 'cluster_id', 'cluster_id');
    }

    public function type()
    {
    	return $this->hasMany(Type::class, 'cluster_id', 'cluster_id');
    }
}
