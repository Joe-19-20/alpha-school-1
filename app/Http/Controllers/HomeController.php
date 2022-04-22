<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Teacher;
class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       /**
     * Display a listing of the courses
     *
     * @return \Illuminate\Http\Response
     */
        $courses = \App\Models\Course::all()->take(3);
        return view('index',compact('courses'));

    }

    public function about()
    {
       /**
     * Display a listing of the teacher
     *
     * @return \Illuminate\Http\Response
     */
        $teachers = \App\Models\Teacher::all()->take(3);
        return view('about',compact('teachers'));

    }
}
