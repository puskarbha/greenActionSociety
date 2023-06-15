<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function edit_posts(){
        return view('admin.edit_post');
    }


    public function adminPage(){
        return view('admin.adminPage');
    }
    public function manageProject(){

        $projects = Project::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.manageProject', compact('projects'));
    }
}
