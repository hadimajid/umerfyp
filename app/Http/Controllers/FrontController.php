<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\Hopeewinner;
use App\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
//        $data =
        $sets = Set::all()->where('state','registration')->chunk(3)->first();
        return view('frontend.index',compact('sets'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function optimize()
    {
        Artisan::call('optimize');
        return 'optimized';
    }
    public function about()
    {
        return view('frontend.about');
    }
    public function latest()
    {
        $sets = Set::where('state','history')->get();

        return view('frontend.latest',compact('sets'));
    }
    public function feedbacks()
    {
        $feeds = Feedback::all()->where('set_id',null);
        return view('frontend.feedback',compact('feeds'));
    }
}
