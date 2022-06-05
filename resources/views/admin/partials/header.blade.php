<header>

    {{-- <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">


        <div class="text-end">
          <button type="button" class="btn btn-light text-dark me-2">Login</button>
          <button type="button" class="btn btn-primary">Sign-up</button>
        </div>
      </div>
    </div> --}}
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="top:-10px;">




@auth('admin')
     <a class="navbar-brand active" href="#">  {{ auth()->user()->name }}</a>
@endauth

@guest('admin')
   <div class="text-end flex-end">

   @if (in_array(Route::currentRouteName(), ['login']))
    <script src="example.js"></script>

     <button type="button" class="btn  text-dark me-2 btn-primary">Login</button>
    @else
 <button type="button" class="btn  text-dark me-2 btn-light">Login</button>

   @endif
    {{-- <button type="button" class="btn ">Sign-up</button> --}}
    </div>
@endguest



</nav>




  </header>
