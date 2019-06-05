@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">
            <div class="col-8">
                <h4 class="mt-3 page-title"   style="color: #727CF5">Ավելացնել քոմենթ</h4>
                <form action="{{route('main_comment_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="comment_title">Անուն</label>
                    <textarea name="comment_title" id="comment_title" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="comment_article">Քոմենթ</label>
                    <textarea name="comment_article" id="comment_article" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="comment_from">Աղբյուր</label>
                    <textarea name="comment_from" id="comment_from" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="comment_image">Նկար</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="comment_image"
                                   name="comment_image">
                            <label class="custom-file-label" for="comment_image">Ընտրել Նկար</label>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
