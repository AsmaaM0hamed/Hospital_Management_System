<?php
namespace App\Repository\sections;

use App\Interface\sections\sectionsinterface;
use App\Models\admin\section;

class sectionsrepository implements sectionsinterface
{
    public function index()
    {
        $sections= section::all();
        return view('dashboard.admin.sections.sections',compact('sections'));

    }

    public function store($request)
    {
        section::create([
            'name'=>$request->input('name'),
            'description'=>$request->description,

        ]);
        session()->flash('add','create new section');
        return redirect()->route('sections.index');
    }




    public function edit($id)
    {
        $section=section::findorfail($id);
        return view('dashboard.admin.sections.editsection',compact('section'));
    }
    public function update($request,$id)
    {

        $section=section::findOrFail($id);
        $section->update([
            'name'=>$request->name,
            'description'=>$request->description,
        ]);
        session()->flash('update','update section');
        return redirect()->route('sections.index');

    }

    public function destroy($id)
    {
        section::destroy($id);
        session()->flash('delete','delet section');
        return redirect()->route('sections.index');
    }
}
