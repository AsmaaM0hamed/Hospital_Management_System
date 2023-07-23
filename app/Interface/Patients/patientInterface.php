<?php

namespace App\Interface\Patients;

interface patientInterface
{
        // Get All Patients
        public function index();
        // Create New Patients
        public function create();
        // Store new Patients
        public function store($request);
        // edit Patients
        public function edit($id);
        // show Patients
        public function show($id);
        // update Patients
        public function update($request,$id);
        // Deleted Patients
        public function destroy($id);
}
