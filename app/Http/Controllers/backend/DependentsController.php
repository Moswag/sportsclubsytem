<?php

namespace App\Http\Controllers\Backend;

use App\Dependent;
use App\Http\Controllers\Controller;
use App\Sport;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DependentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('backend.employee.adddependant');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function joinsport($id){

        $sports=Sport::all();
        return view('backend.employee.view_sports_dep',compact('sports','id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $dependant=new Dependent();
        $dependant->name=request('name');
        $dependant->surname=request('surname');
        $dependant->phonenumber=request('phonenumber');
        $dependant->dateofbirth=request('dateofbirth');
        $dependant->gender=request('gender');
        $dependant->under_employeeid=Auth::user()->employeeid;
        $dependant->club_id=Auth::user()->employeeid;
        $dependant->save();
        return redirect()->route('viewdependants')->with('message','Dependant Successfully Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $dependants=Dependent::where('under_employeeid',Auth::user()->employeeid)->get();
        return view('backend.employee.viewdependants',compact('dependants'));
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
        $dependents=Dependent::where('id',$id);
        $dependents->delete();
        return redirect()->route('viewdependants')->with('message','Dependant successfully deleted');
    }
}
