<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use Response;

use App\Sport;
use App\League;
use App\Team;
use App\Fixture;

use App\Travel;

class SearchController extends Controller
{

    public function __construct(){
        //$this->middleware('guest');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        


        return view('templates.findaride');
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
    public function show($fixture_id)
    {
        echo $fixture_id;
        //$fixture = str_replace("-", " ", $fixture);
        //echo $fixture;

        $fixtures = Travel::where('fixture_id', $fixture_id)->with('fixture')->get();
        echo $fixtures;
        //dd($fixtures);
        //return view('templates.results', compact('fixtures'));
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
        $fixtures = Team::find($id)->fixtures()->get();
        return Response::json($fixtures, 200);
    }

    /**
     * Fetch team by sports_id
     * 
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function teams($id)
    {   
        $teams = League::find($id)->teams()->get();
        return Response::json($teams, 200);
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
        return Response::json($leagues, 200);

    }

    /**
     * Fetch all sports type
     *
     * @return array
     */    
    public function sports()
    {   
        $sports = Sport::all();
        return Response::json($sports, 200);
    }

}
