<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function login(Request $request)
      {
          if (!Auth::attempt($request->only('email', 'password')))
          {
              return response()
                  ->json(['message' => 'Unauthorized'], 401);
          }

          $user = User::where('email', $request['email'])->firstOrFail();
          return response()
              ->json(['message' => 'Hi '.$user->name.', welcome to home','access_token' => $token, 'token_type' => 'Bearer', ]);
      }
    public function listuser()
      {
        $data = User::with('roles')->get();
        return response()->json($data, 200); 
      }
      public function profile($user)
      {
        $username = User::whereUsername($user)->select('id','name','username','email','v_password','password','konsol_id')->with('roles')->first();
        $role = Role::all();
        $Permission = Permission::all();
        return response()->json([
          'data' => $username,
          'Permission' => $Permission,
          'role' => $role
        ], 200); 
      }
}
