@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">

            <div class="col-8">
                <h3 class="mt-3" style="color: #727CF5">Ավելացնել բաժին</h3>
                        <form action="{{route('programmer_section_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="section_title">Վերնագիր</label>
                            <textarea name="section_title" id="team_title" cols="20" rows="3"
                                      class="form-control"></textarea>

                            <label for="section_subtitle1">Ենթավերնագիր 1</label>
                            <textarea name="section_subtitle1" id="section_subtitle1" cols="20" rows="3"
                                      class="form-control"></textarea>

                            <label for="section_article1">Բնութագիր 1</label>
                            <textarea name="section_article1" id="section_article1" cols="20" rows="3"
                                      class="form-control"></textarea>

                            <label for="section_subtitle2">Ենթավերնագիր 2</label>
                            <textarea name="section_subtitle2" id="section_subtitle2" cols="20" rows="3"
                                      class="form-control"></textarea>

                            <label for="section_article2">Բնութագիր 2</label>
                            <textarea name="section_article2" id="section_article2" cols="20" rows="3"
                                      class="form-control"></textarea>

                            <label for="section_image">Նկար</label>

                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="section_image" name="section_image">
                                    <label class="custom-file-label" for="section_image">Ընտրել նկար</label>
                                </div>
                            </div>
                            <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                            </button>
                            @if($errors->has('section_image'))

                                <div class="alert alert-danger">
                                    <strong>{{$errors->first('section_image')}}</strong>
                                </div>
                            @endif
                        </form>
            </div>
        </div>
    </div>
@endsection