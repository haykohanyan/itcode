@extends('header-footer')
@section('content')

    <!-- inner page banner -->
    <section class="inner-page-banner courses mt-5">
        <div class="ourcourses text-center justify-content-center">
            <h1 class="text-uppercase pt-4 pb-3 tsh1">ՄԵՐ ԴԱՍԸՆԹԱՑՆԵՐԸ</h1>
            <p class="tsh s2">Մեր մասնագետները ձեզ չսովորելու հնարավորություն չեն տա</p>
        </div>
    </section>
    <!-- inner page banner -->

    <!-- breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('main.index')}}">Գլխավոր</a>
        </li>
        <li class="breadcrumb-item active">Դասընթացներ</li>
    </ol>
    <!-- //breadcrumb -->

    <!--//courses -->
    <div id="accordion" class="row info_of_courses" style="margin-top: 70px; margin-bottom: 70px;">
  @foreach($courses as $key=>$course)
            @if($key<4)
            <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 card">
                <h4 class="text-center">{{$course->title}}</h4>
                <div class="text-center">
                    <img src="{{asset('course_images/'.$course->image)}}"
                         style="width:177px; height:79px; max-width: 100%"
                         alt="{{$course->name}}">
                </div>
                <div class="info_of_courses courses4 text-center">

                    <h3 style="padding: 5px 0">{{$course->name}}</h3>


                    <p>
                        @foreach($course->rows as $row)
                            {{$row->text}}   <br>
                        @endforeach
                    </p></div>

                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$key}}"
                        aria-expanded="false" aria-controls="collapse{{$key}}">Կարդալ ավելին<span
                            class="fa fa-angle-right"></span></button>

                <div id="collapse{{$key}}" class="collapse child_collapse" data-parent="#accordion">
                    <div class="card-body">
                        @foreach($course->course_lists as $course_list)

                            <h5>{{$course_list->subtitle}}</h5>
                            <ol>
                                @foreach($course_list->sub_rows as $sub_row)

                                    <li>
                                       {{$sub_row->text}}
                                    </li>
                                @endforeach
                            </ol>
                        @endforeach
                    </div>
                </div>
            </div>
            @else
                <div class="col-lg-3 col-md-6 col-xs-12 col-sm-6 card">
                    <h4 class="text-center">{{$course->title}}</h4>
                    <div class="text-center">
                        <img src="{{asset('course_images/'.$course->image)}}"
                             style="width:177px; height:79px; max-width: 100%"
                             alt="{{$course->name}}">
                    </div>
                    <div class="info_of_courses courses4 text-center">

                        <h3 style="padding: 5px 0">{{$course->name}}</h3>


                        <p>
                            @foreach($course->rows as $row)
                                {{$row->text}}   <br>
                            @endforeach
                        </p></div>
                </div>
            @endif
        @endforeach
    </div>

    <section class="course_fix_img">
        <div class="discount_part text-center">
            <h1>ԶԵՂՉԱՅԻՆ ՀԱՄԱԿԱՐԳ</h1>
            <p>Սովորի՛ր և կխնայես գումարդ</p>
        </div>
    </section>
    <!-- gallery -->
    <section class="gallery agile py-5">
        <div class="container-fluid py-lg-5">
            <div class="agile_gallery_grids row w3-agile">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-sm-5 mb-3 team_grid1">
                    <h1 class="heading sm-head">Մեր դասընթացների առօրյան</h1>
                    <p   style="text-align: justify;">Ուսուցումը գիտակցված գործընթաց է։ Այս դեպքում ուսանողի կողմից․ սակայն դա չի նշանակում, որ մեր
                        դասավանդման մեթոդները միայն սովորելու պահանջով են պայմանավորված։ Մենք ձգտում ենք ուսանողի առօրյան
                        դարձնել առավել բովանդակալից և հետաքրքիր, ինչու չէ, նաև ուրախ․․․</p>
                    <p class="second_para"></p>
                </div>
                <ul class="clearfix demo col-lg-8 co-12">
                    @foreach($courses_dailies as $courses_daily)
                        <li style="margin-left: 36px;margin-top: 36px;">
                            <div class="gallery-grid1">
                                <img src="{{asset('courses_daily_images/'.$courses_daily->image)}}"
                                     alt=" {{$courses_daily->title}}" class="img-fluid"/>
                                <div class="p-mask">
                                    <h4>{{$courses_daily->title}}</h4>
                                    <p>{{$courses_daily->article}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- //gallery -->

@endsection
