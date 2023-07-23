@extends('dashboard.layouts.master')

@section('title')
    Insurances
@endsection

@section('content')

@include('dashboard.layouts.messages_alert')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Insurances Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div >
            <a type="button" class="btn btn-success" href="{{ route('insurances.create') }}" >
                add Insurances
            </a>

          </div>  <br>
      <table id="example" class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>name</th>
           <th>insurance_code</th>
           <th>discount_percentage</th>
           <th>Company_rate</th>
            <th>notes</th>
            <th >edit</th>
            <th>delet</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($Insurances as $Insurance)
            <tr>
                <td>{{ $loop->index+1 }}</td>
              <td>{{ $Insurance->name }}</td>
              <td>{{ $Insurance->insurance_code }}</td>
                <td>{{ $Insurance->discount_percentage }}</td>
                <td>{{ $Insurance->Company_rate }}</td>
                <td>{{$Insurance->notes }} </td>
                <td>
                    <a href="{{route('insurances.edit', $Insurance->id) }}"type="button" class="btn btn-warning" >
                       edit</a>
                </td>
                <td>
                    <form action="{{ route('insurances.destroy', $Insurance->id )  }}" method="post">
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



