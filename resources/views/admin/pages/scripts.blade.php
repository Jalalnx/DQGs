
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>


<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script src="{{asset('js/sidebars.js')}}"></script>

<script>

imgInp.onchange = evt => {
  const [file] = imgInp.files
  if (file) {
    blah.src = URL.createObjectURL(file)
  }
}
    </script>

<script type="text/javascript">
    var i = 0;
    $("#add-btn").click(function() {
        ++i;
        $("#dynamicAddRemove").append('<tr> <td class="d-flex "><div class="col-9"><input type="text" required name="data['+i+'][option]" placeholder=" الاجابة"class="form-control" /></div><div class="col-2">  <div class=""><div class="col  d-flex"> <input class="form-check-input " value="0"id="checkbox" type="radio" name="data['+i+'][value]"> <label class="form-check-label m-2" for="game1-img2">صحيحه</label>  </div><div class="col d-flex">  <input class="form-check-input " value="1"  id="checkbox" type="radio" name="data['+i+'][value]"> <label class="form-check-label m-2" for="game1-img2">خاطئه</label>  </div> </div></td><td><button type="button" class="btn btn-danger remove-tr">حذف</button></td></tr>');
    });
    $(document).on('click', '.remove-tr', function() {
        $(this).parents('tr').remove();
    });

</script>

<script>
    $(document).ready(function() {
        toastr.options.timeOut = 10000;
        @if (Session::has('error'))
            toastr.error('{{ Session::get('error') }}');
        @elseif(Session::has('success'))
            toastr.success('{{ Session::get('success') }}');
        @endif
    });

</script>


<script>
@if(Session::has('message'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.success("{{ session('message') }}");
@endif

@if(Session::has('error'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.error("{{ session('error') }}");
@endif

@if(Session::has('info'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.info("{{ session('info') }}");
@endif

@if(Session::has('warning'))
toastr.options =
{
    "closeButton" : true,
    "progressBar" : true
}
        toastr.warning("{{ session('warning') }}");
@endif
</script>
