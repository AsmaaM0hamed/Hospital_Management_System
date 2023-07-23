@extends('dashboard.layouts.master')

@section('title')
    Doctors
@endsection

@section('content')

@include('dashboard.layouts.messages_alert')

<div class="card">
    <div class="card-header">
      <h3 class="card-title">Doctors Table</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <div >
            <a type="button" class="btn btn-success" href="{{ route('doctors.create') }}" >
                add Doctors
            </a>
            <button type="button" class="btn btn-danger" id="btn_delete_all">delete doctors</button>

          </div>  <br>
      <table id="example" class="table table-bordered">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th><input name="select_all"  id="example-select-all"  type="checkbox"/></th>
            <th>image</th>
            <th>name</th>
            <th> section name</th>
            <th>price</th>
            <th>phone</th>
            <th>email</th>
            <th >state</th>
            <th >edit</th>
            <th>delet</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
            <tr>
                <td>{{ $loop->index+1 }}</td>
                <td>
                    <input type="checkbox" name="delete_select" value="{{$doctor->id}}" class="delete_select">
                </td>

                <td>
                    @if ($doctor->image)
                    <img style="width: 60px;height: 60px; border-radius: 50%" src="{{ asset('dashboard/image/Doctor/'.$doctor->image->imagename) }}" >
                    @else
                        <img style="width: 60px;height: 60px; border-radius: 50%"  src="{{ asset('dashboard/image/Doctor/Doctor.webp') }}" alt="">
                    @endif
                </td>
              <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->section->name }}</td>
                <td>{{ $doctor->price }}</td>
                <td>{{$doctor->phone }} </td>
                <td> {{$doctor->email }} </td>

                @if ($doctor->status==1)
                <td>  <a type="submit" href="{{ route('doctor.status',$doctor->id ) }}"  class="btn btn-success"> active</a></td>
                @else
                <td>  <a type="submit"  href="{{ route('doctor.status',$doctor->id ) }}" class="btn btn-danger">not active</a></td>
                @endif
                <td>
                    <a href="{{route('doctors.edit', $doctor->id) }}"type="button" class="btn btn-warning" >
                       edit</a>
                </td>
                <td>
                    <form action="{{ route('doctors.destroy','id')  }}" method="post">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{ $doctor->id }}">
                    <input type="hidden"name="page" value="1">
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

<!--delet select Modal -->
<div class="modal fade" id="delete_select" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">حذف الاطباء</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('doctors.destroy', 'test') }}" method="post">
                @method('delete')
                @csrf
                <div class="modal-body">
                    <h5>هل انت متاكد من الحذف</h5>
                    <input type="hidden" id="delete_select_id" name="delete_select_id" value=''>
                    <input type="hidden"name="page" value="2">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
            </form>
        </div>
    </div>
</div>



@endsection


@section('js')
<script>
    $(function() {
        jQuery("[name=select_all]").click(function(source) {
            checkboxes = jQuery("[name=delete_select]");
            for(var i in checkboxes){
                checkboxes[i].checked = source.target.checked;
            }
        });
    })
</script>


<script type="text/javascript">
    $(function () {
        $("#btn_delete_all").click(function () {
            var selected = [];
            $("#example input[name=delete_select]:checked").each(function () {
                selected.push(this.value);
            });

            if (selected.length > 0) {
                $('#delete_select').modal('show')
                $('input[id="delete_select_id"]').val(selected);
            }
        });
    });
</script>


@endsection
