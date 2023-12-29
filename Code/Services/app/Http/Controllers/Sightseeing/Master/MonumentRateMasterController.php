<?php

namespace App\Http\Controllers\Sightseeing\Master;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Sightseeing\Master\MonumentRateMaster;

class MonumentRateMasterController extends Controller
{
    public function index(Request $request){
        $arrayDataRows = array();

        call_logger('REQUEST COMES FROM HOTEL RATE LIST: '.$request->getContent());

        $Search = $request->input('Search');
        $Status = $request->input('Status');

        $posts = MonumentRateMaster::when($Search, function ($query) use ($Search) {
            return $query->where('SupplierName', $Search);
        })->when($Status, function ($query) use ($Status) {
             return $query->where('Status',$Status);
        })->select('*')->get('*');

        if ($posts->isNotEmpty()) {
            $arrayDataRows = [];
            foreach ($posts as $post){
                $arrayDataRows[] = [
                    "Id" => $post->id,
                    "SupplierName" => $post->SupplierName,
                    "Nationality" => $post->Nationality,
                    "TraficType" => $post->TraficType,
                    "RateValidFrom" => $post->RateValidFrom,
                    "RateValidTo" => $post->RateValidTo,
                    "TransferType" => $post->TransferType,
                    "Currency" => $post->Currency,
                    "AdultTicketCost" => $post->AdultTicketCost,
                    "ChildTicketCost" => $post->ChildTicketCost,
                    "InfantTicketCost" => $post->InfantTicketCost,
                    "MarkupType" => $post->MarkupType,
                    "MarkupCost" => $post->MarkupCost,
                    "TaxSlab" => $post->TaxSlab,
                    "Policy" => $post->Policy,
                    "TAC" => $post->TAC,
                    "Remarks" => $post->Remarks,
                    "Status" => $post->Status,
                    "AddedBy" => $post->AddedBy,
                    "UpdatedBy" => $post->UpdatedBy,
                    "Created_at" => $post->created_at,
                    "Updated_at" => $post->updated_at
                ];
            }

            return response()->json([
                'Status' => 200,
                'TotalRecord' => $posts->count('id'),
                'DataList' => $arrayDataRows
            ]);

        }else {
            return response()->json([
                "Status" => 0,
                "TotalRecord" => $posts->count('id'),
                "Message" => "No Record Found."
            ]);
        }
    }

    public function store(Request $request){

        call_logger('REQUEST COMES FROM ADD/UPDATE Hotel Rate: '.$request->getContent());

        try{
            $id = $request->input('id');
            if($id == '') {

                $businessvalidation =array(
                    'ClientId' => 'required',
                );

                $validatordata = validator::make($request->all(), $businessvalidation);

                if($validatordata->fails()){
                    return $validatordata->errors();
                }else{
                 $savedata = MonumentRateMaster::create([
                    'SupplierName' => $request->SupplierName,
                    'Nationality' => $request->Nationality,
                    'TraficType' => $request->TraficType,
                    'RateValidFrom' => $request->RateValidFrom,
                    'RateValidTo' => $request->RateValidTo,
                    'TransferType' => $request->TransferType,
                    'Currency' => $request->Currency,
                    'AdultTicketCost' => $request->AdultTicketCost,
                    'ChildTicketCost' => $request->ChildTicketCost,
                    'MarkupType' => $request->MarkupType,
                    'MarkupCost' => $request->MarkupCost,
                    'TaxSlab' => $request->TaxSlab,
                    'Policy' => $request->Policy,
                    'TAC' => $request->TAC,
                    'Remarks' => $request->Remarks,
                    'Status' => $request->Status,
                    'AddedBy' => $request->AddedBy,
                    'created_at' => now(),
                ]);

                if ($savedata) {
                    return response()->json(['Status' => 0, 'Message' => 'Data added successfully!']);
                } else {
                    return response()->json(['Status' => 1, 'Message' =>'Failed to add data.'], 500);
                }
              }

            }else{

                $id = $request->input('id');
                $edit = MonumentRateMaster::find($id);

                $businessvalidation =array(
                    'ClientId' => 'required',
                );

                $validatordata = validator::make($request->all(), $businessvalidation);

                if($validatordata->fails()){
                 return $validatordata->errors();
                }else{
                    if ($edit) {
                        $edit->SupplierName = $request->input('SupplierName');
                        $edit->Nationality = $request->input('Nationality');
                        $edit->TraficType = $request->input('TraficType');
                        $edit->RateValidFrom = $request->input('RateValidFrom');
                        $edit->RateValidTo = $request->input('RateValidTo');
                        $edit->TransferType = $request->input('TransferType');
                        $edit->Currency = $request->input('Currency');
                        $edit->AdultTicketCost = $request->input('AdultTicketCost');
                        $edit->ChildTicketCost = $request->input('ChildTicketCost');
                        $edit->InfantTicketCost = $request->input('InfantTicketCost');
                        $edit->MarkupType = $request->input('MarkupType');
                        $edit->MarkupCost = $request->input('MarkupCost');
                        $edit->TaxSlab = $request->input('TaxSlab');
                        $edit->Policy = $request->input('Policy');
                        $edit->TAC = $request->input('TAC');
                        $edit->Remarks = $request->input('Remarks');
                        $edit->Status = $request->input('Status');
                        $edit->UpdatedBy = $request->input('UpdatedBy');
                        $edit->updated_at = now();
                        $edit->save();

                        return response()->json(['Status' => 0, 'Message' => 'Data updated successfully']);
                    } else {
                        return response()->json(['Status' => 1, 'Message' => 'Failed to update data. Record not found.'], 404);
                    }
                }
            }
        }catch (\Exception $e){
            call_logger("Exception Error  ===>  ". $e->getMessage());
            return response()->json(['Status' => -1, 'Message' => 'Exception Error Found']);
        }
    }
}
