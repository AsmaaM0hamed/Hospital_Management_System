<?php

namespace App\Interface\services;

interface SingleServicesInterface
{
    public function index();

    public function store($request);

    public function edit($id);

    public function update($request, $id);

    public function status($id);

    public function destroy($id);
}
