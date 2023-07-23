@extends('dashboard.layouts.master')

@section('title')
    edit service
@endsection

@section('content')
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">edit service</h3>
    </div>

<form action="{{ route('services.update', $service->id) }}" method="post">
    @csrf
    @method('put')
    <div class="card-body">
<div class="form-group">
    <label for="exampleInputPassword1">ادخل الاسم </label>
    <input type="text" name="name" value="{{ $service->name }}"class="form-control">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">والوصف</label>
    <input type="text" name="description" value="{{ $service->description }}" class="form-control">
</div>
 <br>
<label for="exampleInputPassword1">price</label>
<input type="integer" name="price"value="{{ $service->price }}" class="form-control">
<div class="modal-footer">
  <
  <button type="submit" class="btn btn-warning">Save changes</button>
</div>
    </div>
</form>
</div>
@endsection
