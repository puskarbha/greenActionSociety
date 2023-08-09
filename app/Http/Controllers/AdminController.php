<?php

namespace App\Http\Controllers;
use App\Interfaces\ProjectRepositoryInterface;
use App\Interfaces\ReviewRepositoryInterface;
use App\Interfaces\MemberRepositoryInterface;
use App\Interfaces\TeamRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    protected $projectRepository;
    protected $reviewRepository;
    protected $memberRepository;
    protected $teamRepository;


    public function __construct(
        ProjectRepositoryInterface $projectRepository,
        ReviewRepositoryInterface $reviewRepository,
        MemberRepositoryInterface $memberRepository,
        TeamRepositoryInterface $teamRepository,
    )
    {
        $this->projectRepository=$projectRepository;
        $this->reviewRepository=$reviewRepository;
        $this->memberRepository = $memberRepository;
        $this->teamRepository=$teamRepository;
    }

    public function edit_posts(){
        return view('admin.edit_post');
    }


    public function adminPage(){
        $members=$this->memberRepository->all();
        return view('admin.adminPage',compact('members'));
    }
    public function manageProject(){
        $projects =$this->projectRepository->all();
        return view('admin.manageProject', compact('projects'));
    }
    public function addProject(){
        return view('admin.addProject');
    }
    public function pushProject(Request $request){
        $userName=Auth::user()->name;
        //for Image
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('images/projects', $imageName);

        }
       $data=[
           'title'=>$request->input('title'),
           'overView'=>$request->input('overView'),
           'description'=>$request->input('description'),
           'author'=>$userName,
           'project_status'=>$request->input('project_status'),
           'image'=>$imageName,
        ];
       $this->projectRepository->create($data);
        return redirect('/adminPage');
    }
    public function manageReview(){
        $reviews = $this->reviewRepository->all();
        return view('admin.manageReview', compact('reviews'));
    }
    public function addReview(){
        return view('admin.addReview');
    }
    public function pushReview(Request $request){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->name . time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('images/members', $imageName);

        }
        $data=[
            'name'=>$request->input('name'),
            'designation'=>$request->input('designation'),
            'review'=>$request->input('review'),
            'star'=>$request->input('star'),
            'image'=>$imageName,
            ];
        $this->reviewRepository->create($data);
        return redirect('/adminPage')->with('message','');
    }
//for Members
    public function pendingMember(){
            $members=$this->memberRepository->all();
            return view('admin.pendingMember',compact('members'));
    }
    public function ourTeam()
    {
        $T_members = $this->teamRepository->all();
        return view('admin.ourteam',compact('T_members'));
    }
}
