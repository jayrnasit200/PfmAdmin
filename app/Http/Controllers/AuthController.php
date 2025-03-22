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
}