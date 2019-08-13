<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;

class UserController extends Controller
{
    public function index()
    {
    return view('dashboard.dashboardmaster');

    }

    public function signin(Request $request)
    {
        // $pass = bcrypt($request['password']);
        // dd($pass);
        $email = strip_tags($request['email']);
        $password = strip_tags($request['password']);

         $this->validate(request(), [
            'email'=> 'required|email',
           'password'=> 'required'
       ]);

       if (Auth::attempt(['email' => $email, 'password' => $password])) {
           //dd(Auth::user()->name);
           return redirect()->intended('/dashboard');
       }
       return redirect()->back()->withErrors('Incorrect Email and Password')->withInput();

    }

    public function getusers() 
    {
        $details =  User::all();
        return $details;
    }

    public function Logout(){
    	Auth::logout();
    	return redirect()->route('signin');
    }

    public function store(Request $request){

        $this->validate($request, [
            'Firstname' => 'required|string',
            'Lastname' => 'required|string',
            'Email' => 'required|email',
            'Role' => 'required|string',
            'Member' => 'required|string'
            
        ]);

        $user =  User::create([
            'name' => $request['Firstname']. " ". $request['Lastname'],
           'fname' => $request['Firstname'],
           'lname'=> $request['Lastname'],
           'email'=> $request['Email'],
           'role' => $request['Role'],
           'gender' => $request['Member'],
           'password' => '12345'
        ]);

        return response()->json(['message'=> 'Details Saved !'], 200);
    }


    public function edit($id) {
        $data = User::find($id);
        return $data;
    } 

    public function Update(Request $request, $id) {
    
        //dd($request);
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'email' => 'required|email',
            'role' => 'required|string',
        ]);

        $user = User::find($id);
        $user->name = $request['firstname']. " ". $request['lastname'];
        $user->fname = $request['firstname'];
        $user->lname = $request['lastname'];
        $user->email = $request['email'];
        $user->role = $request['role'];

        
        if($user->save()){
            return response()->json(['message'=> 'Details Updated']);
        }else{
            return response()->json(['message'=>'Updated Unsuccessfully']);
        }

        
    }

    public function Delete($id) {
        $user = User::find($id);
        
        if($user->delete()) {
            return response()->json(['message'=>'User Deleted'], 200);
        }else {
            return response()->json(['message'=>'Details not deleted']);
        }
    }

    
}
