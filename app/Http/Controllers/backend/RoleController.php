<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles=Role::all();
       return view('backend.admin.viewrole',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.admin.addrole');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles=new Role();
        $roles->name=request('name');
        $roles->description=request('description');
        $roles->save();
        return redirect()->route('viewroles')->with('message','Role successfully added');
    }


    public function assign(){
        $users=User::all();
        return view('backend.admin.assignrole',compact('users'));

    }

    public function postAssign(Request $request){
        $user=User::where('employeeid',$request['employeeid'])->first();
        $user->role()->detach();
        if($request['role_user']){
            $user->role()->attach(Role::where('name','user')->first());
        }
//        if($request['role_supervisor']){
//            $user->role()->attach(Role::where('name','supervisor')->first());
//        }
        if($request['role_admin']){
            $user->role()->attach(Role::where('name','admin')->first());
        }
        if($request['role_hr']){
            $user->role()->attach(Role::where('name','hr')->first());
        }
        return redirect()->route('assignrole')->with('message','Roles successfully assigned');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles=Role::where('id',$id)->get();
        return view('backend.admin.editrole',compact('roles'));
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
        DB::table('roles')
            ->where('id', $id)
            ->update(['name' => request('name'),'description'=>request('description')]);
        return redirect()->route('viewroles')->with('message','Role successfully edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Role::where('id',$id)->delete();
       return redirect()->route('viewroles')->with('message','Role successfully deleted');

    }
}
