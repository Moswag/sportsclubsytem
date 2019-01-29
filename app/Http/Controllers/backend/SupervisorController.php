<?php

namespace App\Http\Controllers\Backend;



use App\Http\Controllers\Controller;

use App\Sport;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupervisorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('sport_supervisor')->select('sport_supervisor.*')->get();
        return view('backend.admin.viewsupervisor',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sports=Sport::all();
        return view('backend.admin.addsupervisor',compact('sports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $user=new User();
        $user->name=request('name');
        $user->surname=request('surname');
        $user->employeeid=request('employeeid');
        $user->branch=request('branch');
        $user->email=request('email');
        $user->phonenumber=request('phonenumber');
        $user->gender=request('gender');
        $user->address=request('address');
        $user->user_type="supervisor";
        $password=request('password');
        $encpass=bcrypt($password);
        $user->password=$encpass;
        $user->save();

        DB::table('user_role')->insert(
            ['user_id' => $user->id, 'role_id' => '4']
        );


        DB::table('sport_supervisor')->insert([
            ['user_id' => request('name'), 'sport_id' => request('sport')]
        ]);

        return redirect()->route('viewsupervisor')->with('message','Supervisor successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users=User::all();
        return view('backend.supervisor.viewmember',compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
