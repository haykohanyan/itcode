@extends('admin/layouts/header-footer')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <h3>Դասընթաց</h3>
                <form action="{{route('course_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="course_title" class="mt-3">Դասընթացի Փուլ</label>
                    <input name="course_title" class="form-control" value="{{$course->title}}" id="course_title">

                    <label for="course_image" class="mt-3">Նկար</label>
                    <img src="{{asset('course_images/'.$course->image)}}" alt="" width="150px" height="150px"
                         class="mt-3 ml-5 mb-5">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="course_image" name="course_image">
                            <label class="custom-file-label" for="course_image">Ընտրել նկար</label>
                        </div>
                    </div>
                    <label for="course_name" class="mt-3">Դասընթացի Անվանում</label>
                    <input name="course_name" class="form-control" value="{{$course->name}}" id="course_name">

                    <input type="hidden" value="{{$course->id}}" name="id">
<div class="text-center mt-2">
                    <button class="btn btn-danger">Փոփոխել</button>
</div>
                </form>

                <form action="{{route('course_destroy')}}" method="post" class="text-center mt-3">
                    @csrf
                    <input type="hidden" value="{{$course->id}}" name="id">
                    @foreach($course->course_lists as $key=>$course_list)
                        <input type="hidden" value="{{$course_list->id}}" name="id-{{$key}}">
                        <input type="hidden" value="{{$key}}" name="number">
                    @endforeach
                    <button class="btn btn-primary" type="submit">Ջնջել</button>
                </form>

                <h3 class="mt-5" style="color:#727CF5">Դասընթացի բնութագրության տողեր</h3>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Տող</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($course->rows as $key=>$row)
                            <form action="{{route('row_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>
                                    <textarea name="row_text" cols="20" rows="3" class="form-control">
                                        {{$row->text}}
                                    </textarea>
                                    </td>

                                    <input type="hidden" value="{{$row->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>
                            <td>
                                <form action="{{route('row_destroy')}}" method="post">
                                    @csrf
                                    <input type="hidden" value="{{$row->id}}" name="id">
                                    <button class="btn btn-primary" type="submit">Ջնջել</button>
                                </form>
                            </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>


                <h3 class="mt-5" style="color:#727CF5">Դասընթացի ծրագրի բաժիններ</h3>
                @foreach($course->course_lists as $course_list)
                    <h4 class="mt-5">Բաժին</h4>
                    <table class="table">
                        <form action="{{route('course_list_update')}}" method="post">
                            @csrf
                            <tr>
                                <td><input class="mt3 form-control" value="{{$course_list->subtitle}}"
                                           name="course_list_subtitle"></td>
                                <td>
                                    <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                </td>
                                <input type="hidden" value="{{$course_list->id}}" name="id">

                        </form>

                        <td>
                            <form action="{{route('course_list_destroy')}}" method="post">
                                @csrf
                                <input type="hidden" value="{{$course_list->id}}" name="id">
                                <button class="btn btn-primary" type="submit">Ջնջել</button>
                            </form>
                        </td>
                        </tr>
                    </table>
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Բաժնի կետ</th>
                                <th scope="col">Փոփոխել</th>
                                <th scope="col">Ջնջել</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($course_list->sub_rows as $key=>$sub_row)
                                <form action="{{route('sub_row_update')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>
                                    <textarea name="sub_row_text" cols="20" rows="3" class="form-control">
                                        {{$sub_row->text}}
                                    </textarea>
                                        </td>

                                        <input type="hidden" value="{{$sub_row->id}}" name="id">
                                        <td>
                                            <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                        </td>
                                </form>
                                <td>
                                    <form action="{{route('sub_row_destroy')}}" method="post">
                                        @csrf
                                        <input type="hidden" value="{{$sub_row->id}}" name="id">
                                        <button class="btn btn-primary" type="submit">Ջնջել</button>
                                    </form>
                                </td>
                                </tr>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




@endsection
