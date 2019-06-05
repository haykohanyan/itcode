@extends('admin/layouts/header-footer')
@section('content')
<div class="container-fluid">
    <div class="row offset-2">

        <div class="col-8"  style="color: #727CF5">
            <h4 class="mt-4">Ավելացնել մեր առօրյայի նկար</h4>
            <form action="{{route('about_daily_store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="daily_title">Նկարի Վերնագիր</label>
                <textarea name="daily_title" id="daily_title" cols="20" rows="3"
                          class="form-control"></textarea>

                <label for="daily_article">Նկարի Բնութագիր</label>
                <textarea name="daily_article" id="daily_article" cols="20" rows="3"
                          class="form-control"></textarea>

                <label for="daily_image">Նկար</label>

                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="daily_image" name="daily_image">
                        <label class="custom-file-label" for="daily_image">Ընտրել նկար</label>
                    </div>
                </div>
                <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                </button>
                @if($errors->has('daily_image'))

                    <div class="alert alert-danger">
                        <strong>{{$errors->first('daily_image')}}</strong>
                    </div>
                @endif
            </form>
        </div>
    </div>
</div>
@endsection