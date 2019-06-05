@extends('header-footer')
@section('content')
    <div class="container-fluide">
        <section class="info_page_image">

        </section>
    </div>
    <!--==========information ==========-->
    <br><br>
    <div class="container">
        @foreach($sections as $key=> $section)
            <div class="row"
                 @if($key%2==0)
                 data-aos="fade-right"
                 @else
                 data-aos="fade-right"
                 @endif
                 data-aos-offset="100"
                 data-aos-easing="ease-in-sine"
                 data-aos-duration="800">
                @if($key%2==0)
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <img src="{{asset('programmer_section_images/'.$section->image)}}" style="max-width: 100%" alt="$section->image">
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h2 style=" font-weight: 700;font-family: Hind, sans-serif;color: #515769;line-height: 1.4;margin: 0 0 15px;font-size: 30px;">{{$section->title}}</h2>
                    <h3 style="font-weight: 700;font-family: Hind, sans-serif; color: #515769;line-height: 1.4;margin: 0 0 15px;font-size: 22px;">{{$section->subtitle1}}</h3>
                    <p>{{$section->article1}}</p>
                    <h3 style="font-weight: 700;font-family: Hind, sans-serif; color: #515769;line-height: 1.4;margin: 0 0 15px;font-size: 22px;">{{$section->subtitle2}}</h3>
                    <p>{{$section->article2}}</p>
                </div>
                @else
                  <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="{{asset('programmer_section_images/'.$section->image)}}" style="max-width: 100%" alt="$section->image">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 style=" font-weight: 700;font-family: Hind, sans-serif;color: #515769;line-height: 1.4;margin: 0 0 15px;font-size: 30px;">{{$section->title}}</h2>
                        <h3 style="font-weight: 700;font-family: Hind, sans-serif; color: #515769;line-height: 1.4;margin: 0 0 15px;font-size: 22px;">{{$section->subtitle1}}</h3>
                        <p>{{$section->article1}}</p>
                        <h3 style="font-weight: 700;font-family: Hind, sans-serif; color: #515769;line-height: 1.4;margin: 0 0 15px;font-size: 22px;">{{$section->subtitle2}}</h3>
                        <p>{{$section->article2}}</p>
                    </div>
                  
                @endif
            </div>
            <br><br>
        @endforeach

    </div>

    <div class="container-fluide down_img">
        <div class="container">
            <div class="programming_world text-center">
                <h4 class="tsh st5">
                    Ծրագրավորման աշխարհը անսահմանափակ հնարավորությունների աշխարհ է, հարկավոր է միայն սիրել այն
                    ճանապարհը, որը ընտրել եք...
                </h4>
            </div>
        </div>
    </div>
    <!--========== end information ==========-->

    <!-- End Service -->
    <section class="gallery-bottom py-5  footer_fo_info">
        <div class="container">
            <div class="row partner-grids">
                <div class="col-md-9">
                    <h2>Որոշեցի՞ք դառնալ ծրագրավորող</h2>
                    <br>
                    <p>Գրանցվեք Այ Թի Կոդ ծրագրավորման ուսումնական կենտրոնի դասընթացներին</p>
                </div>
                <div class="col-md-3 text-align">
                    <a href="{{route('main.contact')}}">Գրանցվել</a>
                </div>
            </div>
        </div>
    </section>


@endsection
