@extends('dashboard.layouts.master');

@section('title')
    add patients
@endsection




@section('content')


@include('dashboard.layouts.messages_alert')


<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">add patients</h3>
    </div>

<form action="{{ route('patients.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Address</label>
            <input type="text" name="Address" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Phone</label>
            <input type="text" name="Phone" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">age</label>
            <input type="text" name="age" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleSelectBorder">Gender</label>
            <select class="custom-select form-control-border" name="Gender" >
             <option value="male">male</option>
             <option value="female">female</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleSelectBorder">Blood_Group</label>
            <select class="custom-select form-control-border" name="Blood_Group" >
             <option value="o">o</option>
             <option value="A">A</option>
             <option value="B">B</option>
             <option value="AB">AB</option>
             <option value="O+">O+</option>
             <option value="A-">A-</option>

            </select>
          </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-success">add patients</button>
        </div>
    </div>
</form>
</div>
@endsection
