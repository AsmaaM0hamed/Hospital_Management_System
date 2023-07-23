<?php

namespace App\Interface\sections;

interface sectionsinterface{
// show
    public function index();
// insert
    public function store($request);
// delet
    public function destroy($id);
    // edit
    public function edit($id);
// update
    public function update($request,$id);

}
