@extends('admin.layouts.app')


@section('content')

<div class="container mt-2 " style="width:90%;">


        <div class="row">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
            {{ session('status') }}
            </div>
            @endif

<div class="col" >


 <form action="{{ route('admin.Question.add') }}" method="post" class="shadow p-4 mb-4 bg-white" enctype="multipart/form-data"
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



        <div class="row ">

        <div class="col" style="width:400px!importan;">
        <div class="form-group   m-3">
            <input type="text" class="form-control" id="Question" name="Question" placeholder="{{('السؤال')}}">
        </div>
        </div>

        <div class="col">
        @php  $Diseas = App\Models\Diseas::all(); @endphp
        <div class="input-group m-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="diseas_id">{{('الامراض')}}</label>
        </div>
        <select class="custom-select" name="diseas_id" id="diseas_id">
            <option selected>{{('لاختيار....')}}</option>
         @php
          if($Diseas){
            foreach ($Diseas as $D ) {
            echo '<option value="'.$D->id.'">'.$D->name.'</option>' ;
          }
         }@endphp

        </select>
        </div>
        </div>




        </div>





 <div class="form-group  m-3 ">
                <button type="submit" class="btn  btn-primary Question-add">{{('أضافه')}} </button>

        </div>


    </form>
            </div>
        </div>

        <div class ="row">

        <div class="col card p-4 mb-4 shadow" style="width:60%;">

                    <table   class=" mt-5 hover order-column Q table  yajra-datatable ">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th class="text-center">السؤال</th>
                                    <th class="text-center">المرض</th>
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

</div>


<script  type="text/javascript">
    $(function () {
        console.log('befor');
    var table = $('.Q ').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.Question.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'Question', name: 'name'},
            {data: 'diseas_id', name: 'diseas_id'},
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

     $('.delete-diseas').click(function(e){
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



console.log('aftre');
</script>


@endsection
