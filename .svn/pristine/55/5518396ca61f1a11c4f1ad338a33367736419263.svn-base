<?php

namespace App\Http\Controllers;

use App\Tour;
use App\TourDestination;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class VietnamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Tour::latest('created_at')->get();
        return view('vietnam.index', compact('tours'));
    }

    /**
     * Display tour detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($alias)
    {
        $tour = Tour::where( 'alias', $alias )->first();
        return view('vietnam.detail', compact('tour'));
    }

     /**
     * Display tour detail.
     *
     * @return \Illuminate\Http\Response
     */
    public function day_tour()
    {
        $tours = Tour::where('day_tour',1)->latest('created_at')->get();
        return view('vietnam.daytour.index', compact('tours'));
    }


    /**
     * Show the tours page filter by destination.
     *
     * @return \Illuminate\Http\Response
     */
    public function destination($destination)
    {
        $region = ['northern', 'southern', 'central'];

        if (in_array($destination, $region)) {
            $destinations = TourDestination::where('region', '=' , ucfirst($destination).' Vietnam')->get();
            $des_array = [];

            foreach ($destinations as $des) {
                array_push($des_array, $des->id);
            }

            $tours = Tour::whereIn('going_to', $des_array)
                           ->orWhereIn('depart_from', $des_array)->get();
            return view('vietnam.destination', ['tours' => $tours, 'destination' => ucfirst($destination).' Vietnam']);
        } else {
            $destination = TourDestination::where('alias', '=', $destination)->first();

            if ($destination) {
                $tours = Tour::where('going_to', $destination->id)->orWhere('depart_from', $destination->id)->get();
                return view('vietnam.destination', ['tours' => $tours, 'destination' => $destination->name]);
            }    
        }
            
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

}
