<?php

namespace App\Repository\Patients;

use App\Models\Admin\patient;
use Illuminate\Support\Facades\Hash;
use App\Interface\Patients\patientInterface;

class patientRepository implements patientInterface
{
        // Get All Patients
    public function index()
    {
        $patients=patient::all();

        return view('dashboard.admin.patients.allIpatents',compact('patients'));
    }
    // Create New Patients
    public function create()
    {
        return view('dashboard.admin.patients.addpatient');

    }
    // Store new Patients
    public function store($request)
    {
        try {
            $Patients = new patient();
            $Patients->email = $request->email;
            $Patients->Password = Hash::make($request->Phone);
            $Patients->age = $request->age;
            $Patients->Phone = $request->Phone;
            $Patients->Gender = $request->Gender;
            $Patients->Blood_Group = $request->Blood_Group;
            //insert trans
            $Patients->name = $request->name;
            $Patients->Address = $request->Address;
            $Patients->save();

            return redirect()->back()->with('add','save done');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    // edit Patients
    public function edit($id)
    {
        $patient=patient::findorfail($id);
        return view('dashboard.admin.patients.editoatient',compact('patient'));
    }
    // show Patients
    public function show($id)
    {

    }
    // update Patients
    public function update($request,$id)
    {
        try {
            $Patients =patient::findorfail($id);
            $Patients->email = $request->email;
            $Patients->Password = Hash::make($request->Phone);
            $Patients->age = $request->age;
            $Patients->Phone = $request->Phone;
            $Patients->Gender = $request->Gender;
            $Patients->Blood_Group = $request->Blood_Group;
            //insert trans
            $Patients->name = $request->name;
            $Patients->Address = $request->Address;
            $Patients->save();

            return redirect()->route('patients.index')->with('update','update done');
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    // Deleted Patients
    public function destroy($id)
    {
        patient::destroy($id);
        return redirect()->back()->with('delete','delet done');
    }
}
