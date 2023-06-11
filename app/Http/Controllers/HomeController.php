<?php

namespace App\Http\Controllers;




use App\Models\Project;

class HomeController extends Controller
{
    public function membershipForm(){
        return view('home.membershipForm');
}
    public function dashboard(){
        $projects=Project::all();
        return view('home.dashboard',compact('projects'));
    }

}
