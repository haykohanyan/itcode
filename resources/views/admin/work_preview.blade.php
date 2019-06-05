@extends('admin/layouts/header-footer')
@section('content')

    <div class="container">
        <div class="row ">
            <div class="col-md-8 offset-2 ">
                <h3>Աշխատանք</h3>
                <form action="{{route('work_update')}}" method="post" enctype="multipart/form-data" >
                    @csrf

                    <label for="work_article1">Աշխատանքի անվանում</label>
                    <textarea name="work_article1" id="work_article1" cols="20" rows="2"
                              class="form-control">{{$work->article1}}</textarea>
                    <label for="work_article2">Աշխատանքի բնութագիր(պարտադիր չէ)</label>
                    <textarea name="work_article2" id="work_article2" cols="20" rows="2"
                              class="form-control">{{$work->article2}}</textarea>
                    <label for="work_image">Նկար</label>
                        <img src="{{asset('work_images/'.$work->image)}}" alt="" width="150px" height="150px"
                             class="mt-3 ml-5 mb-5">
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="work_image" name="work_image">
                            <label class="custom-file-label" for="work_image">Ընտրել նկար</label>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{$work->id}}">
                    <label for="work_link">Հղում(պարտադիր չէ)</label>
                    <textarea name="work_link" id="work_link" cols="20" rows="2"
                              class="form-control">{{$work->link}}</textarea>
                    <label>Ջնջել կատեգորիա</label>
                    <br>
                    @foreach($work->categories as $category)
                    <span>{{$category->name}}</span>
                            <a class="btn btn-danger mt-1 mb-2" href="/admin/wc_destroy/{{$work->id}}/{{$category->id}}" style="margin-left: 40%" >Ջնջել
                            </a>
                        <br>
                        @endforeach
                    <label for="work_category">Ավելացնել կատեգորիա</label>
                    <select name="work_categories[]" id="work_category" class="form-control select2-multiple"   data-toggle="select2"  multiple>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                      <label>Ջնջել լեզու</label>
                    <br>
                    @foreach($work->cats as $cat)
                        <span>{{$cat->name}}</span>
                        <a class="btn btn-danger mt-1 mb-2" href="/admin/wcat_destroy/{{$work->id}}/{{$cat->id}}" style="margin-left: 40%" >Ջնջել
                        </a>
                        <br>
                    @endforeach
                    <label for="work_cat">Ավելացնել լեզու</label>
                    <select name="work_cats[]" id="work_cat" class="form-control select2-multiple"   data-toggle="select2"  multiple>
                        @foreach($cats as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                        @endforeach
                    </select>
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Փոփոխել
                    </button>
                </form>
                <form action="{{route('work_destroy')}}"  method="post" class="text-center" style="padding: 5px 0;margin-left:-5%">
                    @csrf
                    <button class=" btn btn-primary" type="submit">Ջնջել</button>
                    <input type="hidden" value="{{$work->id}}" name="id">
                </form>

            </div>
        </div>
    </div>




@endsection
