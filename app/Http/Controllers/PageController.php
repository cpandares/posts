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
            $image_full = time().$image->getClientOriginalName();

            \Storage::disk('images')->put($image_full, \File::get($image));

            $image->image_path=$image_full;
        }

        $course = new Course();
        $course->title = $request->title;
        $course->user_id = $idUser;
        $course->slug = 'tag';
        $course->category_id = $request->category;
        $course->description = $request->description;
        $course->image = $image_full;
        $course->save();

        return redirect('course-create')->with([
            'message'=>'saved'
        ]);

    }

}
