<?php

namespace App\Http\Controllers;

use App\Models\Main\Slide;
use Illuminate\Http\Request;
use App\Models\Main\Why;
use App\Models\Main\Comment;
use Image;
use Validator;
use App\Models\Main\Team;


class MainController extends Controller
{
    public function main_slide_store(Request $request)
    {
        $avatar = $request['slide_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->save('/home/itcodeam/public_html/main_slide_images/' . $fileName);

        Slide::query()->create([
            'title' => $request->slide_title,
            'article_1' => $request->slide_article_1,
            'article_2' => $request->slide_article_2,
            'image' => $fileName,
        ]);



         return redirect()->action('AdminController@index');
    }

    public function main_slide_update(Request $request)
    {

        $slide = Slide::query()->find($request['id']);
        if (isset($request['image'])) {
                unlink('/home/itcodeam/public_html/main_slide_images/' . $slide->image);


            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->save('/home/itcodeam/public_html/main_slide_images/' . $fileName);
            Slide::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Slide::query()->find($request->id)->update([
            'title' => $request->title,
            'article_1' => $request->article_1,
            'article_2' => $request->article_2,
        ]);

        return back();
    }

    public function main_slide_destroy(Request $request)
    {
        $slide = Slide::query()->find($request['id']);
  unlink('/home/itcodeam/public_html/main_slide_images/' . $slide->image);
        Slide::query()->find($request['id'])->delete();
          

        return back();
    }

    public function main_team_store(Request $request)
    {


        $avatar = $request['team_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->save('/home/itcodeam/public_html/main_team_images/' . $fileName);

        Team::query()->create([
            'title' => $request->team_title,
            'article' => $request->team_article,
            'image' => $fileName,
        ]);
                return redirect()->action('AdminController@index');

    }

    public function main_team_update(Request $request)
    {

        $image = Team::query()->find($request['id']);
        if (isset($request['image'])) {
                unlink('/home/itcodeam/public_html/main_team_images/' . $image->image);


            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->save('/home/itcodeam/public_html/main_team_images/' . $fileName);
            Team::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Team::query()->find($request->id)->update([
            'title' => $request->title,
            'article' => $request->article,
        ]);
        return back();
    }

    public function main_team_destroy(Request $request)
    {
        $team = Team::query()->find($request['id']);
            unlink('/home/itcodeam/public_html/main_team_images/' . $team->image);

        Team::query()->find($request['id'])->delete();

        return back();
    }

    public function main_why_store(Request $request)
    {
        Why::query()->create([
            'title' => $request->main_why_title,
            'article' => $request->main_why_article,
        ]);



                 return redirect()->action('AdminController@index');

    }

    public function main_why_update(Request $request)
    {




        Why::query()->find($request->id)->update([
            'title' => $request->title,
            'article' => $request->article,
        ]);

        return back();
    }

    public function main_why_destroy(Request $request)
    {

        Why::query()->find($request['id'])->delete();

        return back();
    }

    public function main_comment_store(Request $request)
    {

        $avatar = $request['comment_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->save('/home/itcodeam/public_html/main_comment_images/' . $fileName);

        Comment::query()->create([
            'title' => $request->comment_title,
            'article' => $request->comment_article,
            'from' => $request->comment_from,
            'image' => $fileName,
        ]);
               return redirect()->action('AdminController@index');

    }


    public function main_comment_update(Request $request)
    {

        $comment = Comment::query()->find($request['id']);
        if (isset($request['image'])) {
                unlink('/home/itcodeam/public_html/main_comment_images/' . $comment->image);

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->save('/home/itcodeam/public_html/main_comment_images/' . $fileName);
            Comment::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Comment::query()->find($request->id)->update([
            'title' => $request->title,
            'article' => $request->article,
            'from' => $request->from,
        ]);

        return back();
    }


    public function main_comment_destroy(Request $request)
    {
        $comment = Comment::query()->find($request['id']);
 unlink('/home/itcodeam/public_html/main_comment_images/' . $comment->image);
        Comment::query()->find($request['id'])->delete();
           

        return back();
    }
}
