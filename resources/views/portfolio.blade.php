@extends('header-footer')
@section('content')
    <div class="container-fluid" style="margin-top: 160px;margin-bottom: 200px" >
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="filters co mb-5">
                <div class="portfolioFilter clearfix button-group " data-filter-group="category">
                    <a href="#" data-filter="" class="is-cheked current button">Բոլոր աշխատանքները</a>
                    @foreach($categories as $category)
                    <a href="#" class="button" data-filter="{{".".$category->id}}">{{$category->name}}</a>

                        @endforeach
                </div>
                <div class="portfolioFilter1 clearfix button-group" data-filter-group="language">
                    <a href="#" data-filter="" class="is-cheked current button">Բոլոր լեզուները</a>
                    @foreach($cats as $cat)
                        <a href="#" class="button" data-filter="{{".".$cat->id."a"}}">{{$cat->name}}</a>
                    @endforeach
                </div>
                </div>
            </div>
            <div class="grid portfolioContainer mt-5">
                @foreach($works as $work )
                    <div class="mt-2 flip-container1 color-shape  @foreach($work->categories as $category) {{$category->id}} @endforeach  @foreach($work->cats as $cat) {{$cat->id."a"}} @endforeach" ontouchstart="this.classList.toggle('hover');">
                    <div class="flipper1">
                <div class="front1">
                    <img  src="{{asset('work_images/'.$work->image)}}" alt="image">
                </div>
                            <div class="back1 text-center">
                                <h4 class="mt-5">{{$work->article1}}</h4>
                                <p>{{$work->article2}}</p>
                                <a href="{{$work->link}}" class="btn btn-primary">Դիտել</a>
                            </div>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>




@endsection