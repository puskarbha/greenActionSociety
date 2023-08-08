<?php

namespace App\Http\Controllers;
use App\Interfaces\MemberRepositoryInterface;
use App\Interfaces\ProjectRepositoryInterface;
use App\Interfaces\ReviewRepositoryInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $memberRepository;
    protected $projectRepository;
    protected $reviewRepository;

    public function __construct(
        MemberRepositoryInterface $memberRepository,
        ProjectRepositoryInterface $projectRepository,
        ReviewRepositoryInterface $reviewRepository
    ){
        $this->memberRepository = $memberRepository;
        $this->projectRepository = $projectRepository;
        $this->reviewRepository = $reviewRepository;
    }
    public function membershipForm(){
        return view('home.membershipForm');
}
    public function dashboard(){
        $projects = $this->projectRepository->all();
        $reviews = $this->reviewRepository->all();
        return view('home.dashboard', compact('projects', 'reviews'));
    }
    public function be_a_member(Request $request){
        $data = $request->only(['name', 'country', 'district', 'city', 'mobile', 'email', 'school', 'otherSchool', 'workedOnOrg']);
        $this->memberRepository->create($data);
        return redirect('/')->with('success', 'Membership request submitted successfully.');
    }
public function projectDetails($id)
{
    $project = $this->projectRepository->find($id);
    return view('home.project', compact('project'));
}

}
