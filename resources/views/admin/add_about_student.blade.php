@extends('admin/layouts/header-footer')
@section('content')
<div class="container-fluid">
    <div class="row offset-2">

        <div class="col-8">
            <h4 class="mt-3" style="color: #727CF5">Ավելացնել շրջանավարտ</h4>
                    <form action="{{route('about_student_store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <label for="students_title">Անուն</label>
                        <textarea name="students_title1" id="students_title1" cols="20" rows="3"
                                  class="form-control"></textarea>
                        <label for="students_title2">Աշխատանքի Վայր(պարտադիր չէ)</label>
                        <textarea name="students_title2" id="students_title2" cols="20" rows="3"
                                  class="form-control"></textarea>
                        <label for="student_image">Նկար</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="student_image"
                                       name="student_image">
                                <label class="custom-file-label" for="student_image">Ընտրել Նկար</label>
                            </div>
                        </div>
                        <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                        </button>
                        @if($errors->has('student_image'))

                            <div class="alert alert-danger">
                                <strong>{{$errors->first('student_image')}}</strong>
                            </div>
                        @endif
                    </form>
        </div>
    </div>
</div>
@endsection