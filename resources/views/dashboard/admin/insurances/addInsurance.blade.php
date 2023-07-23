@extends('dashboard.layouts.master');

@section('title')
    add Insurances
@endsection




@section('content')


@include('dashboard.layouts.messages_alert')


<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">add Insurances</h3>
    </div>

<form action="{{ route('insurances.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">insurance_code</label>
            <input type="text" name="insurance_code" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">discount_percentage</label>
            <input type="text" name="discount_percentage" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Company_rate</label>
            <input type="text" name="Company_rate" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">notes</label>
            <input type="text" name="notes" class="form-control">
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-success">add Insurances</button>
        </div>
    </div>
</form>
</div>
@endsection
