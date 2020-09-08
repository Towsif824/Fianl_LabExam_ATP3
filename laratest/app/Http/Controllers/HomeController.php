<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
class HomeController extends Controller
{

    
    function index(Request $request){

        $users = User::all();
        return view('home.index', compact('users'));
    }

    public function create(Request $request){
        return view('home.create');
    }

     public function store(Request $request)
     {
        $validate  = Validator::make($request->all(), [
            
            'username'  => 'required|max:5',
            'password'  => 'required',
            'ename'      => 'required',
            'cname'  => 'required',
            'phone'      => 'required',
            'type'      => 'required',
        ]);

        $val = $validate->validated();

    if($val==null){
        return back()->withError($validate)->withInput();
    }else{

        $user = new User();
            $user->username     = $request->username;
            $user->password     = $request->password;
            $user->ename         = $request->ename;
            $user->cname     = $request->cname;
            $user->phone         = $request->phone;
            $user->type         = $request->type;
            
            
            $user->save();

             return redirect()->route('home.index');

     }
 }

    public function edit($id){

    	$users = User::findorfail($id);
    	return view('home.edit', compact('users'));

    }

    function update($id, Request $request){

    	$users = User::findorfail($id);
        $users->username= $request->username;
        $users->password= $request->password;
        $users->ename= $request->ename;
        $users->cname= $request->cname;
        $users->type= $request->type;
        $users->save();

    	return redirect('home')->with('success', 'Data Updated succesfully');

    }

    function delete($id){

         $user = User::find($id);
        return view('home.delete')->with('user', $user);

    }

    function destroy($id, Request $request){

         if(User::destroy($id)){
            return redirect()->route('home.index');
        }else{
            return redirect()->route('home.delete', $id);
        }
    }
    	

}
