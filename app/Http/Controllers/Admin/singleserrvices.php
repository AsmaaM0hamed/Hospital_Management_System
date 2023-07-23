<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Interface\services\SingleServicesInterface;
use Illuminate\Http\Request;

class singleserrvices extends Controller
{

    private $services;
    public function __construct(SingleServicesInterface $services)
    {
        $this->services=$services;
    }

    public function index()
    {
        //
        return $this->services->index();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
    return $this->services->store($request);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
        return $this->services->edit($id);
    }


    public function update(Request $request, $id)
    {
        //
        return $this->services->update($request,$id);
    }

    public function status($id)
    {
        //
        return $this->services->status($id);
    }

    public function destroy($id)
    {
        //
        return $this->services->destroy($id);
    }
}
