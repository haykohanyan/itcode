<?php

namespace App\Http\Controllers;

use App\Models\About\About;
use App\Models\About\Daily;
use App\Models\About\Student;
use Illuminate\Http\Request;
use Image;
use Validator;


class AboutController extends Controller
{
    public function about_about_store(Request $request)
    {

        About::query()->create([
            'title' => $request->about_about_title,
            'subtitle' => $request->about_about_subtitle,
            'article' => $request->about_about_article,
        ]);



        return redirect()->action('AdminController@about');
    }

    public function about_about_update(Request $request)
    {
        About::query()->find($request->id)->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'article' => $request->article,
        ]);

        return back();
    }

    public function about_about_destroy(Request $request)
    {

        About::query()->find($request['id'])->delete();

        return back();
    }

    public function about_daily_store(Request $request)
    {
        $avatar = $request['daily_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->save('/home/itcodeam/public_html/about_daily_images/' . $fileName);

        Daily::query()->create([
            'title' => $request->daily_title,
            'article' => $request->daily_article,
            'image' => $fileName,
        ]);



              return redirect()->action('AdminController@about');

    }

    public function about_daily_update(Request $request)
    {

        $image = Daily::query()->find($request['id']);
        if (isset($request['image'])) {
                unlink('/home/itcodeam/public_html/about_daily_images/' . $image->image);

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->save('/home/itcodeam/public_html/about_daily_images/' . $fileName);
            Daily::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Daily::query()->find($request->id)->update([
            'title' => $request->title,
            'article' => $request->article,
        ]);

        return back();
    }

    public function about_daily_destroy(Request $request)
    {
        $team = Daily::query()->find($request['id']);
  unlink('/home/itcodeam/public_html/about_daily_images/' . $team->image);
        Daily::query()->find($request['id'])->delete();
          
        return back();
    }

    public function about_student_store(Request $request)
    {

        $avatar = $request['student_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->save('/home/itcodeam/public_html/students_images/' . $fileName);

        Student::query()->create([
            'title1' => $request->students_title1,
            'title2' => $request->students_title2,
            'image' => $fileName,
        ]);
               return redirect()->action('AdminController@about');

    }

    public function about_student_update(Request $request)
    {

        $student = Student::query()->find($request['id']);
        if (isset($request['image'])) {
                unlink('/home/itcodeam/public_html/students_images/' . $student->image);


            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->save('/home/itcodeam/public_html/students_images/' . $fileName);
            Student::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Student::query()->find($request->id)->update([
            'title1' => $request->title1,
            'title2' => $request->title2,
        ]);

        return back();
    }

    public function about_student_destroy(Request $request)
    {
        $com = Student::query()->find($request['id']);
            unlink('/home/itcodeam/public_html/students_images/' . $com->image);
        Student::query()->find($request['id'])->delete();

        return back();
    }
}
