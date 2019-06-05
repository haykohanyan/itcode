<?php

namespace App\Http\Controllers;

use App\Models\About\About;
use App\Models\About\Daily;
use App\Models\Company;
use App\Models\Course\Course;
use App\Models\Course\Course_list;
use App\Models\Course\Row;
use App\Models\Courses\Daily2;
use App\Models\Main\Comment;
use App\Models\Main\Slide;
use App\Models\Main\Team;
use App\Models\Main\Why;
use App\Models\Portfolio\Cat;
use App\Models\Portfolio\Category;
use App\Models\Portfolio\Work;
use App\Models\Programmer;
use App\Models\About\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {$main_slides = Slide::query()->paginate(5, ['*'], 'slide');
    $main_whies = Why::query()->paginate(5, ['*'], 'why');
    $main_teams = Team::query()->paginate(5, ['*'], 'team');
    $main_comments = Comment::query()->paginate(5, ['*'], 'comment');
        $companies=Company::query()->paginate(5, ['*'], 'company');
        return view('admin.index',compact('main_slides','main_whies','main_teams','main_comments','companies'));
    }
    public function add_main_slide()
    {
        return view('admin.add_main_slide');
    }
    public function add_main_why()
    {
        return view('admin.add_main_why');
    }
    public function add_main_team()
    {
        return view('admin.add_main_team');
    }
    public function add_main_comment()
    {
        return view('admin.add_main_comment');
    }
    public function add_main_company()
    {
        return view('admin.add_main_company');
    }
    public function about()
    {$about_abouts=About::query()->paginate(5, ['*'], 'about');
    $about_dailies=Daily::query()->paginate(5, ['*'], 'daily');
    $about_students=Student::query()->paginate(5, ['*'], 'student');
        return view('admin.about',compact('about_abouts','about_dailies','about_students'));
    }
    public function add_about_about()
    {
        return view('admin.add_about_about');
    }
    public function add_about_daily()
    {
        return view('admin.add_about_daily');
    }
    public function add_about_student()
    {
        return view('admin.add_about_student');
    }
    public function add_programmer_section()
    {
        return view('admin.add_programmer_section');
    }
    public function add_course_daily()
{
    return view('admin.add_course_daily');
}
    public function add_category()
    {
        return view('admin.add_category');
    }
      public function add_cat()
    {
        return view('admin.add_cat');
    }
    public function courses()
    {
    $courses_dailies=Daily2::query()->paginate(5, ['*'], 'daily2');
    $courses=Course::query()->paginate(5, ['*'], 'course');
        return view('admin.courses',compact('courses_dailies','courses'));
    }

    public function course_preview($id)
    {
        $course= Course::query()->find($id);
        $rows=Row::query()->get();
        $course_lists=Course_list::query()->get();

        return view('admin.course_preview',compact('course','rows','course_lists'));
    }
    public function work_preview($id)
    {
        $categories= Category::query()->get();
        $cats= Cat::query()->get();
        $work=Work::query()->find($id);
        return view('admin.work_preview',compact('work','categories','cats'));
    }
    public function add_course()
    {        $courses= Course::query()->get();
            $course_lists= Course_list::query()->get();

        return view('admin.add_course',compact('courses','course_lists'));
    }
    public function add_work()
    {
       $categories= Category::query()->get();
    $cats= Cat::query()->get();
        return view('admin.add_work',compact('categories','cats'));
    }
    public function portfolio()
    {$works=Work::query()->paginate(5, ['*'], 'work');
    $categories=Category::query()->paginate(5, ['*'], 'category');
    $cats=Cat::query()->paginate(5, ['*'], 'category2');
        return view('admin.portfolio',compact('works','categories','cats'));
    }
    public function programmers()
    {$sections=Programmer::query()->paginate(5, ['*'], 'section');
        return view('admin.programmer',compact('sections'));
    }
}
