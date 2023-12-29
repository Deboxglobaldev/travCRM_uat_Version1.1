<?php

namespace App\Models\Sightseeing\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AirRateMaster extends Model
{
    use HasFactory;
    protected $table = _AIR_RATE_MASTER_;
    protected $primarykey = 'id'; 
    protected $fillable = [
        'FlightNumber',
        'FlightType',
        'Currency',
        'AdultCost',
        'TotalCost',
        'childCost',
        'chil',
        'Status',
        'AddedBy',
        'UpdatedBy',
        'created_at',
        'updated_at'   
    ];
}
