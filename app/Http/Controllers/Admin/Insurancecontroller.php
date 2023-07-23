<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Interface\Insurances\InsuranceInterface;
use Illuminate\Http\Request;

class Insurancecontroller extends Controller
{
    private $insurance;

    public function __construct(InsuranceInterface $insurance)
    {
        $this->insurance = $insurance;
    }
    public function index()
    {
        return $this->insurance->index();
    }

    public function create()
    {
        return $this->insurance->create();
    }


    public function store(Request $request)
    {
        return $this->insurance->store($request);
    }

    public function edit($id)
    {
        return $this->insurance->edit($id);
    }


    public function update(Request $request,$id)
    {
        return $this->insurance->update($request,$id);
    }



    public function destroy($id)
    {
        return $this->insurance->destroy($id);
    }
}
