<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class rotaController extends Controller
{
    public function index(Request $request)
    {
        $datas = $request->all();
       
      foreach($datas['rota'] as $d){
        if (DB::table('earn_rota')->where([
            ['job_id', '=', $d['job']],
            ['Date', '=', $d['date']],
        ])->exists()){
           $data = DB::table('earn_rota')->where([
            ['job_id', '=', $d['job']],
            ['Date', '=', $d['date']], 
            ])->get()->first();
            // print_r($data->id);
            // echo "<br>";
            DB::table('earn_rota')->where('id', $data->id)->update([
                'Date' => $d['date'],
                'sTime' => $d['start_time'],
                'eTime' => $d['end_time'],
                'status' => $data->status,
                "updated_at"=>now(),
            ]);
    //   return response()->json(['message' => $data], 200);

        }else{
            if($d['start_time'] != $d['end_time']){
                DB::table('earn_rota')->insert([
                    'job_id' => $d['job'],
                    'Date' => $d['date'],
                    'sTime' => $d['start_time'],
                    'eTime' => $d['end_time'],
                    'status' => "pending",
                    "created_at"=>now(),
                    "updated_at"=>now(),
                ]);
            }
           
        }
    
      }
      return response()->json(['message' => 'Rota Add successfully'], 200);
    }
    public function getrota(Request $request){
        $data = $request->all();
        
        $rota = DB::table('earn_rota')->where('job_id', $request->job)->get();
     
        return response()->json($rota);

        // return response()->json(['data' => $rota], 200);
    }
    public function updatestatus(Request $request)
        {
            DB::table('earn_rota')->where('id', $request->id)->update([
                // 'Date' => $request->date,
                'sTime' => $request->startTime,
                'eTime' => $request->endTime,
                'status' => $request->status,
                "updated_at"=>now(),
            ]);
            return response()->json(['message' => 'Status updated successfully'], 200);
        }
}