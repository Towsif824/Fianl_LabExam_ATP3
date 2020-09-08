<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Validator;

class employeerController extends Controller
{
    function index(Request $request){

        $users = Job::all();
        return view('employeer.index', compact('users'));
    }

    public function create(Request $request){
        return view('employeer.create');
    }

     public function store(Request $request)
     {
        $validate  = Validator::make($request->all(), [
            
            'companyname'  => 'required',
            'title'      => 'required',
            'location'  => 'required',
            'salary'      => 'required',
        ]);

        $val = $validate->validated();

    if($validate->fails()){
            return redirect()->route('employeer.create')
                            ->with('errors', $validate->errors())
                            ->withInput();
            return back()
                    ->with('errors', $validate->errors())
                    ->withInput();
        }else{

        $user = new Job();
            $user->companyname      = $request->companyname;
            $user->title     		= $request->title;
            $user->location         = $request->location;
            $user->salary     		= $request->salary;
            
            $user->save();

             return redirect()->route('employeer.index');

     }
 }

}
