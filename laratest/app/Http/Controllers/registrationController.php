<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator,Redirect,Response;
Use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;

class registrationController extends Controller
{
    public function registration()
    {
        return view('registration.registration');
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
        'username' => 'required|string|max:100',
        'password' => 'required|min:6',
        'ename' => 'required|string|max:100',
        'cname' => 'required|string|max:100',
        'phone' => 'required|string',
        'type' => 'required|string',
        
        ]);
        
        $data = $request->all();

        $check = $this->create($data);
      
        return Redirect::to("/")->withSuccess('Great! You have Successfully loggedin');
    }

    protected function create(array $data)
    {
        $user = User::create([
            'username' => $data['username'],
            'password' =>$data['password'],
            'ename' => $data['ename'],
            'cname' => $data['cname'],
            'phone' => $data['phone'],
            'type' => $data['type'],
            
        ]);
    return $user;
    }
    
}
