<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class rotaController extends Controller
{
    public function index(Request $request)
    {
        $data = $request->all();
      foreach($data as $d){
    //     DB::table('earn_rota')->insert([
    //     'job_id' => $d['job'],
    //     'Date' => $d['date'],
    //     'sTime' => $d['start_time'],
    //     'eTime' => $d['end_time'],
    //     'status' => "pending",
    //     "created_at"=>now(),
    //     "updated_at"=>now(),
    // ]);
    
      }
      return response()->json(['message' => 'Rota Add successfully'], 200);
    }
}