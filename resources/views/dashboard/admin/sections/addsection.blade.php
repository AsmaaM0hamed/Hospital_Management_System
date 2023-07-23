<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">add section</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('sections.store') }}" method="post">
            @csrf
            <div class="card-body">
                <label for="exampleInputEmail1">section name</label>
                <input class="form-control form-control-lg" type="text" name="name">
                <br>
                <label for="exampleInputPassword1">والوصف</label>
                <input type="text" name="description" class="form-control">

              </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">add</button>
        </form>
        </div>
      </div>
    </div>
  </div>
