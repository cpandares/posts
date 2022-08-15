<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('index');
    }


    public function course(Course $course){
        return view('course', compact('course'));
    }

    public function createCourse()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $idUser = auth()->user()->id;
        
        $validation = $request->validate([
            'title' => 'required|max:255',  
            'description'=> 'required',
            'category'=>'required',
            'image'=>'image'   
        ]);

        $image = $request->file('image');

        if($image){
            $ruta = "blog-laravel";

            $response = cloudinary()->upload($request->file('file')->getRealPath(), array("folder" => $ruta))->getSecurepath();
        }

        $course = new Course();
        $course->title = $request->title;
        $course->user_id = $idUser;
        $course->slug = 'tag';
        $course->category_id = $request->category;
        $course->description = $request->description;
        $course->image = $response;
        $course->save();

        return redirect('course-create')->with([
            'message'=>'saved'
        ]);

    }

}
