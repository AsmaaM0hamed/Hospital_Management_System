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
        <br>
      <table id="example" class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>

            <th>patint</th>

           <th>date</th>
           <th>time</th>
           <th>status</th>

            <th>edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($appointments as $appointment)
            <tr>
                <td>{{ $loop->index+1 }}</td>
              <td>{{ $appointment->user->name }}</td>
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
                    <a type="button" class="btn btn-info" data-toggle="modal" href="#exampleModal{{ $appointment->id}}" >
                        update status
                    </a>
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

  <div class="modal fade" id="exampleModal{{ $appointment->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">update</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('appoints.update' ,$appointment->id) }}" method="post">
            @csrf
            @method('put')
            <div class="card-body">

                <div class="form-group">
                    <label for="status">update</label>
                    <select name="status" class="form-control" id="status">
                        <option value="2"> Accept </option>
                        <option value="3"> Reject </option>
                    </select>
                </div>
              </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">save</button>
        </form>
        </div>
      </div>
    </div>
  </div>

@endsection
