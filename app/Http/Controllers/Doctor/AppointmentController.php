<?php
namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Interface\appointments\appointmentinterface;
use App\Models\Doctor\appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

    private $drappoints;
    public function __construct(appointmentinterface $drappoints)
    {
        $this->drappoints=$drappoints;
    }

    public function index()
    {
        //
        return $this->drappoints->show();

    }




    public function update(Request $request, $id)
    {
        return $this->drappoints->editstatus($request,$id);
    }

    public function destroy(appointment $appointment)
    {
        //
    }
}
