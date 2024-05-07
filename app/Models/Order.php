<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Order extends Model

{
    protected $guarded =[];
    use HasFactory;
    const STATUS_PENDING = 0;
const STATUS_COMPLETED = 1;
const STATUS_REJECTED = 2;
    public function getStatusAttribute($value)
{
    switch ($value) {
        case self::STATUS_PENDING:
            return 'pending';
        case self::STATUS_COMPLETED:
            return 'completed';
        case self::STATUS_REJECTED:
            return 'rejected';
        default:
            return 'unknown';
    }
}
}
