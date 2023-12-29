<?php

namespace App\Models\Sightseeing\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonumentRateMaster extends Model
{
    use HasFactory;
    protected $table = _MONUMENT_RATE_MASTER_;
    protected $primarykey = 'id'; 
    protected $fillable = [
        'SupplierName',
        'Nationality',
        'TraficType',
        'RateValidFrom',
        'RateValidTo',
        'TransferType',
        'Currency',
        'AdultTicketCost',
        'ChildTicketCost',
        'InfantTicketCost',
        'MarkupType',
        'MarkupCost',
        'TaxSlab',
        'Policy',
        'TAC',
        'Remark',
        'Status',
        'AddedBy',
        'UpdatedBy',
        'created_at',
        'updated_at'   
    ];
}
