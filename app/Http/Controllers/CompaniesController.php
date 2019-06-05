<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Image;
use Validator;

class CompaniesController extends Controller
{
    public function companies_store(Request $request)
    {
        $avatar = $request['companies_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Image::make($avatar)->save('/home/itcodeam/public_html/companies_images/' . $fileName);

        Company::query()->create([
            'title' => $request->companies_title,
            'image' => $fileName,
        ]);
         return redirect()->action('AdminController@index');
    }

    public function companies_update(Request $request)
    {

        $company = Company::query()->find($request['id']);
        if (isset($request['image'])) {
                unlink('/home/itcodeam/public_html/companies_images/' . $company->image);

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            Image::make($avatar)->save('/home/itcodeam/public_html/companies_images/' . $fileName);
            Company::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Company::query()->find($request->id)->update([
            'title' => $request->title,
        ]);

        return back();
    }

    public function companies_destroy(Request $request)
    {
        $comp = Company::query()->find($request['id']);

        Company::query()->find($request['id'])->delete();
            unlink('/home/itcodeam/public_html/companies_images/' . $comp->image);

        return back();
    }

}
