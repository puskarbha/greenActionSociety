<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Project;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function addProject(){
        return view('admin.addProject');
    }
    public function pushProject(Request $request){
        $userName=Auth::user()->name;
        $project=new Project;
        $project->title=$request->input('title');
        $project->overView=$request->input('overView');
        $project->description=$request->input('description');
        $project->author=$userName;
        $project->project_status=$request->input('project_status');
        //for Image
        $image=$request->file('image');
        $imageName=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/projects',$imageName);
        $project->image=$imageName;
        $project->save();
        return redirect('/adminPage');
    }
    public function manageReview(){
        $reviews = Review::orderBy('created_at', 'desc')->paginate(5);
        return view('admin.manageReview', compact('reviews'));
    }
    public function addReview(){
        return view('admin.addReview');
    }
    public function pushReview(Request $request){
        $review=new Review;
        $review->name=$request->input('name');
        $review->designation=$request->input('designation');
        $review->review=$request->input('review');
        $review->star=$request->input('star');
        //for Image
        $image=$request->file('image');
        $imageName=$request->name.time().'.'.$image->getClientOriginalExtension();
        $request->image->move('images/members',$imageName);
        $review->image=$imageName;
        $review->save();
        return redirect('/adminPage')->with('message','');
    }
}
