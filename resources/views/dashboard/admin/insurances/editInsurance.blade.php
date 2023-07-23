@extends('dashboard.layouts.master');

@section('title')
    edit insurances
@endsection




@section('content')

<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">edit insurances</h3>
    </div>

<form action="{{ route('insurances.update',$insurances->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">name</label>
            <input type="text" name="name" value="{{  $insurances->name }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">insurance_code</label>
            <input type="text" name="insurance_code" value="{{  $insurances->insurance_code }}"class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">discount_percentage</label>
            <input type="text" name="discount_percentage" value="{{  $insurances->discount_percentage }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Company_rate</label>
            <input type="text" name="Company_rate" value="{{  $insurances->Company_rate }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">notes</label>
            <input type="text" name="notes"value="{{  $insurances->notes }}"  class="form-control">
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-success">edit doctor</button>
        </div>
    </div>
</form>
</div>
@endsection
