@extends('admin.master')

@section('maincontent')
<div class="container-fluid pt-4 px-4">
    <div class="pagetitle row">
        <div class="col-6">
            <h1><a href="{{ url('/admin/dashboard') }}">Dashboard</a></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/admin/dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Account Report</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-lg-12">
                            <div class="form-row">
                                <div class="form-group col-md-2 p-2">
                                    <label for="inputCity" class="col-form-label">Start Date</label>
                                    <input type="text" class="form-control datepicker" id="startDate"
                                        value="<?php echo date('Y-m-d'); ?>" placeholder="Select Date">
                                </div>
                                <div class="form-group col-md-2 p-2">
                                    <label for="inputCity" class="col-form-label">End Date</label>
                                    <input type="text" class="form-control datepicker" id="endDate"
                                        value="<?php echo date('Y-m-d'); ?>" placeholder="Select Date">
                                </div>

                                <div class="form-group col-md-1 pt-2" style="margin-top: 35px;">
                                    <button class="btn btn-info btn-print-accountreport"><i class="fas fa-print"></i>
                                        Print</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table id="expreportTable" class="table table-centered table-nowrap mb-0" style="width: 100%">
                            <thead class="thead-light">
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Title</th>
                                    <th>Account</th>
                                    <th>File</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        //token
        var token = $("input[name='_token']").val();
        //date picker
        $(".datepicker").flatpickr();

        var table = $("#expreportTable").DataTable({
            type: "GET",
            ajax: {
                url: "{{ url('admin/account/report/data') }}",
                data: {
                    startDate: function() {
                        return $('#startDate').val()
                    },
                    endDate: function() {
                        return $('#endDate').val()
                    }
                }
            },
            ordering: false,
            paging: false,
            columns: [
                {
                    data: 'id'
                },

                {
                    data: "date"
                },
                {
                    data: "title"
                },
                {
                    data: 'amount'
                },
                {
                    data: 'file',
                    name: 'file',
                    render: function(data, type, full, meta) {
                        return "<img src=http://localhost/rashi/" + data + " height=\"40\" alt='No Image'/>";
                    }
                }
            ],
            lengthChange: false,
            bFilter: false,
            search: false,
            dom: '<"row"<"col-sm-6"Bl><"col-sm-6"f>>' +
                '<"row"<"col-sm-12"<"table-responsive"tr>>>' +
                '<"row"<"col-sm-5"i><"col-sm-7"p>>',
            buttons: {
                buttons: [{
                    extend: 'print',
                    text: 'Print',
                    footer: true,
                    title: function() {
                        var printTitle = 'Purchese Report';
                        return printTitle;
                    },
                    exportOptions : {
                        stripHtml : false,
                        columns: [ 0, 1, 2, 3, 4]
                    },
                    customize: function(win) {
                        $(win.document.body).find('h1').css('text-align', 'center');
                        $(win.document.body).find('h1').after(
                            '<p style="text-align: center">From : ' + $('#startDate').val() + ' - To : ' + $('#endDate').val() + '</p>');

                    }
                }]
            },
            language: {
                paginate: {
                    previous: "<i class='fas fa-chevron-left'>",
                    next: "<i class='fas fa-chevron-right'>"
                }
            },
            drawCallback: function() {
                $(".dataTables_paginate > .pagination").addClass("pagination-sm");
                $('.dt-buttons').hide();
            },
            footerCallback: function() {
                var api = this.api();
                var numRows = api.rows().count();
                $('.total').empty().append(numRows);

                var intVal = function(i) {
                    return typeof i === "string" ? i.replace(/[\$,]/g, "") * 1 : typeof i ===
                        "number" ? i : 0;
                };

            }

        });


        $(document).on('click', '.btn-print-accountreport', function() {
            $(".buttons-print")[0].click();
        });
        $(document).on('change', '#startDate', function() {
            table.ajax.reload();
        });
        $(document).on('change', '#endDate', function() {
            table.ajax.reload();
        });

    });
</script>



<style>
    .card-box {
        background-color: #fff;
        padding: 1.5rem;
        -webkit-box-shadow: 0 1px 4px 0 rgb(0 0 0 / 10%);
        box-shadow: 0 1px 4px 0 rgb(0 0 0 / 10%);
        margin-bottom: 24px;
        border-radius: 0.25rem;
    }

    a {
        text-decoration: none;
    }


    .form-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px;
    }

    .select2-container--default .select2-selection--single {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.9rem + 2px);
        padding: 0.3rem 0.9rem;
        font-size: .875rem;
        font-weight: 400;
        line-height: 1.5;
        color: #383b3d;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.2rem;
    }

    span.select2-selection__arrow {
        margin-top: 5px;
    }
</style>



@endsection
