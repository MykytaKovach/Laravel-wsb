<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Trip;
use App\Http\Resources\Trip as TripResource;

class TripController extends Controller
{
    
    public function index()
    {
        // pobierz urlopy
        $trips = Trip::orderBy('id','desc')->paginate(5);
        return TripResource::collection($trips);
    }

    

    
    public function store(Request $request)
    {
        $trip = $request->isMethod('put')? Trip::findOrFail
        ($request->id) : new Trip;

        
        $trip->id = $request->input('id');
        $trip->to = json_encode($request->input('to'));
        $trip->from = json_encode($request->input('from'));
        $trip->dateStart = $request->input('dateStart');
        $trip->dateEnd = $request->input('dateEnd');
        $trip->selectedFlight = json_encode($request->input('selectedFlight'));
        $trip->selectedReturnFlight = json_encode($request->input('selectedReturnFlight'));
        $trip->createdBy = $request->input('createdBy');
        $trip->status = $request->input('status');
        

         if($trip->save()){
            return new TripResource($trip);

         }

        
    }

    
    public function show($id)
    {
        //wyswietl 1 urlop
        $trip = Trip::findOrFail($id);
        return new TripResource($trip);
    }

    

    
    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        if($trip->delete()){
        return new TripResource($trip);}
    }
}
