@extends('header-footer')
@section('content')
    <div class="banner-silder" style="margin-top: 77px;">
        <div id="JiSlider" class="jislider">
            <ul>
                @foreach($main_slides as $key=>$main_slide)
                    @if($key==0)
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top4" style="background: url({{asset('main_slide_images/'.$main_slide->image)}}) no-repeat center center ;background-size: cover;">
                                <div class="bs-slider-overlay">
                                    <div class="container">
                                        <!-- Slide Text Layer -->
                                        <div class="w3l-slide-text text-center">
                                            <h1 class="text-uppercase pt-4 pb-3" id="h1">{{$main_slide->title}}</h1>
                                            <p class="heading_bottom mb-4 oth " id="p1" >{{$main_slide->article_1}}</p>
                                            <p class="p1">{{$main_slide->article_2}}</p>
                                            <br>
                                            <a href="{{route('main.courses')}}" class="button-style1">Տես ավելին</a>
                                            <a href="#" class="button-style1 read1">Կարդա ավելին</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @elseif($key%3==1)
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top1"  style="background: url({{asset('main_slide_images/'.$main_slide->image)}}) no-repeat  center center ;background-size: cover;">
                                <div class="bs-slider-overlay">
                                    <div class="container">
                                        <!-- Slide Text Layer -->
                                        <div class="w3l-slide-text text-center">
                                            <h2 class="text-uppercase pt-4 pb-3 h2_free_practic"  >{{$main_slide->title}}</h2>
                                            <p class="heading_bottom mb-4 p_free_practic fd">{{$main_slide->article_1}}</p>
                                            <p class="p3">{{$main_slide->article_2}}</p>
                                            <br>
                                            <a href="{{route('main.courses')}}" class="button-style">Տես ավելին</a>
                                            <a href="#" class="button-style1 read3">Կարդա ավելին</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @elseif($key%3==2)
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top2" style="background: url({{asset('main_slide_images/'.$main_slide->image)}}) no-repeat center center ;background-size: cover;">
                                <div class="bs-slider-overlay">
                                    <div class="container"><!-- Slide Text Layer -->
                                        <div class="w3l-slide-text text-center work">
                                            <h3 class="text-uppercase pt-4 pb-3 h3_work">{{$main_slide->title}}</h3>
                                            <p class="heading_bottom mb-4 p_work">{{$main_slide->article_1}}</p>
                                            <p class="p4">{{$main_slide->article_2}}</p>
                                            <br>
                                            <a href="{{route('main.courses')}}" class="button-style1">Տես ավելին</a>
                                            <a href="#" class="button-style1 read4">Կարդա ավելին</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @else
                        <li>
                            <div class="w3layouts-banner-top w3layouts-banner-top1"  style="background: url({{asset('main_slide_images/'.$main_slide->image)}}) no-repeat  center center ;background-size: cover;">
                                <div class="bs-slider-overlay">
                                    <div class="container">
                                        <!-- Slide Text Layer -->
                                        <div class="w3l-slide-text text-center">
                                            <h2 class="text-uppercase pt-4 pb-3 h3_2"  >{{$main_slide->title}}</h2>
                                            <p class="heading_bottom mb-4 pp fd">{{$main_slide->article_1}}</p>
                                            <p class="p2">{{$main_slide->article_2}}</p>
                                            <br>
                                            <a href="{{route('main.courses')}}" class="button-style">Տես ավելին</a>
                                            <a href="#" class="button-style1 read2">Կարդա ավելին</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
    <!-- //banner slider -->

    <!-- About -->
    <section class="about py-5  margtop">
        <div class="container-fluid pt-lg-5 pt-3" style="padding-bottom: 5rem !important;">
            <div class="row about_grids">
                <div class="col-lg-4 col-md-6 team_grid1">
                    <h3 class="heading text-uppercase sm-head" style="margin-top: 0%;margin-left:5px">ԻՆՉՈՒ՞ ՄԵՆՔ</h3>

                    <p class="second_para"  style="text-align: left;max-width: 569px;margin-top: 24px;">ԱՅ ԹԻ ԿՈԴ ուսումնական կենտրոնում ծրագրավորում սովորելու համար ձեզանից
                        նախնական գիտելիքներ չեն պահանջվում: Ծրագրավորման դասընթացի ծրագրով նախատեսված նյութը յուրացնելու
                        համար ուսանողներին տրվում են բազմաթիվ գործնական առաջադրանքներ, խնդիրներ, հավելյալ
                        գրականություն և նյութեր։ Բացի այդ,  IT Code վեբ ծրագրավորման ուսումնական կենտրոնի
                        մասնագետները հետևողականություն են ցուցաբերում, որպեսզի ծրագրավորման դասընթացների արդյունքում  ուսանողները ձեռք բերեն բավարար
                        գիտելիքներ, դառնան մասնագետ և ստանան աշխատանք։</p>
                </div>
                <div class="col-lg-3 col-md-6 about_img mt-md-0 mt-5" style="margin-top: 87px!important;">
                    <div class="about_image">
                        <img src="{{asset('images/c700x420.jpg')}}" alt="" class="img-fluid1">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 about-right mt-lg-0 mt-5 pl-lg-5">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list" style="margin-left: 16px;">
                            @foreach($main_whies as $main_why)
                            <li><h3>{{$main_why->title}}</h3></li>
                           @endforeach
                        </ul>
                        <div class="resp-tabs-container">
                            @foreach($main_whies as $key => $main_why)
                            <div class={{"tab".($key+1)}}>
                                <br>
                                <p style="margin-left:1em;">{{$main_why->article}}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //About -->

    <!-- services -->
    <section class="services">
        <div class="service-overlay">
            <div class="container-fluid py-2">
                <div class="row service_grids slid" style="margin-top:30px;margin-bottom:30px">
                    @foreach($courses as $course)
                    <div class="col mb-lg-0 mb-5 ser_grid1 icon1">
                        <div>
                            <img src="{{asset('course_images/'.$course->image)}}" style="width: 190px; height: 78px;" alt="{{$course->name}}">
                        </div>
                        <h3>{{$course->name}}</h3>
                        <div class="info_of_courses">
                            <p>
                                @foreach($course->rows as $row)
                                    {{$row->text}}   <br>
                                @endforeach
                            </p>
                        </div>
                        <a href="{{route('main.courses')}}">Կարդալ ավելին <span class="fa fa-angle-right"></span></a>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- //services -->

    <!-- Team -->
    <section class="team py-5 my-lg-5 my-3">
        <div class="container-fluid ">
            <div class="row team_grids justify-content-lg-start mb-3">
                <div class="col-lg-12 col-12 mb-lg-0 mb-4 team_grid1">
                    <h3 class="heading text- aft" style="margin-bottom: 85px;margin-top: 17px;">Մեր ստեղծարար թիմը...</h3>
                </div>
                </div>
            <div class="row justify-content-start" style="margin-bottom: 31px;">
            @foreach($main_teams as $key=>$main_team)
                    <div class="col-lg-2 col-md-3 col-6 w3l_team_grid">
                        <div class="flip-container" >
                            <div class="flipper">
                                <div class="front">
                                    <div class="view view-second">
                                        <img src="{{asset('main_team_images/'.$main_team->image)}}" alt="{{$main_team->title}}"
                                             class="img-fluid h226"/>
                                    </div>
                                </div>
                                <div class=" back">
                                        @if($key==1)
                                        <h4 style="margin-top: 30px!important;">
                                            {{$main_team->title}}
                                        </h4>
                                    @else
                                    <h4>
                                        {{$main_team->title}}
                                    </h4>
                                    @endif
                                    <p style="padding: 0 30px;
                                            @if($key==0)
                                            font-size:1em;
                                            @endif
                                            "
                                    >
                                        {{$main_team->article}}
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- //Team -->

    <!-- Testimonials -->
    <section class="testimonials py-5">
        <div class="container-fluid py-lg-5">
            <div class="row test-grids" style="margin-top: 47px;margin-bottom: 11px;">
                <!-- testimonials -->
                <div class=" col-lg-8 clients">
                    <div class="sreen-gallery-cursual">
                        <div id="owl-demo" class="owl-carousel">
                            @foreach($main_comments as $main_comment)
                                <div class="item-owl">
                                    <div class="test-image">
                                        <img src="{{asset('main_comment_images/'.$main_comment->image)}}"
                                             alt="{{$main_comment->title}} "
                                             class="img-fluid">
                                    </div>
                                    <div class="test-review">
                                        <h5>{{$main_comment->title}}</h5>
                                        <p>
                                    <span>
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </span>
                                            {{$main_comment->article}}
                                            <span>
                                        <i class="fa fa-quote-right" aria-hidden="true"></i>
                                    </span>
                                        </p>
                                        <p style="float: right;color: #fff"> {{$main_comment->from}}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <!--//screen-gallery-->

                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials -->

    <section class="partners py-5  my-5">
        <div class="container">
            <h3 class="partner_company  my-3">Մեզ հետ համագործակցող ընկերություններ</h3>
            <div class="bbo con-hov my-5">
@foreach($companies as $company)
                <div class="bbo-slide">
                    <a href="{{$company->title}}" target="_blank"><img src="{{asset('companies_images/'.$company->image)}}"
                                    alt="" width="100%" class="marg"></a>
                </div>
    @endforeach
            </div>
        </div>
    </section>
    <!-- //Partners -->
@endsection
