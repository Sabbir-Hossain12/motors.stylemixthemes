@extends('backend.master')

@section('maincontent')
    @section('title')
        {{ env('APP_NAME') }}- Why Chose Us Section
    @endsection

    <div class="px-4 pt-4 container-fluid">
        <div class="row">

            <div class="mb-4 col-sm-12 col-md-12 col-xl-12">
                <div class="p-4 rounded bg-secondary h-100">
                    <h2 class="mb-4" style="text-align: center;color:red">Why Chose Us Section</h2>
                    @if(isset($whyChoseUs))
                        <form action="{{ route('admin.why-chose-us.update', $whyChoseUs->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @method('PUT')
                            @else
                                <form action="{{ route('admin.why-chose-us.store') }}" method="POST"
                                      enctype="multipart/form-data">
                                    @endif
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="title_1"
                                                       value="{{ $whyChoseUs->title_1 ?? '' }}"
                                                       id="floatingInput" required>
                                                <label for="floatingInput">Title 1</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="title_2"
                                                       value="{{ $whyChoseUs->title_2 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Title 2</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="title_3"
                                                       value="{{ $whyChoseUs->title_3 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Title 3</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="title_4"
                                                       value="{{ $whyChoseUs->title_4 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Title 4</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="icon_1"
                                                       value="{{ $whyChoseUs->icon_1 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Icon 1</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="icon_2"
                                                       value="{{ $whyChoseUs->icon_2 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Icon 2</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="icon_3"
                                                       value="{{ $whyChoseUs->icon_3 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Icon 3</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <input type="text" class="form-control" name="icon_4"
                                                       value="{{ $whyChoseUs->icon_4 ?? '' }}"
                                                       id="floatingInput">
                                                <label for="floatingInput">Icon 4</label>
                                            </div>



                                        </div>
                                        <div class="col-lg-6">


                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" name="desc_1" id="floatingTextarea"
                                                          style="height: 100px;">{{ $whyChoseUs->desc_1 ?? '' }}</textarea>
                                                <label for="floatingTextarea">Description 1</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" name="desc_2" id="floatingTextarea"
                                                          style="height: 100px;">{{ $whyChoseUs->desc_2 ?? '' }}</textarea>
                                                <label for="floatingTextarea">Description 2</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" name="desc_3" id="floatingTextarea"
                                                          style="height: 100px;">{{ $whyChoseUs->desc_3 ?? '' }}</textarea>
                                                <label for="floatingTextarea">Description 3</label>
                                            </div>

                                            <div class="mb-3 form-floating">
                                                <textarea class="form-control" name="desc_4" id="floatingTextarea"
                                                          style="height: 100px;">{{ $whyChoseUs->desc_4 ?? '' }}</textarea>
                                                <label for="floatingTextarea">Description 4</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <button type="submit" class="btn btn-primary btn-lg w-100">Update</button>
                                        </div>

                                    </div>
                                </form>
                        </form>
                </div>
            </div>


        </div>
    </div>

@endsection
