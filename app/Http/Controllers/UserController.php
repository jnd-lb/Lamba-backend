<?php

namespace App\Http\Controllers;

use App\User;
use Exception;
use Illuminate\Http\Request;

class User extends Controller
{
     public function create(Request $request){
     
        try{
        //
        User::create(array(
            //
        ));

        return response()->json([
            'error' => false,
            'message' => "The User has been added successfully"
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
          $X = User::paginate();
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
           $X = User::where('id', '=', $id)->first();
           //$X->name = $request['name'];
           $X->save(); 
           return response()->json([
            'error'=>false,
            'message'=>'The User has been updated successfully',
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


