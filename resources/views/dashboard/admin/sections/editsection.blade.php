@extends('dashboard.layouts.master')

@section('title')
    edit section
@endsection

@section('content')
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">edit section</h3>
    </div>

<form action="{{ route('sections.update', $section->id) }}" method="post">
    @csrf
    @method('put')
    <div class="card-body">
<div class="form-group">
    <label for="exampleInputPassword1">ادخل الاسم </label>
    <input type="text" name="name" value="{{ $section->name }}"class="form-control">
</div>
<div class="form-group">
    <label for="exampleInputPassword1">والوصف</label>
    <input type="text" name="description" value="{{ $section->description }}" class="form-control">
</div>
<div class="modal-footer">
  <
  <button type="submit" class="btn btn-warning">Save changes</button>
</div>
    </div>
</form>
</div>
@endsection
