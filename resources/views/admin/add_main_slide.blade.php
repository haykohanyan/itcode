@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">
            <div class="col-8">
                <h4 class="mt-3 page-title"   style="color: #727CF5">Ավելացնել սլայդ</h4>
                <form action="{{route('main_slide_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="slide_title">Վերնագիր</label>
                    <textarea name="slide_title" id="slide_title" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="slide_article_1">Տեքստ 1</label>
                    <textarea name="slide_article_1" id="slide_article_1" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="slide_article_2">Տեքստ 2(Կարդալ ավելին)</label>
                    <textarea name="slide_article_2" id="slide_article_2" cols="20" rows="3"
                              class="form-control"></textarea>
                    <label for="inputGroupFile04">Նկար</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupFile04"
                                   name="slide_image">
                            <label class="custom-file-label" for="inputGroupFile04">Ընտրել նկար</label>
                        </div>
                    </div>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
