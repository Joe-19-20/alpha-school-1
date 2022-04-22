<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Event;


class UserController extends Controller
{
    /**
     * Display a listing of the courses
     *
     * @return \Illuminate\Http\Response
     */
    public function courses()
    {
        $courses = \App\Models\Course::all();
        return view('courses',compact('courses'));
    }

        
        /**
     * Display a listing of the teachers
     *
     * @return \Illuminate\Http\Response
     */
    public function teachers()
    {
        $teachers = \App\Models\Teacher::all();
        return view('teachers',compact('teachers'));
    }

            /**
     * Display a listing of the events
     *
     * @return \Illuminate\Http\Response
     */
    public function events()
    {
        $events = \App\Models\Event::all();
        return view('events',compact('events'));
    }



    /**
     * Display the course detail.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function CourseView($course_id)
    {
        $course = Course::find($course_id);
        return view('course-single',compact('course'));
    }

        /**
     * Display the teacher detail.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function TeacherView($teacher_id)
    {
        $teacher = Teacher::find($teacher_id);
        return view('teacher-single',compact('teacher'));
    }

    
        /**
     * Display the event detail.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function EventView($event_id)
    {
        $event = Event::find($event_id);
        return view('event-single',compact('event'));
    }

        /**
     * Display the apply form.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function applyCourse(Request $request, Course $course)
    {
        $course_id = $request->route('id');
        $course =  Course::find($course_id );
        
        return view('apply',compact('course'));
    }
     /**
     * Store a new student at student-table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookCourse(Request $request, Course $course) 
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string','max: 20'],
            'phone' => ['required'],
            'email' => ['required','email','string','max:255'],
            'age' => ['required'],
        ], [
            'name.required' => 'Name is required',
            'phone.required' => 'Pone number is required',
            'email.required' => 'Email is required',
            'age.required' => 'Age is rquired',
        ]);
      
        $student = new Student();
        $course_id = $request->input('id');
        $student->name = $request->input('name');
        $student->phone = $request->input('phone');
        $student->email = $request->input('email');
        $student->age = $request->input('age');
        $student->address = $request->input('address');
        $student->course_name= $request->input('course_name');
        $student->message = $request->input('message');
        $student->save();

        return redirect('/courses')->withSuccess("We've received your application. Thank you so much. We will reach out to you shortly.");
    }

    
}
