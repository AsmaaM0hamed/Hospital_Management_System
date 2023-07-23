<?php

namespace App\Repository\Insurances;

use App\Interface\Insurances\InsuranceInterface;
use App\Models\Admin\Insurance;

class InsuranceRepository implements InsuranceInterface
{
// Get All insurance
public function index(){
    $Insurances= Insurance::all();
    return view('dashboard.admin.insurances.allInsurance',compact('Insurances'));
}

// Create New insurance
public function create(){
    return view('dashboard.admin.insurances.addInsurance');
}

// Store new insurance
public function store($request){

    try {
        $insurances = new Insurance();
        $insurances->insurance_code = $request->insurance_code;
        $insurances->discount_percentage = $request->discount_percentage;
        $insurances->Company_rate = $request->Company_rate;

        // insert trans
        $insurances->name = $request->name;
        $insurances->notes = $request->notes;
        $insurances->save();

        return redirect()->route('insurances.create')->with('add','add done');
    }
    catch (\Exception $e) {
        return redirect()->back()->withErrors(['error' => $e->getMessage()]);
    }
}



// edit insurance
public function edit($id){
    $insurances = insurance::findorfail($id);
    return view('dashboard.admin.insurances.editInsurance', compact('insurances'));

}

// update insurance
public function update($request,$id){
    $insurances = Insurance::findOrFail($id);

    $insurances->update([
        'insurance_code' => $request->insurance_code,
        'discount_percentage' => $request->discount_percentage,
        'Company_rate' => $request->Company_rate,

        // insert trans
        'name' => $request->name,
        'notes' => $request->notes,
    ]);
    return redirect()->route('insurances.index')->with('update','update done');
}

// Deleted insurance
public function destroy($id){


    Insurance::destroy($id);
    return redirect()->route('insurances.index')->with('delete','delete done');
}
}

