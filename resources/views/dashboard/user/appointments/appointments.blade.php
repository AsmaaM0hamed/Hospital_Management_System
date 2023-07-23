@extends('dashboard.layouts.master')

@section('title')
appointments
@endsection

@section('content')
@include('dashboard.layouts.messages_alert')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">appointments Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div >
            <a type="button" class="btn btn-success" href="{{ route('appointments.create') }}" >
                add appointments
            </a>

          </div>  <br>
      <table id="example" class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>

            <th>doctor</th>

           <th>date</th>
           <th>time</th>
           <th>status</th>

            <th>delet</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                <td>{{ $loop->index+1 }}</td>
              <td>{{ $appointment->doctor->name }}</td>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->time }}</td>
                @if ( $appointment->status==1)
                <td>  <a type="submit" href="#"  class="btn btn-warning"> waiting</a></td>
                @elseif ( $appointment->status==2)
                <td>  <a type="submit" href="#"  class="btn btn-success"> Accept</a></td>
                @else
                <td>  <a type="submit"  href="#" class="btn btn-danger">Reject</a></td>
                @endif


                <td>
                    <form action="{{ route('appointments.destroy', $appointment->id )  }}" method="post">
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
