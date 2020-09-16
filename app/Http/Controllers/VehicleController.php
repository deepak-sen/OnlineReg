<?php

namespace App\Http\Controllers;

use App\Post;
use App\Vehicle;
use Illuminate\Http\Request;
use Auth;
class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $owner_id = Auth::user()->id;
    $vehicle = Vehicle::where('owner_id',$owner_id)->get();
     return view('members.vehiclelogin', compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.vcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  $vehicle = new Vehicle();
  $vehicle->name = request('name');
  $vehicle->age = request('age');
  $vehicle->gender = request('gender');
  $vehicle->address = request('address');
  $vehicle->vps = request('vps');
  $vehicle->cn = request('cn');
  $vehicle->vm = request('vm');
  $vehicle->vmy = request('vmy');
  $vehicle->vhp = request('vhp');
  $vehicle->vcn = request('vcn');
  $vehicle->ven = request('ven');
  $vehicle->vpc = request('vpc');
  $vehicle->vu = request('vu');
  $vehicle->vw = request('vw');
  $vehicle->fuel = request('fuel');
   
  $vehicle->owner_id = Auth::user()->id;
  $vehicle->owners = Auth::user()->name;
  $vehicle->save();

  return redirect('members/vehiclelogin');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        return view('vehicles.view', compact('vehicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $vehicle = Vehicle::findOrFail($id);
  

    return view('movies.vedit', compact('vehicle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $vehicle = Vehicle::findOrFail($id);
        $vehicle->name = request('name');
  $vehicle->age = request('age');
  $vehicle->gender = request('gender');
  $vehicle->address = request('address');
  $vehicle->vps = request('vps');
  $vehicle->cn = request('cn');
  $vehicle->vm = request('vm');
  $vehicle->vmy = request('vmy');
  $vehicle->vhp = request('vhp');
  $vehicle->vcn = request('vcn');
  $vehicle->ven = request('ven');
  $vehicle->vpc = request('vpc');
  $vehicle->vu = request('vu');
  $vehicle->vw = request('vw');
  $vehicle->fuel = request('fuel');
  $vehicle->save();
  return redirect('/members/vehiclelogin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehicle::find($id)->delete();
 return redirect('/members/vehiclelogin');
    }

    public function view_vehicle($owner_id){
    $owner = User::find($owner_id);
    $vehicle = $owner->vehicle()->get();

    return View::make("view")->with(array("owner" => $owner, "vehicle" => $vehicle));
}

public function __construct() 
{
  $this->middleware('auth');
}
}
