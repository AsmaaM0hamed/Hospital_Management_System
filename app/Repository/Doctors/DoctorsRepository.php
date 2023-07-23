<?php

namespace App\Repository\Doctors;

use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use App\Models\admin\section;
use App\Models\Doctor\Doctor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Interface\Doctors\DoctorsInterface;

class DoctorsRepository implements DoctorsInterface
{
    use ImageUpload;
    public function index()
    {
        $doctors=Doctor::all();
        return view('dashboard.admin.Doctors.allDoctor',compact('doctors'));
    }

    public function create()
    {
        $sections=section::all();
        return view('dashboard.admin.Doctors.addDoctor',compact('sections'));
    }

    public function store($requst)
    {

        DB::beginTransaction();

        try{
            $doctors=new Doctor();
            // store Doctor
            $doctors->name=$requst->name;
            $doctors->email=$requst->email;
            $doctors->password=Hash::make($requst->password);
            $doctors->phone=$requst->phone;
            $doctors->price=$requst->price;
            $doctors->section_id =$requst->section_id;
            $doctors->save();

            // store image
            $dr_id= $doctors->id;
            $this->StoreImage($requst,'image','Doctor','image',$dr_id,'App\Models\Doctor\Doctor');



            DB::commit();
            session()->flash('add','تم اضافة الطبيب بنجاح');
            return redirect()->route('Doctors.create');

        }
       catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }


    public function edit($id)
    {
        $sections=section::all();
        $doctor=Doctor::findorfail($id);
        return view('dashboard.admin.Doctors.editDoctor',compact('doctor','sections'));
    }

    public function update( $request, $id)
    {
        DB::beginTransaction();

        try
        {
            $doctor=Doctor::findorfail($id);
            // edit doctor
            $doctor->name=$request->name;
            $doctor->email=$request->email;
            $doctor->password=Hash::make($request->password) ;
            $doctor->phone=$request->phone;
            $doctor->price=$request->price;
            $doctor->section_id =$request->section_id;
            $doctor->save();

            // edit image
            if($request->has('image'))
            {
                // delet old image
                if($doctor->image)
                {
                    $img=$doctor->image->imagename;
                    $this->DeletImage('image','Doctor/'.$img,$id);
                }
                $this->StoreImage($request,'image','Doctor','image',$id,'App\Models\Doctor\Doctor');
            }
            DB::commit();
            session()->flash('update','تم التعديل بنجاح');
            return redirect()->route('doctors.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    public function status($id)
    {
        $doctor=Doctor::findorfail($id);

        if($doctor->status==1)
        {

           $doctor->status=0;
           $doctor->save();
        }
        else
        {
            $doctor->status=1;
            $doctor->save();
        }

         session()->flash('update','تم تعديل الحالة بنجاح');
            return redirect()->route('doctors.index');

    }


    public function delete($request)
    {
        if($request->page==1)
        {
            $doctor=Doctor::findorfail($request->id);
            // delet one doctor
           if($doctor->image)
           {
            $this->DeletImage('image','Doctor/'.$doctor->image->imagename,$request->id);
           }
           Doctor::destroy($request->id);
           session()->flash('delet','تم الحذف بنجاح');
           return redirect()->route('doctors.index');
        }
        // // delete some doctor
        else
        {

          $doctors_id = explode(",", $request->delete_select_id);

          foreach ($doctors_id as $doctor_id)
          {
              $doctor = Doctor::findorfail($doctor_id);
              if($doctor->image)
              {
                  $this->DeletImage('image','Doctor/'.$doctor->image->imagename,$doctor_id);
              }
          }

            Doctor::destroy($doctors_id);
            session()->flash('delete',"تم الحذف بنجاح");
            return redirect()->route('doctors.index');
        }
    }
}
