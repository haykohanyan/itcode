@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <h2 class="page-title">Դասընթացներ</h2>
        <h3 class="mt-5" style="color:#727CF5">Դասընթացներ</h3>
        <a href="{{route('add_course')}}">
            <button class="btn btn-primary">Ավելացնել դասընթաց</button>
        </a>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                <tr>
                    <th scope="col">Դասընթացի Փուլ</th>
                    <th scope="col">Նկար</th>
                    <th scope="col">Դասընթացի անվանում</th>
                    <th scope="col">Դիտել</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses as $course)
                        @csrf
                        <tr>
                            <td>
                        <span>{{$course->title}}</span>
                            </td>
                            <td>
                                <img src="{{asset('course_images/'.$course->image)}}" alt="" width="50px" height="50px">
                            </td>
                            <td>
                        <span>
                            {{$course->name}}
                        </span>
                            </td>
                           <td> <a href="{{route('course_preview',$course->id)}}">
                                   <button class="btn btn-primary">
                                       Դիտել
                                   </button>
                               </a></td>


                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <div class="dataTables_paginate paging_simple_numbers"
             id="basic-datatable_paginate4">
            <ul class="pagination pagination-rounded">
                {{ $courses->links() }}
            </ul>
        </div>



        <h3 class="page-title mt-3">Դասընթացների Առօրյան</h3>
        <a href="{{route('add_course_daily')}}">
            <button class="btn btn-primary">Ավելացնել դասընթացների առօրյաի նկար</button>
        </a>
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                <tr>
                    <th scope="col">Նկարի Վերնագիր</th>
                    <th scope="col">Նկարի Բնութագիր</th>
                    <th scope="col">Նկար</th>
                    <th scope="col">Փոփոխել</th>
                    <th scope="col">Ջնջել</th>
                </tr>
                </thead>
                <tbody>
                @foreach($courses_dailies as $courses_daily)
                    <form action="{{route('courses_daily_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <tr>
                            <td>
                        <textarea name="title" id="" cols="20" rows="3" class="form-control">
                            {{$courses_daily->title}}
                        </textarea>
                            </td>
                            <td>
                        <textarea name="article" id="" cols="20" rows="3" class="form-control">
                            {{$courses_daily->article}}
                        </textarea>
                            </td>
                            <td>
                                <img src="{{asset('courses_daily_images/'.$courses_daily->image)}}" alt="" width="50px" height="50px">
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Ընտրել նկար</label>
                                    </div>
                                </div>
                            </td>
                            <input type="hidden" value="{{$courses_daily->id}}" name="id">
                            <td>
                                <button class="btn btn-danger">Փոփոխել</button>
                            </td>
                    </form>
                    <td>
                        <button class="courses_daily_destroy btn btn-primary"
                                data-id="{{$courses_daily->id}}">Ջնջել
                        </button>
                    </td>
                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>
        <div class="dataTables_paginate paging_simple_numbers"
             id="basic-datatable_paginate4">
            <ul class="pagination pagination-rounded">
                {{ $courses_dailies->links() }}
            </ul>
        </div>
    </div>
@endsection
