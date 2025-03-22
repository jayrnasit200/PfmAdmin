<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class goalsController extends Controller
{
    public function index(Request $request){
       $data = DB::table('goals')->where('user_id', $request->get('id'))->get();
      return response()->json($data);

    }
    public function create(Request $request){
        // print_r($request->target_amount);
        // exit;
        try {
            $request->validate([
                'user_id' => 'required',
                'target_amount' => 'required',
                // 'saved_amount' => 'required',
                'name' => 'required',
                'deadline' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            // return $th->validator->errors();
            return response()->json(['error' => $th->validator->errors()], 201);
        }
        
        $user = DB::table('goals')->insert([
            'user_id' => $request->user_id,
            'target_amount' => $request->target_amount,
            'saved_amount' => 0,
            'name' => $request->name,
            'deadline' => $request->deadline,
            "created_at"=>now(),
            "updated_at"=>now(),
        ]);
        return response()->json(['message' => 'Goal created successfully'], 201);
    }
}
