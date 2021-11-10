<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Functions\GroupFlights;
use App\Providers\FlightServiceProvider;

class FlightsController extends Controller
{
    /**
     * Display groups of flights.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flights = FlightServiceProvider::boot();

        $splitedByInAndOutbound = GroupFlights::group($flights);

        return $splitedByInAndOutbound;
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
