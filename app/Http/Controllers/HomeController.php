<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardHomePage;
use App\TextEditor;
use App\VideoHomePage;
use App\HomeBackground;
use App\Testimonial;
use App\Service;
use App\Position;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positions = Position::all();
        $admin = User::find([1]);
        $users = User::all()->where('id', '>', '1')->random(3);

        return view('administration/adminHome',compact('admin','users','positions'));
    }

    public function indexValidationPost()
    {
        return view('administration/validationPost');
    }

    public function indexHomeTestimonial()
    {
        $testimonial = Testimonial::all();
        return view('homePageTask/testimonial',compact('testimonial'));
    }

    public function indexHomeService()
    {
        $service = Service::all();
        return view('homePageTask/service',compact('service'));
    }

    public function indexHomeImageBG()
    {
        $tasks = HomeBackground::all();
        return view('homePageTask/imageBackground',compact('tasks'));
    }

    public function indexHomeVideo()
    {
        $video = VideoHomePage::all();
        return view('homePageTask/video',compact('video'));
    }

    public function indexHomeAbout()
    {
        $text = TextEditor::all();
        return view('homePageTask/about',compact('text'));
    }

    public function indexHomeTeam()
    {
        return view('homePageTask/team',compact(''));
    }
}
