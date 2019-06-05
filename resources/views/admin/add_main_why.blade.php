@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">
            <div class="col-8">
                <h4 class="mt-3 page-title"   style="color: #727CF5">Ավելացնել բաժին</h4>
                <form action="{{route('main_why_store')}}" method="post">
                    @csrf
                    <label for="main_why_title">Բաժնի անվանում</label>
                    <input type="text" class="form-control" id="main_why_title" name="main_why_title">
                    <label for="main_why_article" style=" margin-top: 8%;">Տեղեկություն</label>
                    <textarea name="main_why_article" id="main_why_article" cols="20" rows="3"
                              class="form-control"></textarea>
                    <button class="btn btn-danger mt-5" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
