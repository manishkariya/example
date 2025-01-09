<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\homemodel;
use Illuminate\Notifications\Notifiable;

class homecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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
        $data=array(
            "taskname"=>$request->name,
            "taskdetails"=>$request->details);
            homemodel::create($data);
        return redirect('/')->with('success','Thanks for add task');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data=homemodel::all();
        return view('/home',["data"=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=homemodel::where("id",$id)->first();
        return view('/edittask',["edit"=>$edit]);
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
        $data=array(
            "taskname"=>$request->name,
            "taskdetails"=>$request->details);     
            homemodel::where("id",$id)->update($data);
            return redirect('/')->with('success','task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        homemodel::where("id",$id)->delete();
        return redirect('/')->with('del','data deleted successfully'); 

    }
}
