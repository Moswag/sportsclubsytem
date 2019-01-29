<?php

namespace App\Http\Controllers\Backend;

use App\Blog;
use App\Http\Controllers\Controller;
use App\Sport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.admin.addsport');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {





        $image=$request->file('image');

        $input['imagename']=$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
        $destination=public_path('/images/sports-pictures');
        $image->move($destination,$input['imagename']);

        $sport=new Sport();
        $sport->name=request('name');
        $sport->description=request('description');
        $sport->image_url=$input['imagename'];
        $sport->save();
        return redirect()->route('viewsports');
    }

    public function viewsports(){
        $user_sport=DB::table('user_sport')
            ->where('employeeid',Auth::user()->employeeid)
            ->get();
        $data = array();
        foreach ($user_sport as $user_sp){
            $data[] = (array)$user_sp->sport_name;
        }
        $sports = DB::table('sports')
            ->whereNotIn('name', $data)
            ->get();
        return view('backend.employee.viewsport',compact('sports'));
    }

    public function mysports(){
//      $sport= DB::table('sports')
//           ->join('user_sport','sport_name','=','sports.name')
//           ->join('users','users.employeeid','=','user_sport.employeeid')
//           ->select('sports.*')
//         ->get();


      $user_sport=DB::table('user_sport')
          ->where('employeeid',Auth::user()->employeeid)
          ->get();
        $data = array();
      foreach ($user_sport as $user_sp){
          $data[] = (array)$user_sp->sport_name;
      }
        $sports = DB::table('sports')
            ->whereIn('name', $data)
            ->get();

        return view('backend.employee.mysports',compact('sports'));
    }

    public function joindep($id){

        list($clubid, $sportname) = explode('.', $id);

        DB::table('user_sport')->insert(
            ['employeeid' => $clubid, 'sport_name' => $sportname]
        );
        return redirect()->route('viewdependants')->with('message','You successfully registered for a sport');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $sports=Sport::all();
//        $sports= DB::table('sports')
//            ->join('user_sport','sport_name','=','sports.name')
//            ->join('users','users.employeeid','=','user_sport.employeeid')
//            ->select('sports.*')
//            ->whereNotIn('name', ['user_sport.sprotname'])
//            ->get();


        return view('backend.admin.viewsport',compact('sports'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sports=Sport::where('id',$id)->get();
        return view('backend.admin.editsport',compact('sports'));
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
        $image=$request->file('image');
        $input['imagename']=$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
        $destination=public_path('/images/sports-pictures');
        $image->move($destination,$input['imagename']);

//        $sport=Sport::where('id',$id);
//        $sport->name=request('name');
//        $sport->description=request('description');
//        $sport->image_url=$input['imagename'];
//        $sport->update();

        DB::table('sports')
            ->where('id', $id)
            ->update(['name' => request('name'),'description'=>request('description'),'image_url'=>$input['imagename']]);

        return redirect()->route('viewsport')->with('message','Sport successfully updated');
    }

    public function blog($id){
         $blogs=Blog::where('sportname',$id)->get();
        return view('backend.employee.sportblog',compact('blogs'));
    }

    public function viewthisblog($id){
        $blogs=Blog::find($id);
        return view('backend.employee.viewblog',compact('blogs'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $sports=Sport::where('id',$id);
        $sports->delete();
        return redirect()->route('viewsport')->with('message','Sport successfully deleted');
    }
}
