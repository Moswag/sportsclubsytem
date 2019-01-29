<?php

namespace App\Http\Controllers\frontend;

use App\Role;
use App\Sport;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function home(){
        $quotes = DB::table('quote')->select('title', 'body')->get();
        $sports=Sport::all();
        return view('frontend.posts.index',compact('sports','quotes'));
    }

    public function registerview(){
        $quotes = DB::table('quote')->select('title', 'body')->get();
        return view('frontend.posts.register',compact('quotes'));
    }

    public function sports(){
        return view('frontend.posts.sports');
    }

    public function register(){
        $this->validate(request(),[
            'name'=>'required',
            'surname'=>'required',
            'employeeid'=>'required',
            'branch'=>'required',
            'email'=>'required',
            'phonenumber'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'password'=>'required|confirmed|min:6'

        ]);
       $users= DB::table('users')->where('employeeid', request('employeeid'))->doesntExist();
       if($users) {
           $user = new User();
           $user->name = request('name');
           $user->surname = request('surname');
           $user->employeeid = request('employeeid');
           $user->branch = request('branch');
           $user->email = request('email');
           $user->phonenumber = request('phonenumber');
           $user->gender = request('gender');
           $user->address = request('address');
           $password = request('password');
           $encpass = bcrypt($password);
           $user->password = $encpass;
           $user->status = "New";

           $user->save();
           return redirect()->route('registerview')->with('message', 'You have successfully registered, you can login');
       }
       else{
           return redirect()->route('registerview')->with('message','You are already registered, please login');
       }
    }

    public function quoteget(){
        return view('backend.admin.quote');
    }

    public function quote(){
        $quotes = DB::table('quote')
            ->select('quote.*')
            ->where('id', '=', 1)
            ->get();

        if($quotes=="[]"){
            DB::table('quote')->insert(['title'=>request('title'),'body'=>request('body')]);
            return redirect()->route('quote')->with('message','You have successfully set the quote for homepage');
        }else{
            DB::table('quote')
                ->where('id', 1)
                ->update(['title' => request('title'),'body'=>request('body')]);
            return redirect()->route('quote')->with('message','You have successfully updated the quote for homepage');
        }



    }


}
