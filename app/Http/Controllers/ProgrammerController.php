<?php

namespace App\Http\Controllers;

use App\Models\Programmer;
use Illuminate\Http\Request;
use Image;
use Validator;

class ProgrammerController extends Controller
{
    public function programmer_section_store(Request $request)
    {
        $avatar = $request['section_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->resize(644, 365)->save('/home/itcodeam/public_html/programmer_section_images/' . $fileName);

        Programmer::query()->create([
            'title' => $request->section_title,
            'subtitle1' => $request->section_subtitle1,
            'article1' => $request->section_article1,
            'subtitle2' => $request->section_subtitle2,
            'article2' => $request->section_article2,
            'image' => $fileName,
        ]);
         return redirect()->action('AdminController@programmers');
    }

    public function programmer_section_update(Request $request)
    {

        $image = Programmer::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink('/home/itcodeam/public_html/programmer_section_images/' . $image->image);
            } catch (\Exception $e) {

            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->resize(644, 365)->save('/home/itcodeam/public_html/programmer_section_images/' . $fileName);
            Programmer::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Programmer::query()->find($request->id)->update([
            'title' => $request->title,
            'subtitle1' => $request->subtitle1,
            'article1' => $request->article1,
            'subtitle2' => $request->subtitle2,
            'article2' => $request->article2,
        ]);
        return back();
    }

    public function programmer_section_destroy(Request $request)
    {
        $team = Programmer::query()->find($request['id']);

        Programmer::query()->find($request['id'])->delete();
        try {
            unlink('/home/itcodeam/public_html/programmer_section_images/' . $team->image);
        } catch (\Exception $e) {

        }
        return back();
    }
}
