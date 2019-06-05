@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <h2 class="page-title">Գլխավոր</h2>

        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3"  style="color: #727CF5">Սլայդշոու</h3>
                <a href="{{route('add_main_slide')}}">
                    <button class="btn btn-primary">Ավելացնել սլայդ</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Վերնագիր</th>
                            <th scope="col">Տեքստ 1</th>
                            <th scope="col">Տեքստ 2</th>
                            <th scope="col">Նկար</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($main_slides as $main_slide)
                            <form action="{{route('main_slide_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                    <textarea name="title" id="main_slide_title-{{$main_slide->id}}" cols="20" rows="3"
                                              class="form-control">
                                        {{$main_slide->title}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="article_1" id="main_slide_article_1-{{$main_slide->id}}" cols="20"
                                              rows="3" class="form-control">
                                             {{$main_slide->article_1}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="article_2" id="main_slide_article_2-{{$main_slide->id}}" cols="20"
                                              rows="3" class="form-control">
                                             {{$main_slide->article_2}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <span>
                                    <img src="{{asset('main_slide_images/'.$main_slide->image)}}" alt="" width="50px" height="50px">
                                    </span>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       id="main_slide_image-{{$main_slide->image}}" name="image">
                                                <label class="custom-file-label"
                                                       for="main_slide_image-{{$main_slide->image}}">Ընտրել Նկար</label>
                                            </div>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$main_slide->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>
                                    <td>
                                        <button class="main_slide_destroy btn btn-primary" data-id="{{$main_slide->id}}">Ջնջել</button>
                                    </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate1">
                    <ul class="pagination pagination-rounded">
                        {{ $main_slides->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3"  style="color: #727CF5">Ինչու՞ Մենք</h3>
                <a href="{{route('add_main_why')}}">
                    <button class="btn btn-primary">Ավելացնել բաժին</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Բաժնի անվանում</th>
                            <th scope="col">Տեղեկություն</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($main_whies as $main_why)
                            <form action="{{route('main_why_update')}}" method="post">
                                @csrf
                                <tr>

                                    <td>
                                        <input type="text" class="form-control" value="{{$main_why->title}}"
                                               name="title">
                                    </td>
                                    <td>
                                <textarea name="article" cols="20" rows="3" class="form-control">
                                    {{$main_why->article}}
                                </textarea>
                                    </td>
                                    <input type="hidden" value="{{$main_why->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>
                                    <td>
                                        <button class="main_why_destroy btn btn-primary" data-id="{{$main_why->id}}">Ջնջել</button>
                                    </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate2">
                    <ul class="pagination pagination-rounded">
                        {{ $main_whies->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3"  style="color: #727CF5">Մեր Թիմը</h3>
                <a href="{{route('add_main_team')}}">
                    <button class="btn btn-primary">Ավելացնել թմի անդամ</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անուն</th>
                            <th scope="col">Պաշտոն</th>
                            <th scope="col">Նկար</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($main_teams as $main_team)
                            <form action="{{route('main_team_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>

                                    <td>
                                    <textarea name="title" cols="20" rows="3"
                                              class="form-control">
                                        {{$main_team->title}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="article" cols="20" rows="3" class="form-control">
                                             {{$main_team->article}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <span>
                                    <img src="{{asset('main_team_images/'.$main_team->image)}}" alt="" width="50px" height="50px">
                                    </span>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       id="main_slide_image-{{$main_team->image}}" name="image">
                                                <label class="custom-file-label"
                                                       for="main_slide_image-{{$main_team->image}}">Choose file</label>
                                            </div>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$main_team->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>
                            <td>
                                <button class="main_team_destroy btn btn-primary" data-id="{{$main_team->id}}">Ջնջել</button>
                            </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate3">
                    <ul class="pagination pagination-rounded">
                        {{ $main_teams->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3"  style="color: #727CF5">Քոմենթներ</h3>
                <a href="{{route('add_main_comment')}}">
                    <button class="btn btn-primary">Ավելացնել քոմենթ</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անուն</th>
                            <th scope="col">Քոմենթ</th>
                            <th scope="col">Աղբյուր</th>
                            <th scope="col">Նկար</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($main_comments as $main_comment)
                            <form action="{{route('main_comment_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                    <textarea name="title" cols="20" rows="3" class="form-control">
                                        {{$main_comment->title}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="article" cols="20" rows="3" class="form-control">
                                             {{$main_comment->article}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="from" cols="20" rows="3" class="form-control">
                                             {{$main_comment->from}}
                                    </textarea>
                                    </td>

                                    <td>
                                    <span>
                                    <img src="{{asset('main_comment_images/'.$main_comment->image)}}" alt="" width="50px" height="50px">
                                    </span>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       id="main_slide_image-{{$main_comment->image}}" name="image">
                                                <label class="custom-file-label"
                                                       for="main_slide_image-{{$main_comment->image}}">Choose file</label>
                                            </div>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$main_comment->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>
                                    <td>
                                        <button class="main_comment_destroy btn btn-primary" data-id="{{$main_comment->id}}">Ջնջել</button>
                                    </td>
                                </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate4">
                    <ul class="pagination pagination-rounded">
                        {{ $main_comments->links() }}
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3"   style="color: #727CF5">Ընկերություններ</h3>
                <a href="{{route('add_main_company')}}">
                    <button class="btn btn-primary">Ավելացնել ընկերություն</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Հղում</th>
                            <th scope="col">Լոգո</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($companies as $company)
                            <form action="{{route('companies_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                    <input name="title"  class="form-control" type="text" value="  {{$company->title}}">
                                      
                                   
                                    </td>
                                    <td>
                                    
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       id="main_slide_image-{{$company->image}}" name="image">
                                                <label class="custom-file-label"
                                                       for="main_slide_image-{{$company->image}}">Ընտրել նկար</label>
                                            </div>
                                        </div>
                                        <span>
                                <img src="{{asset('companies_images/'.$company->image)}}" alt="" width="50px" height="50px">
                                    </span>
                                    </td>
                                    <input type="hidden" value="{{$company->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>

                            <td>
                                <button class="companies_destroy btn btn-primary"
                                        data-id="{{$company->id}}">Ջնջել
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
                        {{ $companies->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection