<?php

namespace App\Http\Controllers;

use App\Models\Portfolio\Cat;

use App\Models\Portfolio\Category;
use App\Models\Portfolio\Work;
use App\Models\Portfolio\Work_cat;

use App\Models\Portfolio\Work_Category;
use Illuminate\Http\Request;
use Image;

class PortfolioController extends Controller
{
    public function work_store(Request $request)
    {
        $avatar = $request['work_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->save('/home/itcodeam/public_html/work_images/' . $fileName);
       $work=Work::query()->create([
            'image' => $fileName,
            'article1' => $request->work_article1,
            'article2' => $request->work_article2,
            'link' => $request->work_link,
        ]);
        foreach ($request->work_categories as $work_category) {
            Work_Category::query()->create([
                'category_id' => $work_category,
                'work_id' => $work->id,
            ]);
        }
         foreach ($request->work_cats as $work_cat) {
            Work_cat::query()->create([
                'cat_id' => $work_cat,
                'work_id' => $work->id,
            ]);
        }
        return redirect()->action('AdminController@portfolio');

    }
    public function work_update(Request $request)
    {
        $up = Work::query()->find($request['id']);
        $image = Work::query()->find($request['id']);
        if (isset($request['work_image'])) {
            
        unlink('/home/itcodeam/public_html/work_images/' . $image->image);
        

            $avatar = $request['work_image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->save('/home/itcodeam/public_html/work_images/' . $fileName);
            Work::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Work::query()->find($request->id)->update([
            'article1' => $request->work_article1,
            'article2' => $request->work_article2,
            'link' => $request->work_link,
        ]);
        if (isset($request['work_categories'])) {
            foreach ($request->work_categories as $work_category) {
                Work_Category::query()->create([
                    'category_id' => $work_category,
                    'work_id' => $up->id,
                ]);
            }
        }
  if (isset($request['work_cats'])) {
            foreach ($request->work_cats as $work_cat) {
                Work_cat::query()->create([
                    'cat_id' => $work_cat,
                    'work_id' => $up->id,
                ]);
            }
        }
        return back();
    }
    public function work_destroy(Request $request)
    {$work=Work::query()->find($request['id']);
  
            unlink('/home/itcodeam/public_html/work_images/' . $work->image);
        
        $work->categories()->detach();
         $work->cats()->detach();
        Work::query()->find($request['id'])->delete();
        return redirect()->action('AdminController@portfolio');
    }
    public function wc_destroy( $id1,$id2)
    {
        $work=Work::query()->find($id1);
        $work->categories()->detach($id2);
        return back();
    }
     public function wcat_destroy( $id1,$id2)
    {
        $work=Work::query()->find($id1);
        $work->cats()->detach($id2);
        return back();
    }
    public function category_store(Request $request)
    {
        Category::query()->create([
            'name' => $request->name,
        ]);
        return back();
    }
    public function category_update(Request $request)
    {

        Category::query()->find($request->id)->update([
            'name' => $request->name
        ]);
        return back();
    }
    public function category_destroy(Request $request)
    {$category=Category::query()->find($request['id']);
        $category->works()->detach();
        Category::query()->find($request['id'])->delete();
        return back();
    }
     public function cat_store(Request $request)
    {
        Cat::query()->create([
            'name' => $request->name,
        ]);
        return redirect()->action('AdminController@portfolio');
    }
    public function cat_update(Request $request)
    {

        Cat::query()->find($request->id)->update([
            'name' => $request->name
        ]);
        return back();
    }
    public function cat_destroy(Request $request)
    {$cat=Cat::query()->find($request['id']);
        $cat->works()->detach();
        Cat::query()->find($request['id'])->delete();
        return back();
    }
}
