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

    public function edit($id){

    	$users = User::findorfail($id);
    	return view('home.edit', compact('users'));

    }

    function update($id, Request $request){

    	$users = User::findorfail($id);
        $users->username= $request->username;
        $users->password= $request->password;
        $users->type= $request->type;
        $users->name= $request->name;
        $users->dept= $request->dept;
        $users->cgpa= $request->cgpa;
        $users->save();

    	return redirect('home')->with('success', 'Data Updated succesfully');

    }

    function delete($id){

    	$users = $this->getStudentList();
    	//show comfirm view
        $user = ['id'=>'2', 'name'=>'abc','email'=>'abc@aiub.com', 'password'=>'456'];
    	
        return view('home.delete')->with('user', $user);

    }

    function destroy($id, Request $request){
    	
    	$users = $this->getStudentList();
    	//find student by id & delete
    	//updated list

    	return view('home.index')->with('users', $users);
    }

    function getStudentList(){
    	return  [
	    			['id'=>'1', 'name'=>'alamin','email'=>'abc@gmail.com', 'password'=>'123'],
	    			['id'=>'2', 'name'=>'abc','email'=>'abc@aiub.com', 'password'=>'456'],
	    			['id'=>'3', 'name'=>'xyz','email'=>'xyz@gmail.com', 'password'=>'789']
				];
    }
}
