<?php

namespace App\Http\Controllers;
use App\Models\Member;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function membershipForm(){
        return view('home.membershipForm');
}
    public function dashboard(){
        $projects=Project::all();
        $reviews=Review::all();
        return view('home.dashboard',compact('projects','reviews'));
    }
    public function be_a_member(Request $request){
        $membership = new Member();
        $membership->name = $request->input('name');
        $membership->country = $request->input('country');
        $membership->district = $request->input('district');
        $membership->city = $request->input('city');
        $membership->mobile = $request->input('mobile');
        $membership->email = $request->input('email');
        $membership->school = $request->input('school');
        $membership->otherSchool = $request->input('otherSchool');
        $membership->workedOnOrg = $request->input('workedOnOrg');
        $membership->save();
        return redirect()->back()->with('success', 'Membership request submitted successfully.');
    }

}
