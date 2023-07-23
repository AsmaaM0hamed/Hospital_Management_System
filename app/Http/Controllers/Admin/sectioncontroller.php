<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Interface\sections\sectionsinterface;

class sectioncontroller extends Controller
{
    private $sections;

    public function __construct(sectionsinterface $sections)
    {
        $this->sections = $sections;
    }


    public function index()
    {
     return $this->sections->index();

    }


    public function store(Request $request)
    {
        return $this->sections->store($request);
    }

    public function edit($id)
    {
        return $this->sections->edit($id);
    }


    public function update(Request $request, $id)
    {
        //
        return $this->sections->update($request,$id);
    }


    public function destroy($id)
    {
        //
      return $this->sections->destroy($id);
    }
}
