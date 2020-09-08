<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{

    
    function index(Request $request){

        $users = User::all();
        return view('home.index', compact('users'));
    }

    public function create(Request $request){
        return view('home.create');
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
