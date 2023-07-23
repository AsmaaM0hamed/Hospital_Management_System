@extends('dashboard.layouts.master');

@section('title')
    edit Doctors
@endsection




@section('content')


@include('dashboard.layouts.messages_alert')


<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">edit doctor</h3>
    </div>

<form action="{{ route('doctors.update',$doctor->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group">
            <label for="exampleInputPassword1">name</label>
            <input type="text" name="name" class="form-control" value="{{ $doctor->name }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">email</label>
            <input type="email" name="email" value="{{ $doctor->email }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"> password </label>
            <input type="password" name="password" value="{{ $doctor->password }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">phone</label>
            <input type="text" name="phone" value="{{  $doctor->phone }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">price</label>
            <input type="text" name="price" value="{{ $doctor->price }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleSelectBorder">section</label>
            <select class="custom-select form-control-border" name="section_id" id="exampleSelectBorder">

                <option value="{{ $doctor->section->id }}">{{ $doctor->section->name }}</option>
            @foreach ($sections as $section)
             <option value="{{ $section->id }}">{{ $section->name}}</option>
             @endforeach


            </select>
          </div>
        <div class="form-group">
            <label for="exampleInputPassword1">image</label>
            <input type="file" name="image" class="form-control">
        </div>
       @if ($doctor->image)
       <img style="width: 125px;height: 125px; border-radius: 50%" src="{{ asset('dashboard/image/Doctor/'.$doctor->image->imagename) }}" >
       @else
           <img style="width: 125px;height: 125px; border-radius: 50%"  src="{{ asset('dashboard/image/Doctor/Doctor.webp') }}" alt="">
       @endif

        <div class="modal-footer">
        <button type="submit" class="btn btn-success">edit doctor</button>
        </div>
    </div>
</form>
</div>
@endsection
