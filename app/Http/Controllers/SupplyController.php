<?php

namespace App\Http\Controllers;

use App\SupplyController;
use Exception;
use Illuminate\Http\Request;

class SupplyController extends Controller
{
     public function create(Request $request){
     
        try{
        //
        SupplyController::create(array(
            //
        ));

        return response()->json([
            'error' => false,
            'message' => "The SupplyController has been added successfully"
        ],201);

    }catch (\Illuminate\Database\QueryException $exception) {
            $errorInfo = $exception->errorInfo;
            return response()->json([
                'error' => true,
                'message' => "Internal error occured",
                'errormessage' => $errorInfo
            ],500);
        }
    }

   public function retrieve(Request $request){
      try{
          $X = SupplyController::paginate();
          return response()->json([
              'error'=>false,
              'X'=>$X
          ],200);
      }
      catch(\Illuminate\Database\QueryException $exception){
        $errorInfo = $exception->errorInfo;
        return response()->json([
            'error' => true,
            'message' => "Internal error occured"
        ],500);
      }

    }

    public function update(Request $request,$id){
       try{
           $X = SupplyController::where('id', '=', $id)->first();
           //$X->name = $request['name'];
           $X->save(); 
           return response()->json([
            'error'=>false,
            'message'=>'The SupplyController has been updated successfully',
            'X'=>$X
           ],200);
       }
      catch(\Illuminate\Database\QueryException $exception){
        $errorInfo = $exception->errorInfo;
        return response()->json([
            'error' => true,
            'message' => "Internal error occured"
        ],500);
       }
    }
}


