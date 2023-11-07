<?php

namespace App\Http\Controllers\APIs\Auth;

use Rules\Password;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\Register;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\APIs\BaseController;


class RegisterController extends BaseController
{
    public function register (Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
// \DB::beginTransaction();
        if ($validator->fails()) {
            return $this->sendError('please validate error', $validator->errors());
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // dd($user);

        
        $success['token'] = $user->createToken('hudamansour')->accessToken;
        $success['name'] = $user->name;
// dd($success);
      
        return $this->sendResponse($success, 'User created successfully');
    

    }

    public function login(Request $request) {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user();
            $success['token']  = $user->createToken('hudamansour123')->accessToken;
            $success['name'] = $user->name;

            dd($success);
            return $this->sendResponse($success, 'User logged in successfully');
         } else {
            return $this->sendError('Please check your username and password', ['error', 'Unauthorized']);
         }

    }




    

}
