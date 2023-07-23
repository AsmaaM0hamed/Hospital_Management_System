@extends('dashboard.layouts.master')

@section('title')
    sections
@endsection

@section('content')

@include('dashboard.layouts.messages_alert')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">sections Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div >
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >
                add sections
              </button>

          </div>  <br>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>name</th>
            <th>description</th>
            <th>created_at</th>
            <th >edit</th>
            <th>delet</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>{{ $section->name }}</td>
                <td>
              {{ \Str::limit($section->description,50) }}

                </td>
                <td>{{ $section->created_at->diffForHumans() }}</td>
                <td>
                    <a href="{{route('sections.edit', $section->id) }}"type="button" class="btn btn-warning" >
                       edit</a>
                </td>
                <td>
                    <form action="{{ route('sections.destroy', $section->id)  }}" method="post">
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
    @include('dashboard.admin.sections.addsection')


@endsection
