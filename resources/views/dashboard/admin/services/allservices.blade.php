@extends('dashboard.layouts.master')


@section('title')
    single services
@endsection

@section('content')
@include('dashboard.layouts.messages_alert')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">services Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div >
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal" >
                add services
              </button>

          </div>  <br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>name</th>
            <th>description</th>
            <th>price</th>
            <th>status</th>
            <th >edit</th>
            <th>delet</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($services as $service)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $service->name }}</td>
                <td>
              {{ \Str::limit($service->description,50) }}

                </td>
                <td>{{ $service->price }}</td>
                @if ($service->status==1)
                <td>  <a type="submit" href="{{ route('service.status',$service->id ) }}"  class="btn btn-success"> active</a></td>
                @else
                <td>  <a type="submit"  href="{{ route('service.status',$service->id ) }}" class="btn btn-danger">not active</a></td>
                @endif
                <td>
                    <a href="{{route('services.edit', $service->id) }}"type="button" class="btn btn-warning" >
                       edit</a>

                </td>
                <td>
                    <form action="{{ route('services.destroy', $service->id)  }}" method="post">
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

  <!-- Modal insert-->
    @include('dashboard.admin.services.addservices')
{{-- edit  --}}


@endsection
