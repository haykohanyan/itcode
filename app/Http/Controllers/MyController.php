<?php

namespace App\Http\Controllers;
use App\Models\About\About;
use App\Models\About\Daily;
use App\Models\Company;
use App\Models\Course\Course;
use App\Models\Course\Course_list;
use App\Models\Course\Row;
use App\Models\Course\Sub_row;
use App\Models\Courses\Daily2;
use App\Models\Main\Comment;
use App\Models\Main\Slide;
use App\Models\Main\Team;
use App\Models\Main\Why;
use App\Models\Portfolio\Category;
use App\Models\Portfolio\Cat;
use App\Models\Portfolio\Work;
use App\Models\Programmer;
use App\Models\About\Student;
use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index()
    {$main_slides = Slide::query()->get();
        $main_whies=Why::query()->get();
        $main_teams = Team::query()->get();
        $main_comments = Comment::query()->get();
        $companies=Company::query()->get();
        $courses=Course::query()->get();
        $rows=Row::query()->get();

        return view('index',compact('main_slides','courses_frontend1s','courses_frontend2s','courses_backend1s','courses_backend2s','main_teams','main_comments','companies','main_whies','courses','rows'));
    }

    public  function about(){
        $about_abouts=About::query()->get();
        $about_dailies=Daily::query()->get();
        $companies=Company::query()->get();
        $about_students=Student::query()->get();

        return view('about',compact('about_dailies','companies','about_abouts','about_students'));
    }
    public  function courses(){
        $courses_dailies=Daily2::query()->get();
        $courses=Course::query()->get();
        $course_lists=Course_list::query()->get();
        $rows=Row::query()->get();
        $sub_rows=Sub_row::query()->get();
        return view('courses',compact('courses_dailies','courses','course_lists','rows','sub_rows'));
    }

    public  function portfolio(){
        $works=Work::query()->get();
        $categories=Category::query()->get();
        $cats=Cat::query()->get();
        return view('portfolio',compact('works','categories','cats'));
    }
    public  function contact(){
        return view('contact');
    }

    public  function information(){
        $sections=Programmer::query()->get();
        return view('information',compact('sections'));
    }
}
