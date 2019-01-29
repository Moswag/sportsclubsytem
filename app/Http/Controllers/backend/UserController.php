<?php

namespace App\Http\Controllers\Backend;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{


    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function login()
    {   
        return view('backend.user.login');
    }


    public function joinsport($id){
        $users = DB::table('user_sport')
            ->select('sport_name','employeeid')
            ->where('employeeid', '=', Auth::user()->employeeid)
            ->get();
        $registered=false;
        foreach ($users as $user){
            if($user->sport_name==$id and $user->employeeid==Auth::user()->employeeid){
                $registered =true;
            }


        }

        if($registered){
            return "<script>alert('Already registered for this sport');location.href='/vs'</script>";

        }else{
            DB::table('user_sport')->insert(
                ['employeeid' => Auth::user()->employeeid, 'sport_name' => $id]
            );
            return redirect()->route('viewsports');
        }

    }

    /**
     * Handle an authentication attempt.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return Response
     */
    public function authenticate(Request $request)
    {

        //validate form
        $this->validate(
            $request, [
            'empid' => 'required',
            'password' => 'required',
            ]
        );

        $username = $request->input('empid');
        $password = $request->input('password');
        $remember=$request->has('remember');

        if (Auth::attempt(['employeeid' => $username, 'password' => $password], $remember)) {
            $users=User::where('employeeid',$username)->get();

            foreach ($users as $user){
                $status=$user->status;
            }
            if($status=="Deducted"){
                return redirect()->intended('dashboard');
            }
            else{
                return back()->with('error', 'Your request to join club has not been approved, please wait and try again!');
            }


        }

        return back()->with('error', 'Your employee id/password combination was incorrect!');
    }


    /**
     * Handle an user logout.
     *
     * @return Response
     */
    public function logout()
    {     
        Auth::logout();
        return redirect()->route('login')->with('success', 'Your are now logged out!');    
    }

    /**
     * Handle an user lock screen.
     *
     * @return Response
     */
    public function lock()
    {
        $username = \auth()->user()->username;
        Auth::logout();
        return view('backend.user.lock', compact('username'));
    }

    /**
     * Handle an user forgot password.
     *
     * @return Response
     */
    public function forgot()
    {
       
        return view('backend.user.forgot');
    }

    /**
     * Handle an user forgot password.
     *
     * @return Response
     */
    public function forgotPost()
    {
       
        return view('backend.user.forgot');
    }

    /**
     * Handle an user reset password.
     *
     * @return Response
     */
    public function reset()
    {
       
        return view('backend.user.reset');
    }

    /**
     * Handle an user reset password.
     *
     * @return Response
     */
    public function resetPost()
    {
       
        return view('backend.user.reset');
    }

    /**
     * Handle an authentication attempt.
     *
     * @return Response
     */
    public function dashboard()
    {
        $users = DB::table('users')->count();
        $sports=DB::table('sports')->count();
        $roles=DB::table('roles')->count();
        $dependants=DB::table('dependents')->count();

       $exist= DB::table('user_role')->
            select('user_id')
                    ->where('user_id','=',Auth::user()->id)
            ->get();

        return view('backend.user.dashboard',compact('users','sports','roles','dependants','exist'));
    }

    public function tableview(){
        $users=User::all();
        return view('backend.admin.home',compact('users'));
    }
    public function adduser(){
        return view('backend.admin.adduser');
    }


   public function myprofile(){
    $users=User::where('employeeid',Auth::user()->employeeid)->get();
    return view('backend.admin.profile',compact('users'));
}
public function editprofile(){
    $users=User::where('employeeid',Auth::user()->employeeid)->get();
    return view('backend.admin.editprofile',compact('users'));
}
public function updateprofile(){
    DB::table('users')
    ->where('id', Auth::user()->id)
    ->update([
    'name' => request('name'),
    'surname'=>request('surname'),
    'employeeid'=>request('employeeid'),
    'branch'=>request('branch'),
    'address'=>request('address'),
    'email'=>request('email'),
    'gender'=>request('gender'),
    'phonenumber'=>request('phonenumber')    
    ]);

    return redirect()->route('myprofile')->with('message','Profile successfully updated');
}
public function changepassword(){
        return view('backend.admin.mypassword');
}

public function updatepassword(){
    $this->validate(request(),[
        'currentpassword'=>'required',
        'password'=>'required|confirmed']);



        $password=request('password');
        $passenc=bcrypt($password);

        DB::table('users')->
        where('id', Auth::user()->id)->
        update(['password'=>$passenc]);
        return redirect()->route('changepassword')->with('message','Password successfully changed');


}


}
