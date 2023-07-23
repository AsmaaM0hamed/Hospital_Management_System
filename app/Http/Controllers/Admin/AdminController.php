<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    //
    public function register(Request $request)
    {
        admin::create([
            'name' =>"admin",
            'email' =>"admin@gmail.com",
            'password' => Hash::make(12345678),
        ]);

    }
}
