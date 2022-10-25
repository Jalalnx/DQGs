@extends('admin.layouts.app')
@section('styles')
    <style>
        .card {

            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 20px;
            text-align: center;
        }

        .longTextCss {
            white-space: nowrap !important;
            text-overflow: ellipsis !important;
            overflow: hidden !important;
            max-width: 1px !important;
        }

        abbr[title] {
            text-decoration: none !important;
        }

        table tr:hover td {
            text-overflow: initial;
            white-space: normal;
        }
    </style>
@endsection
@section('content')
    <div class="container mt-5">

        @if (session('message'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Dashboard') }}</div>

                            <div class="card-body">

                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>


                                {{ __('You are logged in!') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <form action="{{ route('admin.diseas.add') }}" method="post" class="shadow p-4 mb-4 bg-white"
            enctype="multipart/form-data"
            style=" justify-content: space-around !important;
    display: flex !important;
    width:92%;
    align-content: center !important;
    border-radius: 11px !important;
    margin-right: 40px !important;

    align-items: center !important;
    /* justify-content: start; */
    align-content: baseline !important;">
            @csrf
            {{ csrf_field() }}

            <div class="form-group ">
                <input type="text" class="form-control" id="name" name="name" placeholder="المرض">
            </div>

            <div class="form-group ">
                <textarea class="form-control" id="description" rows="2" name="description" placeholder="الوصف"></textarea>
            </div>
            <div class="form-group ">
                <textarea class="form-control" id="Diagnosis" rows="2" name="Diagnosis" placeholder="التشخيص"></textarea>
            </div>

            <div class="form-group ">
                <button type="submit" class="btn  btn-primary Diseas-add">أضافه </button>
            </div>

        </form>
    </div>




    <div class="card shadow p-4 mb-4 bg-white d-flex flex-colum mb-3 container" style="width:90% ;height:90%">


        <br>

        <table class=" row-border hover order-column table  yajra-datatable ">
            <thead>
                <tr>
                    <th class="text-center">#</th>
                    <th class="text-center">المرض</th>
                    <th class="text-center  " style="max-width:60px;">الوصف</th>
                    <th class="text-center "style="max-width:60px;">التشخيص</th>
                    <th class="text-center" style="width:60px;">عدد الاسئله </th>

                    <th class="text-center">العمليات</th>

                </tr>
            </thead>
            <tbody>

            </tbody>

        </table>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function() {
            console.log('befor');
            var table = $('.table ').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.diseas.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'description',
                        name: 'description'
                    },
                    {
                        data: 'Diagnosis',
                        name: 'Diagnosis'
                    },
                    {
                        data: 'Question',
                        name: 'Question'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: true
                    },
                ],

            });
            $('#table tbody')
                .on('mouseenter', 'td', function() {
                    var colIdx = table.cell(this).index().column;

                    $(table.cells().nodes()).removeClass('highlight');
                    $(table.column(colIdx).nodes()).addClass('highlight');
                });


        });

        $('.delete-diseas').click(function(e) {
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('هل انت متأكد من مسح بيانات ?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });

        $('.Diseas-add').click(function(e) {
            e.preventDefault() // Don't post the form, unless confirmed

            $(e.target).closest('form').submit() // Post the surrounding form

        });



        console.log('aftre');
    </script>
@endsection
