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
                    @if(isset($hero))
                        <form action="{{ route('admin.heroes.update', $hero->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{ route('admin.heroes.store') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="title"
                                                       value="{{ $hero->title ?? '' }}"
                                                       id="floatingInput" required>
                                                <label for="floatingInput">Title</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control ckeditor" name="content" id="floatingTextarea"
                                                          style="height: 100px;">{{ $hero->content ?? '' }}</textarea>
                                                <label for="floatingTextarea">Description</label>
                                            </div>

                                            <div class="mb-3">
                                                <input class="form-control form-control-lg bg-dark" name="bg_img"
                                                       id="favicon"
                                                       type="file">
                                            </div>

                                            @if(isset($hero->bg_img))
                                                <div class="m-3 ms-0"
                                                     style="text-align: center;height: 85px;margin-top:50px !important">
                                                    <h4 style="width:30%;float: left;text-align: left;">Background
                                                        : </h4>
                                                    <img src="{{ asset($hero->bg_img) }}" alt="" srcset=""
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
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

@endsection
