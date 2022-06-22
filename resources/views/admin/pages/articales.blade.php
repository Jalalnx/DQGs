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
    <div class="container  text-center" style="width:90% ;">

        <div class=" justify-content-center row">

        <form method="POST" action="{{ route('admin.articales.add') }}">
            @csrf

            <!-- Post Title -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <input style=" text-align: right;" type="text" class="form-control  card shadow" name="title" id="title"
                    placeholder="  ادخل العنوان" required autofocus>
                    </div>

                    <button type="submit" class="btn btn-success">حفظ</button>
                </div>

                <div class="row mb-3">
                    <textarea class="form-control card shadow" id="content" name="content"placeholder="المحتوي" rows="100" cols="100">
                    </textarea>
                    </div>
                </div>

        </form>

        <div class ="col-14  justify-content-center " style="width:90% ; right: 35px;
        width: 100%;">

            <div class=" card shadow p-5">

                <table class="  hover order-column content_articales table  yajra-datatable ">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">العنوان</th>
                            <th class="text-center">المحتوي</th>
                            <th class="text-center">العمليات</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>


            </div>


        </div>

    </div>

</div>


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      ...
    </div>
  </div>
</div>


@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(function() {
            var table = $('.content_articales').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('admin.articales.list') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'title',
                        name: 'title'
                    },
                    {
                        data: 'content',
                        name: 'content'
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

        $('.delete-articale').click(function(e) {
            e.preventDefault() // Don't post the form, unless confirmed
            if (confirm('هل انت متأكد من مسح بيانات ?')) {
                // Post the form
                $(e.target).closest('form').submit() // Post the surrounding form
            }
        });

        $('.articale-add').click(function(e) {
            e.preventDefault() // Don't post the form, unless confirmed

            $(e.target).closest('form').submit() // Post the surrounding form

        });
    </script>
@endsection
