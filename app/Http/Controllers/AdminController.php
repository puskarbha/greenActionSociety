<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function edit_posts(){
        return view('admin.edit_post');
    }
}
