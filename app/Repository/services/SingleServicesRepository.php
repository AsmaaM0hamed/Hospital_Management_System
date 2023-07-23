<?php

namespace App\Repository\services;

use App\Interface\services\SingleServicesInterface;
use App\Models\Admin\Service;

class SingleServicesRepository implements SingleServicesInterface
{
    public function index()
    {
        $services=Service::all();
        return view('dashboard.admin.services.allservices',compact('services'));
    }


    public function store($request)
    {
        Service::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,

        ]);

        return redirect()->route('services.index')->with('add','add done');
    }


    public function edit($id)
    {
        $service=Service::findorfail($id);
        return view('dashboard.admin.services.editservice',compact('service'));
    }
    public function update($request, $id)
    {
        //
        $service=Service::findorfail($id);
        $service->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
        ]);
        return redirect()->route('services.index')->with('update','update done');
    }

    public function status($id)
    {
        $service=Service::findorfail($id);

        if($service->status==1)
        {

           $service->status=0;
           $service->save();
        }
        else
        {
            $service->status=1;
            $service->save();
        }

         session()->flash('update','تم تعديل الحالة بنجاح');
            return redirect()->route('services.index');

    }

    public function destroy($id)
    {
        Service::destroy($id);

        return redirect()->route('services.index')->with('delete','delete done');
    }
}
