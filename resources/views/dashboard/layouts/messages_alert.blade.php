{{-- insert --}}
@if (session()->has('add'))
<div class="alert alert-success" role="alert">
   {{ session()->get('add'); }}
  </div>
@endif

{{-- update --}}
@if (session()->has('update'))
<div class="alert alert-warning" role="alert">
   {{ session()->get('update'); }}
  </div>
@endif

{{-- delete --}}

@if (session()->has('delete'))
<div class="alert alert-danger" role="alert">
   {{ session()->get('delete'); }}
  </div>
@endif
{{-- indalid image --}}
@if (session()->has('indalid'))
<div class="alert alert-danger" role="alert">
   {{ session()->get('indalid'); }}
  </div>
@endif
