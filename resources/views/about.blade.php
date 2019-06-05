@extends('header-footer')
@section('content')

    <!-- inner page banner -->
    {{--<section class="inner-page-banner">--}}

    {{--</section>--}}
    <!-- inner page banner -->

    <!-- breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{route('main.index')}}">Գլխավոր</a>
        </li>
        <li class="breadcrumb-item active">Մեր մասին</li>
    </ol>
    <!-- //breadcrumb -->

    <!-- About -->
    <section class="about py-5 mt-5 margtop1">
        <div class="container-fluid py-lg-5 py-3">
            <div class="row about_grids">
                <div class="col-lg-4 col-md-6 team_grid1">
                    <h3 class="heading text-uppercase  sm-head" style="margin-top: 0%;margin-left:5px">ՄԵՐ ՄԱՍԻՆ</h3>
                    <p   style="text-align: left;max-width: 569px;margin-top: 24px;">ԱՅ ԹԻ ԿՈԴ ուսումնական կենտրոնը համեմատաբար երիտասարդ է, հիմնադրվել է 2018թ-ի սկզբին: Չնայած
                        կենտրոնը նորեկ է, բայց արդեն իսկ ունի բարձր վարկանիշ և կայուն գործընկերներ ծրագրավորման
                        ասպարեզում: Հագեցված ուսումնական ծրագրի, գործնական և տնային առաջադրանքների, դասընթացների փուլերի
                        ավարտական քննական թեստերի միջոցով մեր մասնագետները ուսանողների մոտ ապահովում են ծրագրավորման
                        վերաբերյալ որակյալ գիտելիքներ: Սեփական գիտելիքների և դասավանդման որակի կատարելագործման պահանջը
                        մշտապես դրված է կենտրոնի մասնագետների առջև: Այդ ամենի վեջնական նպատակն է որակյալ
                        ծրագրավորողներով ՀՀ զարգացող ՏՏ աշխատաշուկան և մեր ընկերությունները ապահովելը: Այդ նպատակով է
                        ընկերությունը անվճար պրակտիկայի, իսկ հետագայում աշխատանքի հնարավորություն ընդձեռնում իր
                        ուսանողներին:</p>
                </div>
                <div class="col-lg-3 col-md-6 about_img mt-md-0 mt-5 " style="margin-top: 87px!important;">
                    <div class="about_image">
                        <img src="{{asset('images/60.jpg')}}" alt="" class="img-fluid1">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 about-right mt-lg-0 mt-5 pl-lg-5">
                    <div id="horizontalTab">
                        <ul class="resp-tabs-list"  style="margin-left: 16px;">
                            @foreach($about_abouts as $key=>$about_about)
                                    <li><h3>{{$about_about->title}}</h3></li>
                            @endforeach
                        </ul>
                        <div class="resp-tabs-container">
                            @foreach($about_abouts as $key => $about_about)
                                <div class={{"tab".($key+1)}}>
                                        <h4 style="margin-left: 16px;">{{$about_about->subtitle}}</h4>
                                        <br>
                                        <p style="margin-left:1em;"> {{$about_about->article}}</p>
                                       
                                        <br>
                                    @if($key==0)
                                    <a href="{{route('main.information')}}">Կարդալ ավելին</a>
                                    @elseif($key==1)
                                        <a href="{{route('main.courses')}}">Կարդալ ավելին</a>
                                    @endif

                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- //About -->
    <section class="stats_test py-5 container-fluid mt-5">
    </section>

    <!-- Blog bottom -->
    <section class="gallery agile py-5">
        <div class="container-fluid py-lg-5">
            <div class="agile_gallery_grids row w3-agile">
                <div class="col-lg-4 col-md-12 mb-lg-0 mb-sm-5 mb-3 team_grid1">
                    <h1 class="heading sm-head">Մեր առօրյան</h1>
                    <p   style="text-align: left;">Դասընթացները համարյա ամբողջությամբ լցնում են մեր օրը, սակայն այնուամենայնիվ մենք 
                    ունենում ենք ազատ ժամանակ ինքներս մեր վրա աշխատելու, միասին միջոցառումներ կազմակերպելու կամ ուղղակի մեր օրը տոնական տրամադրությամբ լցնելու համար․․․</p>
                    <p class="second_para"></p>
                </div>
                <ul class="clearfix demo col-lg-8 co-12">
                    @foreach($about_dailies as $about_daily)
                        <li style="    margin-left: 36px;margin-top: 36px;">
                            <div class="gallery-grid1">
                                <img src="{{asset('about_daily_images/'.$about_daily->image)}}"
                                     alt=" {{$about_daily->title}}" class="img-fluid"/>
                                <div class="p-mask">
                                    <h4>{{$about_daily->title}}</h4>
                                    <p>{{$about_daily->article}}</p>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- //gallery -->

    <section class="partners py-5">
        <div class="container">
            <h3 class="partner_company" style="margin-top: -18px;margin-bottom: 23px;">Մեր Շրջանավարտները</h3>
            <div class="asd con-hov">
                @foreach($about_students as $about_student)
                    <div class="asd-slide justify-content-between">
                        <div class="gallery-grid1">
                        <img src="{{asset('students_images/'.$about_student->image)}}" style="box-shadow:0 0 12px #000" alt="" width="100%"  class="img-fluid mwi">
                        <div class="p-mask" style="  max-width: 184px!important;">
                            <h4>{{$about_student->title1}}</h4>
                            <p>{{$about_student->title2}}</p>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
