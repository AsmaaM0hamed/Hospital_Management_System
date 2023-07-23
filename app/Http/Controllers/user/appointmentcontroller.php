<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Interface\appointments\appointmentinterface;
use App\Models\admin\section;
use Illuminate\Http\Request;

class appointmentcontroller extends Controller
{

    private $appoint;
    public function __construct(appointmentinterface $appoint)
    {
        $this->appoint=$appoint;

    }

    public function index()
    {
        //

        return $this->appoint->index();
    }
    public function create()
    {
        //
        return $this->appoint->create();
    }


    public function store(Request $request)
    {
        //
        return $this->appoint->store($request);
    }



    public function destroy($id)
    {
        //
        return $this->appoint->destroy($id);
    }
}
