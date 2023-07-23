



<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addModalLabel">add service</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ route('services.store') }}" method="post">
            @csrf
            <div class="card-body">
                <label for="exampleInputEmail1">service name</label>
                <input class="form-control form-control-lg" type="text" name="name">
                <br>
                <label for="exampleInputPassword1">description</label>
                <input type="text" name="description" class="form-control">
                <br>
                <label for="exampleInputPassword1">price</label>
                <input type="integer" name="price" class="form-control">
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
