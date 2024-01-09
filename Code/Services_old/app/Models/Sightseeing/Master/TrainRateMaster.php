<?php

namespace App\Models\Sightseeing\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainRateMaster extends Model
{
    use HasFactory;
    protected $table = _TRAIN_RATE_MASTER_;
    protected $primarykey = 'id'; 
    protected $fillable = [
        'TrainNumber',
        'JourneyType',
        'TrainClasses',
        'Currency',
        'AdultCost',
        'childCost',
        'InfantCost',
        'Remarks',
        'AddedBy',
        'UpdatedBy',
        'created_at',
        'updated_at'     
    ];
}
