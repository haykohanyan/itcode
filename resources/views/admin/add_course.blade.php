@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">


        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="page-title">Դասընթացներ</h2>
                <h3 class="mt-5" style="color:#727CF5">Ավելացնել Դասընթաց</h3>
                <form action="{{route('course_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="course_title">Դասընթացի Փուլ(պարտադիր չէ)</label>
                    <textarea name="course_title" id="course_title" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="course_image">Նկար</label>

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="course_image" name="course_image">
                            <label class="custom-file-label" for="course_image">Ընտրել նկար</label>
                        </div>
                    </div>

                    <label for="course_name">Դասընթացի Անվանում</label>
                    <textarea name="course_name" id="course_name" cols="20" rows="3"
                              class="form-control"></textarea>


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


        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="mt-5" style="color:#727CF5">Ավելացնել դասընթացի բնութագրության տող</h3>
                <form action="{{route('row_store')}}" method="post">
                    @csrf
                    <label for="row_text">Դասընթացի բնութագրության տող</label>
                    <textarea name="row_text" id="row_text" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="row_course">Ընտրել դասընթացը</label>
                    <select name="row_course" id="row_course" class="form-control">
                        @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="mt-5" style="color:#727CF5">Ավելացնել դասընթացի ծրագրի բաժին</h3>
                <form action="{{route('course_list_store')}}" method="post">
                    @csrf
                    <label for="course_list_name">Դասընթացի ծրագրի բաժնի անուն</label>
                    <textarea name="course_list_name" id="course_list_name" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="course_list_course">Ընտրել դասընթացը</label>
                    <select name="course_list_course" id="course_list_course" class="form-control">
                        @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-8 offset-2">
                <h3 class="mt-5" style="color:#727CF5">Ավելացնել դասընթացի ծրագրի բաժնի կետ</h3>
                <form action="{{route('sub_row_store')}}" method="post">
                    @csrf
                    <label for="sub_row_name">Ծրագրի բաժնի կետի անուն</label>
                    <textarea name="sub_row_name" id="sub_row_name" cols="20" rows="3"
                              class="form-control"></textarea>

                    <label for="sub_row_course_list">Ընտրել դասընթացի բաժինը</label>
                    <select name="sub_row_course_list" id="sub_row_course_list" class="form-control">
                        @foreach($course_lists as $course_list)
                            <option value="{{$course_list->id}}">{{$course_list->subtitle}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
