<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityRateMaster extends Model
{
    use HasFactory;
    protected $table = _ACTIVITY_RATE_MASTER_;
    protected $primarykey = 'id';
    protected $fillable = [
        'ClientId',
        'ActivityId',
        'SupplierName',
        'ValidFrom',
        'ValidTo',
        'Currency',
        'Activity',
        'PaxRange',
        'TotalCost',
        'PerPaxCost',
        'TaxSlab',
        'Remarks',
        'Status',
        'JsonItem',
        'Destination', 
        'AddedBy', 
        'UpdatedBy', 
        'created_at', 
        'updated_at',
    ];
}
