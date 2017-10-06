<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Airport;

class AirportController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $airport = Airport::where('iata', $id)->first();

        if (! $airport) 
            return redirect()->route('airport.search', ['q' => $id]);

        dd($airport->name);
    }
    
    /**
     * Searches for airport matching the query.
     *
     * @param  string  $term
     * @return \Illuminate\Http\Response
     */
    public function search($term)
    {
        $results = null;

        if (! $term) 
            return redirect()->route('home');

        $results = Airport::find($term);
        
        if ($results && $results->count() === 1) {
            $iata = strtolower($results->first()->iata);
            return redirect()->route('airport', ['iata' => $iata]);
        }
        
        return view('airport.search', ['results' => $results->get()]);
    }
}
