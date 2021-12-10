<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $primaryKey = 'type_id';

    protected $table = 'm_type';

    public function salesdetail()
    {
        return $this->hasMany(SalesDetail::class, 'type_id', 'type_id');
    }

    public funtion cluster()
    {
    	return $this->belongsTo(Type::class, 'cluster_id', 'cluster_id');
    }
}
