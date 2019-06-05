@extends('admin/layouts/header-footer')
@section('content')
<div class="container-fluid">
    <div class="row offset-2">

        <div class="col-8"  style="color: #727CF5">
            <h4 class="mt-4">Ավելացնել բաժին</h4>
            <form action="{{route('about_about_store')}}" method="post">
                @csrf
                <label for="about_about_title">Բաժնի անվանում</label>
                <input type="text" class="form-control" id="about_about_title" name="about_about_title">
                <label for="about_about_subtitle" style=" margin-top: 8%;">Ենթավորնագիր</label>
                <textarea name="about_about_subtitle" id="about_about_subtitle" cols="20" rows="3"
                          class="form-control"></textarea>
                <label for="about_about_article" style=" margin-top: 8%;">Տեղեկություն</label>
                <textarea name="about_about_article" id="about_about_article" cols="20" rows="3"
                          class="form-control"></textarea>
                <button class="btn btn-danger mt-5" type="submit" style="margin-left: 40%">Ավելացնել
                </button>
            </form>
        </div>
    </div>
</div>
@endsection