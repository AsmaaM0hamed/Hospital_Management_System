<?php

namespace App\Interface\appointments;

interface appointmentinterface
{
    // ########user#########
 // Get All app for user
 public function index();

 // Create New
 public function create();

 // Store new
 public function store($request);


 // Deleted
 public function destroy($id);

//  #########doctor#########
public function show();

public function editstatus( $request, $id);
}
