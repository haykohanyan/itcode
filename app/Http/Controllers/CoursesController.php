<?php

namespace App\Http\Controllers;

use App\Models\Course\Course;
use App\Models\Course\Course_list;
use App\Models\Course\Row;
use App\Models\Course\Sub_row;
use App\Models\Courses\Daily2;
use Illuminate\Http\Request;
use Image;
use Validator;

class CoursesController extends Controller
{
    public function course_store(Request $request)
    {$avatar = $request['course_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->resize(190, 70)->save('/home/itcodeam/public_html/course_images/' . $fileName);
        Course::query()->create([
            'title' => $request->course_title,
            'image' => $fileName,
            'name' => $request->course_name,
        ]);
          return redirect()->action('AdminController@courses');
    }
    public function course_update(Request $request)
    {

        $image = Course::query()->find($request['id']);
        if (isset($request['course_image'])) {
            try {
                unlink('/home/itcodeam/public_html/course_images/' . $image->image);
            } catch (\Exception $e) {
            }

            $avatar = $request['course_image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->resize(270, 189.84)->save('/home/itcodeam/public_html/course_images/' . $fileName);
            Course::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Course::query()->find($request->id)->update([
            'title' => $request->course_title,
            'name' => $request->course_name,
        ]);

        return back();
    }
    public function course_destroy(Request $request)
    {
    for($i=0;$i<=$request['number'];$i++){
        $cl=Course_list::query()->find($request['id-'.$i]);
         if (isset($cl['sub_rows'])) {
            try {
                $cl->sub_rows->each->delete();
            } catch (\Exception $e) {
            }}$cl->sub_rows->each->delete();
        
    }
        $tm = Course::query()->find($request['id']);
        $tm->course_lists->each->delete();
        $tm->rows->each->delete();
        try {
            unlink('/home/itcodeam/public_html/course_images/' . $tm->image);
        } catch (\Exception $e) {

        }
        Course::query()->find($request['id'])->delete();
        return redirect()->action('AdminController@courses');
    }
    public function row_store(Request $request)
    {
        Row::query()->create([
            'course_id' => $request->row_course,
            'text' => $request->row_text,
        ]);
          return redirect()->action('AdminController@courses');
    }
    public function row_update(Request $request)
    {

        Row::query()->find($request->id)->update([
            'text' => $request->row_text
        ]);
        return back();
    }
    public function row_destroy(Request $request)
    {
        Row::query()->find($request['id'])->delete();
        return back();
    }
    public function course_list_store(Request $request)
    {
        Course_list::query()->create([
            'course_id' => $request->course_list_course,
            'subtitle' => $request->course_list_name,
        ]);
           return redirect()->action('AdminController@courses');
    }
    public function course_list_update(Request $request)
    {

        Course_list::query()->find($request->id)->update([
            'subtitle' => $request->course_list_subtitle
        ]);
        return back();
    }
    public function course_list_destroy(Request $request)
    {
        $cl=Course_list::query()->find($request['id']);
        Course_list::query()->find($request['id'])->delete();
        $cl->sub_rows->each->delete();
        return back();
    }
    public function sub_row_store(Request $request)
    {
        Sub_row::query()->create([
            'course_list_id' => $request->sub_row_course_list,
            'text' => $request->sub_row_name,
        ]);
           return redirect()->action('AdminController@courses');
    }
    public function sub_row_update(Request $request)
    {

        Sub_row::query()->find($request->id)->update([
            'text' => $request->sub_row_text
        ]);
        return back();
    }
    public function sub_row_destroy(Request $request)
    {
        Sub_row::query()->find($request['id'])->delete();
        return back();
    }




    public function courses_daily_store(Request $request)
    {
        $avatar = $request['courses_daily_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->resize(270, 189.84)->save('/home/itcodeam/public_html/courses_daily_images/' . $fileName);

        Daily2::query()->create([
            'title' => $request->courses_daily_title,
            'article' => $request->courses_daily_article,
            'image' => $fileName,
        ]);



          return redirect()->action('AdminController@courses');
    }

    public function courses_daily_update(Request $request)
    {

        $image = Daily2::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink('/home/itcodeam/public_html/courses_daily_images/' . $image->image);
            } catch (\Exception $e) {
            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->resize(270, 189.84)->save('/home/itcodeam/public_html/courses_daily_images/' . $fileName);
            Daily2::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Daily2::query()->find($request->id)->update([
            'title' => $request->title,
            'article' => $request->article,
        ]);

        return back();
    }

    public function courses_daily_destroy(Request $request)
    {
        $tm = Daily2::query()->find($request['id']);

        Daily2::query()->find($request['id'])->delete();
        try {
            unlink('/home/itcodeam/public_html/courses_daily_images/' . $tm->image);
        } catch (\Exception $e) {

        }
        return back();
    }

}
