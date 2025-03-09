<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spending;
class SpendingsController extends Controller
{
    public function index(Request $request)
    {
        // print_r($request->get('id'));
        $data = Spending::where('user_id', $request->get('id'))->get();
        if (empty($data)) {
            
        }
        return response()->json(['data' => $data], 200);
    }
    public function create(Request $request){
        // print_r($request->post());
        // exit;
        try {
            $request->validate([
                'amount' => 'required|numeric|gt:0',
                'category_id' => 'required',
                'description' => 'required',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            // return $th->validator->errors();
            return response()->json(['error' => $th->validator->errors()], 201);
        }
        
        $user = Spending::create([
            'amount' => $request->amount,
            'cat_id' => $request->category_id,
            'description' => $request->description,
            'user_id' => $request->user_id,
            'Date' => $request->date,
            "created_at"=>now(),
            "updated_at"=>now(),
        ]);
        return response()->json(['message' => ' successfully'], 200);
    
    }
}
