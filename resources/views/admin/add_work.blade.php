@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="page-title">Աշխատանքներ</h2>
                <h3 class="mt-5" style="color:#727CF5">Ավելացնել աշխատանք</h3>
                <form action="{{route('work_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="work_article1">Աշխատանքի բնութագիր #1</label>
                    <textarea name="work_article1" id="work_article1" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="work_article2">Աշխատանքի բնութագիր #2(պարտադիր չէ)</label>
                    <textarea name="work_article2" id="work_article2" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="work_image">Նկար</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="work_image" name="work_image">
                            <label class="custom-file-label" for="work_image">Ընտրել նկար</label>
                        </div>
                    </div>
                    <label for="work_link">Հղում(պարտադիր չէ)</label>
                    <textarea name="work_link" id="work_link" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="work_category">Ընտրել կատեգորիան</label>
                    <select name="work_categories[]" id="work_category" class="form-control select2-multiple"   data-toggle="select2"  multiple>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                        <label for="work_cat">Ընտրել լեզուն</label>
                    <select name="work_cats[]" id="work_cat" class="form-control select2-multiple"   data-toggle="select2"  multiple>
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>





    </div>
@endsection
