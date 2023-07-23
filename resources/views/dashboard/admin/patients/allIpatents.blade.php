@extends('dashboard.layouts.master')

@section('title')
    patients
@endsection

@section('content')

@include('dashboard.layouts.messages_alert')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">patients Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div >
            <a type="button" class="btn btn-success" href="{{ route('patients.create') }}" >
                add patients
            </a>

          </div>  <br>
      <table id="example" class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>name</th>
           <th>email</th>
           <th>Address</th>
           <th>Phone</th>
            <th>age</th>
            <th>Gender</th>
            <th>Blood_Group</th>
            <th >edit</th>
            <th>delet</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
            <tr>
                <td>{{ $loop->index+1 }}</td>
              <td>{{ $patient->name }}</td>
              <td>{{ $patient->email }}</td>
                <td>{{ $patient->Address }}</td>
                <td>{{ $patient->Phone }}</td>
                <td>{{$patient->age }} </td>
                <td>{{$patient->Gender }} </td>
                <td>{{$patient->Blood_Group }} </td>
                <td>
                    <a href="{{route('patients.edit', $patient->id) }}"type="button" class="btn btn-warning" >
                       edit</a>
                </td>
                <td>
                    <form action="{{ route('patients.destroy', $patient->id )  }}" method="post">
                    @csrf
                    @method('delete')
                   <button type="submit" class="btn btn-danger">delet</button>

                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
    <div class="card-footer clearfix">
      <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
      </ul>
    </div>


  </div>





@endsection



