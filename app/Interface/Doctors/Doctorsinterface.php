<?php

namespace App\Interface\Doctors;

interface DoctorsInterface {
// show all doctors
    public function index();

    // show form add doctor
    public function create();

    // store data in DB
    public function store($request);

    // show edit form
    public function edit($id);

//  update data in DB
    public function update( $request, $id);

    // update status active=1 ,not active =0 in db
    public function status($id);

    // delete one doctor or group of doctor
    public function delete($request);

}
