@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">

            <div class="col-8">
                <h3 class="mt-5" style="color:#727CF5">Ավելացնել լեզու</h3>
                <form action="{{route('cat_store')}}" method="post">
                    @csrf
                    <label for="name">Անվանում</label>
                    <input type="text" name="name" id="name"
                           class="form-control">
                    <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection