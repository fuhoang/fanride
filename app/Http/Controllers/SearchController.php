<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Response;

use App\Sport;
use App\League;



class SearchController extends Controller
{



    public function __construct(){
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sports = $this->sports();

        //echo 'hi';
        //dd($sports);


        return view('templates.findaride', compact('sports'));
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
        //
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

    /**
     * Fetch team by sports_id
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function fixtures($id)
    {   

    }

    /**
     * Fetch team by sports_id
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function teams($id)
    {   

    }

    /**
     * Fetch team by leagues_id
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function leagues($id)
    {   
        
        $leagues = Sport::find($id)->leagues()->get();
        //dd($leagues);
        //print_r($leagues);
        return Response::json(['leagues' => $leagues]);

    }

    /**
     * Fetch all sports type
     *
     * @return array
     */    
    private function sports()
    {   
        return Sport::all();
    }


}
