<?php

namespace App\Interface\Insurances;

interface InsuranceInterface{
    // Get All insurance
    public function index();

    // Create New insurance
    public function create();

    // Store new insurance
    public function store($request);

    // edit insurance
    public function edit($id);

    // update insurance
    public function update($request,$id);

    // Deleted insurance
    public function destroy($id);

}
