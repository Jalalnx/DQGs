@extends('admin.layouts.app')
@section('styles')
    <style>
        .modal-backdrop.show {
            opacity: 1.5 !important;
            z-index: -100 !important;
            align-items: right !important;
        }
    </style>
@endsection
@section('content')


    <div class="alert alert-success container  text-center" style="width:90% ;">
        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal"> أضافه</button>
    </div>



    <div class="modal" id="myModal" tabindex="-1" aria-labelledby="exampleSideModal1" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header bg-info text-white">
                    <h5 class="modal-title" id="exampleSideModal1">أضافة سؤال الي الالعاب التأهيليه </h5>
                    <button type="button" class="btn-close btn-close-white" data-mdb-dismiss="modal"
                        aria-label="Close">اغلاق</button>
                </div>
                <div class="modal-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if (Session::has('success'))
                        <div class="alert alert-success text-center">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                            <p>{{ Session::get('success') }}</p>
                        </div>
                    @endif


                    <form action="{{ route('admin.games.add') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row m-5 text-center">
                            <div class="">
                                <input type="file" class="form-control" required name="image" id="imgInp">
                                {{-- <img id="blah" src="#" alt="your image" /> --}}

                                <img id="blah" src="https://via.placeholder.com/300x400?text=" alt="" class="img-fluid m-2 ">
                            </div>
                            <div class="row">

                                <div class="col">

                                    <input style=" text-align: right;" type="text" class="form-control m-2"
                                        name="question" id="question" placeholder=" السؤال..." autofocus required>

                                    <table class="table table-bordered" id="dynamicAddRemove" style="text-align: right;">
                                        <tr>
                                            <th style="width:70%">الخيارات</th>
                                            <th style="width:30%">الادوات</th>
                                        </tr>
                                        <tr>
                                            <td class="d-flex ">

                                                <div class="col-9">
                                                    <input type="text" name="data[0][option]"
                                                        placeholder=" الاجابة"class="form-control " required />
                                                </div>



                                                    <div class="">
                                                        <div class="col  d-flex">
                                                            <input class="form-check-input " value="0"
                                                                id="checkbox" type="radio" name="data[0][value]">
                                                                <label class="form-check-label m-2" for="checkbox">صحيحه</label>

                                                        </div>
                                                        <div class="col d-flex">

                                                            <input class="form-check-input " value="1"
                                                                id="checkbox" type="radio" name="data[0][value]">
                                                                <label class="form-check-label m-2" for="checkbox">خاطئه</label>
                                                        </div>
                                                    </div>



                                            </td>
                                            <td><button type="button" name="add" id="add-btn"
                                                    class="btn btn-success">أضافة مزيد</button></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-success">حفظ</button>
                    </form>

                </div>
            </div>
            <div class="modal-footer justify-content-between p-2">


        </div>
    </div>
    </div>


    <div class ="container mr-10 m-10"style="" >

        <div class=" card shadow p-5" >

                    <table   class="  hover order-column G table  yajra-datatable ">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">السؤال,</th>
                                    <th class="text-center">الصوره</th>
                                    <th class="text-center">الاجوبه</th>
                                    <th class="text-center">العمليات</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>

                    </table>


                </div>


            </div>



@endsection

@section('script')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

<script  type="text/javascript">
    $(function () {
    var table = $('.G').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.games.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'question', name: 'question'},
            {data: 'image', name: 'image'},
            {data: 'data', name: 'data'},
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: true
            },
        ],

    });

  $('#table tbody')
        .on( 'mouseenter', 'td', function () {
            var colIdx = table.cell(this).index().column;

            $( table.cells().nodes() ).removeClass( 'highlight' );
            $( table.column( colIdx ).nodes() ).addClass( 'highlight' );
        } );


  } );

     $('.delete-games').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('هل انت متأكد من مسح بيانات ?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });

        $('.Diseas-add').click(function(e){
            e.preventDefault() // Don't post the form, unless confirmed

                $(e.target).closest('form').submit() // Post the surrounding form

        });



</script>
@endsection

