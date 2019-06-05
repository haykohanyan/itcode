@extends('admin/layouts/header-footer')
@section('content')

    <div class="container-fluid">
        <h2>Մեր Աշխատանքները</h2>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3">Աշխատանքներ</h3>
                <a href="{{route('add_work')}}">
                    <button class="btn btn-primary">Ավելացնել աշխատանք</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անուն</th>
                            <th scope="col">Բնութագիր</th>
                            <th scope="col">Դիտել</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($works as $work)
                            @csrf
                            <tr>
                                <td>
                                  <span>
                                      {{$work->article1}}
                                  </span>
                                </td>
                                <td>
                                    <span>
                                      {{$work->article2}}
                                     </span>
                                </td>
                                <td><a href="{{route('work_preview',$work->id)}}">
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
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $works->links() }}
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3">Կատեգորիաներ</h3>
                <a href="{{route('add_category')}}">
                    <button class="btn btn-primary">Ավելացնել կատեգորիա</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անվանում</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <form action="{{route('category_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                    <input type="text" name="name" class="form-control" value=" {{$category->name}}">
                                    </td>
                                    <input type="hidden" value="{{$category->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>

                            <td>
                                <form action="{{route('category_destroy')}}"  method="post">
                                    @csrf
                                <button class=" btn btn-primary" type="submit">Ջնջել</button>
                                <input type="hidden" value="{{$category->id}}" name="id">
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $categories->links() }}
                    </ul>
                </div>
            </div>
        </div>
           <div class="row">
            <div class="col-12">
                <h3 class="page-title mt-3">Ծրագրավորման լեզուներ</h3>
                <a href="{{route('add_cat')}}">
                    <button class="btn btn-primary">Ավելացնել լեզու</button>
                </a>
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                        <tr>
                            <th scope="col">Անվանում</th>
                            <th scope="col">Փոփոխել</th>
                            <th scope="col">Ջնջել</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cats as $cat)
                            <form action="{{route('cat_update')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <tr>
                                    <td>
                                        <input type="text" name="name" class="form-control" value=" {{$cat->name}}">
                                    </td>
                                    <input type="hidden" value="{{$cat->id}}" name="id">
                                    <td>
                                        <button class="btn btn-danger" type="submit">Փոփոխել</button>
                                    </td>
                            </form>

                            <td>
                                <form action="{{route('cat_destroy')}}"  method="post">
                                    @csrf
                                    <button class=" btn btn-primary" type="submit">Ջնջել</button>
                                    <input type="hidden" value="{{$cat->id}}" name="id">
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="dataTables_paginate paging_simple_numbers"
                     id="basic-datatable_paginate">
                    <ul class="pagination pagination-rounded">
                        {{ $cats->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>



@endsection