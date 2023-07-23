@extends('dashboard.layouts.master');

@section('title')
    add appointments
@endsection




@section('content')


@include('dashboard.layouts.messages_alert')


<div class="card card-success">
    <div class="card-header">
      <h3 class="card-title">add appointments</h3>
    </div>
    <form action="{{ route('appointments.store') }}" method="post" >
        @csrf
        <div class="card-body">

                    <input type="hidden" name="user_id" value="{{ Auth::id() }}" class="form-control">

                    <div class="form-group">
                        <label for="department_id">القسم</label>
                        <select name="department_id" class="form-control" id="department_id">
                            <option value="">يرجى اختيار القسم</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->name }}</option>
                            @endforeach
                        </select>
                    </div>


                    <div class="form-group">
                        <label for="doctor_id">الطبيب</label>
                        <select name="doctor_id" class="form-control" id="doctor_id">
                            <option value="">يرجى اختيار الطبيب</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">date</label>
                    <input type="date" name="date" class="form-control">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">time</label>
                    <input type="time" name="time" class="form-control">
                </div>


                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">add appointments</button>
                    </div>
                </div>
            </div>
    </form>
</div>
@endsection



@section('js')
<script>
$(document).ready(function() {
    $('#department_id').on('change', function() {
        var departmentId = $(this).val();
        if(departmentId) {
            $.ajax({
                url: '/get-doctors/' + departmentId,
                type: "GET",
                dataType: "json",
                success:function(data) {
                    $('#doctor_id').empty();
                    var doctors = $.map(data, function(doctor) {
                        return '<option value="'+ doctor.id +'">'+ doctor.name +'</option>';
                    });
                    $('#doctor_id').append(doctors);
                }
            });
        }else{
            $('#doctor_id').empty();
        }
    });
});
</script>
@endsection
