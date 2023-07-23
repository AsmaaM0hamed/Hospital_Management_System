<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Interface\Patients\patientInterface;
use Illuminate\Http\Request;

class patientscontroller extends Controller
{

    private $Patient;

    public function __construct(patientInterface $Patient)
    {
        $this->Patient = $Patient;
    }


    public function index()
    {
        return $this->Patient->index();
    }


    public function create()
    {
        return$this->Patient->create();
    }


    public function store(Request $request)
    {
        return$this->Patient->store($request);
    }

    public function show($id)
    {
        return $this->Patient->show($id);
    }


    public function edit($id)
    {
        return $this->Patient->edit($id);
    }

    public function update(Request $request, $id)
    {
        //
        return $this->Patient->update($request,$id);
    }

    public function destroy($id)
    {
        //
        return $this->Patient->destroy($id);
    }
}
