@extends('header-footer')
@section('content')

    <!-- inner page banner -->
<section class="inner-page-banner ">

</section>
<!-- inner page banner -->

<!-- breadcrumb -->
<ol class="breadcrumb ">
    <li class="breadcrumb-item">
        <a href="{{route('main.index')}}">Գլխավոր</a>
    </li>
    <li class="breadcrumb-item active">Հետադարձ Կապ</li>
</ol>
<!-- //breadcrumb -->

<!-- contact -->
<section class="contact py-5 mt-5" style="margin-top: 70px!important;margin-bottom:70px">
    <div class="container-fluid pt-lg-5">
        <div class="row contact-grids">
            <div class="col-lg-5 col-md-6 col-12 mb-lg-0 mb-sm-4 mb-3 team_grid1">
                <h1 class="heading text-uppercase sm-head">Ինչպես կապվել մեզ հետ․․․</h1>
                <p style="text-align: left;padding-right: 1.5em;">Որպես կանոն առավել արագ տարբերակը դա հեռախոսազանգն է մեր հեռախոսահամարներին, սակայն եթե դուք նախընտրում եք հաղորդագրությունների միջոցով շփվել, կամ որևէ գրավոր  առաջարկ անել մեզ, ապա լրացրեք ձեր տվյալները պահանջվող դաշտերում, և գրեք ձեր հաղորդագրությունը կամ նամակը համապատասխան դաշտում, որից հետո մենք կկապվենք ձեզ հետ ձեր նախընտրած տարբերակով։</p>
                <p class="second_para"></p>
            </div>
            <div class="col-lg-7 col-md-6 col-12 contact-form p-5">
                <h4 class="heading">Ուղարկեք մեզ նամակ</h4>
                <form action="{{route('email')}}" method="post">
                    @csrf
                    <input type="text" placeholder="Անուն Ազգանուն" name="name"/>
                    <input type="email" placeholder="Էլեկտրոնային Հասցե" name="email" />
                    <input type="text" placeholder="Հեռախոսահամար" name="phone"/>
                    <textarea placeholder="Հաղորդագրություն" name="text"></textarea>
                    <div class="submit1">
                        <input type="submit" value="Ուղարկել">
                    </div>
                </form>
        </div>

        </div>
    </div>
</section>
<!-- //contact -->

@endsection
