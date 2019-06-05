@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <h2 class="page-title">Գլխավոր</h2>
            </div>
            <div class="col-12">
                <h3 class="page-title mt-3"  style="color: #727CF5">Մեր Մասին</h3>
                <a href="{{route('add_about_about')}}">
                    <button class="btn btn-primary">Ավելացնել բաժին</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Բաժնի անվանում</th>
                            <th scope="col">Ենթավերնագիր</th>
                            <th scope="col">Տեղեկություն</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($about_abouts as $about_about)
                            <form action="{{route('about_about_update')}}" method="post">
                                @csrf
                                <tr>
                                    <td>
                                        <input type="text" class="form-control" value="{{$about_about->title}}"
                                               name="title">
                                    </td>
                                    <td>
                                <textarea name="subtitle" cols="20" rows="3" class="form-control">
                                    {{$about_about->subtitle}}
                                </textarea>
                                    </td>
                                    <td>
                                <textarea name="article" cols="20" rows="3" class="form-control">
                                    {{$about_about->article}}
                                </textarea>
                                    </td>
                                    <input type="hidden" value="{{$about_about->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger">Փոփոխել</button>
                                    </td>
                            </form>
                                    <td>
                                        <button class="about_about_destroy btn btn-primary" data-id="{{$about_about->id}}">Ջնջել</button>
                                    </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate4">
                    <ul class="pagination pagination-rounded">
                        {{ $about_abouts->links() }}
                    </ul>
                </div>

            </div>
            <div class="col-12">
                <h3 class="page-title mt-3"  style="color: #727CF5">Մեր Առօրյան</h3>
                <a href="{{route('add_about_daily')}}">
                    <button class="btn btn-primary">Ավելացնել մեր առօրյաի նկար</button>
                </a>
            </div>
        </div>
    </div>
    <!-- end page title -->
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
            @foreach($about_dailies as $about_daily)
                <form action="{{route('about_daily_update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                <tr>
                    <td>
                        <textarea name="title" id="" cols="20" rows="3" class="form-control">
                            {{$about_daily->title}}
                        </textarea>
                    </td>
                    <td>
                        <textarea name="article" id="" cols="20" rows="3" class="form-control">
                            {{$about_daily->article}}
                        </textarea>
                    </td>
                    <td>
                        <span>
                                    <img src="{{asset('about_daily_images/'.$about_daily->image)}}" alt="" width="50px" height="50px">
                        </span>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image" name="image">
                                <label class="custom-file-label" for="image">Choose file</label>
                            </div>
                        </div>
                    </td>
                    <input type="hidden" value="{{$about_daily->id}}" name="id">
                    <td>
                        <button class="btn btn-danger">Փոփոխել</button>
                    </td>
                </form>
                    <td>
                        <button class="about_daily_destroy btn btn-primary" data-id="{{$about_daily->id}}">Ջնջել</button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="dataTables_paginate paging_simple_numbers"
             id="basic-datatable_paginate4">
            <ul class="pagination pagination-rounded">
                {{ $about_dailies->links() }}
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <h3 class="page-title mt-3">Շրջանավարտներ</h3>
            <a href="{{route('add_about_student')}}">
                <button class="btn btn-primary">Ավելացնել շրջանավարտ</button>
            </a>
            <div class="table-responsive">
                <table class="table mb-0">
                    <thead>
                    <tr>
                        <th scope="col">Անուն</th>
                        <th scope="col">Աշխատանքի Վայր</th>
                        <th scope="col">Նկար</th>
                        <th scope="col">Փոփոխել</th>
                        <th scope="col">Ջնջել</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($about_students as $about_student)
                        <form action="{{route('about_student_update')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <tr>
                                <td>
                                    <textarea name="title" cols="20" rows="3" class="form-control">
                                        {{$about_student->title1}}
                                    </textarea>
                                </td>
                                <td>
                                    <textarea name="title" cols="20" rows="3" class="form-control">
                                        {{$about_student->title2}}
                                    </textarea>
                                </td>
                                <td>
                                    <img src="{{asset('students_images/'.$about_student->image)}}" alt="" width="50px" height="50px">
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input"
                                                   id="main_slide_image-{{$about_student->image}}" name="image">
                                            <label class="custom-file-label"
                                                   for="main_slide_image-{{$about_student->image}}">Ընտրել նկար</label>
                                        </div>
                                    </div>
                                </td>
                                <input type="hidden" value="{{$about_student->id}}" name="id">
                                <td>
                                    <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                </td>
                        </form>

                        <td>
                            <button class="about_student_destroy btn btn-primary"
                                    data-id="{{$about_student->id}}">Ջնջել
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
                    {{ $about_students->links() }}
                </ul>
            </div>
        </div>
    </div>
@endsection