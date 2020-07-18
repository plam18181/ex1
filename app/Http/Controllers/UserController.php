<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return "สวัสดี User index";
    }
    public function show($id)
    {
        return "เธอคือid $id";
    }
    public function update($id1)
    {
        return "กำลังupdate id $id1";
    }
}
