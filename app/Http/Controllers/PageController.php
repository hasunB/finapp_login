<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;



class PageController extends Controller
{
    //show create form 

    public function index() {
        return view('pages/index');
    }

    public function user_register() {
        return view('pages/user_register');
    }

    //store data

    public function store(Request $request) {

        $formValidate = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required','min:5','max:20'],
            'mobile' => 'required',
            'address' => 'required',
        ]);
        
        User::create($formValidate);

        Session::flash('message','Registered Successfully');

        return redirect('/');

    }

    public function loginuser(Request $request) {

        $formValidate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:5','max:20'],
        ]);

        $users = DB::select('select * from users where email = :email', ['email' => $request->email]);

        if($users){
            if(DB::select('select * from users where password = :password', ['password' => $request->password])){
                // $request->session()->put('loginId', $users->id);
                return redirect('homepage');
            } else {
                return back()->with('Error','Invalid Email or Password');
            }
        } else {
            return back()->with('Error','This email is not Registered');
        }

    }

    public function homepage(){
        return "Welcome";
    }
}
