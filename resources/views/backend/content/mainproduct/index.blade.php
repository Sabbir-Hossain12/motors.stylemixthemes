@extends('backend.master')

@section('maincontent')
@section('title')
    {{ env('APP_NAME') }}- Main Products
@endsection

<style>
    div#roleinfo_length {
        color: red;
    }
    
        div#productinfo_filter {
        display:none;
}

    div#roleinfo_filter {
        color: red;
    }

    div#roleinfo_info {
        color: red;
    }
</style>
{{-- summernote --}}
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<div class="container-fluid pt-4 px-4">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-xl-12">
            <div class="h-100 bg-secondary rounded p-4 pb-0">
                <div class="d-flex align-items-center justify-content-between" style="width: 50%;float:left;">
                    <h6 class="mb-0">Varient Products List</h6>
                </div>
                <div class="" style="width: 50%;float:left;">
                    <a target="_blank" href="{{ route('mainproducts.create') }}" class="btn btn-primary m-2"
                        style="float: right"> + Create Varient Product</a>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="mt-4 mb-4">
                            <lable>Category</lable>
                            <select name="category_id" id="category_id" class="form-select form-select-lg mb-3"
                                aria-label=".form-select-lg example" style="background: white;">
                                <option value="all">All</option>
                                @forelse (App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}" @if(Session::get('category_id')==$category->id) selected @endif>{{ $category->category_name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="mt-4 mb-4">
                            <lable>Search By Code</lable>
                            <input type="text" name="code" id="code" class="form-control">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <div class="data-tables">
                    <table class="table table-dark" id="productinfo" width="100%" style="text-align: center;">
                        <thead class="thead-light">
                            <tr>
                                <th>SL</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Position</th>
                                <th>Promotion</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>


<script>
    $(document).ready(function() {
        var token = $("input[name='_token']").val();

        var productinfo = $('#productinfo').DataTable({
            order: [
                [0, 'desc']
            ],
            processing: true,
            serverSide: true,
            pageLength: 50,
             ajax: {
                url: '{!! route('admin.mainproduct.data') !!}',
                data:{
                    category_id: function() {
                        return $('#category_id').val()
                    },
                    code: function() {
                        return $('#code').val()
                    }
                },
            },
            columns: [{
                    data: 'id'
                }, {
                    data: 'ProductImage',
                    name: 'ProductImage',
                    render: function(data, type, full, meta) {
                        return "<img src=" + data + " height=\"40\" alt='No Image'/>";
                    }
                },
                {
                    data: 'ProductName'
                },
                {
                    data: 'category'
                },
                {
                    data: 'position'
                },
                {
                    "data": null,
                    render: function(data) {

                        if (data.top_rated == 1) {
                            return '<button type="button" class="btn btn-success btn-sm btn-status" data-status="0" id="productratedstatusBtn" data-id="' +
                                data.id + '">Active</button>';
                        } else {
                            return '<button type="button" class="btn btn-warning btn-sm btn-status" data-status="1" id="productratedstatusBtn" data-id="' +
                                data.id + '" >Inactive</button>';
                        }


                    }
                },
                {
                    "data": null,
                    render: function(data) {

                        if (data.status == 'Active') {
                            return '<button type="button" class="btn btn-success btn-sm btn-status" data-status="Inactive" id="productstatusBtn" data-id="' +
                                data.id + '">Active</button>';
                        } else {
                            return '<button type="button" class="btn btn-warning btn-sm btn-status" data-status="Active" id="productstatusBtn" data-id="' +
                                data.id + '" >Inactive</button>';
                        }


                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false,
                    searchable: false
                },

            ]
        });

        //add category

        $('#AddProduct').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                uploadUrl: '{{ route('admin.products.store') }}',
                processData: false,
                contentType: false,
                data: new FormData(this),

                success: function(data) {
                    $('#ProductName').val("");
                    $('#ProductSalePrice').val("");
                    $('#Discount').val("");
                    $('#ProductImage').val("");
                    $('#prevFile').html("src", '');
                    $('#PostImage').val("");
                    $('#prevFile').html("src", '');

                    swal({
                        title: "Success!",
                        icon: "success",
                    });
                    productinfo.ajax.reload();
                },
                error: function(error) {
                    console.log('error');
                }
            });
        });

        //edit category
        $(document).on('click', '#editProductBtn', function() {
            let productId = $(this).data('id');

            $.ajax({
                type: 'GET',
                url: 'products/' + productId + '/edit',

                success: function(data) {
                    $('#EditProduct').find('#product_id').val(data
                        .id);
                    $('#EditProduct').find('#ProductName').val(data
                        .ProductName);
                    $('#EditProduct').find('#youtube_embade').val(data.youtube_embade);
                    $('#EditProduct').find('#ProductSalePrice').val(data
                        .ProductSalePrice);
                    $('#EditProduct').find('#Discount').val(data
                        .Discount);
                    $('#EditProduct').find('#ProductRegularPrice').val(data
                        .ProductRegularPrice);
                    $('#EditProduct').find('#editcategory_id').val(data
                        .category_id);
                    $('#EditProduct').find('#brand_id').val(data
                        .brand_id);
                    $('#EditProduct').find('#editProductBreaf').val(data
                        .ProductBreaf);

                    $('#descriptionPro').html('');
                    $('#descriptionPro').append(
                        `<label for="ProductDetails">Product Description <span
                                class="text-danger">*</span></label>
                        <textarea class="form-control" id="editProductDetails" name="ProductDetails" rows="5">` +
                        data.ProductDetails + `</textarea>

                        <script type="text/javascript">
                        $(document).ready(function() {
                            $('#editProductDetails').summernote();
                            }); `);
                    $('#previmg').html('');
                    $('#previmg').append(`
                            <img src="../` + data.ProductImage + `" alt="" style="height: 80px" />
                        `);

                    $('#EditProduct').attr('data-id', data.id);

                    var subcat = data.subcategory_id;
                    $.ajax({
                        type: 'GET',
                        url: 'get/subcategory/' + data.category_id,

                        success: function(data) {

                            $('#EditProduct').find('#editsub_category_id').html(
                                '');

                            for (var i = 0; i < data.length; i++) {
                                if (data[i].id == subcat) {
                                    $('#EditProduct').find(
                                        '#editsub_category_id'
                                    ).append(` <option selected value="` +
                                        data[i].id + `">` + data[i]
                                        .sub_category_name + `</option>
                            `)
                                } else {
                                    $('#EditProduct').find(
                                            '#editsub_category_id')
                                        .append(`
                            <option value="` + data[i].id + `">` + data[i].sub_category_name + `</option>
                            `)
                                }
                            }
                        },
                        error: function(error) {
                            console.log('error');
                        }
                    });

                    var postImages = JSON.parse(data.PostImage);
                    var postImage = "";
                    $('#viewprevFile').html('');
                    postImages.forEach((i) => {
                        postImage += `<div class="postImg" style="width:25%;float:left;position:relative;">
                        <img src="../public/images/product/slider/` + i + `" alt="" id="previewImage"
                            style="border-radius: 10px;width:100%;padding:5px;">
                    </div>`;
                    });
                    $('#viewprevFile').html(postImage);



                },
                error: function(error) {
                    console.log('error');
                }


            });
        });

        $('#EditProduct').submit(function(e) {
            e.preventDefault();
            let productId = $('#product_id').val();

            $.ajax({
                type: 'POST',
                url: 'product/' + productId,
                processData: false,
                contentType: false,
                data: new FormData(this),

                success: function(data) {

                    if (data == 'error') {
                        toastr.error('Something wrong ! Please try again.');
                    }
                    $('#EditProduct').find('#product_id').val('');
                    $('#EditProduct').find('#ProductName').val('');
                    $('#EditProduct').find('#ProductSalePrice').val('');
                    $('#EditProduct').find('#Discount').val('');
                    $('#EditProduct').find('#editcategory_id').val('');
                    $('#EditProduct').find('#Discount').val('');
                    $('#EditProduct').find('#editProductBreaf').val('');
                    $('#descriptionPro').html('');
                    $('#previmg').html('');
                    $('#editsub_category_id').html('');
                    $('#EditProduct').find('#editsub_category_id').val('');
                    $('#viewprevFile').html('');
                    swal({
                        title: "Product updated !",
                        icon: "success",
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                    });
                    productinfo.ajax.reload();
                },
                error: function(error) {
                    console.log('error');
                }
            });
        });



        // status update
        
          $(document).on('click', '#updateposition', function() {
            let productId = $(this).data('id');
            let position = $('#pos'+productId).val();
            
            $.ajax({
                type: 'PUT',
                url: 'mainproduct/position-update',
                data: {
                    product_id: productId,
                    position: position,
                    '_token': token
                },

                success: function(data) {
                    $('.btn-position'+productId).css('background','Green');
                    $('.btn-position'+productId).css('color','white');
                    toastr.success('Position updated');
                },
                error: function(error) {
                    console.log('error');
                }

            });
        });

        $(document).on('click', '#productstatusBtn', function() {
            let productId = $(this).data('id');
            let productStatus = $(this).data('status');

            $.ajax({
                type: 'PUT',
                url: 'mainproduct/status',
                data: {
                    product_id: productId,
                    status: productStatus,
                    '_token': token
                },

                success: function(data) {
                    swal({
                        title: "Status updated !",
                        icon: "success",
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                    });
                    productinfo.ajax.reload();
                },
                error: function(error) {
                    console.log('error');
                }

            });
        });

        $(document).on('click', '#productratedstatusBtn', function() {
            let productId = $(this).data('id');
            let productStatus = $(this).data('status');

            $.ajax({
                type: 'PUT',
                url: 'mainproduct/rated',
                data: {
                    product_id: productId,
                    top_rated: productStatus,
                    '_token': token
                },

                success: function(data) {
                    swal({
                        title: "Status updated !",
                        icon: "success",
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                    });
                    productinfo.ajax.reload();
                },
                error: function(error) {
                    console.log('error');
                }

            });
        });
        // feature
        $(document).on('click', '#productfeaturstatusBtn', function() {
            let productId = $(this).data('id');
            let productStatus = $(this).data('status');

            $.ajax({
                type: 'PUT',
                url: 'product/featur',
                data: {
                    product_id: productId,
                    frature: productStatus,
                    '_token': token
                },

                success: function(data) {
                    swal({
                        title: "Status updated !",
                        icon: "success",
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                    });
                    productinfo.ajax.reload();
                },
                error: function(error) {
                    console.log('error');
                }

            });
        });

        // best sell
        $(document).on('click', '#productbeststatusBtn', function() {
            let productId = $(this).data('id');
            let productStatus = $(this).data('status');

            $.ajax({
                type: 'PUT',
                url: 'product/best-selling',
                data: {
                    product_id: productId,
                    best: productStatus,
                    '_token': token
                },

                success: function(data) {
                    swal({
                        title: "Status updated !",
                        icon: "success",
                        showCancelButton: true,
                        focusConfirm: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes",
                        cancelButtonText: "No",
                    });
                    productinfo.ajax.reload();
                },
                error: function(error) {
                    console.log('error');
                }

            });
        });
        
        $(document).on('change', '#category_id', function() {
            productinfo.ajax.reload();
        });
        $(document).on('change', '#code', function() {
            productinfo.ajax.reload();
        });

    });
</script>

<script type="text/javascript">
    function setsubcategory() {
        var sub_id = $('#category_id').val();
        $.ajax({
            type: 'GET',
            url: 'get/subcategory/' + sub_id,

            success: function(data) {
                $('#sub_category_id').html('');

                for (var i = 0; i < data.length; i++) {
                    $('#sub_category_id').append(`
                            <option value="` + data[i].id + `" >` + data[i].sub_category_name + `</option>
                        `)
                }
            },
            error: function(error) {
                console.log('error');
            }
        });
    }

    function editsetsubcategory() {
        var sub_id = $('#editcategory_id').val();
        $.ajax({
            type: 'GET',
            url: 'get/subcategory/' + sub_id,

            success: function(data) {
                $('#editsub_category_id').html('');

                for (var i = 0; i < data.length; i++) {
                    $('#editsub_category_id').append(`
                            <option value="` + data[i].id + `" >` + data[i].sub_category_name + `</option>
                        `)
                }
            },
            error: function(error) {
                console.log('error');
            }
        });
    }
</script>
<script>
    var loadFile = function(event) {
        var output = document.getElementById('prevImage');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    var galleryloadFile = function(event) {
        // document.getElementById("previmg").style.display = "none";
        var output = document.getElementById('galleryprevImage');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };

    var editloadFile = function(event) {
        $('#previmg').html('');
        var output = document.getElementById('editprevImage');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
    var editgalleryloadFile = function(event) {
        // document.getElementById("previmg").style.display = "none";
        var output = document.getElementById('editgalleryprevImage');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function() {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>


<script>
    var PostImages = [];

    function prevPost_Img() {
        var PostImage = document.getElementById('PostImage').files;

        for (i = 0; i < PostImage.length; i++) {
            if (check_duplicate(PostImage[i].name)) {
                PostImages.push({
                    "name": PostImage[i].name,
                    "url": URL.createObjectURL(PostImage[i]),
                    "file": PostImage[i],
                });
            } else {
                alert(PostImage[i].name + 'is already added to your list');
            }
        }

        document.getElementById("prevFile").innerHTML = PostImage_show();

    }

    function check_duplicate(name) {
        var PostImage = true;
        if (PostImages.length > 0) {
            for (e = 0; e < PostImages.length; e++) {
                if (PostImages[e].name == name) {
                    PostImage = false;
                    break;
                }
            }
        }
        return PostImage;
    }

    function PostImage_show() {
        var PostImage = "";
        PostImages.forEach((i) => {
            PostImage += `<div class="postImg" style="width:25%;float:left;position:relative;">
                                <img src="` + i.url + `" alt="" id="previewImage" style="border-radius: 10px;width:100%;padding:5px;">
                                <span onclick="removeSelectedPostImage(` + PostImages.indexOf(i) + `)" style="position: absolute;right: 0;cursor: pointer;font-size: 31px;color: red;margin-top: -8px;margin-right: 8px;">&times</span>
                            </div>`;
        })
        return PostImage;
    }

    function removeSelectedPostImage(e) {
        PostImages.splice(e, 1);
        document.getElementById("prevFile").innerHTML = PostImage_show();
    }

    var editPostImages = [];

    function editprevPost_Img() {
        $('#viewprevFile').html('');
        var editPostImage = document.getElementById('editPostImage').files;

        for (i = 0; i < editPostImage.length; i++) {
            if (check_duplicate(editPostImage[i].name)) {
                editPostImages.push({
                    "name": editPostImage[i].name,
                    "url": URL.createObjectURL(editPostImage[i]),
                    "file": editPostImage[i],
                });
            } else {
                alert(editPostImage[i].name + 'is already added to your list');
            }
        }

        document.getElementById("editprevFile").innerHTML = editPostImage_show();

    }

    function check_duplicate(name) {
        var editPostImage = true;
        if (editPostImages.length > 0) {
            for (e = 0; e < editPostImages.length; e++) {
                if (editPostImages[e].name == name) {
                    editPostImage = false;
                    break;
                }
            }
        }
        return editPostImage;
    }

    function editPostImage_show() {
        var editPostImage = "";
        editPostImages.forEach((i) => {
            editPostImage += `<div class="postImg" style="width:25%;float:left;position:relative;">
                                <img src="` + i.url + `" alt="" id="previewImage" style="border-radius: 10px;width:100%;padding:5px;">
                                <span onclick="removeSelectededitPostImage(` + editPostImages.indexOf(i) + `)" style="position: absolute;right: 0;cursor: pointer;font-size: 31px;color: red;margin-top: -8px;margin-right: 8px;">&times</span>
                            </div>`;
        })
        return editPostImage;
    }

    function removeSelectededitPostImage(e) {
        editPostImages.splice(e, 1);
        document.getElementById("editprevFile").innerHTML = editPostImage_show();
    }
</script>
<!-- summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

@endsection
