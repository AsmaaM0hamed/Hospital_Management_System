<?php

namespace App\Repository\appointments;

use App\Models\admin\section;

use App\Models\Doctor\appointment;
use Illuminate\Support\Facades\Auth;
use App\Interface\appointments\appointmentinterface;
use App\Models\Doctor\Doctor;

class appointmentRepository implements appointmentinterface
{
 // Get All insurance
 public function index()
 {
    $appointments=appointment::where('user_id',Auth::id())->get();
    return view('dashboard.user.appointments.appointments',compact('appointments'));
 }

 // Create New insurance
 public function create()
 {
    $departments=section::all();

    return view('dashboard.user.appointments.addappointment',compact('departments'));
 }

 // Store new insurance
 public function store($request)
 {
    try {
        $appointment = new appointment();
        $appointment->date = $request->date;
        $appointment->time = $request->time;
        $appointment->doctor_id = $request->doctor_id;
        $appointment->user_id = $request->user_id;
        $appointment->save();

        return redirect()->back()->with('add','save done');
    }

    catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }

 }




 public function destroy($id)
 {
 appointment::destroy($id);
    return redirect()->route('appointments.index')->with('delete','delete done');
 }
// ################## doctor #####
 public function show()
 {
    $appointments=Doctor::find(3)->Dr_Appointments;



    return view('dashboard.doctor.appointments.appointments',compact('appointments'));
 }


public function editstatus( $request, $id)
{
    $appointment=appointment::find($id);

    $appointment->update([
        'status' =>$request->status,
    ]);
    session()->flash('update','تم تعديل الحالة بنجاح');
    return redirect()->route('appoints.index');
}
}
