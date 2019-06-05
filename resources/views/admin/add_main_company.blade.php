@extends('admin/layouts/header-footer')
@section('content')
    <div class="container-fluid">
        <div class="row offset-2">

            <div class="col-8">
                <h3 class="mt-3" style="color: #727CF5">Ավելացնել ընկերություն</h3>
                        <form action="{{route('companies_store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label for="companies_title">Հղում(Եթե հղումը բացակայում է նշել #)</label>
                            <input name="companies_title" id="companies_title" type="text"
                                      class="form-control">

                            <label for="companies_image">Լոգո</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="companies_image"
                                           name="companies_image">
                                    <label class="custom-file-label" for="companies_image">Ընտրել Լոգո</label>
                                </div>
                            </div>
                            <button class="btn btn-danger mt-1" type="submit" style="margin-left: 40%">Ավելացնել
                            </button>
                        </form>

            </div>
        </div>
    </div>
@endsection
