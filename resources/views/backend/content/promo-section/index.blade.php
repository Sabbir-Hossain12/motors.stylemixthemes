@extends('backend.master')

@section('maincontent')
    @section('title')
        {{ env('APP_NAME') }}- Promo Section
    @endsection

    <div class="px-4 pt-4 container-fluid">
        <div class="row">

            <div class="mb-4 col-sm-12 col-md-12 col-xl-12">
                <div class="p-4 rounded bg-secondary h-100">
                    <h2 class="mb-4" style="text-align: center;color:red">Promo Section</h2>
                    @if(isset($promoSection))
                        <form action="{{ route('admin.promo-sections.update', $promoSection->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{ route('admin.promo-sections.store') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="title_1"
                                                       value="{{ $promoSection->title_1 ?? '' }}"
                                                       id="floatingInput" required>
                                                <label for="floatingInput">Title 1</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="title_2"
                                                       value="{{ $promoSection->title_2 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Title 2</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="icon_1"
                                                       value="{{ $promoSection->icon_1 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Icon 1</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="icon_2"
                                                       value="{{ $promoSection->icon_2 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Icon 2</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" name="desc_1" id="floatingTextarea"
                                                          style="height: 100px;">{{ $promoSection->desc_1 ?? '' }}</textarea>
                                                <label for="floatingTextarea">Description 1</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" name="desc_2" id="floatingTextarea"
                                                          style="height: 100px;">{{ $promoSection->desc_2 ?? '' }}</textarea>
                                                <label for="floatingTextarea">Description 2</label>
                                            </div>

                                            <div class="mb-3">
                                                <input class="form-control form-control-lg bg-dark" name="bg_img"
                                                       id="favicon"
                                                       type="file">
                                            </div>

                                            @if(isset($promoSection->bg_img))
                                                <div class="m-3 ms-0"
                                                     style="text-align: center;height: 85px;margin-top:50px !important">
                                                    <h4 style="width:30%;float: left;text-align: left;">Background
                                                        : </h4>
                                                    <img src="{{ asset($promoSection->bg_img) }}" alt="" srcset=""
                                                         style="max-height: 100px;">
                                                </div>
                                            @endif


                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary btn-lg w-100">Update</button>
                                        </div>

                                    </div>
                                </form>
                </div>
            </div>


        </div>
    </div>

@endsection
