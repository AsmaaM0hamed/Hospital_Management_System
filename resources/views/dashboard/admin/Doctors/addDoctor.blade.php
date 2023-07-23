@extends('dashboard.layouts.master');

@section('title')
    add Doctors
@endsection




@section('content')


@include('dashboard.layouts.messages_alert')


<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">add doctor</h3>
    </div>

<form action="{{ route('doctors.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="email" name="email"  class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"> password </label>
            <input type="password" name="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleSelectBorder">section</label>
            <select class="custom-select form-control-border" name="section_id" id="exampleSelectBorder">
             @foreach ($sections as $section)
             <option value="{{ $section->id }}">{{ $section->name}}</option>
             @endforeach


            </select>
          </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" name="image" class="form-control">
        </div>

        <div class="modal-footer">
        <button type="submit" class="btn btn-success">add doctor</button>
        </div>
    </div>
</form>
</div>
@endsection
