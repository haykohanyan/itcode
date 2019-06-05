@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">
            <div class="col-8">
                <h4 class="mt-3 page-title"   style="color: #727CF5">Ավելացնել թմի անդամ</h4>
                <form action="{{route('main_team_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="team_title">Անուն</label>
                    <textarea name="team_title" id="team_title" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="team_article">Պաշտոն</label>
                    <textarea name="team_article" id="team_article" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="team_image">Նկար</label>

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="team_image" name="team_image">
                            <label class="custom-file-label" for="team_image">Ընտրել նկար</label>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
