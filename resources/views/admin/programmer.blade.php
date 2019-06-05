@extends('admin.layouts.header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3">Ինչու՞ Դառնալ Ծրագրավորող</h3>
                <a href="{{route('add_programmer_section')}}">
                    <button class="btn btn-primary">Ավելացնել բաժին</button>
                </a>
                <h4 class=" mt-3">Բաժին</h4>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Վերնագիր</th>
                            <th scope="col">Ենթավերնագիր 1</th>
                            <th scope="col">Բնութագիր 1</th>
                            <th scope="col">Ենթավերնագիր 2</th>
                            <th scope="col">Բնութագիր 2</th>
                            <th scope="col">Նկար</th>
                            <th scope="col">Փոփոխել/Ջնջել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($sections as $section)
                            <form action="{{route('programmer_section_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>

                                    <td>
                                    <textarea name="title" cols="20" rows="3"
                                              class="form-control">
                                        {{$section->title}}
                                    </textarea>
                                    </td>

                                    <td>
                                    <textarea name="subtitle1" cols="20" rows="3"
                                              class="form-control">
                                        {{$section->subtitle1}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="article1" cols="20" rows="3" class="form-control">
                                             {{$section->article1}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="subtitle2" cols="20" rows="3"
                                              class="form-control">
                                        {{$section->subtitle2}}
                                    </textarea>
                                    </td>
                                    <td>
                                    <textarea name="article2" cols="20" rows="3" class="form-control">
                                             {{$section->article2}}
                                    </textarea>
                                    </td>

                                    <td>
                                    <span>
                                <img src="{{asset('programmer_section_images/'.$section->image)}}" alt="" width="50px" height="50px">
                                    </span>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input"
                                                       id="main_slide_image-{{$section->image}}" name="image">
                                                <label class="custom-file-label"
                                                       for="main_slide_image-{{$section->image}}">Choose file</label>
                                            </div>
                                        </div>
                                    </td>
                                    <input type="hidden" value="{{$section->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                            </form>
                            <button class="programmer_section_destroy btn btn-primary" data-id="{{$section->id}}">Ջնջել</button>

                            </td>
                            </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate4">
                    <ul class="pagination pagination-rounded">
                        {{ $sections->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection