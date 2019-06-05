@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">

            <div class="col-8"   style="color: #727CF5">
                <h4 class="mt-4">Ավելացնել դասընթացների առօրյայի նկար</h4>
                <form action="{{route('courses_daily_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="courses_daily_title">Նկարի Վերնագիր</label>
                    <textarea name="courses_daily_title" id="courses_daily_title" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="courses_daily_article">Նկարի Բնութագիր</label>
                    <textarea name="courses_daily_article" id="courses_daily_article" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="courses_daily_image">Նկար</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="courses_daily_image"
                                   name="courses_daily_image">
                            <label class="custom-file-label" for="courses_daily_image">Ընտրել նկար</label>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                    @if($errors->has('courses_daily_image'))

                        <div class="alert alert-danger">
                            <strong>{{$errors->first('courses_daily_image')}}</strong>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>
@endsection