<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;
class AuthController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view('auth.register'); // Ensure you have a view at resources/views/auth/register.blade.php
    }
public function user(Request $request)
{
    return response()->json($request->user());
}
    // Register a new user
    public function register(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            // return $th->validator->errors();
            return response()->json(['error' => $th->validator->errors()], 201);
        }
        
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json(['message' => 'User registered successfully', 'user' => $user], 201);
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('auth.login'); // Ensure you have a view at resources/views/auth/login.blade.php
    }

    // Login a user
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);
        } catch (\Illuminate\Validation\ValidationException $th) {
            // return $th->validator->errors();
            return response()->json(['error' => $th->validator->errors()], 201);
        }
        

        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $user = Auth::user();
        
        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['message' => 'Login successful', 'token' => $token, 'user' => $user]);
    }

    // Logout a user
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Logged out successfully']);
    }
    public function profileupdate(Request $request){
        $data= DB::table('users')->where('id', $request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            "updated_at"=>now(),
        ]);
        // print_r($request->name);
        return response()->json(['message' => 'Profile updated successfully']);
    }
    public function Homepage(Request $request){
        $id =$request->id;
        $data = [];
        $data['goals'] = DB::table('goals')->where('user_id', $id)->take(2)->get();
        
        $dataearns = DB::table('earn')->where('user_id', $id)->selectRaw('SUM(amount) as totalPrice')->get()->first();
        $data['TotalEarn']=$dataearns->totalPrice;
        $dataspending = DB::table('spending')->where('user_id', $id)->selectRaw('SUM(amount) as totalPrice')->get()->first();
        $data['Totalspending']=number_format((float)$dataspending->totalPrice, 2, '.', '');

        $data['rota'] = DB::table('earn_rota')
        ->join('earn_joblist', 'earn_joblist.id', '=', 'earn_rota.job_id')
        ->where('earn_joblist.user_id', $id)
        ->where('earn_rota.status', "pending")
        ->where('earn_rota.date', '>=', DB::raw('CURDATE()')) // Ensure date is today or in the future
        ->where(function($query) {
            $query->where('earn_rota.Date', '>', DB::raw('CURDATE()'))
                  ->orWhere('earn_rota.sTime', '>=', DB::raw('CURTIME()')); // Ensure time is also in the future
        })
        ->orderBy('earn_rota.Date', 'asc') // Order by date ascending
        ->orderBy('earn_rota.sTime', 'asc') // Order by time ascending
        ->take(2)
        ->get();
    
        return response()->json($data);
    }
}