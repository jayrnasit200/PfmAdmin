<?php

namespace App\Http\Controllers;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
   public function index()
   {
    $categories = Category::all();
       return view('CategoryList')->with('categories',$categories); 
   }
   public function newecategory(){
    return view('newecategory'); 
   }
   public function store(Request $request)
   {
        $request->validate([
            'name' => 'required|string|max:255|unique:category',
        ]);

        $category = Category::create(['name' =>request()->post("name"),'created_at'=> now(),'updated_at'=>now()]);

        return Redirect("/category")->with(['message' => 'Category Create Successfully']);

   }
   public function categorydelete($id){
    $data = Category::where('id', $id)->first()->delete();
    return response()->json(['success' => true]);
   }
   public function categorylist(){
    $data = Category::all();
    return response()->json(['success' => true, 'date'=> $data]);
   }
}
