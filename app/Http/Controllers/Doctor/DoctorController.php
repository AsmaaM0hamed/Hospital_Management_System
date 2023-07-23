<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interface\Doctors\DoctorsInterface;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    private $Doctor;

    public function __construct(DoctorsInterface $Doctor)
    {
        $this->Doctor=$Doctor;
    }

    public function index()
    {
        return $this->Doctor->index();
    }


    public function create()
    {
        //
        return $this->Doctor->create();
    }


    public function store(Request $request)
    {
        //
        return $this->Doctor->store($request);
    }



    public function edit($id)
    {
        //
        return $this->Doctor->edit($id);
    }


    public function update(Request $request, $id)
    {
        //
        return $this->Doctor->update($request,$id);
    }

    public function status($id)
    {
        //
        return $this->Doctor->status($id);
    }

    public function destroy(Request $request)
    {
        //
       return  $this->Doctor->delete($request);

    }
}
