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
        text-overflow:ellipsis !important;
        overflow: hidden !important;
        max-width:1px !important;
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






<div class="card shadow p-4 mb-4 bg-white d-flex flex-colum mb-3 container"  style="width:90% ;height:90%">
    <br>
   <table   class=" row-border hover order-column table  yajra-datatable ">
          <thead>
              <tr>
                  <th class="text-center">#</th>
                  <th class="text-center">المرض</th>
                  <th class="text-center ">أسم  الطفل</th>
                  <th class="text-center  " >  العمر</th>
                  <th class="text-center  ">أسم ولي الامر</th>
                  <th class="text-center " >البريد الالكتروني</th>
                  <th class="text-center" >النسبه </th>
                  <th class="text-center" > التشخيص </th>


              </tr>
          </thead>
          <tbody>

          </tbody>
   </table>
  </div>

@include('admin.pages.scripts')
<script  type="text/javascript">
    $(function () {
        $.fn.dataTable.ext.errMode = 'throw';
    var table = $('.table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.Result.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'child_name', name: 'child_name'},
            {data: 'age', name: 'age'},
            {data: 'parent_name', name: 'parent_name'},
            {data: 'email', name: 'email'},
            {data: 'percentage', name: 'percentage'},
            {data: 'possibilityOfInjury', name: 'possibilityOfInjury'},
            
        ],

    });
});

</script>






@endsection
