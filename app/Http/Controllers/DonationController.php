<?php

namespace App\Http\Controllers;

use App\DonationController;
use Exception;
use Illuminate\Http\Request;

class DonationController extends Controller
{
     public function create(Request $request){
     
        try{
        //
        DonationController::create(array(
            //
        ));

        return response()->json([
            'error' => false,
            'message' => "The DonationController has been added successfully"
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
          $X = DonationController::paginate();
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
           $X = DonationController::where('id', '=', $id)->first();
           //$X->name = $request['name'];
           $X->save(); 
           return response()->json([
            'error'=>false,
            'message'=>'The DonationController has been updated successfully',
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


